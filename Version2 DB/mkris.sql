-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 04:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evt`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_load`
--

CREATE TABLE `card_load` (
  `card_id` int(11) NOT NULL,
  `card_code` varchar(20) NOT NULL,
  `card_amount` float NOT NULL DEFAULT '0',
  `card_active` binary(1) NOT NULL,
  `account_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_load`
--

INSERT INTO `card_load` (`card_id`, `card_code`, `card_amount`, `card_active`, `account_id`) VALUES
(1, '123', 100, 0x01, 1),
(2, '2525', 250, 0x01, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `events`
-- (See below for the actual view)
--
CREATE TABLE `events` (
`event_id` int(11)
,`event_date_start` datetime
,`event_date_end` datetime
,`event_status` enum('Pending','Approved','Rejected')
,`event_name` varchar(50)
,`event_details` text
,`event_category` enum('Appearance','Attraction','Retreat','Training','Concert','Conference','Convention','Gala','Festival','Competition','Meeting','Party','Rally','Screening','Seminar','Tour','Other')
,`event_venue` text
,`date_created` datetime
,`color` varchar(7)
,`user_id` int(11)
,`ticket_id` int(11)
,`ti_ticket_type_id` int(11)
,`tt_evt_id` int(11)
,`ticket_price` decimal(9,2)
,`ticket_type_id` int(11)
,`ticket_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(11) NOT NULL,
  `event_date_start` datetime NOT NULL,
  `event_date_end` datetime NOT NULL,
  `event_status` enum('Pending','Approved','Rejected') DEFAULT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_details` text,
  `event_category` enum('Appearance','Attraction','Retreat','Training','Concert','Conference','Convention','Gala','Festival','Competition','Meeting','Party','Rally','Screening','Seminar','Tour','Other') NOT NULL,
  `event_venue` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `color` varchar(7) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `event_date_start`, `event_date_end`, `event_status`, `event_name`, `event_details`, `event_category`, `event_venue`, `date_created`, `color`, `user_id`) VALUES
(15, '2017-12-11 00:00:00', '2017-12-20 00:00:00', 'Pending', 'xx', 'xxdetails', 'Appearance', 'xx venue', '2017-12-05 11:33:49', 'yellow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ti_ticket_type_id` int(11) DEFAULT NULL,
  `tt_evt_id` int(11) NOT NULL,
  `ticket_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ti_ticket_type_id`, `tt_evt_id`, `ticket_price`) VALUES
(11, 17, 15, '2000.00'),
(12, 18, 15, '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_type`
--

CREATE TABLE `ticket_type` (
  `ticket_type_id` int(11) NOT NULL,
  `ticket_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_type`
--

INSERT INTO `ticket_type` (`ticket_type_id`, `ticket_name`) VALUES
(17, 'Premium'),
(18, 'Gold'),
(19, 'Silver'),
(20, 'Bronze');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` enum('Regular','Admin','Superadmin','') NOT NULL,
  `user_status` enum('Active','Banned') NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `contact_no` varchar(16) DEFAULT NULL,
  `load_amt` float NOT NULL DEFAULT '0',
  `date_account_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_id`, `user_name`, `password`, `user_type`, `user_status`, `first_name`, `last_name`, `middle_initial`, `email`, `birthdate`, `gender`, `contact_no`, `load_amt`, `date_account_created`) VALUES
(1, 'user', 'user', 'Admin', 'Active', 'user', 'user', 'u', 'user@gmail.com', '1998-08-17', 'Male', '09254815798', 650, '2017-08-16 00:00:00'),
(2, 'test', '123qweasd', 'Regular', 'Banned', 'testq', 'test', 't', 'jen@gmail.com', '0000-00-00', 'Female', '0999999999', 0, '2017-10-02 01:21:21'),
(3, 'sep', 'sepxx', 'Regular', 'Active', 'Josephxx', 'Entomaxx', 'A', 'seppjooo@gmail.com', '2017-10-17', 'Other', '09323770455', 0, '2017-10-02 14:36:56'),
(4, 'bis', 'bis', 'Regular', 'Active', 'Yves', 'Libunao', 'O', 'yves@gmail.com', '2017-10-02', 'Female', '0923585454', 0, '2017-10-02 15:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_event_preference`
--

CREATE TABLE `user_event_preference` (
  `user_event_preference_id` int(11) NOT NULL,
  `preference_date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_event_preference`
--

INSERT INTO `user_event_preference` (`user_event_preference_id`, `preference_date`, `user_id`, `event_id`) VALUES
(1, '2017-10-02 05:13:22', 1, 1);

-- --------------------------------------------------------

--
-- Structure for view `events`
--
DROP TABLE IF EXISTS `events`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `events`  AS  select `event_info`.`event_id` AS `event_id`,`event_info`.`event_date_start` AS `event_date_start`,`event_info`.`event_date_end` AS `event_date_end`,`event_info`.`event_status` AS `event_status`,`event_info`.`event_name` AS `event_name`,`event_info`.`event_details` AS `event_details`,`event_info`.`event_category` AS `event_category`,`event_info`.`event_venue` AS `event_venue`,`event_info`.`date_created` AS `date_created`,`event_info`.`color` AS `color`,`event_info`.`user_id` AS `user_id`,`ticket`.`ticket_id` AS `ticket_id`,`ticket`.`ti_ticket_type_id` AS `ti_ticket_type_id`,`ticket`.`tt_evt_id` AS `tt_evt_id`,`ticket`.`ticket_price` AS `ticket_price`,`ticket_type`.`ticket_type_id` AS `ticket_type_id`,`ticket_type`.`ticket_name` AS `ticket_name` from ((`event_info` join `ticket` on((`event_info`.`event_id` = `ticket`.`tt_evt_id`))) join `ticket_type` on((`ticket_type`.`ticket_type_id` = `ticket`.`ti_ticket_type_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_load`
--
ALTER TABLE `card_load`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `card_load_fk` (`account_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket_type`
--
ALTER TABLE `ticket_type`
  ADD PRIMARY KEY (`ticket_type_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `user_event_preference`
--
ALTER TABLE `user_event_preference`
  ADD PRIMARY KEY (`user_event_preference_id`),
  ADD KEY `user_event_preference_fk1` (`user_id`),
  ADD KEY `user_event_preference_fk2` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_load`
--
ALTER TABLE `card_load`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ticket_type`
--
ALTER TABLE `ticket_type`
  MODIFY `ticket_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_event_preference`
--
ALTER TABLE `user_event_preference`
  MODIFY `user_event_preference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card_load`
--
ALTER TABLE `card_load`
  ADD CONSTRAINT `card_load_fk` FOREIGN KEY (`account_id`) REFERENCES `user_account` (`account_id`);

--
-- Constraints for table `user_event_preference`
--
ALTER TABLE `user_event_preference`
  ADD CONSTRAINT `user_event_preference_fk1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`account_id`),
  ADD CONSTRAINT `user_event_preference_fk2` FOREIGN KEY (`event_id`) REFERENCES `event_info` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
