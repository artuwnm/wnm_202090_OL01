-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2020 年 11 月 05 日 17:31
-- 服务器版本: 5.6.37
-- PHP 版本: 5.3.28p1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wschghzo_carasun`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `author` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(64) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `author`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'About Face 4', 'Alan Cooper', 15.00, 'Experience Design', '2020-11-05 16:43:46', '2020-11-05 16:43:46', 'The Essentials of Interaction Design', 'experience_design_about_face_4_thumb.jpg', 'experience_design_about_face_4_1.jpg,experience_design_about_face_4_2.jpg'),
(2, 'Beginning Adobe Experience Design', 'Rob Huddleston', 30.00, 'Experience Design', '2020-11-05 16:46:28', '2020-11-05 16:46:28', 'Quickly Design and Prototype, Websites and Mobile Apps', 'experience_design_beginning_adobe_experience_design_thumb.jpg', 'experience_design_beginning_adobe_experience_design_1.jpg,experience_design_beginning_adobe_experience_design_2.jpg'),
(3, 'Don''t Make Me Think', 'Steve Krug', 8.00, 'Experience Design', '2020-11-05 16:50:32', '2020-11-05 16:50:32', 'A Common Sense Approach to Web and Mobile Usability', 'experience_design_don''t_make_me_think_thumb.jpg', 'experience_design_don''t_make_me_think_1.jpg,experience_design_don''t_make_me_think_2.jpg'),
(4, 'Interdisciplinary Interaction Design', 'James Pannafino', 8.00, 'Experience Design', '2020-11-05 16:53:15', '2020-11-05 16:53:15', 'A visual guide to basic theories, models and ideas for thinking and designing for interactive web design and digital device experiences', 'experience_design_interdisciplinary_interaction_design_thumb.jpg', 'experience_design_interdisciplinary_interaction_design_1.jpg,experience_design_interdisciplinary_interaction_design_2.jpg'),
(5, 'The Design of Everyday Things', 'Don Norman', 15.00, 'Experience Design', '2020-11-05 16:56:42', '2020-11-05 16:56:42', 'The Design of Everyday Things is a powerful appeal for good design, and a reminder of how-and why-some products satisfy while others only disappoint.', 'experience_design_the_design_of_everyday_things_thumb.jpg', 'experience_design_the_design_of_everyday_things_1.jpg,experience_design_the_design_of_everyday_things_2.jpg'),
(6, 'Graphic Design A New History', 'Stephen J. Eskilson', 20.00, 'Graphic Design', '2020-11-05 17:00:35', '2020-11-05 17:00:35', 'The field of graphic design has grown significantly in recent years and Graphic Design A New History makes an important critical contribution to the subject, taking into account new scholarship.', 'graphic_design_graphic_design_a_new_history_thumb.jpg', 'graphic_design_graphic_design_a_new_history_1.jpg,graphic_design_graphic_design_a_new_history_2.jpg'),
(7, 'Icons of Graphic Design', 'Steven Heller', 15.00, 'Graphic Design', '2020-11-05 17:03:13', '2020-11-05 17:03:13', 'everything old is new again.', 'graphic_design_icons_of_graphic_design_thumb.jpg', 'graphic_design_icons_of_graphic_design_1.jpg,graphic_design_icons_of_graphic_design_2.jpg'),
(8, 'Murach''s PHP and MySQL', 'Joel Murach', 50.00, 'Programming', '2020-11-05 17:06:37', '2020-11-05 17:06:37', 'Get off to a fast start by learning how to develop PHP applications that get data from MySQL databases...in just 6 chapters!', 'programming_murach''s_php_and_mysql_thumb.jpg', 'programming_murach''s_php_and_mysql_1.jpg,programming_murach''s_php_and_mysql_2.jpg'),
(9, 'PHP and MySQL Web Development', 'Luke Welling', 40.00, 'Programming', '2020-11-05 17:08:33', '2020-11-05 17:08:33', 'The definitive guide to buiulding database-driven Web applications with PHP and MySQL', 'programming_php_and_mysql_web_development_thumb.jpg', 'programming_php_and_mysql_web_development_1.jpg,programming_php_and_mysql_web_development_2.jpg'),
(10, 'HTML & CSS: Design and Build Websites', 'Jon Duckett', 8.00, 'Programming', '2020-11-05 17:25:19', '2020-11-05 17:25:19', 'Welcome to choose a more efficient way of learning HTML and CSS.', 'programming_html_and_css_design_and_build_websites_thumb.jpg', 'programming_html_and_css_design_and_build_websites_1.jpg,programming_html_and_css_design_and_build_websites_2.jpg'),
(11, 'Thinking with Type', 'Ellen Lupton', 20.00, 'Type Design', '2020-11-05 17:28:07', '2020-11-05 17:28:07', 'A critical guide for designers, writers, editors, & students.', 'type_design_think_with_type_thumb.jpg', 'type_design_think_with_type_1.jpg,type_design_think_with_type_2.jpg'),
(12, 'Type on Screen', 'Ellen Lupton', 18.00, 'Type Design', '2020-11-05 17:30:47', '2020-11-05 17:30:47', 'Type on Screen is the definitive introduction to using typography in screen-based applications, from film and video to websites, electronic publications, and mobile apps.', 'type_design_type_on_screen_thumb.jpg', 'type_design_type_on_screen_1.jpg,type_design_type_on_screen_2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
