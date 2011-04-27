-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2011 at 04:38 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `body`, `published`, `created`, `modified`) VALUES
(1, 0, 'Home Page', 'home-page', 'O''Connor''s Bar, Ballycastle', 'Welcome to the website of O''Connor''s Bar in Ballycastle where callers are guaranteed ''A Cead Mile Failte'' (Hundred Thousand Welcomes)', 'O''Connor''s Bar, O''Connors Bar, OConnors Bar, O''Connors, Ballycastle', '<p>This traditional Irish bar with a modern feel is a must stop for visitors to the Antrim Coast where they can experience the unique mix of ''craic agus ceol'' (fun and music).</p>\r\n<p>However that''s not all! O''Connor''s Bar is widely regarded as serving the best pint of Guinness in North Antrim, has a menu of freshly prepared meals to cater for all tastes, hosts a famous traditional Irish music night and attracts some of the best local up and coming bands.</p>', 1, '2010-11-20 14:23:31', '2010-11-28 13:59:36'),
(2, 0, 'About O''Connor''s Bar, Ballycaslte', 'about-oconnors-bar-ballycaslte', 'About O''Connor''s Bar, Ballycaslte', 'Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.', 'O''Connor''s Bar, Ballycastle', '<p>Situated along Ballycastle''s busy Ann Street, O''Connor''s Bar is the ideal place to stop, relax and soak up some traditional Irish hospitality.</p>\r\n<p>Since taking over the bar in 2002, Ballycastle man Cormac O''Connor has invested both time and money to put his own individual stamp on the ''teach t&aacute; bhairne'' (public house).</p>\r\n<p>That hard work has paid off and O''Connor''s enjoys the reputation for being a family friendly and welcoming bar for locals and visitors alike.</p>\r\n<p>The main bar retains the traditional character of a "local", where patrons can enjoy a pint, a relaxing drink with friends in one of the booths and some fine food prepared by chef Chris Burrows.</p>\r\n<!--\r\n<p>The outside bar is ideal for functions and suitable for use all year round.</p>\r\n-->\r\n<p><a title="The Beer Garden at O''Connor''s Bar Ballycastle" href="/pages/beer-garden-at-oconnors-bar-ballycastle">The Beer Garden at O''Connor''s Bar</a> provides an alternative surrounding, with DJs and live entertainment all year round. The Beer Garden is also availble for private functions. <a title="Beer Garden at O''Connor''s Bar Ballycastle" href="/pages/beer-garden-at-oconnors-bar-ballycastle">Click here for more details</a>.</p>', 1, '2010-11-20 14:26:54', '2011-01-22 14:48:31'),
(3, 0, 'Upcoming Events at O''Connor''s Bar Ballycastle', 'upcoming-events-at-oconnors-bar-ballycastle', 'Upcoming Events at O''Connor''s Bar Ballycastle', 'Live music every Friday and Saturday night from the best local up and coming bands. Music changes weekly so regularly check this page to keep up to date with who''s playing.', 'O''Connor''s Bar, Ballycastle, Upcoming Events', '<p>Live entertainment every Thursday, Friday, Saturday and Sunday. Music changes weekly so regularly check this page to keep up to date with who''s playing.</p>', 1, '2010-11-20 14:34:46', '2011-01-17 22:14:07'),
(4, 0, 'Traditional Irish Music Sessions at O''Connor''s Bar, Ballycastle', 'traditional-irish-music-sessions-at-oconnors-bar-ballycastle', 'Traditional Irish Music Sessions at O''Connor''s Bar, Ballycastle', 'Thursday night is traditional night in O''Connor''s and the session gets underway just after 9pm. Local traditional Irish musicians jig, reel and hornpipe their way through the evening to the delight of audiences who travel from far and wide to revel in a n', 'O''Connor''s Bar, Ballycastle', '<p>Thursday night is traditional night in O''Connor''s and the session gets  underway just after 9pm. Local traditional Irish musicians jig, reel and  hornpipe their way through the evening to the delight of audiences who  travel from far and wide to revel in a night never to be forgotten.</p>', 1, '2010-11-27 16:24:39', '2010-11-28 15:59:16'),
(5, 0, 'Food at O''Connor''s Bar, Ballycastle', 'food-at-o-connor-s-bar-ballycastle', 'Food at O''Connor''s Bar, Ballycastle', 'O''Connor''s Bar prides itself on its good quality food with all dishes prepared on site and ingredients sourced from local suppliers.', 'O''Connor''s Bar, Ballycastle', '<p>O''Connor''s Bar prides itself on its quality food with all dishes  prepared on site and ingredients sourced from local suppliers.</p>\r\n<p>There are a number of seafood treats on the menu along with some traditional Irish meals and a wide variety of dishes from around the globe.</p>\r\n<p>Food is served daily in the bar from 11:30 to 21:00.</p>', 1, '2010-11-27 16:25:22', '2011-01-17 22:16:33'),
(6, 0, 'O''Connor''s Bar Merchandise', 'oconnors-bar-merchandise', 'O''Connor''s Bar Merchandise', 'O''Connor''s Bar offers a range of branded clothing with its attractive logo in many different styles and colours which can be purchased from the bar.', 'O''Connor''s Bar, Ballycastle', '<p>O''Connor''s Bar offers a range of branded clothing with its attractive  logo in many different styles and colours which can be purchased from  the bar.</p>\r\n<p>If you would like to know more about our range of branded clothing, please contact a member of staff or get in touch by email at <a href="mailto:merchandies@oconnorsbar.ie?subject=OConnors Bar Branded Merchandise" target="_self">merchandise@oconnorsbar.ie</a>.</p>', 1, '2010-11-27 16:26:03', '2011-01-17 22:30:04'),
(7, 0, 'O''Connor''s Bar Image Gallery', 'o-connor-s-bar-image-gallery', 'O''Connor''s Bar Image Gallery', 'New photo gallery available below. Relive the night by flicking through some of the more memorable occasions in O''Connor''s.', 'O''Connor''s Bar, Ballycastle', '<p>New photo gallery available below. Relive the night by flicking through some of the more memorable occasions in O''Connor''s.</p>', 1, '2010-11-27 16:26:51', '2010-11-27 16:26:51'),
(8, 0, 'Contact Us', 'contact-us', 'O''Connor''s Bar, Ballycastle, Contact Us', 'O''Connor''s Bar, 5-7 Ann Street, Ballycastle, Co Antrim, BT54 6AA Tel: 028 2076 2123 Email: info@oconnorsbar.ie', 'O''Connor''s Bar, Ballycastle, Contact Details', '<p>O''Connor''s Bar, 5-7 Ann Street, Ballycastle, Co Antrim, BT54 6AA<br />Tel: 028 2076 2123<br />Email: <a href="mailto:info@oconnorsbar.ie">info@oconnorsbar.ie</a></p>', 1, '2010-11-27 16:27:53', '2010-11-27 16:27:53'),
(9, 2, 'Beer Garden at O''Connor''s Bar Ballycastle', 'beer-garden-at-oconnors-bar-ballycastle', 'Beer Garden at O''Connor''s Bar Ballycastle', 'Beer Garden at O''Connor''s Bar Ballycastle', 'O''Connor''s Bar, Ballycastle, Beer Garden', '<p>The Beer Garden at O''Connor''s Bar provides alternative surroundings for those who prefer to enjoy a refreshing drink and light lunch in the warm sunshine during the summer months, or experience a different atmosphere under the heated canopy during the colder evenings.</p>\r\n<p>With regular DJs and live entertainment all year round, the Beer Garden is the ideal venue for private functions and parties.</p>\r\n<p><a title="Contact Us" href="/pages/contact-us">Contact us for more information</a>.</p>', 1, '2011-01-22 14:37:05', '2011-01-22 15:06:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
