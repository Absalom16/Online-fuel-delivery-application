-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 09:00 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `diesel_orders`
--

CREATE TABLE `diesel_orders` (
  `order_id` mediumint(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `price` varchar(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `delivery_fee` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  `gas_station` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `amount_paid` varchar(10) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diesel_orders`
--

INSERT INTO `diesel_orders` (`order_id`, `first_name`, `last_name`, `email`, `price`, `tax`, `delivery_fee`, `quantity`, `total`, `company`, `gas_station`, `location`, `phone_number`, `amount_paid`, `order_date`) VALUES
(44, 'jacksen', 'tiema', 'jacksen@gmail.com', '150', '50', '100', '41', '6300', 'Rubis', 'Rubis Turbo Service Station', 'Moi’s Bridge', '0799999999', '6300', '2023-03-25 10:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `petrol_orders`
--

CREATE TABLE `petrol_orders` (
  `order_id` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `tax` varchar(10) NOT NULL,
  `delivery_fee` varchar(10) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `company` varchar(20) NOT NULL,
  `gas_station` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `amount_paid` varchar(10) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petrol_orders`
--

INSERT INTO `petrol_orders` (`order_id`, `first_name`, `last_name`, `email`, `price`, `tax`, `delivery_fee`, `quantity`, `total`, `company`, `gas_station`, `location`, `phone_number`, `amount_paid`, `order_date`) VALUES
(148, 'absalom', 'lihasi', 'absalomlihasi@gmail.', '150', '50', '100', '14', '2250', 'Shell', 'Moi&#39;sBridge Shell Petrol S', 'Moi’s Bridge', '0714022687', '2250', '2023-03-25 10:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(30) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` char(255) NOT NULL,
  `password` char(255) CHARACTER SET utf8 NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `registration_date`, `user_level`) VALUES
(16777276, 'absalom', 'lihasi', 'absalomlihasi@gmail.com', '0714022687', '12345678', '2022-12-06 20:26:02', 1),
(16777279, 'farthy', 'senelwa', 'farthysenelwa@gmail.com', '0713741363', '12345678', '2022-12-08 16:06:58', 1),
(16777280, 'Moi&#39;sBridge Shell Petrol Station', '-', 'Moi\'sBridgeShellPetrolStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:10:26', 4),
(16777281, 'Shell Petrol Eldoret Service Station', '-', 'ShellPetrolEldoretServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:11:42', 4),
(16777282, 'Shell - Eldoret', '-', 'Shell-Eldoret@gmail.com', '1234567890', '12345678', '2022-12-08 16:12:39', 4),
(16777283, 'Shell - New Eldoret S.S', '-', 'Shell-NewEldoretS.S@gmail.com', '1234567890', '12345678', '2022-12-08 16:13:41', 4),
(16777284, 'Total Kapsoya Service Station', '-', 'TotalKapsoyaServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:14:38', 3),
(16777285, 'Total uganda road service station', '-', 'Totalugandaroadservicestation@gmail.com', '1234567890', '12345678', '2022-12-08 16:15:45', 3),
(16777286, 'Total Eldoret Service Station-wareng', '-', 'TotalEldoretServiceStation-wareng@gmail.com', '1234567890', '12345678', '2022-12-08 16:16:36', 3),
(16777287, 'TotalEnergies Eldoret service station ', '-', 'TotalEnergiesEldoretservicestation@gmail.com', '1234567890', '12345678', '2022-12-08 16:17:52', 3),
(16777288, 'Rubis Uganda Road Service Station', '-', 'RubisUgandaRoadServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:19:01', 6),
(16777289, 'Rubis Burnt Forest Service Station', '-', 'RubisBurntForestServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:20:08', 6),
(16777290, 'Rubis Turbo Service Station', '-', 'RubisTurboServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:22:27', 6),
(16777291, 'Rubis Kapsabet Service Station', '-', 'RubisKapsabetServiceStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:23:22', 6),
(16777292, 'Kenol Kobil Station', '-', 'KenolKobilStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:24:37', 5),
(16777293, 'Kenol Eldoret', '-', 'KenolEldoret@gmail.com', '1234567890', '12345678', '2022-12-08 16:25:40', 5),
(16777294, 'Kenol Kobil-Uganda Road(Eldoret)', '-', 'KenolKobil-UgandaRoadEldoret@gmail.com', '1234567890', '12345678', '2022-12-08 16:26:29', 5),
(16777295, 'Kobil Petrol Station', '-', 'KobilPetrolStation@gmail.com', '1234567890', '12345678', '2022-12-08 16:29:07', 5),
(16777296, 'National oil-langas', '-', 'Nationaloil-langas@gmail.com', '1234567890', '12345678', '2022-12-08 16:30:48', 8),
(16777298, 'National oil - eldoret kapsabet road', '-', 'Nationaloil-eldoretkapsabetroad@gmail.com', '1234567890', '12345678', '2022-12-08 16:34:58', 8),
(16777299, 'National oil-eldoret', '-', 'Nationaloil-eldoret@gmail.com', '1234567890', '12345678', '2022-12-08 16:35:43', 8),
(16777300, 'National Oil', '-', 'NationalOil@gmail.com', '1234567890', '12345678', '2022-12-08 16:36:59', 8),
(16777301, 'Delta - Soy', '-', 'Delta-Soy@gmail.com', '1234567890', '12345678', '2022-12-08 16:38:04', 7),
(16777302, 'Paul', 'Murwa', 'paul@gmail.com', '0799198826', '12345678', '2022-12-08 16:51:14', 2),
(16777303, 'suzette', 'oleta', 'betcy@gmail.com', '0783907645', '12345678', '2022-12-14 07:30:26', 2),
(16777304, 'betcy', 'suzzete', 'betcy@gmail.com', '0783907645', '12345678', '2022-12-14 07:31:17', 2),
(16777305, 'hosea', 'water', 'hosea@gmail.com', '0712345', '00000', '2022-12-14 14:30:27', 2),
(16777306, 'melvin', 'angatia', 'melvin@gmail.com', '12345678', '12345678', '2023-01-23 16:50:49', 2),
(16777307, 'melvin', 'angatia', 'melvin@gmail.com', '0796681273', '12345678', '2023-01-23 16:53:45', 2),
(16777308, 'paul', 'hazard', 'paulhazard@gmail.com', '0742522431', '12345678', '2023-01-24 14:29:46', 2),
(16777309, 'jacksen', 'tiema', 'jacksen@gmail.com', '0799999999', '12345678', '2023-03-25 10:40:10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` mediumint(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` char(10) NOT NULL,
  `account_no` mediumint(20) NOT NULL,
  `registration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `name`, `email`, `phone_number`, `password`, `account_no`, `registration_date`) VALUES
(1, 'Moi&#39;sBridge Shell Petrol S', 'Moi\'sBridgeShellPetrolStation@', '1234567890', '12345678', 8388607, '2022-12-08 12:55:49'),
(2, 'Shell Petrol Eldoret Service Station', 'ShellPetrolEldoretServiceStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:01:01'),
(3, 'Shell - Eldoret', 'Shell-Eldoret@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:02:52'),
(4, 'Shell - New Eldoret S.S', 'Shell-NewEldoretS.S@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:03:33'),
(5, 'Total Kapsoya Service Station', 'TotalKapsoyaServiceStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:04:26'),
(6, 'Total uganda road service station', 'Totalugandaroadservicestation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:05:16'),
(7, 'Total Eldoret Service Station-wareng', 'TotalEldoretServiceStation-wareng@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:06:42'),
(8, 'TotalEnergies Eldoret service station', 'TotalEnergiesEldoretservicestation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:09:01'),
(9, 'Rubis Uganda Road Service Sta', 'RubisUgandaRoadServiceSta@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:10:24'),
(10, 'Rubis Burnt Forest Service Station', 'RubisBurntForestServiceStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:11:24'),
(11, 'Rubis Turbo Service Station', 'RubisTurboServiceStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:12:43'),
(12, 'Rubis Kapsabet Service Station', 'RubisKapsabetServiceStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:14:00'),
(13, 'Kenol Kobil Station', 'KenolKobilStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:15:14'),
(14, 'Kenol Eldoret', 'KenolEldoret@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:16:27'),
(15, 'Kenol Kobil-Uganda Road(Eldoret)', 'KenolKobil-UgandaRoadEldoret@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:18:00'),
(16, 'Kobil Petrol Station', 'KobilPetrolStation@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:19:15'),
(17, 'National oil-langas', 'Nationaloil-langas@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:21:44'),
(18, 'National oil - eldoret kapsabet road', 'Nationaloil-eldoretkapsabetroad@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:22:28'),
(19, 'National oil-eldoret', 'Nationaloil-eldoret@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:23:15'),
(20, 'National Oil', 'NationalOil@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:24:06'),
(21, 'Delta - Soy', 'Delta-Soy@gmail.com', '1234567890', '12345678', 8388607, '2022-12-08 13:24:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diesel_orders`
--
ALTER TABLE `diesel_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `petrol_orders`
--
ALTER TABLE `petrol_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diesel_orders`
--
ALTER TABLE `diesel_orders`
  MODIFY `order_id` mediumint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `petrol_orders`
--
ALTER TABLE `petrol_orders`
  MODIFY `order_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16777310;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
