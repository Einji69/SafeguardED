-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2024 at 12:03 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_name` varchar(1000) NOT NULL,
  `hissue` varchar(255) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_joined` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_id`, `image_name`, `hissue`, `description`, `date_joined`) VALUES
(17, '128', '1720143753_Physics.jpg', '', '', '0000-00-00 00:00:00'),
(16, '128', '1720115485_Inte.jpg', '', '', '0000-00-00 00:00:00'),
(15, '129', '1720114875_Arch.jpg', '', '', '0000-00-00 00:00:00'),
(14, '128', '1720085171_Cult.jpg', '', '', '0000-00-00 00:00:00'),
(18, '124', '1720155609_Stat.jpg', '', '', '0000-00-00 00:00:00'),
(20, '128', '1720202913_Econ.jpg', '', '', '0000-00-00 00:00:00'),
(21, '128', '1720203332_Psyc.jpg', 'Psychology', '', '0000-00-00 00:00:00'),
(22, '130', '1720203814_Econ.jpg', 'Econ', '', '0000-00-00 00:00:00'),
(23, '131', '1720319871_Cult.jpg', 'xxx', '', '0000-00-00 00:00:00'),
(24, '130', '1720322912_1716662878wp5858358.jpg', 'nana', '', '0000-00-00 00:00:00'),
(25, '133', '1720323145_Econ.jpg', 'Econ', '', '0000-00-00 00:00:00'),
(26, '133', '1720323889_IMG_20240104_120957.jpg', 'Acute Tonsilitis', '', '0000-00-00 00:00:00'),
(27, '137', '1721365117_Physics.jpg', 'physics', '', '0000-00-00 00:00:00'),
(28, '131', '1721366077_Econ.jpg', 'Pera', '', '2024-07-19 00:00:00'),
(29, '133', '1722166053_Cat.png', 'Hika', '', '2024-07-28 19:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `date_created`) VALUES
(1, 1680993034, 530078857, 'hi', '0000-00-00 00:00:00'),
(2, 530078857, 1680993034, 'Halo', '0000-00-00 00:00:00'),
(3, 1680993034, 530078857, 'yo', '0000-00-00 00:00:00'),
(4, 530078857, 1615239475, 'hi', '0000-00-00 00:00:00'),
(5, 1680993034, 1615239475, 'yo', '0000-00-00 00:00:00'),
(6, 861972362, 1680993034, 'yo', '0000-00-00 00:00:00'),
(7, 1680993034, 861972362, 'apay', '0000-00-00 00:00:00'),
(8, 1680993034, 861972362, 'anya', '0000-00-00 00:00:00'),
(9, 861972362, 1680993034, 'ket', '0000-00-00 00:00:00'),
(10, 1680993034, 1615239475, 'hi', '0000-00-00 00:00:00'),
(11, 861972362, 1615239475, 'whatsup', '0000-00-00 00:00:00'),
(12, 861972362, 1615239475, '9', '0000-00-00 00:00:00'),
(13, 1680993034, 1615239475, 'yo', '0000-00-00 00:00:00'),
(14, 1615239475, 861972362, 'yo', '0000-00-00 00:00:00'),
(15, 1486923652, 1680993034, 'meron?', '0000-00-00 00:00:00'),
(16, 1680993034, 1486923652, 'tapos?', '0000-00-00 00:00:00'),
(17, 1486923652, 1680993034, 'un lng haha', '0000-00-00 00:00:00'),
(18, 1486923652, 1680993034, 'http://kimmykimboy-58383.portmap.host:58383/pharmacy/login.php', '0000-00-00 00:00:00'),
(19, 1486923652, 1680993034, 'http://kimmykimboy-58383.portmap.host:58383/pharmacy/login.php', '0000-00-00 00:00:00'),
(20, 861972362, 1127081663, 'yow', '0000-00-00 00:00:00'),
(21, 1680993034, 861972362, 'Luh', '0000-00-00 00:00:00'),
(22, 861972362, 1680993034, 'ket baket', '0000-00-00 00:00:00'),
(23, 861972362, 1680993034, 'char', '0000-00-00 00:00:00'),
(24, 1680993034, 861972362, 'Charot', '0000-00-00 00:00:00'),
(25, 1680993034, 861972362, 'Talks?', '0000-00-00 00:00:00'),
(26, 1530765104, 861972362, 'Haha', '0000-00-00 00:00:00'),
(27, 861972362, 1530765104, 'Lol', '0000-00-00 00:00:00'),
(28, 1530765104, 861972362, 'Haha', '0000-00-00 00:00:00'),
(29, 1530765104, 1680993034, 'lol', '0000-00-00 00:00:00'),
(30, 1530765104, 861972362, 'Com ', '0000-00-00 00:00:00'),
(31, 245747545, 1680993034, 'ket', '0000-00-00 00:00:00'),
(32, 861972362, 1680993034, 'haha', '0000-00-00 00:00:00'),
(33, 1530765104, 1680993034, 'lol', '2024-07-28 17:46:55'),
(34, 245747545, 1680993034, 'luh', '2024-07-28 17:59:53'),
(35, 1530765104, 861972362, 'Ke\'', '2024-07-28 19:39:46'),
(36, 1680993034, 861972362, 'Ke\'', '2024-07-28 19:40:26'),
(37, 1680993034, 861972362, 'Ror', '2024-07-28 19:48:28'),
(38, 1680993034, 861972362, 'Rar', '2024-07-28 19:48:36'),
(39, 1680993034, 861972362, 'Hey ', '2024-07-28 19:53:51'),
(40, 245747545, 1680993034, 'We', '2024-07-28 22:40:03'),
(41, 1680993034, 861972362, 'May bug', '2024-07-29 18:21:07'),
(42, 861972362, 1680993034, 'oo meron', '2024-07-29 18:21:26'),
(43, 861972362, 1680993034, 'Dapat kapag pinindut ung isang user automatic na mag click sa screen para scrollable', '2024-07-29 18:28:27'),
(44, 1680993034, 861972362, 'Or dapat every time na nasa page automatic mag click by one time', '2024-07-29 20:12:40'),
(45, 1680993034, 861972362, '.', '2024-07-29 20:42:45'),
(46, 1680993034, 861972362, 'At Kalahari every time since naman na mag type bumabalik said dati', '2024-07-29 20:43:28'),
(47, 1680993034, 861972362, 'Kaya every after sending dapat on click din sa space', '2024-07-29 20:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `studentsreg`
--

DROP TABLE IF EXISTS `studentsreg`;
CREATE TABLE IF NOT EXISTS `studentsreg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `studentno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course` varchar(10) NOT NULL,
  `yrlevel` varchar(10) NOT NULL,
  `date_joined` date NOT NULL,
  `hissue1` varchar(50) NOT NULL,
  `hissue2` varchar(50) NOT NULL,
  `hissue3` varchar(50) NOT NULL,
  `hissue4` varchar(50) NOT NULL,
  `hissue5` varchar(50) NOT NULL,
  `hissue6` varchar(50) NOT NULL,
  `hissue7` varchar(50) NOT NULL,
  `hissue8` varchar(50) NOT NULL,
  `sect` varchar(10) NOT NULL,
  `medcert` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sex` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `image_name1` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image_name2` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image_name3` varchar(1000) NOT NULL,
  `image_name4` varchar(1000) NOT NULL,
  `image_name5` varchar(1000) NOT NULL,
  `image_name6` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentsreg`
--

INSERT INTO `studentsreg` (`id`, `studentno`, `firstname`, `lastname`, `course`, `yrlevel`, `date_joined`, `hissue1`, `hissue2`, `hissue3`, `hissue4`, `hissue5`, `hissue6`, `hissue7`, `hissue8`, `sect`, `medcert`, `sex`, `height`, `weight`, `image_name1`, `image_name2`, `image_name3`, `image_name4`, `image_name5`, `image_name6`) VALUES
(130, 'R55', 'Chou', 'ML', 'BSBA', '1st year', '2024-07-06', 'Stat', 'soci', 'phil', 'cult', 'pscho', 'Soci', '', '', '1A', '1720203654_Comp.jpg', 'Male', '', '', '1720203654_Stat.jpg', '1720203654_Soci.jpg', '1720203654_Phil.jpg', '1720203654_Cult.jpg', '1720203654_Psyc.jpg', '1720203654_Soci.jpg'),
(131, 'tr332', 'sw', 'q', 'BSBA', '1st year', '2024-07-07', '', '', '', '', '', '', '', '', '1A', '1720319858_Cult.jpg', 'Male', '', '', '', '', '', '', '', ''),
(133, '10981', 'Lee', 'Barangan', 'BSBA', '3rd year', '2024-07-07', '', '', '', '', '', '', '', '', '3a', '1720323029_1716989999Psyc.jpg', 'Male', '', '', '', '', '', '', '', ''),
(134, 'T-0981', 'Jasmine', 'Huan', 'BSBA', '1st year', '2024-07-12', '', '', '', '', '', '', '', '', '1B', '', 'Female', '', '', '', '', '', '', '', ''),
(135, 'I-0972', 'Kim Adrian', 'Barangan', 'BSIT', '3rd year', '2024-07-13', '', '', '', '', '', '', '', '', '3A', '1720852905_Ling.jpg', 'Male', '', '', '', '', '', '', '', ''),
(137, 'P-0912', 'John', 'Barangan', 'BSCE', '1st year', '2024-07-19', '', '', '', '', '', '', '', '', '1A', '1721365088_Math.jpg', 'Male', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `usertype` enum('admin','analyst','superadmin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `usertype`) VALUES
(1, 1680993034, 'Kim Adrian Nisperos', 'Barangan', 'barangankimadrian@gmail.com', '5d97e86aa4994811765dfc4cd1f81d29', '1716663433wp6195755-cyberpunk-4k-wallpapers.jpg', 'Offline now', 'superadmin'),
(4, 861972362, 'Hev', 'High', 'Admin@gmail.com', '5d97e86aa4994811765dfc4cd1f81d29', '1716989999Psyc.jpg', 'Active now', 'admin'),
(5, 1486923652, 'Carl Jian', 'Lopez', 'carlcarljian@gmail.com', 'a062f61a55f8b886b40c59d1a78b1e87', '1720840375images (6).jpeg', 'Active now', 'analyst'),
(7, 1127081663, 'Joshua', 'Cabradilla', 'joshuacabrailla009897@gmail.com', 'e329bcebbd3820b3e553ce86c99645e7', '1721569794diwowow.jpg', 'Active now', 'admin'),
(8, 1065617619, 'Joshua', 'Cabradilla', 'ankokuyoru1@gmail.com', 'e329bcebbd3820b3e553ce86c99645e7', '1721570048Snapchat-588535571.jpg', 'Active now', 'analyst'),
(12, 245747545, 'Kim', 'Bar', 'kimadriann.barangan@gmail.com', '5d97e86aa4994811765dfc4cd1f81d29', '1722059979fotor-ai-20240609163312.jpg', 'Active now', 'admin'),
(13, 505877732, 'Nana', 'ML', 'l@gmail.com', '5d97e86aa4994811765dfc4cd1f81d29', '1722061926Sample1.png', 'New entry', 'admin'),
(14, 1530765104, 'Tanjiro', 'Kamado', 'DS@gmail.com', '5d97e86aa4994811765dfc4cd1f81d29', '17220677611717423051_16 kimetsu no yaiba new (39).jpg', 'Offline now', 'analyst');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
