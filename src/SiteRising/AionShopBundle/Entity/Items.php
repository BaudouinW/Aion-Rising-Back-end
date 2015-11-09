<?php

namespace SiteRising\AionShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SiteRising\AionShopBundle\Entity\ItemsRepository")
 */
class Items
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="idItem", type="integer")
     */
    private $idItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="packet", type="integer")
     */
    private $packet;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManytoOne(targetEntity="SiteRising\AionShopBundle\Entity\Emplacement", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $emplacement;

    /**
     * @ORM\ManytoOne(targetEntity="SiteRising\AionShopBundle\Entity\EmplacementAutre", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $emplacementAutre;
    
    /**
     * @ORM\ManytoOne(targetEntity="SiteRising\AionShopBundle\Entity\EmplacementEnchant", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $emplacementEnchant;
    
    /**
     *@ORM\ManytoOne(targetEntity="SiteRising\AionShopBundle\Entity\EmplacementBijoux", cascade={"persist","remove"})
     *@ORM\JoinColumn(nullable=true)
     */
    private $emplacementBijoux;
    
    /**
     * @ORM\ManytoOne(targetEntity="SiteRising\AionShopBundle\Entity\CategorieArme", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $categorieArme;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="niv", type="integer")
     */
    private $niv;


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
     * Set nom
     *
     * @param string $nom
     * @return Items
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set idItem
     *
     * @param integer $idItem
     * @return Items
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return integer 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set packet
     *
     * @param integer $packet
     * @return Items
     */
    public function setPacket($packet)
    {
        $this->packet = $packet;

        return $this;
    }

    /**
     * Get packet
     *
     * @return integer 
     */
    public function getPacket()
    {
        return $this->packet;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Items
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set lien
     *
     * @param string $lien
     * @return Items
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Items
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     * @return Items
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string 
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set niv
     *
     * @param integer $niv
     * @return Items
     */
    public function setNiv($niv)
    {
        $this->niv = $niv;

        return $this;
    }

    /**
     * Get niv
     *
     * @return integer 
     */
    public function getNiv()
    {
        return $this->niv;
    }
    
     /**
     * Set type
     *
     * @param string $type
     * @return Items
     */
    
    public function setType($type){
        
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * Get type
     *
     * @return string
     */
    
    public function getType(){
        
        return $this->type;
    }
    
    /**
     * Set categorieArme
     *
     * @param string $categorieArme
     * @return Items
     */
    public function setCategorieArme($categorieArme)
    {
        $this->categorieArme = $categorieArme;

        return $this;
    }

    /**
     * Get categorieArme
     *
     * @return string 
     */
    public function getCategorieArme()
    {
        return $this->categorieArme;
    }
    
    /**
     * Set emplacementAutre
     *
     * @param string $emplacementAutre
     * @return Items
     */
    public function setEmplacementAutre($emplacementAutre)
    {
        $this->emplacementAutre = $emplacementAutre;

        return $this;
    }

    /**
     * Get emplacementAutre
     *
     * @return string 
     */
    public function getEmplacementAutre()
    {
        return $this->emplacementAutre;
    }
    
    /**
     * Set emplacementEnchant
     *
     * @param string $emplacementEnchant
     * @return Items
     */
    public function setEmplacementEnchant($emplacementEnchant)
    {
        $this->emplacementEnchant = $emplacementEnchant;

        return $this;
    }

    /**
     * Get emplacementEnchant
     *
     * @return string
     */
    public function getEmplacementEnchant()
    {
        return $this->emplacementEnchant;
    }
    
    /**
     * Set emplacementBijoux
     *
     * @param string $emplacementBijoux
     * @return Items
     */
    public function setEmplacementBijoux($emplacementBijoux)
    {
        $this->emplacementBijoux = $emplacementBijoux;

        return $this;
    }

    /**
     * Get emplacementBijoux
     *
     * @return string
     */
    public function getEmplacementBijoux()
    {
        return $this->emplacementBijoux;
    }
}
