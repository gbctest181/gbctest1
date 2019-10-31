<?php

namespace App\Repository;

use App\Entity\PieceBI;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PieceBI|null find($id, $lockMode = null, $lockVersion = null)
 * @method PieceBI|null findOneBy(array $criteria, array $orderBy = null)
 * @method PieceBI[]    findAll()
 * @method PieceBI[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PieceBIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PieceBI::class);
    }

    // /**
    //  * @return PieceBI[] Returns an array of PieceBI objects
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
    public function findOneBySomeField($value): ?PieceBI
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
