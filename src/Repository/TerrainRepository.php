<?php

namespace App\Repository;
use App\Entity\Terrain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Data\SearchData;


/**
 * @method Terrain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Terrain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Terrain[]    findAll()
 * @method Terrain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class TerrainRepository  extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Terrain::class);
    }

    /**
     *@return Terrain[]
     */
    public function findSearch(SearchData $search ) : array
    {
        $query = $this->createQueryBuilder('Terrain')->select('Terrain');

        if ($search->q) {
            $query =
                $query
                    ->where('Terrain.typeterrain LIKE :SearchData')
                    ->setParameter('SearchData', '%' . $search->q . '%');

        }


        return $query->getQuery()->getResult();
    }

//    public function trierwalid()
//    {
//        return $this->createQueryBuilder('Terrain')
//            ->orderBy('Terrain.typeterrain', 'ASC')
//            ->getQuery()
//            ->getResult();
//    }















//    public function findEntitiesByString($str){
//        return $this->createQueryBuilder('Terrain')->where('Terrain.typeTerrain LIKE : str')->
//        setParameter('str','%',$str.'%')->getQuery()->getResult();
//    }

//        return $this->getEntityManager()->createQuery("Terrain").WHERE("Terrain.typeTerrain = :str")->
//            setParameter('str','%'.$str.'%')->getResult();

//        return $this->getEntityManager()->createQuery(Terrain,'terrain').where('terrain.typeTerrain = :str')->
//            setParameter('str','%'.$str.'%')->getResult();
//return $this->getEntityManager()->createQuery('SELECT t FROM AppBundle:Terrain t WHERE t.typeTerrain LIKE :str')->
//setParameter('str','%'.$str.'%')->getResult();





//    /**
//     * @throws ORMException
//     * @throws OptimisticLockException
//     */
//    public function triertype()
//    {
//        return $this->createQueryBuilder('Terrain')
//            ->orderBy('Terrain.typeTerrain', 'ASC')
//            ->getQuery()
//            ->getResult();
//    }

    // /**
    //  * @return Terrain[] Returns an array of Aliment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Terrain
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

