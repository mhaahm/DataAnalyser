<?php

namespace App\Repository;

use App\Entity\Imports;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Imports|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imports|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imports[]    findAll()
 * @method Imports[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImportsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Imports::class);
    }

    // /**
    //  * @return Imports[] Returns an array of Imports objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Imports
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
