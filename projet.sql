-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 25 déc. 2020 à 16:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dateE` date NOT NULL,
  `duree` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `dateE`, `duree`) VALUES
(2, 'fadhaln ', '2012-02-02', 21),
(3, 'spininig', '2012-10-10', 12),
(4, 'yoga', '2020-12-12', 5),
(5, 'race', '2020-10-10', 5),
(6, 'boxe', '2020-05-05', 7);

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(50) NOT NULL,
  `datedeb` date NOT NULL,
  `datefin` date NOT NULL,
  `pourcentage` int(50) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `ide` (`ide`)
) ENGINE=MyISAM AUTO_INCREMENT=1246 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`ref`, `ide`, `datedeb`, `datefin`, `pourcentage`) VALUES
(1, 1125, '2020-12-15', '2020-12-30', 15),
(3, 1235, '2020-12-08', '2020-12-24', 32),
(1245, 2178, '2021-02-02', '2022-02-04', 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
