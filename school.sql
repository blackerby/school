-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 31, 2022 at 11:07 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `name` enum('A','B','C','D','E','F','G') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`) VALUES
(1, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E'),
(7, 'F'),
(8, 'G');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'English'),
(2, 'History'),
(3, 'Math'),
(4, 'Science'),
(5, 'Fine Arts'),
(6, 'Modern & Classical Languages'),
(7, 'Physical Education'),
(8, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `last_name`, `first_name`, `department_id`) VALUES
(1, 'Blackerby', 'William', 6),
(5, 'Colvin', 'Clay', 5),
(7, 'Mayor', 'Pedro', 6),
(28, 'Horn', 'Jonathan', 6),
(32, 'Belser', 'William', 8),
(33, 'Gray', 'Jonathan', 3),
(34, 'Wald', 'Weslie', 6),
(36, 'Bassene', 'Jean', 6),
(37, 'Neel', 'Rebecca', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_blocks`
--

CREATE TABLE `teacher_blocks` (
  `teacher_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_blocks`
--

INSERT INTO `teacher_blocks` (`teacher_id`, `block_id`) VALUES
(1, 1),
(5, 1),
(7, 1),
(32, 1),
(36, 1),
(37, 1),
(1, 3),
(5, 3),
(36, 3),
(1, 4),
(32, 4),
(36, 4),
(37, 4),
(1, 5),
(5, 5),
(7, 5),
(32, 5),
(34, 5),
(36, 5),
(37, 5),
(1, 6),
(7, 6),
(32, 6),
(36, 6),
(37, 6),
(5, 7),
(33, 7),
(37, 7),
(1, 8),
(5, 8),
(7, 8),
(28, 8),
(32, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_blocks`
--
ALTER TABLE `teacher_blocks`
  ADD PRIMARY KEY (`teacher_id`,`block_id`),
  ADD KEY `block_id` (`block_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher_blocks`
--
ALTER TABLE `teacher_blocks`
  ADD CONSTRAINT `teacher_blocks_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_blocks_ibfk_2` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
