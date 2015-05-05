-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2015 at 08:43 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini_proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuevo`
--

CREATE TABLE IF NOT EXISTS `nuevo` (
`id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text,
  `autor` varchar(100) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nuevo`
--

INSERT INTO `nuevo` (`id`, `titulo`, `contenido`, `autor`, `fecha`) VALUES
(1, '', 'jcjsdn', 'sndjsdnj', '0000-00-00 00:00:00'),
(2, '', 'jcjsdn', 'sndjsdnj', '0000-00-00 00:00:00'),
(3, '', 'novela romnatica', 'treviño arturo', '0000-00-00 00:00:00'),
(4, '', 'm mc m m', 'ppdjsjs', '2015-04-10 06:04:28'),
(5, '', 'm mc m m', 'ppdjsjs', '2015-04-10 06:04:14'),
(6, '', 'm mc m m', 'ppdjsjs', '2015-04-10 06:04:35'),
(7, '', 'm mc m m', 'ppdjsjs', '2015-04-10 06:04:48'),
(8, 'papa', 'jjjj', 'mmmm', '2015-04-10 06:04:46'),
(9, 'papa', 'jjjj', 'mmmm', '2015-04-10 06:04:16'),
(10, 'olaa', 'ola', 'ola', '2015-04-11 20:04:10'),
(11, 'jsj', 'okopask', 'kxskn', '2015-04-11 20:04:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nuevo`
--
ALTER TABLE `nuevo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nuevo`
--
ALTER TABLE `nuevo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
