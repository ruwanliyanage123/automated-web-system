-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 08:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siyapatha`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `gender`, `address`, `email`, `phone`) VALUES
('A005', 'kamal', 'male', 'nuwara', 'kamal@gmail.com', '0772308521'),
('Q00111', 'kusum', 'male', 'aluthgema', 'pawan@gmail.com', '0772308521'),
('S005', 'janaka', 'female', 'gampaha', 'runi@gmail.com', '0772308523');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(10) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_type`, `item_price`) VALUES
('A0005', 'ggg', 'table', '100');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `item_id` varchar(10) NOT NULL,
  `client_id` varchar(10) NOT NULL,
  `quentity` int(100) NOT NULL,
  `date_of_issue` date NOT NULL,
  `date_of_delivered` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`item_id`, `client_id`, `quentity`, `date_of_issue`, `date_of_delivered`, `status`) VALUES
('A000', 'N111', 4, '2018-05-22', '2018-05-24', 'undelivered'),
('B111', 'D111', 4, '2018-05-20', '2018-05-23', 'delivered'),
('P777', 'G444', 3, '2018-05-28', '2018-05-30', 'undelivered'),
('Q111', 'U111', 2, '2018-05-18', '2018-05-19', 'delivered'),
('U111', 'A111', 4, '2018-05-20', '2018-05-21', 'undelivered');

-- --------------------------------------------------------

--
-- Table structure for table `siyapatha_login`
--

CREATE TABLE `siyapatha_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siyapatha_login`
--

INSERT INTO `siyapatha_login` (`username`, `password`) VALUES
('siyapatha', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `permission`, `branch`) VALUES
('klk', 'jkjk', 'showroomoperator', 'kandy'),
('liyanage', '12345', '1', 'administrator'),
('ruwan', '1234', '1', '2'),
('yuyuy', '152', 'sro', 'galle');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `siyapatha_login`
--
ALTER TABLE `siyapatha_login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
