-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2020 at 06:57 PM
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
-- Database: `YangCao12_AAU`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `color` varchar(32) NOT NULL,
  `capacity` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `color`, `capacity`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'iPhone 12 Pro', 'silver', '64 GB', 999.00, 'new arrivals, cell phones', '2020-11-05 21:56:13', '2020-11-05 21:56:13', '5G goes Pro. A14 Bionic rockets past every other smartphone chip. The Pro camera system takes low-light photography to the next level — with an even bigger jump on iPhone 12 Pro Max. And Ceramic Shield delivers four times better drop performance. Let’s see what this thing can do.', 'cellphones_iphone12pro_thumb.jpg', 'cellphones_iphone12pro_1.jpg'),
(2, 'iPhone 12 64GB', 'white', '64 GB', 799.00, 'new arrivals, cell phones', '2020-11-05 21:59:20', '2020-11-05 21:59:20', '5G speed. A14 Bionic, the fastest chip in a smartphone.\r\nAn edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all — in two perfect sizes.', 'cellphones_iphone12_thumb.jpg', 'cellphones_iphone12_1.jpg'),
(3, 'iPhone SE 64GB', 'white', '64 GB', 399.00, 'cell phones', '2020-11-05 22:22:43', '2020-11-05 22:22:43', 'iPhone SE packs a remarkably powerful chip into our most popular size at our most affordable price. It’s just what you’ve been waiting for.', 'cellphones_iphonese_thumb.jpg', 'cellphones_iphonese_1.jpg'),
(4, 'iPhone 11 64GB', 'white', '64 GB', 599.00, 'cell phones', '2020-11-05 22:28:09', '2020-11-05 22:28:09', 'Shoot 4K videos, beautiful portraits, and sweeping landscapes with the all-new dual-camera system. Capture your best low-light photos with Night mode. See true-to-life color in your photos, videos, and games on the 6.1-inch Liquid Retina display. Experience unprecedented performance with A13 Bionic for gaming, augmented reality (AR), and photography. Do more and charge less with long-lasting battery life.', 'cellphones_iphone11_thumb.jpg', 'cellphones_iphone11_1.jpg'),
(5, 'iPhone XR 64GB', 'white', '64 GB', 499.00, 'cell phones', '2020-11-05 22:33:16', '2020-11-05 22:33:16', 'iPhone XR features a 6.1-inch Liquid Retina display with industry-leading color accuracy and an innovative backlight design that allows the screen to stretch into the corners. Six stunning new finishes. Advanced Face ID lets you securely unlock your iPhone, log in to apps, and pay with just a glance. The A12 Bionic chip with next-generation Neural Engine uses real-time machine learning to transform the way you experience photos, gaming, augmented reality, and more. A breakthrough 12MP camera system with Portrait mode, Portrait Lighting, enhanced bokeh, and all-new Depth Control. Water resistance.', 'cellphones_iphonexr_thumb.jpg', 'cellphones_iphonexr_1.jpg'),
(6, 'iPad Pro 11-inch display', 'silver', '128GB', 799.00, 'computers', '2020-11-06 11:24:40', '2020-11-06 11:24:40', '12.9-inch and 11-inch Liquid Retina display with ProMotion  A12Z Bionic chip  Compatible with Magic Keyboard and Smart Keyboard Folio  Compatible with Apple Pencil (2nd generation)', 'computers_ipadpro_thumb.jpg', 'computers_ipadpro_1.jpg'),
(7, 'Apple Pencil (2nd generation)', '', '', 129.00, 'accessories', '2020-11-06 10:24:04', '2020-11-06 10:24:11', 'Wireless pairing and charging Attaches magnetically Double-tap to change tools Pixel-perfect precision Tilt and pressure sensitivity Imperceptible lag Free engraving', 'accessories_applepencil_thumb.jpg', 'accessories_applepencil_1.jpg'),
(8, 'AirPods Pro', '', '', 249.00, 'music', '2020-11-06 11:25:10', '2020-11-06 11:25:10', 'Magic like you’ve never heard AirPods Pro have been designed to deliver Active Noise Cancellation for immersive sound, Transparency mode so you can hear your surroundings, and a customizable fit for all-day comfort. Just like AirPods, AirPods Pro connect magically to your iPhone or Apple Watch. And they’re ready to use right out of the case.  Active Noise Cancellation Incredibly light noise-cancelling headphones, AirPods Pro block out your environment so you can focus on what you’re listening to. AirPods Pro use two microphones, an outward-facing microphone and an inward-facing microphone, to create superior noise cancellation. By continuously adapting to the geometry of your ear and the fit of the ear tips, Active Noise Cancellation silences the world to keep you fully tuned in to your music, podcasts, and calls.  Transparency mode Switch to Transparency mode and AirPods Pro let the outside sound in, allowing you to hear and connect to your surroundings. Outward- and inward-facing microphones enable AirPods Pro to undo the sound-isolating effect of the silicone tips so things sound and feel natural, like when you’re talking to people around you.  All-new design AirPods Pro offer a more customizable fit with three sizes of flexible silicone tips to choose from. With an internal taper, they conform to the shape of your ear, securing your AirPods Pro in place and creating an exceptional seal for superior noise cancellation.  Amazing audio quality A custom-built high-excursion, low-distortion driver delivers powerful bass. A superefficient high dynamic range amplifier produces pure, incredibly clear sound while also extending battery life. And Adaptive EQ automatically tunes music to suit the shape of your ear for a rich, consistent listening experience.  Even more magical The Apple-designed H1 chip delivers incredibly low audio latency. A force sensor on the stem makes it easy to control music and calls and switch between Active Noise Cancellation and Transparency mode. Announce Messages with Siri gives you the option to have Siri read your messages through your AirPods. And with Audio Sharing, you and a friend can share the same audio stream on two sets of AirPods — so you can play a game, watch a movie, or listen to a song together.¹', 'music_airpodspro_thumb.jpg', 'music_airpodspro_1.jpg'),
(9, 'Apple Watch Gold Stainless Steel Case with Leather Link 40mm', 'baltic blue', '', 749.00, 'fitness & personal care', '2020-11-06 11:25:22', '2020-11-06 11:25:22', 'Measure your blood oxygen level with a revolutionary new sensor and app. Take an ECG anytime, anywhere. See your fitness metrics at a glance with the enhanced Always-On Retina display. With Apple Watch Series 6 on your wrist, a healthier, more active, more connected life is within reach.', 'fitness_applewatchs6_thumb.jpg', 'fitness_applewatchs6_1.jpg'),
(10, 'Apple Watch Space Gray Aluminum Case with Sport Band 40mm', 'ginger', '', 279.00, 'fitness & personal care', '2020-11-06 11:25:35', '2020-11-06 11:25:35', 'An expansive Retina display so you can see more at a glance. Advanced sensors to track all the ways you move. Powerful features to keep you healthy and safe. Apple Watch SE is a lot of watch for a lot less than you expected.', 'fitness_applewatchse_thumb.jpg', 'fitness_applewatchse_1.jpg'),
(11, '13-inch MacBook Air 1.1GHz Dual-Core Core i3 Processor with Turb', 'silver', '8GB 3733MHz LPDDR4X memory', 999.00, 'computers', '2020-11-06 18:39:45', '2020-11-06 18:39:45', 'The incredibly thin and light MacBook Air is now more powerful than ever. It features a brilliant Retina display, new Magic Keyboard, Touch ID, processors with up to twice the performance,1 faster graphics, and double the storage capacity. The sleek wedge-shaped design is created from 100 percent recycled aluminum, making it the greenest Mac ever.2 And with all-day battery life, our most popular Mac is your perfectly portable, do-it-all notebook.1.1GHz Dual-Core Core i3 Processor with Turbo Boost up to 3.2GHz256GB StorageTouch ID', 'computers_macbookair13_thumb.jpg', 'computers_macbookair13_1.jpg'),
(12, 'Leather Sleeve for 13-inch MacBook Air and MacBook Pro', 'saddle brown', '', 179.00, 'accessories', '2020-11-06 18:47:58', '2020-11-06 18:47:58', 'Made by Apple, this sleeve is crafted from high-quality European leather. A soft microfiber lining keeps your MacBook Air or MacBook Pro protected wherever you take it.', 'accessories_macsleeve_thumb.jpg', 'accessories_macsleeve_1.jpg');

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
