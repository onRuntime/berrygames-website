<?php

namespace App\Repository;

use App\Entity\GoodBinary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GoodBinary|null find($id, $lockMode = null, $lockVersion = null)
 * @method GoodBinary|null findOneBy(array $criteria, array $orderBy = null)
 * @method GoodBinary[]    findAll()
 * @method GoodBinary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoodBinaryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GoodBinary::class);
    }

    // /**
    //  * @return GoodBinary[] Returns an array of GoodBinary objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GoodBinary
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
