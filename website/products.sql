-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2020 at 01:08 PM
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
(1, 'Moncada', 10.00, 'Moncada description', 'Adobe', 'adobe_moncada_thumbnail.jpg', 'adobe_moncada.jpg', '2020-11-08 11:50:15', '2020-11-08 11:50:15'),
(2, 'McCary', 10.00, 'McCary description', 'adobe', 'adobe_mccary_thumbnail.jpg', 'adobe_mccary.jpg', '2020-11-08 11:51:27', '2020-11-08 11:51:27'),
(3, 'Ricardo', 10.00, 'Ricardo description', 'adobe', 'adobe_ricardo_thumbnail.jpg', 'adobe_ricardo.jpg', '2020-11-08 11:52:19', '2020-11-08 11:52:19'),
(4, 'Brooklyn', 10.00, 'Brooklyn description', 'adobe', 'adobe_brooklyn_thumbnail.jpg', 'adobe_brooklyn.jpg', '2020-11-08 11:53:52', '2020-11-08 11:53:52'),
(5, 'Arguello', 10.00, 'Arguello description', 'suave', 'suave_arguello_thumbnail.jpg', 'suave_arguello.jpg', '2020-11-08 11:56:05', '2020-11-08 11:56:05'),
(6, 'Rivera', 10.00, 'Rivera dscription', 'suave', 'suave_rivera_thumbnail.jpg', 'suave_rivera.jpg', '2020-11-08 11:57:10', '2020-11-08 11:57:10'),
(7, 'Santiago', 10.00, 'Santiago description', 'suave', 'suave_santiago_thumbnail.jpg', 'suave_santiago.jpg', '2020-11-08 11:57:58', '2020-11-08 11:57:58'),
(8, 'Belvedere', 10.00, 'Belvedere description', 'suave', 'suave_belvedere_thumbnail.jpg', 'suave_belvedere.jpg', '2020-11-08 11:58:44', '2020-11-08 11:58:44'),
(9, 'Teresa', 10.00, 'Teresa description', 'swell', 'swell_teresa_thumbnail.jpg', 'swell_teresa.jpg', '2020-11-08 12:00:43', '2020-11-08 12:00:43'),
(10, 'Buddy', 10.00, 'Buddy description', 'swell', 'swell_buddy_thumbnail.jpg', 'swell_buddy.jpg', '2020-11-08 12:01:57', '2020-11-08 12:01:57'),
(11, 'Rocky', 10.00, 'Rocky description', 'swell', 'swell_rocky_thumbnail.jpg', 'swell_rocky.jpg', '2020-11-08 12:01:57', '2020-11-08 12:01:57'),
(12, 'Eastwood', 10.00, 'Eastwood description', 'swell', 'swell_eastwood_thumbnail.jpg', 'swell_eastwood.jpg', '2020-11-08 12:02:36', '2020-11-08 12:02:36'),
(13, 'Tulum', 10.00, 'Tulum desciption', 'nomad', 'nomad_tulum_thumbnail.jpg', 'nomad_tulum.jpg', '2020-11-08 12:05:27', '2020-11-08 12:05:27'),
(14, 'Monterrey', 10.00, 'Monterrey description', 'nomad', 'nomad_monterrey_thumbnail.jpg', 'nomad_monterrey.jpg', '2020-11-08 12:05:27', '2020-11-08 12:05:27'),
(15, 'Big Sur', 10.00, 'Big Sur description', 'nomad', 'nomad_big_sur_thumbnail.jpg', 'nomad_big_sur.jpg', '2020-11-08 12:06:50', '2020-11-08 12:06:50'),
(16, 'Austin', 10.00, 'Austin description', 'nomad', 'nomad_austin_thumbnail.jpg', 'nomad_austin.jpg', '2020-11-08 12:06:50', '2020-11-08 12:06:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
