-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 07:05 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_minute_masti`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookiing_master`
--

CREATE TABLE `bookiing_master` (
  `bookiing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `is_payed` int(11) NOT NULL COMMENT 'payment done ?'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='booking master table. all record of booking';

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE `payment_master` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_payable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='payment_master table';

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE `room_master` (
  `room_no` varchar(255) NOT NULL,
  `room_type` int(11) NOT NULL COMMENT '0=simple,1=semi delux,2=delux',
  `charges` int(11) NOT NULL COMMENT 'room_charges',
  `availability` int(2) NOT NULL COMMENT '0=not booked,1=bookes',
  `bookiing_id` int(11) NOT NULL COMMENT 'booking_id if booked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='room_master table.all room details';

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL COMMENT 'user_id from user_master',
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user_details table';

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_contact` bigint(10) NOT NULL COMMENT 'user contact mobile',
  `user_password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=admin,2=user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='user login table';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookiing_master`
--
ALTER TABLE `bookiing_master`
  ADD PRIMARY KEY (`bookiing_id`);

--
-- Indexes for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookiing_master`
--
ALTER TABLE `bookiing_master`
  MODIFY `bookiing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_master`
--
ALTER TABLE `payment_master`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD CONSTRAINT `booking payment` FOREIGN KEY (`booking_id`) REFERENCES `bookiing_master` (`bookiing_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user payment link` FOREIGN KEY (`user_id`) REFERENCES `user_master` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user master link` FOREIGN KEY (`user_id`) REFERENCES `user_master` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
