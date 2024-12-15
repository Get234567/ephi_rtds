<?php

namespace App\Repository;

use App\Entity\DatasetAttachment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DatasetAttachment|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatasetAttachment|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatasetAttachment[]    findAll()
 * @method DatasetAttachment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class DatasetAttachmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatasetAttachment::class);
    }
    public function getapprovedfile($id){
       return $this->createQueryBuilder('d')
         ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.dataset = a.ItemID and d.id = a.AttachmentId')
         ->andWhere("a.RequestType ='Upload'")
         ->andWhere("a.ItemType ='Dataset'")
        ->andWhere("a.Status =1")
        ->andWhere('d.dataset = :id ')
        ->setParameter('id', $id)->getQuery()->getResult();
    }
    public function getrequestfile($id,$user){
        echo $id.$user;
       dd( $this->createQueryBuilder('d')
        
        ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.dataset = a.ItemID')
        ->andWhere("a.ItemType ='Dataset'")
        ->andWhere("a.RequestType ='Download'")
        ->andWhere("a.Status =1")
        ->andWhere('a.Sender = :user ')
        ->andWhere('d.dataset = :id ')
        ->setParameter('user', $user)
        ->setParameter('id', $id)->getQuery()->getResult());
       

    }

    // /**
    //  * @return DatasetAttachment[] Returns an array of DatasetAttachment objects
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
    public function findOneBySomeField($value): ?DatasetAttachment
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
