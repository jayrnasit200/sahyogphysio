-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2022 at 08:22 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_appoitment`
--

DROP TABLE IF EXISTS `book_appoitment`;
CREATE TABLE IF NOT EXISTS `book_appoitment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` varchar(25) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `d_name` varchar(150) NOT NULL,
  `status` enum('padding','success') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

DROP TABLE IF EXISTS `web_config`;
CREATE TABLE IF NOT EXISTS `web_config` (
  `site_name` varchar(250) NOT NULL,
  `copyright_text` text NOT NULL,
  `t_branch` varchar(10) NOT NULL,
  `t_employees` varchar(10) NOT NULL,
  `t_customer` varchar(10) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
