-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 11:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency_system`
--
CREATE DATABASE IF NOT EXISTS `emergency_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `emergency_system`;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `hospital_name` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `latitude` text COLLATE utf8_unicode_ci,
  `longitude` text COLLATE utf8_unicode_ci,
  `bed_number` int(100) DEFAULT NULL,
  `bed_filled` int(100) DEFAULT NULL,
  `empty_bed` int(100) DEFAULT NULL,
  `icu_number` int(100) DEFAULT NULL,
  `icu_filled` int(100) DEFAULT NULL,
  `empty_icu` int(100) DEFAULT NULL,
  `appointable` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `distance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `user_id`, `hospital_name`, `address`, `latitude`, `longitude`, `bed_number`, `bed_filled`, `empty_bed`, `icu_number`, `icu_filled`, `empty_icu`, `appointable`, `distance`) VALUES
(1, 2, 'Max Hospital', 'Late Alhaj Zahur Ahmed Chowdhury Rd, Chittagong', '22.3554158', '91.8234669', 50, 25, 25, 5, 3, 2, 'yes', 2.7030104907283),
(2, 3, 'Popular Hospital', 'Gol pahar, Mehdibagh, Chittagong', '22.3605833', '91.8285205', 85, 50, 35, 10, 5, 5, 'yes', 2.0916707050935),
(3, 3, 'National Hospital', '14, 15 Dampara Lane, Chittagong 4000', '22.3554158', '91.8234669', 80, 25, 55, 5, 3, 2, 'yes', 2.7030104907283),
(5, 2, 'Metropoliton Hospital', '698, 752 O.R. Nizam Rd, Chittagong 4001', '22.3590441', '91.8213325', 80, 30, 25, 5, 3, 2, 'yes', 2.3587583362003),
(6, 2, 'Chevron', '12, 12 O.R. Nizam Rd, Chittagong 4203', '22.363372', '91.8279182', 85, 85, 0, 10, 10, 0, 'no', 1.7803493380521),
(7, 2, 'Delta Health Care', '28, Katalgonj, Mirzapul Road, Panchlaish, Chittagong', '22.365104237115236', '91.83405702327877', 100, 0, 100, 15, 0, 15, 'yes', 1.7114857333705),
(8, 3, 'People\'s Hospital Limited', '94 K.B. Fazlur Kader Road, Chittagong 4203', '22.35992496588681', '91.83669631694943', 85, 0, 85, 10, 0, 10, 'yes', 2.3475492889017),
(9, NULL, 'Midpoint Hospital & Meternity Center', 'Pathantuli Road, Agrabad, Chittagong', '22.333465022888667', '91.8168086682922', 120, 0, 120, 20, 0, 20, 'yes', 5.2313936898829);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` text COLLATE utf8_unicode_ci,
  `full_name` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `password` text COLLATE utf8_unicode_ci,
  `organazation` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `longitude` text COLLATE utf8_unicode_ci,
  `latitude` text COLLATE utf8_unicode_ci,
  `email_verified` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `full_name`, `email`, `password`, `organazation`, `address`, `longitude`, `latitude`, `email_verified`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', '1234', NULL, NULL, NULL, NULL, 'yes'),
(2, 'hospital_moderator', 'Mr. Rahim', 'rahim@mail.com', '1234', NULL, NULL, NULL, NULL, 'yes'),
(3, 'hospital_moderator', 'Mr. Karim', 'karim@mail.com', '1234', NULL, NULL, NULL, NULL, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
