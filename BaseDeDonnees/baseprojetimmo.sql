-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 11 avr. 2023 à 11:48
-- Version du serveur : 10.5.18-MariaDB
-- Version de PHP : 8.1.17

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
  `passwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`mail`, `nom`, `prenom`, `passwd`) VALUES
('DidierAgentImmo@gmail.com', 'Didier', 'Alphonse', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2'),
('mathyslaouadi59960@gmail.com', 'Laouadi', 'Mathys', 'd177f1d3dc9fa62ddbc59d92b05fb109449a284d9ae439a0ed28a6062114f654'),
('vincent.dubois.2004@gmail.com', 'Dubois', 'Vincent', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `idBien` int(50) NOT NULL,
  `descript` varchar(2000) NOT NULL,
  `prix` int(254) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `idVilles` int(20) NOT NULL,
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

INSERT INTO `biens` (`idBien`, `descript`, `prix`, `adresse`, `idVilles`, `codeP`, `surfBien`, `surfJardin`, `nbPièce`, `idType`, `titre`) VALUES
(1, 'Appartement de Tourcoing, grand et lumineux, proche des commodités vous serez toujours à deux pas de tout. généreusement desservi par les transport d\'Ilévia, seul votre abonnement sera votre limite aux plaisir de Tourcoing\r\n\r\nProche d\'une école, d\'un collège et d\'un lycée, vos enfants n\'auront aucunes excuses pour arriver en retard.\r\n\r\nLes magasins de sont pas en manque pour vos emplettes.', 560000, '17 Rue du Paradis, étage 5 Appartement 2', 1, '59200', 200, 50, 6, 2, 'Appartement en plein centre de Tourcoing'),
(2, 'Vous rêvez de devenir propriétaire d\'un immeuble? Nous avons ce qu\'il vous faut! En banlieue de Wattrelos proches des nombreux services de la ville, ce grand immeuble de 8 étages de 24 appartements assurera mondes et merveilles à vous et à vos futurs locataires.', 365000, '14 Allée Maréchausée', 2, '59150', 1600, NULL, 18, 5, 'Immeuble de 8 étages de 24 appartements'),
(3, 'Découvrez cette charmante maison à vendre à Roubaix, une ville dynamique située dans le nord de la France, connue pour son riche patrimoine industriel et culturel.\r\n\r\nCette maison de ville en briques rouges offre un espace de vie spacieux sur deux étages. Au rez-de-chaussée, vous trouverez un grand salon lumineux avec une cheminée et une cuisine équipée avec des appareils modernes. À l\'étage supérieur, il y a trois chambres confortables, toutes avec de grandes fenêtres offrant une vue sur le jardin.\r\n\r\nLe jardin à l\'arrière de la maison est un véritable havre de paix, parfait pour se détendre et se ressourcer. Il y a également une terrasse couverte, idéale pour les repas en plein air avec famille et amis.\r\n\r\nSituée dans un quartier calme et convivial, cette maison bénéficie d\'un emplacement idéal à proximité de toutes les commodités, y compris des écoles, des commerces et des transports en commun.', 230000, '3 Sentier de la mesquinerie', 3, '59600', 190, 20, 5, 1, 'Maison spacieuse de Roubaix'),
(4, 'Cette grande maison de trois étage situé à Neuville-en-Ferrain vous comblera vous et votre famille.\r\n\r\nSes quatres chambres assurera que chancun aura son petit coin privé. la cuisine ouverte sur le living-room est un plus, le double vasque rendrait Stéphane Plaza rouge de joie sans oublier la douche à l\'italienne.\r\n\r\nle grand jardin de cette maison est bien ombragé grâce au noyautier, parfait pour se détendre en été.', 400000, '14 Impasse Jean Baptiste', 4, '59960', 160, 500, 4, 1, 'Maison massive de Neuville-en-Ferrain'),
(5, 'Ce grand terrain vous permettera de concrétiser vous projets les plus fous, immeuble(s), maison(s), les deux, rien n\'est impossible avec autant de place.', 450000, '99 Rue de la piscine', 3, '59600', 4000, NULL, 0, 3, 'Terrain vague a vendre'),
(6, 'Terrain Plat', 1500000, 'rue de la croix', 3, '59390', 1500, NULL, 0, 3, 'Ce terrain à beau être vide, il est grand, beau, spacieux, tout vos projets seront à l\'aise ici.'),
(7, 'Ce local peut servir de stockage d\'appoint si nécéssaire, soixante mètre carré ce n\'est pas rien.', 60000, '101 bis Rue Yves Montand', 8, '59200', 60, NULL, 1, 4, 'Local de 60m2'),
(8, 'Ce petit appartement de Neuville-en-Ferrain ne vous laissera pas de marbre, avec deux chambres de dix mètre carrée vous pourrez recevoir des invitées, le petit balcon vous permettera de prendre de petite pause café tout en profitant du soleil', 110000, '32 Résidence Paul Eluard', 4, '59960', 70, NULL, 4, 2, 'Appartement de 70 m2'),
(9, 'Cette petite maison de Tourcoing sera le parfait havre de paix pour de jeunes propriétaires.\r\n\r\nLa grande suite parentale de 24 vingt-quatre mètre carré, le salon de vingt-deux, la cuisine ouverte et la grande véranda en ferrait presque oublier le petit jardin.', 158000, '5 Rue des Phalenpins ', 3, '59390', 110, 20, 2, 1, 'Maison des célèbres rappeurs de Roubaix'),
(10, 'Terrain vide, non constructible', 150, '88888 Route de Meulun', 6, '59390', 1500, NULL, 0, 3, 'Terrain grand, pas utilisable'),
(11, 'Cette maison de Lille est proche des services de transport d\'Ilévia, vous n\'aurez aucun problème à venir ici.\r\n\r\nCes quatres-vingts mètres carrées sembles peu, mais vous suffiront amplement, sa grande cuisine ouverte sur le salon donne une pièce à vivre de trente trois mètre carrées.\r\n\r\nExposé avantageusement, le soleil ne sera pas un problème.', 217450, '78 rue de Lille', 6, '59390', 80, NULL, 1, 1, 'Maison de Lille avec son charme'),
(12, 'Maison de tourcoing', 210000, '98 rue de la vue d\'or', 1, '59390', 110, 100, 3, 1, 'Maison de tourcoing petite mais elle est là.'),
(13, '13 ième maison, c\'est beaucoup la non?', 290000, '100 avenue des rochers', 7, '75000', 390, 250, 17, 1, 'Maison de paris, pas une arnaque vous en faites pas'),
(14, 'Bon qqch là?', 78200, '78 avenue de la mort', 8, '59390', 150, NULL, 2, 1, 'Maison de Lys-Lez-Lannoy, mi-grande mi-jolie, 100% faite pour vous'),
(15, 'Appartement de lille', 980000, '1 rue de la poste', 6, '59300', 150, NULL, 6, 2, 'Appartement de Lille');

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `idRecherche` int(11) NOT NULL,
  `dateRecherche` date NOT NULL,
  `idVille` int(11) DEFAULT NULL,
  `idTranche` int(11) DEFAULT NULL,
  `surface` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tranche`
--

CREATE TABLE `tranche` (
  `idTranche` int(11) NOT NULL,
  `prixMin` int(11) NOT NULL,
  `prixMax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `tranche`
--

INSERT INTO `tranche` (`idTranche`, `prixMin`, `prixMax`) VALUES
(1, 0, 100000),
(2, 100000, 150000),
(3, 150000, 200000),
(4, 200000, 250000),
(5, 250000, 300000),
(6, 300000, 350000),
(7, 350000, 400000),
(8, 400000, 500000),
(9, 500000, 600000),
(10, 600000, 700000),
(11, 700000, 800000);

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

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `idVille` int(11) NOT NULL,
  `libelleVille` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `libelleVille`) VALUES
(1, 'Tourcoing'),
(2, 'Wattrelos'),
(3, 'Roubaix'),
(4, 'Neuville-en-Ferrain'),
(5, 'Meulun'),
(6, 'Lille'),
(7, 'Paris'),
(8, 'Lys-Lez-Lannoy'),
(9, 'dcFEF');

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
  ADD KEY `idType` (`idType`),
  ADD KEY `idville` (`idVilles`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`idRecherche`),
  ADD KEY `fk_idVille` (`idVille`),
  ADD KEY `fk_idTranche` (`idTranche`);

--
-- Index pour la table `tranche`
--
ALTER TABLE `tranche`
  ADD PRIMARY KEY (`idTranche`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`idTypes`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`idVille`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `idBien` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `idRecherche` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tranche`
--
ALTER TABLE `tranche`
  MODIFY `idTranche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `idVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `biens_ibfk_1` FOREIGN KEY (`idVilles`) REFERENCES `ville` (`idVille`);

--
-- Contraintes pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD CONSTRAINT `fk_idTranche` FOREIGN KEY (`idTranche`) REFERENCES `tranche` (`idTranche`),
  ADD CONSTRAINT `fk_idVille` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
