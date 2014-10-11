-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2014 at 02:54 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thuexe`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_rental_bookings`
--

CREATE TABLE IF NOT EXISTS `car_rental_bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `special_requirements` text,
  `total_price` decimal(16,0) NOT NULL,
  `created_by` bigint(10) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `value` longtext NOT NULL,
  `group` varchar(50) NOT NULL DEFAULT '',
  `key` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `option_name` (`name`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`, `group`, `key`) VALUES
(1, 'Tên website', 'Thuê xe đà nẵng giá rẻ', 'Site', 'name'),
(2, 'Keywords', 'Thuê xe du lịch đà nẵng, tour du lịch giá rẻ, thuê xe giá rẻ miền trung', 'Meta', 'keywords'),
(3, 'Description', 'Trang thuê xe giá rẻ và đặt tour miền trung - Đà Nẵng - Huế', 'Meta', 'description'),
(4, 'Robots', 'index, follow', 'Meta', 'robots');

-- --------------------------------------------------------

--
-- Table structure for table `postmeta`
--

CREATE TABLE IF NOT EXISTS `postmeta` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_by` bigint(20) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `body` longtext NOT NULL,
  `title` varchar(200) NOT NULL,
  `excerpt` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `parent_id` bigint(20) unsigned DEFAULT '0',
  `url` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT 'post',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_by`, `created`, `body`, `title`, `excerpt`, `status`, `updated`, `parent_id`, `url`, `type`) VALUES
(1, 1, '2014-10-07 08:04:08', 'asd', 'asd', 'asd', '1', '2014-10-09 16:21:29', 0, 'asd', 'daily_tour'),
(2, 0, '0000-00-00 00:00:00', '<p>Đ&agrave; nẵng - Huế - Phong nha</p>\r\n', 'Đà nẵng - Huế - Phong nha', 'Đà nẵng - Huế - Phong nha', '1', '2014-10-09 18:23:45', 0, 'da-nang-hue-phong-nha', 'weekly_tour'),
(6, 1, '2014-10-09 18:41:55', '<p><a href="http://localhost/thuexedn/admin/posts/edit/5/weekly_tour" style="margin: 0px; padding: 0px; box-sizing: border-box; color: rgb(66, 139, 202); text-decoration: none; font-weight: bold; font-family: ''Open Sans''; line-height: 18.5714302062988px; background-color: rgb(249, 249, 249);">Đ&agrave; nẵng - Huế - Phong nha - b&agrave; n&agrave;</a></p>\r\n', 'Đà nẵng - Huế - Phong nha - bà nà', 'Đà nẵng - Huế - Phong nha - bà nà', '1', '2014-10-10 18:30:08', 0, 'da-nang-hue-phong-nha-ba-na', 'weekly_tour'),
(7, 1, '2014-10-10 18:26:37', '', '', '', '1', '2014-10-10 18:26:37', 0, '', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`, `slug`) VALUES
(1, 'Tour hằng ngày', 'daily_tour'),
(2, 'Tour hằng tuần', 'weekly_tour'),
(3, 'Loại xe', 'car_rental'),
(4, 'Chặn đi', 'rental_option'),
(5, 'Khuyến mãi', 'promotion');

-- --------------------------------------------------------

--
-- Table structure for table `tour_bookings`
--

CREATE TABLE IF NOT EXISTS `tour_bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tour_schedule_id` bigint(20) NOT NULL,
  `tour_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `adults` int(11) NOT NULL,
  `childs` int(11) NOT NULL DEFAULT '0',
  `special_requirements` text,
  `total_price` decimal(16,0) NOT NULL,
  `created_by` bigint(20) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tour_schedules`
--

CREATE TABLE IF NOT EXISTS `tour_schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) NOT NULL,
  `start_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration_days` int(11) NOT NULL DEFAULT '0',
  `price` decimal(16,2) NOT NULL DEFAULT '0.00',
  `price_child` decimal(16,0) NOT NULL DEFAULT '0',
  `max_people` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `created`) VALUES
(1, 'admin', '3fa470e1e256c3f80e7e062658c09209e857961d', 'admin', 'admin@admin.com', '2014-10-07 07:53:44'),
(2, 'admin1', '3fa470e1e256c3f80e7e062658c09209e857961d', 'admin', 'admin@adminm.com', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
