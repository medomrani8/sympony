<?php

namespace App\Repository;

use App\Entity\Club;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Controller\ClubController;

/**
 * @method Club|null find($id, $lockMode = null, $lockVersion = null)
 * @method Club|null findOneBy(array $criteria, array $orderBy = null)
 * @method Club[]    findAll()
 * @method Club[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ClubRepository  extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Club::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function trierdate()
    {
        return $this->createQueryBuilder('Club')
            ->orderBy('Club.categorie', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findEntitiesByString($str)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c
                FROM src:Club c
                WHERE c.categorie LIKE :str'
            )
            ->setParameter('str', '%' . $str . '%')
            ->getResult();
    }

    public function countClub()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('count(club.validite)');
        $qb->from('App\Entity\Club', 'club');

        $count = $qb->getQuery()->getSingleScalarResult();

        return $count;
    }
}
