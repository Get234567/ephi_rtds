<?php

namespace App\Repository;

use App\Entity\SaveQuery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SaveQuery|null find($id, $lockMode = null, $lockVersion = null)
 * @method SaveQuery|null findOneBy(array $criteria, array $orderBy = null)
 * @method SaveQuery[]    findAll()
 * @method SaveQuery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SaveQueryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SaveQuery::class);
    }

    // /**
    //  * @return SaveQuery[] Returns an array of SaveQuery objects
    //  */
  
    public function findData($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.name = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
  

    /*
    public function findOneBySomeField($value): ?SaveQuery
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
