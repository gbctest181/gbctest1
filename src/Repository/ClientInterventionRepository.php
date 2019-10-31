<?php

namespace App\Repository;

use App\Entity\ClientIntervention;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ClientIntervention|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientIntervention|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientIntervention[]    findAll()
 * @method ClientIntervention[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientInterventionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientIntervention::class);
    }

    // /**
    //  * @return ClientIntervention[] Returns an array of ClientIntervention objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClientIntervention
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
