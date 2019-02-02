-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 10:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `pName` text NOT NULL,
  `hName` text NOT NULL,
  `haddress` text NOT NULL,
  `city` text NOT NULL,
  `dName` text NOT NULL,
  `bgroup` text NOT NULL,
  `cName` text NOT NULL,
  `cNumber` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `pName`, `hName`, `haddress`, `city`, `dName`, `bgroup`, `cName`, `cNumber`) VALUES
(1, 'Cerere', 'Test', 'TestCerereAdresa', 'Bucuresti', '', 'O+', 'ContactCerere', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `attempt` int(11) NOT NULL,
  `locked` tinyint(1) NOT NULL,
  `fname` text,
  `lname` text,
  `address` text,
  `city` text,
  `pcode` int(10) DEFAULT NULL,
  `country` text,
  `company` text,
  `bgroup` text,
  `donated` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `attempt`, `locked`, `fname`, `lname`, `address`, `city`, `pcode`, `country`, `company`, `bgroup`, `donated`) VALUES
(7, 'bartharobert66@gmail.com', 'ed317032324e8f2b8528f9262ea5e800', 0, 0, 'Bartha', 'Robert', NULL, 'Brasov', NULL, 'Romania', NULL, 'AB+', NULL),
(8, 'TestInregistrare1@test.sx', 'abe45d28281cfa2a4201c9b90a143095', 0, 0, 'Test', 'Inreg', 'Aaa', 'Bucuresti', NULL, 'Romania', NULL, 'B-', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
