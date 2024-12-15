<?php

namespace App\Repository;

use App\Entity\ResearchTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ResearchTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResearchTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResearchTeam[]    findAll()
 * @method ResearchTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResearchTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResearchTeam::class);
    }

    // /**
    //  * @return ResearchTeam[] Returns an array of ResearchTeam objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResearchTeam
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
