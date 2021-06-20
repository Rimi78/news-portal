-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Article_no` int(11) NOT NULL,
  `Article_name` varchar(100) DEFAULT NULL,
  `Author_name` varchar(30) DEFAULT NULL,
  `Category` varchar(30) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `image_name` varchar(30) DEFAULT NULL,
  `image_dir` varchar(30) DEFAULT NULL,
  `Date1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Article_no`, `Article_name`, `Author_name`, `Category`, `Content`, `image_name`, `image_dir`, `Date1`) VALUES
(4, 'shakib  ', 'rimi ', 'sports  ', '   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1.jpg', '/xampp/htdocs/news/images/1.jp', 'updated at : Monday 24th of May 2021 12:'),
(5, 'find job ', 'rimi ', 'jod ', '  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3.jpg', '/xampp/htdocs/news/images/3.jp', 'updated at : Monday 24th of May 2021 12:');

-- --------------------------------------------------------

--
-- Table structure for table `auth_login`
--

CREATE TABLE `auth_login` (
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_login`
--

INSERT INTO `auth_login` (`Firstname`, `Lastname`, `Username`, `Email`, `Password1`) VALUES
('Umme Hani', 'Rimi', 'Rimi78', 'rimi@gmail.com', '12345678'),
('Umme Hani ', 'Rimi', 'Rimi', 'ummehani.rimi74@gmai', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Article_no` int(11) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `Date1` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Article_no`, `Username`, `Comment`, `Date1`) VALUES
(4, ' Rimi78', ' hello\r\n', 'Monday 24th of May 2021 12:18:04 PM '),
(5, ' Rimi78', ' hi', 'Monday 24th of May 2021 12:18:18 PM '),
(4, ' Rimi78', ' hi', 'Monday 24th of May 2021 12:47:14 PM '),
(4, ' Rimi', ' hello', 'Monday 24th of May 2021 12:48:09 PM ');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Firstname` varchar(20) DEFAULT NULL,
  `Lastname` varchar(20) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Firstname`, `Lastname`, `Username`, `Email`, `Password1`) VALUES
('Umme Hani ', 'Rimi', 'Rimi', 'ummehani.rimi74@gmai', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Article_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Article_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
