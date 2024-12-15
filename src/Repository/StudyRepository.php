<?php

namespace App\Repository;

use App\Entity\Study;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Study|null find($id, $lockMode = null, $lockVersion = null)
 * @method Study|null findOneBy(array $criteria, array $orderBy = null)
 * @method Study[]    findAll()
 * @method Study[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Study::class);
    }
    public function findDataset($type=null,$search=null){
        $qb= $this->createQueryBuilder('d');
        if($type){
            if($type==5){
                $qb->andWhere('d.status IS NOT NULL');
                $qb->andWhere('d.status !=-1');
            }
      else {
        $qb->andWhere('d.status = :type')
        ->setParameter('type',$type);

      }
    
    }
        else $qb->andWhere('d.status IS NULL');
        if($search){  $qb
            ->orwhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.summary LIKE '%". $search."%' ")
            ->orWhere("d.geography LIKE '%". $search."%' ");
            
        }
        $qb->orderBy('d.id','DESC');
        return $qb;
            
    }
    public function findDatasetResult($type=null,$search=null){
        $qb= $this->createQueryBuilder('d');
        if($type)
        $qb->andWhere('d.confidentiality = :type')
        ->setParameter('type',$type);
        if($search){  $qb
            ->orwhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.summary LIKE '%". $search."%' ")
            ->orWhere("d.geography LIKE '%". $search."%' ");
            
        }
        $qb->orderBy('d.id','DESC');
        return $qb->getQuery()
        ->getResult();
     ;
            
    }

    
    public function findReview($user,$search=null){
        $qb= $this->createQueryBuilder('d')      
         ->andwhere('d.reviewer = :user ')
         ->setParameter('user', $user);
         if($search){  $qb
            ->orwhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.title LIKE '%". $search."%' ")
            ->orWhere("d.summary LIKE '%". $search."%' ")
            ->orWhere("d.geography LIKE '%". $search."%' ");
            
        }
        return  $qb->orderBy('d.id','DESC')
        ->getQuery(); 

    }
    public function findYourStudyResult($user){

        $qb= $this->createQueryBuilder('d')
         ->select('d')
         ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.id = a.ItemID')
       
         ->andwhere("a.ItemType ='Study'")
         ->andwhere('a.Sender = :user ')
         ->setParameter('user', $user)
         ->orderBy('a.id','DESC')
        ->getQuery()
        ->getResult();
     
     }

    public function findYourStudy($user,$name=null){

        $qb= $this->createQueryBuilder('d')
         ->select('d')
         ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.id = a.ItemID')
     
         ->andwhere("a.ItemType ='Study'")
         ->andwhere('a.Sender = :user ')
         ->setParameter('user', $user);
        if($name){
            $qb 
            ->andwhere("d.description LIKE '%". $name."%' ")
            ->orwhere("d.title LIKE '%". $name."%' ")
            ->orwhere("d.description LIKE '%". $name."%' ");
            // ->setParameter('title', $name);
        }
         return $qb;
     return $qb->orderBy('a.id', 'DESC');
     
     }
    
    // /**
    //  * @return Study[] Returns an array of Study objects
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
