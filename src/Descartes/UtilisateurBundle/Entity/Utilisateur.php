<?php

namespace Descartes\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */

class Utilisateur extends BaseUser implements UserInterface 
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="SEQUENCE")
    * @ORM\SequenceGenerator(sequenceName="utilisateur_id_seq", allocationSize=1,initialValue=1)
    */
    protected $id;

    /**
    * @var string
    * 
    * @ORM\Column(name="date_naissance",type="date")
    */
    private $dateNaissance;

    /**
    * @var integer
    * 
    * @ORM\Column(name="num_telephone",type="integer")
    */
    private $numTel;

    /**
    * @var boolean
    * 
    * @ORM\Column(name="sexe",type="boolean")
    */
    private $sexe;

    /**
    * @var boolean
    * 
    * @ORM\Column(name="statut",type="boolean")
    */
    private $statut;

    /**
    * @var string
    * 
    * @ORM\Column(name="ufr",type="text")
    */
    private $ufr;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255)
     */
    protected $facebookId;

    private $bdd;

    private $centreInteret;

    private $search;

    public function __construct()
    {
        parent::__construct();
        $this->setRoles(['ROLES_USER']);
        $this->dateNaissance = new \DateTime;
        $this->locked = false;
        $this->expired = false;
        $this->statut = true;
        $this->salt = null; // Sinon la connexion fail car combine pwd avec salt
    }


    public function setUtilisateur($RecupBD)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('INSERT INTO utilisateur (lastname, firstname, username, password, date_naissance, sexe, email, ufr, statut)
                                    VALUES(:nom,:prenom,:login,:pwd,:date_naissance,:sexe,:mail,:ufr,:statut)');
        $req->execute(array(
            'nom' => $this->getLastname(),
            'prenom' => $this->getFirstname(),
            'login' => $this->getUsername(),
            'pwd' => $this->getPassword(),
            'date_naissance' => $this->getDateNaissance()->format('Y-m-d'),
            'sexe' => $this->getSexe(),
            'mail' => $this->getEmail(),
            'ufr' => $this->getUfr(),
            'statut' => true )) or die(print_r($req->errorInfo()));
    }

    public function updateUtilisateur($RecupBD)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('UPDATE utilisateur 
                                    SET lastname = :nvnom, firstname = :nvprenom, password = :nvpwd, date_naissance = :nvdate, sexe = :nvsexe,
                                     email = :nvmail, ufr = :nvufr, num_telephone = :nvnum WHERE username = :login');
        $req->execute(array('nvnom' => $this->getLastname(),
                            'nvprenom' => $this->getFirstname(),
                            'nvpwd' => $this->getPassword(),
                            'nvdate' => $this->getDateNaissance()->format('Y-m-d'),
                            'nvsexe' => $this->getSexe(),
                            'nvmail' => $this->getEmail(),
                            'nvufr' => $this->getUfr(),
                            'nvnum' => $this->getNumTelephone(),
                            'login' => $this->getUsername() )) or die(print_r($req->errorInfo()));
    }


    public function getUtilisateur($login)
    {
        $req = $this->bdd->prepare('SELECT * FROM utilisateur WHERE username = :login');
        $req->execute(array('login' => $login)) or die(print_r($req->errorInfo()));

        $utilisateur = $req->fetch(); // On instancie la variable qui contiendra la ligne de l'utilisateur concerné

        $req->closeCursor(); // On ferme le cursor

        return $utilisateur;
    }

    public function rechercheUser($RecupBD, $search)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('SELECT id, lastname, firstname, username 
                                    FROM utilisateur 
                                    WHERE firstname LIKE :search OR lastname LIKE :search OR username LIKE :search');

        $req->execute(array('search' => '%'.$search.'%')) or die(print_r($req->errorInfo()));

        $resultSearch = array ();
        while ($donnees = $req->fetch())
        {
            array_push($resultSearch, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $resultSearch;
    }

    public function rechercheEvent($RecupBD, $search)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('SELECT id_event, titre, image, COUNT(id_eventc) AS nb_commentaire
                                    FROM evenement
                                    LEFT JOIN commentaire ON id_event = id_eventc
                                    WHERE titre LIKE :search 
                                    GROUP BY id_event, titre, image');

        $req->execute(array('search' => '%'.$search.'%')) or die(print_r($req->errorInfo()));

        $resultSearch = array ();
        while ($donnees = $req->fetch())
        {
            array_push($resultSearch, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $resultSearch;
    }

    //fonction qui sera utiliser pour afficher 5 contacts max avec statut true dans UserBar 
    public function getUsersFriendListS($RecupBD, $id_utilisateur)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('SELECT u.id, u.lastname, u.firstname, u.statut, u.username
                                    FROM utilisateur AS u, liste_amis AS l 
                                    WHERE l.id_utilisateur = :id_utilisateur AND l.id_utilisateur_ami = u.id AND u.statut = TRUE
                                    OR l.id_utilisateur_ami = :id_utilisateur AND l.id_utilisateur = u.id AND u.statut = TRUE
                                    ORDER BY u.lastname ASC
                                    LIMIT 10');

        $req->execute(array('id_utilisateur' => $id_utilisateur)) or die(print_r($req->errorInfo()));

        // On instancie la variable qui contiendra la liste des friends du user concerné
        $friendList = array ();
        while ($donnees = $req->fetch())
        {
            array_push($friendList, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $friendList;
    }

    // fonction qui sera utilisé pour afficher tout les contacts dans UserFriendListLayout
    public function getUsersFriendListL($RecupBD,$id_utilisateur)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('SELECT u.id, u.lastname, u.firstname, u.username 
                                    FROM utilisateur AS u, liste_amis AS l 
                                    WHERE l.id_utilisateur = :id_utilisateur AND l.id_utilisateur_ami = u.id
                                    OR l.id_utilisateur_ami = :id_utilisateur AND l.id_utilisateur = u.id
                                    ORDER BY u.lastname');

        $req->execute(array('id_utilisateur' => $id_utilisateur)) or die(print_r($req->errorInfo()));

        // On instancie la variable qui contiendra la liste des friends du user concerné
        $friendList = array ();
        while ($donnees = $req->fetch())
        {
            array_push($friendList, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $friendList;
    }

    public function isFriendWith($RecupBD,$id_utilisateur, $id_friend)
    {
        $this->bdd = $RecupBD;
        $req = $this->bdd->prepare('SELECT id_utilisateur, id_utilisateur_ami 
                                    FROM liste_amis 
                                    WHERE id_utilisateur = :id_friend AND id_utilisateur_ami = :id_utilisateur
                                    OR id_utilisateur = :id_utilisateur AND id_utilisateur_ami = :id_friend');

        $req->execute(array('id_utilisateur' => $id_utilisateur, 'id_friend' => $id_friend)) or die(print_r($req->errorInfo()));

        $IsFriendWith = array ();
        while ($donnees = $req->fetch())
        {
            array_push($IsFriendWith, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $IsFriendWith;
    }

    public function addFriend($bdd, $id_utilisateur, $id_friend)
    {
        $this->bdd = $bdd;

        $req = $this->bdd->prepare('INSERT INTO liste_amis 
                                    VALUES ((SELECT id 
                                            FROM utilisateur 
                                            WHERE id = :id_utilisateur),
                                            (SELECT id 
                                            FROM utilisateur 
                                            WHERE id = :id_friend))');

        $req->execute(array('id_utilisateur' => $id_utilisateur, 'id_friend' => $id_friend)) or die(print_r($req->errorInfo()));
    }

    public function delFriend($bdd, $id_utilisateur, $id_friend)
    {
        $this->bdd = $bdd;

        $req = $this->bdd->prepare('DELETE FROM liste_amis 
                                    WHERE id_utilisateur = :id_friend AND id_utilisateur_ami = :id_utilisateur
                                    OR id_utilisateur = :id_utilisateur AND id_utilisateur_ami = :id_friend');

        $req->execute(array('id_utilisateur' => $id_utilisateur, 'id_friend' => $id_friend)) or die(print_r($req->errorInfo()));
    }

    public function setCentreInteretUser($bdd, $id_utilisateur)
    {
        $this->bdd = $bdd;

        $req = $this->bdd->prepare('DELETE FROM interet WHERE id_utilisateur = :id_utilisateur');

        $req->execute(array('id_utilisateur' => $id_utilisateur)) or die(print_r($req->errorInfo()));

        foreach ($this->centreInteret as $interet) 
        {
            $req = $this->bdd->prepare('INSERT INTO interet (titre_interet, id_utilisateur) 
                                        VALUES (:interet,
                                                (SELECT id 
                                                FROM utilisateur 
                                                WHERE id = :id_utilisateur))');

            $req->execute(array('id_utilisateur' => $id_utilisateur, 'interet' => $interet)) or die(print_r($req->errorInfo()));
        }
    }

    public function getCentreInteretUser($bdd,$id_utilisateur)
    {
        $this->bdd = $bdd;
        $req = $this->bdd->prepare('SELECT titre_interet 
                                    FROM interet
                                    WHERE id_utilisateur = :id_utilisateur');

        $req->execute(array('id_utilisateur' => $id_utilisateur)) or die(print_r($req->errorInfo()));

        // On instancie la variable qui contiendra la liste des centres D'intérêt du user concerné
        $InterestList = array ();
        while ($donnees = $req->fetch())
        {
            array_push($InterestList, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $InterestList;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateNaissance
     *
     * @param \Date $dateNaissance
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \Date 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set numTel
     *
     * @param integer $numTel
     * @return Utilisateur
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return integer 
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     * @return Utilisateur
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Utilisateur
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set ufr
     *
     * @param string $ufr
     * @return Utilisateur
     */
    public function setUfr($ufr)
    {
        $this->ufr = $ufr;

        return $this;
    }

    /**
     * Get ufr
     *
     * @return string 
     */
    public function getUfr()
    {
        return $this->ufr;
    }

    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the full name of the user (first + last name)
     * @return string
     */
    public function getFullName()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            //$this->addRole('ROLES_USER');
        }
        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setLastname($fbdata['last_name']);
        }
    }

    public function setCentreInteret($centreInteret)
    {
        $this->centreInteret = $centreInteret;
    }

    public function getCentreInteret()
    {
        return $this->centreInteret;
    }

    public function setSearch($search)
    {
        $this->search = $search;
    }

    public function getSearch()
    {
        return $this->search;
    }
}
