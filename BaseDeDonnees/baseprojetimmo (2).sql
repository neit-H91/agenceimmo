-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 23:17
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
-- Base de données : `baseprojetimmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `mail` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `passwd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`mail`, `nom`, `prenom`, `passwd`) VALUES
('DidierAgentImmo@gmail.com', 'Didier', 'Alphonse', '63a9f0ea7bb98050796b649e85481845'),
('mathyslaouadi59960@gmail.com', 'Laouadi', 'Mathys', '5d2636b16ee5b9a6662768efa5a26c16'),
('vincent.dubois.2004@gmail.com', 'Dubois', 'Vincent', '79ebab86c0f6eafb4de43e6123bff331');

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
(8, 'Allez cette fois c\'est la bonne', 140000, '32 Résidence Paul Eluard', 'Neuville-en-Ferrain', '59960', 70, NULL, 4, 2, 'Appartement de 70 m2'),
(10, 'Description 10, c\'est vide et normal', 158000, '5 Rue des Phalenpins ', 'Roubaix', '59390', 110, 20, 2, 1, 'Maison des célères rappeurs de roubaix'),
(11, 'Descriptiont.txt', 187450, '78 rue de Lille', 'Lille', '59390', 80, 0, 1, 1, 'Maison de Lille avec son charme'),
(12, 'Maison de tourcoing', 210000, '98 rue de la vue d\'or', 'tourcoing', '59390', 110, 100, 3, 1, 'Maison de tourcoing petite mais elle est là.'),
(13, '13 ième maison, c\'est beaucoup la non?', 290000, '100 avenue des rochers', 'Paris', '75000', 390, 250, 17, 1, 'Maison de paris, pas une arnaque vous en faites pas'),
(14, 'Bon qqch là?', 78200, '78 avenue de la mort', 'Lys-Lez-Lannoy', '59390', 150, 0, 2, 1, 'Maison de Lys-Lez-Lannoy, mi-grande mi-jolie, 100% faite pour vous'),
(15, 'Appartement de lille', 980000, '1 rue de la poste', 'Lille', '59300', 150, 0, 6, 2, 'Appartement de Lille'),
(78, 'Terrain Plat', 1500000, '78 rue de la croix', 'Roubaix', '59390', 1500, 0, 0, 3, 'Terrain de roubaix grand mais vide'),
(79, 'Terrain vide', 1500000, '88888 Route de Roubaix', 'Tourcoing', '59390', 1500, 0, 0, 3, 'Terrain grand, pas une arnaque');

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
  MODIFY `idBien` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

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
