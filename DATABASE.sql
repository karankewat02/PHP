-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 06:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`dt`, `feedback`) VALUES
('2021-06-10 19:37:30', 'Karan is a good boy'),
('2021-06-10 19:39:00', 'Karan is a good boy'),
('2021-06-10 19:48:03', ''),
('2021-06-12 21:20:13', 'This web Site is OP!!'),
('2021-06-12 21:43:11', ''),
('2021-06-12 21:49:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `sno` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Discription` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`sno`, `name`, `phone`, `email`, `Address`, `Discription`, `date`) VALUES
(1, '', 0, '', '', '', '2021-06-10 19:51:52'),
(2, 'karan kewat', 2147483647, 'karankewat2911@gmail.com', '1486 uday nagar no 1', 'have bed', '2021-06-10 19:55:36'),
(3, 'karan kewat', 2147483647, 'karankewat2911@gmail.com', '1486 uday nagar no 1', 'help\r\n', '2021-06-12 21:43:29'),
(4, 'karan kewat', 2147483647, 'karankewat2911@gmail.com', '1486 uday nagar no 1', 'HELP', '2021-06-12 21:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `username`, `password`, `name`, `email`, `dt`, `score`) VALUES
(1, 'Test', 'Test123', 'Test', 'Test@123.com', '2021-06-09 19:22:30', 110),
(4, 'karan', 'karan', 'karan kewat', 'karankewat2911@gmail.com', '2021-06-09 20:21:54', 4370),
(5, 'test2', 'test2', 'Levi Hart', 'Levi_Hart@xyz.com', '2021-06-10 18:56:09', 20),
(7, 'Shivani', '123', 'Shivani Verma', 'Karankewat2911@gmail.com', '2021-06-12 19:36:18', 0),
(8, 'shivani2', '`12', 'Shivani Verma', 'shivula4387@gmail.com', '2021-06-12 19:46:04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
