<?php

namespace Descartes\EvenementBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Descartes\EvenementBundle\Entity\EvenementRepository")
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visibilite", type="boolean")
     */
    private $visibilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_participant", type="integer")
     */
    private $nombreParticipant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_realisation", type="datetime")
     */
    private $dateRealisation;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="text")
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tarif", type="text")
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_themeev", type="integer")
     */
    private $idThemeev;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_createur", type="integer")
     */
    private $idCreateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_locev", type="integer")
     */
    private $idLocev;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @Assert\File(
     *     maxSize = "1M",
     *     mimeTypes = {"image/jpeg", "image/png", "image/jpg"})
     */
    private $image;
    

	protected $bdd;
	
	public function __construct($bdRecup, $idCreateur=null)
	{
        $this->dateRealisation = new \DateTime;
		$this->bdd = $bdRecup;
		$this->visibilite = true;
		$this->nombreParticipant = 10;
		$this->idCreateur = $idCreateur;
	} 
	
	public function getListeEvenements() 
	{ 		
		$reponse = $this->bdd->query('SELECT id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme, COUNT(id_eventc) as nb_commentaire 
                                      FROM evenement
                                      LEFT JOIN utilisateur ON id_createur = id
                                      LEFT JOIN theme ON id_themeev = id_theme
                                      LEFT JOIN commentaire ON id_event = id_eventc
                                      WHERE visibilite = TRUE
                                      GROUP BY id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme
                                      ORDER BY date_realisation ASC');

		$events = array ();
		while ($donnees = $reponse->fetch())
		{
			array_push($events, $donnees);
		}

		$reponse->closeCursor();
		
		return $events;
	}

    public function updateEvent($id)
    {
        $nbAlea = rand();
        $nom_image = 'image_android'.$nbAlea;
        if($this->image!=null)$this->upload($nom_image);

        $req = $this->bdd->prepare('UPDATE evenement 
                                    SET date_realisation = :nvdate, titre = :nvtitre, description = :nvdesc, visibilite = :nvvisib,
                                     nombre_participant = :nvnbpart, adresse = :nvadresse, ville = :nvville, tarif = :nvtarif,
                                     id_themeev = :nvtheme, image = :nvimg
                                    WHERE id_event = :id');
        $req->execute(array('nvdate' => $this->dateRealisation->format('Y-M-d H:m:s'),
                            'nvtitre' => $this->titre,
                            'nvdesc' => $this->description,
                            'nvvisib' => $this->visibilite,
                            'nvnbpart' => $this->nombreParticipant,
                            'nvadresse' => $this->adresse,
                            'nvville' => $this->ville,
                            'nvtarif' => $this->tarif,
                            'nvtheme' => $this->idThemeev,
                            'nvimg' => $nom_image,
                            'id' => $id)) or die(print_r($req->errorInfo()));
    }

    public function getFiltreEvent($filtre)
    {
        $req = $this->bdd->prepare('SELECT id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme, COUNT(id_eventc) as nb_commentaire 
                                    FROM evenement
                                    LEFT JOIN utilisateur ON id_createur = id
                                    LEFT JOIN theme ON id_themeev = id_theme
                                    LEFT JOIN commentaire ON id_event = id_eventc
                                    WHERE titre_theme = :filtre
                                    GROUP BY id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme
                                    ORDER BY date_realisation ASC');
        $req->execute(array('filtre' => $filtre)) or die(print_r($req->errorInfo()));

        $filtreEvent = array();
        while ($donnees = $req->fetch())
        {
            array_push($filtreEvent, $donnees);
        }

        $req->closeCursor();

        return $filtreEvent;
    }

    public function getPopularEvent()
    {
        $req = $this->bdd->query('SELECT id_event, titre, image, sum(nb_part) as nb_participant_sortie, sum(nb_com) as nb_commentaire
                                  FROM (
                                  select e.id_event, titre, image, count(p.id_eventpa) as nb_part, 0 as nb_com
                                  from evenement e
                                  join participe p
                                  on e.id_event = p.id_eventpa
                                  group by e.id_event, e.titre, e.image
                                  UNION
                                  select e.id_event, titre, image, 0 as nb_part, count(c.id_eventc) as nb_com
                                  from evenement e
                                  join commentaire c
                                  on e.id_event = c.id_eventc
                                  group by e.id_event, e.titre, e.image
                                  ) as table_c
                                  GROUP BY table_c.id_event, table_c.titre, table_c.image
                                  ORDER BY nb_participant_sortie DESC
                                  LIMIT 5');

        $RecentEvent = array();
        while ($donnees = $req->fetch())
        {
            array_push($RecentEvent, $donnees);
        }

        $req->closeCursor();
        
        return $RecentEvent;
    }

    public function getRecentEvent()
    {
        $req = $this->bdd->query('SELECT id_event, titre, image, COUNT(id_eventc) AS nb_commentaire
                                    FROM evenement
                                    LEFT JOIN commentaire ON id_event = id_eventc
                                    WHERE visibilite = TRUE
                                    GROUP BY id_event, titre, image
                                    ORDER BY id_event DESC
                                    LIMIT 5');

        $RecentEvent = array();
        while ($donnees = $req->fetch())
        {
            array_push($RecentEvent, $donnees);
        }

        $req->closeCursor();
        
        return $RecentEvent;
    }

    public function getCommEvent($event)
    {
        $req = $this->bdd->prepare('SELECT contenue, date_commentaire, username, lastname, firstname, id
                                    FROM commentaire
                                    LEFT JOIN utilisateur ON id_utilisateurc = id
                                    WHERE id_eventc = :event
                                    ORDER BY date_commentaire DESC');
        $req->execute(array('event' => $event)) or die(print_r($req->errorInfo()));

        $CommEvent = array();
        while ($donnees = $req->fetch())
        {
            array_push($CommEvent, $donnees);
        }

        $req->closeCursor();
        
        return $CommEvent;
    }

    public function postComment($contenu, $id_event, $id_user)
    {
        $date_commentaire = new \DateTime;
        $req = $this->bdd->prepare('INSERT INTO commentaire(contenue, date_commentaire, id_utilisateurc, id_eventc)
                                    VALUES (:contenue, :date_commentaire, :id_utilisateurc, :id_eventc)');
        $req->execute(array('contenue' => $contenu, 'date_commentaire' => $date_commentaire->format('Y-M-d H:m:s'),
                            'id_utilisateurc' => $id_user, 'id_eventc' => $id_event)) or die(print_r($req->errorInfo()));
    }

    public function getMyEvent($id)
    {
        $req = $this->bdd->prepare('SELECT id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme, COUNT(id_eventc) as nb_commentaire 
                                    FROM evenement
                                    LEFT JOIN utilisateur ON id_createur = id
                                    LEFT JOIN theme ON id_themeev = id_theme
                                    LEFT JOIN commentaire ON id_event = id_eventc
                                    LEFT JOIN participe ON id_event = id_eventpa
                                    WHERE id_utilisateurpa = :id
                                    GROUP BY id_event, date_realisation, titre, username, lastname, firstname, description, visibilite, 
                                        image, titre_theme
                                    ORDER BY date_realisation ASC');

        $req->execute(array('id' => $id)) or die(print_r($req->errorInfo()));

        $myEvent = array();
        while ($donnees = $req->fetch())
        {
            array_push($myEvent, $donnees);
        }

        $req->closeCursor();

        return $myEvent;
    }

    public function getEvent($id)
    {
        $req = $this->bdd->prepare('SELECT description, visibilite, nombre_participant, adresse, date_realisation, ville, tarif, id_themeev,
                                    id_createur, titre, image
                                    FROM evenement
                                    WHERE id_event = :id_ev');
        $req->execute(array('id_ev' => $id)) or die(print_r($req->errorInfo()));

        $event = $req->fetch(); // On instancie la variable qui contiendra la ligne de l'event concerné

        $req->closeCursor(); // On ferme le cursor
        $this->description = $event[0];
        $this->visibilite = $event[1];
        $this->nombreParticipant = $event[2];
        $this->adresse = $event[3];
        $this->dateRealisation = new \DateTime;
        $this->ville = $event[5];
        $this->tarif = $event[6];
        $this->idCreateur = $event[8];
        $this->titre = $event[9];

        return $this;
    }
	
	public function getEvenement($id) 
	{ 		
		$req = $this->bdd->prepare('SELECT id_event, id_createur, date_realisation, titre, username, lastname, firstname, description, ville, adresse, visibilite, 
                                            nombre_participant,(SELECT COUNT(id_eventpa) FROM participe WHERE id_eventpa = :id_ev) AS nb_participant_sortie,
                                            tarif ,image, titre_theme, COUNT(id_eventc) AS nb_commentaire
                                    FROM evenement
                                    LEFT JOIN utilisateur ON id_createur = id
                                    LEFT JOIN theme ON id_themeev = id_theme
                                    LEFT JOIN commentaire ON id_event = id_eventc
                                    WHERE id_event = :id_ev
                                    GROUP BY id_event, id_createur, date_realisation, titre, username, lastname, firstname, description, ville, adresse, 
                                                visibilite, nombre_participant, tarif, image, titre_theme
                                    ORDER BY date_realisation ASC');
		$req->execute(array('id_ev' => $id)) or die(print_r($req->errorInfo()));

		$event = $req->fetch(); // On instancie la variable qui contiendra la ligne de l'event concerné

        $req->closeCursor(); // On ferme le cursor

        return $event;
	}

    public function getParticipant($id)
    {
        $req = $this->bdd->prepare("SELECT id, username, lastname, firstname 
                                    FROM utilisateur, participe 
                                    WHERE id_eventpa = :id_event AND id_utilisateurpa = id
                                    ORDER BY lastname ASC");
        $req->execute(array('id_event' => $id)) or die(print_r($req->errorInfo()));

        $listeParticipant = array();
        while($donnees = $req->fetch())
        {
            array_push($listeParticipant, $donnees);
        }

        $req->closeCursor();

        return $listeParticipant;
    }

    public function addParticipe($id_event, $id_user)
    {
        $req = $this->bdd->prepare('INSERT INTO participe 
                                    VALUES ((SELECT id FROM utilisateur WHERE id=:id_user),
                                            (SELECT id_event FROM evenement WHERE id_event=:id_event))');
        $req->execute(array('id_user'=>$id_user, 'id_event'=>$id_event)) or die(print_r($req->errorInfo()));
    }

    public function delParticipe($id_event, $id_user)
    {
        $req = $this->bdd->prepare('DELETE FROM participe WHERE id_utilisateurpa=:id_user AND id_eventpa=:id_event');
        $req->execute(array('id_user'=>$id_user, 'id_event'=>$id_event));
    }

    public function addNote($id_user, $id_event, $note)
    {
        $req = $this->bdd->prepare('INSERT INTO notation (id_utilisateurn, id_eventn, note_event) 
                                    VALUES ((SELECT id FROM utilisateur WHERE id=:id_user),
                                            (SELECT id_event FROM evenement WHERE id_event=:id_event), :note_event)');
        $req->execute(array('id_user'=>$id_user, 'id_event'=>$id_event,'note_event'=>$note)) or die(print_r($req->errorInfo()));
    }

    public function getNote($id)
    {
        $req = $this->bdd->prepare('SELECT AVG(note_event) AS note_moy 
                                    FROM notation 
                                    WHERE id_eventn = :id_event');
        $req->execute(array('id_event' => $id)) or die(print_r($req->errorInfo()));

        $note = $req->fetch(); // On instancie la variable qui contiendra la ligne de l'event concerné

        $req->closeCursor(); // On ferme le cursor

        return $note;
    }

    public function getNoteur($id)
    {
        $req = $this->bdd->prepare('SELECT id_utilisateurn FROM notation WHERE id_eventn = :id_event');
        $req->execute(array('id_event' => $id)) or die(print_r($req->errorInfo()));

        $listeNoteur = array();
        while($donnees = $req->fetch())
        {
            array_push($listeNoteur, $donnees);
        }

        $req->closeCursor();
        return $listeNoteur;
    }
	
	public function upload($nom_image)
    {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if ($this->image == null) {
          return;
        }

        // On garde le nom original du fichier de l'internaute
        $name = $nom_image;

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->image->move($this->getUploadRootDir(), $name);

    }

	public function getUploadDir()
	{
		// On retourne le chemin relatif vers l'image pour un navigateur
		return 'upload/imageEvent';
	}

	protected function getUploadRootDir()
	{
		// On retourne le chemin relatif vers l'image pour notre code PHP
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public function insertBd()
	{
		$nbAlea = rand();
		$nom_image = 'image_android'.$nbAlea;
		if($this->image!=null)$this->upload($nom_image);
		
		$valeurs = array(
			'titre' => $this->titre,
			'image' => $nom_image,
			'description' => $this->description,
			'adresse' => $this->adresse,
			'ville' => $this->ville,
			'tarif' => $this->tarif,
			'id_themeev' => $this->idThemeev,
			'id_createur' => $this->idCreateur,
			'date_realisation' => $this->dateRealisation->format('Y-M-d H:m:s'),
			'nombre_participant' => $this->nombreParticipant,
			'visibilite' => $this->visibilite
			);
		$req = $this->bdd->prepare('INSERT INTO evenement(titre, image, description, adresse, ville, tarif, id_themeev, id_createur, date_realisation, nombre_participant, visibilite) 
                                    VALUES(:titre, :image, :description, :adresse, :ville, :tarif, :id_themeev, :id_createur, :date_realisation, :nombre_participant, :visibilite)');
		$req->execute($valeurs) or die(print_r($req->errorInfo()));

        $req1 = $this->bdd->prepare('SELECT id_event FROM evenement
                                    WHERE titre = :titre AND image = :img AND id_createur = :idCrea');
        $req1->execute(array('idCrea' => $this->idCreateur,'titre' => $this->titre, 'img' => $nom_image)) or die(print_r($req2->errorInfo()));
        $Event = $req1->fetch();
        $req1->closeCursor();

        $req2 = $this->bdd->prepare('INSERT INTO participe(id_utilisateurpa, id_eventpa)
                                    VALUES(:id_user, :id_event)');
        $req2->execute(array('id_user' => $this->idCreateur,'id_event' => $Event[0])) or die(print_r($req2->errorInfo()));
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
     * Set description
     *
     * @param string $description
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set visibilite
     *
     * @param boolean $visibilite
     * @return Evenement
     */
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;

        return $this;
    }

    /**
     * Get visibilite
     *
     * @return boolean 
     */
    public function getVisibilite()
    {
        return $this->visibilite;
    }

    /**
     * Set nombreParticipant
     *
     * @param integer $nombreParticipant
     * @return Evenement
     */
    public function setNombreParticipant($nombreParticipant)
    {
        $this->nombreParticipant = $nombreParticipant;

        return $this;
    }

    /**
     * Get nombreParticipant
     *
     * @return integer 
     */
    public function getNombreParticipant()
    {
        return $this->nombreParticipant;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Evenement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set dateRealisation
     *
     * @param \DateTime $dateRealisation
     * @return Evenement
     */
    public function setDateRealisation($dateRealisation)
    {
        $this->dateRealisation = $dateRealisation;

        return $this;
    }

    /**
     * Get dateRealisation
     *
     * @return \DateTime 
     */
    public function getDateRealisation()
    {
        return $this->dateRealisation;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Evenement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tarif
     *
     * @param string $tarif
     * @return Evenement
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string 
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set idThemeev
     *
     * @param integer $idThemeev
     * @return Evenement
     */
    public function setIdThemeev($idThemeev)
    {
        $this->idThemeev = $idThemeev;

        return $this;
    }

    /**
     * Get idThemeev
     *
     * @return integer 
     */
    public function getIdThemeev()
    {
        return $this->idThemeev;
    }

    /**
     * Set idCreateur
     *
     * @param integer $idCreateur
     * @return Evenement
     */
    public function setIdCreateur($idCreateur)
    {
        $this->idCreateur = $idCreateur;

        return $this;
    }

    /**
     * Get idCreateur
     *
     * @return integer 
     */
    public function getIdCreateur()
    {
        return $this->idCreateur;
    }

    /**
     * Set idLocev
     *
     * @param integer $idLocev
     * @return Evenement
     */
    public function setIdLocev($idLocev)
    {
        $this->idLocev = $idLocev;

        return $this;
    }

    /**
     * Get idLocev
     *
     * @return integer 
     */
    public function getIdLocev()
    {
        return $this->idLocev;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }


    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


    public function getImage()
    {
        return $this->image;
    }


}
