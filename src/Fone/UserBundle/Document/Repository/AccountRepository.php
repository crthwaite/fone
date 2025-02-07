<?php
/**
 * Created by PhpStorm.
 * User: christopher
 * Date: 24/10/16
 * Time: 15:54
 */

namespace Fone\UserBundle\Document\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

class AccountRepository extends DocumentRepository
{
    public function findByUser($user)
    {
        return $this->createQueryBuilder()
            ->field('user')->references($user)
            ->getQuery()
            ->execute();
    }
}