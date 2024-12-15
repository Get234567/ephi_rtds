<?php

namespace App\Repository;

use App\Entity\CovarageType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CovarageType|null find($id, $lockMode = null, $lockVersion = null)
 * @method CovarageType|null findOneBy(array $criteria, array $orderBy = null)
 * @method CovarageType[]    findAll()
 * @method CovarageType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CovarageTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CovarageType::class);
    }

    // /**
    //  * @return CovarageType[] Returns an array of CovarageType objects
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
    public function findOneBySomeField($value): ?CovarageType
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
