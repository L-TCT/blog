
## Installation

# My awesome blog
My awesome blog est un test d'évaluation back-end dans le cadre de la formation developpeur web et web mobile

## Document pour la création de la BDD
Les documents se situent dans le dossier "doc".
    *MCD -> MCD.JPG
    *MLD -> MLD.JPG
    *MPD -> MPD.sql
Le fichier epreuve .mcd a été conçu avec le logiciel Jmerise

## Environnement de développement

### Pré-requis

*PHP 7.4.9
*Composer
*Symfony CLI
*MySql 8.0.21

### Installation de la BDD
Le dossier "doc" contient le fichier "blog.sql" à installer dans wamp (ou équivalent).
Après l'installation, vérifier dans le fichier .env l'URL de la database.

### Lancer l'environnement de développement

```bash
npm install
composer install
npm install --force
npm run build
symfony serve -d
```
Il s'ouvrira sur la première page du site (liste des Articles)

## Fonctionnalités existantes

###  Liste, vue, filtrage
 - Liste des articles sur la page home,
 
 - Vue d'un article (en cliquant sur le bouton voir ) sur la page view,

 - Filtrage sur la page home des statuts via des checkboxs,
 
 - Affichage de la liste filtrée par catégorie ou par tag (via une nouvelle page filtre) : 
        -  en selectionnant la catégorie ou le tag dans le menu déroulant sur la première page,
        -  en cliquant sur la catégorie ou le tag dans la vue de l'article,

 ### Partie Admin

 - il n'y a pas de mot de passe pour la partie Admin,
                                                 
 - La création, la modification et la suppression sont accesibles par le bouton "Admin" pour les articles, les catégories et les tags,
  
 - Pour revenir à la  page 'Home', cliquer sur "Home",
