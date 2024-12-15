<?php

namespace App\Repository;

use App\Entity\DatasetStudySubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DatasetStudySubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasetStudySubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasetStudySubject[]    findAll()
 * @method DatasetStudySubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasetStudySubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasetStudySubject::class);
    }

    // /**
    //  * @return DatasetStudySubject[] Returns an array of DatasetStudySubject objects
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
    public function findOneBySomeField($value): ?DatasetStudySubject
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
