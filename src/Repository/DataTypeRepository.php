<?php

namespace App\Repository;

use App\Entity\DataType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DataType|null find($id, $lockMode = null, $lockVersion = null)
 * @method DataType|null findOneBy(array $criteria, array $orderBy = null)
 * @method DataType[]    findAll()
 * @method DataType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DataType::class);
    }
    public function findData($name){

        $qb= $this->createQueryBuilder('d');
      
      
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ");        
    }
       
  
        return $qb;
          
    }
    // /**
    //  * @return DataType[] Returns an array of DataType objects
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
    public function findOneBySomeField($value): ?DataType
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
