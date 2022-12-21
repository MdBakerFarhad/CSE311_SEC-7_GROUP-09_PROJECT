-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 12:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_flight_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `Name` varchar(20) DEFAULT NULL,
  `Flight_types` varchar(10) DEFAULT NULL,
  `AIRLINE_code` varchar(10) DEFAULT NULL,
  `Ticket_fare_rate` double(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`Name`, `Flight_types`, `AIRLINE_code`, `Ticket_fare_rate`) VALUES
('Biman Bangladesh', 'Both', 'BBC', NULL),
('NovoAir', 'Both', 'NVQ', NULL),
('Regent Airways', 'Both', 'RGE', NULL),
('US Bangla', 'Both', 'UBG', NULL),
('Air Asta', 'Dmoestic', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `Name` varchar(50) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Distance` int(7) DEFAULT NULL,
  `Region` varchar(10) DEFAULT NULL,
  `Duration` varchar(10) DEFAULT NULL,
  `Time_difference` varchar(10) DEFAULT NULL,
  `Permission_for_direct_Flight` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`Name`, `Country`, `City`, `Distance`, `Region`, `Duration`, `Time_difference`, `Permission_for_direct_Flight`) VALUES
('Indira Gandhi International Airport', 'India', 'New Delhi', 1223, 'Asia', '4 hr 45 mi', '-30 mins', NULL),
('Benazir Bhutto International Airport', 'Pakistan', 'Islamabad', 2208, 'Asia', '9 hr 30 mi', '-1 hr', NULL),
('Tribhuvan Interntional Airport', 'Nepal', 'Kathmandu', 814, 'Asia', '1 hr 25 mi', '-15 min', NULL),
('Beijing Capital International Airport', 'China', 'Beijing', 1895, 'Asia', '7 hr 00 mi', '2 hr +', NULL),
('Naypyidaw International Airport', 'Myanmmer', 'Naypyidaw', 607, 'Asia', '1 hr 45 mi', '30 min +', NULL),
('Paro International Airport', 'Bhutan', 'Thimphu', 426, 'Asia', '1 hr 05 mi', '0', NULL),
('Taoyuan International', 'Taiwan', 'Taipei', 3106, 'Asia', '4 hr 40 mi', '2 hr +', NULL),
('Bandaranaike International Airport', 'Sri Lanka', 'Colombo', 2027, 'Asia', '3 hr 25 mi', '-30 min', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_Id` int(10) DEFAULT NULL,
  `User_ID` int(10) DEFAULT NULL,
  `Flight_code` varchar(10) DEFAULT NULL,
  `Payment` double(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Registered_Name` varchar(20) DEFAULT NULL,
  `Airport` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domestic`
--

CREATE TABLE `domestic` (
  `City` varchar(20) DEFAULT NULL,
  `Airport` varchar(50) DEFAULT NULL,
  `Duration` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domestic`
--

INSERT INTO `domestic` (`City`, `Airport`, `Duration`) VALUES
('Dhaka', 'Hazrat Shahjalal International Airport', NULL),
('Chittagong', 'Shah Amanat International Airport', NULL),
('Rajshahi', 'Shah Makhdum Airport', NULL),
('Jashore', 'Jashore Airport', NULL),
('Barisal', 'Barisal Airport', NULL),
('Coxs Bazar', 'Coxs Bazar International Airport', NULL),
('Sylhet', 'Osmani International Airport', NULL),
('Saidpur', 'Saidpur Airport', NULL),
('Ishwardi', 'Ishwardi Airport', NULL),
('Comilla', 'Comilla Airport', NULL),
('Khulna', 'Khan Jahan Ali Airport', NULL),
('Lalmonirhat', 'Lalmonirhat Airport', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_code` varchar(10) DEFAULT NULL,
  `Airline_code` varchar(10) DEFAULT NULL,
  `Departure` varchar(50) DEFAULT NULL,
  `Arrival` varchar(50) DEFAULT NULL,
  `Time_of_flight` varchar(10) DEFAULT NULL,
  `Date_of_flight` date DEFAULT NULL,
  `Capacity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(10) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Membership` varchar(10) NOT NULL,
  `Level_of_Access` varchar(10) NOT NULL,
  `Date_of_membership` date NOT NULL,
  `Passport_No` int(40) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Pass_word` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD UNIQUE KEY `AIRLINE_code` (`AIRLINE_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
