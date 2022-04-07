-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 09:43 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahyogphysio`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titele` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_appoitment`
--

DROP TABLE IF EXISTS `book_appoitment`;
CREATE TABLE IF NOT EXISTS `book_appoitment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `type` enum('physio','diet') NOT NULL,
  `date` date NOT NULL,
  `d_name` varchar(150) NOT NULL,
  `status` enum('padding','approved','rejected') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `status`, `msg`, `created_at`, `updated_at`) VALUES
(4, 'sharma', '2134343', 'hide', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of', '2022-04-05 13:32:06', '2022-04-05 13:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `gellary`
--

DROP TABLE IF EXISTS `gellary`;
CREATE TABLE IF NOT EXISTS `gellary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `img` text NOT NULL,
  `type` enum('physio','aerobics','yoga','other') NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `img` text NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(10, 's2', '/uploads/20220407_0910565104.jpeg', 'show', '2022-04-07 03:40:56', '2022-04-07 03:40:56'),
(9, 's1', '/uploads/20220407_0910489783.jpeg', 'show', '2022-04-07 03:40:48', '2022-04-07 03:40:48'),
(11, 's3', '/uploads/20220407_0911041384.jpeg', 'show', '2022-04-07 03:41:04', '2022-04-07 03:41:04'),
(12, 's4', '/uploads/20220407_0911144277.jpeg', 'show', '2022-04-07 03:41:14', '2022-04-07 03:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `roal` enum('1','2') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `roal`, `created_at`, `updated_at`) VALUES
(1, 'jay', 'test@gmail.com', '1234567891', 'e10adc3949ba59abbe56e057f20f883e', '1', '2022-04-05 08:37:03', '2022-04-05 08:37:03'),
(5, 'ssdf', 'sdfsdf@dsf.fgghh', '12312323123', 'cf2dab70aa3b9481dbbbf9b206b80d5e', '2', '2022-04-05 22:40:20', '2022-04-05 22:40:20'),
(6, 'jay', 'test@gmail.com2', '1234567891', 'e10adc3949ba59abbe56e057f20f883e', '2', '2022-04-05 08:37:03', '2022-04-05 08:37:03'),
(7, 'jay', 'jay@jay.com', '123456789', 'e10adc3949ba59abbe56e057f20f883e', '2', '2022-04-07 03:12:18', '2022-04-07 03:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

DROP TABLE IF EXISTS `web_config`;
CREATE TABLE IF NOT EXISTS `web_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(250) NOT NULL,
  `copyright_text` text NOT NULL,
  `t_branch` varchar(10) NOT NULL,
  `t_employees` varchar(10) NOT NULL,
  `t_customer` varchar(10) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `site_name`, `copyright_text`, `t_branch`, `t_employees`, `t_customer`, `phone`, `address`, `logo`) VALUES
(1, 'sahyogphysio', 'sahyogphysio@Copyright 2022. ', '5', '50', '5000', '+44 2536149825', 'Russian production of modern and high-quality Dami products for children. For more than 13 years we offer only the best products. We invite you to cooperation.', '/uploads/20220405_0312392456.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;