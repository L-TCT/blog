# Foobar

Foobar is a Python library for dealing with word pluralization.

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
symfony serve -d
```
Il s'ouvrira sur la première page du site (liste des Articles)

## Fonctionnalités existantes
 - liste des articles
 
 - vue d'un article (en cliquant sur le bouton voir )
 
 - affichage de la liste filtrée par catégorie : -  en selectionnant la catégorie dans le menu déroulant sur la première page
                                                 -  en cliquant sur la catégorie dans la vue de l'article
                                                 
 - la création, la modification et la suppression sont accesibles par le bouton "Admin" pour les articles, les catégories et les tags
 
 - il n'y a pas de mot de passe pour la partie admin
 
 - Pour revenir à la première page, cliquer sur "Home"
