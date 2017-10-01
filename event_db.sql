-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2017 at 11:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `date_sale_start` date NOT NULL,
  `date_sale_end` date NOT NULL,
  `no_tickets_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_event`
--

CREATE TABLE `register_event` (
  `petition_id` int(11) NOT NULL,
  `petition_status` enum('Active','Inactive') DEFAULT NULL,
  `petition_name` varchar(50) NOT NULL,
  `petition_details` text,
  `petition_date_start` date NOT NULL,
  `petition_date_end` date NOT NULL,
  `petition_category` enum('Appearance','Attraction','Retreat','Training','Concert','Conference','Convention','Gala','Festival','Competition','Meeting','Party','Rally','Screening','Seminar','Tour','Other') NOT NULL,
  `petition_venue` text NOT NULL,
  `petition_ticket_price` float NOT NULL,
  `petition_ticket_type` varchar(50) DEFAULT NULL,
  `total_no_tickets` int(11) NOT NULL,
  `petition_discount` float NOT NULL,
  `time_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `type` varchar(50) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `petition_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `contact_no` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_id`, `user_name`, `first_name`, `last_name`, `middle_initial`, `email`, `birthdate`, `gender`, `contact_no`) VALUES
(1, 'user', 'user', 'user', 'u', 'user@gmail.com', '1997-02-28', 'Male', '09234585212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `register_event`
--
ALTER TABLE `register_event`
  ADD PRIMARY KEY (`petition_id`),
  ADD KEY `register_event_fk1` (`user_id`),
  ADD KEY `register_event_fk2` (`event_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `ticket_fk1` (`event_id`),
  ADD KEY `ticket_fk2` (`petition_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register_event`
--
ALTER TABLE `register_event`
  MODIFY `petition_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `register_event`
--
ALTER TABLE `register_event`
  ADD CONSTRAINT `register_event_fk1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`account_id`),
  ADD CONSTRAINT `register_event_fk2` FOREIGN KEY (`event_id`) REFERENCES `event_info` (`event_id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_fk1` FOREIGN KEY (`event_id`) REFERENCES `event_info` (`event_id`),
  ADD CONSTRAINT `ticket_fk2` FOREIGN KEY (`petition_id`) REFERENCES `register_event` (`petition_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
