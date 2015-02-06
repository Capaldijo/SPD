<?php

namespace Descartes\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Descartes\EvenementBundle\Entity\ThemeRepository")
 */
class Theme
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
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;
	
	protected $bdd;
	
	public function __construct($bdRecup)
	{ 
		$this->bdd = $bdRecup;
	}
	
	public function getThemes()
	{ 		
		$reponse = $this->bdd->query('SELECT * FROM theme');

		$themes = array ();
		while ($donnees = $reponse->fetch())
		{
			$themes[$donnees['id_theme']] = $donnees['titre'];
		}

		$reponse->closeCursor();
		
		return $themes;
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
     * Set titre
     *
     * @param string $titre
     * @return Theme
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
}
