-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 avr. 2022 à 13:39
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `productiondb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `Visitor_Reference` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cartline`
--

CREATE TABLE `cartline` (
  `id` int(11) NOT NULL,
  `Product _cart_ quantity` int(11) NOT NULL,
  `Id_cart` int(11) NOT NULL,
  `Id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `Description_product` varchar(255) NOT NULL,
  `supply` varchar(255) NOT NULL,
  `Assignment_Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `product_assignment`
--

CREATE TABLE `product_assignment` (
  `Id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `supply`
--

CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `Quantity_add` int(11) NOT NULL,
  `Date_add` date NOT NULL,
  `Id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `password`, `country`) VALUES
(1, '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0'),
(4, '', 'tebbaa', 'razorzeroday@gmail.com', 'crashoverflow', 'password', 'morocoo'),
(5, '', 'awad', 'maCERT@protonmail.com', 'admin', 'something', 'botswana'),
(6, '', 'awad', 'maCERT@protonmail.com', 'admin', 'something', 'botswana'),
(7, '', 'awad', 'maCERT@protonmail.com', 'admin', 'something', 'botswana');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cartline`
--
ALTER TABLE `cartline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_cart` (`Id_cart`),
  ADD KEY `Id_product` (`Id_product`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product_assignment`
--
ALTER TABLE `product_assignment`
  ADD KEY `id_category` (`id_category`),
  ADD KEY `Id_product` (`Id_product`);

--
-- Index pour la table `supply`
--
ALTER TABLE `supply`
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cartline`
--
ALTER TABLE `cartline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cartline`
--
ALTER TABLE `cartline`
  ADD CONSTRAINT `cartline_ibfk_1` FOREIGN KEY (`Id_cart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cartline_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `product_assignment`
--
ALTER TABLE `product_assignment`
  ADD CONSTRAINT `product_assignment_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_assignment_ibfk_2` FOREIGN KEY (`Id_product`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `supply_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
