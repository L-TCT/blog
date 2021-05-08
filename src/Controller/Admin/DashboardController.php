<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('My awesome Blog');
    }

    public function configureMenuItems(): iterable
    {
        return 
        [MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
        MenuItem::linkToCrud('Articles', 'fa fa-newspaper', Article::class),
        MenuItem::linkToCrud('Categories', 'fa fa-list', Categorie::class),
        MenuItem::linkToCrud('Tags', 'fa fa-tag', Tag::class)
    ];
       
    }
}
