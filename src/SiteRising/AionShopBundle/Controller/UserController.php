<?php

namespace SiteRising\AionShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of UserController
 *
 * @author Hatsuyo
 */
class UserController extends Controller {
   
    public function infoCoAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/infoCo.html.twig', array('user' => $user));
    }
    
}
