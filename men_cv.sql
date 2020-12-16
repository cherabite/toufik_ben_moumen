-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 déc. 2020 à 12:46
-- Version du serveur :  5.7.31
-- Version de PHP : 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `men_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilaya_n` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation_fa` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_enfant` int(2) DEFAULT NULL,
  `adresse` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction_first` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction_grade_first` date DEFAULT NULL,
  `fonction_actuel` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_fonction_actuel` date DEFAULT NULL,
  `grade` int(2) DEFAULT NULL,
  `date_grade` date DEFAULT NULL,
  `wilaya_fonction` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etablissement` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_emp` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `nom`, `prenom`, `wilaya_n`, `sexe`, `situation_fa`, `nb_enfant`, `adresse`, `tel`, `email`, `image`, `fonction_first`, `fonction_grade_first`, `fonction_actuel`, `date_fonction_actuel`, `grade`, `date_grade`, `wilaya_fonction`, `etablissement`, `num_emp`) VALUES
(1, 'بن مومن', 'توفيق', '44', 'أنثى', 'أعزب', 0, 'حي خياط', 667802477, 'benmoumene@gmail.com', '124163138_2866058577007209_7766276728301070846_n2.jpg', 'أستاذ', '2008-09-13', 'مدير', '2014-04-20', 14, '2016-12-31', '44', 'المركز الولائي عين الدفلى', 441983);

-- --------------------------------------------------------

--
-- Structure de la table `journey`
--

DROP TABLE IF EXISTS `journey`;
CREATE TABLE IF NOT EXISTS `journey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `passenger` tinyint(4) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `journey`
--

INSERT INTO `journey` (`id`, `date`, `type`, `passenger`, `from_`, `to_`, `ticket`, `amount`) VALUES
(1, '2015-07-22', 'train', 22, 'mumabi', 'as', '45SDE', 1200),
(2, '2015-07-22', 'train', 22, 'mumbai', 'jwb', '45SDE', 1200),
(3, '2015-07-21', 'air', 5, 'mumabi', 'JWB', '4585', 8000),
(4, '2015-07-07', 'train', 22, 'mumabi', 'GOA', '4585', 1500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
