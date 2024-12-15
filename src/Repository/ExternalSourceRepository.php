<?php

namespace App\Repository;

use App\Entity\ExternalSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ExternalSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExternalSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExternalSource[]    findAll()
 * @method ExternalSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExternalSourceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExternalSource::class);
    }

    // /**
    //  * @return ExternalSource[] Returns an array of ExternalSource objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExternalSource
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
