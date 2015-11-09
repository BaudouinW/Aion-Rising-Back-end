<?php

namespace SiteRising\AionShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SiteRising\AionShopBundle\Entity\CommandeRepository")
 */
class Commande
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
     * @ORM\Column(name="Joueur", type="string", length=255)
     */
    private $joueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAchat", type="bigint")
     */
    private $idAchat;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="smallint")
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPersonnage", type="string", length=255)
     */
    private $nomPersonnage;

    /**
     * @var integer
     *
     * @ORM\Column(name="Prix", type="smallint")
     */
    private $prix;


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
     * Set joueur
     *
     * @param string $joueur
     * @return Commande
     */
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return string 
     */
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set idAchat
     *
     * @param integer $idAchat
     * @return Commande
     */
    public function setIdAchat($idAchat)
    {
        $this->idAchat = $idAchat;

        return $this;
    }

    /**
     * Get idAchat
     *
     * @return integer 
     */
    public function getIdAchat()
    {
        return $this->idAchat;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Commande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set nomPersonnage
     *
     * @param string $nomPersonnage
     * @return Commande
     */
    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }

    /**
     * Get nomPersonnage
     *
     * @return string 
     */
    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Commande
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
}
