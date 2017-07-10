-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Juillet 2017 à 17:03
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
(45, 'blabla', 'Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nSed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.', 'Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero...', '2017-07-07 12:24:50', 'admin', '1', '2', 'upload/jjl3znide24x5fr.png'),
(46, 'blabla 2', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nMetuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares nostris fore congressione stataria documentis frequentibus scirent, tramitibus deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod al...', '2017-07-07 12:25:24', 'admin', '1', '3', 'upload/5gre55y2ke4fsz4.jpg'),
(47, 'blabla 3', 'Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.\r\n\r\nNec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.', 'Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consol...', '2017-07-07 12:25:52', 'admin', '6', '1', 'upload/7mzgy13aoeuvz9b.jpg'),
(48, 'blabla 4', 'aefazefzefzefzefefezffzefzefzefzeegrtrhtrhtr', 'aefazefzefzefzefefezffzefzefzefzeegrtrhtrhtr...', '2017-07-07 12:37:00', 'admin', '1', '3', 'upload/2pg4qb60mxzrdre.jpg'),
(49, 'blabla 5', 'gfergregtegtrtrhtrhtrhtrhtrhrthtrtrh', 'gfergregtegtrtrhtrhtrhtrhtrhrthtrtrh...', '2017-07-07 12:37:20', 'admin', '1', '4', 'upload/hdeofgz3cj1bb9a.png'),
(50, 'blabla 6', 'erzrzezerzerzerzezerzerzerzerzerzerzerzer', 'erzrzezerzerzerzezerzerzerzerzerzerzerzer...', '2017-07-07 12:37:53', 'admin', '2', '4', 'upload/o1r9ucjqykzchdk.jpg'),
(51, 'blabla 7', 'zfrzefzefzefegfqergergergrsegergergregregtergergtregregrergerge', 'zfrzefzefzefegfqergergergrsegergergregregtergergtregregrergerge...', '2017-07-07 12:38:22', 'admin', '7', '3', 'upload/184etofp8re96bs.png'),
(52, 'blabla', 'Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nSed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.', 'Illud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero...', '2017-07-07 12:24:50', 'admin', '1', '2', 'upload/jjl3znide24x5fr.png'),
(53, 'blabla 2', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.\r\n\r\nMetuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares nostris fore congressione stataria documentis frequentibus scirent, tramitibus deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.', 'Nec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod al...', '2017-07-07 12:25:24', 'admin', '1', '3', 'upload/5gre55y2ke4fsz4.jpg'),
(54, 'blabla 3', 'Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.\r\n\r\nNec vox accusatoris ulla licet subditicii in his malorum quaerebatur acervis ut saltem specie tenus crimina praescriptis legum committerentur, quod aliquotiens fecere principes saevi: sed quicquid Caesaris implacabilitati sedisset, id velut fas iusque perpensum confestim urgebatur impleri.\r\n\r\nIllud tamen clausos vehementer angebat quod captis navigiis, quae frumenta vehebant per flumen, Isauri quidem alimentorum copiis adfluebant, ipsi vero solitarum rerum cibos iam consumendo inediae propinquantis aerumnas exitialis horrebant.', 'Sed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consol...', '2017-07-07 12:25:52', 'admin', '6', '1', 'upload/7mzgy13aoeuvz9b.jpg'),
(55, 'blabla 4', 'aefazefzefzefzefefezffzefzefzefzeegrtrhtrhtr', 'aefazefzefzefzefefezffzefzefzefzeegrtrhtrhtr...', '2017-07-07 12:37:00', 'admin', '1', '3', 'upload/2pg4qb60mxzrdre.jpg'),
(56, 'blabla 5', 'gfergregtegtrtrhtrhtrhtrhtrhrthtrtrh', 'gfergregtegtrtrhtrhtrhtrhtrhrthtrtrh...', '2017-07-07 12:37:20', 'admin', '1', '4', 'upload/hdeofgz3cj1bb9a.png'),
(57, 'blabla 6', 'erzrzezerzerzerzezerzerzerzerzerzerzerzer', 'erzrzezerzerzerzezerzerzerzerzerzerzerzer...', '2017-07-07 12:37:53', 'admin', '2', '4', 'upload/o1r9ucjqykzchdk.jpg'),
(58, 'blabla 7', 'zfrzefzefzefegfqergergergrsegergergregregtergergtregregrergerge', 'zfrzefzefzefegfqergergergrsegergergregregtergergtregregrergerge...', '2017-07-07 12:38:22', 'admin', '7', '3', 'upload/184etofp8re96bs.png'),
(59, 'blabla 8', 'efjkfhzeipfjzeopjefo^fkfko^kfopze', 'efjkfhzeipfjzeopjefo^fkfko^kfopze...', '2017-07-07 17:02:24', 'admin', '1', '1', 'upload/pmc7vkosu77p2uv.png'),
(60, 'blabla 9', 'gfehfzeiofjeopjefopzjefopefjzopefjop', 'gfehfzeiofjeopjefopzjefopefjzopefjop...', '2017-07-07 17:02:42', 'admin', '1', '2', 'upload/imaqwn5syse4fhj.png'),
(61, 'blabla 10', 'greklmfjergjkeoeropgjeroppgrjeiopgjergjerjopferjopfrzeefpzp', 'greklmfjergjkeoeropgjeroppgrjeiopgjergjerjopferjopfrzeefpzp...', '2017-07-07 17:03:06', 'admin', '1', '4', 'upload/oy64jvb4polofvh.png');

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
(45, 2),
(46, 3),
(47, 1),
(48, 3),
(49, 4),
(50, 4),
(51, 3),
(59, 1),
(60, 2),
(61, 4);

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
(45, 1),
(46, 1),
(47, 6),
(48, 1),
(49, 1),
(50, 2),
(51, 7),
(59, 1),
(60, 1),
(61, 1);

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
(2, 'xbox'),
(3, 'pc'),
(4, 'ds3');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `article_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `article_type`) VALUES
(1, 'News'),
(2, 'Sortie'),
(5, 'Event'),
(6, 'Maj'),
(7, 'Dossier');

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
(8, 'Guilhem', '$2y$10$kNkG2pm6pUsDVEAmMF8tUeUY.K8YNh7qk76C.649qoatfMshjsyZi', 'guilhem@coucoucmoi.com', 'visiteur'),
(9, 'jobas', '$2y$10$QYZnofWNveA0EiETmrgmt.GMYXBdTMmu.9TMrjkDX4QN8zuBBRJji', 'job@test.com', 'visiteur'),
(10, 'blabla', '$2y$10$WxNpFRqMRY.B8gkubBrPUudZi/73VJPX5rqtijtmEUSXyxbzm89p.', 'blabla@blabla.com', 'visiteur');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
