<?php

namespace App\Repository;

use App\Entity\CovarageLocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CovarageLocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method CovarageLocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method CovarageLocation[]    findAll()
 * @method CovarageLocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CovarageLocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CovarageLocation::class);
    }

    // /**
    //  * @return CovarageLocation[] Returns an array of CovarageLocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CovarageLocation
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
