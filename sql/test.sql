-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 01:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_name` varchar(40) DEFAULT NULL,
  `member_email` varchar(40) NOT NULL,
  `member_mobile` bigint(10) NOT NULL,
  `member_add` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_name`, `member_email`, `member_mobile`, `member_add`, `password`, `DOB`, `Gender`) VALUES
('Kapil Dev', 'devkacyz@gmail.com', 9833214532, 'UG Road ', 'kapil', '1999-10-17', 'Male'),
('Irfan Patan', 'irfan223patan@gmail.com', 9937620111, 'PK Market', 'irfan', '1987-09-23', 'Male'),
('Rohit Sharma', 'rohit123@gmail.com', 9846578312, 'Gandhi Marg Civil Lines', 'rohit', '1990-03-08', 'Male'),
('Sandy Verma', 'sandy23verma@gmail.com', 7001498234, 'Urja Garden Kotilya Marg', 'sandy', '2000-07-08', 'Male'),
('Smith Pal', 'smithsmith@gmail.com', 7820012873, 'Sanskar Valley Road', 'smith', '1993-10-02', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `membership_plan`
--

CREATE TABLE `membership_plan` (
  `Membership_id` varchar(10) NOT NULL,
  `Membership_period` varchar(10) NOT NULL,
  `Monthly_fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership_plan`
--

INSERT INTO `membership_plan` (`Membership_id`, `Membership_period`, `Monthly_fee`) VALUES
('M001', '2 Month', 3000),
('M002', '3 Month', 2500),
('M003', '6 Month', 2000),
('M004', '8 Month', 1800),
('M005', '12 Month', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `plan_taken`
--

CREATE TABLE `plan_taken` (
  `member_email` varchar(30) NOT NULL,
  `membership_id` varchar(10) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_taken`
--

INSERT INTO `plan_taken` (`member_email`, `membership_id`, `description`) VALUES
('devkacyz@gmail.com', 'M001', 'For 2 Month'),
('irfan223patan@gmail.com', 'M005', 'For 12 Month'),
('rohit123@gmail.com', 'M002', 'For 3 Month'),
('sandy23verma@gmail.com', 'M001', 'For 2 Month'),
('smithsmith@gmail.com', 'M004', 'For 8 Month');

-- --------------------------------------------------------

--
-- Table structure for table `trained_by`
--

CREATE TABLE `trained_by` (
  `member_email` varchar(30) NOT NULL,
  `trainer_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trained_by`
--

INSERT INTO `trained_by` (`member_email`, `trainer_id`) VALUES
('sandy23verma@gmail.com', 'T001'),
('irfan223patan@gmail.com', 'T002'),
('rohit123@gmail.com', 'T002'),
('smithsmith@gmail.com', 'T004'),
('devkacyz@gmail.com', 'T005');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Trainer_id` varchar(10) NOT NULL,
  `Trainer_name` text NOT NULL,
  `Hired_date` date NOT NULL,
  `Trainer_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Trainer_name`, `Hired_date`, `Trainer_email`) VALUES
('T001', 'Sanket Singh', '2015-03-10', 'sanketsingh12@gmail.com'),
('T002', 'Raman Shukla', '2016-07-13', 'shuklaraman@gmail.com'),
('T003', 'Rubina Shaikh', '2015-01-26', 'rub_shaikh@gmail.com'),
('T004', 'Hemant Sharma', '2019-01-02', 'hemant1213@gmail.com'),
('T005', 'Yashasvi Pawaar', '2015-05-04', 'yashasvi_p@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `member_email` varchar(30) NOT NULL,
  `workout_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`member_email`, `workout_id`) VALUES
('irfan223patan@gmail.com', 'W001'),
('smithsmith@gmail.com', 'W002'),
('devkacyz@gmail.com', 'W003'),
('rohit123@gmail.com', 'W004'),
('sandy23verma@gmail.com', 'W004');

-- --------------------------------------------------------

--
-- Table structure for table `workout_session`
--

CREATE TABLE `workout_session` (
  `days` int(10) NOT NULL,
  `duration(hours)` int(10) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `workout_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workout_session`
--

INSERT INTO `workout_session` (`days`, `duration(hours)`, `Type`, `workout_id`) VALUES
(6, 1, 'Cardio', 'W001'),
(7, 1, 'Strength Training', 'W002'),
(3, 1, 'Static Stretching', 'W003'),
(4, 2, 'Aerobic', 'W004'),
(2, 1, 'Muscle gain', 'W005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_email`);

--
-- Indexes for table `membership_plan`
--
ALTER TABLE `membership_plan`
  ADD PRIMARY KEY (`Membership_id`);

--
-- Indexes for table `plan_taken`
--
ALTER TABLE `plan_taken`
  ADD PRIMARY KEY (`member_email`),
  ADD KEY `membership_id` (`membership_id`);

--
-- Indexes for table `trained_by`
--
ALTER TABLE `trained_by`
  ADD PRIMARY KEY (`member_email`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Trainer_id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`member_email`),
  ADD KEY `workout_id` (`workout_id`);

--
-- Indexes for table `workout_session`
--
ALTER TABLE `workout_session`
  ADD PRIMARY KEY (`workout_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `plan_taken`
--
ALTER TABLE `plan_taken`
  ADD CONSTRAINT `plan_taken_ibfk_1` FOREIGN KEY (`membership_id`) REFERENCES `membership_plan` (`Membership_id`);

--
-- Constraints for table `trained_by`
--
ALTER TABLE `trained_by`
  ADD CONSTRAINT `trained_by_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`Trainer_id`);

--
-- Constraints for table `workout`
--
ALTER TABLE `workout`
  ADD CONSTRAINT `workout_ibfk_1` FOREIGN KEY (`workout_id`) REFERENCES `workout_session` (`workout_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
