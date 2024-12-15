<?php

namespace App\Repository;

use App\Entity\GeospatialPoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GeospatialPoints|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeospatialPoints|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeospatialPoints[]    findAll()
 * @method GeospatialPoints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeospatialPointsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeospatialPoints::class);
    }

    public function locationSearch($name=null)
    {
       
        $qb= $this->createQueryBuilder('g');
 
        
            $qb
            ->where("g.name LIKE '". $name."%' ");
           
            
       
       
        $data= $qb->getQuery()->getResult();
   
   return $data;

    }



    // /**
    //  * @return GeospatialPoints[] Returns an array of GeospatialPoints objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeospatialPoints
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
