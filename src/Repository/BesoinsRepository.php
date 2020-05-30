<?php

namespace App\Repository;

use App\Entity\Besoins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Besoins|null find($id, $lockMode = null, $lockVersion = null)
 * @method Besoins|null findOneBy(array $criteria, array $orderBy = null)
 * @method Besoins[]    findAll()
 * @method Besoins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BesoinsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Besoins::class);
    }

    // /**
    //  * @return Besoins[] Returns an array of Besoins objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Besoins
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
