<?php

namespace App\Repository;

use App\Entity\RequestReason;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RequestReason|null find($id, $lockMode = null, $lockVersion = null)
 * @method RequestReason|null findOneBy(array $criteria, array $orderBy = null)
 * @method RequestReason[]    findAll()
 * @method RequestReason[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RequestReasonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RequestReason::class);
    }

    // /**
    //  * @return RequestReason[] Returns an array of RequestReason objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RequestReason
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
