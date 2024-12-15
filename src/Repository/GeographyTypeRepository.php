<?php

namespace App\Repository;

use App\Entity\GeographyType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GeographyType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeographyType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeographyType[]    findAll()
 * @method GeographyType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeographyTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeographyType::class);
    }

    // /**
    //  * @return GeographyType[] Returns an array of GeographyType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeographyType
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
