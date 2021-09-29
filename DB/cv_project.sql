-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 08:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_info`
--

CREATE TABLE `cv_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language` varchar(20) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `cstartdate` date NOT NULL,
  `cposition` varchar(150) NOT NULL,
  `varsityname` varchar(100) NOT NULL,
  `cgpa` varchar(5) NOT NULL,
  `varsitypyear` date NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `hscgpa` varchar(5) NOT NULL,
  `clgpyear` date NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `sscgpa` varchar(5) NOT NULL,
  `sclpyear` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv_info`
--

INSERT INTO `cv_info` (`id`, `name`, `address`, `phone`, `email`, `birthday`, `gender`, `language`, `skill`, `companyname`, `cstartdate`, `cposition`, `varsityname`, `cgpa`, `varsitypyear`, `collegename`, `hscgpa`, `clgpyear`, `schoolname`, `sscgpa`, `sclpyear`, `image`, `username`) VALUES
(4, 'Hrunmana', 'Mysore', '9988776655', 'hru@gmail.com', '2021-09-24', 'female', 'English', 'HTML,PYTHON', 'GMT', '2021-09-16', 'Software Developer', 'Vishweshwaraya Technological university', '85', '2021-09-26', 'JSSATE', '82', '2021-09-10', 'JOSEPH', '86', '2021-09-25', 'Image/bg1.jpg', 'hrunmana'),
(5, '', '', '', 'priyanka@gmail.com', '2012-02-14', 'male', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'priyanka');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(4, 'hrunmana', 'hru@gmail.com', '1234'),
(5, 'priyanka', 'priyanka@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_info`
--
ALTER TABLE `cv_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv_info`
--
ALTER TABLE `cv_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
