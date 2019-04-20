-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 03:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `navmenu`
--

CREATE TABLE `navmenu` (
  `navMenuID` int(10) UNSIGNED NOT NULL,
  `pageID` int(10) UNSIGNED NOT NULL,
  `label` varchar(32) NOT NULL,
  `menuOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navmenu`
--

INSERT INTO `navmenu` (`navMenuID`, `pageID`, `label`, `menuOrder`) VALUES
(1, 2, 'About Us', 4),
(2, 3, 'Choose your coffee', 1),
(3, 4, 'Create account', 3),
(4, 5, 'Sign in', 2),
(5, 7, 'Contact Us', 5);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `pageID` int(10) UNSIGNED NOT NULL,
  `pageKey` varchar(15) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `filename` varchar(32) NOT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`pageID`, `pageKey`, `title`, `content`, `filename`, `dateModified`) VALUES
(1, 'home', 'Home', 'Home page', 'home.php', '2019-03-22 14:48:51'),
(2, 'about', 'About Us', 'this is about us', 'about.php', '2019-03-22 14:48:51'),
(3, 'products', 'Products', '<a href=\"https://www.google.com/\">Google</a>', 'products.php', '2019-03-22 14:48:51'),
(4, 'create_account', 'Create Account', '', 'create_account.php', '2019-03-26 13:40:04'),
(5, 'login', 'Login', 'Enter your user Name/Password', 'login.php', '2019-03-26 13:40:04'),
(7, 'contacts', 'Contact Us', '', 'contact.php', '2019-04-01 14:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(10) UNSIGNED NOT NULL,
  `productType` int(10) UNSIGNED NOT NULL,
  `productName` varchar(25) NOT NULL,
  `description` varchar(150) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productType`, `productName`, `description`, `image`) VALUES
(1, 1, 'Latte', 'A type of coffee made with espresso and hot steamed milk, milkier than a cappuccino.', 'latte.png'),
(2, 1, 'Cappucino', 'A type of coffee made with espresso and milk that has been frothed up with pressurized steam.', 'cappucino1.jpg'),
(3, 1, 'Espresso', 'A type of strong black coffee made by forcing steam through ground coffee beans.', 'expresso1.jpg'),
(4, 1, 'Mochaccino', 'Cappuccino coffee containing chocolate syrup or chocolate flavouring', 'moccacino1.png'),
(5, 3, 'Hot chocolate classic', 'A hot drink made by mixing milk or water with chocolate powder.', 'hot_choco1.jpg'),
(6, 3, 'Chili hot chocolate', 'Gently seasoned with a touch of chile powder, cinnamon and vanilla, this fragrant hot chocolate recipe is not too sweet and very complex ', 'chili_choco1.jpg'),
(7, 2, 'Black tea', 'Tea of the most usual type, that is fully fermented before drying', 'black1.png'),
(8, 2, 'Green tea', 'Tea made from unfermented leaves that is pale in colour and slightly bitter in flavour, produced mainly in China and Japan', 'green1.png'),
(9, 2, 'Herbal tea', 'A hot drink made with or flavoured with herbs', 'herbal1.png'),
(10, 4, 'Tiramisu', '\r\nA dessert of sponge cake infused with a liquid such as coffee or rum, layered with mascarpone cheese, and topped with cocoa or grated chocolate', 'cake1.png');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `productTypeID` int(10) UNSIGNED NOT NULL,
  `productTypeName` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`productTypeID`, `productTypeName`) VALUES
(1, 'coffee'),
(2, 'tea'),
(3, 'hot chololate'),
(4, 'cake');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `passHash` varchar(60) NOT NULL,
  `cookieHash` varchar(60) NOT NULL,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `passHash`, `cookieHash`, `dateModified`) VALUES
(2, 'olga', '$2y$10$JMXhmf0KJOkn4V2D0XdxCe6T7BBDbi8G0/nXhJFSZUETkmLZwvHZO', '$2y$10$rr6zB0GgN.idEK3evSpiFeMemFSPuzUMtg2DYNR1WHBJONHlpCQ4C', '2019-03-26 14:56:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navmenu`
--
ALTER TABLE `navmenu`
  ADD PRIMARY KEY (`navMenuID`),
  ADD KEY `pageID` (`pageID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `productType` (`productType`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`productTypeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navmenu`
--
ALTER TABLE `navmenu`
  MODIFY `navMenuID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `pageID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `productTypeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `navmenu`
--
ALTER TABLE `navmenu`
  ADD CONSTRAINT `navmenu_ibfk_1` FOREIGN KEY (`pageID`) REFERENCES `page` (`pageID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productType`) REFERENCES `producttype` (`productTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
