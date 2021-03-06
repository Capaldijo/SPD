<?php

namespace Proxies\__CG__\Descartes\EvenementBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Evenement extends \Descartes\EvenementBundle\Entity\Evenement implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'description', 'visibilite', 'nombreParticipant', 'adresse', 'dateRealisation', 'ville', 'tarif', 'idThemeev', 'idCreateur', 'idLocev', 'titre', 'image', 'bdd');
        }

        return array('__isInitialized__', 'id', 'description', 'visibilite', 'nombreParticipant', 'adresse', 'dateRealisation', 'ville', 'tarif', 'idThemeev', 'idCreateur', 'idLocev', 'titre', 'image', 'bdd');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Evenement $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getListeEvenements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListeEvenements', array());

        return parent::getListeEvenements();
    }

    /**
     * {@inheritDoc}
     */
    public function updateEvent($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateEvent', array($id));

        return parent::updateEvent($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiltreEvent($filtre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiltreEvent', array($filtre));

        return parent::getFiltreEvent($filtre);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopularEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopularEvent', array());

        return parent::getPopularEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function getRecentEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecentEvent', array());

        return parent::getRecentEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function getCommEvent($event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommEvent', array($event));

        return parent::getCommEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function postComment($contenu, $id_event, $id_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postComment', array($contenu, $id_event, $id_user));

        return parent::postComment($contenu, $id_event, $id_user);
    }

    /**
     * {@inheritDoc}
     */
    public function getMyEvent($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMyEvent', array($id));

        return parent::getMyEvent($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvent($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', array($id));

        return parent::getEvent($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvenement($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvenement', array($id));

        return parent::getEvenement($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipant($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipant', array($id));

        return parent::getParticipant($id);
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipe($id_event, $id_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipe', array($id_event, $id_user));

        return parent::addParticipe($id_event, $id_user);
    }

    /**
     * {@inheritDoc}
     */
    public function delParticipe($id_event, $id_user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delParticipe', array($id_event, $id_user));

        return parent::delParticipe($id_event, $id_user);
    }

    /**
     * {@inheritDoc}
     */
    public function addNote($id_user, $id_event, $note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNote', array($id_user, $id_event, $note));

        return parent::addNote($id_user, $id_event, $note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array($id));

        return parent::getNote($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoteur($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoteur', array($id));

        return parent::getNoteur($id);
    }

    /**
     * {@inheritDoc}
     */
    public function upload($nom_image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', array($nom_image));

        return parent::upload($nom_image);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadDir()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadDir', array());

        return parent::getUploadDir();
    }

    /**
     * {@inheritDoc}
     */
    public function insertBd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'insertBd', array());

        return parent::insertBd();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibilite($visibilite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibilite', array($visibilite));

        return parent::setVisibilite($visibilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisibilite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisibilite', array());

        return parent::getVisibilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreParticipant($nombreParticipant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreParticipant', array($nombreParticipant));

        return parent::setNombreParticipant($nombreParticipant);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreParticipant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreParticipant', array());

        return parent::getNombreParticipant();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRealisation($dateRealisation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRealisation', array($dateRealisation));

        return parent::setDateRealisation($dateRealisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateRealisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRealisation', array());

        return parent::getDateRealisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarif($tarif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarif', array($tarif));

        return parent::setTarif($tarif);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarif', array());

        return parent::getTarif();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdThemeev($idThemeev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdThemeev', array($idThemeev));

        return parent::setIdThemeev($idThemeev);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdThemeev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdThemeev', array());

        return parent::getIdThemeev();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCreateur($idCreateur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCreateur', array($idCreateur));

        return parent::setIdCreateur($idCreateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCreateur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCreateur', array());

        return parent::getIdCreateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdLocev($idLocev)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdLocev', array($idLocev));

        return parent::setIdLocev($idLocev);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdLocev()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdLocev', array());

        return parent::getIdLocev();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

}
