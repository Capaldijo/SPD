<?php

namespace Descartes\EvenementBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="image", type="text")
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_titre", type="text")
     */
    private $themeTitre;
	
	protected $bdd;
	
	public function __construct($bdRecup, $idCreateur=null)
	{ 
		$this->bdd = $bdRecup;
		$this->visibilite = true;
		$this->nombreParticipant = 10;
		$this->idCreateur = $idCreateur;
	} 
	
	public function getListeEvenements() 
	{ 		
		$reponse = $this->bdd->query('SELECT * FROM evenement');

		$events = array ();
		while ($donnees = $reponse->fetch())
		{
			array_push($events, $donnees);
		}

		$reponse->closeCursor();
		
		return $events;
	} 
	
	public function insertBd()
	{
		$valeurs = array(
			'titre' => $this->titre,
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
		print_r($valeurs);
		$req = $this->bdd->prepare('INSERT INTO evenement(titre, description, adresse, ville, tarif, id_themeev, id_createur, date_realisation, nombre_participant, visibilite) VALUES(:titre, :description, :adresse, :ville, :tarif, :id_themeev, :id_createur, :date_realisation, :nombre_participant, :visibilite)');
		$req->execute($valeurs)or die(print_r($req->errorInfo()));
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

    /**
     * Set image
     *
     * @param string $image
     * @return Evenement
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set themeTitre
     *
     * @param string $themeTitre
     * @return Evenement
     */
    public function setThemeTitre($themeTitre)
    {
        $this->themeTitre = $themeTitre;

        return $this;
    }

    /**
     * Get themeTitre
     *
     * @return string 
     */
    public function getThemeTitre()
    {
        return $this->themeTitre;
    }
}
