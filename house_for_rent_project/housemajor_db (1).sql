-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 04:13 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housemajor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Residential/Guest house'),
(2, 'commercial'),
(3, 'house of passage'),
(4, 'apartments/hotels'),
(5, 'office');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `main` varchar(100) DEFAULT NULL,
  `postid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `main`, `postid`) VALUES
(1, 'issa.jpg', 'yes', 1),
(2, '(\'math.jpg\',(\'mtn.png\',(\'mukwiye1.jpg\',(\'onlinelearning.jpg\'', 'no', 1),
(3, 'l.jpg', 'yes', NULL),
(4, '(\'education.png\',(\'finance.jpg\',(\'french.jpg\',(\'grad&edu.jpg\',(\'history.jpg\'', 'no', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `paymentmethod` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `paydate` datetime DEFAULT NULL,
  `post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `paymentMethodId` int(11) NOT NULL,
  `paymentName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` enum('taken','available','waiting') DEFAULT NULL,
  `discription` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `livingroom` int(11) DEFAULT '0',
  `bedrooms` int(11) DEFAULT '0',
  `indore` int(11) DEFAULT '0',
  `outdore` int(11) DEFAULT '0',
  `features` varchar(100) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `nego` enum('yes','no') DEFAULT 'no',
  `usercode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `status`, `discription`, `address`, `postdate`, `livingroom`, `bedrooms`, `indore`, `outdore`, `features`, `category`, `nego`, `usercode`) VALUES
(1, 'house for rent', 'available', 'sdfgd  ', '', '2019-09-21 11:35:32', 1, 2, 2, 2, 'on', 3, 'yes', 1),
(2, 'amano', 'available', '      edfgh', '', '2019-09-21 19:27:41', 12, 3, 2, 2, 'on', 2, 'no', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `sector` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` enum('admin','advert') DEFAULT NULL,
  `approved` enum('-1','1') DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `sector`, `district`, `username`, `password`, `type`, `approved`) VALUES
(1, 'nshimiyimana', 'amani', 'nshimiyimana@gmail.com', 123, 'rwezamenyo', 'nyarugenge', 'amani', '123', 'advert', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`paymentMethodId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `paymentMethodId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
