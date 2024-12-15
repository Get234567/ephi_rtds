<?php

namespace App\Repository;

use App\Entity\Testpage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Testpage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Testpage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Testpage[]    findAll()
 * @method Testpage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestpageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Testpage::class);
    }

    // /**
    //  * @return Testpage[] Returns an array of Testpage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Testpage
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
