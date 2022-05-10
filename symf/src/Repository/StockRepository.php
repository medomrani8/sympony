<?php

namespace App\Repository;
use App\Entity\Stock;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stock|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stock|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stock[]    findAll()
 * @method Stock[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class StockRepository  extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stock::class);
    }


    //using query builder
    public function rechercheAvanceStock($str)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT S
                FROM App\Entity\Stock S
                WHERE S.nom LIKE :str'
            )
            ->setParameter('str', '%' . $str . '%')
            ->getResult();

    }
}
