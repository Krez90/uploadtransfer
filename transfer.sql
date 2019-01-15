-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 14 jan. 2019 à 13:23
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `transfer`
--

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE `upload` (
  `id_fichier` int(11) NOT NULL,
  `Url` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `upload`
--

INSERT INTO `upload` (`id_fichier`, `Url`, `code`, `date`) VALUES
(177, 'fichier_upload/UploadItAtVPoD86GC.zip', 'AtVPoD86GC', '2019-01-14'),
(178, 'fichier_upload/UploadItqOO8tFmQwW.zip', 'qOO8tFmQwW', '2019-01-14'),
(179, 'fichier_upload/UploadItz3oqPqoMfI.zip', 'z3oqPqoMfI', '2019-01-14'),
(180, 'fichier_upload/UploadIt.zip', 'jKvf2WV91H', '2019-01-14'),
(181, 'fichier_upload/UploadIt.zip', 'jvXso9qUDK', '2019-01-14'),
(182, 'fichier_upload/UploadItQ934tTiS6t.zip', 'Q934tTiS6t', '2019-01-14'),
(183, 'fichier_upload/UploadItDZQHhLa8bd.zip', 'DZQHhLa8bd', '2019-01-14'),
(184, 'fichier_upload/UploadItg8QgzfusxH.zip', 'g8QgzfusxH', '2019-01-14'),
(185, 'fichier_upload/UploadItjoLfwuKnO0.zip', 'joLfwuKnO0', '2019-01-14'),
(186, 'fichier_upload/UploadItk1cf5NrfS1.zip', 'k1cf5NrfS1', '2019-01-14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_fichier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_fichier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
