-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 00:30
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `mail` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `idBien` int(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `prix` int(254) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(75) NOT NULL,
  `codeP` varchar(10) NOT NULL,
  `surfBien` int(254) NOT NULL,
  `surfJardin` int(254) DEFAULT NULL,
  `nbPièce` int(254) DEFAULT NULL,
  `idType` int(10) NOT NULL,
  `titre` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`idBien`, `description`, `prix`, `adresse`, `ville`, `codeP`, `surfBien`, `surfJardin`, `nbPièce`, `idType`, `titre`) VALUES
(1, 'C\'est bien hein sah', 560000, 'Rue de l\'a3chouma', 'Tourcoing', '59200', 200, 50, 6, 2, 'Appartement plein centre'),
(2, 'Toujours pas d\'idée', 365000, '14 Allée Maréchausée', 'Wattrelos', '59150', 1600, NULL, 18, 5, 'Immeuble de 18 Pièces'),
(3, 'Celle là... celle là elle est bien hein', 230000, 'Sentier de la mesquinerie', 'Roubaix ', '59600', 140, 20, 7, 1, 'Maison de bonne'),
(4, 'BON arrete sinon bon', 400000, 'Impasse Jean Baptiste', 'Neuville-en-Ferrain', '59960', 160, 50, 7, 1, 'Maison tah les ouf'),
(5, 'Un peu vide le boug immo', 800000, 'Rue de la bas', 'Roubaix', '59600', 400, 0, 0, 3, 'Terrain vague a vendre'),
(7, 'Oui alors peut être que non', 60000, '101 bis Rue Yves Montand', 'Tourcoing', '59200', 60, NULL, 1, 4, 'Local de 60m2'),
(8, 'Allez cette fois c\'est la bonne', 140000, '32 Résidence Paul Eluard', 'Neuville-en-Ferrain', '59960', 70, NULL, 4, 2, 'Appartement de 70 m2');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `idTypes` int(10) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`idTypes`, `libelle`) VALUES
(1, 'Maison'),
(2, 'Appartement'),
(3, 'Terrain'),
(4, 'Local'),
(5, 'Immeuble');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`idBien`),
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idTypes`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `idBien` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `Biens_ibfk_1` FOREIGN KEY (`idType`) REFERENCES `types` (`idTypes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
