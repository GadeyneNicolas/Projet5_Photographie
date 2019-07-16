-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 16 juil. 2019 à 06:38
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
  `AD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AD_PSEUDO` varchar(255) NOT NULL,
  `AD_MOTDEPASSE` varchar(255) NOT NULL,
  PRIMARY KEY (`AD_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_admin`
--

INSERT INTO `t_admin` (`AD_ID`, `AD_PSEUDO`, `AD_MOTDEPASSE`) VALUES
(1, 'Admin', '$2y$10$.px1f1uVuWEaAR4PcY3egeuetLym.z1.nzgr4QK1B6LHIt1U5pmRC');

-- --------------------------------------------------------

--
-- Structure de la table `t_comments`
--

DROP TABLE IF EXISTS `t_comments`;
CREATE TABLE IF NOT EXISTS `t_comments` (
  `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMMENT_PSEUDO` varchar(255) NOT NULL,
  `COMMENT_MAIL` varchar(255) NOT NULL,
  `COMMENT_CONTENT` text NOT NULL,
  PRIMARY KEY (`COMMENT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_comments`
--

INSERT INTO `t_comments` (`COMMENT_ID`, `COMMENT_PSEUDO`, `COMMENT_MAIL`, `COMMENT_CONTENT`) VALUES
(11, 'Nico', 'ngadeyne@gmail.com', 'Ceci est un test.');

-- --------------------------------------------------------

--
-- Structure de la table `t_pictures_animal`
--

DROP TABLE IF EXISTS `t_pictures_animal`;
CREATE TABLE IF NOT EXISTS `t_pictures_animal` (
  `PIC_ANIMAL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PIC_ANIMAL_TITLE` varchar(255) NOT NULL,
  `PIC_ANIMAL_CONTENT` varchar(255) NOT NULL,
  `PIC_ANIMAL_LINK` varchar(255) NOT NULL,
  PRIMARY KEY (`PIC_ANIMAL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_animal`
--

INSERT INTO `t_pictures_animal` (`PIC_ANIMAL_ID`, `PIC_ANIMAL_TITLE`, `PIC_ANIMAL_CONTENT`, `PIC_ANIMAL_LINK`) VALUES
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
  `PIC_LANDSCAPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PIC_LANDSCAPE_TITLE` varchar(255) NOT NULL,
  `PIC_LANDSCAPE_CONTENT` varchar(255) NOT NULL,
  `PIC_LANDSCAPE_LINK` varchar(255) NOT NULL,
  PRIMARY KEY (`PIC_LANDSCAPE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_landscape`
--

INSERT INTO `t_pictures_landscape` (`PIC_LANDSCAPE_ID`, `PIC_LANDSCAPE_TITLE`, `PIC_LANDSCAPE_CONTENT`, `PIC_LANDSCAPE_LINK`) VALUES
(4, 'Lac', 'Lac', 'Contents/Pictures/Lac.jpg'),
(5, 'Forêt', 'Forêt', 'Contents/Pictures/Foret.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_pictures_portrait`
--

DROP TABLE IF EXISTS `t_pictures_portrait`;
CREATE TABLE IF NOT EXISTS `t_pictures_portrait` (
  `PIC_PORTRAIT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PIC_PORTRAIT_TITLE` varchar(255) NOT NULL,
  `PIC_PORTRAIT_CONTENT` varchar(255) NOT NULL,
  `PIC_PORTRAIT_LINK` varchar(255) NOT NULL,
  PRIMARY KEY (`PIC_PORTRAIT_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_portrait`
--

INSERT INTO `t_pictures_portrait` (`PIC_PORTRAIT_ID`, `PIC_PORTRAIT_TITLE`, `PIC_PORTRAIT_CONTENT`, `PIC_PORTRAIT_LINK`) VALUES
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
