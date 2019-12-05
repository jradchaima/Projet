-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 nov. 2019 à 16:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food_ordering`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idcom` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `quantite` int(25) NOT NULL,
  `odate` datetime NOT NULL,
  `quantite_client` int(11) NOT NULL,
  `statliv` tinyint(1) NOT NULL,
  `vehicule` int(11) NOT NULL,
  PRIMARY KEY (`idcom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `phno` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mot_pasee` varchar(32) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `prix` double(10,5) NOT NULL,
  `fichier` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`pid`, `nom`, `description`, `prix`, `fichier`) VALUES
(1, 'Pizza de Chicago', ' Les ingredients sont inverses car le fromage se trouve au fond et la sauce tomate sur le dessus', 10000.00000, 'image projet/food1.jpg'),
(2, 'Humburger', 'Humburger fromage,salade,thomate,\r\n', 6000.00000, 'image projet/food2.jpg'),
(3, 'Pasta', 'Pasta fromage et fruit de mer\r\n', 8000.00000, 'image projet/food3.jpg'),
(4, 'Crepe', 'Crepe fromage,thon et Mozarella\r\n\r\n', 7000.00000, 'image projet/food4.jpg'),
(5, 'Makloub', 'Makloub special avec escalope fromage jambon et mozarella', 3000.00000, 'image projet/food5.jpg'),
(6, 'Fricace', 'Fricace avec frite\r\n', 500.00000, 'image projet/food6.jpg'),
(7, 'Panini', 'Panini thon fromage et saucisson\r\n\r\n', 3000.00000, 'image projet/food7.jpg'),
(8, 'Sandwitch', 'Sandwitch thon fromage jambon salade\r\n\r\n', 3500.00000, 'image projet/food8.jpg'),
(9, 'Escalope panne', 'Esaclope panne plat avec frite salade et des differents sauces\r\n\r\n', 4000.00000, 'image projet/food9.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `véhicule`
--

DROP TABLE IF EXISTS `véhicule`;
CREATE TABLE IF NOT EXISTS `véhicule` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `vehicule_num` varchar(30) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
