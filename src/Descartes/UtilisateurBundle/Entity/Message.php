<?php

namespace Descartes\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Descartes\UtilisateurBundle\Entity\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="sujet_message", type="text")
     */
    private $sujetMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_message", type="text")
     */
    private $contenuMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_destinataire", type="integer")
     */
    private $idDestinataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateurm", type="integer")
     */
    private $idUtilisateurm;

    private $loginDest;

    private $limite;

    private $idMessages;

    public function __construct($bdRecup)
    {
      $this->bdd = $bdRecup;
      $this->limite = 5;
    }

    public function sendMessage($id_exp)
    {
        $this->date = new \Datetime;
        $req = $this->bdd->prepare('INSERT INTO message (sujet_message, contenu_message, date, id_destinataire, id_utilisateurm) 
                                    VALUES (:sujet, :contenu, :date, (SELECT id 
                                                                    FROM utilisateur 
                                                                    WHERE username=:login), (SELECT id 
                                                                                            FROM utilisateur 
                                                                                            WHERE id=:id_exp))');

        $req->execute(array('sujet' => $this->sujetMessage,
                            'contenu' => $this->contenuMessage,
                            'date' => $this->date->format('Y-M-d H:m:s'),
                            'login' => $this->loginDest,
                            'id_exp' => $id_exp)) or die(print_r($req->errorInfo()));
    }

    public function getMyMessages($id_dest)
    {
        $req = $this->bdd->prepare('SELECT id_message, sujet_message, contenu_message, date, lastname , firstname, username, id
                                    FROM message , utilisateur  
                                    WHERE id_destinataire = :id_dest AND id_utilisateurm = id
                                    ORDER BY date DESC
                                    LIMIT :limite');

        $req->execute(array('id_dest' => $id_dest, 'limite' => $this->limite)) or die(print_r($req->errorInfo()));

        $this->limite+=5;

        $Messages = array ();
        while ($donnees = $req->fetch())
        {
            array_push($Messages, $donnees);
        }

        $req->closeCursor(); // On ferme le cursor

        return $Messages;
    }

    public function delMessage($id_message)
    {
        $req = $this->bdd->prepare('DELETE FROM message 
                                    WHERE id_message = :id_message');

        $req->execute(array('id_message' => $id_message)) or die(print_r($req->errorInfo()));
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
     * Set sujetMessage
     *
     * @param string $sujetMessage
     * @return Message
     */
    public function setSujetMessage($sujetMessage)
    {
        $this->sujetMessage = $sujetMessage;

        return $this;
    }

    /**
     * Get sujetMessage
     *
     * @return string 
     */
    public function getSujetMessage()
    {
        return $this->sujetMessage;
    }

    /**
     * Set contenuMessage
     *
     * @param string $contenuMessage
     * @return Message
     */
    public function setContenuMessage($contenuMessage)
    {
        $this->contenuMessage = $contenuMessage;

        return $this;
    }

    /**
     * Get contenuMessage
     *
     * @return string 
     */
    public function getContenuMessage()
    {
        return $this->contenuMessage;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idDestinataire
     *
     * @param integer $idDestinataire
     * @return Message
     */
    public function setIdDestinataire($idDestinataire)
    {
        $this->idDestinataire = $idDestinataire;

        return $this;
    }

    /**
     * Get idDestinataire
     *
     * @return integer 
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * Set idUtilisateurm
     *
     * @param integer $idUtilisateurm
     * @return Message
     */
    public function setIdUtilisateurm($idUtilisateurm)
    {
        $this->idUtilisateurm = $idUtilisateurm;

        return $this;
    }

    /**
     * Get idUtilisateurm
     *
     * @return integer 
     */
    public function getIdUtilisateurm()
    {
        return $this->idUtilisateurm;
    }

    public function setLoginDest($loginDest)
    {
        $this->loginDest = $loginDest;

        return $this;
    }

    public function getLoginDest()
    {
        return $this->loginDest;
    }

    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;

        return $this;
    }

}
