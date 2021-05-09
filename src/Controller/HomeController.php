<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ArticleRepository $articleRepository, CategorieRepository $categorieRepository, TagRepository $tagRepository, Request $request): Response
    {//on recupère les filtres
        // $filterStatut = $request->get("statutArticle");
        
        $articles = $articleRepository->allArticles();
       
        $categories = $categorieRepository->findAll();
        
        $tags = $tagRepository->findAll();
        
        //on vérifie si on a une requête Ajax
        if($request->get('ajax')){
            return new JsonResponse([
                'content' => $this->renderView('home/_content.html.twig', [
                    'articles' => $articles,
                    'categories' => $categories,
                    'tags' => $tags,
                ])
            ]);
        }
        
      
        return $this->render('home/index.html.twig', [
            'articles' => $articles,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
    

    
    

}
