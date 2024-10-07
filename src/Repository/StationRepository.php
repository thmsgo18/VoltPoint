<?php

declare(strict_types=1);

namespace App\Repository;

use App\Data\AdminStationFilter;
use App\Data\UserFilter;
use App\Entity\Station;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;
use Doctrine\Persistence\ManagerRegistry;

class StationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Station::class);
    }

    public function save(Station $station): void
    {
        $this->getEntityManager()->persist($station);
        $this->getEntityManager()->flush();
    }

    public function findOneStation(string $stationId): ?Station
    {
        return $this->findOneBy(['id' => $stationId]);
    }
    public function getAllStation(): array
    {
        return $this->findAll();
    }

    public function findByFilter(UserFilter $filter, User $user): array {

        $qb = $this->createQueryBuilder('p');

        if(!empty($filter->getCity())){
            $qb = $qb
                ->andWhere('p.city LIKE :city')
                ->setParameter('city', $filter->getCity());
        }

        if($filter->getDispo()){
            $qb = $qb
                ->leftJoin('p.evses', 'a')
                ->andWhere('a.disponibility = ?1')
                ->setParameter(1, 1);
        }

        if($filter->getConnector()){
            $qb = $qb
                ->leftJoin('p.evses', 'b')
                ->andWhere('b.connector1 LIKE :myprise')
                ->orWhere('b.connector2 LIKE :myprise')
                ->setParameter('myprise', $filter->getConnector()->getName());
        }

        if($filter->getFavPrise() && $user->getFavPrise()){
            $qb = $qb
                ->leftJoin('p.evses', 'b')
                ->andWhere('b.connector1 LIKE :myfavprise')
                ->orWhere('b.connector2 LIKE :myfavprise')
                ->setParameter('myfavprise', $user->getFavPrise());
        }

        $query = $qb->getQuery();
        return $query->execute();
    }

    public function adminFindByFilter(AdminStationFilter $filter): array {

        $qb = $this->createQueryBuilder('p');

        if(!empty($filter->getCity())){
            $qb = $qb
                ->andWhere('p.city = :city')
                ->setParameter('city', $filter->getCity());
        }

        if(!empty($filter->getName())){
            $qb = $qb
                ->andWhere('p.name = :name')
                ->setParameter('name', $filter->getName());
        }

        if(!empty($filter->getId())){
            $qb = $qb
                ->andWhere('p.id = :id')
                ->setParameter('id', $filter->getId());
        }

        if(!empty($filter->getStreet())){
            $qb = $qb
                ->andWhere('p.street = :street')
                ->setParameter('street', $filter->getStreet());
        }

        if($filter->getPostal() != 0){
            $qb = $qb
                ->andWhere('p.postal = :postal')
                ->setParameter('postal', $filter->getPostal());
        }

        $query = $qb->getQuery();
        return $query->execute();
    }
}