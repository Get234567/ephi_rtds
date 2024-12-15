<?php

namespace App\Repository;

use App\Entity\ProjectParentProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProjectParentProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectParentProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectParentProject[]    findAll()
 * @method ProjectParentProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectParentProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectParentProject::class);
    }

    // /**
    //  * @return ProjectParentProject[] Returns an array of ProjectParentProject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjectParentProject
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
