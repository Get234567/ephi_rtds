<?php

namespace App\Repository;

use App\Entity\Datapercentage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Datapercentage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Datapercentage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Datapercentage[]    findAll()
 * @method Datapercentage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatapercentageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Datapercentage::class);
    }
    public function findData($percentage){

        $qb= $this->createQueryBuilder('d');


      if($percentage){  $qb
        ->orwhere("d.percentage LIKE '%". $percentage."%' ");
    }


        return $qb;

    }


    // /**
    //  * @return Datapercentage[] Returns an array of Datapercentage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Datapercentage
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
