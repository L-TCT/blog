<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
     /**
     * @Route("/view/{id}", name="view")
     */
    public function show(int $id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);
        return $this->render('view/show.html.twig', [
            'article' => $article,
        ]);
    }

}
