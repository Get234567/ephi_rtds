<?php

namespace App\Repository;

use App\Entity\SignupRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SignupRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method SignupRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method SignupRequest[]    findAll()
 * @method SignupRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignupRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SignupRequest::class);
    }

    public function findByStatus($search=null)
    {
        $qb=$this->createQueryBuilder('a');

        if($search)
        {
            $qb->leftJoin('App:FosUser', 'u', 'WITH', 'a.user = u.id')
            ->orWhere("u.email LIKE '%". $search."%' ")
            ->orWhere("u.username LIKE '%". $search."%' ");
            
           
            
        }
        $qb->andWhere('a.status IS NULL');
                return $qb;
    }

  

    // public function getseen($seen)
    // {
    //     $qb=$this->createQueryBuilder('a');
    //    // ->orderBy('a.seen', 'DESC') ;
    //     $qb->andWhere('a.seen = :val')
    //        ->setParameter('val', $seen);
    //     return $qb;
    
    // }

     public function CountSeen($seen)
    {
        return $this->createQueryBuilder('a')
        ->select('count(a.id) as count')
        ->andWhere('a.seen = 0')
         ->getQuery()
        ->getResult()
        ;
    }

    


}
