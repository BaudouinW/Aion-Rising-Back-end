<?php

namespace SiteRising\AionShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of ProduitController
 *
 * @author Hatsuyo
 */
class ItemController extends Controller {
    
    public function shopAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->findAll();
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );
        
        $players = $this->get('doctrine')->getRepository('AionServerBundle:Players','server')->findByAccountName($user->getUsername());
         
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user, 'players' => $players));
        
    }
     
    //selection item cuir
   
    public function cuirEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byCuirEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection item tissu
    
    public function tissuEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byTissuEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 1
        );
              
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection item cuir magique
    
    public function cuirMagiqueEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byCuirMagiqueEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection item maille
    
    public function mailleEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byMailleEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection item maille physique
    
    public function maillePhysiqueEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byMaillePhysiqueEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection item plate
    
    public function plateEmplaAction($type){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byPlateEmpla($type);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Bijoux
    public function bijouxAction($bijoux){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byBijoux($bijoux);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Pierre de Mana
    public function enchantAction($enchant){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byEnchantEmpla($enchant);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Nourriture
    public function nourritureAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byNourriture();
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Familiers
    public function familiersAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byFamiliers();
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Montures
    public function monturesAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byMonture();
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Autres
    public function autresAction($autre){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byAutre($autre);
        
          $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 7
        );
        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Arme PvE
     public function armePvEAction($arme){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byArmePvE($arme);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Arme PvP
    public function armeAction($arme){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byArmeEmpla($arme);
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
    
    //selection Ailes
     public function ailesAction(){
        
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $em = $this->getDoctrine()->getManager();
        $findItems = $em->getRepository('AionShopBundle:Items')->byAiles();
        
         $items = $this->get('knp_paginator')->paginate($findItems, $this->get('request')->query->get('page', 1), 10
        );

        
        return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array ('items' => $items, 'user' => $user));
    }
}
