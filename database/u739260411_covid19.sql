-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2020 at 03:31 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u739260411_covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid_19_id`
--

CREATE TABLE `covid_19_id` (
  `id_covid_19_id` int(11) NOT NULL,
  `date_covid_19_id` datetime NOT NULL,
  `positif_covid_19_id` int(20) NOT NULL DEFAULT 0,
  `sembuh_covid_19_id` int(20) NOT NULL DEFAULT 0,
  `meninggal_covid_19_id` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covid_19_id`
--

INSERT INTO `covid_19_id` (`id_covid_19_id`, `date_covid_19_id`, `positif_covid_19_id`, `sembuh_covid_19_id`, `meninggal_covid_19_id`) VALUES
(6, '2020-03-02 12:00:00', 2, 0, 0),
(7, '2020-03-03 12:00:00', 2, 0, 0),
(8, '2020-03-04 12:00:00', 2, 0, 0),
(9, '2020-03-05 12:00:00', 2, 0, 0),
(10, '2020-03-06 12:00:00', 4, 0, 0),
(11, '2020-03-07 12:00:00', 4, 0, 0),
(15, '2020-03-08 12:00:00', 6, 0, 0),
(23, '2020-03-09 12:00:00', 19, 0, 0),
(24, '2020-03-10 12:00:00', 27, 2, 0),
(25, '2020-03-11 12:00:00', 34, 2, 1),
(26, '2020-03-12 12:00:00', 34, 2, 1),
(27, '2020-03-13 12:00:00', 69, 2, 4),
(30, '2020-03-14 12:00:00', 96, 8, 5),
(31, '2020-03-15 12:00:00', 117, 8, 5),
(32, '2020-03-16 12:00:00', 134, 8, 5),
(33, '2020-03-17 12:00:00', 172, 9, 5),
(34, '2020-03-18 12:00:00', 227, 11, 19),
(35, '2020-03-19 12:00:00', 308, 15, 25),
(36, '2020-03-20 12:00:00', 369, 17, 32),
(37, '2020-03-21 12:00:00', 450, 38, 20),
(38, '2020-03-22 12:00:00', 514, 29, 48),
(39, '2020-03-23 12:00:00', 579, 30, 49),
(40, '2020-03-24 12:00:00', 685, 30, 55),
(41, '2020-03-25 12:00:00', 790, 31, 58),
(42, '2020-03-26 12:00:00', 893, 35, 79),
(43, '2020-03-27 12:00:00', 1046, 46, 87),
(44, '2020-03-28 12:00:00', 1155, 59, 102),
(45, '2020-03-29 12:00:00', 1285, 64, 114),
(46, '2020-03-30 12:00:00', 1414, 75, 122),
(47, '2020-03-31 12:00:00', 1528, 81, 136),
(48, '2020-04-01 12:00:00', 1677, 103, 157),
(49, '2020-04-02 12:00:00', 1790, 112, 170),
(50, '2020-04-03 12:00:00', 1986, 134, 181),
(51, '2020-04-04 12:00:00', 2092, 150, 191),
(52, '2020-04-05 12:00:00', 2273, 164, 198),
(53, '2020-04-06 12:00:00', 2491, 192, 209),
(54, '2020-04-07 12:00:00', 2738, 204, 221),
(55, '2020-04-08 12:00:00', 2956, 222, 240),
(56, '2020-04-09 12:00:00', 3293, 252, 280),
(57, '2020-04-10 12:00:00', 3512, 282, 306),
(58, '2020-04-11 12:00:00', 3842, 286, 327),
(59, '2020-04-12 12:00:00', 4241, 359, 373);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid_19_id`
--
ALTER TABLE `covid_19_id`
  ADD PRIMARY KEY (`id_covid_19_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid_19_id`
--
ALTER TABLE `covid_19_id`
  MODIFY `id_covid_19_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
