-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2022 at 03:24 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `titele`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(14, 'hysiotherapy Centre', 'Hamstring strengthening exercises can improve overall leg strength, relieve lower back pain, and increase flexibility\r\nHere are some best hamstring exercises by Dr. Sujita Suvagiya', '/uploads/20220407_0605569489.jpeg', 'show', '2022-04-07 00:35:56', '2022-04-07 00:35:56'),
(15, 'Physiotherapy and Fitness Center', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. ', '/uploads/20220407_0608443086.jpeg', 'show', '2022-04-07 00:38:44', '2022-04-08 00:17:40'),
(11, 'Sahyog Physiotherapy and Fitness Center - Best Physiotherapy Centre in Surat', 'ðŸ’ðŸ»If an ankle sprain does not heal correctly, the joint may become unstable, resulting in a weakened and easily reinjured ankle. Proper initial care of your sprained ankle is critical. A compression wrap helps decrease swelling. If swelling is kept to a minimum, it may help your ankle feel better.', '/uploads/20220407_0550527076.jpeg', 'show', '2022-04-07 00:20:52', '2022-04-07 00:20:52'),
(12, 'Sahyog Physiotherapy and Fitness Center - Best Physiotherapy Centre in Surat', 'Sahyog Physiotherapy and Fitness Center - Best Physiotherapy Centre in Surat  Listen to our expert Dr. Afreen Jasani about some summer tips ', '/uploads/20220407_0603143121.jpeg', 'show', '2022-04-07 00:33:14', '2022-04-07 00:33:14'),
(13, 'Best Physiotherapy Centre in Surat', 'Listen From Our Client Dipti, She was depressed because she was not able to concieve pregnancy, She tried many medicines but with a proper lifestyle management of specialt diet for pregnancy, exercise and yoga pranayama she concieved naturally and delivered a healthy baby girl.\r\nConsult today for pregnancy diet.', '/uploads/20220407_0604228750.jpeg', 'show', '2022-04-07 00:34:22', '2022-04-07 00:34:56'),
(16, 'Consult with our physiotherapist doctor and get relief from ankle injuries.', 'Ankle injuries can occur during any kind of activity, even just walking. If you are experiencing stiffness, tenderness, inflammation, and pain in your ankle joints then it may be due to some ankle injury that requires medical attention.\r\n\r\nConsult with our physiotherapist doctor and get relief from ankle injuries.', '/uploads/20220407_0610055665.jpeg', 'show', '2022-04-07 00:40:05', '2022-04-07 00:40:05');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_appoitment`
--

INSERT INTO `book_appoitment` (`id`, `user_id`, `time`, `type`, `date`, `d_name`, `status`, `created_at`, `updated_at`) VALUES
(6, 8, '05:00:00', 'physio', '2022-04-23', 'Afreen', 'padding', '2022-04-07 21:42:40', '2022-04-07 21:42:40'),
(7, 8, '12:30:00', 'diet', '2022-04-21', 'Nidhi', 'padding', '2022-04-07 21:42:56', '2022-04-07 21:42:56'),
(8, 8, '12:30:00', 'physio', '2022-04-30', 'Jigna', 'padding', '2022-04-07 21:43:11', '2022-04-07 21:43:11');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `status`, `msg`, `created_at`, `updated_at`) VALUES
(4, 'sharma', '2134343', 'hide', 'It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of', '2022-04-05 13:32:06', '2022-04-05 13:32:06'),
(5, 'raj', '9865321470', 'show', 'qestion about  health', '2022-04-07 21:44:04', '2022-04-07 21:44:04'),
(6, 'sanjay', '8452184651', 'show', 'ask about your service', '2022-04-07 21:53:18', '2022-04-07 21:53:18'),
(7, 'ramesh', '8658645868', 'show', 'question about your products', '2022-04-07 21:54:04', '2022-04-07 21:54:04');

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gellary`
--

INSERT INTO `gellary` (`id`, `name`, `img`, `type`, `status`, `created_at`, `updated_at`) VALUES
(8, 'das', '/uploads/20220407_0509154115.jpeg', 'yoga', 'show', '2022-04-06 23:39:15', '2022-04-06 23:43:02'),
(7, 'sj', '/uploads/20220407_0506521371.jpeg', 'other', 'show', '2022-04-06 23:36:52', '2022-04-06 23:36:52'),
(9, 'y1', '/uploads/20220407_0509256960.jpeg', 'yoga', 'show', '2022-04-06 23:39:25', '2022-04-06 23:39:25'),
(10, 'y2', '/uploads/20220407_0509344235.jpeg', 'yoga', 'show', '2022-04-06 23:39:34', '2022-04-06 23:39:34'),
(11, 'y3', '/uploads/20220407_0509433880.jpeg', 'yoga', 'show', '2022-04-06 23:39:43', '2022-04-06 23:39:43'),
(12, 'y4', '/uploads/20220407_0509547144.jpeg', 'yoga', 'show', '2022-04-06 23:39:54', '2022-04-06 23:39:54'),
(13, 'y1', '/uploads/20220407_0511016556.jpeg', 'aerobics', 'show', '2022-04-06 23:41:01', '2022-04-06 23:41:01'),
(14, 'y2', '/uploads/20220407_0511132838.jpeg', 'aerobics', 'show', '2022-04-06 23:41:13', '2022-04-06 23:41:13'),
(19, 'p1', '/uploads/20220407_0514006046.jpeg', 'physio', 'show', '2022-04-06 23:44:00', '2022-04-06 23:44:00'),
(16, 'y4', '/uploads/20220407_0511428220.jpeg', 'aerobics', 'show', '2022-04-06 23:41:42', '2022-04-06 23:41:42'),
(17, 'y5', '/uploads/20220407_0511573687.jpeg', 'aerobics', 'show', '2022-04-06 23:41:57', '2022-04-06 23:41:57'),
(18, 'y6', '/uploads/20220407_0512073635.jpeg', 'aerobics', 'show', '2022-04-06 23:42:07', '2022-04-06 23:42:07'),
(20, 'p2', '/uploads/20220407_0514081649.jpeg', 'physio', 'show', '2022-04-06 23:44:08', '2022-04-06 23:44:08'),
(21, 'p3', '/uploads/20220407_0514177383.jpeg', 'physio', 'show', '2022-04-06 23:44:17', '2022-04-06 23:44:17'),
(22, 'p4', '/uploads/20220407_0514254199.jpeg', 'physio', 'show', '2022-04-06 23:44:25', '2022-04-06 23:44:25'),
(23, 'p5', '/uploads/20220407_0514343727.jpeg', 'physio', 'show', '2022-04-06 23:44:34', '2022-04-06 23:44:34'),
(24, 'p6', '/uploads/20220407_0514412871.jpeg', 'physio', 'show', '2022-04-06 23:44:41', '2022-04-06 23:44:41'),
(25, 'p7', '/uploads/20220407_0514495519.jpeg', 'physio', 'show', '2022-04-06 23:44:49', '2022-04-06 23:44:49'),
(26, '01', '/uploads/20220407_0515149098.jpeg', 'other', 'show', '2022-04-06 23:45:14', '2022-04-06 23:45:14'),
(27, 'o3', '/uploads/20220407_0515372810.jpeg', 'other', 'show', '2022-04-06 23:45:37', '2022-04-06 23:45:37'),
(28, 'o4', '/uploads/20220407_0515515210.jpeg', 'other', 'show', '2022-04-06 23:45:51', '2022-04-06 23:45:51'),
(29, 'o5', '/uploads/20220407_0516041326.jpeg', 'other', 'show', '2022-04-06 23:46:04', '2022-04-06 23:46:04'),
(30, 'o6', '/uploads/20220407_0516285064.jpeg', 'other', 'show', '2022-04-06 23:46:28', '2022-04-06 23:46:28');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `description`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Sweetcorn', '/uploads/20220408_0616048530.jpeg', 'Sweetcorn, a type of corn, is high in carbs, fibre, vitamins and minerals. â€œSweetcorn is a good probiotic as it contains some kind of good gut bacteria, which aids in digestion and facilitates better metabolism, eventually helping in weight loss', 'show', '2022-04-08 00:46:04', '2022-04-08 00:46:04'),
(13, 'Sunflower seeds', '/uploads/20220408_0238572414.jpeg', 'Studies link the consumption of sunflower seeds to a number of health benefits, including lowering your risk of developing diseases like high blood pressure or heart disease. They also contain nutrients that can support your immune system and boost your energy levels.', 'show', '2022-04-07 21:08:57', '2022-04-07 21:08:57'),
(14, 'Oats', '/uploads/20220408_0240272123.jpeg', 'Oats is good to eat oatmeal every day considering its nutritional profile and health benefits, including weight control and heart-healthy effect. As a breakfast food and mid-meal snack, oatmeal is potentially a better option than the majority of foods available in the market.', 'show', '2022-04-07 21:10:27', '2022-04-07 21:10:27'),
(15, 'Dumbbells', '/uploads/20220408_0242449398.jpeg', 'â€œDumbbells are great for strength training, specifically loading the skeletal system to improve bone density,â€ she explains. â€œThey also challenge the muscular system to enhance lean mass, metabolism, and ultimately function.â€ Another benefit to using dumbbells in your strength workouts: Unilateral training', 'show', '2022-04-07 21:12:44', '2022-04-07 21:12:44'),
(16, 'Physio balls', '/uploads/20220408_0243554425.jpeg', 'Also known as exercise balls, Swiss balls, Physio balls, and balance balls, the purpose of the stability ball is to improve balance, muscle tone and core strength. Stability balls are filled with air and come in a variety of sizes.', 'show', '2022-04-07 21:13:55', '2022-04-07 21:13:55'),
(17, 'Ice bag', '/uploads/20220408_0248052589.jpeg', 'Ice can decrease swelling and inflammation and help stop bleeding. The cold restricts blood circulation, which in turn can numb the pain. It can also help limit any bruising. You can keep instant cold packs in your home first-aid kit or in your car in case of emergencies.', 'show', '2022-04-07 21:18:05', '2022-04-07 21:18:05'),
(18, 'Heel Cushion', '/uploads/20220408_0255547450.jpeg', 'Tynor presents Heel Cushion designed for superior comfort and pain relief. Made from high-quality medical-grade Silicone, the insole pair helps reduce the painful shock waves felt by the heel while walking. The heel cushion is anatomically shaped to ensure proper weight distribution, reduced peak loading, and also strain on the muscles & tendons. It features a unique Honeycomb structure to further enhance shock absorption properties & provide focussed pain relief. The heel cushion pair features an ergonomic design and optimal thickness to provide effective cushioning to your heel. In addition to this, the heel cushion is non-porous, non-absorbent, hypoallergenic, easy to use & maintain, odorless, lightweight, & highly durable', 'show', '2022-04-07 21:25:54', '2022-04-07 21:25:54'),
(19, 'Theraband', '/uploads/20220408_0303022593.jpeg', 'Therabands are not expensive and can be extremely effective in encouraging a full recovery post-injury. You can also use the band for general toning of muscles once you have recovered from your original injury, therefore, a good investment!', 'show', '2022-04-07 21:33:02', '2022-04-07 21:33:02'),
(20, 'Green tea', '/uploads/20220408_0306039481.jpeg', 'Green tea is packed full of health-promoting compounds. Regularly drinking green tea can help you lose weight and reduce your risk of several diseases, including diabetes, heart disease, and cancer. Drinking three to five cups of green tea per day seems to be optimal to reap the most health benefits.', 'show', '2022-04-07 21:36:03', '2022-04-07 21:36:03'),
(21, 'Kalonji seeds', '/uploads/20220408_0310507884.jpeg', 'Kalonji seeds have long been used in herbal medicine to treat a variety of diseases and conditions ranging from diabetes to arthritis (1Trusted Source).\r\nMore recently, the herb has gained popularity for its purported weight loss benefits.\r\nThis article explores whether kalonji can help you lose weight and provides an overview of its health benefits, safety, and side effects.', 'show', '2022-04-07 21:40:50', '2022-04-07 21:40:50');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `roal`, `created_at`, `updated_at`) VALUES
(1, 'jay', 'test@gmail.com', '1234567891', 'e10adc3949ba59abbe56e057f20f883e', '1', '2022-04-05 08:37:03', '2022-04-05 08:37:03'),
(5, 'ssdf', 'sdfsdf@dsf.fgghh', '12312323123', 'cf2dab70aa3b9481dbbbf9b206b80d5e', '2', '2022-04-05 22:40:20', '2022-04-05 22:40:20'),
(6, 'jay', 'test@gmail.com2', '1234567891', 'e10adc3949ba59abbe56e057f20f883e', '2', '2022-04-05 08:37:03', '2022-04-05 08:37:03'),
(7, 'jay', 'jay@jay.com', '123456789', 'e10adc3949ba59abbe56e057f20f883e', '2', '2022-04-07 03:12:18', '2022-04-07 03:12:18'),
(8, 'raj', 'raj@gmail.com', '9856317100', 'e10adc3949ba59abbe56e057f20f883e', '2', '2022-04-07 21:42:01', '2022-04-07 21:42:01');

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
