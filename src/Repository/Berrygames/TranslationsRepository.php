<?php

namespace App\Repository\Berrygames;

use App\Entity\Berrygames\Translations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Translations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Translations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Translations[]    findAll()
 * @method Translations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TranslationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Translations::class);
    }

    // /**
    //  * @return Translations[] Returns an array of BerryPlusUser objects
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
    public function findOneBySomeField($value): ?Translations
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
