<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ProductRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findOneByIdJoinedToCategory(int $productId): ?Product
    {

        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            '
            SELECT p, c
            FROM APP\Entity\Product p
            INNER JOIN p.category c
            WHERE p.id > :id
            '
        )->setParameter('id', $productId);
        return $query->getOneOrNullResult();
    }
    public function FindAllGreaterThanPrice(int $price/* , bool $includeUnavailableProducts=false */): array
    {
        /* $qb = $this->createQueryBuilder('p')
                ->where('p.price > :price')
                ->setParameter('price', $price)
                ->orderBy('p.price', 'ASC'); */

        /* if (!$includeUnavailableProducts) {
            $qb->andWhere('p.available =TRUE');
        } */

        /* $query= $qb->getQuery();

        return $query->execute(); */

        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT * FROM product p
        WHERE p.price > :price
        ORDER BY p.price ASC
        ';
        $stmt = $conn->prepare($sql);
        /* so executing the statement and then simply looping over it is no longer possible --> DEPRECATED! */
        $stmt->execute(['price' => $price]);

        /* With SQL, we will get back raw data, not objects! */
        return $stmt->fetchAssociative();
    }
    ///**
    // * @return Product[]
    // */
    /* public function FindAllGreaterThanPrice(int $price): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'Select p
            FROM App\Entity\Product p
            WHERE p.price > :price
            ORDER BY p.price ASC'
        )->setParameter('price', $price);

        return $query->getResult();
    } */

    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
