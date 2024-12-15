<?php

namespace App\Repository;

use App\Entity\StudySubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudySubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudySubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudySubject[]    findAll()
 * @method StudySubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudySubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudySubject::class);
    }

    // /**
    //  * @return StudySubject[] Returns an array of StudySubject objects
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
    public function findOneBySomeField($value): ?StudySubject
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
