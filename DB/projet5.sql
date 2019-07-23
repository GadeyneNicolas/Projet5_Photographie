-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 juil. 2019 à 09:32
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet5`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_admin`
--

DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE IF NOT EXISTS `t_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_admin`
--

INSERT INTO `t_admin` (`id`, `pseudo`, `password`) VALUES
(1, 'Admin', '$2y$10$.px1f1uVuWEaAR4PcY3egeuetLym.z1.nzgr4QK1B6LHIt1U5pmRC');

-- --------------------------------------------------------

--
-- Structure de la table `t_comments`
--

DROP TABLE IF EXISTS `t_comments`;
CREATE TABLE IF NOT EXISTS `t_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_comments`
--

INSERT INTO `t_comments` (`id`, `pseudo`, `mail`, `content`) VALUES
(11, 'Nico', 'ngadeyne@gmail.com', 'Ceci est un test.'),
(12, 'Nico', 'Mail@gmail.com', 'Test'),
(23, 'Nicolas', 'ngadeyne@gmail.com', 'Ca fonctionne mega trop bien');

-- --------------------------------------------------------

--
-- Structure de la table `t_pictures_animal`
--

DROP TABLE IF EXISTS `t_pictures_animal`;
CREATE TABLE IF NOT EXISTS `t_pictures_animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_animal`
--

INSERT INTO `t_pictures_animal` (`id`, `title`, `content`, `link`) VALUES
(6, 'Kinder', 'Kinder photo 1.', 'Contents/Pictures/Kinder.jpg'),
(5, 'Bambou', 'Bambou sur la table.', 'Contents/Pictures/Bambou.jpg'),
(7, 'Kinder se gratte', 'Kinder qui se gratte', 'Contents/Pictures/Kinder se gratte.jpg'),
(8, 'Kinder mange', 'Kinder mange.', 'Contents/Pictures/Kinder mange.jpg'),
(9, 'Neige', 'Neige', 'Contents/Pictures/Neige.jpg'),
(10, 'Neige bâillement', 'Neige bâillement.', 'Contents/Pictures/Neige bâillement.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_pictures_landscape`
--

DROP TABLE IF EXISTS `t_pictures_landscape`;
CREATE TABLE IF NOT EXISTS `t_pictures_landscape` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_landscape`
--

INSERT INTO `t_pictures_landscape` (`id`, `title`, `content`, `link`) VALUES
(4, 'Lac', 'Lac', 'Contents/Pictures/Lac.jpg'),
(5, 'Forêt', 'Forêt', 'Contents/Pictures/Foret.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_pictures_portrait`
--

DROP TABLE IF EXISTS `t_pictures_portrait`;
CREATE TABLE IF NOT EXISTS `t_pictures_portrait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_portrait`
--

INSERT INTO `t_pictures_portrait` (`id`, `title`, `content`, `link`) VALUES
(19, 'Marianne Jardin', 'Marianne au jardin des plantes.', 'Contents/Pictures/Marianne Jardin.jpg'),
(21, 'Marianne au Zoo', 'Marianne au zoo.', 'Contents/Pictures/Marianne au Zoo.jpg'),
(22, 'Marianne en fleur', 'Marianne et les fleurs', 'Contents/Pictures/Marianne en fleur.jpg'),
(23, 'Marianne', 'Marianne portrait', 'Contents/Pictures/Marianne.jpg'),
(24, 'Marianne et kinder', 'Marianne avec kinder', 'Contents/Pictures/Marianne et kinder.jpg'),
(25, 'Amour entre Marianne et Kinder', 'Marianne et son lapin', 'Contents/Pictures/Amour entre Marianne et Kinder.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
