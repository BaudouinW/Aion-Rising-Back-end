<?php

namespace SiteRising\AionShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteRising\AionShopBundle\Entity\Commande;


/**
 * Description of AchatController
 *
 * @author Hatsuyo
 */
class AchatController extends Controller {

    public function acheterAction($item, $perso) {

        $user = $this->container->get('security.context')->getToken()->getUser();
        $doc = $this->getDoctrine();
        $em = $doc->getManager();
        $em2 = $this->getDoctrine()->getManager('server');
        $objet = $em->getRepository('AionShopBundle:Items')->find($item);
        $players = $em2->getRepository('AionServerBundle:Players')->findByAccountName($user->getUsername());

        $commande = new Commande();
        $commande->setJoueur($this->container->get('security.context')->getToken()->getUser());
        $commande->setIdAchat($objet->getIdItem());
        $commande->setQuantite($objet->getPacket());
        $commande->setPrix($objet->getPrix());
        $perso_name = null ;
        foreach ($players as $player)
        {
        	if($perso ==  $player->getId())
        		$perso_name = $player->getName();
        }
         if(is_null($perso_name))
         {
         	$this->get('Ras.Alert.AlertReportingService')->addError('Merci de sélectionner un joueur pour effectuer un achat');
         	return $this->redirect($this->generateUrl('accueil'));
         }
        $commande->setNomPersonnage($perso_name);


        if ($objet->getPrix()<=$user->getCashShopMoney()) {

            $user->setCashShopMoney($user->getCashShopMoney()-$objet->getPrix());
            $em->persist($user);
            $em->persist($commande);
            $em->flush();


            $this->get('Ras.Alert.AlertReportingService')->addSuccess('Item acheté :' . $objet->getNom());

            return $this->redirect($this->generateUrl('site_rising_shop'));

        } else {

           $this->get('Ras.Alert.AlertReportingService')->addError('Votre solde de point n\'est pas suffisant pour acheter cet objet');

           return $this->redirect($this->generateUrl('site_rising_shop'));
        }

    }

}
