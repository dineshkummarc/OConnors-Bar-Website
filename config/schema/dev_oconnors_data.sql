-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2010 at 01:31 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_oconnors`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `albums`
--


-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start_date`, `end_date`, `created`, `modified`) VALUES
(1, 'Man Utd Vs. Liverpool in 3D', 'Join us to watch Manchester United take on Liverpool in amazing 3D', '2010-11-20 15:00:00', '2010-11-20 17:00:00', '2010-11-20 17:54:34', '2010-11-22 13:23:23'),
(2, 'Chelsea Vs. Dagenam and Redbridge', 'Come see Chelsea get beat by league 2 minnows', '2010-11-21 15:00:00', '2010-11-21 17:00:00', '2010-11-22 13:24:21', '2010-11-22 13:24:21'),
(3, 'Live Music', 'Some Live Music', '2010-11-26 15:00:00', '2010-11-26 15:00:00', '2010-11-22 13:24:41', '2010-11-22 13:24:41'),
(4, 'Karaoke', 'Some Karaoke', '2010-11-25 21:00:00', '2010-11-25 23:00:00', '2010-11-22 13:25:35', '2010-11-22 13:25:35'),
(5, 'DJ', 'Some DJ Extravaganza', '2010-11-27 22:00:00', '2010-11-28 01:30:00', '2010-11-22 13:26:23', '2010-11-22 13:26:23'),
(6, 'Quiz Night', 'Some Quiz Night Description', '2010-11-28 19:00:00', '2010-11-28 22:00:00', '2010-11-22 13:26:54', '2010-11-22 13:26:54'),
(7, 'Live Session', 'Live Session description . . .', '2010-12-09 21:00:00', '2010-12-10 01:00:00', '2010-11-22 13:36:47', '2010-11-22 13:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `images`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `meta_title` varchar(100) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `body`, `published`, `created`, `modified`) VALUES
(1, 0, 'Home Page', 'home-page', 'O''Connor''s Bar, Ballycastle', 'Welcome to the website of O''Connor''s Bar in Ballycastle where callers are guaranteed ''A Cead Mile Failte'' (Hundred Thousand Welcomes)', 'O''Connor''s Bar, O''Connors Bar, OConnors Bar, O''Connors, Ballycastle', '<p>This traditional Irish bar with a modern feel is a must stop for visitors to the Antrim Coast where they can experience the unique mix of ''craic agus ceol'' (fun and music).</p>\r\n<p>However that''s not all! O''Connor''s Bar is widely regarded as serving the best pint of Guinness in North Antrim, has a menu of freshly prepared meals to cater for all tastes, hosts a famous traditional Irish music night and attracts some of the best local up and coming bands.</p>', 1, '2010-11-20 14:23:31', '2010-11-20 16:29:42'),
(2, 0, 'About O''Connor''s Bar, Ballycaslte', 'about-o-connor-s-bar-ballycaslte', 'About O''Connor''s Bar, Ballycaslte', 'Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.', 'O''Connor''s Bar, Ballycastle', '<p>Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.</p>\r\n<p>Since taking over the bar in 200X, Ballycastle man Cormac O''Connor [link to biog] has invested both time and money to put his own individual stamp on the ''teach t&aacute; bhairne'' (public house).</p>\r\n<p>That hard work has paid off and O''Connor''s enjoys the reputation for being a family friendly and welcoming bar for locals and visitors alike.</p>\r\n<p>The main bar retains the traditional character of a local, when patrons can enjoy a pint, a relaxing drink with friends in one of the booths and some fine food prepared by chef XYZ [link for biog]</p>\r\n<p>The outside bar is ideal for functions and suitable for use all year round.</p>', 1, '2010-11-20 14:26:54', '2010-11-20 19:21:35'),
(3, 0, 'Upcoming Events at O''Connor''s Bar Ballycastle', 'upcoming-events-at-o-connor-s-bar-ballycastle', 'Upcoming Events at O''Connor''s Bar Ballycastle', 'Live music every Friday and Saturday night from the best local up and coming bands. Music changes weekly so regularly check this page to keep up to date with who''s playing.', 'O''Connor''s Bar, Ballycastle, Upcoming Events', '<p>Live music every Friday and Saturday night from the best local up and coming bands. Music changes weekly so regularly check this page to keep up to date with who''s playing.</p>\r\n<p>Coming from the DB!</p>', 1, '2010-11-20 14:34:46', '2010-11-22 14:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dob` datetime NOT NULL,
  `unsubscribed` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subscribers`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`) VALUES
(1, 'ricky', 'c126188f1035cee82bc939e266ab0b3fe7d2638d', 'ricky.mcalister@googlemail.com', 'admin', '2010-11-16 21:47:18', '2010-11-16 21:47:18'),
(2, 'cormac', '039b57c9b874b0d73ba805e1707e961dedd40f55', 'info@oconnorsbar.ie', 'admin', '2010-11-20 19:23:25', '2010-11-20 19:23:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
