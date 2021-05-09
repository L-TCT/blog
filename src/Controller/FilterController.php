<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilterController extends AbstractController
{
    /**
     * @Route("/filter/{categorie}", name="filterCategorie")
     */
    public function filter($categorie, CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findBy(['nomCategorie' => $categorie]);
        return $this->render('filter/filter.html.twig', [
            'categories' => $categories,
        ]);
    }
}
