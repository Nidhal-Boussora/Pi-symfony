<?php

namespace App\Repository;

use App\Entity\PlanningMatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlanningMatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanningMatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanningMatch[]    findAll()
 * @method PlanningMatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningMatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanningMatch::class);
    }

    // /**
    //  * @return PlanningMatch[] Returns an array of PlanningMatch objects
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
    public function findOneBySomeField($value): ?PlanningMatch
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
