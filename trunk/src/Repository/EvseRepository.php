<?php

namespace App\Repository;

use App\Entity\Evse;
use App\Entity\Station;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evse>
 *
 * @method Evse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evse[]    findAll()
 * @method Evse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evse::class);
    }

    public function save(Evse $evse): void
    {
        $this->getEntityManager()->persist($evse);
        $this->getEntityManager()->flush();
    }

    public function findOneEvse(string $evseId): ?Evse
    {
        return $this->findOneBy(['id' => $evseId]);
    }

    //public function

    //    /**
    //     * @return Evse[] Returns an array of Evse objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Evse
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
