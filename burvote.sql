-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 26 fév. 2026 à 13:48
-- Version du serveur : 10.6.23-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `burvote`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureau_vote`
--

CREATE TABLE `bureau_vote` (
  `id` int(11) NOT NULL,
  `adr_bureau` varchar(150) NOT NULL,
  `nb_accesseur` int(11) NOT NULL,
  `id_quartier`  int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bureau_vote`
--

INSERT INTO `bureau_vote` (`id`, `adr_bureau`, `nb_accesseur`, `id_quartier`) VALUES
(1, '3 rue de siam', 3, 4),
(2, '253 rue de siam', 5, 4),
(3, '15 rue Jean Jaures', 10, 1),
(4, '415 rue Jean Jaures', 10, 1),
(5, 'Kerbonne', 3, 3),
(6, 'Mairie de Saint Pierre', 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `electeur`
--

CREATE TABLE `electeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `id_bureau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `electeur`
--

INSERT INTO `electeur` (`id`, `nom`, `prenom`, `date_naissance`, `id_bureau`) VALUES
(1, 'Gaillard', 'fgh', '2003-11-14', 1),
(2, 'fzryz', 'bn,cv', '1923-11-28', 1),
(3, 'gh,', 'dgh', '1963-11-17', 3),
(4, 'yteytu', 'etyuetyu', '1998-11-26', 2),
(5, 'fhfkfk', 'nvetyuety', '2000-11-06', 3),
(6, 'ryuryu', 'ryukryuk', '1953-11-17', 3),
(7, ',fhjj;gfhj;', 'hh;jyuk', '1974-11-05', 4),
(8, 'ryuikryuk', 'fjhykrjhkf', '1983-11-04', 4),
(9, 'krhkryuk', 'ryukryukr', '1903-11-13', 5),
(10, 'ryukryuk', 'ryukryukgn,', '2001-11-30', 5),
(11, 'jgfjhgjh', 'hjfhjk', '1983-11-10', 6),
(12, 'hjkhjfhjk', ';gn,;gb;', '1945-11-21', 6);

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id` int(11) NOT NULL,
  `nom_quartier` varchar(150) NOT NULL,
  `nb_habitant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quartier`
--

INSERT INTO `quartier` (`id`,`nom_quartier`, `nb_habitant`) VALUES
(1,'bas jaures', 500),
(2,'kerinou', 1050),
(3,'saint pierre', 3000),
(4,'siam', 850);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bureau_vote`
--
ALTER TABLE `bureau_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bureau_vote_quartier_FK` (`id_quartier`);

--
-- Index pour la table `electeur`
--
ALTER TABLE `electeur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `electeur_bureau_vote_FK` (`id_bureau`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `electeur`
--
ALTER TABLE `electeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bureau_vote`
--
ALTER TABLE `bureau_vote`
  ADD CONSTRAINT `bureau_vote_quartier_FK` FOREIGN KEY (`id_quartier`) REFERENCES `quartier` (`id`);

--
-- Contraintes pour la table `electeur`
--
ALTER TABLE `electeur`
  ADD CONSTRAINT `electeur_bureau_vote_FK` FOREIGN KEY (`id_bureau`) REFERENCES `bureau_vote` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
