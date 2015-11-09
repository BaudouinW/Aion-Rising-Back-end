<?php

namespace SiteRising\AionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of IndexController
 *
 * @author Hatsuyo
 */
class IndexController extends Controller{
    
    public function indexAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        $error ='';
        if ($error) {
            $error = $error->getMessage();
        }
        return $this->render('SiteRisingAionBundle:AionViews:accueil.html.twig', array ('user' => $user, 'error' => $error));
    }
    
    public function registerAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        return $this->render('SiteRisingAionBundle:AionViews:register.html.twig', array ('user' => $user));
    }
    
    public function joinUsAction(){
        
        $error ='';
        if ($error) {
            $error = $error->getMessage();
        }
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        return $this->render('SiteRisingAionBundle:Aionviews:joinUs.html.twig', array ('user' => $user, 'error' => $error));
    }
    
    public function userProfileAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        $ip = $this->container->get('Request')->getClientIp();
        $form = $this->container->get('fos_user.change_password.form');
        return $this->render('SiteRisingAionBundle:AionViews:userProfile.html.twig', array ('user' => $user, 'ip' => $ip, 'form' =>$form->createView()));
        }


}
