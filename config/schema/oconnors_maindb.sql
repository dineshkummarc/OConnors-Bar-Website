-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2011 at 09:56 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oconnors_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(45) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `order` int(11) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `slug`, `image`, `thumbnail`, `order`, `created`, `modified`) VALUES
(4, 'Thursday Night Session @ O''Connor''s Bar', 'thursday-night-session-o-connor-s-bar', '/img/uploads/gallery/DSC_0909.jpg', '/img/uploads/gallery/DSC_0909_1.jpg', 1, '2010-11-28 20:42:44', '2010-11-28 20:42:44'),
(3, 'O''Connor''s Bar Ballycastle', 'o-connor-s-bar-ballycastle', '/img/uploads/gallery/DSC_0630.jpg', '/img/uploads/gallery/DSC_0630_1.jpg', 2, '2010-11-28 20:35:51', '2010-11-28 20:35:51'),
(5, 'Halloween 2010 @ O''Connor''s Bar', 'halloween-2010-o-connor-s-bar', '/img/uploads/gallery/halloween_2010_0011.jpg', '/img/uploads/gallery/halloween_2010_0011_1.jpg', 0, '2010-11-28 21:06:13', '2010-11-28 21:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime default NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start_date`, `end_date`, `created`, `modified`) VALUES
(1, 'Live Football in HD', 'Tottenham Hotspur Vs. Manchester United @ 16:10pm live and in', '2011-01-16 15:00:00', '2011-01-16 17:00:00', '2010-11-20 17:54:34', '2011-01-15 09:38:32'),
(4, 'Traditional Irish Music Session', 'Traditional Irish Music Session from 22:00 until late', '2011-01-20 22:00:00', '0000-00-00 00:00:00', '2010-11-28 21:38:18', '2011-01-15 09:49:12'),
(5, 'Traditional Irish Music Session', 'Traditional Irish Music Session from 22:00 until late', '2010-12-09 22:00:00', '0000-00-00 00:00:00', '2010-11-28 21:39:17', '2010-11-28 21:39:17'),
(6, 'Traditional Irish Music Session', 'Traditional Irish Music Session from 22:00 until late', '2010-12-16 22:00:00', '0000-00-00 00:00:00', '2010-11-28 21:39:40', '2010-11-28 21:39:40'),
(7, 'Traditional Irish Music Session', 'Traditional Irish Music Session', '2010-12-23 22:00:00', '0000-00-00 00:00:00', '2010-12-07 20:59:36', '2010-12-07 20:59:36'),
(8, 'Traditional Irish Music Session', 'Traditional Irish Music Session', '2010-12-30 22:00:00', '0000-00-00 00:00:00', '2010-12-07 20:59:54', '2010-12-07 20:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `order` int(11) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `title`, `image`, `thumbnail`, `order`, `created`, `modified`) VALUES
(1, 1, 'This is a sample image caption', '/img/uploads/gallery/1318892415.jpg', '/img/uploads/gallery/1318892415_1.jpg', 68, '2010-11-27 16:12:30', '2010-11-27 17:03:29'),
(2, 1, 'This is another sample image caption', '/img/uploads/gallery/blue.jpg', '/img/uploads/gallery/blue_1.jpg', 69, '2010-11-27 16:15:44', '2010-11-27 16:49:26'),
(3, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0425.jpg', '/img/uploads/gallery/DSC_0425_1.jpg', 67, '2010-11-28 20:36:19', '2010-11-28 20:36:19'),
(4, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0441.jpg', '/img/uploads/gallery/DSC_0441_1.jpg', 66, '2010-11-28 20:36:39', '2010-11-28 20:36:39'),
(5, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0446.jpg', '/img/uploads/gallery/DSC_0446_1.jpg', 65, '2010-11-28 20:37:06', '2010-11-28 20:37:06'),
(6, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0449.jpg', '/img/uploads/gallery/DSC_0449_1.jpg', 64, '2010-11-28 20:37:25', '2010-11-28 20:37:25'),
(8, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0455.jpg', '/img/uploads/gallery/DSC_0455_1.jpg', 63, '2010-11-28 20:38:17', '2010-11-28 20:38:17'),
(9, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0462.jpg', '/img/uploads/gallery/DSC_0462_1.jpg', 62, '2010-11-28 20:38:36', '2010-11-28 20:38:36'),
(10, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0472.jpg', '/img/uploads/gallery/DSC_0472_1.jpg', 61, '2010-11-28 20:38:55', '2010-11-28 20:38:55'),
(11, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0480.jpg', '/img/uploads/gallery/DSC_0480_1.jpg', 60, '2010-11-28 20:39:15', '2010-11-28 20:39:15'),
(12, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0483.jpg', '/img/uploads/gallery/DSC_0483_1.jpg', 59, '2010-11-28 20:39:29', '2010-11-28 20:39:29'),
(13, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0487.jpg', '/img/uploads/gallery/DSC_0487_1.jpg', 58, '2010-11-28 20:39:43', '2010-11-28 20:39:43'),
(14, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0489.jpg', '/img/uploads/gallery/DSC_0489_1.jpg', 57, '2010-11-28 20:39:59', '2010-11-28 20:39:59'),
(15, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0500.jpg', '/img/uploads/gallery/DSC_0500_1.jpg', 56, '2010-11-28 20:40:15', '2010-11-28 20:40:15'),
(16, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0541.jpg', '/img/uploads/gallery/DSC_0541_1.jpg', 55, '2010-11-28 20:40:31', '2010-11-28 20:40:31'),
(17, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0549.jpg', '/img/uploads/gallery/DSC_0549_1.jpg', 54, '2010-11-28 20:40:48', '2010-11-28 20:40:48'),
(18, 3, 'O''Connor''s Bar Ballycastle', '/img/uploads/gallery/DSC_0583.jpg', '/img/uploads/gallery/DSC_0583_1.jpg', 53, '2010-11-28 20:41:07', '2010-11-28 20:41:07'),
(19, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0878.jpg', '/img/uploads/gallery/DSC_0878_1.jpg', 51, '2010-11-28 20:43:09', '2010-11-28 20:43:09'),
(20, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0888.jpg', '/img/uploads/gallery/DSC_0888_1.jpg', 50, '2010-11-28 20:43:24', '2010-11-28 20:43:24'),
(21, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0889.jpg', '/img/uploads/gallery/DSC_0889_1.jpg', 49, '2010-11-28 20:43:40', '2010-11-28 20:43:40'),
(22, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0890.jpg', '/img/uploads/gallery/DSC_0890_1.jpg', 48, '2010-11-28 20:43:55', '2010-11-28 20:43:55'),
(23, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0893.jpg', '/img/uploads/gallery/DSC_0893_1.jpg', 47, '2010-11-28 20:44:19', '2010-11-28 20:44:19'),
(24, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0896.jpg', '/img/uploads/gallery/DSC_0896_1.jpg', 46, '2010-11-28 20:44:37', '2010-11-28 20:44:37'),
(25, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0900.jpg', '/img/uploads/gallery/DSC_0900_1.jpg', 45, '2010-11-28 20:44:52', '2010-11-28 20:44:52'),
(26, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0902.jpg', '/img/uploads/gallery/DSC_0902_1.jpg', 44, '2010-11-28 20:45:17', '2010-11-28 20:45:17'),
(27, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0643.jpg', '/img/uploads/gallery/DSC_0643_1.jpg', 43, '2010-11-28 20:45:50', '2010-11-28 20:45:50'),
(28, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0646.jpg', '/img/uploads/gallery/DSC_0646_1.jpg', 52, '2010-11-28 20:46:13', '2010-11-28 20:47:39'),
(29, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0664.jpg', '/img/uploads/gallery/DSC_0664_1.jpg', 42, '2010-11-28 20:46:31', '2010-11-28 20:46:31'),
(30, 4, 'Thursday Night Session @ O''Connor''s Bar', '/img/uploads/gallery/DSC_0673.jpg', '/img/uploads/gallery/DSC_0673_1.jpg', 41, '2010-11-28 20:46:54', '2010-11-28 20:46:54'),
(31, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0001.jpg', '/img/uploads/gallery/halloween_2010_0001_1.jpg', 40, '2010-11-28 21:08:47', '2010-11-28 21:08:47'),
(32, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0002.jpg', '/img/uploads/gallery/halloween_2010_0002_1.jpg', 39, '2010-11-28 21:09:03', '2010-11-28 21:09:03'),
(33, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0003.jpg', '/img/uploads/gallery/halloween_2010_0003_1.jpg', 38, '2010-11-28 21:09:15', '2010-11-28 21:09:15'),
(34, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0005.jpg', '/img/uploads/gallery/halloween_2010_0005_1.jpg', 37, '2010-11-28 21:09:29', '2010-11-28 21:09:29'),
(35, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0006.jpg', '/img/uploads/gallery/halloween_2010_0006_1.jpg', 36, '2010-11-28 21:09:42', '2010-11-28 21:09:42'),
(36, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0008.jpg', '/img/uploads/gallery/halloween_2010_0008_1.jpg', 35, '2010-11-28 21:09:56', '2010-11-28 21:09:56'),
(37, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0009.jpg', '/img/uploads/gallery/halloween_2010_0009_1.jpg', 34, '2010-11-28 21:10:08', '2010-11-28 21:10:08'),
(38, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0010.jpg', '/img/uploads/gallery/halloween_2010_0010_1.jpg', 33, '2010-11-28 21:10:24', '2010-11-28 21:10:24'),
(39, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0012.jpg', '/img/uploads/gallery/halloween_2010_0012_1.jpg', 32, '2010-11-28 21:10:42', '2010-11-28 21:10:42'),
(40, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0013.jpg', '/img/uploads/gallery/halloween_2010_0013_1.jpg', 31, '2010-11-28 21:11:04', '2010-11-28 21:11:04'),
(41, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0014.jpg', '/img/uploads/gallery/halloween_2010_0014_1.jpg', 30, '2010-11-28 21:11:18', '2010-11-28 21:11:18'),
(42, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0015.jpg', '/img/uploads/gallery/halloween_2010_0015_1.jpg', 29, '2010-11-28 21:11:31', '2010-11-28 21:11:31'),
(43, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0016.jpg', '/img/uploads/gallery/halloween_2010_0016_1.jpg', 28, '2010-11-28 21:11:47', '2010-11-28 21:11:47'),
(44, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0017.jpg', '/img/uploads/gallery/halloween_2010_0017_1.jpg', 27, '2010-11-28 21:12:00', '2010-11-28 21:12:00'),
(45, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0018.jpg', '/img/uploads/gallery/halloween_2010_0018_1.jpg', 26, '2010-11-28 21:12:14', '2010-11-28 21:12:14'),
(46, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0019.jpg', '/img/uploads/gallery/halloween_2010_0019_1.jpg', 25, '2010-11-28 21:12:54', '2010-11-28 21:12:54'),
(47, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0020.jpg', '/img/uploads/gallery/halloween_2010_0020_1.jpg', 24, '2010-11-28 21:13:06', '2010-11-28 21:13:06'),
(48, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0021.jpg', '/img/uploads/gallery/halloween_2010_0021_1.jpg', 23, '2010-11-28 21:13:21', '2010-11-28 21:13:21'),
(49, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0022.jpg', '/img/uploads/gallery/halloween_2010_0022_1.jpg', 22, '2010-11-28 21:13:33', '2010-11-28 21:13:33'),
(50, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0023.jpg', '/img/uploads/gallery/halloween_2010_0023_1.jpg', 21, '2010-11-28 21:13:58', '2010-11-28 21:13:58'),
(51, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0024.jpg', '/img/uploads/gallery/halloween_2010_0024_1.jpg', 20, '2010-11-28 21:14:21', '2010-11-28 21:14:21'),
(52, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0025.jpg', '/img/uploads/gallery/halloween_2010_0025_1.jpg', 19, '2010-11-28 21:14:36', '2010-11-28 21:14:36'),
(53, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0026.jpg', '/img/uploads/gallery/halloween_2010_0026_1.jpg', 18, '2010-11-28 21:14:48', '2010-11-28 21:14:48'),
(54, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0027.jpg', '/img/uploads/gallery/halloween_2010_0027_1.jpg', 17, '2010-11-28 21:15:01', '2010-11-28 21:15:01'),
(55, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0028.jpg', '/img/uploads/gallery/halloween_2010_0028_1.jpg', 16, '2010-11-28 21:15:15', '2010-11-28 21:15:15'),
(56, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0029.jpg', '/img/uploads/gallery/halloween_2010_0029_1.jpg', 15, '2010-11-28 21:15:37', '2010-11-28 21:15:37'),
(57, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0033.jpg', '/img/uploads/gallery/halloween_2010_0033_1.jpg', 14, '2010-11-28 21:16:00', '2010-11-28 21:16:00'),
(58, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0034.jpg', '/img/uploads/gallery/halloween_2010_0034_1.jpg', 13, '2010-11-28 21:16:14', '2010-11-28 21:16:14'),
(59, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0035.jpg', '/img/uploads/gallery/halloween_2010_0035_1.jpg', 12, '2010-11-28 21:16:35', '2010-11-28 21:16:35'),
(60, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0037.jpg', '/img/uploads/gallery/halloween_2010_0037_1.jpg', 11, '2010-11-28 21:16:48', '2010-11-28 21:16:48'),
(61, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0039.jpg', '/img/uploads/gallery/halloween_2010_0039_1.jpg', 10, '2010-11-28 21:17:02', '2010-11-28 21:17:02'),
(62, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0040.jpg', '/img/uploads/gallery/halloween_2010_0040_1.jpg', 9, '2010-11-28 21:17:15', '2010-11-28 21:17:15'),
(63, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0041.jpg', '/img/uploads/gallery/halloween_2010_0041_1.jpg', 8, '2010-11-28 21:17:31', '2010-11-28 21:17:31'),
(64, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0044.jpg', '/img/uploads/gallery/halloween_2010_0044_1.jpg', 7, '2010-11-28 21:17:52', '2010-11-28 21:17:52'),
(65, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0049.jpg', '/img/uploads/gallery/halloween_2010_0049_1.jpg', 6, '2010-11-28 21:18:06', '2010-11-28 21:18:06'),
(66, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0052.jpg', '/img/uploads/gallery/halloween_2010_0052_1.jpg', 5, '2010-11-28 21:18:19', '2010-11-28 21:18:19'),
(67, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0053.jpg', '/img/uploads/gallery/halloween_2010_0053_1.jpg', 4, '2010-11-28 21:18:33', '2010-11-28 21:18:33'),
(68, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0054.jpg', '/img/uploads/gallery/halloween_2010_0054_1.jpg', 3, '2010-11-28 21:18:46', '2010-11-28 21:18:46'),
(69, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0055.jpg', '/img/uploads/gallery/halloween_2010_0055_1.jpg', 2, '2010-11-28 21:18:58', '2010-11-28 21:18:58'),
(70, 5, 'Halloween 2010 @ O''Connor''s Bar', '/img/uploads/gallery/halloween_2010_0056.jpg', '/img/uploads/gallery/halloween_2010_0056_1.jpg', 1, '2010-11-28 21:19:11', '2010-11-28 21:19:11'),
(71, 6, 'Sample Image', '/img/uploads/gallery/CRIM0032.jpg', '/img/uploads/gallery/CRIM0032_1.jpg', 0, '2011-01-15 09:46:09', '2011-01-15 09:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `menu_pdf` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `menu_pdf`, `created`, `modified`) VALUES
(3, 'November 2010', '/files/oconnors_bar_menu_1.pdf', '2010-11-28 16:35:20', '2010-11-28 16:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `page_id` int(11) NOT NULL default '0',
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `body`, `published`, `created`, `modified`) VALUES
(1, 0, 'Home Page', 'home-page', 'O''Connor''s Bar, Ballycastle', 'Welcome to the website of O''Connor''s Bar in Ballycastle where callers are guaranteed ''A Cead Mile Failte'' (Hundred Thousand Welcomes)', 'O''Connor''s Bar, O''Connors Bar, OConnors Bar, O''Connors, Ballycastle', '<p>This traditional Irish bar with a modern feel is a must stop for visitors to the Antrim Coast where they can experience the unique mix of ''craic agus ceol'' (fun and music).</p>\r\n<p>However that''s not all! O''Connor''s Bar is widely regarded as serving the best pint of Guinness in North Antrim, has a menu of freshly prepared meals to cater for all tastes, hosts a famous traditional Irish music night and attracts some of the best local up and coming bands.</p>', 1, '2010-11-20 14:23:31', '2010-11-28 13:59:36'),
(2, 0, 'About O''Connor''s Bar, Ballycaslte', 'about-oconnors-bar-ballycaslte', 'About O''Connor''s Bar, Ballycaslte', 'Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.', 'O''Connor''s Bar, Ballycastle', '<p>Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.</p>\r\n<p>Since taking over the bar in 200X, Ballycastle man Cormac O''Connor [link to biog] has invested both time and money to put his own individual stamp on the ''teach t&aacute; bhairne'' (public house).</p>\r\n<p>That hard work has paid off and O''Connor''s enjoys the reputation for being a family friendly and welcoming bar for locals and visitors alike.</p>\r\n<p>The main bar retains the traditional character of a local, when patrons can enjoy a pint, a relaxing drink with friends in one of the booths and some fine food prepared by chef XYZ [link for biog]</p>\r\n<p>The outside bar is ideal for functions and suitable for use all year round.</p>', 1, '2010-11-20 14:26:54', '2011-01-15 09:35:49'),
(3, 0, 'Upcoming Events at O''Connor''s Bar Ballycastle', 'upcoming-events-at-oconnors-bar-ballycastle', 'Upcoming Events at O''Connor''s Bar Ballycastle', 'Live music every Friday and Saturday night from the best local up and coming bands. Music changes weekly so regularly check this page to keep up to date with who''s playing.', 'O''Connor''s Bar, Ballycastle, Upcoming Events', '<p>Live music every Friday and Saturday night from the best local up and coming bands. Music changes weekly so regularly check this page to keep up to date with who''s playing.</p>', 1, '2010-11-20 14:34:46', '2010-11-28 15:51:23'),
(4, 0, 'Traditional Irish Music Sessions at O''Connor''s Bar, Ballycastle', 'traditional-irish-music-sessions-at-oconnors-bar-ballycastle', 'Traditional Irish Music Sessions at O''Connor''s Bar, Ballycastle', 'Thursday night is traditional night in O''Connor''s and the session gets underway just after 9pm. Local traditional Irish musicians jig, reel and hornpipe their way through the evening to the delight of audiences who travel from far and wide to revel in a n', 'O''Connor''s Bar, Ballycastle', '<p>Thursday night is traditional night in O''Connor''s and the session gets  underway just after 9pm. Local traditional Irish musicians jig, reel and  hornpipe their way through the evening to the delight of audiences who  travel from far and wide to revel in a night never to be forgotten.</p>', 1, '2010-11-27 16:24:39', '2010-11-28 15:59:16'),
(5, 0, 'Food at O''Connor''s Bar, Ballycastle', 'food-at-o-connor-s-bar-ballycastle', 'Food at O''Connor''s Bar, Ballycastle', 'O''Connor''s Bar prides itself on its good quality food with all dishes prepared on site and ingredients sourced from local suppliers.', 'O''Connor''s Bar, Ballycastle', '<p>O''Connor''s Bar prides itself on its good quality food with all dishes  prepared on site and ingredients sourced from local suppliers.</p>\r\n<p>There are a number of seafood meals on the menu along with traditional Irish dishes and a selection of Irish breads.</p>\r\n<p>Why not treat yourself and try the popular XYZ or ABC</p>\r\n<p>Food is served daily in the bar from 11:30 to 21:00.</p>', 1, '2010-11-27 16:25:22', '2010-11-27 16:25:22'),
(6, 0, 'O''Connor''s Bar Merchandise', 'oconnors-bar-merchandise', 'O''Connor''s Bar Merchandise', 'O''Connor''s Bar offers a range of branded clothing with its attractive logo in many different styles and colours which can be purchased from the bar.', 'O''Connor''s Bar, Ballycastle', '<p>O''Connor''s Bar offers a range of branded clothing with its attractive  logo in many different styles and colours which can be purchased from  the bar.</p>', 1, '2010-11-27 16:26:03', '2010-11-28 16:00:57'),
(7, 0, 'O''Connor''s Bar Image Gallery', 'o-connor-s-bar-image-gallery', 'O''Connor''s Bar Image Gallery', 'New photo gallery available below. Relive the night by flicking through some of the more memorable occasions in O''Connor''s.', 'O''Connor''s Bar, Ballycastle', '<p>New photo gallery available below. Relive the night by flicking through some of the more memorable occasions in O''Connor''s.</p>', 1, '2010-11-27 16:26:51', '2010-11-27 16:26:51'),
(8, 0, 'Contact Us', 'contact-us', 'O''Connor''s Bar, Ballycastle, Contact Us', 'O''Connor''s Bar, 5-7 Ann Street, Ballycastle, Co Antrim, BT54 6AA Tel: 028 2076 2123 Email: info@oconnorsbar.ie', 'O''Connor''s Bar, Ballycastle, Contact Details', '<p>O''Connor''s Bar, 5-7 Ann Street, Ballycastle, Co Antrim, BT54 6AA<br />Tel: 028 2076 2123<br />Email: <a href="mailto:info@oconnorsbar.ie">info@oconnorsbar.ie</a></p>', 1, '2010-11-27 16:27:53', '2010-11-27 16:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` datetime NOT NULL,
  `unsubscribed` tinyint(1) NOT NULL default '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `dob`, `unsubscribed`, `created`, `modified`) VALUES
(1, 'Ricky McAlister', 'ricky.mcalister@googlemail.com', '1981-08-08 00:00:00', 0, '2010-11-22 21:54:37', '2010-11-28 20:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `role`, `created`, `modified`) VALUES
(1, '', 'ricky', 'c126188f1035cee82bc939e266ab0b3fe7d2638d', 'ricky.mcalister@googlemail.com', 'admin', '2010-11-16 21:47:18', '2010-11-28 21:46:03'),
(2, '', 'admin', '039b57c9b874b0d73ba805e1707e961dedd40f55', 'info@oconnorsbar.ie', 'admin', '2010-11-20 19:23:25', '2010-11-28 21:46:13');
