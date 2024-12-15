<?php

namespace App\Repository;

use App\Entity\Dataapprove;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dataapprove|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dataapprove|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dataapprove[]    findAll()
 * @method Dataapprove[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DataapproveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dataapprove::class);
    }
    public function findData($user_id){

        $qb= $this->createQueryBuilder('d');


      if($user_id){  $qb
        ->orwhere("d.user_id LIKE '%". $user_id."%' ");
    }


        return $qb;

    }
    // /**
    //  * @return Dataapprove[] Returns an array of Dataapprove objects
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
    public function findOneBySomeField($value): ?Dataapprove
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
