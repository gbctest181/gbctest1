<?php

namespace App\Repository;

use App\Entity\MaterielVE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method MaterielVE|null find($id, $lockMode = null, $lockVersion = null)
 * @method MaterielVE|null findOneBy(array $criteria, array $orderBy = null)
 * @method MaterielVE[]    findAll()
 * @method MaterielVE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterielVERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MaterielVE::class);
    }

    // /**
    //  * @return MaterielVE[] Returns an array of MaterielVE objects
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
    public function findOneBySomeField($value): ?MaterielVE
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
