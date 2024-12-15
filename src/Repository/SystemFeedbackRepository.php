<?php

namespace App\Repository;

use App\Entity\SystemFeedback;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SystemFeedback|null find($id, $lockMode = null, $lockVersion = null)
 * @method SystemFeedback|null findOneBy(array $criteria, array $orderBy = null)
 * @method SystemFeedback[]    findAll()
 * @method SystemFeedback[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SystemFeedbackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SystemFeedback::class);
    }

    // /**
    //  * @return SystemFeedback[] Returns an array of SystemFeedback objects
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
    public function findOneBySomeField($value): ?SystemFeedback
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
