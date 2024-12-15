<?php

namespace App\Repository;

use App\Entity\StudyDesign;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyDesign|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyDesign|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyDesign[]    findAll()
 * @method StudyDesign[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyDesignRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyDesign::class);
    }
    public function findData($name){

        $qb= $this->createQueryBuilder('d');
      
      
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ");        
    }
       
  
        return $qb;
          
    }
    // /**
    //  * @return StudyDesign[] Returns an array of StudyDesign objects
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
    public function findOneBySomeField($value): ?StudyDesign
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
