-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 05:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `session`
--

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `validate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `fname`, `lname`, `gender`, `hobby`, `city`, `dob`, `mobile`, `email`, `password`, `validate`) VALUES
(4, 'jay', 'aa', 'male', 'reading', 'surat', '2021-07-12', '787879', 'jay@gmail.com', '1234', ''),
(5, 'aa', 'aa', 'female', '', 'bhuj', '2021-07-14', '454822222', 'aa@gmail.com', 'aa', ''),
(6, 'bb', 'bb', 'male', '', 'bhuj', '2021-07-05', '67896789', 'bb@gmail.com', 'bb', ''),
(7, 'dd', 'dd', 'male', 'reading,playing', 'bhuj', '2021-07-05', '8769789', 'dd@gmail.com', 'dd', ''),
(8, 'dd', 'dd', 'male', 'reading,playing', 'bhuj', '2021-07-05', '8769789', 'dd@gmail.com', 'dd', ''),
(9, 'abb', 'ccc', 'male', 'reading,writing', 'surat', '2021-07-05', '7899878', 'abb@gmail.com', 'abb', 'Yes'),
(10, 'cc', 'dd', 'female', 'writing,playing', 'bhuj', '2021-07-28', '898797899', 'cc@gmail.com', 'cc', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
