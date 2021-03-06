<?php

namespace App\Repository;

use App\Entity\Property;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }



    //on crée une méthode pour retourner tous les biens non vendus, ça c'est une requete
    /**
     * @return Query
     */


    public function findAllVisibleQuery(): Query

    {
        return $this->findVisibleQuery()

            ->getQuery();
           // ->getResult();
    }
    // /**
    //  * @return Property[] Returns an array of Property objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Property
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @return Property[]
     */
    public function findLatest(): array
    {
        return $this->findVisibleQuery('p')
            ->where('p.sold = false')
            ->setMaxResults(4)
            ->getQuery()
            ->getResult();

    }

    //méthode de requete pour trouver tous les enregistrements disponibles

    /**
     * @return QueryBuilder|\Doctrine\ORM\QueryBuilder
     */
    private function findVisibleQuery()
    {

        return $this->createQueryBuilder('p')
            ->where('p.sold = false');
    }
}
