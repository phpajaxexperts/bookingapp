-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(10) NOT NULL,
  `service` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `available_date` datetime NOT NULL,
  `available_time` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `service`, `customer_name`, `profile_image`, `city`, `status`, `date`, `available_date`, `available_time`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ray Pressly', 'avatar-raypressley-profileimg-1.png', 'San Francisco', 3, '2021-05-12 17:50:36', '2021-05-12 17:50:36', '9:00 am — 2:00 pm', '50 Hagiwara Tea Garden Dr, San Francisco, CA 94118', '0000-00-00 00:00:00', '2021-05-04 14:08:30'),
(2, 2, 'John David', 'avatar-raypressley-profileimg-1.png', 'Los Angeles', 3, '2021-05-19 17:54:13', '2021-05-19 17:54:13', '9:00 am — 2:00 pm', '10 Tea Garden Dr, Los Angeles, LA 941520', '0000-00-00 00:00:00', '2021-05-04 14:08:36'),
(3, 3, 'Charles', 'avatar-raypressley-profileimg-1.png', 'San Francisco', 1, '2021-05-28 17:54:13', '2021-05-28 17:54:13', '9:00 am — 2:00 pm', '50 Hagiwara Tea Garden Dr, San Francisco, CA 94118', '0000-00-00 00:00:00', '2021-05-04 14:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `core_booking_status`
--

CREATE TABLE `core_booking_status` (
  `ID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `core_booking_status`
--

INSERT INTO `core_booking_status` (`ID`, `name`, `active`) VALUES
(1, 'Pending Request', 1),
(2, 'Upcoming Service', 1),
(3, 'Pending Payment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `session_type` varchar(255) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `title`, `caption`, `description`, `session_type`, `price`, `image`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Yoga and Pilate Training', 'TRAINING . FITNESS', 'This yoga and pilot training session is designed for all levels of trainees', 'For one session', '80', 'Screen_Shot1.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Zumba', 'FITNESS', 'Zumba is an exercise fitness program created by Colombian dancer and choreographer Alberto \"Beto\"', 'For two session', '50', 'Screen_Shot1.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Gym', 'FITNESS', 'A gymnasium, also known as a gym, is a covered location for athletics.', 'For One Session', '100', 'Screen_Shot1.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Scuba Diving', 'FITNESS . ENTERTAINMENT', 'Scuba diving is a mode of underwater diving where the diver uses an apparatus which is completely.', 'For One Session', '75', 'Screen_Shot1.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `core_booking_status`
--
ALTER TABLE `core_booking_status`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_booking_status`
--
ALTER TABLE `core_booking_status`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
