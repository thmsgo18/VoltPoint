<?php

namespace App\Repository;

use App\Data\AdminSessionFilter;
use App\Entity\RechargeSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RechargeSession>
 *
 * @method RechargeSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method RechargeSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method RechargeSession[]    findAll()
 * @method RechargeSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RechargeSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RechargeSession::class);
    }

    public function getAllSessions(): array
    {
        return $this->findAll();
    }

    public function save(RechargeSession $session): void
    {
        $this->getEntityManager()->persist($session);
        $this->getEntityManager()->flush();
    }

    public function findOneSession(string $sessionId): ?RechargeSession
    {
        return $this->findOneBy(['id' => $sessionId]);
    }

    public function adminFindByFilter(AdminSessionFilter $filter): array {

        $qb = $this->createQueryBuilder('p');

        if(!empty($filter->getId())){
            $qb = $qb
                ->andWhere('p.id = :id')
                ->setParameter('id', $filter->getId());
        }

        if(!empty($filter->getCity())){
            $qb = $qb
                ->leftJoin('p.evse', 'e1')
                ->leftJoin('e1.station', 's1')
                ->andWhere('s1.city = :city')
                ->setParameter('city', $filter->getCity());
        }

        if(!empty($filter->getStreet())){
            $qb = $qb
                ->leftJoin('p.evse', 'e2')
                ->leftJoin('e2.station', 's2')
                ->andWhere('s2.street = :street')
                ->setParameter('street', $filter->getStreet());
        }

        if(!empty($filter->getUsername())){
            $qb = $qb
                ->leftJoin('p.user', 'un')
                ->andWhere('un.name = :usern')
                ->setParameter('usern', $filter->getUsername());
        }

        if(!empty($filter->getUserlastname())){
            $qb = $qb
                ->leftJoin('p.user', 'ul')
                ->andWhere('ul.lastname = :userl')
                ->setParameter('userl', $filter->getUserlastname());
        }

        if(!empty($filter->getStation())){
            $qb = $qb
                ->leftJoin('p.evse', 'e3')
                ->leftJoin('e3.station', 's3')
                ->andWhere('s3.name = :station')
                ->setParameter('station', $filter->getStation());
        }

        $query = $qb->getQuery();
        return $query->execute();
    }
    //    /**
    //     * @return RechargeSession[] Returns an array of RechargeSession objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RechargeSession
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
