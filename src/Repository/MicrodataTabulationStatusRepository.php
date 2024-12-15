<?php

namespace App\Repository;

use App\Entity\MicrodataTabulationStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MicrodataTabulationStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method MicrodataTabulationStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method MicrodataTabulationStatus[]    findAll()
 * @method MicrodataTabulationStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MicrodataTabulationStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MicrodataTabulationStatus::class);
    }
    public function findData($name){

        $qb= $this->createQueryBuilder('d');
      
      
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ");        
    }
       
  
        return $qb;
          
    }
    // /**
    //  * @return MicrodataTabulationStatus[] Returns an array of MicrodataTabulationStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MicrodataTabulationStatus
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
