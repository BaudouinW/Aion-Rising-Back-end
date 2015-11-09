<?php

namespace SiteRising\AionShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of EmplacementController
 *
 * @author Hatsuyo
 */
class EmplacementController extends Controller{
    
    public function sousMenuCuirAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuCuir.html.twig', array('emplacement' => $emplacement));
    }
    
    public function sousMenuTissuAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuTissu.html.twig', array('emplacement' => $emplacement));
        
    }
    
    public function sousMenuCuirMagiqueAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuCuirMagique.html.twig', array('emplacement' => $emplacement));
    }
    
    public function sousMenuMailleAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuMaille.html.twig', array('emplacement' => $emplacement));
        
    }
    
    public function sousMenuMaillePhysiqueAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuMaillePhysique.html.twig', array('emplacement' => $emplacement));
    }
    
    public function sousMenuPlateAction(){
        
        $em = $this->getDoctrine()->getManager();
        $emplacement = $em->getRepository('AionShopBundle:Emplacement')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuPlate.html.twig', array('emplacement' => $emplacement));
    }
    
    public function sousMenuArmeAction(){
        
        $em = $this->getDoctrine()->getManager();
        $categorieArme = $em->getRepository('AionShopBundle:CategorieArme')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuArme.html.twig', array('categorieArme' => $categorieArme));
    }
    
    public function sousMenuBijouxAction(){
        
        $em = $this->getDoctrine()->getManager();
        $EmplacementBijoux = $em->getRepository('AionShopBundle:EmplacementBijoux')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuBijoux.html.twig', array('EmplacementBijoux' => $EmplacementBijoux));
    }
    
    public function sousMenuEnchantAction(){
        
        $em = $this->getDoctrine()->getManager();
        $EmplacementEnchant = $em->getRepository('AionShopBundle:EmplacementEnchant')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuAutre/sousMenuEnchant.html.twig', array('EmplacementEnchant' => $EmplacementEnchant));
    }
    
    public function sousMenuAutreAction(){
        
        $em = $this->getDoctrine()->getManager();
        $EmplacementAutre = $em->getRepository('AionShopBundle:EmplacementAutre')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuAutre/sousMenuAutre.html.twig', array('EmplacementAutre' => $EmplacementAutre));
        
    }
    
    public function sousMenuArmePvEAction(){
        
        $em = $this->getDoctrine()->getManager();
        $CategorieArme = $em->getRepository('AionShopBundle:CategorieArme')->findAll();
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/sousMenuItems/sousMenuArmePvE.html.twig', array('CategorieArme' => $CategorieArme));
        
    }
}
