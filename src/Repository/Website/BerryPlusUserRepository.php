<?php

namespace App\Repository\Website;

use App\Entity\Website\BerryPlusUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BerryPlusUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method BerryPlusUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method BerryPlusUser[]    findAll()
 * @method BerryPlusUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BerryPlusUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BerryPlusUser::class);
    }

    // /**
    //  * @return BerryPlusUser[] Returns an array of BerryPlusUser objects
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
    public function findOneBySomeField($value): ?BerryPlusUser
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
