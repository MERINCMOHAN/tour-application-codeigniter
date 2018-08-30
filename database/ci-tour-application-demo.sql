-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2018 at 06:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-tour-application-demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `user_id`, `tour_id`) VALUES
(1, 1, 1),
(4, 1, 3),
(5, 11, 7),
(7, 11, 2),
(8, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`) VALUES
(1, 'Air conditioning'),
(2, 'Wifi'),
(3, 'Laptop friendly workspace'),
(4, 'Hangers'),
(5, 'Breakfast'),
(6, 'Chillwithfriend');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tour_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'Gujarat', 1),
(2, 'Rajasthan', 1),
(3, 'Alabama', 2),
(4, 'Arizona', 2),
(5, 'Kathmandu', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `features` varchar(100) NOT NULL,
  `arrival_time` varchar(50) DEFAULT NULL,
  `departure_time` varchar(50) DEFAULT NULL,
  `destination` int(11) NOT NULL,
  `departure` int(11) NOT NULL,
  `route` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `name`, `type`, `price`, `start_date`, `end_date`, `features`, `arrival_time`, `departure_time`, `destination`, `departure`, `route`, `image`) VALUES
(1, 'demo', 'Family Trip', 10000, '2018-03-13', '2018-03-20', '3', NULL, NULL, 5, 1, '1+12+5+6', ''),
(2, 'demo2', 'Wildlife', 5000, '2018-03-13', '2018-03-20', '1,4,3', NULL, NULL, 2, 1, 'Udaipur+Kumbalgarh+Chittorgarh', 'property-6.jpg'),
(7, 'demo', 'Family Trip', 1000, '2018-03-13', '2018-03-20', '5', NULL, NULL, 5, 1, 'route1 +route 2+route 3+route 4', 'property-2.jpg'),
(8, 'demo', 'Cruise', 120000, '2018-03-23', '2018-03-30', '1,5', NULL, NULL, 3, 5, 'route 4+route 3', 'property-42.jpg'),
(10, 'demo', 'Family Trip', 10000, '2018-03-29', '2018-03-29', '1,3', NULL, NULL, 1, 5, 'route 3+route 4', 'property-43.jpg'),
(15, 'mexi', 'Family Trip', -34, '2018-02-28', '2018-01-28', '4,3', NULL, NULL, 3, 3, 'maniya - message - misal', 'Fancy-ice-cream.jpg'),
(17, 'abcd', 'Family Trip', 15, '2018-03-22', '2018-03-26', '5', NULL, NULL, 1, 1, 'andy 123', '2_4_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `contact_no`) VALUES
(1, 'mmdhudasias', '123456', 'mmdhudasia@gmail.com', NULL),
(4, 'demo', 'demodemo', 'demo@demo.com', NULL),
(5, 'solwin', '123456', 'solwin@demo.com', NULL),
(8, 'ankita', '123456', 'mmdhudasia@gmail.co', NULL),
(9, 'ankita', '123456', 'demo@gmail.com', NULL),
(10, 'mahirkhan', 'abcd1234', 'admin@gmail.com', NULL),
(11, 'mahirkhan', 'abcd123', 'admin@yahoo.com', NULL),
(13, 'mmdhudasias', '123456', 'mmdhudasia@gmail.com', NULL),
(14, 'demo', 'demodemo', 'demo@demo.com', NULL),
(15, 'solwin', '123456', 'solwin@demo.com', NULL),
(16, 'ankita', '123456', 'mmdhudasia@gmail.co', NULL),
(17, 'ankita', '123456', 'demo@gmail.com', NULL),
(18, 'mahirkhan', 'abcd1234', 'admin@gmail.com', NULL),
(19, 'mahirkhan', 'abcd123', 'admin@yahoo.com', NULL),
(20, 'mmdhudasias', '123456', 'mmdhudasia@gmail.com', NULL),
(32765, 'krishna', '$2y$10$kiTHzUylBxyFVA/OdJbOO.tqV05T/e1084QEMAgWtnEO9atek13t2', 'panchalk6@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32766;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
