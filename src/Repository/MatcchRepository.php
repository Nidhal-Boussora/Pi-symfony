<?php

namespace App\Repository;

use App\Entity\Matcch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Matcch|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matcch|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matcch[]    findAll()
 * @method Matcch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatcchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matcch::class);
    }

    // /**
    //  * @return Matcch[] Returns an array of Matcch objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Matcch
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
