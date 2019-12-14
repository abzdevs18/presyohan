-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2019 at 12:48 PM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qdigdeio_wp1901`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(10) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` int(255) NOT NULL,
  `prod_category` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_address` varchar(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `prod_name`, `prod_price`, `prod_category`, `store_name`, `store_address`, `user_id`) VALUES
(49, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 3),
(50, 'Off Lotion', 123, 'Repelant', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 1),
(51, 'Nike SB Shirt', 1000, 'Mens Apparel', 'Robinsons Place', 'Calindagan, Dumaguete City', 1),
(52, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(53, 'Nike SB Shirt', 799, 'Mens Apparel', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 1),
(58, 'Samsung Full HD TV', 21000, 'Appliances', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 1),
(68, 'DC Shoe (Vestrey)', 3999, 'Mens Shoes', 'Robinsons Place', 'Calindagan, Dumaguete City', 1),
(71, 'Ponds Men', 89, 'Mens Health Care ', 'Cangs Inc. ', 'National Highway, Daro, Dumaguete City', 1),
(72, 'haha', 123, 'qwe ', 'Cangs Inc. ', 'National Highway, Daro, Dumaguete City', 1),
(75, 'Scoop Neck Denim Top', 450, 'Womens Apparel ', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(82, 'Samsung TV', 21000, 'Appliances', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(83, 'Ponds Men', 89, 'Mens Health Care', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(84, 'Ponds Men', 89, 'Mens Health Care', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(87, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(88, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(89, 'Nike SB Shirt', 799, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(90, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(91, 'Samsung TV', 21000, 'Appliances', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(92, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 10),
(93, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(94, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 11),
(95, 'Scoop Neck Denim Top', 450, 'Womens Apparel ', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 1),
(96, 'Dodong', 100, 'Mens Shoes', '', '', 12),
(97, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 20),
(98, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 23),
(99, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 25),
(100, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 26),
(101, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 23),
(102, 'Ponds Men', 89, 'Health and Personal Care', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 27),
(103, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 18),
(104, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 16),
(105, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 18),
(106, 'Scoop Neck Denim Top', 450, 'Womens Apparel ', '', '', 16),
(107, 'Ponds Men', 89, 'Health and Personal Care', '', '', 16),
(108, 'Samsung TV', 21000, 'Appliances', '', '', 16),
(109, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 27),
(110, 'Nike SB Shirt', 899, 'Mens Apparel', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 27),
(111, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', '', '', 27),
(112, 'Dodong', 100, 'Mens Shoes', 'Cangs Inc.', 'National Highway, Daro, Dumaguete City', 27),
(113, 'Samsung TV', 21000, 'Appliances', '', '', 27),
(114, 'Nike SB Shirt', 1000, 'Mens Apparel', '', '', 30),
(115, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 30),
(116, 'Nike SB Shirt', 1000, 'Mens Apparel', '', '', 16),
(117, 'DC (Chelsea)', 2800, 'Womens Shoes', '', '', 27),
(118, 'Scoop Neck Denim Top', 450, 'Womens Apparel ', '', '', 27),
(119, 'Off Lotion', 123, 'Health and Personal Care', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 27),
(120, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 27),
(121, 'DC Shoe (Vestrey)', 3499, 'Mens Shoes', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 27),
(122, 'Nike SB Shirt', 899, 'Mens Apparel', '', '', 27),
(123, 'Off Lotion', 123, 'Health and Personal Care', 'Lee Super Plaza', 'Perdices St., Dumaguete City', 31);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` decimal(9,2) NOT NULL,
  `prod_category` varchar(255) NOT NULL,
  `prod_img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_category`, `prod_img`, `description`, `user_id`) VALUES
(21, 'Ponds Men', '88.99', 'Health and Personal Care', 'images/products/50-energy-charge-icy-gel-pond-s-men-original-imaf3eueajpubzcr.jpeg', '- Top performance for playing eSports and more <br>\r\n\r\n- NVIDIA GeForce GTX graphics deliver smooth visuals  <br>\r\n\r\n- GeForce Experience delivers updates straight to your PC  <br>\r\n\r\nThe PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 5),
(22, 'Off Lotion', '123.00', 'Health and Personal Care', 'images/products/31j5Gqa-pYL._SY450_.jpg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 4),
(23, 'DC Shoe (Vestrey)', '3499.00', 'Mens Shoes', 'images/products/270x270.fit.DC-Vestrey-Skate-Shoes-Black-White.jpg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 4),
(24, 'DC Shoe (Vestrey)', '3999.00', 'Mens Shoes', 'images/products/270x270.fit.DC-Vestrey-Skate-Shoes-Black-White.jpg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 8),
(25, 'DC (Chelsea)', '2800.00', 'Womens Shoes', 'images/products/270x270.fit.DC-Chelsea-SE-Womens-Skate-Shoes-Pink-Parfait.jpg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 4),
(26, 'Scoop Neck Denim Top', '450.00', 'Womens Apparel ', 'images/products/images (5).jpeg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 5),
(28, 'Nike SB Shirt', '899.00', 'Mens Apparel', 'images/products/images (4).jpeg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 5),
(29, 'Nike SB Shirt', '799.00', 'Mens Apparel', 'images/products/images (4).jpeg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 4),
(30, 'Nike SB Shirt', '1000.00', 'Mens Apparel', 'images/products/images (3).jpeg', '- Top performance for playing eSports and more <br>  - NVIDIA GeForce GTX graphics deliver smooth visuals  <br>  - GeForce Experience delivers updates straight to your PC  <br>  The PC Specialist Vortex Core Lite is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.', 8),
(35, 'Samsung TV', '21000.00', 'Appliances', 'images/products/images (6).jpeg', '100 inch flat screen tv', 5),
(36, 'Dodong', '100.11', 'Mens Shoes', 'images/products/gamzybabybomb.jpg', 'asdasdasdasd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `brgy` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `zip` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `store_name` varchar(250) NOT NULL,
  `store_location` varchar(255) NOT NULL,
  `store_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `brgy`, `city`, `zip`, `email`, `pw`, `type`, `store_name`, `store_location`, `store_address`) VALUES
(1, 'Rizza', 'Japole', 'Camanjac', 'Sibulan', 4444, 'r@r.com', '123', 'user', 'Cangs Inc.', 'store/store/cangs.png', 'National Highway, Daro, Dumaguete City'),
(3, 'Michael Kent', 'Gamon', 'Brgy 1', 'Tanjay City', 6204, 'gamzy@yahoo.com', '1234', 'user', '', '', ''),
(4, '', '', '', '', 0, 'superlee@yahoo.com', 'slee', 'store', 'Lee Super Plaza', 'store/store/lee.png', 'Perdices St., Dumaguete City'),
(5, '', '', '', '', 0, 'ungs@y.com', '123', 'store', 'Cangs Inc.', 'store/store/cangs.png', 'National Highway, Daro, Dumaguete City'),
(6, 'Admin', 'Administrator', '1', 'Tanjay City', 6204, 'admin@admin.com', 'admin123', 'admin', '', '', ''),
(8, '', '', '', '', 0, 'rob@gmail.com', 'rob123', 'store', 'Robinsons Place', 'store/store/rob.png', 'Calindagan, Dumaguete City'),
(9, 'asas', '', '', '', 0, '', '', '', '', '', ''),
(10, 'as', 'as', 'as', 'as', 0, 'as@gmail.com', 'as', '', '', '', ''),
(11, 'd', 'D', 'D', 'D', 0, 'd@d.com', '123', '', '', '', ''),
(12, 'gamzy', 'Baby', 'Brgy 1', 'Tanjay', 6204, 'm@m.m', '1234', '', '', '', ''),
(13, 'Ronnel', '', '', '', 0, '', '', '', '', '', ''),
(14, 'Ronnel', 'Rod', 'G', 'G', 0, '', '', '', '', '', ''),
(15, 'A', 'A', 'A', 'A', 0, 'a@a.com', '123', '', '', '', ''),
(16, 'B', 'B', 'B', 'B', 1, 'b@b.b', 'b', '', '', '', ''),
(17, 'c', 'c', 'c', 'c', 0, 'c@c.com', 'c', 'user', '', '', ''),
(18, 'b', 'b', 'b', 'b', 0, 'b@b.b', 'b', 'user', '', '', ''),
(19, 'X', 'X', 'X', 'X', 0, 'x@x.x', 'x', '', '', '', ''),
(20, 'Ian Christopher ', 'Pao', 'Taclobo', 'Dumaguete City', 6200, 'aysipaw26@gmail.com', '000000', '', '', '', ''),
(21, 'Ian Christopher ', 'Pao', 'Taclobo', 'Dumaguete City', 6200, 'aysipaw26@gmail.com', '000000', '', '', '', ''),
(22, 'Ian Christopher ', 'Pao', 'Taclobo', 'Dumaguete City', 6200, 'aysipaw26@gmail.com', '000000', '', '', '', ''),
(23, 'a', 'a', 'a', 'a', 1, 'a@a.a', 'a', 'user', '', '', ''),
(24, 'ss', 'ss', 'ss', 'ss', 5, 'ss@ss.s', 's', '', '', '', ''),
(25, 'D', 'D', 'D', 'D', 0, 'd@d.d', 'd', '', '', '', ''),
(26, 'd', 'D', 'D', 'D', 1, 'd@d.com', '123', 'user', '', '', ''),
(27, 'G', 'G', 'G', 'G', 1, 'g@g.g', '123', 'user', '', '', ''),
(28, '', '', '', '', 0, '', '', '', '', '', ''),
(29, 'www', 'ww', 'ww', 'ww', 0, 'w@gmail.com', '123', 'user', '', '', ''),
(30, 'K', 'K', 'K', 'K', 1, 'k@k.k', 'k', 'user', '', '', ''),
(31, 'JOhn', 'Doe', 'Sibulam', 'Duma', 3, 'd@gmail.com', 'AbuevZ', 'user', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
