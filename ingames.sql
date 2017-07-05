-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 04 Juillet 2017 à 16:51
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
(12, 'azazeazz', 'Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.\r\n\r\nNisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.\r\n\r\nQuibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.', 'Post haec indumentum regale quaerebatur et ministr...', '2017-07-03 15:55:54', 'admin', 'News', 'PS4', 'upload/v6kuq2wfy6ebbe5.jpg'),
(13, 'cxkcdklsd', 'Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.\r\n\r\nNisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt. atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus, neque erat umquam controversia, quid ego intellegerem, sed quid probarem.\r\n\r\nQuibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu intendebantur eculei uncosque parabat carnifex et tormenta. et ex is proscripti sunt plures actique in exilium alii, non nullos gladii consumpsere poenales. nec enim quisquam facile meminit sub Constantio, ubi susurro tenus haec movebantur, quemquam absolutum.', 'Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quid...', '2017-07-03 15:56:25', 'admin', 'News', 'PS4', 'upload/i22q8d29ihy86st.jpg'),
(14, 'hjhygj', 'ghjgfhgf', 'ghjgfhgf...', '2017-07-04 12:01:08', '', 'News', '2', 'upload/igptn10qiu1kgnu.jpg'),
(15, 'hjhygj', 'hgfhgfhg', 'hgfhgfhg...', '2017-07-04 12:02:58', '', 'News', '2', 'upload/61bb67fqfsoufx3.jpg'),
(16, 'azrazraz', 'C\'EST UNE SORTIE OLALALALALALALALALALALALALALOPDZJOPfuop', 'C\'EST UNE SORTIE OLALALALALALALALALALALALALALOPDZJOPfuop...', '2017-07-04 12:56:04', 'admin', '2', '1', 'upload/1sjddf59o4243sf.jpg'),
(17, 'zaezasdsq', 'z\"raaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'z\"raaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa...', '2017-07-04 13:00:46', 'admin', '1', '1', 'upload/p8tb9d2l31cv228.jpg'),
(18, 'sggs', '45465464546', '45465464546...', '2017-07-04 14:01:01', 'admin', '1', '2', 'upload/tvvcv10tnp21opq.jpg');

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
(14, 2),
(15, 2),
(16, 1),
(17, 1),
(18, 2);

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
(18, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
