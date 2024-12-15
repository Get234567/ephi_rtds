<?php

namespace App\Repository;

use App\Entity\JoinStudy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method JoinStudy|null find($id, $lockMode = null, $lockVersion = null)
 * @method JoinStudy|null findOneBy(array $criteria, array $orderBy = null)
 * @method JoinStudy[]    findAll()
 * @method JoinStudy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoinStudyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JoinStudy::class);
    }

    // /**
    //  * @return JoinStudy[] Returns an array of JoinStudy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JoinStudy
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
