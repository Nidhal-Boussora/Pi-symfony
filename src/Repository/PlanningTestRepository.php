<?php

namespace App\Repository;

use App\Entity\PlanningTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlanningTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanningTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanningTest[]    findAll()
 * @method PlanningTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanningTest::class);
    }

    // /**
    //  * @return PlanningTest[] Returns an array of PlanningTest objects
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
    public function findOneBySomeField($value): ?PlanningTest
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
