<?php

namespace App\Repository;

use App\Entity\StudyType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StudyType|null find($id, $lockMode = null, $lockVersion = null)
 * @method StudyType|null findOneBy(array $criteria, array $orderBy = null)
 * @method StudyType[]    findAll()
 * @method StudyType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StudyType::class);
    }
    public function findData($name){

        $qb= $this->createQueryBuilder('d');
      
      
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ");        
    }
       
  
        return $qb;
          
    }
    // /**
    //  * @return StudyType[] Returns an array of StudyType objects
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
    public function findOneBySomeField($value): ?StudyType
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
