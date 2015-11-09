<?php

namespace Proxies\__CG__\SiteRising\AionServerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Players extends \SiteRising\AionServerBundle\Entity\Players implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'id', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'name', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'accountId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'accountName', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'exp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'recoverexp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'x', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'y', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'z', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'heading', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'worldId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'worldOwner', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'gender', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'race', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'playerClass', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'creationDate', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'deletionDate', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'lastOnline', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'questExpands', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'npcExpands', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'advancedStigmaSlotSize', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'warehouseSize', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'mailboxLetters', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'titleId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'bonusTitleId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'dp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'soulSickness', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'reposteEnergy', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'bgPoints', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'online', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'note', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'mentorFlagTime', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'initialGamestats', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'lastTransferTime');
        }

        return array('__isInitialized__', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'id', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'name', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'accountId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'accountName', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'exp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'recoverexp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'x', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'y', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'z', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'heading', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'worldId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'worldOwner', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'gender', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'race', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'playerClass', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'creationDate', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'deletionDate', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'lastOnline', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'questExpands', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'npcExpands', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'advancedStigmaSlotSize', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'warehouseSize', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'mailboxLetters', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'titleId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'bonusTitleId', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'dp', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'soulSickness', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'reposteEnergy', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'bgPoints', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'online', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'note', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'mentorFlagTime', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'initialGamestats', '' . "\0" . 'SiteRising\\AionServerBundle\\Entity\\Players' . "\0" . 'lastTransferTime');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Players $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountId($accountId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountId', array($accountId));

        return parent::setAccountId($accountId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountId', array());

        return parent::getAccountId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountName($accountName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountName', array($accountName));

        return parent::setAccountName($accountName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountName', array());

        return parent::getAccountName();
    }

    /**
     * {@inheritDoc}
     */
    public function setExp($exp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExp', array($exp));

        return parent::setExp($exp);
    }

    /**
     * {@inheritDoc}
     */
    public function getExp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExp', array());

        return parent::getExp();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecoverexp($recoverexp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecoverexp', array($recoverexp));

        return parent::setRecoverexp($recoverexp);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecoverexp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecoverexp', array());

        return parent::getRecoverexp();
    }

    /**
     * {@inheritDoc}
     */
    public function setX($x)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setX', array($x));

        return parent::setX($x);
    }

    /**
     * {@inheritDoc}
     */
    public function getX()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getX', array());

        return parent::getX();
    }

    /**
     * {@inheritDoc}
     */
    public function setY($y)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setY', array($y));

        return parent::setY($y);
    }

    /**
     * {@inheritDoc}
     */
    public function getY()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getY', array());

        return parent::getY();
    }

    /**
     * {@inheritDoc}
     */
    public function setZ($z)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZ', array($z));

        return parent::setZ($z);
    }

    /**
     * {@inheritDoc}
     */
    public function getZ()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZ', array());

        return parent::getZ();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeading($heading)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeading', array($heading));

        return parent::setHeading($heading);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeading()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeading', array());

        return parent::getHeading();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorldId($worldId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorldId', array($worldId));

        return parent::setWorldId($worldId);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorldId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorldId', array());

        return parent::getWorldId();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorldOwner($worldOwner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorldOwner', array($worldOwner));

        return parent::setWorldOwner($worldOwner);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorldOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorldOwner', array());

        return parent::getWorldOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', array($gender));

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', array());

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setRace($race)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRace', array($race));

        return parent::setRace($race);
    }

    /**
     * {@inheritDoc}
     */
    public function getRace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRace', array());

        return parent::getRace();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlayerClass($playerClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlayerClass', array($playerClass));

        return parent::setPlayerClass($playerClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayerClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerClass', array());

        return parent::getPlayerClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', array($creationDate));

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', array());

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletionDate($deletionDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletionDate', array($deletionDate));

        return parent::setDeletionDate($deletionDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletionDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletionDate', array());

        return parent::getDeletionDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastOnline($lastOnline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastOnline', array($lastOnline));

        return parent::setLastOnline($lastOnline);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastOnline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastOnline', array());

        return parent::getLastOnline();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestExpands($questExpands)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuestExpands', array($questExpands));

        return parent::setQuestExpands($questExpands);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestExpands()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuestExpands', array());

        return parent::getQuestExpands();
    }

    /**
     * {@inheritDoc}
     */
    public function setNpcExpands($npcExpands)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNpcExpands', array($npcExpands));

        return parent::setNpcExpands($npcExpands);
    }

    /**
     * {@inheritDoc}
     */
    public function getNpcExpands()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNpcExpands', array());

        return parent::getNpcExpands();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdvancedStigmaSlotSize($advancedStigmaSlotSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdvancedStigmaSlotSize', array($advancedStigmaSlotSize));

        return parent::setAdvancedStigmaSlotSize($advancedStigmaSlotSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdvancedStigmaSlotSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdvancedStigmaSlotSize', array());

        return parent::getAdvancedStigmaSlotSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setWarehouseSize($warehouseSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarehouseSize', array($warehouseSize));

        return parent::setWarehouseSize($warehouseSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarehouseSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarehouseSize', array());

        return parent::getWarehouseSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailboxLetters($mailboxLetters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailboxLetters', array($mailboxLetters));

        return parent::setMailboxLetters($mailboxLetters);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailboxLetters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailboxLetters', array());

        return parent::getMailboxLetters();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitleId($titleId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitleId', array($titleId));

        return parent::setTitleId($titleId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitleId', array());

        return parent::getTitleId();
    }

    /**
     * {@inheritDoc}
     */
    public function setBonusTitleId($bonusTitleId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBonusTitleId', array($bonusTitleId));

        return parent::setBonusTitleId($bonusTitleId);
    }

    /**
     * {@inheritDoc}
     */
    public function getBonusTitleId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBonusTitleId', array());

        return parent::getBonusTitleId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDp($dp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDp', array($dp));

        return parent::setDp($dp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDp', array());

        return parent::getDp();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoulSickness($soulSickness)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoulSickness', array($soulSickness));

        return parent::setSoulSickness($soulSickness);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoulSickness()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoulSickness', array());

        return parent::getSoulSickness();
    }

    /**
     * {@inheritDoc}
     */
    public function setReposteEnergy($reposteEnergy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReposteEnergy', array($reposteEnergy));

        return parent::setReposteEnergy($reposteEnergy);
    }

    /**
     * {@inheritDoc}
     */
    public function getReposteEnergy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReposteEnergy', array());

        return parent::getReposteEnergy();
    }

    /**
     * {@inheritDoc}
     */
    public function setBgPoints($bgPoints)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBgPoints', array($bgPoints));

        return parent::setBgPoints($bgPoints);
    }

    /**
     * {@inheritDoc}
     */
    public function getBgPoints()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBgPoints', array());

        return parent::getBgPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnline($online)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnline', array($online));

        return parent::setOnline($online);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnline', array());

        return parent::getOnline();
    }

    /**
     * {@inheritDoc}
     */
    public function setNote($note)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNote', array($note));

        return parent::setNote($note);
    }

    /**
     * {@inheritDoc}
     */
    public function getNote()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNote', array());

        return parent::getNote();
    }

    /**
     * {@inheritDoc}
     */
    public function setMentorFlagTime($mentorFlagTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMentorFlagTime', array($mentorFlagTime));

        return parent::setMentorFlagTime($mentorFlagTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMentorFlagTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMentorFlagTime', array());

        return parent::getMentorFlagTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitialGamestats($initialGamestats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitialGamestats', array($initialGamestats));

        return parent::setInitialGamestats($initialGamestats);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitialGamestats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitialGamestats', array());

        return parent::getInitialGamestats();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastTransferTime($lastTransferTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastTransferTime', array($lastTransferTime));

        return parent::setLastTransferTime($lastTransferTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastTransferTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastTransferTime', array());

        return parent::getLastTransferTime();
    }

}
