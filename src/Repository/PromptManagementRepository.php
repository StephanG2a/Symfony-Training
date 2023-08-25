<?php

namespace App\Repository;

use App\Entity\PromptManagement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PromptManagement>
 *
 * @method PromptManagement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromptManagement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromptManagement[]    findAll()
 * @method PromptManagement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromptManagementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromptManagement::class);
    }

//    /**
//     * @return PromptManagement[] Returns an array of PromptManagement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PromptManagement
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
