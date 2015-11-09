<?php

namespace SiteRising\AionShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmplacementBijoux
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="SiteRising\AionShopBundle\Entity\EmplacementBijouxRepository")
 */
class EmplacementBijoux
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
     * @return EmplacementBijoux
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
}
