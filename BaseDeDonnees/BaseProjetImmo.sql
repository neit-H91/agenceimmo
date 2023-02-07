-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 07 fév. 2023 à 13:52
-- Version du serveur : 10.5.18-MariaDB
-- Version de PHP : 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `BaseProjetImmo`
--

-- --------------------------------------------------------

--
-- Structure de la table `Agents`
--

CREATE TABLE `Agents` (
  `mail` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Biens`
--

CREATE TABLE `Biens` (
  `idBien` int(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `prix` int(254) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(75) NOT NULL,
  `codeP` varchar(10) NOT NULL,
  `surfBien` int(254) NOT NULL,
  `surfJardin` int(254) NOT NULL,
  `nbPièce` int(254) NOT NULL,
  `idType` int(10) NOT NULL,
  `titre` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Types`
--

CREATE TABLE `Types` (
  `idTypes` int(10) NOT NULL,
  `libelle` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Agents`
--
ALTER TABLE `Agents`
  ADD PRIMARY KEY (`mail`);

--
-- Index pour la table `Biens`
--
ALTER TABLE `Biens`
  ADD PRIMARY KEY (`idBien`),
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `Types`
--
ALTER TABLE `Types`
  ADD PRIMARY KEY (`idTypes`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Biens`
--
ALTER TABLE `Biens`
  MODIFY `idBien` int(50) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Biens`
--
ALTER TABLE `Biens`
  ADD CONSTRAINT `Biens_ibfk_1` FOREIGN KEY (`idType`) REFERENCES `Types` (`idTypes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
