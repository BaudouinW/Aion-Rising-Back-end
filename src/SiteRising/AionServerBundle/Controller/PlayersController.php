<?php

namespace SiteRising\AionServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PlayersController
 *
 * @author Baudouin
 */
class PlayersController extends Controller {

    public function personnageAction(){

    $user = $this->container->get('security.context')->getToken()->getUser();

    $players = $this->get('doctrine')->getRepository('AionServerBundle:Players','server')->findByAccountName($user->getUsername());

    return $this->render('AionShopBundle:ShopViews:RisingShopViews/Items.html.twig', array('players' => $players));

    }

}
