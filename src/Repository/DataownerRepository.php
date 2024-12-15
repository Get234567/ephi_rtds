<?php

namespace App\Repository;

use App\Entity\Dataowner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dataowner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dataowner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dataowner[]    findAll()
 * @method Dataowner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataownerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dataowner::class);
    }
    public function findData($unit){

        $qb= $this->createQueryBuilder('d');


      if($unit){  $qb
        ->orwhere("d.unit LIKE '%". $unit."%' ");
    }


        return $qb;

    }
    // /**
    //  * @return Dataowner[] Returns an array of Dataowner objects
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
    public function findOneBySomeField($value): ?Dataowner
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
