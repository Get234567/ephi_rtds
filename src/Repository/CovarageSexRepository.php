<?php

namespace App\Repository;

use App\Entity\CovarageSex;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CovarageSex|null find($id, $lockMode = null, $lockVersion = null)
 * @method CovarageSex|null findOneBy(array $criteria, array $orderBy = null)
 * @method CovarageSex[]    findAll()
 * @method CovarageSex[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CovarageSexRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CovarageSex::class);
    }

    // /**
    //  * @return CovarageSex[] Returns an array of CovarageSex objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CovarageSex
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
