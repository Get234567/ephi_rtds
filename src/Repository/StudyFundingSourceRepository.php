<?php

namespace App\Repository;

use App\Entity\StudyFundingSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyFundingSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyFundingSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyFundingSource[]    findAll()
 * @method StudyFundingSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyFundingSourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyFundingSource::class);
    }

    // /**
    //  * @return StudyFundingSource[] Returns an array of StudyFundingSource objects
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
    public function findOneBySomeField($value): ?StudyFundingSource
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
