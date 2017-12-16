-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 01:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_inventry`
--

CREATE TABLE `blood_inventry` (
  `inventry_id` int(11) NOT NULL,
  `blood_group` char(4) NOT NULL,
  `blood_quantity` int(4) NOT NULL,
  `hospital_id` int(4) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_inventry`
--

INSERT INTO `blood_inventry` (`inventry_id`, `blood_group`, `blood_quantity`, `hospital_id`, `update_time`) VALUES
(1, 'A+', 10, 1, '2017-12-16 12:42:53'),
(2, 'O+', 4, 1, '2017-12-16 12:43:10'),
(3, 'A-', 4, 1, '2017-12-16 12:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `blood_sample_request`
--

CREATE TABLE `blood_sample_request` (
  `sample_req_id` int(11) NOT NULL,
  `req_hospital_id` int(4) NOT NULL,
  `req_blood_group` char(4) NOT NULL,
  `receiver_id` int(4) NOT NULL,
  `receiver_email` varchar(20) NOT NULL,
  `req_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_sample_request`
--

INSERT INTO `blood_sample_request` (`sample_req_id`, `req_hospital_id`, `req_blood_group`, `receiver_id`, `receiver_email`, `req_time`) VALUES
(1, 1, 'A', 2, 'sai@skala.in', '2017-12-16 12:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_login`
--

CREATE TABLE `hospital_login` (
  `hospital_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile_number` bigint(10) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` char(10) NOT NULL DEFAULT 'hospital'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_login`
--

INSERT INTO `hospital_login` (`hospital_id`, `name`, `email`, `pincode`, `mobile_number`, `contact_person`, `password`, `creation_time`, `user_type`) VALUES
(1, 'Apollo Spectra Hospitals', 'connect@apollo.com', 421033, 7775070019, 'Amol', 'amol', '2017-12-16 12:09:28', 'hospital'),
(2, 'Life Care', 'info@life.com', 413517, 9874547821, 'Suyash', 'suyash', '2017-12-16 12:12:26', 'hospital'),
(3, 'care', 'care@care.com', 471254, 9998745687, 'John', 'john', '2017-12-16 12:14:18', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `receiver_login`
--

CREATE TABLE `receiver_login` (
  `receiver_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `blood_group` char(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` char(10) NOT NULL DEFAULT 'receiver'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receiver_login`
--

INSERT INTO `receiver_login` (`receiver_id`, `name`, `blood_group`, `email`, `pincode`, `mobile`, `password`, `creation_time`, `user_type`) VALUES
(1, 'deepak', 'AB+', 'deepak@gmail.com', 421474, 965874587, 'deepak', '2017-12-16 12:15:46', 'receiver'),
(2, 'sai', 'O+', 'sai@skala.in', 413517, 7845874587, 'sai', '2017-12-16 12:16:43', 'receiver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_inventry`
--
ALTER TABLE `blood_inventry`
  ADD PRIMARY KEY (`inventry_id`);

--
-- Indexes for table `blood_sample_request`
--
ALTER TABLE `blood_sample_request`
  ADD PRIMARY KEY (`sample_req_id`);

--
-- Indexes for table `hospital_login`
--
ALTER TABLE `hospital_login`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `receiver_login`
--
ALTER TABLE `receiver_login`
  ADD PRIMARY KEY (`receiver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_inventry`
--
ALTER TABLE `blood_inventry`
  MODIFY `inventry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blood_sample_request`
--
ALTER TABLE `blood_sample_request`
  MODIFY `sample_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospital_login`
--
ALTER TABLE `hospital_login`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `receiver_login`
--
ALTER TABLE `receiver_login`
  MODIFY `receiver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
