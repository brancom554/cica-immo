-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 14 déc. 2021 à 16:47
-- Version du serveur : 8.0.26
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `estate`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `annonce_id` int NOT NULL,
  `annonce_titre` varchar(255) NOT NULL,
  `annonce_description` text,
  `annonce_type` varchar(255) NOT NULL,
  `annonce_cout` varchar(255) NOT NULL,
  `annonce_contact` varchar(255) DEFAULT NULL,
  `annonce_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`annonce_id`, `annonce_titre`, `annonce_description`, `annonce_type`, `annonce_cout`, `annonce_contact`, `annonce_created_at`) VALUES
(1, 'Villa de luxe', 'Une villa de luxe en plein centreville', 'Location', '150000', NULL, '2021-12-14 07:35:12'),
(2, 'Rez de chaussé', 'Une maison comme vous les aimez', 'Location', '25000', NULL, '2021-12-14 07:35:12'),
(3, 'Maison au bord de la plage à Bali', 'Une maison au bord de la plage à Bali', 'Vente', '75000000', NULL, '2021-12-14 07:35:12'),
(4, 'Officia ab alias por', 'Adipisci ut laborios', 'Vente', 'Adipisci ab rerum pr', 'Vero dolor sapiente', '2021-12-14 07:45:24'),
(5, 'Maison dans la pré', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).\r\nPlusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', 'Location', '15000', '22999406634', '2021-12-14 08:24:39'),
(6, 'Maison dans la pré', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).\r\nPlusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', 'Location', '15000', '22999406634', '2021-12-14 08:24:40'),
(7, 'Villa à BALI', 'Une maison absolument divine', 'Location', '1500000', '22999406634', '2021-12-14 10:27:52'),
(8, 'Maison à pucket', 'La maison de vos rêves.On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes). Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée par l\'addition d\'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu\'il n\'y a rien d\'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', 'Vente', '2500000', '22999406634', '2021-12-14 10:29:29');

-- --------------------------------------------------------

--
-- Structure de la table `annonces_pieces`
--

CREATE TABLE `annonces_pieces` (
  `anp_id` int NOT NULL,
  `anp_annonce_id` int NOT NULL,
  `anp_fichier` text NOT NULL,
  `anp_created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `annonces_pieces`
--

INSERT INTO `annonces_pieces` (`anp_id`, `anp_annonce_id`, `anp_fichier`, `anp_created_at`) VALUES
(1, 4, 'Ncp7VQVj3PNMLUps6E8a5UIDvDgqXduSfpQvBwCp.png', '2021-12-14 07:46:58'),
(2, 4, 'tpocQqjC8Ayu548h98TJiMqTFZJqsqumEAsevrpq.jpeg', '2021-12-14 07:46:58'),
(3, 4, 'qe7QIolXutX8yf8a9bZFDZXNMJivmqRF2K0Y2l0n.jpeg', '2021-12-14 07:46:58'),
(4, 5, '3PoVtfmvw9wkSI7jKi8V4uXptBtfgjv6DvTuyQRc.jpeg', '2021-12-14 08:24:39'),
(5, 5, 'nKJRi0l1FZhD2k7jwdbw43Ww35B14auTYRAVJYEa.jpeg', '2021-12-14 08:24:39'),
(6, 5, 'QUpopZWi9hUY1qnFxnunoh95mQBmB45I27bnw9qO.jpeg', '2021-12-14 08:24:39'),
(7, 6, 'JCakZqrbnih1jowWi8OuuXUWPAbzqXr1hMj3Cv4A.jpeg', '2021-12-14 08:24:40'),
(8, 6, 'svnKV82XJRQcsHVMcIH2jyCMReTe46REgDaJEE3L.jpeg', '2021-12-14 08:24:40'),
(9, 6, 'na0pOUHxDoobEzs12eZSNnEKXNHbTsBQo8K3k0eg.jpeg', '2021-12-14 08:24:40'),
(10, 7, 'iUPua3Ch5ankJ6FfemdnxTf6Exc89si5gjPYVXDf.jpeg', '2021-12-14 10:27:52'),
(11, 7, '9szTmmRp4DWNjrHpkJyBpIgAb1m4NU2lBkLWGU3G.jpeg', '2021-12-14 10:27:52'),
(12, 8, 'HBfh5NrkQpnAwRSpE4MudevUwwKukTRmoABM2btD.jpeg', '2021-12-14 10:29:29'),
(13, 8, 'C5sX961AYq7Y5KBWCZyurn7CImXPPa6IR0f1TeHb.jpeg', '2021-12-14 10:29:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`annonce_id`);

--
-- Index pour la table `annonces_pieces`
--
ALTER TABLE `annonces_pieces`
  ADD PRIMARY KEY (`anp_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `annonce_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `annonces_pieces`
--
ALTER TABLE `annonces_pieces`
  MODIFY `anp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
