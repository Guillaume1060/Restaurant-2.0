-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 08 juil. 2022 à 14:16
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `choix` varchar(20) DEFAULT NULL,
  `comments` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `date`, `firstname`, `lastname`, `email`, `choix`, `comments`) VALUES
(21, '2022-07-07 14:45:13', 'Guillaume', 'Breyer', 'Guitchy@hotmail.com', 'réservation', 'scsc');

-- --------------------------------------------------------

--
-- Structure de la table `guestBook`
--

CREATE TABLE `guestBook` (
  `id` int(11) NOT NULL,
  `guestname` varchar(20) NOT NULL,
  `restaurant` varchar(60) DEFAULT NULL,
  `date` date NOT NULL,
  `comments` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `guestBook`
--

INSERT INTO `guestBook` (`id`, `guestname`, `restaurant`, `date`, `comments`) VALUES
(6, 'Eden Hazard', 'La Marinella', '2022-10-13', 'Je me suis régalé !'),
(7, 'Pierret Perret', 'Da Rosy', '2022-12-20', 'Goûtez les linguine aux palourdes, divin !\r\n(attention, paiement en cash uniquement) ');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `date`, `name`) VALUES
(4, '2022-07-07 10:34:43', '/uploads16571900831662781943jpg'),
(5, '2022-07-07 10:36:22', '/uploads1127366806.jpg'),
(6, '2022-07-07 10:36:49', '/uploads509297638.png'),
(8, '2022-07-07 11:30:19', '/img802060708.png'),
(9, '2022-07-07 11:31:35', '/img825843178.png'),
(13, '2022-07-07 12:38:47', '/img657322030.png'),
(14, '2022-07-07 12:38:53', '/img210530368.png'),
(15, '2022-07-07 12:45:08', '/img490025297.png'),
(24, '2022-07-08 09:17:20', 'photos/Trello.png1657271840.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `guestBook`
--
ALTER TABLE `guestBook`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `guestBook`
--
ALTER TABLE `guestBook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
