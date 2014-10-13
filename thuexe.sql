-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2014 at 05:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=340 ;

--
-- Dumping data for table `postmeta`
--

INSERT INTO `postmeta` (`id`, `post_id`, `meta_key`, `meta_value`) VALUES
(24, 6, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(25, 6, 'price', '"3200000"'),
(26, 6, 'price_translate', '"3900000"'),
(27, 6, 'start_date', '["0","4"]'),
(28, 6, 'total_days', '"3"'),
(29, 6, 'total_nights', '"1"'),
(30, 6, 'transport', '"\\u00d4 t\\u00f4"'),
(31, 6, 'more_info', '"<p>\\u0110&agrave; n\\u1eb5ng - Hu\\u1ebf - Phong nha - b&agrave; n&agrave;<\\/p>\\r\\n"'),
(32, 6, 'price_info', '"<p>\\u0110&agrave; n\\u1eb5ng - Hu\\u1ebf - Phong nha - b&agrave; n&agrave;<\\/p>\\r\\n"'),
(33, 6, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(34, 6, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(35, 10, 'modem', '""'),
(36, 10, 'thumbnail', '"\\/uploads\\/cars\\/FORD-TRANSIT.jpg"'),
(37, 10, 'images', '";\\/uploads\\/cars\\/FORD-TRANSIT.jpg"'),
(38, 12, 'modem', '"2012"'),
(39, 12, 'thumbnail', '"\\/uploads\\/cars\\/HUYNDAI-AERO-TOWN-2012.jpg"'),
(40, 12, 'images', '";\\/uploads\\/cars\\/HUYNDAI-AERO-TOWN-2012.jpg"'),
(41, 13, 'modem', '"2006"'),
(42, 13, 'thumbnail', '"\\/uploads\\/cars\\/AERO-EXPRESS-HI-CLASS-2006.jpg"'),
(43, 13, 'images', '";\\/uploads\\/cars\\/AERO-EXPRESS-HI-CLASS-2006.jpg;\\/uploads\\/cars\\/AERO-EXRESS-HI-CLASS-2006_2jpg.jpg"'),
(44, 14, 'modem', '"2002"'),
(45, 14, 'thumbnail', '"\\/uploads\\/cars\\/HUYNDAI-AERO-TOWN-2002.jpg"'),
(46, 14, 'images', '";\\/uploads\\/cars\\/HUYNDAI-AERO-TOWN-2002.jpg"'),
(47, 15, 'modem', '"2010"'),
(48, 15, 'thumbnail', '"\\/uploads\\/cars\\/KING-LONG-2010.jpg"'),
(49, 15, 'images', '";\\/uploads\\/cars\\/KING-LONG-2010.jpg"'),
(50, 16, 'modem', '"2006"'),
(51, 16, 'thumbnail', '"\\/uploads\\/cars\\/AERO-EXPRESS-HI-CLASS-2006.jpg"'),
(52, 16, 'images', '";\\/uploads\\/cars\\/AERO-EXPRESS-HI-CLASS-2006.jpg"'),
(53, 17, 'modem', '"2006"'),
(54, 17, 'thumbnail', '"\\/uploads\\/cars\\/AERO-QUEEN-HI-CLASS-2006.jpg"'),
(55, 17, 'images', '";\\/uploads\\/cars\\/AERO-QUEEN-HI-CLASS-2006.jpg"'),
(56, 18, 'modem', '"2006"'),
(57, 18, 'thumbnail', '"\\/uploads\\/cars\\/AERO-HI-SPACE-2006.jpg"'),
(58, 18, 'images', '";\\/uploads\\/cars\\/AERO-HI-SPACE-2006.jpg"'),
(59, 19, 'modem', '"2006"'),
(60, 19, 'thumbnail', '"\\/uploads\\/cars\\/AERO-SPACE-2006.jpg"'),
(61, 19, 'images', '";\\/uploads\\/cars\\/AERO-SPACE-2006.jpg"'),
(62, 20, 'modem', '"2008"'),
(63, 20, 'thumbnail', '"\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2008.jpg"'),
(64, 20, 'images', '";\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2008.jpg"'),
(65, 21, 'modem', '"2012"'),
(66, 21, 'thumbnail', '"\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2012.jpg"'),
(67, 21, 'images', '";\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2012.jpg"'),
(68, 22, 'modem', '"2009"'),
(69, 22, 'thumbnail', '"\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2009.png"'),
(70, 22, 'images', '";\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2009.png;\\/uploads\\/cars\\/UNIVERSE-SPACE-LUXURY-2009.jpg"'),
(71, 23, 'modem', '"2012"'),
(72, 23, 'thumbnail', '"\\/uploads\\/cars\\/UNIVERSE-NOBLE-2012.png"'),
(73, 23, 'images', '";\\/uploads\\/cars\\/UNIVERSE-NOBLE-2012.png"'),
(74, 24, 'modem', '"2013"'),
(75, 24, 'thumbnail', '"\\/uploads\\/cars\\/2013-Toyota-Vios-E-AT-005-1024x576.jpg"'),
(76, 24, 'images', '";\\/uploads\\/cars\\/2013-Toyota-Vios-E-AT-005-1024x576.jpg"'),
(77, 25, 'modem', '""'),
(78, 25, 'thumbnail', '"\\/uploads\\/cars\\/MERCEDES-SPRINTER-e1411721270852.jpg"'),
(79, 25, 'images', '";\\/uploads\\/cars\\/MERCEDES-SPRINTER-e1411721270852.jpg"'),
(80, 26, 'modem', '"2012 \\u2013 2013"'),
(81, 26, 'thumbnail', '"\\/uploads\\/cars\\/HUYNDAI-COUNTY-2012-2013.jpg"'),
(82, 26, 'images', '";\\/uploads\\/cars\\/HUYNDAI-COUNTY-2012-2013.jpg"'),
(83, 27, 'modem', '""'),
(84, 27, 'thumbnail', '"\\/uploads\\/cars\\/TOYOTA-ALTIS.jpg"'),
(85, 27, 'images', '";\\/uploads\\/cars\\/TOYOTA-ALTIS.jpg"'),
(86, 28, 'modem', '""'),
(87, 28, 'thumbnail', '"\\/uploads\\/cars\\/TOYOTA-HIACE.jpg"'),
(88, 28, 'images', '";\\/uploads\\/cars\\/TOYOTA-HIACE.jpg"'),
(89, 29, 'modem', '""'),
(90, 29, 'thumbnail', '"\\/uploads\\/cars\\/new-toyota-innova-2.jpg"'),
(91, 29, 'images', '";\\/uploads\\/cars\\/new-toyota-innova-2.jpg"'),
(92, 30, 'modem', '"2010"'),
(93, 30, 'thumbnail', '"\\/uploads\\/cars\\/FORD-TRANSIT-2010.jpg"'),
(94, 30, 'images', '";\\/uploads\\/cars\\/FORD-TRANSIT-2010.jpg"'),
(95, 31, 'modem', '"2013 - 2014"'),
(96, 31, 'thumbnail', '"\\/uploads\\/cars\\/FORD-TRANSIT-2013-2014.jpg"'),
(97, 31, 'images', '";\\/uploads\\/cars\\/FORD-TRANSIT-2013-2014.jpg"'),
(98, 2, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(99, 2, 'price', '"3950000"'),
(100, 2, 'price_translate', '"4950000"'),
(101, 2, 'start_date', '["2","5"]'),
(102, 2, 'total_days', '"5"'),
(103, 2, 'total_nights', '"3"'),
(104, 2, 'transport', '"\\u00d4 t\\u00f4"'),
(105, 2, 'more_info', '""'),
(106, 2, 'price_info', '""'),
(107, 2, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-son-tra-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(108, 2, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-son-tra-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(109, 32, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(110, 32, 'price', '"1945000"'),
(111, 32, 'price_translate', '"1945000"'),
(112, 32, 'start_date', '["7"]'),
(113, 32, 'total_days', '"2"'),
(114, 32, 'total_nights', '"0"'),
(115, 32, 'transport', '"\\u00d4 t\\u00f4"'),
(116, 32, 'more_info', '"<h1>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill<\\/h1>\\r\\n"'),
(117, 32, 'price_info', '"<h1>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill<\\/h1>\\r\\n"'),
(118, 32, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-cu-lao-cham-ba-na-hill.jpg"'),
(119, 32, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-cu-lao-cham-ba-na-hill.jpg"'),
(120, 33, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(121, 33, 'price', '"2995000"'),
(122, 33, 'price_translate', '"3750000"'),
(123, 33, 'start_date', '["7"]'),
(124, 33, 'total_days', '"3"'),
(125, 33, 'total_nights', '"1"'),
(126, 33, 'transport', '"\\u00d4 t\\u00f4"'),
(127, 33, 'more_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave;<\\/p>\\r\\n"'),
(128, 33, 'price_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave;<\\/p>\\r\\n"'),
(129, 33, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-ngu-hanh-son-hoi-an-cu-lao-cham-ba-na.jpg"'),
(130, 33, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-ngu-hanh-son-hoi-an-cu-lao-cham-ba-na.jpg"'),
(131, 34, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(132, 34, 'price', '"3350000"'),
(133, 34, 'price_translate', '"3950000"'),
(134, 34, 'start_date', '["3","5"]'),
(135, 34, 'total_days', '"4"'),
(136, 34, 'total_nights', '"2"'),
(137, 34, 'transport', '"\\u00d4 t\\u00f4"'),
(138, 34, 'more_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; S\\u01a1n Tr&agrave; &ndash; C&ugrave; Lao Ch&agrave;m &ndash; H\\u1ed9i An &ndash; B&agrave; N&agrave;<\\/p>\\r\\n"'),
(139, 34, 'price_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash; S\\u01a1n Tr&agrave; &ndash; C&ugrave; Lao Ch&agrave;m &ndash; H\\u1ed9i An &ndash; B&agrave; N&agrave;<\\/p>\\r\\n"'),
(140, 34, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-son-tra-cu-lao-cham-hoi-an-ba-na.jpg"'),
(141, 34, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-son-tra-cu-lao-cham-hoi-an-ba-na.jpg"'),
(142, 35, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(143, 35, 'price', '"3600000"'),
(144, 35, 'price_translate', '"4400000"'),
(145, 35, 'start_date', '["3","6"]'),
(146, 35, 'total_days', '"4"'),
(147, 35, 'total_nights', '"1"'),
(148, 35, 'transport', '"\\u00d4 t\\u00f4"'),
(149, 35, 'more_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash;Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; Hu\\u1ebf<\\/p>\\r\\n"'),
(150, 35, 'price_info', '"<p>Du l\\u1ecbch: \\u0110&agrave; N\\u1eb5ng &ndash;Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; Hu\\u1ebf<\\/p>\\r\\n"'),
(151, 35, 'thumbnail', '"\\/uploads\\/weekly_tour\\/du-lich-da-nang-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(152, 35, 'images', '";\\/uploads\\/weekly_tour\\/du-lich-da-nang-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue.jpg"'),
(153, 1, 'startlocate', '"Hu\\u1ebf"'),
(154, 1, 'price', '"1930000"'),
(155, 1, 'price_translate', '"1930000"'),
(156, 1, 'start_date', '["7"]'),
(157, 1, 'total_days', '"2"'),
(158, 1, 'total_nights', '"0"'),
(159, 1, 'transport', '"\\u00d4 t\\u00f4"'),
(160, 1, 'more_info', '"<p>Dailytour: Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf (2 ng&agrave;y 1 \\u0111&ecirc;m)<\\/p>\\r\\n"'),
(161, 1, 'price_info', '"<p>Dailytour: Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf (2 ng&agrave;y 1 \\u0111&ecirc;m)<\\/p>\\r\\n"'),
(162, 1, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-hue-dong-phong-nha-dong-thien-duong-hue-2-ngay-1-dem.jpg"'),
(163, 1, 'images', '";\\/uploads\\/daily_tour\\/dailytour-hue-dong-phong-nha-dong-thien-duong-hue-2-ngay-1-dem.jpg"'),
(164, 36, 'startlocate', '"Hu\\u1ebf"'),
(165, 36, 'price', '"220000"'),
(166, 36, 'price_translate', '"220000"'),
(167, 36, 'start_date', '["7"]'),
(168, 36, 'total_days', '"1"'),
(169, 36, 'total_nights', '""'),
(170, 36, 'transport', '"\\u00d4 t\\u00f4"'),
(171, 36, 'more_info', '"<p>Dailytour: Th&agrave;nh ph\\u1ed1 Hu\\u1ebf<\\/p>\\r\\n"'),
(172, 36, 'price_info', '"<p>Dailytour: Th&agrave;nh ph\\u1ed1 Hu\\u1ebf<\\/p>\\r\\n"'),
(173, 36, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-thanh-pho-hue.jpg"'),
(174, 36, 'images', '";\\/uploads\\/daily_tour\\/dailytour-thanh-pho-hue.jpg"'),
(175, 37, 'startlocate', '"Hu\\u1ebf"'),
(176, 37, 'price', '"650000"'),
(177, 37, 'price_translate', '"650000"'),
(178, 37, 'start_date', '["7"]'),
(179, 37, 'total_days', '"1"'),
(180, 37, 'total_nights', '""'),
(181, 37, 'transport', '"\\u00d4 t\\u00f4"'),
(182, 37, 'more_info', '"<p>Dailytour: Kh&aacute;m ph&aacute; B\\u1ea1ch M&atilde;<\\/p>\\r\\n"'),
(183, 37, 'price_info', '"<p>Dailytour: Kh&aacute;m ph&aacute; B\\u1ea1ch M&atilde;<\\/p>\\r\\n"'),
(184, 37, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-kham-pha-bach-ma.jpg"'),
(185, 37, 'images', '";\\/uploads\\/daily_tour\\/dailytour-kham-pha-bach-ma.jpg"'),
(186, 38, 'startlocate', '"Hu\\u1ebf"'),
(187, 38, 'price', '"400000"'),
(188, 38, 'price_translate', '"400000"'),
(189, 38, 'start_date', '["7"]'),
(190, 38, 'total_days', '"1"'),
(191, 38, 'total_nights', '""'),
(192, 38, 'transport', '"\\u00d4 t\\u00f4"'),
(193, 38, 'more_info', '"<h1>Dailytour: Kh&aacute;m ph&aacute; \\u1ea9m th\\u1ee9c x\\u1ee9 Hu\\u1ebf<\\/h1>\\r\\n"'),
(194, 38, 'price_info', '"<h1>Dailytour: Kh&aacute;m ph&aacute; \\u1ea9m th\\u1ee9c x\\u1ee9 Hu\\u1ebf<\\/h1>\\r\\n"'),
(195, 38, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-kham-pha-am-thuc-xu-hue.jpg"'),
(196, 38, 'images', '";\\/uploads\\/daily_tour\\/dailytour-kham-pha-am-thuc-xu-hue.jpg"'),
(197, 39, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(198, 39, 'price', '"650000"'),
(199, 39, 'price_translate', '"650000"'),
(200, 39, 'start_date', '["7"]'),
(201, 39, 'total_days', '"1"'),
(202, 39, 'total_nights', '""'),
(203, 39, 'transport', '"\\u00d4 t\\u00f4"'),
(204, 39, 'more_info', '"<h1>Dailytour: Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An<\\/h1>\\r\\n"'),
(205, 39, 'price_info', '"<h1>Dailytour: Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An<\\/h1>\\r\\n"'),
(206, 39, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-ngu-hanh-son-hoi-an.jpg"'),
(207, 39, 'images', '";\\/uploads\\/daily_tour\\/dailytour-ngu-hanh-son-hoi-an.jpg"'),
(208, 40, 'startlocate', '"Hu\\u1ebf"'),
(209, 40, 'price', '"730000"'),
(210, 40, 'price_translate', '"730000"'),
(211, 40, 'start_date', '["7"]'),
(212, 40, 'total_days', '"1"'),
(213, 40, 'total_nights', '""'),
(214, 40, 'transport', '"\\u00d4 t\\u00f4"'),
(215, 40, 'more_info', '"<p>Dailytour: Tham quan \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng<\\/p>\\r\\n"'),
(216, 40, 'price_info', '"<p>Dailytour: Tham quan \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng<\\/p>\\r\\n"'),
(217, 40, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-tham-quan-dong-thien-duong.jpg"'),
(218, 40, 'images', '";\\/uploads\\/daily_tour\\/dailytour-tham-quan-dong-thien-duong.jpg"'),
(219, 41, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(220, 41, 'price', '"850000"'),
(221, 41, 'price_translate', '"850000"'),
(222, 41, 'start_date', '["7"]'),
(223, 41, 'total_days', '"1"'),
(224, 41, 'total_nights', '""'),
(225, 41, 'transport', '"\\u00d4 t\\u00f4"'),
(226, 41, 'more_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; M\\u1ef9 S\\u01a1n &ndash; H\\u1ed9i An<\\/p>\\r\\n"'),
(227, 41, 'price_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; M\\u1ef9 S\\u01a1n &ndash; H\\u1ed9i An<\\/p>\\r\\n"'),
(228, 41, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-da-nang-my-son-hoi-an.jpg"'),
(229, 41, 'images', '";\\/uploads\\/daily_tour\\/dailytour-da-nang-my-son-hoi-an.jpg"'),
(230, 42, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(231, 42, 'price', '"1945000"'),
(232, 42, 'price_translate', '"1945000"'),
(233, 42, 'start_date', '["7"]'),
(234, 42, 'total_days', '"2"'),
(235, 42, 'total_nights', '"0"'),
(236, 42, 'transport', '"\\u00d4 t\\u00f4"'),
(237, 42, 'more_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill&nbsp;<\\/p>\\r\\n"'),
(238, 42, 'price_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill&nbsp;<\\/p>\\r\\n"'),
(239, 42, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-da-nang-cu-lao-cham-ba-na-hill.jpg"'),
(240, 42, 'images', '";\\/uploads\\/daily_tour\\/dailytour-da-nang-cu-lao-cham-ba-na-hill.jpg"'),
(241, 43, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(242, 43, 'price', '"6250000"'),
(243, 43, 'price_translate', '"6250000"'),
(244, 43, 'start_date', '["7"]'),
(245, 43, 'total_days', '"6"'),
(246, 43, 'total_nights', '"4"'),
(247, 43, 'transport', '"\\u00d4 t\\u00f4"'),
(248, 43, 'more_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf<\\/p>\\r\\n"'),
(249, 43, 'price_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; Ng\\u0169 H&agrave;nh S\\u01a1n &ndash; H\\u1ed9i An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf<\\/p>\\r\\n"'),
(250, 43, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-da-nang-ngu-hanh-son-hoi-an-cu-lao-cham-ba-na-hill-hue-dong-thien-duong-hue.jpg"'),
(251, 43, 'images', '";\\/uploads\\/daily_tour\\/dailytour-da-nang-cu-lao-cham-ba-na-hill.jpg"'),
(252, 44, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(253, 44, 'price', '"850000"'),
(254, 44, 'price_translate', '"850000"'),
(255, 44, 'start_date', '["7"]'),
(256, 44, 'total_days', '"1"'),
(257, 44, 'total_nights', '""'),
(258, 44, 'transport', '"\\u00d4 t\\u00f4"'),
(259, 44, 'more_info', '"<p>Dailytour: B&agrave; N&agrave; &ndash; \\u0110\\u01b0\\u1eddng L&ecirc;n Ti&ecirc;n C\\u1ea3nh<\\/p>\\r\\n"'),
(260, 44, 'price_info', '"<p>Dailytour: B&agrave; N&agrave; &ndash; \\u0110\\u01b0\\u1eddng L&ecirc;n Ti&ecirc;n C\\u1ea3nh<\\/p>\\r\\n"'),
(261, 44, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-ba-na-duong-len-tien-canh.jpg"'),
(262, 44, 'images', '";\\/uploads\\/daily_tour\\/dailytour-ba-na-duong-len-tien-canh.jpg"'),
(263, 45, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(264, 45, 'price', '"230000"'),
(265, 45, 'price_translate', '"230000"'),
(266, 45, 'start_date', '["7"]'),
(267, 45, 'total_days', '"0"'),
(268, 45, 'total_nights', '""'),
(269, 45, 'transport', '"\\u00d4 t\\u00f4"'),
(270, 45, 'more_info', '"<p>Dailytour: B&igrave;nh minh M\\u1ef9 S\\u01a1n<\\/p>\\r\\n"'),
(271, 45, 'price_info', '"<p>Dailytour: B&igrave;nh minh M\\u1ef9 S\\u01a1n<\\/p>\\r\\n"'),
(272, 45, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-binh-minh-my-son.jpg"'),
(273, 45, 'images', '";\\/uploads\\/daily_tour\\/dailytour-binh-minh-my-son.jpg"'),
(274, 46, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(275, 46, 'price', '"650000"'),
(276, 46, 'price_translate', '"650000"'),
(277, 46, 'start_date', '["7"]'),
(278, 46, 'total_days', '"1"'),
(279, 46, 'total_nights', '""'),
(280, 46, 'transport', '"\\u00d4 t\\u00f4"'),
(281, 46, 'more_info', '"<p>Dailytour: C&ugrave; Lao Ch&agrave;m &ndash; Thi&ecirc;n \\u0110\\u01b0\\u1eddng Bi\\u1ec3n \\u0110\\u1ea3o<\\/p>\\r\\n"'),
(282, 46, 'price_info', '"<p>Dailytour: C&ugrave; Lao Ch&agrave;m &ndash; Thi&ecirc;n \\u0110\\u01b0\\u1eddng Bi\\u1ec3n \\u0110\\u1ea3o<\\/p>\\r\\n"'),
(283, 46, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-cu-lao-cham-thien-duong-bien-dao.jpg"'),
(284, 46, 'images', '";\\/uploads\\/daily_tour\\/dailytour-cu-lao-cham-thien-duong-bien-dao.jpg"'),
(285, 47, 'startlocate', '"Hu\\u1ebf"'),
(286, 47, 'price', '"480000"'),
(287, 47, 'price_translate', '"480000"'),
(288, 47, 'start_date', '["7"]'),
(289, 47, 'total_days', '"1"'),
(290, 47, 'total_nights', '""'),
(291, 47, 'transport', '"\\u00d4 t\\u00f4"'),
(292, 47, 'more_info', '"<p>Dailytour: Dmz tour<\\/p>\\r\\n"'),
(293, 47, 'price_info', '"<p>Dailytour: Dmz tour<\\/p>\\r\\n"'),
(294, 47, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-dmz-tour.jpg"'),
(295, 47, 'images', '";\\/uploads\\/daily_tour\\/dailytour-dmz-tour.jpg"'),
(296, 48, 'startlocate', '"Hu\\u1ebf"'),
(297, 48, 'price', '"350000"'),
(298, 48, 'price_translate', '"350000"'),
(299, 48, 'start_date', '["7"]'),
(300, 48, 'total_days', '"0"'),
(301, 48, 'total_nights', '""'),
(302, 48, 'transport', '"\\u00d4 t\\u00f4"'),
(303, 48, 'more_info', '"<p>Dailytour: H\\u1ecdc n\\u1ea5u m&oacute;n Hu\\u1ebf<\\/p>\\r\\n"'),
(304, 48, 'price_info', '"<p>Dailytour: H\\u1ecdc n\\u1ea5u m&oacute;n Hu\\u1ebf<\\/p>\\r\\n"'),
(305, 48, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-hoc-nau-mon-hue.jpg"'),
(306, 48, 'images', '";\\/uploads\\/daily_tour\\/dailytour-hoc-nau-mon-hue.jpg"'),
(307, 49, 'startlocate', '"Hu\\u1ebf"'),
(308, 49, 'price', '"2750000"'),
(309, 49, 'price_translate', '"2750000"'),
(310, 49, 'start_date', '["7"]'),
(311, 49, 'total_days', '"3"'),
(312, 49, 'total_nights', '"1"'),
(313, 49, 'transport', '"\\u00d4 t\\u00f4"'),
(314, 49, 'more_info', '"<p>Dailytour: Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf (3 ng&agrave;y 2 \\u0111&ecirc;m)<\\/p>\\r\\n"'),
(315, 49, 'price_info', '"<p>Dailytour: Hu\\u1ebf &ndash; \\u0110\\u1ed9ng Phong Nha &ndash; \\u0110\\u1ed9ng Thi&ecirc;n \\u0110\\u01b0\\u1eddng &ndash; Hu\\u1ebf (3 ng&agrave;y 2 \\u0111&ecirc;m)<\\/p>\\r\\n"'),
(316, 49, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-hue-dong-phong-nha-dong-thien-duong-hue-3-ngay-2-dem.jpg"'),
(317, 49, 'images', '";\\/uploads\\/daily_tour\\/dailytour-hue-dong-phong-nha-dong-thien-duong-hue-3-ngay-2-dem.jpg"'),
(318, 50, 'startlocate', '"Hu\\u1ebf"'),
(319, 50, 'price', '"600000"'),
(320, 50, 'price_translate', '"600000"'),
(321, 50, 'start_date', '["7"]'),
(322, 50, 'total_days', '"1"'),
(323, 50, 'total_nights', '""'),
(324, 50, 'transport', '"\\u00d4 t\\u00f4"'),
(325, 50, 'more_info', '"<p>Dailytour: Tham quan \\u0110\\u1ed9ng Phong Nha<\\/p>\\r\\n"'),
(326, 50, 'price_info', '"<p>Dailytour: Tham quan \\u0110\\u1ed9ng Phong Nha<\\/p>\\r\\n"'),
(327, 50, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-tham-quan-dong-phong-nha.jpg"'),
(328, 50, 'images', '";\\/uploads\\/daily_tour\\/dailytour-tham-quan-dong-phong-nha.jpg"'),
(329, 51, 'startlocate', '"\\u0110\\u00e0 N\\u1eb5ng"'),
(330, 51, 'price', '"1800000"'),
(331, 51, 'price_translate', '"1800000"'),
(332, 51, 'start_date', '["7"]'),
(333, 51, 'total_days', '"2"'),
(334, 51, 'total_nights', '"0"'),
(335, 51, 'transport', '"\\u00d4 t\\u00f4"'),
(336, 51, 'more_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; B&agrave; N&agrave; Hill<\\/p>\\r\\n"'),
(337, 51, 'price_info', '"<p>Dailytour: \\u0110&agrave; N\\u1eb5ng &ndash; B&agrave; N&agrave; Hill<\\/p>\\r\\n"'),
(338, 51, 'thumbnail', '"\\/uploads\\/daily_tour\\/dailytour-da-nang-ba-na-hill.jpg"'),
(339, 51, 'images', '";\\/uploads\\/daily_tour\\/dailytour-da-nang-ba-na-hill.jpg"');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_by`, `created`, `body`, `title`, `excerpt`, `status`, `updated`, `parent_id`, `url`, `type`) VALUES
(1, 1, '2014-10-07 08:04:08', '<p>Dailytour: Huế &ndash; Động Phong Nha &ndash; Động Thi&ecirc;n Đường &ndash; Huế (2 ng&agrave;y 1 đ&ecirc;m)</p>\r\n', 'Dailytour: Huế – Động Phong Nha – Động Thiên Đường – Huế (2 ngày 1 đêm)', 'Dailytour: Huế – Động Phong Nha – Động Thiên Đường – Huế (2 ngày 1 đêm)', '1', '2014-10-12 14:49:35', 0, 'dailytour-hue-dong-phong-nha-dong-thien-duong-hue-2-ngay-1-dem', 'daily_tour'),
(2, 0, '0000-00-00 00:00:00', '<p>Đ&agrave; nẵng - Huế - Phong nha</p>\r\n', 'Du lịch: Đà Nẵng – Sơn Trà – Ngũ Hành Sơn – Hội An – Động Thiên Đường – Động Phong Nha – Huế', 'Du lịch: Đà Nẵng – Sơn Trà – Ngũ Hành Sơn – Hội An – Động Thiên Đường – Động Phong Nha – Huế', '1', '2014-10-12 13:05:49', 0, 'du-lich-da-nang-son-tra-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue', 'weekly_tour'),
(6, 1, '2014-10-09 18:41:55', '<p><a href="http://localhost/thuexedn/admin/posts/edit/5/weekly_tour" style="margin: 0px; padding: 0px; box-sizing: border-box; color: rgb(66, 139, 202); text-decoration: none; font-weight: bold; font-family: ''Open Sans''; line-height: 18.5714302062988px; background-color: rgb(249, 249, 249);">Đ&agrave; nẵng - Huế - Phong nha - b&agrave; n&agrave;</a></p>\r\n', 'Du lịch: Đà Nẵng – Động Thiên Đường – Động Phong Nha – Huế', 'Du lịch: Đà Nẵng – Động Thiên Đường – Động Phong Nha – Huế', '1', '2014-10-12 13:22:15', 0, 'du-lich-da-nang-dong-thien-duong-dong-phong-nha-hue', 'weekly_tour'),
(10, 1, '2014-10-12 05:28:50', '<p>Ford Transit</p>\r\n', 'Ford Transit', 'Ford Transit', '1', '2014-10-12 12:08:49', 0, 'ford-transit', 'car_rental'),
(12, 1, '2014-10-12 12:05:04', '<p>Huyndai Aero Town 2012</p>\r\n', 'Huyndai Aero Town 2012', 'Huyndai Aero Town 2012', '1', '2014-10-12 12:09:13', 0, 'huyndai-aero-town-2012', 'car_rental'),
(13, 1, '2014-10-12 12:06:29', '<p>Aero Express Hi Class 2006</p>\r\n', 'Aero Express Hi Class 2006', 'Aero Express Hi Class 2006', '1', '2014-10-12 12:35:16', 0, 'aero-express-hi-class-2006', 'car_rental'),
(14, 1, '2014-10-12 12:09:24', '<p>Huyndai Aero Town 2002</p>\r\n', 'Huyndai Aero Town 2002', 'Huyndai Aero Town 2002', '1', '2014-10-12 12:10:34', 0, 'huyndai-aero-town-2002', 'car_rental'),
(15, 1, '2014-10-12 12:10:47', '<p>King Long 2010</p>\r\n', 'King Long 2010', 'King Long 2010', '1', '2014-10-12 12:11:40', 0, 'king-long-2010', 'car_rental'),
(17, 1, '2014-10-12 12:13:07', '<p>Aero Queen Hi &ndash; Class 2006</p>\r\n', 'Aero Queen Hi – Class 2006', 'Aero Queen Hi – Class 2006', '1', '2014-10-12 12:13:56', 0, 'aero-queen-hi-class-2006', 'car_rental'),
(18, 1, '2014-10-12 12:14:01', '<p>Aero Hi &ndash; Space 2006</p>\r\n', 'Aero Hi – Space 2006', 'Aero Hi – Space 2006', '1', '2014-10-12 12:14:40', 0, 'aero-hi-space-2006', 'car_rental'),
(19, 1, '2014-10-12 12:14:45', '<p>Aero Space 2006</p>\r\n', 'Aero Space 2006', 'Aero Space 2006', '1', '2014-10-12 12:15:29', 0, 'aero-space-2006', 'car_rental'),
(20, 1, '2014-10-12 12:15:43', '<p>Universe Space Luxury 2008</p>\r\n', 'Universe Space Luxury 2008', 'Universe Space Luxury 2008', '1', '2014-10-12 12:17:55', 0, 'universe-space-luxury-2008', 'car_rental'),
(21, 1, '2014-10-12 12:18:17', '<p>Universe Space Luxury 2012</p>\r\n', 'Universe Space Luxury 2012', 'Universe Space Luxury 2012', '1', '2014-10-12 12:19:21', 0, 'universe-space-luxury-2012', 'car_rental'),
(22, 1, '2014-10-12 12:19:26', '<p>Universe Space Luxury 2009</p>\r\n', 'Universe Space Luxury 2009', 'Universe Space Luxury 2009', '1', '2014-10-12 12:23:31', 0, 'universe-space-luxury-2009', 'car_rental'),
(23, 1, '2014-10-12 12:20:21', '<p>Universe Noble 2012</p>\r\n', 'Universe Noble 2012', 'Universe Noble 2012', '1', '2014-10-12 12:21:18', 0, 'universe-noble-2012', 'car_rental'),
(24, 1, '2014-10-12 12:24:13', '<p>Toyota Vios</p>\r\n', 'Toyota Vios', 'Toyota Vios', '1', '2014-10-12 12:24:58', 0, 'toyota-vios', 'car_rental'),
(25, 1, '2014-10-12 12:25:02', '<p>Mercedes Sprinter</p>\r\n', 'Mercedes Sprinter', 'Mercedes Sprinter', '1', '2014-10-12 12:26:24', 0, 'mercedes-sprinter', 'car_rental'),
(26, 1, '2014-10-12 12:26:45', '<p>Huyndai County 2012 &ndash; 2013</p>\r\n', 'Huyndai County 2012 – 2013', 'Huyndai County 2012 – 2013', '1', '2014-10-12 12:27:36', 0, 'huyndai-county-2012-2013', 'car_rental'),
(27, 1, '2014-10-12 12:27:41', '<p>Toyot Altis</p>\r\n', 'Toyot Altis', 'Toyot Altis', '1', '2014-10-12 12:29:00', 0, 'toyot-altis', 'car_rental'),
(28, 1, '2014-10-12 12:29:04', '<p>Toyota Hiace</p>\r\n', 'Toyota Hiace', 'Toyota Hiace', '1', '2014-10-12 12:29:50', 0, 'toyota-hiace', 'car_rental'),
(29, 1, '2014-10-12 12:29:55', '<p>Toyota Innova</p>\r\n', 'Toyota Innova', 'Toyota Innova', '1', '2014-10-12 12:30:37', 0, 'toyota-innova', 'car_rental'),
(30, 1, '2014-10-12 12:30:58', '<p>Ford Transit 2010</p>\r\n', 'Ford Transit 2010', 'Ford Transit 2010', '1', '2014-10-12 12:37:09', 0, 'ford-transit-2010', 'car_rental'),
(31, 1, '2014-10-12 12:37:21', '<p>Ford Transit 2013 - 2014</p>\r\n', 'Ford Transit 2013 - 2014', 'Ford Transit 2013 - 2014', '1', '2014-10-12 12:38:21', 0, 'ford-transit-2013-2014', 'car_rental'),
(32, 1, '2014-10-12 13:22:19', '<h1>Du lịch: Đ&agrave; Nẵng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill</h1>\r\n', 'Du lịch: Đà Nẵng – Cù Lao Chàm – Bà Nà Hill', 'Du lịch: Đà Nẵng – Cù Lao Chàm – Bà Nà Hill', '1', '2014-10-12 13:26:25', 0, 'du-lich-da-nang-cu-lao-cham-ba-na-hill', 'weekly_tour'),
(33, 1, '2014-10-12 13:26:31', '<p>Du lịch: Đ&agrave; Nẵng &ndash; Ngũ H&agrave;nh Sơn &ndash; Hội An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave;</p>\r\n', 'Du lịch: Đà Nẵng – Ngũ Hành Sơn – Hội An – Cù Lao Chàm – Bà Nà', 'Du lịch: Đà Nẵng – Ngũ Hành Sơn – Hội An – Cù Lao Chàm – Bà Nà', '1', '2014-10-12 13:28:20', 0, 'du-lich-da-nang-ngu-hanh-son-hoi-an-cu-lao-cham-ba-na', 'weekly_tour'),
(34, 1, '2014-10-12 13:28:27', '<p>Du lịch: Đ&agrave; Nẵng &ndash; Sơn Tr&agrave; &ndash; C&ugrave; Lao Ch&agrave;m &ndash; Hội An &ndash; B&agrave; N&agrave;</p>\r\n', 'Du lịch: Đà Nẵng – Sơn Trà – Cù Lao Chàm – Hội An – Bà Nà', 'Du lịch: Đà Nẵng – Sơn Trà – Cù Lao Chàm – Hội An – Bà Nà', '1', '2014-10-12 13:32:19', 0, 'du-lich-da-nang-son-tra-cu-lao-cham-hoi-an-ba-na', 'weekly_tour'),
(35, 1, '2014-10-12 13:32:33', '<p>Du lịch: Đ&agrave; Nẵng &ndash;Ngũ H&agrave;nh Sơn &ndash; Hội An &ndash; Động Thi&ecirc;n Đường &ndash; Động Phong Nha &ndash; Huế</p>\r\n', 'Du lịch: Đà Nẵng –Ngũ Hành Sơn – Hội An – Động Thiên Đường – Động Phong Nha – Huế', 'Du lịch: Đà Nẵng –Ngũ Hành Sơn – Hội An – Động Thiên Đường – Động Phong Nha – Huế', '1', '2014-10-12 13:33:49', 0, 'du-lich-da-nang-ngu-hanh-son-hoi-an-dong-thien-duong-dong-phong-nha-hue', 'weekly_tour'),
(36, 1, '2014-10-12 14:49:39', '<p>Dailytour: Th&agrave;nh phố Huế</p>\r\n', 'Dailytour: Thành phố Huế', 'Dailytour: Thành phố Huế', '1', '2014-10-12 14:51:10', 0, 'dailytour-thanh-pho-hue', 'daily_tour'),
(37, 1, '2014-10-12 14:51:18', '<p>Dailytour: Kh&aacute;m ph&aacute; Bạch M&atilde;</p>\r\n', 'Dailytour: Khám phá Bạch Mã', 'Dailytour: Khám phá Bạch Mã', '1', '2014-10-12 14:52:39', 0, 'dailytour-kham-pha-bach-ma', 'daily_tour'),
(38, 1, '2014-10-12 14:52:46', '<h1>Dailytour: Kh&aacute;m ph&aacute; ẩm thức xứ Huế</h1>\r\n', 'Dailytour: Khám phá ẩm thức xứ Huế', 'Dailytour: Khám phá ẩm thức xứ Huế', '1', '2014-10-12 14:53:59', 0, 'dailytour-kham-pha-am-thuc-xu-hue', 'daily_tour'),
(39, 1, '2014-10-12 14:54:03', '<h1>Dailytour: Ngũ H&agrave;nh Sơn &ndash; Hội An</h1>\r\n', 'Dailytour: Ngũ Hành Sơn – Hội An', 'Dailytour: Ngũ Hành Sơn – Hội An', '1', '2014-10-12 14:56:15', 0, 'dailytour-ngu-hanh-son-hoi-an', 'daily_tour'),
(40, 1, '2014-10-12 14:56:21', '<p>Dailytour: Tham quan Động Thi&ecirc;n Đường</p>\r\n', 'Dailytour: Tham quan Động Thiên Đường', 'Dailytour: Tham quan Động Thiên Đường', '1', '2014-10-12 14:57:46', 0, 'dailytour-tham-quan-dong-thien-duong', 'daily_tour'),
(41, 1, '2014-10-12 14:57:51', '<p>Dailytour: Đ&agrave; Nẵng &ndash; Mỹ Sơn &ndash; Hội An</p>\r\n', 'Dailytour: Đà Nẵng – Mỹ Sơn – Hội An', 'Dailytour: Đà Nẵng – Mỹ Sơn – Hội An', '1', '2014-10-12 14:58:57', 0, 'dailytour-da-nang-my-son-hoi-an', 'daily_tour'),
(42, 1, '2014-10-12 14:59:15', '<p>Dailytour: Đ&agrave; Nẵng &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill&nbsp;</p>\r\n', 'Dailytour: Đà Nẵng – Cù Lao Chàm – Bà Nà Hill ', 'Dailytour: Đà Nẵng – Cù Lao Chàm – Bà Nà Hill ', '1', '2014-10-12 15:00:36', 0, 'dailytour-da-nang-cu-lao-cham-ba-na-hill', 'daily_tour'),
(43, 1, '2014-10-12 15:01:00', '<p>Dailytour: Đ&agrave; Nẵng &ndash; Ngũ H&agrave;nh Sơn &ndash; Hội An &ndash; C&ugrave; Lao Ch&agrave;m &ndash; B&agrave; N&agrave; Hill Huế &ndash; Động Thi&ecirc;n Đường &ndash; Huế</p>\r\n', 'Dailytour: Đà Nẵng – Ngũ Hành Sơn – Hội An – Cù Lao Chàm – Bà Nà Hill Huế – Động Thiên Đường – Huế', 'Dailytour: Đà Nẵng – Ngũ Hành Sơn – Hội An – Cù Lao Chàm – Bà Nà Hill Huế – Động Thiên Đường – Huế', '1', '2014-10-12 15:02:28', 0, 'dailytour-da-nang-ngu-hanh-son-hoi-an-cu-lao-cham-ba-na-hill-hue-dong-thien-duong-hue', 'daily_tour'),
(44, 1, '2014-10-12 15:02:38', '<p>Dailytour: B&agrave; N&agrave; &ndash; Đường L&ecirc;n Ti&ecirc;n Cảnh</p>\r\n', 'Dailytour: Bà Nà – Đường Lên Tiên Cảnh', 'Dailytour: Bà Nà – Đường Lên Tiên Cảnh', '1', '2014-10-12 15:03:39', 0, 'dailytour-ba-na-duong-len-tien-canh', 'daily_tour'),
(45, 1, '2014-10-12 15:03:49', '<p>Dailytour: B&igrave;nh minh Mỹ Sơn</p>\r\n', 'Dailytour: Bình minh Mỹ Sơn', 'Dailytour: Bình minh Mỹ Sơn', '1', '2014-10-12 15:06:33', 0, 'dailytour-binh-minh-my-son', 'daily_tour'),
(46, 1, '2014-10-12 15:05:02', '<p>Dailytour: C&ugrave; Lao Ch&agrave;m &ndash; Thi&ecirc;n Đường Biển Đảo</p>\r\n', 'Dailytour: Cù Lao Chàm – Thiên Đường Biển Đảo', 'Dailytour: Cù Lao Chàm – Thiên Đường Biển Đảo', '1', '2014-10-12 15:06:13', 0, 'dailytour-cu-lao-cham-thien-duong-bien-dao', 'daily_tour'),
(47, 1, '2014-10-12 15:09:50', '<p>Dailytour: Dmz tour</p>\r\n', 'Dailytour: Dmz tour', 'Dailytour: Dmz tour', '1', '2014-10-12 15:11:01', 0, 'dailytour-dmz-tour', 'daily_tour'),
(48, 1, '2014-10-12 15:11:07', '<p>Dailytour: Học nấu m&oacute;n Huế</p>\r\n', 'Dailytour: Học nấu món Huế', 'Dailytour: Học nấu món Huế', '1', '2014-10-12 15:12:15', 0, 'dailytour-hoc-nau-mon-hue', 'daily_tour'),
(49, 1, '2014-10-12 15:12:21', '<p>Dailytour: Huế &ndash; Động Phong Nha &ndash; Động Thi&ecirc;n Đường &ndash; Huế (3 ng&agrave;y 2 đ&ecirc;m)</p>\r\n', 'Dailytour: Huế – Động Phong Nha – Động Thiên Đường – Huế (3 ngày 2 đêm)', 'Dailytour: Huế – Động Phong Nha – Động Thiên Đường – Huế (3 ngày 2 đêm)', '1', '2014-10-12 15:14:50', 0, 'dailytour-hue-dong-phong-nha-dong-thien-duong-hue-3-ngay-2-dem', 'daily_tour'),
(50, 1, '2014-10-12 15:15:00', '<p>Dailytour: Tham quan Động Phong Nha</p>\r\n', 'Dailytour: Tham quan Động Phong Nha', 'Dailytour: Tham quan Động Phong Nha', '1', '2014-10-12 15:16:25', 0, 'dailytour-tham-quan-dong-phong-nha', 'daily_tour'),
(51, 1, '2014-10-12 15:16:32', '<p>Dailytour: Đ&agrave; Nẵng &ndash; B&agrave; N&agrave; Hill</p>\r\n', 'Dailytour: Đà Nẵng – Bà Nà Hill', 'Dailytour: Đà Nẵng – Bà Nà Hill', '1', '2014-10-12 15:17:46', 0, 'dailytour-da-nang-ba-na-hill', 'daily_tour');

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
