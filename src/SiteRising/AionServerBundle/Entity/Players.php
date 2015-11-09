<?php

namespace SiteRising\AionServerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Players
 * 
 * @ORM\Table(name="players")
 * @ORM\Entity(repositoryClass="SiteRising\AionServerBundle\Entity\PlayersRepository")
 */
class Players
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var integer
     */
    private $exp;

    /**
     * @var integer
     */
    private $recoverexp;

    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    /**
     * @var float
     */
    private $z;

    /**
     * @var integer
     */
    private $heading;

    /**
     * @var integer
     */
    private $worldId;

    /**
     * @var integer
     */
    private $worldOwner;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $race;

    /**
     * @var string
     */
    private $playerClass;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $deletionDate;

    /**
     * @var \DateTime
     */
    private $lastOnline;

    /**
     * @var boolean
     */
    private $questExpands;

    /**
     * @var boolean
     */
    private $npcExpands;

    /**
     * @var boolean
     */
    private $advancedStigmaSlotSize;

    /**
     * @var boolean
     */
    private $warehouseSize;

    /**
     * @var boolean
     */
    private $mailboxLetters;

    /**
     * @var integer
     */
    private $titleId;

    /**
     * @var integer
     */
    private $bonusTitleId;

    /**
     * @var integer
     */
    private $dp;

    /**
     * @var boolean
     */
    private $soulSickness;

    /**
     * @var integer
     */
    private $reposteEnergy;

    /**
     * @var integer
     */
    private $bgPoints;

    /**
     * @var boolean
     */
    private $online;

    /**
     * @var string
     */
    private $note;

    /**
     * @var integer
     */
    private $mentorFlagTime;

    /**
     * @var integer
     */
    private $initialGamestats;

    /**
     * @var string
     */
    private $lastTransferTime;


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
     * Set name
     *
     * @param string $name
     * @return Players
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     * @return Players
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer 
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     * @return Players
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string 
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     * @return Players
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return integer 
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set recoverexp
     *
     * @param integer $recoverexp
     * @return Players
     */
    public function setRecoverexp($recoverexp)
    {
        $this->recoverexp = $recoverexp;

        return $this;
    }

    /**
     * Get recoverexp
     *
     * @return integer 
     */
    public function getRecoverexp()
    {
        return $this->recoverexp;
    }

    /**
     * Set x
     *
     * @param float $x
     * @return Players
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float 
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     * @return Players
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float 
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param float $z
     * @return Players
     */
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }

    /**
     * Get z
     *
     * @return float 
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set heading
     *
     * @param integer $heading
     * @return Players
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get heading
     *
     * @return integer 
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set worldId
     *
     * @param integer $worldId
     * @return Players
     */
    public function setWorldId($worldId)
    {
        $this->worldId = $worldId;

        return $this;
    }

    /**
     * Get worldId
     *
     * @return integer 
     */
    public function getWorldId()
    {
        return $this->worldId;
    }

    /**
     * Set worldOwner
     *
     * @param integer $worldOwner
     * @return Players
     */
    public function setWorldOwner($worldOwner)
    {
        $this->worldOwner = $worldOwner;

        return $this;
    }

    /**
     * Get worldOwner
     *
     * @return integer 
     */
    public function getWorldOwner()
    {
        return $this->worldOwner;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Players
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Players
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set playerClass
     *
     * @param string $playerClass
     * @return Players
     */
    public function setPlayerClass($playerClass)
    {
        $this->playerClass = $playerClass;

        return $this;
    }

    /**
     * Get playerClass
     *
     * @return string 
     */
    public function getPlayerClass()
    {
        return $this->playerClass;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Players
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set deletionDate
     *
     * @param \DateTime $deletionDate
     * @return Players
     */
    public function setDeletionDate($deletionDate)
    {
        $this->deletionDate = $deletionDate;

        return $this;
    }

    /**
     * Get deletionDate
     *
     * @return \DateTime 
     */
    public function getDeletionDate()
    {
        return $this->deletionDate;
    }

    /**
     * Set lastOnline
     *
     * @param \DateTime $lastOnline
     * @return Players
     */
    public function setLastOnline($lastOnline)
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * Get lastOnline
     *
     * @return \DateTime 
     */
    public function getLastOnline()
    {
        return $this->lastOnline;
    }

    /**
     * Set questExpands
     *
     * @param boolean $questExpands
     * @return Players
     */
    public function setQuestExpands($questExpands)
    {
        $this->questExpands = $questExpands;

        return $this;
    }

    /**
     * Get questExpands
     *
     * @return boolean 
     */
    public function getQuestExpands()
    {
        return $this->questExpands;
    }

    /**
     * Set npcExpands
     *
     * @param boolean $npcExpands
     * @return Players
     */
    public function setNpcExpands($npcExpands)
    {
        $this->npcExpands = $npcExpands;

        return $this;
    }

    /**
     * Get npcExpands
     *
     * @return boolean 
     */
    public function getNpcExpands()
    {
        return $this->npcExpands;
    }

    /**
     * Set advancedStigmaSlotSize
     *
     * @param boolean $advancedStigmaSlotSize
     * @return Players
     */
    public function setAdvancedStigmaSlotSize($advancedStigmaSlotSize)
    {
        $this->advancedStigmaSlotSize = $advancedStigmaSlotSize;

        return $this;
    }

    /**
     * Get advancedStigmaSlotSize
     *
     * @return boolean 
     */
    public function getAdvancedStigmaSlotSize()
    {
        return $this->advancedStigmaSlotSize;
    }

    /**
     * Set warehouseSize
     *
     * @param boolean $warehouseSize
     * @return Players
     */
    public function setWarehouseSize($warehouseSize)
    {
        $this->warehouseSize = $warehouseSize;

        return $this;
    }

    /**
     * Get warehouseSize
     *
     * @return boolean 
     */
    public function getWarehouseSize()
    {
        return $this->warehouseSize;
    }

    /**
     * Set mailboxLetters
     *
     * @param boolean $mailboxLetters
     * @return Players
     */
    public function setMailboxLetters($mailboxLetters)
    {
        $this->mailboxLetters = $mailboxLetters;

        return $this;
    }

    /**
     * Get mailboxLetters
     *
     * @return boolean 
     */
    public function getMailboxLetters()
    {
        return $this->mailboxLetters;
    }

    /**
     * Set titleId
     *
     * @param integer $titleId
     * @return Players
     */
    public function setTitleId($titleId)
    {
        $this->titleId = $titleId;

        return $this;
    }

    /**
     * Get titleId
     *
     * @return integer 
     */
    public function getTitleId()
    {
        return $this->titleId;
    }

    /**
     * Set bonusTitleId
     *
     * @param integer $bonusTitleId
     * @return Players
     */
    public function setBonusTitleId($bonusTitleId)
    {
        $this->bonusTitleId = $bonusTitleId;

        return $this;
    }

    /**
     * Get bonusTitleId
     *
     * @return integer 
     */
    public function getBonusTitleId()
    {
        return $this->bonusTitleId;
    }

    /**
     * Set dp
     *
     * @param integer $dp
     * @return Players
     */
    public function setDp($dp)
    {
        $this->dp = $dp;

        return $this;
    }

    /**
     * Get dp
     *
     * @return integer 
     */
    public function getDp()
    {
        return $this->dp;
    }

    /**
     * Set soulSickness
     *
     * @param boolean $soulSickness
     * @return Players
     */
    public function setSoulSickness($soulSickness)
    {
        $this->soulSickness = $soulSickness;

        return $this;
    }

    /**
     * Get soulSickness
     *
     * @return boolean 
     */
    public function getSoulSickness()
    {
        return $this->soulSickness;
    }

    /**
     * Set reposteEnergy
     *
     * @param integer $reposteEnergy
     * @return Players
     */
    public function setReposteEnergy($reposteEnergy)
    {
        $this->reposteEnergy = $reposteEnergy;

        return $this;
    }

    /**
     * Get reposteEnergy
     *
     * @return integer 
     */
    public function getReposteEnergy()
    {
        return $this->reposteEnergy;
    }

    /**
     * Set bgPoints
     *
     * @param integer $bgPoints
     * @return Players
     */
    public function setBgPoints($bgPoints)
    {
        $this->bgPoints = $bgPoints;

        return $this;
    }

    /**
     * Get bgPoints
     *
     * @return integer 
     */
    public function getBgPoints()
    {
        return $this->bgPoints;
    }

    /**
     * Set online
     *
     * @param boolean $online
     * @return Players
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Players
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set mentorFlagTime
     *
     * @param integer $mentorFlagTime
     * @return Players
     */
    public function setMentorFlagTime($mentorFlagTime)
    {
        $this->mentorFlagTime = $mentorFlagTime;

        return $this;
    }

    /**
     * Get mentorFlagTime
     *
     * @return integer 
     */
    public function getMentorFlagTime()
    {
        return $this->mentorFlagTime;
    }

    /**
     * Set initialGamestats
     *
     * @param integer $initialGamestats
     * @return Players
     */
    public function setInitialGamestats($initialGamestats)
    {
        $this->initialGamestats = $initialGamestats;

        return $this;
    }

    /**
     * Get initialGamestats
     *
     * @return integer 
     */
    public function getInitialGamestats()
    {
        return $this->initialGamestats;
    }

    /**
     * Set lastTransferTime
     *
     * @param string $lastTransferTime
     * @return Players
     */
    public function setLastTransferTime($lastTransferTime)
    {
        $this->lastTransferTime = $lastTransferTime;

        return $this;
    }

    /**
     * Get lastTransferTime
     *
     * @return string 
     */
    public function getLastTransferTime()
    {
        return $this->lastTransferTime;
    }
}
