-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 02 juil. 2018 à 17:38
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
(60, 4, 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 'Laure', '2018-06-15', 1),
(65, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Laure', '2018-06-18', 1),
(66, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Laure', '2018-06-18', 1),
(67, 1, 'Ut enim ad minim veniam, quis nostrud exercitation', 'Laure', '2018-06-18', 1),
(68, 5, 'Sed ut perspiciatis unde omnis iste natus error sit', 'Laure', '2018-06-18', 1),
(70, 7, 'Ut enim ad minim veniam, quis nostrud exercitation', 'Laure', '2018-06-19', 1),
(71, 7, 'Sed ut perspiciatis unde omnis iste natus error sit', 'Laure', '2018-06-19', 1),
(75, 4, 'Ut enim ad minim veniam, quis nostrud exercitation', 'Laure', '2018-06-19', 1),
(76, 1, 'Sed ut perspiciatis unde omnis iste natus error sit', 'Laure', '2018-06-19', 1),
(77, 1, 'Ut enim ad minim veniam, quis nostrud exercitation', 'Laure', '2018-06-19', 1),
(92, 4, 'Sed ut perspiciatis unde omnis iste natus error sit', 'Laure', '2018-06-19', 1),
(143, 7, 'Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia', 'Aude', '2018-06-28', 1),
(144, 5, 'Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia', 'Aude', '2018-06-28', 1),
(145, 4, 'Voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia', 'Aude', '2018-06-28', 1),
(146, 7, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ', 'Sébastien', '2018-06-28', 1),
(147, 1, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ', 'Sébastien', '2018-06-28', 1),
(148, 4, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ', 'Sébastien', '2018-06-28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `category_id`, `question`, `answer`, `is_published`, `created_at`) VALUES
(2, 1, 'Vestibulum laoreet enim vitae leo dapibus, sit amet facilisis quam tempor.?', 'Quisque mi mi, vulputate et ligula sed, pharetra dapibus justo. Proin nisi tellus, eleifend quis magna at, aliquet imperdiet arcu.', 1, '2018-06-05'),
(3, 1, 'Coeperint apparari vel distributio ?', 'Cum autem commodis intervallata temporibus convivia longa.', 1, '0000-00-00'),
(4, 3, 'Quisque gravida purus sit amet auctor pretium ?', 'Quisque mi mi, vulputate et ligula sed, pharetra dapibus justo. Proin nisi tellus, eleifend quis magna at, aliquet imperdiet arcu.', 1, '2018-06-12'),
(5, 3, 'Nam aliquet et purus a tincidunt ?', 'Cras eu odio a diam ullamcorper lobortis non euismod enim.', 1, '2018-06-04'),
(9, 4, 'Coeperint apparari vel distributio ?', 'Coeperint apparari vel distributio Coeperint apparari vel distributio', 1, '2018-06-04'),
(10, 4, 'Nam aliquet et purus a tincidunt ?', 'Coeperint apparari vel distributio ', 1, '2018-06-04');

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
(16, 1, 'Integer efficitur scelerisque libero phar...', 'Sébastien', 'Vestibulum laoreet enim vitae leo dapibus, sit ame...', 1, '2018-06-22'),
(17, 4, 'Integer efficitur scelerisque libero phar...', 'Sébastien', 'Vestibulum laoreet enim vitae leo dapibus, sit ame...', 1, '2018-06-22'),
(18, 4, 'Vestibulum laoreet enim vitae leo dapibus, sit ame...', 'Aude', 'Vestibulum laoreet enim vitae leo dapibus, sit ame...', 1, '2018-06-28');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `compagny` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `compagny`, `adresse`, `city`, `email`, `tel`, `is_admin`, `password`) VALUES
(6, 'Laure', 'Compoint', 'Hp', '2 rue des pommes', 'Paris', 'Admin@gmail.com', '0134678109', 1, '21232f297a57a5a743894a0e4a801fc3'),
(9, 'Aude', 'Compoint', 'Apple', '16 rue des cerises ', 'Vincennes', 'aude@gmail.com', '0678346461', 0, 'ae4e268a31b839566f62b259fb3fd9bc'),
(10, 'Sébastien', 'Compoint', 'Naval Group', '4 rue des fraises', 'Lorient', 'sebastien@gmail.com', '0974813284', 0, '91ab7b369d48cd0eba34a1b6f417e31d');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
