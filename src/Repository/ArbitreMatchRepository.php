<?php

namespace App\Repository;

use App\Entity\ArbitreMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArbitreMatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArbitreMatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArbitreMatch[]    findAll()
 * @method ArbitreMatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ArbitreMatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArbitreMatch::class);
    }






}