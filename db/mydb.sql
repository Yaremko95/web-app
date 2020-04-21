-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--



-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre`) VALUES
(1, 'metal'),
(2, 'pop'),
(3, 'soundtracks'),
(4, 'jazz/classical'),
(5, 'sound/rnb'),
(6, 'hiphop/rap'),
(7, 'compilations'),
(8, 'dance/electronica'),
(9, 'ska/reggae');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `artist` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float(5,2) DEFAULT NULL,
  `q_ty` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `artist`, `title`, `genre`, `description`, `price`, `q_ty`, `image`, `status_id`) VALUES
(30, 'the cranberries', 'Everybody Else Is Doing It So Why Can’t We?', 'rock', 'Vinyl LP', 45.99, 4, 'image1587320236.jpg', 2),
(31, 'megadeth', 'Peace Sells...But Who\'s Buying: Exclusive Translucent Purple Vinyl', 'rock', 'Vinyl LP', 150.99, 1, 'image1586804175.jpg', 1),
(32, 'deep purple', 'Whoosh!: Limited Edition Collector\'s Box Set', 'rock', 'Double Vinyl', 61.99, 2, 'image1587299841.png', 2),
(33, 'VARIOUS ARTISTS', 'Killing Eve, Season Two (Original Series Soundtrack)', 'Limited Edition Red + Black Splatter Vinyl', 'Double Vinyl LP', 30.49, 6, 'image1586759135.jpg', 1),
(34, 'THE TEMPTATIONS', 'Christmas Card: Exclusive Opaque White Vinyl', 'rock', 'White vinyl ', 24.99, 7, 'image1586759268.jpg', 2),
(35, 'live', 'Throwing Copper (25th Anniversary): Exclusive Super Deluxe Vinyl', 'rock', 'Vinyl Box Set\r\n', 79.99, 1, 'image1586759992.jpg', 2),
(36, 'original soundtrack', 'Notting Hill OST: Red Vinyl', 'soundtrack', 'vinyl LP', 23.99, 3, 'image1586768362.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `prod_cart`
--

CREATE TABLE `prod_cart` (
  `id` int(255) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `sess_id` int(128) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prod_cart`
--

INSERT INTO `prod_cart` (`id`, `prod_id`, `sess_id`, `qty`) VALUES
(0, 30, 0, 2),
(0, 32, 0, 1),
(0, 34, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'sold'),
(2, 'in stock'),
(3, 'on hold');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `t_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trans_products`
--

CREATE TABLE `trans_products` (
  `id_trans` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `num_of_pr` int(11) DEFAULT NULL,
  `price` float(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `building` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` int(1) DEFAULT NULL,
  `role_id` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `email`, `password`, `name`, `surname`, `country`, `city`, `street`, `zip`, `building`, `phone`, `is_active`, `role_id`) VALUES
(78, 'tetianayaremko@gmail.com', '49f69a0cf315718d22eff7f04b10c387', 'Tetiana', 'Repetowska', 'Poland', 'OPOLE', 'AP 127 14 MYKOLAJCZYKA', '45-271', '12', '+4888378205', 1, 2),
(79, 'yyaremko@gmail.com', '49f69a0cf315718d22eff7f04b10c387', 'tetiana yaremko', 'yaremko', 'Poland', 'OPOLE', 'AP 127 14 MYKOLAJCZYKA', '45-271', '12', '+4888378205', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prod_id` int(11) NOT NULL,
  `qty` int(255) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(10, 'yaremko@gmail.com', 'ZNMdxQ+TwrJOvfZ+XCcVBuroSD9E8nWUEL/vaTGHXlk=', 1586410013),
(11, 'yaremko@gmail.com', '4VP/QqJmj8PT5WKPMsrJ9ohy75z+LX0vcorgFT+7uaM=', 1586410429),
(31, 'yaremko@gmail.com', '9lOAxt/FJQafdrFkCWs/j1MqxCcVdD8xSVSxA0EwZ8s=', 1587305081);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `prod_cart`
--
ALTER TABLE `prod_cart`
  ADD PRIMARY KEY (`id`,`prod_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_fk_idx` (`id_user`),
  ADD KEY `id_status_fk_idx` (`id_status`);

--
-- Indexes for table `trans_products`
--
ALTER TABLE `trans_products`
  ADD PRIMARY KEY (`id_trans`,`id_prod`),
  ADD KEY `id_prod_fk_idx` (`id_prod`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`,`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `us_cart_ibfk_1` (`prod_id`),
  ADD KEY `user_cart_ibfk_2` (`user_email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `prod_cart`
--
ALTER TABLE `prod_cart`
  ADD CONSTRAINT `prod_cart_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `id_status_fk` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `trans_products`
--
ALTER TABLE `trans_products`
  ADD CONSTRAINT `id_prod_fk` FOREIGN KEY (`id_prod`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_trans_fk` FOREIGN KEY (`id_trans`) REFERENCES `transaction` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

--
-- Constraints for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `us_cart_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_cart_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_cart_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
