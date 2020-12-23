-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2020 at 07:14 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksmith_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(1000) NOT NULL,
  `thumbnail` varchar(1000) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(1, 'Moncada', 10.00, 'Moncada description', 'adobe', 'adobe_moncada_thumbnail', 'adobe_moncada', '2020-11-08 11:50:15', '2020-11-08 11:50:15'),
(2, 'McCary', 50.00, 'McCary description', 'adobe', 'adobe_mccary_thumbnail', 'adobe_mccary', '2020-11-08 11:51:27', '2020-11-08 11:51:27'),
(3, 'Ricardo', 100.00, 'Ricardo description', 'adobe', 'adobe_ricardo_thumbnail', 'adobe_ricardo', '2020-11-08 11:52:19', '2020-11-08 11:52:19'),
(4, 'Brooklyn', 75.00, 'Brooklyn description', 'adobe', 'adobe_brooklyn_thumbnail', 'adobe_brooklyn', '2020-11-08 11:53:52', '2020-12-04 22:18:03'),
(5, 'Arguello', 200.00, 'Arguello description', 'suave', 'suave_arguello_thumbnail', 'suave_arguello', '2020-11-08 11:56:05', '2020-11-08 11:56:05'),
(6, 'Rivera', 15.00, 'Rivera dscription', 'suave', 'suave_rivera_thumbnail', 'suave_rivera', '2020-11-08 11:57:10', '2020-11-08 11:57:10'),
(7, 'Santiago', 40.00, 'Santiago description', 'suave', 'suave_santiago_thumbnail', 'suave_santiago', '2020-11-08 11:57:58', '2020-11-08 11:57:58'),
(8, 'Belvedere', 120.00, 'Belvedere description', 'suave', 'suave_belvedere_thumbnail', 'suave_belvedere', '2020-11-08 11:58:44', '2020-11-08 11:58:44'),
(9, 'Teresa', 250.00, 'Teresa description', 'swell', 'swell_teresa_thumbnail', 'swell_teresa', '2020-11-08 12:00:43', '2020-11-08 12:00:43'),
(10, 'Buddy', 150.00, 'Buddy description', 'swell', 'swell_buddy_thumbnail', 'swell_buddy', '2020-11-08 12:01:57', '2020-11-08 12:01:57'),
(11, 'Rocky', 30.00, 'Rocky description', 'swell', 'swell_rocky_thumbnail', 'swell_rocky', '2020-11-08 12:01:57', '2020-11-08 12:01:57'),
(12, 'Eastwood', 220.00, 'Eastwood description', 'swell', 'swell_eastwood_thumbnail', 'swell_eastwood', '2020-11-08 12:02:36', '2020-11-08 12:02:36'),
(13, 'Tulum', 180.00, 'Tulum desciption', 'nomad', 'nomad_tulum_thumbnail', 'nomad_tulum', '2020-11-08 12:05:27', '2020-11-08 12:05:27'),
(14, 'Monterrey', 60.00, 'Monterrey description', 'nomad', 'nomad_monterrey_thumbnail', 'nomad_monterrey', '2020-11-08 12:05:27', '2020-11-08 12:05:27'),
(15, 'Big Sur', 80.00, 'Big Sur description', 'nomad', 'nomad_big_sur_thumbnail', 'nomad_big_sur', '2020-11-08 12:06:50', '2020-11-08 12:06:50'),
(16, 'Austin', 850.00, 'Austin description', 'nomad', 'nomad_austin_thumbnail', 'nomad_austin', '2020-11-08 12:06:50', '2020-11-08 12:06:50'),
(19, 'New Product 1', 100.00, 'Product 1 description', 'adobe', 'adobe_moncada_thumbnail', 'adobe_moncada', '2020-12-04 22:43:29', '2020-12-04 22:43:33'),
(20, 'New Product 1', 100.00, 'Product 1 description', 'adobe', 'adobe_moncada_thumbnail', 'adobe_moncada', '2020-12-04 22:43:43', '2020-12-04 22:43:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
