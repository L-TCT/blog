CREATE DATABASE blog;

CREATE TABLE Categorie(
    idCategorie SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomCategorie VARCHAR(50) NOT NULL,
    descriptionCategorie VARCHAR (200) NOT NULL
)
ENGINE=InnoDB;

CREATE TABLE tag(
    idTag SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomTag VARCHAR(50) NOT NULL,
    descriptionTag VARCHAR (200) NOT NULL
)
ENGINE=InnoDB;

CREATE TABLE Article(
    idArticle SMALLINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titreArticle VARCHAR(50) NOT NULL,
    statutArticle CHAR(20) NOT NULL,
    dateCreationArticle DATE NOT NULL,
    datePublicationArticle DATE NOT NULL,
    contenuArticle TEXT NOT NULL,
    idCategorie SMALLINT UNSIGNED NOT NULL,
    CONSTRAINT fk_table_categorie FOREIGN KEY (idCategorie) REFERENCES Categorie(idCategorie)
)
ENGINE=InnoDB;

CREATE TABLE possede(
    idTag SMALLINT UNSIGNED NOT NULL,
    idArticle SMALLINT UNSIGNED NOT NULL,
    CONSTRAINT fk_possede_tag FOREIGN KEY (idTAG) REFERENCES Tag(idTag),
    CONSTRAINT fk_possed_article FOREIGN KEY (idArticle) REFERENCES Article(idArticle)
)
ENGINE=InnoDB;
