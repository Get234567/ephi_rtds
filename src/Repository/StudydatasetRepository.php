<?php

namespace App\Repository;

use App\Entity\Studydataset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Studydataset|null find($id, $lockMode = null, $lockVersion = null)
 * @method Studydataset|null findOneBy(array $criteria, array $orderBy = null)
 * @method Studydataset[]    findAll()
 * @method Studydataset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudydatasetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Studydataset::class);
    }

    // /**
    //  * @return Studydataset[] Returns an array of Studydataset objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Studydataset
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
