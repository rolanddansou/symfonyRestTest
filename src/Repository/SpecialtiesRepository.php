<?php

namespace App\Repository;

use App\Entity\Specialties;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Specialties|null find($id, $lockMode = null, $lockVersion = null)
 * @method Specialties|null findOneBy(array $criteria, array $orderBy = null)
 * @method Specialties[]    findAll()
 * @method Specialties[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpecialtiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Specialties::class);
    }

    // /**
    //  * @return Specialties[] Returns an array of Specialties objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Specialties
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
