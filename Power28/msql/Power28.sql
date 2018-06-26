-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 26 juin 2018 à 08:57
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Power28`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Fonctionnalités'),
(3, 'Options du logiciel'),
(4, 'Tarifs du logiciel');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `is_published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `forum_id`, `content`, `author`, `created_at`, `is_published`) VALUES
(59, 5, 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 'Laure', '2018-06-15', 1),
(60, 5, 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 'Laure', '2018-06-15', 1),
(65, 5, 'EEE', 'Laure', '2018-06-18', 1),
(66, 5, 'EEE', 'Laure', '2018-06-18', 1),
(67, 5, 'EEE', 'Laure', '2018-06-18', 1),
(68, 5, 'EEE', 'Laure', '2018-06-18', 1),
(69, 5, 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 'Aude', '2018-06-18', 1),
(70, 7, 'a', 'Laure', '2018-06-19', 1),
(71, 7, 'Z', 'Laure', '2018-06-19', 1),
(72, 7, 'Z', 'Laure', '2018-06-19', 1),
(73, 7, 'Z', 'Laure', '2018-06-19', 1),
(74, 7, 'A', 'Laure', '2018-06-19', 1),
(75, 1, 'AAA', 'Laure', '2018-06-19', 1),
(76, 1, 'AAA', 'Laure', '2018-06-19', 1),
(77, 1, 'AAA', 'Laure', '2018-06-19', 1),
(78, 1, 'A', 'Laure', '2018-06-19', 1),
(79, 1, 'A', 'Laure', '2018-06-19', 1),
(80, 1, 'A', 'Laure', '2018-06-19', 1),
(81, 1, 'A', 'Laure', '2018-06-19', 1),
(82, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(83, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(84, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(85, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(86, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(87, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(88, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(89, 7, 'SDDSS', 'Laure', '2018-06-19', 1),
(90, 5, 'aaa', 'Laure', '2018-06-19', 1),
(91, 5, 'aa', 'Laure', '2018-06-19', 1),
(92, 5, 'aa', 'Laure', '2018-06-19', 1),
(93, 5, 'aa', '1', '2018-06-19', 1),
(94, 5, 'aa', '1', '2018-06-19', 1),
(95, 5, 'aa', '1', '2018-06-19', 1),
(96, 5, 'ZZ', '0', '2018-06-19', 1),
(97, 5, 'ZZ', '0', '2018-06-19', 1),
(98, 7, 'aaaa', '0', '2018-06-19', 1),
(99, 7, 'aa', '0', '2018-06-19', 1),
(100, 7, 'aa', '0', '2018-06-19', 1),
(101, 7, 'A', 'Laure', '2018-06-19', 1),
(102, 7, 'A', 'Laure', '2018-06-19', 1),
(103, 4, 'DDD', 'Z', '2018-06-19', 1),
(104, 4, 'DDD', 'Z', '2018-06-19', 1),
(105, 13, 'hhhh', 'laure', '2018-06-21', 1),
(106, 13, 'hhhh', 'laure', '2018-06-21', 1),
(107, 13, 'hhhh', 'laure', '2018-06-21', 1),
(108, 13, 'hhhh', 'laure', '2018-06-21', 1),
(109, 13, 'aa', 'laure', '2018-06-21', 1),
(110, 13, 'aa', 'laure', '2018-06-21', 1),
(111, 13, 'aa', 'laure', '2018-06-21', 1),
(112, 7, 'd', 'laure', '2018-06-21', 1),
(113, 3, 'test', 'laure', '2018-06-21', 1),
(114, 3, 'test', 'laure', '2018-06-21', 1),
(115, 3, 'test', 'laure', '2018-06-21', 1),
(116, 3, 'a', 'laure', '2018-06-21', 1),
(117, 3, 'a', 'laure', '2018-06-21', 1),
(118, 3, 'a', 'laure', '2018-06-21', 1),
(119, 3, 'a', 'laure', '2018-06-21', 1),
(120, 3, 'z', 'laure', '2018-06-21', 1),
(121, 15, 'efre', 'Sébastien', '2018-06-22', 1),
(122, 15, 'efre', 'Sébastien', '2018-06-22', 1),
(123, 15, 'efre', 'Sébastien', '2018-06-22', 1),
(124, 15, 'j', 'Sébastien', '2018-06-22', 1),
(125, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(126, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(127, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(128, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(129, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(130, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(131, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(132, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(133, 16, 'fyguhi', 'Sébastien', '2018-06-22', 1),
(134, 16, 'tets', 'Sébastien', '2018-06-22', 1),
(135, 16, 'tets', 'Sébastien', '2018-06-22', 1),
(136, 16, 'gj', 'laure', '2018-06-24', 1),
(137, 16, 'gj', 'laure', '2018-06-24', 1),
(138, 16, 'gj', 'laure', '2018-06-24', 1),
(139, 16, 'gj', 'laure', '2018-06-24', 1),
(140, 16, 'gfg', 'laure', '2018-06-24', 1),
(141, 16, 'ff', 'laure', '2018-06-24', 1);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `category_id`, `question`, `reponse`, `is_published`, `created_at`) VALUES
(2, 1, 'Vestibulum laoreet enim vitae leo dapibus, sit amet facilisis quam tempor.?', 'Quisque mi mi, vulputate et ligula sed, pharetra dapibus justo. Proin nisi tellus, eleifend quis magna at, aliquet imperdiet arcu.', 1, '2018-06-05'),
(3, 1, 'Coeperint apparari vel distributio ?', 'Cum autem commodis intervallata temporibus convivia longa.', 1, '0000-00-00'),
(4, 3, 'Quisque gravida purus sit amet auctor pretium ?', 'Quisque mi mi, vulputate et ligula sed, pharetra dapibus justo. Proin nisi tellus, eleifend quis magna at, aliquet imperdiet arcu.', 1, '2018-06-12'),
(5, 3, 'Nam aliquet et purus a tincidunt ?', 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 1, '2018-06-04'),
(9, 4, 'Coeperint apparari vel distributio ?', 'Coeperint apparari vel distributio Coeperint apparari vel distributio', 1, '2018-06-04'),
(10, 4, 'Coeperint apparari vel distributio ?', 'Coeperint apparari vel distributio ', 1, '2018-06-04');

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`id`, `category_id`, `name`, `author`, `content`, `is_published`, `created_at`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', 'Laure', 'Lorem ipsum dolor sit amet, consectetur adipiscing...', 1, '2018-05-07'),
(3, 3, 'Nam luctus, risus sed luctus sollicitudin?', 'Laure', 'Nam luctus, risus sed luctus sollicitudin, elit enim porta tortor, semper efficitur mi arcu et orci. Suspendisse non ante dapibus, fermentum tortor interdum, ullamcorper nibh.', 1, '2018-05-06'),
(4, 1, 'Integer efficitur scelerisque libero pharetra imperdiet.', 'Laure', 'Vestibulum laoreet enim vitae leo dapibus, sit amet facilisis quam tempor. Nam aliquet et purus a tincidunt. Nullam interdum pharetra neque quis vehicula.', 1, '2018-06-10'),
(5, 1, 'Quisque gravida purus sit amet auctor pretium.', 'Laure', 'Vestibulum laoreet enim vitae leo dapibus, sit amet facilisis quam tempor. Nam aliquet et purus a tincidunt. Nullam interdum pharetra neque quis vehicula.', 1, '2018-06-13'),
(7, 1, ' Sujet : Integer efficitur scelerisque libero pharetra imperdiet.', 'Aude', ' Sujet : Integer efficitur scelerisque libero pharetra imperdie ??', 1, '2018-06-18'),
(16, 1, 'Integer efficitur scelerisque libero phar...', 'Sébastien', 'test', 1, '2018-06-22'),
(17, 1, 'Integer efficitur scelerisque libero phar...', 'Sébastien', 'ee', 1, '2018-06-22');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numerotel` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `adresse`, `ville`, `email`, `numerotel`, `is_admin`, `password`) VALUES
(2, 'defrtg', 'rtyh', 'dfsgrht', 'dfsgh', 'aze@frgthy', 'fsgthuy', 0, '0cc175b9c0f1b6a831c399e269772661'),
(3, 'Sébastien', 'C', 'Paris', 'Paris', 'fgthy@azfg', '4565787980', 0, 'e358efa489f58062f10dd7316b65649e'),
(5, 'ezr', 'dfgre', 'fgtrh', 'frgth', 'sfdg@fg', 'sdfgth', 0, '0cc175b9c0f1b6a831c399e269772661'),
(6, 'laure', 'Compoint', 'Paris', 'Paris', 'Admin@gmail.com', '123456', 1, '21232f297a57a5a743894a0e4a801fc3'),
(7, 'FGTR', 'SDFGT', 'dfgt', 'dfrgth', 'DFG@dsfgd', 'dsfgtr', 0, '0cc175b9c0f1b6a831c399e269772661'),
(8, 'zadezfr', 'dzer', 'fergth', 'frgthy', 'aze@dfg', 'efrgtry', 0, '0cc175b9c0f1b6a831c399e269772661'),
(9, 'test', 'sdfgf', 'sgdthfjg', 'dfdgfhj', 'test@fff', 'sdgfgh', 0, '098f6bcd4621d373cade4e832627b4f6'),
(10, 'qsdsf', 'sqdf', 'fdsg', 'dsqfgd', 'sd@zer', 'sqdfgdqfs', 0, 'd7a84628c025d30f7b2c52c958767e76');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
