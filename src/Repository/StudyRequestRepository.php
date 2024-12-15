<?php

namespace App\Repository;

use App\Entity\StudyRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyRequest[]    findAll()
 * @method StudyRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyRequest::class);
    }

    // /**
    //  * @return StudyRequest[] Returns an array of StudyRequest objects
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
    public function findOneBySomeField($value): ?StudyRequest
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
