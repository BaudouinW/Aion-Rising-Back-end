<?php

namespace Proxies\__CG__\SiteRising\AionShopBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Items extends \SiteRising\AionShopBundle\Entity\Items implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'id', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'nom', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'idItem', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'packet', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'prix', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'lien', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'categorie', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'type', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacement', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementAutre', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementEnchant', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementBijoux', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'categorieArme', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'niv');
        }

        return array('__isInitialized__', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'id', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'nom', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'idItem', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'packet', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'prix', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'lien', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'categorie', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'type', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacement', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementAutre', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementEnchant', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'emplacementBijoux', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'categorieArme', '' . "\0" . 'SiteRising\\AionShopBundle\\Entity\\Items' . "\0" . 'niv');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Items $proxy) {
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdItem($idItem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdItem', array($idItem));

        return parent::setIdItem($idItem);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdItem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdItem', array());

        return parent::getIdItem();
    }

    /**
     * {@inheritDoc}
     */
    public function setPacket($packet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPacket', array($packet));

        return parent::setPacket($packet);
    }

    /**
     * {@inheritDoc}
     */
    public function getPacket()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPacket', array());

        return parent::getPacket();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setLien($lien)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLien', array($lien));

        return parent::setLien($lien);
    }

    /**
     * {@inheritDoc}
     */
    public function getLien()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLien', array());

        return parent::getLien();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie($categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmplacement($emplacement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmplacement', array($emplacement));

        return parent::setEmplacement($emplacement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmplacement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmplacement', array());

        return parent::getEmplacement();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiv($niv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiv', array($niv));

        return parent::setNiv($niv);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiv', array());

        return parent::getNiv();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorieArme($categorieArme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorieArme', array($categorieArme));

        return parent::setCategorieArme($categorieArme);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorieArme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorieArme', array());

        return parent::getCategorieArme();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmplacementAutre($emplacementAutre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmplacementAutre', array($emplacementAutre));

        return parent::setEmplacementAutre($emplacementAutre);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmplacementAutre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmplacementAutre', array());

        return parent::getEmplacementAutre();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmplacementEnchant($emplacementEnchant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmplacementEnchant', array($emplacementEnchant));

        return parent::setEmplacementEnchant($emplacementEnchant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmplacementEnchant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmplacementEnchant', array());

        return parent::getEmplacementEnchant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmplacementBijoux($emplacementBijoux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmplacementBijoux', array($emplacementBijoux));

        return parent::setEmplacementBijoux($emplacementBijoux);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmplacementBijoux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmplacementBijoux', array());

        return parent::getEmplacementBijoux();
    }

}
