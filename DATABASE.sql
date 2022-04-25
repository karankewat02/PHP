-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 07:48 PM
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
-- Database: `thoughosphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(50) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `review`, `date`) VALUES
('TEMP', 'TEMP', '0000-00-00'),
('karankewat', 'BEST WEBSITE EVER SEEN', '2021-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `thought`
--

CREATE TABLE `thought` (
  `username` varchar(50) NOT NULL,
  `thought` varchar(10000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thought`
--

INSERT INTO `thought` (`username`, `thought`, `date`) VALUES
('TEMP', 'TEMP', '2021-11-26 00:15:52'),
('karankewat', 'You’re braver than you believe, and stronger than you seem, and smarter than you think', '2021-11-25 19:47:09'),
('karankewat', 'Winning doesn’t always mean being first. Winning means you’re doing better than you’ve\r\ndone before.', '2021-11-25 19:47:21'),
('karankewat', 'It always seems impossible until it\r\nis done.', '2021-11-25 19:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `email`) VALUES
('TEMP', 'TEMP', 'TEMP', 'TEMP'),
('Karan Kewat', 'karankewat', '1234', 'karankewat2911@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
