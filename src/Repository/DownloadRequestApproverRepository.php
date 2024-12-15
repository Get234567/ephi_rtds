<?php

namespace App\Repository;

use App\Entity\DownloadRequestApprover;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DownloadRequestApprover|null find($id, $lockMode = null, $lockVersion = null)
 * @method DownloadRequestApprover|null findOneBy(array $criteria, array $orderBy = null)
 * @method DownloadRequestApprover[]    findAll()
 * @method DownloadRequestApprover[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DownloadRequestApproverRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DownloadRequestApprover::class);
    }

    // /**
    //  * @return DownloadRequestApprover[] Returns an array of DownloadRequestApprover objects
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
    public function findOneBySomeField($value): ?DownloadRequestApprover
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
