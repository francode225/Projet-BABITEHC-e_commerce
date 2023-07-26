-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 juil. 2023 à 01:49
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `tbprod`
--

DROP TABLE IF EXISTS `tbprod`;
CREATE TABLE IF NOT EXISTS `tbprod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_prod` varchar(100) NOT NULL,
  `prix_prod` varchar(100) NOT NULL,
  `image_prod` varchar(100) NOT NULL,
  `cat_prod` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tbprod`
--

INSERT INTO `tbprod` (`id`, `nom_prod`, `prix_prod`, `image_prod`, `cat_prod`) VALUES
(22, 'Ecouteurs EM', '150000', 'images/ecouteur6.jpg', 'accessoire'),
(5, 'Airpods 12', '850000', 'images/ecouteur8.jpg', 'accessoire'),
(21, 'Iphone 14', '850000', 'images/iphone1.jpg', 'telephone'),
(10, 'Ecouteur F9', '30000', 'images/7.jpg', 'accessoire'),
(23, 'Airpods CA', '25000', 'images/ecouteur2.jpg', 'accessoire'),
(14, 'Lenovo', '500000', 'images/pc6.jpg', 'ordinateur'),
(13, 'casque', '30000', 'images/casque3.jpg', 'accessoire'),
(15, 'HP Pavillon', '930000', 'images/pc4.jpg', 'ordinateur'),
(24, 'MOtorola ZTE', '25000', 'images/iphone2.jpg', 'telephone'),
(19, 'Ordinateur Asus', '1200000', 'images/pc1.jpg', 'ordinateur'),
(20, 'xiaomi 12 C', '100000', 'images/xiomi 12 C.jpg', 'telephone');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `password` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `mail`, `telephone`, `password`) VALUES
(6, 'Elon_Musk', 'elonmusl@gmail.com', '0102030405', '$2y$10$jsg0OR4GF63l4jkoFpA2QeMgQkC42jbwaJwr4KcfmaAhlKzq55kVS'),
(5, 'user2', 'user2@gmail.com', '0101010101', '$2y$10$Xy22g6igAW5BaC1DApcskOOrdZVhr2ju4Z9n1WwqlLkqy9W.goqWy'),
(8, 'zuckerbug', 'zuckerberg@gmail.com', '0101282827', '$2y$10$EBsYWfsJzMPBMeAgPUIwM.Qd3SD6Yh6cJzh0j9CAL0arRFs88HqWm'),
(12, 'yeof', 'yeof@gmail.com', '0156897219', '$2y$10$5tkAtBPItx7aRv8RHiaGeOQzbxgjWPjw8DVAkrHx1/xHqY6ncY5S6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
