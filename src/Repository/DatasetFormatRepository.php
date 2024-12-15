<?php

namespace App\Repository;

use App\Entity\DatasetFormat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DatasetFormat|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasetFormat|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasetFormat[]    findAll()
 * @method DatasetFormat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasetFormatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasetFormat::class);
    }

   
    public function findData($name){

        $qb= $this->createQueryBuilder('d');
      
      
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ");        
    }
       
  
        return $qb;
          
    }

    // /**
    //  * @return DatasetFormat[] Returns an array of DatasetFormat objects
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
    public function findOneBySomeField($value): ?DatasetFormat
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
