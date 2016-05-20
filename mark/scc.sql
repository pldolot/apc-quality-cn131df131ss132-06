-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2016 at 05:10 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scc`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `created_at`, `user_id`) VALUES
('admin', '2016-04-13 00:00:00', 3),
('create-employee', '2016-04-13 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'super user', NULL, NULL, '2016-04-13 00:00:00', '2016-04-13 00:00:00'),
('create-employee', 1, 'allows a user to add a employee', NULL, NULL, NULL, NULL),
('create-profile', 1, 'allows a user to create a profile', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'create-employee'),
('admin', 'create-profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay`, `district_id`) VALUES
(4, 'Barangay Poblacion', 4),
(5, 'Barangay 1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `case_has_case_status`
--

CREATE TABLE IF NOT EXISTS `case_has_case_status` (
  `case_has_case_status_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `case_status_id` int(11) NOT NULL,
  `case_date_time` datetime DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE IF NOT EXISTS `case_status` (
  `case_status_id` int(11) NOT NULL,
  `case_status_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_status`
--

INSERT INTO `case_status` (`case_status_id`, `case_status_name`) VALUES
(1, 'Open'),
(2, 'Close');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Software'),
(2, 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) DEFAULT NULL,
  `municipality_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `municipality_id`) VALUES
(4, 'District 1', 4),
(5, 'District 4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` int(11) NOT NULL,
  `id_number` varchar(15) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `position_id` int(11) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `id_number`, `firstname`, `lastname`, `middlename`, `position_id`, `sex`, `user_id`, `employee_status`) VALUES
(25, '20160520-0', 'admin', 'admin', 'admin', 11, 'Male', 22, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `island_group`
--

CREATE TABLE IF NOT EXISTS `island_group` (
  `island_id` int(11) NOT NULL,
  `island_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `island_group`
--

INSERT INTO `island_group` (`island_id`, `island_name`) VALUES
(4, 'Luzon'),
(5, 'Visayas'),
(6, 'Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `issue_id` int(11) NOT NULL,
  `issue_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `issue_name`) VALUES
(1, 'Environmental'),
(2, 'Technical');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `municipal_city`
--

CREATE TABLE IF NOT EXISTS `municipal_city` (
  `municipality_id` int(11) NOT NULL,
  `municipality_name` varchar(100) DEFAULT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `municipal_city`
--

INSERT INTO `municipal_city` (`municipality_id`, `municipality_name`, `province_id`) VALUES
(4, 'San Fernando', 5),
(5, 'San Andres Municipality', 4);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(11, 'Administrator'),
(12, 'HR Manager'),
(13, 'Agent'),
(14, 'Team Leader'),
(15, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `precinct`
--

CREATE TABLE IF NOT EXISTS `precinct` (
  `precinct_id` int(11) NOT NULL,
  `precinctnumber` varchar(45) DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `precinct`
--

INSERT INTO `precinct` (`precinct_id`, `precinctnumber`, `school_id`) VALUES
(2, '99901', 4),
(3, '09291', 5);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `profile_id` int(11) NOT NULL,
  `profilenumber` varchar(45) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `profile_firstname` varchar(45) DEFAULT NULL,
  `profile_middlename` varchar(45) DEFAULT NULL,
  `profile_lastname` varchar(45) DEFAULT NULL,
  `profile_picture` blob,
  `gsis` varchar(45) DEFAULT NULL,
  `sss` varchar(45) DEFAULT NULL,
  `precinct_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `mothers_maiden_name` varchar(45) NOT NULL,
  `p_sex` enum('Male','Female') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) DEFAULT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `region_id`) VALUES
(4, 'San Andres Quezon', 6),
(5, 'Antique', 5);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(45) NOT NULL,
  `island_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `island_id`) VALUES
(5, 'Region III', 4),
(6, 'Region IV-A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `scc_case`
--

CREATE TABLE IF NOT EXISTS `scc_case` (
  `case_id` int(11) NOT NULL,
  `casenumber` varchar(45) NOT NULL,
  `c_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `case_status_id` int(1) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `barangay_id`) VALUES
(4, 'San Juan Elementary School', 4),
(5, 'Camflora Nationa High School', 5),
(6, 'San andres Central Elementary School', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`) VALUES
(1, 'No Boot'),
(2, 'USB Port Broker');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticketnumber` varchar(45) NOT NULL,
  `t_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `case_id` int(11) NOT NULL,
  `ticket_notes` text,
  `ticket_name` varchar(45) NOT NULL,
  `ticket_status_id` int(11) NOT NULL,
  `t_created_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_has_ticket_status`
--

CREATE TABLE IF NOT EXISTS `ticket_has_ticket_status` (
  `ticket_has_ticket_status_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `ticket_status_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE IF NOT EXISTS `ticket_status` (
  `ticket_status_id` int(11) NOT NULL,
  `ticket_status_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`ticket_status_id`, `ticket_status_name`) VALUES
(1, 'Open'),
(2, 'Close'),
(3, 'Close Unresolve');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'BEI'),
(2, 'BOC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password_hash`, `email`) VALUES
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`),
  ADD UNIQUE KEY `barangay_id_UNIQUE` (`barangay_id`),
  ADD KEY `fk_barangay_district_idx` (`district_id`);

--
-- Indexes for table `case_has_case_status`
--
ALTER TABLE `case_has_case_status`
  ADD PRIMARY KEY (`case_has_case_status_id`),
  ADD UNIQUE KEY `case_has_case_status_id_UNIQUE` (`case_has_case_status_id`),
  ADD KEY `fk_case_has_case_status_case_status1_idx` (`case_status_id`),
  ADD KEY `fk_case_has_case_status_case1_idx` (`case_id`),
  ADD KEY `fk_case_has_case_status_employee1_idx` (`employee_id`);

--
-- Indexes for table `case_status`
--
ALTER TABLE `case_status`
  ADD PRIMARY KEY (`case_status_id`),
  ADD UNIQUE KEY `case_status_id_UNIQUE` (`case_status_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id_UNIQUE` (`category_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD UNIQUE KEY `district_id_UNIQUE` (`district_id`),
  ADD KEY `fk_district_municipal1_idx` (`municipality_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `idemployee_UNIQUE` (`employee_id`),
  ADD UNIQUE KEY `employee_number_UNIQUE` (`id_number`),
  ADD KEY `fk_employee_position1_idx` (`position_id`),
  ADD KEY `fk_employee_user1_idx` (`user_id`);

--
-- Indexes for table `island_group`
--
ALTER TABLE `island_group`
  ADD PRIMARY KEY (`island_id`),
  ADD UNIQUE KEY `national_id_UNIQUE` (`island_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`issue_id`),
  ADD UNIQUE KEY `issue_id` (`issue_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `municipal_city`
--
ALTER TABLE `municipal_city`
  ADD PRIMARY KEY (`municipality_id`),
  ADD UNIQUE KEY `municipality_id_UNIQUE` (`municipality_id`),
  ADD KEY `fk_municipal_province1_idx` (`province_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`),
  ADD UNIQUE KEY `position_id_UNIQUE` (`position_id`);

--
-- Indexes for table `precinct`
--
ALTER TABLE `precinct`
  ADD PRIMARY KEY (`precinct_id`),
  ADD UNIQUE KEY `idprecinct_UNIQUE` (`precinct_id`),
  ADD KEY `fk_precinct_school1_idx` (`school_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD UNIQUE KEY `profile_id_UNIQUE` (`profile_id`),
  ADD UNIQUE KEY `profilenumber_UNIQUE` (`profilenumber`),
  ADD UNIQUE KEY `phonenumber_UNIQUE` (`phonenumber`),
  ADD KEY `fk_profile_precinct1_idx` (`precinct_id`),
  ADD KEY `fk_profile_type1_idx` (`type_id`),
  ADD KEY `fk_profile_employee1_idx` (`employee_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`province_id`),
  ADD UNIQUE KEY `province_id_UNIQUE` (`province_id`),
  ADD KEY `fk_province_region1_idx` (`region_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`),
  ADD UNIQUE KEY `region_id_UNIQUE` (`region_id`),
  ADD KEY `fk_region_island_group1_idx` (`island_id`);

--
-- Indexes for table `scc_case`
--
ALTER TABLE `scc_case`
  ADD PRIMARY KEY (`case_id`),
  ADD UNIQUE KEY `case_id_UNIQUE` (`case_id`),
  ADD UNIQUE KEY `casenumber_UNIQUE` (`casenumber`),
  ADD KEY `fk_case_profile1_idx` (`profile_id`),
  ADD KEY `fk_scc_case_Category1_idx` (`category_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_id_UNIQUE` (`school_id`),
  ADD KEY `fk_school_barangay1_idx` (`barangay_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`),
  ADD UNIQUE KEY `ticket_id_UNIQUE` (`ticket_id`),
  ADD UNIQUE KEY `ticketnumber_UNIQUE` (`ticketnumber`),
  ADD KEY `fk_ticket_case1_idx` (`case_id`);

--
-- Indexes for table `ticket_has_ticket_status`
--
ALTER TABLE `ticket_has_ticket_status`
  ADD PRIMARY KEY (`ticket_has_ticket_status_id`),
  ADD UNIQUE KEY `ticket_has_ticket_status_id_UNIQUE` (`ticket_has_ticket_status_id`),
  ADD KEY `fk_ticket_has_ticket_status_ticket_status1_idx` (`ticket_status_id`),
  ADD KEY `fk_ticket_has_ticket_status_ticket1_idx` (`ticket_id`),
  ADD KEY `fk_ticket_has_ticket_status_employee1_idx` (`employee_id`);

--
-- Indexes for table `ticket_status`
--
ALTER TABLE `ticket_status`
  ADD PRIMARY KEY (`ticket_status_id`),
  ADD UNIQUE KEY `ticket_status_id_UNIQUE` (`ticket_status_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_id_UNIQUE` (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `case_has_case_status`
--
ALTER TABLE `case_has_case_status`
  MODIFY `case_has_case_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `case_status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `island_group`
--
ALTER TABLE `island_group`
  MODIFY `island_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `municipal_city`
--
ALTER TABLE `municipal_city`
  MODIFY `municipality_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `precinct`
--
ALTER TABLE `precinct`
  MODIFY `precinct_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `scc_case`
--
ALTER TABLE `scc_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `ticket_has_ticket_status`
--
ALTER TABLE `ticket_has_ticket_status`
  MODIFY `ticket_has_ticket_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
  MODIFY `ticket_status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barangay`
--
ALTER TABLE `barangay`
  ADD CONSTRAINT `fk_barangay_district` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `case_has_case_status`
--
ALTER TABLE `case_has_case_status`
  ADD CONSTRAINT `fk_case_has_case_status_case1` FOREIGN KEY (`case_id`) REFERENCES `scc_case` (`case_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_case_has_case_status_case_status1` FOREIGN KEY (`case_status_id`) REFERENCES `case_status` (`case_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_case_has_case_status_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `fk_district_municipal1` FOREIGN KEY (`municipality_id`) REFERENCES `municipal_city` (`municipality_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk_employee_position1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `municipal_city`
--
ALTER TABLE `municipal_city`
  ADD CONSTRAINT `fk_municipal_province1` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `precinct`
--
ALTER TABLE `precinct`
  ADD CONSTRAINT `fk_precinct_school1` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_precinct1` FOREIGN KEY (`precinct_id`) REFERENCES `precinct` (`precinct_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_type1` FOREIGN KEY (`type_id`) REFERENCES `type` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `fk_province_region1` FOREIGN KEY (`region_id`) REFERENCES `region` (`region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `fk_region_island_group1` FOREIGN KEY (`island_id`) REFERENCES `island_group` (`island_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `scc_case`
--
ALTER TABLE `scc_case`
  ADD CONSTRAINT `fk_scc_case_Category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `fk_school_barangay1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_case1` FOREIGN KEY (`case_id`) REFERENCES `scc_case` (`case_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_has_ticket_status`
--
ALTER TABLE `ticket_has_ticket_status`
  ADD CONSTRAINT `fk_ticket_has_ticket_status_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_has_ticket_status_ticket1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_has_ticket_status_ticket_status1` FOREIGN KEY (`ticket_status_id`) REFERENCES `ticket_status` (`ticket_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
