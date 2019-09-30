-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 30 sep. 2019 à 12:20
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `atm_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` date NOT NULL,
  `date_pub` date DEFAULT NULL,
  `periode_pub_debut` date DEFAULT NULL,
  `periode_pub_fin` date DEFAULT NULL,
  `lien_img` varchar(200) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `date_creation`, `date_pub`, `periode_pub_debut`, `periode_pub_fin`, `lien_img`, `etat`, `user`) VALUES
(1, 'Actualité 2', 'y\"ellow', '2019-09-10', '2019-09-03', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(2, 'Actualité 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(3, 'Actualité 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-05', '2019-09-04', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(4, 'Actualité 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-28', '2019-09-28', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(5, 'Actualité 0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-20', '2019-09-02', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099'),
(6, 'Actualité 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nEt provident sapiente deleniti recusandae blanditiis quod beatae. \r\nConsequatur vero quibusdam ad blanditiis necessitatibus, \r\nsimilique, placeat recusandae, veniam eos deleniti quam aspernatur.', '2019-09-25', '2019-09-21', '0000-00-00', '0000-00-00', '', 'Publier', 'ATM-0099');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` date NOT NULL,
  `date_pub` date DEFAULT NULL,
  `periode_pub_debut` date DEFAULT NULL,
  `periode_pub_fin` date DEFAULT NULL,
  `lien_img` varchar(200) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `nombre_vue` smallint(5) UNSIGNED DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `libelle`) VALUES
(1, 'Publier'),
(2, 'Ne pas publier'),
(3, 'Publier sur une période');

-- --------------------------------------------------------

--
-- Structure de la table `genere_login`
--

CREATE TABLE `genere_login` (
  `id` int(11) NOT NULL,
  `nombre1` char(2) NOT NULL,
  `nombre2` char(2) NOT NULL,
  `date_modif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genere_login`
--

INSERT INTO `genere_login` (`id`, `nombre1`, `nombre2`, `date_modif`) VALUES
(1, '00', '99', '9999-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id`, `libelle`) VALUES
(1, 'actif'),
(2, 'désactivé');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `nomComplet` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `nomComplet`, `password`, `statut`) VALUES
(1, 'ATM-0099', 'YAO Dejak', '098f6bcd4621d373cade4e832627b4f6', 'actif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `etat` (`etat`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `etat` (`etat`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`libelle`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `genere_login`
--
ALTER TABLE `genere_login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statut`
--
ALTER TABLE `statut`
  ADD PRIMARY KEY (`libelle`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `statut` (`statut`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `genere_login`
--
ALTER TABLE `genere_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `statut`
--
ALTER TABLE `statut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`etat`) REFERENCES `etat` (`libelle`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`login`) ON DELETE CASCADE;

--
-- Contraintes pour la table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`etat`) REFERENCES `etat` (`libelle`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user`) REFERENCES `user` (`login`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`statut`) REFERENCES `statut` (`libelle`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
