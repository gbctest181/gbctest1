<?php

namespace App\Repository;

use App\Entity\PieceVE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PieceVE|null find($id, $lockMode = null, $lockVersion = null)
 * @method PieceVE|null findOneBy(array $criteria, array $orderBy = null)
 * @method PieceVE[]    findAll()
 * @method PieceVE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PieceVERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PieceVE::class);
    }

    // /**
    //  * @return PieceVE[] Returns an array of PieceVE objects
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
    public function findOneBySomeField($value): ?PieceVE
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
