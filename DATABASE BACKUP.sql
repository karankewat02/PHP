-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 07:34 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `9201`
--

CREATE TABLE `9201` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9201`
--

INSERT INTO `9201` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:29:58', 'Alfred Bailey', 10000, 'Levi Hart'),
('2021-06-07 01:39:27', 'Levi Hart', 0, 'Alfred Bailey'),
('2021-06-07 01:49:59', 'Floyd West', 15000, 'Levi Hart'),
('2021-06-07 13:23:16', 'Levi Hart', 2500, 'Ruby Jackson'),
('2021-06-07 13:23:48', 'Levi Hart', 1400, 'Clayton Bryant');

-- --------------------------------------------------------

--
-- Table structure for table `9202`
--

CREATE TABLE `9202` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9202`
--

INSERT INTO `9202` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 13:24:13', 'Felecia Morrison', 10000, 'Justin Bennett'),
('2021-06-07 13:24:35', 'Felecia Morrison', 1000, 'Darren Brown'),
('2021-06-07 13:25:34', 'Felecia Morrison', 1200, 'Floyd West'),
('2021-06-07 13:25:51', 'Felecia Morrison', 1500, 'Herminia Ramos'),
('2021-06-07 13:26:11', 'Felecia Morrison', 30, 'Dustin Gordon');

-- --------------------------------------------------------

--
-- Table structure for table `9203`
--

CREATE TABLE `9203` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9203`
--

INSERT INTO `9203` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 13:24:13', 'Felecia Morrison', 10000, 'Justin Bennett');

-- --------------------------------------------------------

--
-- Table structure for table `9204`
--

CREATE TABLE `9204` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9204`
--

INSERT INTO `9204` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 13:20:33', 'Darren Brown', 1000, 'Herminia Ramos'),
('2021-06-07 13:24:35', 'Felecia Morrison', 1000, 'Darren Brown');

-- --------------------------------------------------------

--
-- Table structure for table `9205`
--

CREATE TABLE `9205` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9205`
--

INSERT INTO `9205` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 02:02:47', 'Ruby Jackson', 2500, 'Dustin Gordon'),
('2021-06-07 13:26:11', 'Felecia Morrison', 30, 'Dustin Gordon');

-- --------------------------------------------------------

--
-- Table structure for table `9206`
--

CREATE TABLE `9206` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9206`
--

INSERT INTO `9206` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:41:33', 'Ruby Jackson', 2000, 'Clayton Bryant'),
('2021-06-07 02:02:47', 'Ruby Jackson', 2500, 'Dustin Gordon'),
('2021-06-07 13:23:16', 'Levi Hart', 2500, 'Ruby Jackson');

-- --------------------------------------------------------

--
-- Table structure for table `9207`
--

CREATE TABLE `9207` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9207`
--

INSERT INTO `9207` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:49:40', 'Clayton Bryant', 1000, 'Herminia Ramos'),
('2021-06-07 13:20:33', 'Darren Brown', 1000, 'Herminia Ramos'),
('2021-06-07 13:25:51', 'Felecia Morrison', 1500, 'Herminia Ramos');

-- --------------------------------------------------------

--
-- Table structure for table `9208`
--

CREATE TABLE `9208` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9208`
--

INSERT INTO `9208` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:41:33', 'Ruby Jackson', 2000, 'Clayton Bryant'),
('2021-06-07 01:49:40', 'Clayton Bryant', 1000, 'Herminia Ramos'),
('2021-06-07 13:23:48', 'Levi Hart', 1400, 'Clayton Bryant');

-- --------------------------------------------------------

--
-- Table structure for table `9209`
--

CREATE TABLE `9209` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9209`
--

INSERT INTO `9209` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:49:58', 'Floyd West', 15000, 'Levi Hart'),
('2021-06-07 13:25:34', 'Felecia Morrison', 1200, 'Floyd West');

-- --------------------------------------------------------

--
-- Table structure for table `9210`
--

CREATE TABLE `9210` (
  `dt` datetime NOT NULL DEFAULT current_timestamp(),
  `sender` varchar(50) NOT NULL,
  `amount` int(12) NOT NULL,
  `receiver` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9210`
--

INSERT INTO `9210` (`dt`, `sender`, `amount`, `receiver`) VALUES
('0000-00-00 00:00:00', '', 0, ''),
('2021-06-07 01:29:58', 'Alfred Bailey', 10000, 'Levi Hart'),
('2021-06-07 01:39:27', 'Levi Hart', 0, 'Alfred Bailey');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pno` int(16) NOT NULL,
  `occ` varchar(50) NOT NULL,
  `bal` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`date`, `name`, `email`, `pno`, `occ`, `bal`, `age`, `c_id`) VALUES
('2021-06-05 12:48:40', 'Levi Hart', 'Levi_Hart@xyz.com', 929392322, 'Businessman', 76780, 41, 9201),
('2021-06-05 12:50:13', 'Felecia Morrison', 'Felecia_Morrison@xyz.com', 912312411, 'School Teacher', 86172, 36, 9202),
('2021-06-05 12:51:10', 'Justin Bennett', 'Justin_Bennett@xyz.com', 929392322, 'Entrepreneure', 104100, 41, 9203),
('2021-06-05 12:51:57', 'Darren Brown', 'Darren_Brown@xyz.com', 929394291, 'Gym Trainer', 101000, 36, 9204),
('2021-06-05 12:59:08', 'Dustin Gordon', 'Dustin_Gordon@xyz.com', 723424276, 'Chef', 53730, 36, 9205),
('2021-06-05 13:00:06', 'Ruby Jackson', 'Ruby_Jackson@xyz.com', 742451451, 'Cardiologist', 100200, 32, 9206),
('2021-06-05 13:02:15', 'Herminia Ramos', 'Herminia_Ramos@xyz.com', 918281717, 'Ballet Dancer', 100500, 28, 9207),
('2021-06-05 13:03:35', 'Clayton Bryant', 'Clayton_Bryant@xyz.com', 929394291, 'C.E.O. of C&B pvt.', 103420, 32, 9208),
('2021-06-05 13:04:50', 'Floyd West', 'Floyd_West@xyz.com', 912312123, 'C.S. Engineer', 86300, 28, 9209),
('2021-06-05 13:06:48', 'Alfred Bailey', 'Alfred_Bailey@xyz.com', 832894180, 'Equity Trader', 90000, 47, 9210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
