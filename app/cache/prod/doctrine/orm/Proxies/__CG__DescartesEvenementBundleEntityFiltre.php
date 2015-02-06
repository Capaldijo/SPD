<?php

namespace Proxies\__CG__\Descartes\EvenementBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Filtre extends \Descartes\EvenementBundle\Entity\Filtre implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'dateFiltre', 'theme', 'popularite', 'commente', 'acheve', 'nouveaute', 'amitie');
        }

        return array('__isInitialized__', 'id', 'dateFiltre', 'theme', 'popularite', 'commente', 'acheve', 'nouveaute', 'amitie');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Filtre $proxy) {
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
    public function setDateFiltre($dateFiltre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFiltre', array($dateFiltre));

        return parent::setDateFiltre($dateFiltre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFiltre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFiltre', array());

        return parent::getDateFiltre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTheme($theme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTheme', array($theme));

        return parent::setTheme($theme);
    }

    /**
     * {@inheritDoc}
     */
    public function getTheme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTheme', array());

        return parent::getTheme();
    }

    /**
     * {@inheritDoc}
     */
    public function setPopularite($popularite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPopularite', array($popularite));

        return parent::setPopularite($popularite);
    }

    /**
     * {@inheritDoc}
     */
    public function getPopularite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPopularite', array());

        return parent::getPopularite();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommente($commente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommente', array($commente));

        return parent::setCommente($commente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommente', array());

        return parent::getCommente();
    }

    /**
     * {@inheritDoc}
     */
    public function setAcheve($acheve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAcheve', array($acheve));

        return parent::setAcheve($acheve);
    }

    /**
     * {@inheritDoc}
     */
    public function getAcheve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAcheve', array());

        return parent::getAcheve();
    }

    /**
     * {@inheritDoc}
     */
    public function setNouveaute($nouveaute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNouveaute', array($nouveaute));

        return parent::setNouveaute($nouveaute);
    }

    /**
     * {@inheritDoc}
     */
    public function getNouveaute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNouveaute', array());

        return parent::getNouveaute();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmitie($amitie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmitie', array($amitie));

        return parent::setAmitie($amitie);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmitie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmitie', array());

        return parent::getAmitie();
    }

}
