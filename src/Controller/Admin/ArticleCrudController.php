<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use Doctrine\Common\Annotations\Annotation\Enum;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class ArticleCrudController extends AbstractCrudController
{    
    public static function getEntityFqcn(): string
    {
        return Article::class;
    }
    
    public function configureFields(string $pageName): iterable
    {
        
        return [
            TextField::new('titreArticle'),
            ChoiceField::new('statutArticle')->allowMultipleChoices(false)->setChoices(['Brouillon' => 'Brouillon', 'Publié' => 'Publié', 'Corbeille' => 'Corbeille']),
            DateField::new('dateCreationArticle'),
            DateField::new('datePublicationArticle'),
            TextareaField::new('contenuArticle'),
            AssociationField::new('idCategorie')->hideOnIndex(),
            AssociationField::new('idTag')->hideOnIndex(),
        ];
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
