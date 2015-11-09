<?php

namespace SiteRising\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="site_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
      
    }
    
    /**
     * var integer
     * 
     * @ORM\Column(name="cashShopMoney", type="bigint")
     */
    
    private $cashShopMoney;
    
    /**
     * Get cashShopmoney
     *
     * @return integer 
     */
    public function getCashShopMoney()
    {
        return $this->cashShopMoney;
    }
    
    /**
     * set cashShopMoney
     * 
     * @param int $cashShopMoney
     * @return User
     */
    public function setCashShopMoney($cashShopMoney){
        
        $this->cashShopMoney = $cashShopMoney;
        
        return $this;
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
}
