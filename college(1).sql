-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2008 at 06:37 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--
CREATE DATABASE IF NOT EXISTS `college` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `college`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `sn` int(255) NOT NULL AUTO_INCREMENT,
  `document` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`sn`, `document`, `topic`, `department`, `user`) VALUES
(1, 'image/IMG_20161207_060747.jpg', 'family', 'kaiwart', ''),
(2, 'image/IMG_20161207_060747.jpg', 'family', 'kaiwart', ''),
(3, 'image/DownloadSanDiskSecureAccess_Mac.pdf', 'disk', 'student', ''),
(4, 'image/42E9as7NaTaAi4A6JcuFwG-320-80.jpg', 'fruits', 'ban', ''),
(5, 'image/675b41d63e974ae0b65ca7ac7fae991e1.jpg', 'flower', 'rose', ''),
(6, 'image/1713303.jpg', 'bheem', 'cartoon', 'nandeshwari'),
(7, 'image/form49a.pdf', 'Data structure', 'bsc', 'priyanka'),
(8, 'image/Happy-Diwali-Graphics-4.jpg', 'diwali', 'festival', 'priyanka'),
(9, 'image/0accb8900be02d51b688ce8bcab9c9cf.jpg', 'BORDER', 'CARTOON', 'priyanka'),
(10, 'image/jkjkhuuuuuuuuuuuuuut;fgf;dkflgjfdjkgslk6.jpg', 'SCHOOL', 'BAG', 'priyanka'),
(11, 'image/Chota Bheem Wallpapers (1)(1).jpg', 'cartun', 'pogo', 'priyanka'),
(12, 'image/&#2349;&#2379;&#2354;&#2366; &#2348;&#2368;&#2327;&#2337;&#2327;&#2375; &#2350;&#2351;&#2366;.mp4', 'song', 'MP4', 'nandeshwari');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `first_join_location` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `reg_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `image`, `dob`, `gender`, `first_join_location`, `institute`, `mobile`, `designation`, `Address`, `reg_date`) VALUES
(1, 'mohan', 'das', 'mohan23', 'mohn', 'mohan@gmail.com', '', '0000-00-00', 'male', 'raipur', 'csvtu', '0', 'raipur', 'yadav nager ', '2020-07-16 11:39:27.979228'),
(2, 'sohan', 'sahu', 'sohan23', 'sohan', 'sohan@gmail.com', '', '0000-00-00', 'male', 'Raijnandgaw', 'ggp', '0', 'Kashdol', 'ghadi chauk', '2020-07-16 11:56:59.393428'),
(3, 'rahim', 'khan', 'rahim45', 'rahim', 'rahim@gmail.com', '', '0000-00-00', 'male', 'bhilha', 'ggu', '', '', 'near old city', '2020-07-17 10:31:18.329365'),
(4, 'sonal', 'khan', 'sonia114', 'soaniaa', 'sonal@gmail.com', '', '0000-00-00', 'female', 'Raijnandgaw', 'ggu', '7485963214', 'Kashdol', 'near old city', '2020-07-17 10:41:19.158199'),
(5, 'g', 'dghs', 'sghs', 'sdf', 'fsdg@gmail.com', '', '0000-00-00', 'female', 'thgf', 'hgf', '563573', 'fgjhfgj', 'gfjrtgyheray', '2020-07-17 10:56:19.243945'),
(6, 'gsdg', 'sgfds', 'gfd', 'sdgfdsg', 'gsdfg@gmail.com', '', '0000-00-00', 'female', 'dsgds', 'dsg', '3243254365', 'dfjfgj', 'djuhjg', '2020-07-27 08:35:39.833493'),
(7, 'fdgfsd', 'fhfdsh', 'fdgfd', 'fgdg', 'hfjd@gmail.com', 'image/', '0000-00-00', 'male', 'fbhfd', 'fdbdf', '2345678906', 'rthjfgd', 'dfgfdshdfsh', '2020-07-27 09:01:43.502849'),
(8, 'sdgdsfg', 'sg', 'sdg', 'sdfgdsg', 'sdgsd@gmail.com', 'image/', '0000-00-00', 'female', 'dfds', 'sdg', '2345678890', 'fsg', 'ghrfhfds', '2020-07-27 09:17:12.722081'),
(9, 'gbfcbg', 'cfxbvcbx', 'bcvbcv', 'sgsdf', 'cxbcx@gmail.com', 'image/NO 2..jpg', '0000-00-00', 'male', 'cxbcv', 'cvbcvx', '1478596325', 'dfhfj', 'gjgfmkhbm', '2020-08-02 11:36:25.267901'),
(10, '', 'KAIWART', 'RJ2', 'RJ', 'RAJ@GMAIL.COM', 'image/SUMAN 001.jpg', '0000-00-00', 'male', 'BHIAI', 'CSVTU', '9993501815', 'TIFRA', 'WARD NO. 4 ', '2008-12-31 20:45:55.782972'),
(11, 'RAJ', 'KAIWART', 'RJ2', 'RJ123', 'RAJE@GMAIL.COM', 'image/', '0000-00-00', 'male', 'BHIAI', 'CSVTU', '7894563218', 'korba', 'WARD NO. 13 BILASPUR C.G. ', '2008-12-31 20:54:57.571924'),
(12, 'raj', 'kumar', 'raj111', 'rajk', 'rajkumar@gmail.com', 'image/Image.jpg', '0000-00-00', 'male', 'Raipur', 'D.p. clg', '9993501815', 'bilasput', 'Tifra', '2008-12-31 19:02:46.854582'),
(13, 'priyanka', 'kaiwartya', 'priyanka65', 'priy', 'soni@gmil.com', 'image/', '2020-09-15', 'female', 'raijnandgaw', 'csvtu', '7000677724', 'bilaspur', 'tifra bilaspur chhattisgarh', '2020-10-19 15:19:48.293281'),
(14, 'nandeshwari', 'kenwat', 'nan34', 'nandu', 'nandesh@gmail.com', 'image/beautiful-barbie-photos-5.jpg', '1978-06-05', 'female', 'sipat', 'NTPC', '9993501815', 'TIFRA', 'TIFRA BILASPUR CHHATTISGARH', '2020-08-25 14:33:31.037542');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
