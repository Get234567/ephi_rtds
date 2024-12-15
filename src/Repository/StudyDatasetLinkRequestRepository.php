<?php

namespace App\Repository;

use App\Entity\StudyDatasetLinkRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyDatasetLinkRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyDatasetLinkRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyDatasetLinkRequest[]    findAll()
 * @method StudyDatasetLinkRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyDatasetLinkRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyDatasetLinkRequest::class);
    }

    // /**
    //  * @return StudyDatasetLinkRequest[] Returns an array of StudyDatasetLinkRequest objects
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
    public function findOneBySomeField($value): ?StudyDatasetLinkRequest
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
