<?php

namespace App\Repository;

use App\Entity\UserPermission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserPermission|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserPermission|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserPermission[]    findAll()
 * @method UserPermission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserPermission::class);
    }

    public function findSearch($name)
    {
        $qb= $this->createQueryBuilder('d');
    
      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ")
        ->orWhere("d.description LIKE '%". $name."%' ");
        
    }
       
  
        return $qb
            ->orderBy('d.description', 'ASC')->getQuery()->getResult();
    }

    /*
    public function findOneBySomeField($value): ?UserPermission
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
