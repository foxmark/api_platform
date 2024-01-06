<?php

namespace App\Repository;

use App\Entity\WorkflowBlueprint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowBlueprint>
 *
 * @method WorkflowBlueprint|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowBlueprint|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowBlueprint[]    findAll()
 * @method WorkflowBlueprint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowBlueprintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowBlueprint::class);
    }

//    /**
//     * @return WorkflowBlueprint[] Returns an array of WorkflowBlueprint objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WorkflowBlueprint
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
