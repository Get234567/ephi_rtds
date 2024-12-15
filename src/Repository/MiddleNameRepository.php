<?php

namespace App\Repository;

use App\Entity\MiddleName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MiddleName|null find($id, $lockMode = null, $lockVersion = null)
 * @method MiddleName|null findOneBy(array $criteria, array $orderBy = null)
 * @method MiddleName[]    findAll()
 * @method MiddleName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MiddleNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MiddleName::class);
    }

    // /**
    //  * @return MiddleName[] Returns an array of MiddleName objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MiddleName
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
