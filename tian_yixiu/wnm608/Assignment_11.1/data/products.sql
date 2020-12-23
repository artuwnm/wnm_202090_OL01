-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2020-11-21 13:05:43
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
-- 表的结构 `product`
--

CREATE TABLE `product` (
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
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `name`, `email`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'All Type Lotion', 'alltypelotion@gmail.com', 'http://alltypelotion.com', 12.99, 'skincare', '2020-11-21 12:24:57', '2020-11-21 12:24:57', 'lotion for all types of skin', 'alltypelotion.jpg', 'alltypelotion.jpg'),
(2, 'Oil-free Lotion', 'oilfreelotion@gmail.com', 'http://oilfreelotion.com', 12.99, 'skincare', '2020-11-21 12:28:10', '2020-11-21 12:28:10', 'lotion for oil type skin', 'oilfreelotion.jpg', 'oilfreelotion.jpg'),
(3, 'Moisture Lotion', 'moisturelotion@gmail.com', 'http://moisturelotion.com', 12.99, 'skincare', '2020-11-21 12:29:34', '2020-11-21 12:29:34', 'lotion for dry skin', 'moisturelotion.jpg', 'moisturelotion.jpg'),
(4, 'Moisturizing Serum', 'moisturizingserum@gmail.com', 'http://moisturizingserum.com', 29.99, 'skincare', '2020-11-21 12:30:52', '2020-11-21 12:30:52', 'The serum is for moisturizing the skin', 'moisturizingserum.jpg', 'moisturizingserum.jpg'),
(5, 'Brightening Serum', 'brighteningserum@gmail.com', 'http://brighteningserum.com', 29.99, 'skincare', '2020-11-21 12:31:54', '2020-11-21 12:31:54', 'The serum is for brighten your skin', 'brighteningserum.jpg', 'brighteningserum.jpg'),
(6, 'Whitening Serum', 'whiteningserum@gmail.com', 'http://whiteningserum.com', 29.99, 'skincare', '2020-11-21 12:33:12', '2020-11-21 12:33:12', 'The serum is for whitening your skin', 'whiteningserum.jpg', 'whiteningserum.jpg'),
(7, 'Moisture Toner', 'moisturetoner@gmail.com', 'http://moisturetoner.com', 15.99, 'skincare', '2020-11-21 12:34:58', '2020-11-21 12:34:58', 'The toner is for dry skin', 'moisturetoner.jpg', 'moisturetoner.jpg'),
(8, 'Brightening Toner', 'brighteningtoner@gmail.com', 'http://brighteningtoner.com', 15.99, 'skincare', '2020-11-21 12:35:48', '2020-11-21 12:35:48', 'The toner is for brighten your skin', 'brighteningtoner.jpg', 'brighteningtoner.jpg'),
(9, 'Rose Toner', 'rosetoner@gmail.com', 'http://rosetoner.com', 15.99, 'skincare', '2020-11-21 12:36:38', '2020-11-21 12:36:38', 'The toner is made of rose oil, good for skin', 'rosetoner.jpg', 'rosetoner.jpg'),
(10, 'Moisture Cream', 'moisturecream@gmail.com', 'http://moisturecream.com', 25.99, 'skincare', '2020-11-21 12:37:30', '2020-11-21 12:37:30', 'The cream is good for dry skin', 'moisturecream.jpg', 'moisturecream.jpg'),
(11, 'Night Cream', 'nightcream@gmail.com', 'http://nightcream.com', 25.99, 'skincare', '2020-11-21 12:38:20', '2020-11-21 12:38:20', 'The cream is use for evening before bedtime', 'nightcream.jpg', 'nightcream.jpg'),
(12, 'Rose Cream', 'rosecream@gmail.com', 'http://rosecream.com', 25.99, 'skincare', '2020-11-21 12:39:11', '2020-11-21 12:39:11', 'Moisturizing your skin', 'rosecream.jpg', 'rosecream.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
