<?php

namespace App\Repository;

use App\Entity\DownloadRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Attachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attachment[]    findAll()
 * @method Attachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DownloadRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DownloadRequest::class);
    }

    public function findStatus($status=null,$search=null)
    {
         $qb=$this->createQueryBuilder('d')
            ->andWhere("d.Status IS NULL");
          //->setParameter('status', $status);
            if($search){
                
              $qb
        ->orWhere("d.Email LIKE '%". $search."%' ")
        ->orWhere("d.Name LIKE '%". $search."%' ")
        ->orWhere("d.MiddleName LIKE '%". $search."%' ")
        ->orWhere("d.LastName LIKE '%". $search."%' ")
        ->orWhere("d.Phone LIKE '%". $search."%' ");
            }
           return $qb->orderBy('d.RequestedDate', 'Desc')
            ->getQuery();
        
        
    }
    public function findRejected()
    {
         $qb=$this->createQueryBuilder('d')
            ->andWhere("d.Status= 0");

           return $qb->orderBy('d.RequestedDate', 'Desc')
            ->getQuery();
        
        
    }


    // /**
    //  * @return Attachment[] Returns an array of Attachment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Attachment
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
