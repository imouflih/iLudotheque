-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 jan. 2022 à 18:08
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iludothèque`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id_u` int(11) NOT NULL,
  `id_g` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id_u`, `id_g`, `date`, `returndate`) VALUES
(9, 83, '2022-01-11 23:00:00', '2022-03-13'),
(10, 106, '2022-01-11 23:00:00', '2022-03-13'),
(10, 88, '2022-01-11 23:00:00', '2022-03-13'),
(10, 84, '2022-01-11 23:00:00', '2022-03-13'),
(4, 83, '2022-01-11 23:00:00', '2022-03-13'),
(4, 87, '2022-01-11 23:00:00', '2022-03-13'),
(4, 99, '2022-01-11 23:00:00', '2022-03-13'),
(7, 79, '2022-01-11 23:00:00', '2022-03-13'),
(8, 92, '2022-01-11 23:00:00', '2022-03-13'),
(8, 86, '2022-01-11 23:00:00', '2022-03-13'),
(10, 79, '2022-01-11 23:00:00', '2022-03-13');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `prénom` text NOT NULL,
  `nom` text NOT NULL,
  `email` text NOT NULL,
  `sujet` text NOT NULL,
  `tempsrecu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`prénom`, `nom`, `email`, `sujet`, `tempsrecu`) VALUES
('ILIASSE', 'MOUFLIH', 'ILIASSE@MOUFLIH.com', 'Neque porro quisquam est qui dolorem', '2022-01-12 12:07:03'),
('ILI', 'MOU', 'ILI@MOU.FR', 'Neque porro quisquam est qui dolorem', '2022-01-12 12:07:16'),
('otmane', 'otmane', 'otmane@gmail.com', 'Jai oublié mon mot de passe', '2022-01-12 12:17:32'),
('ILI', 'MOU', 'ILI@MOU.FR', 'J\"ai réservé un jeu et je l\"ai pas encore reçu', '2022-01-12 12:18:17'),
('ILIASSE', 'MOUFLIH', 'ILIASSE@MOUFLIH.com', 'HELLO\r\n', '2022-01-12 14:25:59');

-- --------------------------------------------------------

--
-- Structure de la table `listejeux`
--

CREATE TABLE `listejeux` (
  `id_game` int(20) NOT NULL,
  `nom` text NOT NULL,
  `age` int(11) NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `listejeux`
--

INSERT INTO `listejeux` (`id_game`, `nom`, `age`, `type`, `description`, `image`, `prix`) VALUES
(79, 'Le Trône de Fer BTwixt', 14, 'Jeu de société', 'Manipulez la politique de Port Réal dans ce jeu de cartes rapide et passionnant ! De 3 à 6 joueurs s’affrontent pour dominer Westeros, grâce à 9 personnes emblématiques de la saga.', 'trone.jpg', 0),
(80, 'Faux Diamonds', 8, 'Jeu de société', 'Vendez vos diamants au meilleur prix sur un marché fluctuant mais attention aux faussaires !', 'faux.jpg', 0),
(81, 'Le Palais de Jabba', 10, 'Jeu de société', 'Basé sur le célèbre jeu de cartes et se déroulant dans la galaxie Star Wars, Love Letter - Le Palais de Jabba conserve les mécanismes simples et amusants de l\'original tout en faisant appel aux talents des personnages emblématiques du Retour du Jedi. un jeu de cartes et à rôles cachés rapide, intense et plein de rebondissements !', 'palais.jpg', 0),
(82, 'Gardens of Ceres', 3, 'Jeu de société', 'Extension solo pour le jeu Foundations of Rome.', 'ceres.jpg', 0),
(83, 'Foundations of Rome', 13, 'Jeu de société', 'Foundations of Rome vous place dans le rôle d\'un architecte en compétition pour posséder des terrains et construire de magnifiques édifices !', 'senator.jpg', 0),
(84, 'Scythe', 14, 'Jeu de société', 'Boîte filmée - Matériel intact - Boîte abimée (boite arrière enfoncé et déchirée sur 9cm) - Extension en français', 'scythe.jpg', 0),
(85, 'Nidavellir', 10, 'Jeu de société', 'Boîte filmée - Matériel intact - Boîte abimée - Jeu en français', 'nidavelli.jpg', 0),
(86, 'Terraforming Mars', 14, 'Jeu de société', 'Un jeu de cartes autonome dans l\'univers du jeu à succès international, Terraforming Mars !', 'terraforming.jpg', 0),
(87, 'Ultimate Werewolf Extreme', 14, 'Jeu de société', 'Rassemblez les habitants de votre village pour trouver les loups-garous qui se cachent dans l\'ombre.', 'wolf.jpg', 0),
(88, 'Kamigawa', 8, 'Jeu de cartes', 'Ce pack contient entre autre 6 boosters de draft Kamigawa : la dynastie Néon.', 'kami.jpg', 0),
(89, 'Horreur à Arkham', 14, 'Jeu de cartes', 'Quelque chose cloche. Des prix Nobel et leurs découvertes se sont volatilisés. Ce gouffre béant dans la réalité est une perte tragique pour l’humanité… Et il doit être refermé. Qui donc a interféré avec le passé et perturbé le futur ? Seul le temps pourra le dire.', 'arkham.jpg', 0),
(90, 'Pokémon', 3, 'Jeu de cartes', 'Deck prêt à jouer de 60 cartes.', 'pokemon.jpg', 0),
(91, 'VTES', 10, 'Jeu de cartes', 'Deck box officielle Vampire: The Eternal Struggle. Boîte pouvant contenir jusqu’à 100 cartes double sleeve + un tiroir compartimenté pour accueillir vos jetons / dès.', 'vtes.jpg', 0),
(92, 'Vampire', 10, 'Jeu de cartes', 'Deck de cartes supplémentaire pour Vampire: The Eternal Struggle version anglaise.', 'vampire.jpg', 0),
(93, 'Hulk', 8, 'Jeu de cartes', 'Marvel Champions Art Sleeves - Hulk est un paquet de 50 pochettes à l\'effigie de Hulk. Elle contient également une pochette transparente pour le héros/vilain.', 'hulk.jpg', 0),
(94, 'Marvel', 8, 'Jeu de cartes', 'Marvel Champions Art Sleeves - Marvel Black est un paquet de 50 pochettes à l\'effigie des héros Marvel. Elle contient également une pochette transparente pour le héros/vilain.', 'marvel.jpg', 0),
(95, 'Keyforge', 14, 'Jeu de cartes', 'Boîte filmée - Matériel intact - Un coin abimé - Jeu en français', 'keyforge.jpg', 0),
(96, 'P\'tits Pirates', 7, 'Jeu de role', 'La Bourse à Dés P\'TITS PIRATES permettra de transporter vos précieux dés à 8 faces partout sur la Grande Dame Bleue. La bourse contient un set de 5 dès à 8 faces ainsi qu\'un dé Météo ainsi qu\'un dé \"Compass\" pour déterminer la direction du vent ou du bateau.', 'pirates.jpg', 0),
(97, 'Altdorf', 8, 'Jeu de role', 'Altdorf Crown of the Empire est un supplément pour Warhammer Fantasy RPG.', 'altdorf.jpg', 0),
(98, 'Shadows in the Mist', 8, 'Jeu de role', 'Shadows in the Mist est un supplément pour Warhammer Age of Sigmar RPG.', 'soulbound.jpg', 0),
(99, 'Heirs to Heresy', 10, 'Jeu de role', 'Heirs to Heresy est un jeu de rôle historique et fantastique qui se déroule au 14e siècle, époque des templiers.', 'heirs.jpg', 0),
(100, 'Dune', 3, 'Jeu de role', 'Ce livre est une édition limitée du jeu de rôle Dune : Adventures in the Imperium, qui vous emmène dans un futur lointain, au-delà de tout ce que vous pouvez imaginer.', 'dune.jpg', 0),
(101, 'Scrabble', 3, 'Jeu de classic', 'Chacun a son mot à dire dans cette édition deluxe du plus célèbre jeu de mots.', 'scrabble.jpg', 0),
(102, 'Bicycle', 3, 'Jeu de classic', 'Jeu de 54 cartes à l\'effigie des Beatles.', 'bicycle.jpg', 0),
(103, 'Echecs Magnétique', 3, 'Jeu de classic', 'Boîte filmée - Matériel intact - Boîte abimée - Jeu en français', 'echecs.jpg', 0),
(104, 'Submarine Fun d\'Uli Oesterle', 7, 'Jeu de classic', 'Boîte filmée - Matériel intact - Un coin abimé - Jeu en multilingue', 'submarine.jpg', 0),
(105, 'Hexagone', 7, 'Jeu de classic', 'Dans Hexagone collectez des pièces hexagonales de même couleur en les assemblant par groupe de 3 ou plus à l\'aide de la couleur indiqué par le dé.', 'hexagone.jpg', 0),
(106, 'Quatre à la Suite', 3, 'Jeu de classic', 'Le classique Quatre à la Suite, un jeu en bois pour deux joueurs , facilement transportable.', 'quatre.jpg', 0),
(107, 'Reversi Classic', 7, 'Jeu de classic', 'Dans la série jeux classiques, voici Reversi ou communément appelé Othello.', 'reversi.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id_game` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `valable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id_game`, `nombre`, `valable`) VALUES
(79, 20, 7),
(80, 15, 3),
(81, 17, 10),
(82, 2, 2),
(83, 25, 13),
(84, 11, 2),
(85, 12, 9),
(86, 5, 1),
(87, 7, 2),
(88, 30, 9),
(89, 10, 1),
(90, 20, 13),
(91, 20, 13),
(92, 20, 12),
(93, 20, 13),
(94, 20, 13),
(95, 20, 10),
(96, 20, 13),
(97, 20, 13),
(98, 20, 13),
(99, 20, 12),
(100, 20, 13),
(101, 20, 13),
(102, 20, 13),
(103, 20, 13),
(104, 5, 7),
(105, 5, 5),
(106, 5, 1),
(107, 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` bigint(20) NOT NULL,
  `prénom` text NOT NULL,
  `nom` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prénom`, `nom`, `email`, `password`) VALUES
(1, 'ILI', 'MOU', 'ILI@MOU.FR', 'XXX'),
(4, 'trhrt', 'tryrty', 'trhrhr@tfg', 'trhrrt'),
(5, 'rino', 'rino', 'rino@gmail.com', 'rino'),
(6, 'asa', 'esz', 'asa@esz', 'zas'),
(7, 'younes', 'oulmen', 'younes.oulmen@gmail.com', 'azer'),
(8, 'azer', 'QQ', 'rzzr@az', 'rzrzzr'),
(9, 'sobi', 'Admin', 'sobi@gmail.com', 'azerty123'),
(10, 'ILIASSE', 'MOUFLIH', 'ILIASSE@MOUFLIH.com', '123azer'),
(11, 'anis', 'anis', 'anis@anis.fr', 'anis123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listejeux`
--
ALTER TABLE `listejeux`
  ADD PRIMARY KEY (`id_game`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_game`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listejeux`
--
ALTER TABLE `listejeux`
  MODIFY `id_game` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id_game` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
