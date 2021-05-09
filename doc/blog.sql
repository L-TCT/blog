-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 09 mai 2021 à 17:19
-- Version du serveur :  8.0.21
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categorie_id` int NOT NULL,
  `titre_article` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_article` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_creation_article` date NOT NULL,
  `date_publication_article` date NOT NULL,
  `contenu_article` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E669F34925F` (`id_categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `id_categorie_id`, `titre_article`, `statut_article`, `date_creation_article`, `date_publication_article`, `contenu_article`) VALUES
(1, 1, 'candy pudding cupcake', 'Brouillon', '2021-05-06', '0000-00-00', '\r\nTiramisu sesame snaps powder muffin chocolate wafer jelly beans gummies. Dragée candy cotton candy pie dessert cupcake tootsie roll sweet roll. Macaroon cupcake soufflé bear claw tart cookie. Muffin candy cookie halvah soufflé. Chocolate chupa chups cotton candy gummi bears chupa chups carrot cake. Jelly-o fruitcake brownie toffee. Marzipan lollipop cake gummi bears carrot cake pastry bonbon.'),
(2, 2, 'gummi bears tootsie', 'Publié', '2021-05-03', '2021-05-04', 'Halvah oat cake apple pie sweet oat cake muffin tiramisu cheesecake. Sesame snaps cheesecake jelly beans. Pudding caramels sugar plum cotton candy. Cupcake dragée halvah lemon drops tiramisu gummi bears. Sweet roll pie halvah bonbon ice cream jelly beans. Chocolate bar pie sugar plum biscuit marzipan jelly-o biscuit sugar plum. Pastry pudding candy ice cream. Croissant jujubes sesame snaps donut jujubes danish tootsie roll. Bear claw tiramisu sweet roll gingerbread bonbon oat cake muffin cheesecake candy canes. Topping oat cake dessert sweet roll cookie macaroon soufflé cheesecake.'),
(5, 1, 'Fruitcake marshmallow', 'Corbeille', '2021-04-25', '2021-05-02', 'Jelly beans fruitcake pastry soufflé cupcake gummi bears cake halvah marshmallow. Apple pie muffin lemon drops bonbon brownie carrot cake. Lollipop cookie cake candy canes candy canes. Donut sweet toffee danish tart. Wafer sweet pudding sesame snaps dragée cupcake danish. Cake gummies chocolate cake halvah chocolate wafer. Caramels cotton candy chocolate cake lemon drops halvah dragée donut chupa chups. Halvah cheesecake tiramisu candy canes gingerbread sesame snaps marzipan jelly-o cheesecake. Croissant dessert pastry candy canes lollipop. Cake powder sweet roll ice cream ice cream sugar plum dessert apple pie.'),
(6, 2, 'danish chupa chups', 'Publié', '2021-04-01', '2021-05-02', 'Dragée topping tootsie roll apple pie sesame snaps muffin sugar plum. Chupa chups tiramisu dragée donut jujubes caramels sweet pudding cake. Dragée lemon drops donut candy bonbon. Icing toffee danish marshmallow soufflé. Chocolate tart cake sweet roll tart. Gingerbread icing caramels caramels candy canes jujubes caramels candy. Gingerbread apple pie chocolate bar marzipan. Cupcake chocolate bar caramels marzipan dessert chocolate cake jelly-o caramels donut. Chocolate bar cheesecake marshmallow dessert gummi bears biscuit ice cream jujubes. Biscuit lemon drops gingerbread toffee chupa chups sugar plum croissant liquorice.'),
(7, 1, 'tarte aux pommes', 'Publié', '2021-05-03', '2021-05-08', 'belle recette de tatre aux pommes.\r\nOat cake pie soufflé. Bonbon sweet soufflé dragée fruitcake cake. Bonbon candy canes pastry toffee sesame snaps croissant wafer. Lemon drops lollipop ice cream ice cream. Apple pie croissant soufflé sweet candy canes cotton candy liquorice apple pie sweet roll. Chocolate cake sugar plum brownie. Topping apple pie gingerbread cake pastry. Pie marshmallow sweet candy chocolate bar jelly beans jelly chocolate cake danish. Jelly lollipop dragée marshmallow.');

-- --------------------------------------------------------

--
-- Structure de la table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE IF NOT EXISTS `article_tag` (
  `article_id` int NOT NULL,
  `tag_id` int NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `IDX_919694F97294869C` (`article_id`),
  KEY `IDX_919694F9BAD26311` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 3),
(5, 1),
(5, 2),
(6, 4),
(7, 2),
(7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`, `description_categorie`) VALUES
(1, 'cake', 'gateaux'),
(2, 'sweets', 'bonbons');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210507091552', '2021-05-08 10:08:59', 1479);

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_tag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tag`
--

INSERT INTO `tag` (`id`, `nom_tag`, `description_tag`) VALUES
(1, 'jelly', 'gelee'),
(2, 'fudge', 'fudge'),
(3, 'beans', 'haricot'),
(4, 'sugar', 'sucre');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E669F34925F` FOREIGN KEY (`id_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `FK_919694F97294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_919694F9BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
