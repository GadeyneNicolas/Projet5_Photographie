-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 juil. 2019 à 12:16
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_comments`
--

INSERT INTO `t_comments` (`COMMENT_ID`, `COMMENT_PSEUDO`, `COMMENT_MAIL`, `COMMENT_CONTENT`) VALUES
(2, 'hh', 'hh@gmail.com', 'hh'),
(3, 'test', 'test@gmail.com', 'test\r\n'),
(4, 'test', 'test@gmail.com', 'tt'),
(6, 'hh', 'hh@gmail.com', 'hhhhhhhhhhhhhhhhh'),
(7, 'hh', 'hh@gmail.com', 'J\'adore cet chatbot.'),
(8, 'Admin', 'hh@gmail.com', 'J\'adore cet chatbot. J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.J\'adore cet chatbot.');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_animal`
--

INSERT INTO `t_pictures_animal` (`PIC_ANIMAL_ID`, `PIC_ANIMAL_TITLE`, `PIC_ANIMAL_CONTENT`, `PIC_ANIMAL_LINK`) VALUES
(4, 'Test', 'tt', 'Contents/Pictures/Test.jpg'),
(3, 'Testouille', 'hh', 'Contents/Pictures/Testouille.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_landscape`
--

INSERT INTO `t_pictures_landscape` (`PIC_LANDSCAPE_ID`, `PIC_LANDSCAPE_TITLE`, `PIC_LANDSCAPE_CONTENT`, `PIC_LANDSCAPE_LINK`) VALUES
(2, 'Hello', 'll', 'Contents/Pictures/Hello.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_pictures_portrait`
--

INSERT INTO `t_pictures_portrait` (`PIC_PORTRAIT_ID`, `PIC_PORTRAIT_TITLE`, `PIC_PORTRAIT_CONTENT`, `PIC_PORTRAIT_LINK`) VALUES
(3, 'Test', 'test', 'Contents/Pictures/Test.jpg'),
(4, 'Test', 'test', 'Contents/Pictures/Test.jpg'),
(12, 'test2', 'test145', 'Contents/Pictures/test2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
