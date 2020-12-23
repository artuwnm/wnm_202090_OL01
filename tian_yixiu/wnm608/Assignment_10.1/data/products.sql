-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-11-06 15:52:10
-- 服务器版本： 5.6.49-cll-lve
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `wnm608`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(0, 'all type lotion', 'alltypelotion@gmail.com', 'http://alltypelotion.com', 12.99, 'skincare', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'lotion for all types of skin', 'alltypelotion.jpg', 'alltypelotion1.jpg,alltypelotion2.jpg,\r\nalltypelotion3.jpg'),
(0, 'oil-free lotion', 'oilfreelotion@gmail.com', 'oilfreelotion.com', 12.99, 'skincare', '2020-11-06 15:20:16', '2020-11-06 15:20:16', 'lotion for oil type skin', 'oilfreelotion.jpg', 'oilfreelotio1.jpg,oilfreelotion2.jpg'),
(0, 'moisture lotion', 'moisturelotion@gmail.com', 'http://moisturelotion.com', 12.99, 'skincare', '2020-11-06 15:23:17', '2020-11-06 15:23:17', 'lotion for dry skin', 'moisturelotion.jpg', 'moisturelotion1.jpg,moisturelotion2.jpg'),
(0, 'Moisturizing Serum', 'moisturizingserum@gmail.com', 'http://moisturizingserum.com', 29.99, 'skincare', '2020-11-06 15:36:34', '2020-11-06 15:36:34', 'The serum is for moisturizing the skin. ', 'moisturizingserum.jpg', 'moisturizingserum1.jpg,moisturizingserum2.jpg'),
(0, 'Brightening Serum', 'brighteningserum@gmail.com', 'http://brighteningserum.com', 29.99, 'skincare', '2020-11-06 15:37:52', '2020-11-06 15:37:52', 'The serum is for brighten your skin', 'brighteningserum.jpg', 'brighteningserum1.jpg,brighteningserum2.jpg'),
(0, 'Whitening Serum', 'whiteningserum@gmail.com', 'http://whiteningserum.com', 29.99, 'skincare', '2020-11-06 15:39:15', '2020-11-06 15:39:15', 'The serum is for whitening your skin', 'whiteningserum.jpg', 'whiteningserum1.jpg,whiteningserum2.jpg'),
(0, 'Moisture Toner', 'moisturetoner@gmail.com', 'http://moisturetoner.con', 15.99, 'skincare', '2020-11-06 15:41:12', '2020-11-06 15:41:12', 'The toner is for dry skin', 'moisturetoner.jpg', 'moisturetoner1.jpg,moisturetoner2.jpg'),
(0, 'Brightening Toner', 'brighteningtoner@gmail.com', 'http://brighteningtoner.com', 15.99, 'skincare', '2020-11-06 15:42:38', '2020-11-06 15:42:38', 'The toner is for brighten your skin', 'brighteningtoner.jpg', 'brighteningtoner1.jpg,brighteningtoner2.jpg'),
(0, 'Rose Toner', 'rosetoner@gmail.com', 'http://rosetoner.com', 15.99, 'skincare', '2020-11-06 15:44:09', '2020-11-06 15:44:09', 'The toner is made of rose oil, good for skin', 'rosetoner.jpg', 'rosetoner1.jpg,rosetoner2.jpg'),
(0, 'Moisture Cream', 'moisturecream@gmail.com', 'http://moisturecream.com', 25.99, 'skincare', '2020-11-06 15:46:07', '2020-11-06 15:46:07', 'The cream is good for dry skin', 'moisturecream.jpg', 'moisturecream1.jpg,moisturecream2.jpg'),
(0, 'Night Cream', 'nightcream@gmail.com', 'http://nightcream.com', 25.99, 'skincare', '2020-11-06 15:47:29', '2020-11-06 15:47:29', 'The cream is use for evening before bedtime', 'nightcream.jpg', 'nightcream1.jpg,nightcream2.jpg'),
(0, 'Rose Cream', 'rosecream@gmail.com', 'http://rosecream.com', 25.99, 'skincare', '2020-11-06 15:49:18', '2020-11-06 15:49:18', 'Moisturizing your skin', 'rosecream.jpg', 'rosecream1.jpg,rosecream2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
