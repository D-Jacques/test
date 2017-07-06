-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Juillet 2017 à 16:49
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ingames`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `article_content` longtext NOT NULL,
  `article_resume` varchar(255) NOT NULL,
  `article_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(100) NOT NULL,
  `article_type` varchar(500) NOT NULL,
  `system` varchar(500) NOT NULL,
  `article_picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article_content`, `article_resume`, `article_date`, `author`, `article_type`, `system`, `article_picture`) VALUES
(32, 'чепуха', 'Ipsam Веро Urbem Byzantiorum Фюиссе refertissimam atque ornatissimam Signis QUIS невежественны? Quae Илли, exhausti sumptibus bellisque максимумы диплом Omnis Mithridaticos импульс totumque Pontum armatum affervescentem в Asiam atque erumpentem, руды и repulsum cervicibus interclusum утра sustinerent, Тума, Inquam, Byzantii и подписанная postea Illa и reliqua Urbis ornanemta sanctissime custodita tenuerunt.', 'Ipsam Веро Urbem Byzantiorum Фюиссе refertissimam atque ornatissimam Signis QUIS невежественны? Quae Илли, exhausti sumptib...', '2017-07-05 15:43:27', 'admin', '1', '2', 'upload/kto66ipwr0eikpl.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `article_system`
--

CREATE TABLE `article_system` (
  `id_article` int(11) NOT NULL,
  `id_system` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `article_system`
--

INSERT INTO `article_system` (`id_article`, `id_system`) VALUES
(32, 2);

-- --------------------------------------------------------

--
-- Structure de la table `article_type`
--

CREATE TABLE `article_type` (
  `id_article` int(11) NOT NULL,
  `id_types` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `article_type`
--

INSERT INTO `article_type` (`id_article`, `id_types`) VALUES
(32, 1);

-- --------------------------------------------------------

--
-- Structure de la table `system`
--

CREATE TABLE `system` (
  `id` int(11) NOT NULL,
  `system_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `system`
--

INSERT INTO `system` (`id`, `system_name`) VALUES
(1, 'ps4'),
(2, 'xbox');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `article_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `article_type`) VALUES
(1, 'News'),
(2, 'sortie');

-- --------------------------------------------------------

--
-- Structure de la table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_mail` varchar(250) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_name`, `user_password`, `user_mail`, `user_type`) VALUES
(1, 'admin', '$2y$10$JXibRVu3AMh3oQxnY0vEjO5NN3DOtcWCrOcqop.sWHyw3J9ZBmmDi', 'admin@admin.fr', 'admin'),
(2, 'toto', '$2y$10$j5X/Dk1tn3PrVdyq0dgmbO34bcBqVt5RgqGHnK26fdTuHjupFxHOa', 'toto@gmail.com', 'visiteur'),
(3, 'john', '$2y$10$H2MZyCCN4637z8KXm/.79.NwtbU29meHDHrNYTNx85I82ICvu.G3q', 'john@doe.fr', 'visiteur'),
(4, 'jane', '$2y$10$Nxez7LZ.XVVkzPX7Yq7v..MbQb8T5HEAGRR4SiQYEoLSpTZub131C', 'jane@doe.fr', 'visiteur'),
(5, 'Antoine', '$2y$10$ZdI8Avu1Qe.4EI2qziCCEevyylrz4Xj9y5NMzKRJFqt1R5cmsxlY6', 'antoine@jouepadelaflute.com', 'visiteur'),
(6, 'Antoine2', '$2y$10$2uIQezGq67vDLOTXEYh6ve4WGccpKpYSMh9rGSq/GU5SpKXS0QX7C', 'antoine@travaillebien.fr', 'visiteur'),
(7, 'hubert', '$2y$10$q3HyWK/JfRWOW2Ap9SQtpO3/BG2bCNgszydsnAYGAuYkul1Zsc.cC', 'biscotteuh2hubert@free.fr', 'visiteur'),
(8, 'Guilhem', '$2y$10$kNkG2pm6pUsDVEAmMF8tUeUY.K8YNh7qk76C.649qoatfMshjsyZi', 'guilhem@coucoucmoi.com', 'visiteur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_system`
--
ALTER TABLE `article_system`
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_system` (`id_system`);

--
-- Index pour la table `article_type`
--
ALTER TABLE `article_type`
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_types` (`id_types`);

--
-- Index pour la table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article_system`
--
ALTER TABLE `article_system`
  ADD CONSTRAINT `article_system_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_system_ibfk_2` FOREIGN KEY (`id_system`) REFERENCES `system` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_type`
--
ALTER TABLE `article_type`
  ADD CONSTRAINT `article_type_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_type_ibfk_2` FOREIGN KEY (`id_types`) REFERENCES `types` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
