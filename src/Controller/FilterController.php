<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Repository\ArticleRepository;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilterController extends AbstractController
 
{ 
    /**
     * @Route("/filter/cat={categorie}", name="filterCategorie")
     */
    public function filter(Categorie $categorie, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findByCategorie($categorie);
        return $this->render('filter/filter.html.twig', [
            'articles' => $articles,
        ]);
    }
    
     /**
     * @Route("/filter/tag={tag}", name="filterTag")
     */
    public function filterTag(Tag $tag, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findByTag($tag);
        return $this->render('filter/filterTag.html.twig', [
            'articles' => $articles,
        ]);
    }
}
