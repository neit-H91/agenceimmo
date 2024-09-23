Site Web de l'Agence Immobilière
Description

Ce projet est une plateforme web développée en PHP permettant de gérer les biens immobiliers, les agents et les recherches des utilisateurs. Il est conçu pour faciliter la gestion des annonces immobilières et offrir aux utilisateurs une interface simple pour rechercher des biens en fonction de plusieurs critères (prix, ville, surface, etc.). Le site inclut également des fonctionnalités de statistiques et de génération de rapports.
Fonctionnalités principales

    Connexion à la base de données :
        Connexion à une base de données MySQL via PDO (PHP Data Objects).

    Gestion des biens immobiliers :
        Ajout, modification, suppression et affichage des biens (titre, description, prix, surface, nombre de pièces, etc.).
        Les biens sont liés à des villes et des types spécifiques.

    Gestion des utilisateurs :
        Récupération des informations d'authentification des utilisateurs (agents).

    Recherche de biens immobiliers :
        Recherche de biens en fonction de critères multiples (prix, surface, nombre de pièces, ville, etc.).

    Statistiques :
        Génération de statistiques sur les recherches effectuées et sur les biens immobiliers en fonction de la ville, des tranches de prix et des surfaces.

Prérequis

Avant de démarrer, assurez-vous d'avoir installé les éléments suivants :

    PHP (version 7.4 ou plus)
    MySQL pour la gestion des bases de données
    Un serveur local comme XAMPP, WAMP, ou MAMP

Installation

    Clonez ce dépôt sur votre machine locale :

git clone https://github.com/votre-nom-d-utilisateur/agence-immobiliere.git
cd agence-immobiliere

Configurez la base de données :

    Créez une base de données MySQL et importez le fichier database.sql pour configurer les tables.

Configurez les informations de connexion à la base de données dans le fichier config.php :

php

define('DB_HOST', 'localhost');
define('DB_NAME', 'nom_de_la_base');
define('DB_USER', 'votre_utilisateur');
define('DB_PASS', 'votre_mot_de_passe');

Démarrez votre serveur local (XAMPP/WAMP/MAMP) et accédez au site via le navigateur :

    http://localhost/agence-immobiliere

Pages principales

    listerBiens.php : Affiche une liste de biens immobiliers en fonction des critères sélectionnés.
    listerTousLesBiens.php : Affiche tous les biens disponibles.
    rechercheBien.php : Gère la recherche des biens immobiliers.
    insertstats.php : Insère des statistiques dans la base de données.
    bienPdf.php : Génère un PDF contenant les informations détaillées d'un bien.
    verification.php : Gère l'authentification des utilisateurs.
    deconnexion.php : Gère la déconnexion des utilisateurs.

Technologies utilisées

    PHP : Langage de développement backend.
    MySQL : Base de données pour stocker les biens, les utilisateurs et les statistiques.
    HTML/CSS : Pour l'interface utilisateur.
