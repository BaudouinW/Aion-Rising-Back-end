<?php

namespace SiteRising\AionServerBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of PlayersRepository
 *
 * @author hatsuyo
 */
class PlayersRepository extends EntityRepository {

      public function findByAccountName($user){

         $qb = $this->createQueryBuilder('personnage')
                ->select('personnage')
                ->where('personnage.account_name = :account_name')
                ->orderBy('personnage.id')
                ->setParameter('account_name', $user);
         return $qb->getQuery()->getResult();

    }
}
