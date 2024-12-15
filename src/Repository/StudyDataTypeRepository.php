<?php

namespace App\Repository;

use App\Entity\StudyDataType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyDataType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyDataType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyDataType[]    findAll()
 * @method StudyDataType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyDataTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyDataType::class);
    }

    // /**
    //  * @return StudyDataType[] Returns an array of StudyDataType objects
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
    public function findOneBySomeField($value): ?StudyDataType
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
