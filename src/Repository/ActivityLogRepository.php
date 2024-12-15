<?php

namespace App\Repository;

use App\Entity\ActivityLog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ActivityLog|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActivityLog|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActivityLog[]    findAll()
 * @method ActivityLog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActivityLogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActivityLog::class);
    }
    public function getrequestdatasetfile($id,$user){
      
       return $this->createQueryBuilder('a')
        ->andWhere("a.ItemType ='Dataset'")
        ->andWhere("a.RequestType ='Download'")
        
        ->andWhere('a.Sender = :user ')
        ->andWhere('a.ItemID = :id ')
        ->setParameter('user', $user)
        ->setParameter('id', $id)->getQuery()->getResult();
       

    }
 public function findByStatus($type=0)
    {
        $qb=$this->createQueryBuilder('a')
        ->orderBy('a.RequestedDate', 'DESC') ;
        $qb->andWhere('a.Status = :val')
           ->setParameter('val', $type);
        return $qb;

     }
           public function findYourRequest($user,$search=null){
           return $this->createQueryBuilder('r')
            ->andWhere('r.Sender = :val')
            ->setParameter('val', $user)
            ->orderBy('r.id', 'DESC');
          
           
        }
        public function findMyRequest($user){
            return $this->createQueryBuilder('r')
             ->andWhere('r.Sender = :val')
             ->setParameter('val', $user)
             ->orderBy('r.id', 'DESC')
             ->getQuery()
             ->getResult();
           
            
         }

    //     public function findNewnotifications($seen)
    // {
        
    //     return $this->createQueryBuilder('a')
    //         ->andWhere('a.seen = :seen')
    //         ->setParameter('seen', $seen)
    //         ->orderBy('a.id', 'Desc')
    //         ->getQuery()
    //         ->getResult()
    //     ;

        
    // }


        public function countnotification()
    {
        
        return $this->createQueryBuilder('a')
        ->select('count(a.id) as count')
        ->addSelect('a.RequestType')
            ->andWhere('a.Status = 0')
            ->groupBy('a.RequestType')
            ->getQuery()
            ->getResult()
        ;
        
       
    }

    public function countByStatus()
    {
        
        return $this->createQueryBuilder('a')
        ->select('count(a.id) as count')
            ->andWhere('a.Status is NULL')
            ->getQuery()
            ->getResult()
        ;
        
       
    }
    
}
