<?php

namespace App\Repository;
use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Categorie;
use App\Entity\Tag;
/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }
    
   /**
    * @return Article[] Returns an array of Article objects
    */
   
    public function findByCategorie(Categorie $categorie): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.idCategorie = :categorie')
            ->setParameter('categorie', $categorie)
            ->getQuery()
            ->getResult()
        ;
    }
    
        /**
        * @return Article[] Returns an array of Article objects
        */
    
    public function allArticles($filterStatut = null)
    {
        $qb = $this->createQueryBuilder('a')
                   ->orderBy('a.id', 'ASC');
                   if($filterStatut != null){
                   $qb->andWhere('a.statutArticle IN(:statuts)')
                   ->setParameter(':statuts', array_values($filterStatut));
                   }
                   $query = $qb->getQuery();
                   return $query->execute();
    }
   

    /**
    * @return Article[] Returns an array of Article objects
    */
   
    public function findByTag(Tag $tag): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.idTags = :tag')
            ->setParameter('tag', $tag)
            ->getQuery()
            ->getResult()
        ;
    }
 

    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Article
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
