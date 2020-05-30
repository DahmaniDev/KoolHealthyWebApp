<?php

namespace App\Repository;

use App\Entity\Traiteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Traiteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Traiteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Traiteur[]    findAll()
 * @method Traiteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraiteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Traiteur::class);
    }

    // /**
    //  * @return Traiteur[] Returns an array of Traiteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Traiteur
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
