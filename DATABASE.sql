-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2022 at 11:00 AM
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
-- Database: `quizhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `3546`
--

CREATE TABLE `3546` (
  `code` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `o1` varchar(250) NOT NULL,
  `o2` varchar(250) NOT NULL,
  `o3` varchar(250) NOT NULL,
  `o4` varchar(250) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `3546`
--

INSERT INTO `3546` (`code`, `question`, `o1`, `o2`, `o3`, `o4`, `correct`) VALUES
(3546, 'Question 1', '1', '2', '3', '4', 1),
(3546, 'Question 2', '1', '2', '3', '4', 2),
(3546, 'Question 3', '1', '2', '3', '4', 3),
(3546, 'Question 4', '1', '2', '3', '4', 4),
(3546, 'Question 5', '1', '2', '3', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `3758`
--

CREATE TABLE `3758` (
  `code` int(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `o1` varchar(250) NOT NULL,
  `o2` varchar(250) NOT NULL,
  `o3` varchar(250) NOT NULL,
  `o4` varchar(250) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `3758`
--

INSERT INTO `3758` (`code`, `question`, `o1`, `o2`, `o3`, `o4`, `correct`) VALUES
(3758, 'What does HTML stand for?', 'HyperText Markup Lag', 'Home tool markup lang', 'hyperlink markup lang', 'Nota', 1),
(3758, 'Who is making the Web standards?\r\n\r\n', 'Mozilla', 'Google', 'The World Wide Web', 'Microsoft', 3),
(3758, 'Choose the correct HTML element for the largest heading:\r\n\r\n', '<Head>', '<Heading>', '<h1>', '<H6>', 3),
(3758, 'What is the coWhat is the correct HTML for adding a background color?\r\n\r\n', '<lb>', '<br>', '<break>', 'NOTA', 2),
(3758, 'What is the correct HTML for adding a background color?\r\n\r\n', '<body bg = \"yellow\" >', '<body style = \"background : yellow\";\"', '<background>yellow</background>', 'Nota', 2),
(3758, 'Choose the correct HTML element to define important text', '<strong>', '<i>', '<important>', '<b>', 3),
(3758, 'Choose the correct HTML element to define emphasized text', '<em>', '<italic>', '<i>', 'NOTA', 1),
(3758, 'What is the correct HTML for creating a hyperlink?', '<a href = \"#\"></a>', '<a nmae= \"#\"></a>', '<a >#</a>', '<a url= \"#\"></a>', 1),
(3758, 'Which character is used to indicate an end tag?\r\n', '*', '^', '<', '/', 4),
(3758, 'Inline elements are normally displayed without starting a new line.', 'Flase', 'True', 'IDk', 'NOTA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `allattendies`
--

CREATE TABLE `allattendies` (
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `code` varchar(10) NOT NULL,
  `marks` int(4) NOT NULL,
  `s_time` time NOT NULL,
  `f_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allattendies`
--

INSERT INTO `allattendies` (`name`, `email`, `code`, `marks`, `s_time`, `f_time`) VALUES
('dad', 'karankewat2911@gmail.com', '3546', 4, '10:41:59', '03:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `alltests`
--

CREATE TABLE `alltests` (
  `o_name` varchar(80) NOT NULL,
  `o_email` varchar(80) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `duration` int(5) NOT NULL,
  `s_time` time NOT NULL,
  `e_time` time NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alltests`
--

INSERT INTO `alltests` (`o_name`, `o_email`, `title`, `date`, `duration`, `s_time`, `e_time`, `code`) VALUES
('Karan kewat', 'karan.kewat.cs.20@ggits.net', 'HTML Quiz', '2022-01-25', 0, '14:31:00', '14:35:00', 3758),
('Tester', 'karankewat2911@gmail.com', 'Complete Test', '2022-01-22', 2, '15:00:00', '15:15:00', 3546);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
