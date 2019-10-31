<?php

namespace App\Repository;

use App\Entity\MaterielBI;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MaterielBI|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterielBI|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterielBI[]    findAll()
 * @method MaterielBI[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterielBIRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterielBI::class);
    }

    // /**
    //  * @return MaterielBI[] Returns an array of MaterielBI objects
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
    public function findOneBySomeField($value): ?MaterielBI
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
