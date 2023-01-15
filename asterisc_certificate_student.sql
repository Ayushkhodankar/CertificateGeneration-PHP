-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3325
-- Generation Time: Jan 15, 2023 at 04:29 AM
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
-- Database: `asterisc_certificate_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_certificate`
--

CREATE TABLE `event_certificate` (
  `sr` int(11) NOT NULL,
  `sname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cdate` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cnumber` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `certificate_url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `course_name` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_certificate`
--

INSERT INTO `event_certificate` (`sr`, `sname`, `cdate`, `cnumber`, `email`, `certificate_url`, `course_name`) VALUES
(2, 'Rajlakshmi', '22-01-2002', '123-890', 'hbnmd@gmail.com', 'gvsdg.com', 'java'),
(3, 'pranali', '29-03-2022', '123-895', 'hbyged@gmail.com', 'gbbdg.com', 'java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_certificate`
--
ALTER TABLE `event_certificate`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_certificate`
--
ALTER TABLE `event_certificate`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
