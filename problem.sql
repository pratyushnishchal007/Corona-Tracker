-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 02:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `sno` int(6) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Symptoms` varchar(30) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`sno`, `Name`, `Email`, `Gender`, `Symptoms`, `Comments`) VALUES
(41, 'pratyush nishchal', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,', 'i am not felling well'),
(42, 'pratyush nis', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,', 'i am not felling well'),
(43, 'pratyush nis', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,', 'i am not felling well'),
(44, 'pratyush', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,Tiredness,', 'I am not felling well since 4 days'),
(45, 'pransu', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,Tiredness,', 'I am not felling well since 4 days'),
(46, 'pransu', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,Tiredness,', 'I am not felling well since 4 days'),
(47, 'pransu', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'I am not feeling well\r\n'),
(48, 'pransu', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'I am not feeling well\r\n'),
(49, 'pransu', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'I am not feeling well\r\n'),
(50, 'pratyush nishchal', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'I am not felling well\r\n'),
(51, 'pratyush nishchal', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'I am not felling well\r\n'),
(52, 'ram', 'pratyush.19bcd7174@vitap.ac.in', 'male', 'Dry Cough,', 'hello '),
(53, 'mohan', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,', 'hello is am mohan'),
(54, 'rohan', 'pratyushnishchal@gmail.com', 'male', 'Dry Cough,', 'hello is am mohan'),
(55, 'Rohit', 'pratyushnishchal@gmail.com', 'male', 'Fever,Dry Cough,', 'Hello'),
(56, 'hina', 'pratyush.19bcd7174@vitap.ac.in', 'male', 'Dry Cough,', 'hello i am hina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `Gender` (`Gender`),
  ADD KEY `Symptoms` (`Symptoms`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
