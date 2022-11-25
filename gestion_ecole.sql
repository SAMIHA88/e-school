-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 oct. 2022 à 18:44
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
-- Base de données : `gestion_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `login`, `mdp`) VALUES
(1, 'zakaria', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `directeur`
--

CREATE TABLE `directeur` (
  `id` int(11) NOT NULL,
  `num_somme` varchar(255) NOT NULL,
  `nom_dir` varchar(255) NOT NULL,
  `prenom_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `directeur`
--

INSERT INTO `directeur` (`id`, `num_somme`, `nom_dir`, `prenom_dir`) VALUES
(6, 'L27790', 'Amellal', 'Nizar');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

CREATE TABLE `etablissement` (
  `id` int(11) NOT NULL,
  `code_gresa` varchar(255) NOT NULL,
  `code_statistique` varchar(255) NOT NULL,
  `nom_etab` varchar(255) NOT NULL,
  `nbr_sous_etab` varchar(255) NOT NULL,
  `nbr_inst` varchar(255) NOT NULL,
  `nbr_etud` int(11) NOT NULL,
  `adresse_etab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `code_massar` varchar(255) NOT NULL,
  `nom_etud` varchar(255) NOT NULL,
  `prenom_etud` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `code_massar`, `nom_etud`, `prenom_etud`, `responsable`, `etat`) VALUES
(4, 'K138211981', 'Malak', 'Anass', 'Kamal Malak', 'non redoublant');

-- --------------------------------------------------------

--
-- Structure de la table `instituteur`
--

CREATE TABLE `instituteur` (
  `id` int(11) NOT NULL,
  `num_somme` varchar(255) NOT NULL,
  `date_embauche` varchar(255) NOT NULL,
  `date_nomination` varchar(255) NOT NULL,
  `nom_ins` varchar(255) NOT NULL,
  `prenom_ins` varchar(255) NOT NULL,
  `sous_etab` varchar(255) NOT NULL,
  `situation_administrative` varchar(255) NOT NULL,
  `niveau_assigne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sous_etab`
--

CREATE TABLE `sous_etab` (
  `id` int(11) NOT NULL,
  `code_gresa` varchar(255) NOT NULL,
  `nom_sous_etab` varchar(255) NOT NULL,
  `adresse_sous_etab` varchar(255) NOT NULL,
  `surface` int(11) NOT NULL,
  `num_compteur` varchar(255) NOT NULL,
  `nbr_toilettes` int(11) NOT NULL,
  `nbr_salles` int(11) NOT NULL,
  `nbr_insti` int(11) NOT NULL,
  `nbr_etud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_etab`
--

INSERT INTO `sous_etab` (`id`, `code_gresa`, `nom_sous_etab`, `adresse_sous_etab`, `surface`, `num_compteur`, `nbr_toilettes`, `nbr_salles`, `nbr_insti`, `nbr_etud`) VALUES
(2, '12328', 'lehchoudat', 'le7choudat essaouira', 20, '7', 2, 4, 6, 109);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `directeur`
--
ALTER TABLE `directeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `instituteur`
--
ALTER TABLE `instituteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sous_etab`
--
ALTER TABLE `sous_etab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `directeur`
--
ALTER TABLE `directeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `etablissement`
--
ALTER TABLE `etablissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `instituteur`
--
ALTER TABLE `instituteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `sous_etab`
--
ALTER TABLE `sous_etab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
