-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 avr. 2022 à 02:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

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
  `id_category` int(11) NOT NULL,
  `Category_Name` varchar(255) NOT NULL,
  `Category_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `Category_Name`, `Category_Description`) VALUES
(1, 'Facial_cleanser', 'A facial cleanser is a skin care product that is designed to remove dead skin cells, oil, dirt, makeup, and other pollutants from the skin, helping to keep your pores clear and prevent skin conditions such as acne.'),
(2, 'Hand_cream', 'A hand cream is a special formulation that is meant to nourish the skin on the hands and provide it with the protection it needs.'),
(3, 'Toner', 'Toners can help close pores and tighten cell gaps after cleansing, reducing the penetration of impurities and environmental contaminants into the skin.'),
(4, 'Moisturizer', 'Moisturizers improves skin hydration and increases stratum corneum water content by directly providing water to the skin from their water phase and increasing occlusion to reduce trans-epidermal water loss'),
(9, '', ''),
(10, 'body care', '');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Description_product` varchar(255) NOT NULL,
  `category_product` int(11) NOT NULL,
  `Assignment_Category` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `Name`, `price`, `Description_product`, `category_product`, `Assignment_Category`, `image_dir`) VALUES
(2, 'Collagen & Hyaluronic Acid Ampoule', 100, 'Contains Marine Collagen and Hyaluronic Acid to improve skin elasticity and provide deep hydration to skin.', 1, 'Moisturizer', 'images/product/women/ampoule.webp'),
(3, 'Hydro Boost Hydrating Cleansing Gel', 120, 'Neutrogena® Hydro Boost Hydrating Cleansing Gel boosts hydration for soft, supple skin. This lightweight gel cleanser transforms into a silky lather that effectively removes makeup and impurities. With hyaluronic acid.', 2, 'Facial Cleanser', 'images/product/women/Neutrogena Hydro Boost Water Gel Facial Cleanser for Dry or Dehydrated Skin 200ml.jfif'),
(4, 'Farm Stay Escargot Noblesse Intensive Skin Care', 300, 'This Escargot Noblesse Intensive Skin Care 3 Set consists of a Toner (150ml), Intensive Cream (50ml),\r\nand an Intensive Emulsion (150ml), all of which contain amazing extracts from escargots fuond in nature that gives the skin a rich moisture boost.\r\nThis', 3, 'Skincare game', 'Farmstay Escargot Noblesse Lntensive Skin Care 5 Set.jfif'),
(6, 'O2 Premium Aqua Foam Cleansing', 140, 'Farmstay O2 Premium Aqua Foam Cleansing\r\nIt is an aqua foam cleansing that softens the skin burden and abundant foam removes even impurities in the pores, keeping the skin soft and refreshing.\r\nFarmstay O2 Premium Aqua Foam Cleansing', 1, 'Facial Cleanser', 'images/product/women/Foam Farmstay O2 premium AQUA.jfif'),
(7, 'CeraVe Foaming Facial', 140, 'Dispenses as a clear gel cleanser and transforms into a foam as you lather. Cleanses without leaving skin feeling tight, dry, or stripped.\r\nCleanser for face, can also be used on the body and/or hands. Suitable for normal to oily skin.', 1, 'Facial Cleanser', 'images/product/women/CeraVe Rosto & Corpo.jfif'),
(8, 'La Roche-Posay Cleanser', 160, 'Value size. Gel face wash for oily skin tested on acne-prone skin. Gently cleanses impurities while respecting skin\'s pH balance. Oil-free, soap free, formula with Zinc Pidolate to purify skin. Packaging may vary.', 1, 'Facial Cleanser', 'images/product/women/La Roche-Posay Effaclar.jfif'),
(9, 'Eucerin Hand Cream', 80, 'Repairs Rough Skin: Eucerin Advanced Repair unscented hand cream helps to repair dry, rough skin on the hands.\r\nFast Absorbing Formula: This dry skin hand cream is fast-absorbing and non-greasy, and leaves hands noticeably smoother after just one use.', 2, 'Hand Cream', 'images/product/women/12.webp'),
(10, 'Farm Stay - Tropical Fruit Hand Cream Mango & Shea Butter', 90, 'his hand cream moisturizes and nourishes dry skin with 5 kinds of fruit ingredients providing skin with long-lasting hydration.\r\nLeaves a moisturizing and refreshing finish without any stickiness.\r\nComes in a small 50ml size that is convenient to carry ar', 2, 'Hand Cream', 'images/product/women/hand-cream.webp'),
(11, 'Collagen & Hyaluronic Acid Ampoule', 200, 'Contains Marine Collagen and Hyaluronic Acid to improve skin elasticity and provide deep hydration to skin.', 4, 'Moisturizer', 'images/product/women/ampoule.webp'),
(12, 'Aloe Vera Moisture Soothing Gel', 100, '- Skin Anti-aging, Moisture supply, Long moisturizing, Zero stickiness\r\n- Aloe Vera Leaf Extract 100%\r\n- PGA content of natural fermentation\r\n-Aloe vera leaf extract called God\'s gift moisturizes the bee and is effective for sterilization and anti-inflamm', 4, 'Moisturizer', 'images/product/women/téléchargement (10).jfif'),
(13, 'Collagen Water Full Moist Toner', 230, 'A toner that helps maintaining skin elasticity with Hydrolyzed Collagen and Flower Extracts with a non-sticky, refreshing finish.\r\nSoothes the irritated skin during cleansing.\r\nDelivers moisture to skin quickly and minimizes tightening feelings after clea', 3, 'Toner', 'Farm-Stay-Collagen-Water-Full-Moist-Toner_1.jpg'),
(14, 'The Ordinary Glycolic Acid 7% Toning', 200, 'Glycolic Acid is an alpha hydroxy acid that exfoliates the skin. This 7% toning solution offers mild exfoliation for improved skin radiance and visible clarity. The formula also improves the appearance of skin texture with continued use.', 3, 'Toner', 'images/product/women/Glycolic acid (1).jfif');

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
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product` (`category_product`);

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
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_product`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `product_assignment`
--
ALTER TABLE `product_assignment`
  ADD CONSTRAINT `product_assignment_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`),
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
