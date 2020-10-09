-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 oct. 2020 à 16:14
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `btplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass`, `created_at`) VALUES
(12, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2020-09-25'),
(13, 'user', '12dea96fec20593566ab75692c9949596833adc9', '2020-09-26');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idart` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descr` text NOT NULL,
  `media` varchar(60) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `slug` varchar(40) DEFAULT 'Construction'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idart`, `name`, `descr`, `media`, `created_at`, `slug`) VALUES
(47, 'Meuilleur Production et Rentabilite', 'Bitcoin: A Peer-to-Peer Electronic Cash SystemSatoshi Nakamotosatoshin@gmx.comwww.bitcoin.orgAbstract. \r\n\r\n A  purely   peer-to-peer   version   of   electronic   cash   would   allow   onlinepayments   to   be   sent   directly   from   one   party   to   another   without   going   through   afinancial institution.  \r\n\r\nDigital signatures provide part of the solution, but the mainbenefits are lost if a trusted third party is still required to prevent double-spending.We propose a solution to the double-spending problem using a peer-to-peer network.The   network   timestamps   transactions   by   hashing   them   into   an   ongoing   chain   ofhash-based proof-of-work, forming a record that cannot be changed without redoingthe proof-of-work.  \r\n\r\n\r\n The longest chain not only serves as proof of the sequence ofevents witnessed, but proof that it came from the largest pool of CPU power.   Aslong as a majority of CPU power is controlled by nodes that are not cooperating toattack the network,  they\'ll  generate the  longest  chain  and  outpace attackers.   Thenetwork itself requires minimal structure.  \r\n\r\n\r\n Messages are broadcast on a best effortbasis,   and   nodes   can   leave   and   rejoin   the   network   at   will,   accepting   the   longestproof-of-work chain as proof of what happened while they were gone.', 'Files/hero-bg.jpg', '2020-09-24', 'Construction'),
(53, 'Construction Moderne', 'En plus de concevoir des bâtiments conformes aux exigences techniques, les ingénieurs de BTP+ Services veillent à recourir à toute l\'expertise nécessaire pour concevoir des composantes et des éléments faciles à construire, qui s\'intègrent parfaitement, de manière à produire une expression générale raffinée et à mettre en valeur la vocation du bâtiment. ', 'Files/render-d-625.jpg', '2020-09-25', 'Construction'),
(54, 'Batiments Durable au Service de Tous', '                   Btp+ vous rends la fierte dans les domaines dont il fait experience de plus de 10ans', 'Files/9976498305_ecefafa47b_b.jpg', '2020-09-25', 'Construction'),
(55, 'Orli Robbins Est deleniti itaque  Est deleniti ita', 'Est deleniti itaque ', 'Files/', '2020-10-03', 'Construction');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `idcomment` int(4) NOT NULL,
  `comment` text NOT NULL,
  `pub_date` date DEFAULT NULL,
  `pseudo` varchar(50) NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`idcomment`, `comment`, `pub_date`, `pseudo`, `id_blog`) VALUES
(1, 'LE plus grand des mechants', '2020-09-30', 'Chris', 53),
(2, 'Il aurait ete mieux de tout faire pour suivre le chemin \r\nvers la modernisation des Constructions Adequats', '2020-09-30', 'Kaferas', 53),
(3, 'Lorem Ipsum dank Pardix', '2020-09-30', 'Kelly', 53),
(4, 'Held Fitch Goesd', '2020-09-30', 'BlackMamba', 53),
(5, 'Avec la fin du siecle tout est possible', '2020-09-30', 'Florent ', 53),
(6, 'icana kivyutse ntakindi kintu kirondera minsi yose atari igikoma je sinzi ukuntu cabaye\r\niyo ninda ufise uri umwana wu mukobwa esheeeee', '2020-09-30', 'Serena ', 53),
(7, 'Lemme know abut the problem describe below', '2020-09-30', 'Drinx', 47),
(8, 'Lemme let you know the problem describe Below', '2020-09-30', 'Serena', 47),
(9, 'I\'m the Best of all Best', '2020-09-30', 'BEst ', 47),
(10, 'Lorem Ipsum my Best favotite Texte Generator', '2020-09-30', 'Good News', 47),
(11, 'dslddks', '2020-09-30', 'Fluentl', 47),
(12, 'Officiis impedit no', '2020-10-02', 'Indira Patrick', 47);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(6) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mail` varchar(40) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `name`, `phone`, `mail`, `subject`, `message`, `created_at`) VALUES
(2, 'Pierrot', '61224569', 'niyohat@yahoo.fr', 'Controle technique', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Harum similique voluptatum unde beatae maxime vel odit, quis neque nam commodi quos aspernatur sit cum voluptates at! Molestiae alias eligendi facere.', '2020-10-02 09:55:27'),
(9, 'Biginda', '69212528', 'salvandi@gmail.com', 'Sante', 'Il y a ne un petit Probleme lors de la propagation de nos Agents Bancobu l\'un d\'eux a failli mourrir', '2020-10-02 09:55:27'),
(14, 'Akimana', '', 'kerssieBon@gmail.com', '', 'Je suis a la recherche d\'un Ingenieur', '2020-10-02 09:55:27'),
(15, 'Irakoze', '', 'chrisirak951@gmail.com', '', 'Yes it was a very Well work', '2020-10-02 09:55:27'),
(16, 'Ndikoza', '', 'chrisirak85@gmail.com', '', 'kisdissj', '2020-10-02 09:55:27'),
(17, 'Chris', '61193884', 'chrisirak95@gmail.com', 'Contact ', 'Je souhaiterai avoir un rendez-vous', '2020-10-02 09:55:27'),
(18, 'Eum quasi non aliqua', '+1 (175) 163-8953', 'tynevaduny@mailinator.com', 'Eaque eaque aut est ', 'Cupiditate iste porr', '2020-10-02 09:55:27'),
(19, 'Rene', '79614036', 'tungaboser2@gmail.com', 'Gretting', 'Hello', '2020-10-02 09:55:27'),
(20, 'Sed id explicabo Un', '+1 (984) 573-3936', 'chrisirak95@gmail.com', 'Est sed ut facere d', 'Velit eum vero neces', '2020-10-02 09:55:27'),
(21, 'Sed id explicabo Un', '+1 (984) 573-3936', 'chrisirak95@gmail.com', 'Est sed ut facere d', 'Velit eum vero neces', '2020-10-02 09:55:27');

-- --------------------------------------------------------

--
-- Structure de la table `devis_reply`
--

CREATE TABLE `devis_reply` (
  `id` int(4) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devis_reply`
--

INSERT INTO `devis_reply` (`id`, `mail`, `message`) VALUES
(12, 'niyohat@yahoo.fr', 'Good '),
(13, 'borisKer@outlook.com', 'Avec l\'arrivee des nouvelles techniques de ponsage naturel je suis sur \r\nle point de definir ma propre Qualite'),
(14, 'kerssieBon@gmail.com', 'nous sommes en bonne sante \r\n\r\n\r\n\r\n\r\n'),
(15, 'salvandi@gmail.com', 'dmmc'),
(16, 'chrisirak95@gmail.com', 'Jeune tu devra bien savoir comment gere les Cookies'),
(17, 'chrisirak951@gmail.com', 'cjjxkll'),
(18, 'tynevaduny@mailinator.com', 'je suis cool');

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `IdDom` int(50) NOT NULL,
  `descr` text DEFAULT NULL,
  `media_pic` varchar(255) NOT NULL,
  `Sous_dom` varchar(255) NOT NULL,
  `domaine_typ` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `domaine`
--

INSERT INTO `domaine` (`IdDom`, `descr`, `media_pic`, `Sous_dom`, `domaine_typ`) VALUES
(1, 'Qualite requise pour une administration bien dirige', 'Files/Lighthouse.jpg', 'Route;Etage;Plomberie', 1),
(5, 'Laravel serai le premier Framewrk francais a avoir franchi les limites de la programmation Web', 'Files/4k-wallpaper-blue-sky-clouds-2090645.jpg', 'Nager;Naviguer;Controler;Fabriquer', 2),
(6, 'La formation Tres Inspirante', 'Files/Chrysanthemum.jpg', 'Theorie;Pratique;Sur Terrain', 4);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(5) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(4) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `link_facebook` varchar(255) DEFAULT NULL,
  `link_gmail` varchar(255) DEFAULT NULL,
  `pic_path` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id`, `nom`, `fonction`, `link_twitter`, `link_facebook`, `link_gmail`, `pic_path`) VALUES
(2, 'Rose Walker', 'Zane Best', 'Yoko Bolton', 'Octavia Lowe', 'Shaeleigh Lester', 'upload/1602166272.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `reference`
--

CREATE TABLE `reference` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `idref` int(4) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `nom_projet` varchar(255) DEFAULT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reference`
--

INSERT INTO `reference` (`id`, `description`, `picture`, `idref`, `reference`, `nom_projet`, `client_name`, `created_at`) VALUES
(1, 'Qui praesentium face', 'upload/1602162316.jpg', NULL, 'BATIMENT', 'Ut consequatur Veni', 'Fredericka Nelson', '2020-10-08 13:05:16'),
(2, 'Molestiae omnis perf', 'upload/1602162777.jpg', NULL, 'BATIMENT', 'Sed culpa dolorum al', 'Kamal Thompson', '2020-10-08 13:12:57'),
(3, 'Voluptatem Repudian', 'upload/1602162831.jpg', NULL, 'BATIMENT', 'Aperiam adipisicing ', 'Indira Walter', '2020-10-08 13:13:52'),
(4, 'Cupidatat officia at', 'upload/1602162950.JPG', NULL, 'BATIMENT', 'Sed suscipit nisi ve', 'Solomon Kelly', '2020-10-08 13:15:50'),
(5, '', 'upload/1602162962.JPG', NULL, '', '', '', '2020-10-08 13:16:06'),
(6, 'Aspernatur sit ut qu', 'upload/1602163118.jpg', NULL, 'HYDRAULIQUE', 'Corrupti molestiae ', 'Keiko David', '2020-10-08 13:18:39'),
(7, 'Aut sapiente eum cul', 'upload/1602163158.jpg', NULL, 'ROUTE', 'Quod quibusdam non p', 'Carol Griffin', '2020-10-08 13:19:20'),
(8, 'Illo fugiat ipsum si', 'upload/1602164618.JPG', NULL, 'ROUTE', 'Eum omnis voluptas d', 'Penelope Rios', '2020-10-08 13:43:43'),
(9, 'Sit consequatur fug', 'upload/1602164669.JPG', NULL, 'BATIMENT', 'Nisi voluptas eius l', 'Laura Duke', '2020-10-08 13:44:33');

-- --------------------------------------------------------

--
-- Structure de la table `type_domaine`
--

CREATE TABLE `type_domaine` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_domaine`
--

INSERT INTO `type_domaine` (`id`, `name`) VALUES
(4, 'Formation'),
(1, 'Genie Civil'),
(3, 'Genie Environemental'),
(2, 'Geotechniqe');

-- --------------------------------------------------------

--
-- Structure de la table `type_ref`
--

CREATE TABLE `type_ref` (
  `id` int(4) NOT NULL,
  `ref_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_ref`
--

INSERT INTO `type_ref` (`id`, `ref_name`) VALUES
(1, 'Bâtiment'),
(2, 'Routes'),
(3, 'Hydraulique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idart`),
  ADD UNIQUE KEY `name` (`name`,`descr`,`created_at`) USING HASH;

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idcomment`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devis_reply`
--
ALTER TABLE `devis_reply`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`IdDom`),
  ADD UNIQUE KEY `domaine_typ` (`domaine_typ`),
  ADD UNIQUE KEY `domaine_typ_2` (`domaine_typ`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ddd` (`idref`);

--
-- Index pour la table `type_domaine`
--
ALTER TABLE `type_domaine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`);

--
-- Index pour la table `type_ref`
--
ALTER TABLE `type_ref`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idart` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `idcomment` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `devis_reply`
--
ALTER TABLE `devis_reply`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `IdDom` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `type_domaine`
--
ALTER TABLE `type_domaine`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `type_ref`
--
ALTER TABLE `type_ref`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reference`
--
ALTER TABLE `reference`
  ADD CONSTRAINT `fk_ddd` FOREIGN KEY (`idref`) REFERENCES `type_ref` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
