<?php

namespace App\Repository;

use App\Entity\ResearcherResearchTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ResearcherResearchTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResearcherResearchTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResearcherResearchTeam[]    findAll()
 * @method ResearcherResearchTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResearcherResearchTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResearcherResearchTeam::class);
    }

    // /**
    //  * @return ResearcherResearchTeam[] Returns an array of ResearcherResearchTeam objects
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
    public function findOneBySomeField($value): ?ResearcherResearchTeam
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
