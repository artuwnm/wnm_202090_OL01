-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2020 at 08:04 PM
-- Server version: 5.6.48-cll-lve
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
-- Database: `tian_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `description`, `thumbnail`, `images`, `date_create`, `date_modify`) VALUES
(14, 'Timeline', 80.00, 'necklace', 'This is a jewelry that represents the timeline and then this necklace is made out of gears.', 'necklace_style_thumb.jpg', 'necklace_style_thumb_1.jpg', '2020-12-12 19:17:46', '2020-12-12 19:17:46'),
(4, 'Yellow Gold flower', 55.00, 'earring', 'Handmade, polished, flower shaped', 'bracelet_thumb.jpg', 'bracelet_1.jpg,bracelet_2.jpg,bracelet_3.jpg,bracelet_4.jpg', '2020-11-14 06:18:21', '2020-11-14 06:18:21'),
(5, 'Rose gold', 30.00, 'ring', 'A complete set of sale', 'customer_ring_thumb.jpg', 'customer_ring_1.jpg,customer_ring_2.jpg,customer_ring_3.jpg', '2020-11-14 06:19:27', '2020-11-14 06:19:27'),
(6, 'Red&White', 60.00, 'earring', 'Pair with red and white, abstract animal shapes', 'earring_gold_thumb.jpg', 'earring_gold_1.jpg,earring_gold_2.jpg,earring_gold_3.jpg,earring_gold_4.jpg', '2020-11-14 06:20:29', '2020-11-14 06:20:29'),
(7, 'Wood', 45.00, 'earring', 'Make shapes out of wood. Hand grinding, polishing, high quality', 'earring_silver_thumb.jpg', 'earring_silver_1.jpg,earring_silver_2.jpg,earring_silver_3.jpg', '2020-11-14 06:21:42', '2020-11-14 06:21:42'),
(8, 'white style', 55.00, 'earring', 'It shows off a woman\'s temperament.', 'earring_anima_thumb.jpg', 'earring_anima_1.jpg,earring_anima_2.jpg,earring_anima_3.jpg,earring_anima_4.jpg', '2020-11-14 06:22:59', '2020-11-14 06:22:59'),
(9, 'Conch', 45.00, 'earring', 'An earring in the shape of a conch. Suitable for leisure or travel wear.', 'earring_animal_thumb.jpg', 'earring_animal_1.jpg,earring_animal_2.jpg,earring_animal_3.jpg', '2020-11-14 06:24:06', '2020-11-14 06:24:06'),
(10, 'Yellow Gold', 80.00, 'ring', 'Hand polished, unique shape. The center of the ring is made of rose gold and rose gold', 'ring_original_thumb.jpg', 'ring_original_1.jpg,ring_original_2.jpg,ring_original_3.jpg', '2020-11-14 06:25:00', '2020-11-14 06:25:00'),
(11, 'H-white gold', 50.00, 'ring', 'Unique rings can be made according to the initials of your family name', 'ring_silver_thumb.jpg', 'ring_silver_1.jpg,ring_silver_2.jpg,ring_silver_3.jpg', '2020-11-14 06:25:49', '2020-11-14 06:25:49'),
(16, 'Diamond ring', 68.00, 'ring', 'The two rings, one is hand-carved and polished, the other is crystal stone.', 'ring_style_thumb.jpg', 'ring_style_thumb1.jpg', '2020-12-12 20:02:47', '2020-12-12 20:02:47'),
(15, 'Blue crystal', 78.00, 'necklace', 'Wearing blue crystal can be used as a talisman to eliminate sorrow, remove evil spirits, and enhance courage and wisdom. Blue crystal is the birthstone of October and is the best gift of friendship.', 'blue_thumb.jpg', 'blue_thumb_1.jpg', '2020-12-12 19:45:28', '2020-12-12 19:45:28'),
(13, 'Ruby', 48.00, 'necklace', 'In Indian Sanskrit, it symbolizes the sacred flame that never goes out. A symbol of sunshine, freedom and power. This is to send wishes to others.', 'necklace_thumb.jpg', 'necklace_thumb_1.jpg,necklace_thumb_2.jpg,', '2020-12-12 19:08:53', '2020-12-12 19:08:53');

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
