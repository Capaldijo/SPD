<?php

namespace Descartes\EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filtre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Descartes\EvenementBundle\Entity\FiltreRepository")
 */
class Filtre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $dateFiltre;

    /**
     * @var text
     *
     * @ORM\Column(name="theme", type="text")
     */
    private $theme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="popularite", type="boolean")
     */
    private $popularite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="commente", type="boolean")
     */
    private $commente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="acheve", type="boolean")
     */
    private $acheve;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nouveaute", type="boolean")
     */
    private $nouveaute;

    /**
     * @var boolean
     *
     * @ORM\Column(name="amitie", type="boolean")
     */
    private $amitie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function setDateFiltre($dateFiltre)
    {
        $this->dateFiltre = $dateFiltre;

        return $this;
    }


    public function getDateFiltre()
    {
        return $this->dateFiltre;
    }

    /**
     * Set theme
     *
     * @param text $theme
     * @return Filtre
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return text 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set popularite
     *
     * @param boolean $popularite
     * @return Filtre
     */
    public function setPopularite($popularite)
    {
        $this->popularite = $popularite;

        return $this;
    }

    /**
     * Get popularite
     *
     * @return boolean 
     */
    public function getPopularite()
    {
        return $this->popularite;
    }

    /**
     * Set commente
     *
     * @param boolean $commente
     * @return Filtre
     */
    public function setCommente($commente)
    {
        $this->commente = $commente;

        return $this;
    }

    /**
     * Get commente
     *
     * @return boolean 
     */
    public function getCommente()
    {
        return $this->commente;
    }

    /**
     * Set acheve
     *
     * @param boolean $acheve
     * @return Filtre
     */
    public function setAcheve($acheve)
    {
        $this->acheve = $acheve;

        return $this;
    }

    /**
     * Get acheve
     *
     * @return boolean 
     */
    public function getAcheve()
    {
        return $this->acheve;
    }

    /**
     * Set nouveaute
     *
     * @param boolean $nouveaute
     * @return Filtre
     */
    public function setNouveaute($nouveaute)
    {
        $this->nouveaute = $nouveaute;

        return $this;
    }

    /**
     * Get nouveaute
     *
     * @return boolean 
     */
    public function getNouveaute()
    {
        return $this->nouveaute;
    }

    /**
     * Set amitie
     *
     * @param boolean $amitie
     * @return Filtre
     */
    public function setAmitie($amitie)
    {
        $this->amitie = $amitie;

        return $this;
    }

    /**
     * Get amitie
     *
     * @return boolean 
     */
    public function getAmitie()
    {
        return $this->amitie;
    }
}
