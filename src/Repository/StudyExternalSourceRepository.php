<?php

namespace App\Repository;

use App\Entity\StudyExternalSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyExternalSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyExternalSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyExternalSource[]    findAll()
 * @method StudyExternalSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyExternalSourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyExternalSource::class);
    }

    // /**
    //  * @return StudyExternalSource[] Returns an array of StudyExternalSource objects
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
    public function findOneBySomeField($value): ?StudyExternalSource
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