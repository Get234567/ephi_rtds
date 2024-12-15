<?php

namespace App\Repository;

use App\Entity\DatasetCauseOfDeath;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DatasetCauseOfDeath|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasetCauseOfDeath|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasetCauseOfDeath[]    findAll()
 * @method DatasetCauseOfDeath[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasetCauseOfDeathRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasetCauseOfDeath::class);
    }

    // /**
    //  * @return DatasetCauseOfDeath[] Returns an array of DatasetCauseOfDeath objects
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
    public function findOneBySomeField($value): ?DatasetCauseOfDeath
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
