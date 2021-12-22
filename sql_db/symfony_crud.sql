-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2021 at 04:32 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `roles`, `password`) VALUES
(14, 'abcz', '{\"roles\": \"ROLE_USER\"}', '$2y$13$u3LS6g39AeSCysvBytq6dub4sxf9ZPaByNptlyK/nTaoBlGzwJivG'),
(15, 'sandeep1', '{\"roles\": \"ROLE_USER\"}', '$2y$13$LEDCbBugOHtCVt9RbyulAuACDPfNARLeySJNM.U6.DREyZzW3usTO'),
(16, 'sandeep2', '{\"roles\": \"ROLE_USER\"}', '$2y$13$sZ00M7btJ6ukzA5OwiWAoOB3ZYQkSiAegcfQvxTN59nTe/6lihbRa'),
(17, 'sumit', '{\"roles\": \"ROLE_USER\"}', '$2y$13$ne0ylc0g38raDllfcSFX6.BAwEsHTAg7Km/0D7ZP14yrVDLeJ.x1K'),
(18, 'abc123', '{\"roles\": \"ROLE_USER\"}', '$2y$13$DOD0/JES..4Kof9/V3ftsegJBkx/15BJp.oLpmGjL/GQvZfJ3vA12'),
(19, 'sandeep3', '{\"roles\": \"ROLE_USER\"}', '$2y$13$oEqPCUdWZYJSsBTTCKZfSu/Hwm6juYFaY3WvA0TeZJC1M8Xr.mZ9q'),
(20, 'usersym', '{\"roles\": \"ROLE_USER\"}', '$2y$13$/49xnt4hXIzXZDvM1EnEw.32EwVJYRgwIKOVKYX4E3g49p5Alkvr.'),
(21, 'usersymusersym', '{\"roles\": \"ROLE_USER\"}', '$2y$13$J0yhKDZFgiAn22MCDXIudO64tCxDaH.GzTd7VGScy5F/2Z9CUoFL.'),
(22, 'first', '{\"roles\": \"ROLE_USER\"}', '$2y$13$DFnd9cUsaGJK0abOIJoJ1.dn8wXKU/ARg1oBGaDXyxp6.jmWh8aIC'),
(23, 'sandeep321', '{\"roles\": \"ROLE_USER\"}', '$2y$13$7eMFYuLTFZ6B2Qx3.GBIsum64A6aVGW.HJQJ2Asgt6x4WvZy4v57m'),
(24, 'newone', '{\"roles\": \"ROLE_USER\"}', '$2y$13$Tx9ug8ObiaHbTLu2a1e9qeEwZq1Xf9Dp7Gkg.k6VvNRxSOcx4OC.i'),
(25, 'superadmin', '{\"roles\": \"ROLE_USER\"}', '$2y$13$1UmSenAFuSWD40E9A7k2L.gnMLqCyp9dCg7cRFAwzXLCE7E4B3Oii'),
(26, 'adminsuper', '{\"roles\": \"ROLE_USER\"}', '$2y$13$Gxud5djhCjM32cKVLif/Te0y7jFBRSDX2cLUwYBBce6YWNk6zROLy');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211210060038', '2021-12-10 11:31:26', 804),
('DoctrineMigrations\\Version20211210064548', '2021-12-10 12:16:01', 2740),
('DoctrineMigrations\\Version20211214054240', '2021-12-14 11:13:01', 1576),
('DoctrineMigrations\\Version20211216051531', '2021-12-16 10:45:45', 1571);

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'sandeep3', 'taction@email.co.in', '$2y$13$oEqPCUdWZYJSsBTTCKZfSu/Hwm6juYFaY3WvA0TeZJC1M8Xr.mZ9q');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `mobile`, `city`, `age`) VALUES
(16, 'tom jorden12', 'tomric@email.co.in', '9012321987', 'gurgoun', '34'),
(23, 'sumit viswakarma', 'sumit@tactionsoftware.com', '2987654321', 'noida', '24'),
(24, 'shadab asraf', 'asraf@email.co.in', '9012321987', 'delhi', '22'),
(26, 'tommy hilled', 'tom@email.co.us', '9090876543', 'new york', '24'),
(32, 'yogesh prajapati', 'yogesh@email.co.in', '8909765432', 'noida', '22'),
(41, 'mark', 'mark@email.co', '9999999999', 'delhi', '40'),
(42, 'sandeep negi', 'sandeep@techesperto.com', '7500087210', 'north delhi', '23'),
(43, 'sumit viswakma', 'sumit@tactionsoftware.com', '9012321987', 'noida', '25'),
(44, 'Hareesh Kumar', 'harresh@tactionsoftware.com', '2132109876', 'Gaziabaad', '32'),
(45, 'Steve  Jobs', 'steves@apple.co.us', '9087123200', 'mumbai', '45'),
(46, 'Varun', 'varun@techesperto.com', '8021327643', 'Gaziabad', '26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_880E0D76F85E0677` (`username`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
