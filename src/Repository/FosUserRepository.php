<?php

namespace App\Repository;

use App\Entity\FosUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FosUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method FosUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method FosUser[]    findAll()
 * @method FosUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FosUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FosUser::class);
    }
    
  
    public function findSearch($name)
    {
        $qb= $this->createQueryBuilder('d')
        ->leftJoin('App:UserInfo', 'a', 'WITH', 'd.id = a.User');
        
    
      if($name){  
          
        $qb
        
        ->orwhere("a.FirstName LIKE '%". $name."%' ")
        ->orWhere("d.username LIKE '%". $name."%' ");
        
    }
       
  
        return $qb
            ->orderBy('a.FirstName', 'ASC')->getQuery()->getResult();
    }

    public function findA($search=NULL)
    {
        
        $qb= $this->createQueryBuilder('d')
        ->leftJoin('App:UserInfo', 'a', 'WITH', 'd.id = a.User');
    
    if($search){
        
          
           $qb
            ->orwhere("a.FirstName LIKE '%". $search."%' ")
            ->orWhere("d.username LIKE '%". $search."%' ");
            
        
    }
       
  
        return $qb
            ->orderBy('a.FirstName', 'ASC')->getQuery();
    }
    

    /*
    public function findOneBySomeField($value): ?Study
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
