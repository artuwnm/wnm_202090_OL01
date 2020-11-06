-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 04:02 PM
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
-- Database: `sam608_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_designer` varchar(32) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_unit_price` decimal(10,2) NOT NULL,
  `product_size` varchar(32) NOT NULL,
  `product_color` varchar(32) NOT NULL,
  `product_category` varchar(32) NOT NULL,
  `prduct_ranking` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_thumb` varchar(128) NOT NULL,
  `product_images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_designer`, `product_name`, `product_unit_price`, `product_size`, `product_color`, `product_category`, `prduct_ranking`, `product_description`, `product_thumb`, `product_images`, `date_create`, `date_modify`) VALUES
(1, 'Terez', 'Waffle-Knit Long-Sleeve Pullover Hoodie', 108.00, 'Medium', 'Navy Waffle', 'Comfort at Home', 0, 'Terez hoodie sweatshirt in waffle-knit jersey; Drawstring hood; Long blouson sleeves', 'product1_1.jpg', 'product1_2.jpg', '2020-11-05 15:25:42', '2020-11-05 15:25:42'),
(2, 'Alo Yoga', 'Cross-Front Long-Sleeve Crop Top', 68.00, 'Medium', 'DOVE GREY HEATHER', 'Comfort at Home', 5, 'Alo Yoga stretch knit top with crossover detail at lower front; Crew neckline; Long sleeves', 'product2_1.jpg', 'product2_2.jpg', '2020-11-05 15:27:33', '2020-11-05 15:27:33'),
(3, 'Onzie', 'Knot Crop One Size Tank Top', 38.00, 'Medium', 'Black', 'Comfort at Home', 0, 'Onzie knot crop top; Scoop neckline; Sleeveless', 'product3_1.jpg', 'product3_2.jpg', '2020-11-05 15:29:06', '2020-11-05 15:29:06'),
(4, 'Alo Yoga', 'Urban Moto Sweatpants', 98.00, 'Medium', 'DOVE GREY HEATHER', 'Comfort at Home', 5, 'Alo Yoga \"Urban\" moto-style sweatpants with pintucked details; Drawcord waist; Side zip pockets', 'product4_1.jpg', 'product4_2.jpg', '2020-11-05 15:30:20', '2020-11-05 15:30:20'),
(5, 'Beyond Yoga', 'Spacedye Lift Your Spirits Active Bra', 60.00, 'Medium', 'DARKEST NIHGT', 'Comfort at Home', 5, 'Beyond Yoga sports bra in supportive performance knit; Removable padding; V neckline', 'product5_1.jpg', 'product5_2.jpg', '2020-11-05 15:31:44', '2020-11-05 15:31:44'),
(6, 'Varley', 'Bloomwood Jacket', 132.00, 'Medium', 'HUSHED VIOLET', 'Comfort at Home', 0, 'Varley \"Bloomwood\" ribbed jacket in cotton-blend; Banded stand collar; full zip front with ring pull; Long sleeves', 'product6_1.jpg', 'product6_2.jpg', '2020-11-05 15:32:47', '2020-11-05 15:32:47'),
(7, 'Skin', 'Noa Heathered Jogger Pants', 110.00, 'Medium', 'Gray', 'Comfort at Home', 0, 'Skin \"Noa\" jogger pants in heathered jersey; Banded, drawstring waistband; Relaxed fit', 'product7_1.jpg', 'product7_2.jpg', '2020-11-05 15:33:59', '2020-11-05 15:33:59'),
(8, 'Varley', 'Crepe Pants', 118.00, 'Medium', 'WHITE', 'Comfort at Home', 4, 'Tracy Style; Choose chocolate (shown), black (see below), or navy Italian crepe; Non-wrinkle fabric', 'product8_1.jpg', 'product8_2.jpg', '2020-11-05 15:35:48', '2020-11-05 15:35:48'),
(9, 'Johnny Was', 'Floral-Print Sleep Shirt', 125.00, 'Medium', 'MULTI PATTERN', 'Comfort at Home', 5, 'Johnny Was sleep shirt in floral print; Round neckline; Cap sleeves', 'product9_1.jpg', 'product9_2.jpg', '2020-11-05 15:36:52', '2020-11-05 15:36:52'),
(10, 'Beach Riot', 'Kyle Knit Jogger Pants', 118.00, 'Medium', 'Quail', 'Comfort at Home', 0, 'Beach Riot \"Kyle\" pants, featuring oversize front pockets; Adjustable drawstring waist; Easy fit', 'product10_1.jpg', 'product10_2.jpg', '2020-11-05 15:38:17', '2020-11-05 15:38:17'),
(11, 'ASTARS', 'Dark Stars Sweatpants', 121.00, 'Medium', 'Dark Star', 'Comfort at Home', 0, 'ASTARS baby fleece sweatpants with embroidered stars; Approx. 29.5\" inseam; Side pockets', 'product11_1.jpg', 'product11_2.jpg', '2020-11-05 15:40:03', '2020-11-05 15:40:03'),
(12, 'PJ Salvage', 'Rainbow Lounge Shorts', 50.00, 'Medium', 'Light Grey', 'Comfort at Home', 0, 'PJ Salvage \"Rainbow\" lounge shorts in melange peachy jersey;Elasticized, drawstring waist; Semi-fitted silhouette ', 'product12_1.jpg', 'product12_2.jpg', '2020-11-05 15:41:12', '2020-11-05 15:41:12');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
