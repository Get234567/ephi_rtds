<?php

namespace App\Repository;

use App\Entity\StudyResearcher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyResearcher|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyResearcher|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyResearcher[]    findAll()
 * @method StudyResearcher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyResearcherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyResearcher::class);
    }

    // /**
    //  * @return StudyResearcher[] Returns an array of StudyResearcher objects
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
    public function findOneBySomeField($value): ?StudyResearcher
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
