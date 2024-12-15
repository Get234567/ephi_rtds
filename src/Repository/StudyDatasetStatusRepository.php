<?php

namespace App\Repository;

use App\Entity\StudyDatasetStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyDatasetStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyDatasetStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyDatasetStatus[]    findAll()
 * @method StudyDatasetStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyDatasetStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyDatasetStatus::class);
    }

    // /**
    //  * @return StudyDatasetStatus[] Returns an array of StudyDatasetStatus objects
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
    public function findOneBySomeField($value): ?StudyDatasetStatus
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
