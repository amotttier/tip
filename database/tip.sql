-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2016 at 02:44 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tip`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_classe`
--

CREATE TABLE `t_classe` (
  `id` int(11) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `fk_classe` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(10) NOT NULL DEFAULT '0' COMMENT '0: User, 1:Prof, 2:Admin',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `first_name`, `last_name`, `fk_classe`, `password`, `salt`, `email`, `type`, `created_at`, `updated_at`) VALUES
(1, 'amottier', 'Alexandre', 'Mottier', NULL, 'ce4a8755b9da893d7a7948170bfe662f1d24f0bc', 'ÞPÐP|ì\\rï\\x02ƒD¤"\\x01\\x01', 'alex_mottier@hotmail.com', 0, '2016-11-20 13:49:57', '2016-11-20 13:58:29'),
(2, 'emujkanovic', 'Edin', 'Mujkanovic', NULL, 'bfc02f7952cce08e2b2370197d449844efd9660c', '»á\\x05Ñ‡óýtÍ\\x02ÃJÕjN', 'edin.mujkanovic@farmont.ch', 0, '2016-11-20 14:58:38', '2016-11-20 14:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_classe`
--
ALTER TABLE `t_classe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_classe` (`fk_classe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_classe`
--
ALTER TABLE `t_classe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
