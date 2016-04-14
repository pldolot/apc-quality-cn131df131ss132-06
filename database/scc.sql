-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2016 at 01:54 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scc`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `assignment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`assignment_id`, `created_at`, `item_name`, `item_id`, `user_id`) VALUES
(2, NULL, 'Create Employee', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `data` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rule_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`item_id`, `name`, `type`, `description`, `data`, `created_at`, `updated_at`, `rule_id`) VALUES
(2, 'create-employee', 1, 'allows a user to add a employee', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `child_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `rule_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `data` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`rule_id`, `name`, `data`, `created_at`, `updated_at`) VALUES
(1, 'adding employee', 'form for adding the employee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int(11) NOT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay`, `district_id`) VALUES
(1, 'Barangay Poblacion', 1),
(2, 'Barangay 1', 2),
(3, 'Barangay 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `case_has_case_status`
--

CREATE TABLE IF NOT EXISTS `case_has_case_status` (
  `case_has_case_status_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `case_status_id` int(11) NOT NULL,
  `case_date_time` datetime(6) DEFAULT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `case_status`
--

CREATE TABLE IF NOT EXISTS `case_status` (
  `case_status_id` int(11) NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `subcategory_name` varchar(45) DEFAULT NULL,
  `issue_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `subcategory_name`, `issue_type`) VALUES
(1, 'hardware', 'bla', 'bla');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(100) DEFAULT NULL,
  `municipality_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `municipality_id`) VALUES
(1, 'District 1', 1),
(2, 'District 4', 2),
(3, 'District 5', 3);

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
  `user_id` int(11) NOT NULL,
  `sex` enum('Male','Female') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `id_number`, `firstname`, `lastname`, `middlename`, `position_id`, `user_id`, `sex`) VALUES
(6, '2013-100203', 'Mark Jerome', 'Rivera', 'Pepito', 6, 1, ''),
(7, '2013-100204', 'Patrick Vonn', 'Dolot', 'Labasbas', 8, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `island_group`
--

CREATE TABLE IF NOT EXISTS `island_group` (
  `island_id` int(11) NOT NULL,
  `island_name` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `island_group`
--

INSERT INTO `island_group` (`island_id`, `island_name`) VALUES
(1, 'Luzon'),
(2, 'Visayas'),
(3, 'Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1459871057),
('m130524_201442_init', 1459871059);

-- --------------------------------------------------------

--
-- Table structure for table `municipal_city`
--

CREATE TABLE IF NOT EXISTS `municipal_city` (
  `municipality_id` int(11) NOT NULL,
  `municipality_name` varchar(100) DEFAULT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `municipal_city`
--

INSERT INTO `municipal_city` (`municipality_id`, `municipality_name`, `province_id`) VALUES
(1, 'Dangalas', 1),
(2, 'Barbaza', 2),
(3, 'Balabagan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(6, 'Administrator'),
(7, 'Agent'),
(8, 'Team Leader'),
(9, 'HR Manager'),
(10, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `precinct`
--

CREATE TABLE IF NOT EXISTS `precinct` (
  `precinct_id` int(11) NOT NULL,
  `precinctnumber` varchar(45) DEFAULT NULL,
  `school_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `precinct`
--

INSERT INTO `precinct` (`precinct_id`, `precinctnumber`, `school_id`) VALUES
(1, '1001', 1);

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
  `sex` enum('Male','Female') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profilenumber`, `phonenumber`, `profile_firstname`, `profile_middlename`, `profile_lastname`, `profile_picture`, `gsis`, `sss`, `precinct_id`, `type_id`, `employee_id`, `mothers_maiden_name`, `sex`) VALUES
(2, '100-001', '09078481333', 'Krashielle', 'Aurellana', 'Rosales', '', '0028387483', '', 1, 1, 7, 'Aurellana', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(100) DEFAULT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_id`, `province_name`, `region_id`) VALUES
(1, 'ABRA', 1),
(2, 'Antique', 2),
(3, 'Lanao del Sur', 3);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(45) NOT NULL,
  `island_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `island_id`) VALUES
(1, 'CAR (Cordillera Administrative Region)', 1),
(2, 'Region VI', 2),
(3, 'ARMM (Autonomous Region of Muslim Mindanao', 3),
(4, 'Region III', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scc_case`
--

CREATE TABLE IF NOT EXISTS `scc_case` (
  `case_id` int(11) NOT NULL,
  `casenumber` varchar(45) NOT NULL,
  `c_date_time` datetime(6) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scc_case`
--

INSERT INTO `scc_case` (`case_id`, `casenumber`, `c_date_time`, `profile_id`, `category_id`) VALUES
(8, '0001', '2016-04-14 12:04:13.000000', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `barangay_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `barangay_id`) VALUES
(1, 'San andres Central school', 1),
(2, 'School 2', 2),
(3, 'School 3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` int(11) NOT NULL,
  `ticketnumber` varchar(45) NOT NULL,
  `t_date_time` datetime(6) NOT NULL,
  `case_id` int(11) NOT NULL,
  `ticket_note` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticketnumber`, `t_date_time`, `case_id`, `ticket_note`) VALUES
(2, '000111', '2016-04-14 12:04:28.000000', 8, 'No boot');

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
  `tstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mprivera', 'k_DJNPKMvfky8i3P-WjElxNix7rXz3aj', '$2y$13$7CA4MGHOZWY2.hEi2Q0gWORrss2cM4h2uQIAgvLjF82rtI8XJSQMe', NULL, 'mprivera@student.apc.edu.ph', 10, 1459875348, 1459875348),
(2, 'pldolot', 'OsRhA7poSJun4Tux31oSUTM1U5oieP6h', '$2y$13$jwaZQa9VKoijoRItAjAiJO4mQgZADKy35tZcRfCCsqNfDSgFGYtGC', NULL, 'pldolot@cocojam.lan', 10, 1459876172, 1459876172);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD UNIQUE KEY `assignment_id_UNIQUE` (`assignment_id`),
  ADD KEY `fk_auth_assignment_auth_item1_idx` (`item_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id_UNIQUE` (`item_id`),
  ADD KEY `fk_auth_item_auth_rule1_idx` (`rule_id`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`child_id`),
  ADD UNIQUE KEY `child_id_UNIQUE` (`child_id`),
  ADD KEY `fk_auth_item_child_auth_item1_idx` (`item_id`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`rule_id`),
  ADD UNIQUE KEY `rule_id_UNIQUE` (`rule_id`);

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
  ADD KEY `fk_employee_position1_idx` (`position_id`);

--
-- Indexes for table `island_group`
--
ALTER TABLE `island_group`
  ADD PRIMARY KEY (`island_id`),
  ADD UNIQUE KEY `national_id_UNIQUE` (`island_id`);

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
  ADD UNIQUE KEY `gsis_UNIQUE` (`gsis`),
  ADD UNIQUE KEY `sss_UNIQUE` (`sss`),
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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auth_item`
--
ALTER TABLE `auth_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `auth_rule`
--
ALTER TABLE `auth_rule`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `barangay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `case_has_case_status`
--
ALTER TABLE `case_has_case_status`
  MODIFY `case_has_case_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `case_status`
--
ALTER TABLE `case_status`
  MODIFY `case_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `island_group`
--
ALTER TABLE `island_group`
  MODIFY `island_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `municipal_city`
--
ALTER TABLE `municipal_city`
  MODIFY `municipality_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `precinct`
--
ALTER TABLE `precinct`
  MODIFY `precinct_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `scc_case`
--
ALTER TABLE `scc_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket_has_ticket_status`
--
ALTER TABLE `ticket_has_ticket_status`
  MODIFY `ticket_has_ticket_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
  MODIFY `ticket_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `fk_auth_assignment_auth_item1` FOREIGN KEY (`item_id`) REFERENCES `auth_item` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `fk_auth_item_auth_rule1` FOREIGN KEY (`rule_id`) REFERENCES `auth_rule` (`rule_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `fk_auth_item_child_auth_item1` FOREIGN KEY (`item_id`) REFERENCES `auth_item` (`item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_profile_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
  ADD CONSTRAINT `fk_case_profile1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
