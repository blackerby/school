-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 02, 2022 at 03:53 PM
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
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE `classrooms` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`) VALUES
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '4S'),
(7, '5'),
(8, '6'),
(9, '7'),
(10, '8'),
(11, '8S'),
(12, '9'),
(13, '10'),
(14, '11'),
(15, '12'),
(16, '12S'),
(17, '14'),
(18, '15'),
(19, '16'),
(20, '17'),
(21, 'Concert Hall'),
(22, 'Contemp'),
(23, 'Foyer'),
(24, 'Main'),
(25, 'MakerSpace'),
(26, 'Photo'),
(27, 'Pottery'),
(28, 'Rehearsal'),
(29, 'SC1'),
(30, 'SC2'),
(31, 'SC3'),
(32, 'SC4'),
(33, 'Studio'),
(34, 'Theater'),
(35, 'Weight');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms_blocks`
--

CREATE TABLE `classrooms_blocks` (
  `classroom_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classrooms_blocks`
--

INSERT INTO `classrooms_blocks` (`classroom_id`, `block_id`) VALUES
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(24, 1),
(26, 1),
(29, 1),
(30, 1),
(33, 1),
(34, 1),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(22, 3),
(23, 3),
(26, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(34, 3),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(20, 4),
(22, 4),
(24, 4),
(26, 4),
(30, 4),
(32, 4),
(2, 5),
(3, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(10, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(22, 5),
(23, 5),
(25, 5),
(28, 5),
(29, 5),
(30, 5),
(31, 5),
(32, 5),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6),
(7, 6),
(8, 6),
(9, 6),
(10, 6),
(14, 6),
(17, 6),
(18, 6),
(19, 6),
(20, 6),
(22, 6),
(23, 6),
(29, 6),
(30, 6),
(31, 6),
(32, 6),
(2, 7),
(3, 7),
(4, 7),
(6, 7),
(8, 7),
(9, 7),
(12, 7),
(15, 7),
(18, 7),
(19, 7),
(20, 7),
(23, 7),
(26, 7),
(29, 7),
(30, 7),
(31, 7),
(32, 7),
(34, 7),
(35, 7),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(18, 8),
(19, 8),
(20, 8),
(23, 8),
(26, 8),
(27, 8),
(29, 8),
(30, 8),
(31, 8),
(32, 8);

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
  `department_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `last_name`, `first_name`, `department_id`, `email`) VALUES
(64, 'Allen', 'D\'Anthony', 1, 'dallen@indiansprings.org'),
(65, 'Barrett', 'Neil', 1, 'neil.barrett@indiansprings.org'),
(66, 'Bassene', 'Jean', 6, 'jean.bassene@indiansprings.org'),
(67, 'Belser', 'William', 8, 'william.belser@indiansprings.org'),
(68, 'Blackerby', 'William', 6, 'william.blackerby@indiansprings.org'),
(69, 'Brunzell', 'John', 3, 'john.brunzell@indiansprings.org'),
(70, 'Chang', 'Athena', 6, 'achang@indiansprings.org'),
(71, 'Chow', 'Renee', 1, 'renee.chow@indiansprings.org'),
(72, 'Clinkman', 'Dan', 2, 'dan.clinkman@indiansprings.org'),
(73, 'Colvin', 'Clayton', 5, 'clay.colvin@indiansprings.org'),
(74, 'Cooper', 'Robert', 2, 'bcooper@indiansprings.org'),
(75, 'Davis', 'Colin', 2, 'colin.davis@indiansprings.org'),
(76, 'Ellinas', 'Emanual', 5, 'emanual.ellinas@indiansprings.org'),
(77, 'Flaniken', 'Jim', 3, 'jim.flaniken@indiansprings.org'),
(78, 'Gray', 'Jonathan', 3, 'jonathan.gray@indiansprings.org'),
(79, 'Griffin', 'James', 1, 'james.griffin@indiansprings.org'),
(80, 'Horn', 'Jonathan', 6, 'jhorn@indiansprings.org'),
(81, 'Hurt', 'Leslie', 4, 'leslie.hurt@indiansprings.org'),
(82, 'Jacobs', 'Kelly', 2, 'kjacobs@indiansprings.org'),
(83, 'Jung', 'Hye-Sook', 5, 'hyesook.jung@indiansprings.org'),
(84, 'LaCasse', 'Mac', 3, 'mlacasse@indiansprings.org'),
(85, 'Magnuson', 'Tessa', 4, 'tessa.magnuson@indiansprings.org'),
(86, 'Mange', 'George', 6, 'george.mange@indiansprings.org'),
(87, 'Mayor', 'Pedro', 6, 'pedro.mayor@indiansprings.org'),
(88, 'Mohammed', 'Hazal', 4, 'hazal.mohammed@indiansprings.org'),
(89, 'Mullinax', 'Chris', 3, 'chris.mullinax@indiansprings.org'),
(90, 'Neel', 'Rebecca', 3, 'rebecca.neel@indiansprings.org'),
(91, 'Peterson', 'Dane', 5, 'dane.peterson@indiansprings.org'),
(92, 'Pino', 'Justin', 7, 'justin.pino@indiansprings.org'),
(93, 'Sheehan', 'Michael', 5, 'msheehan@indiansprings.org'),
(94, 'Sides', 'Jeffrey', 4, 'jeffrey.sides@indiansprings.org'),
(95, 'Skiff', 'Brad', 7, 'brad.skiff@indiansprings.org'),
(96, 'Tetzlaff', 'Christina', 4, 'ctetzlaff@indiansprings.org'),
(97, 'Thomas', 'Stephanie', 3, 'sthomas@indiansprings.org'),
(98, 'Van Horn', 'Greg', 7, 'gvanhorn@indiansprings.org'),
(99, 'Wainwright', 'Lauren', 2, 'lauren.wainwright@indiansprings.org'),
(100, 'Wald', 'Weslie', 6, 'weslie.wald@indiansprings.org'),
(101, 'Wolfe', 'Hunter', 2, 'hunter.wolfe@indiansprings.org'),
(102, 'Woodruff', 'Calvin', 1, 'cal.woodruff@indiansprings.org'),
(127, 'Wright', 'Lee', 5, 'lee.wright@indiansprings.org');

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
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(73, 1),
(75, 1),
(76, 1),
(77, 1),
(79, 1),
(82, 1),
(83, 1),
(84, 1),
(86, 1),
(87, 1),
(88, 1),
(90, 1),
(91, 1),
(92, 1),
(93, 1),
(96, 1),
(97, 1),
(65, 3),
(66, 3),
(68, 3),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(76, 3),
(79, 3),
(82, 3),
(85, 3),
(86, 3),
(88, 3),
(89, 3),
(91, 3),
(92, 3),
(93, 3),
(94, 3),
(96, 3),
(102, 3),
(127, 3),
(64, 4),
(66, 4),
(67, 4),
(68, 4),
(69, 4),
(70, 4),
(72, 4),
(75, 4),
(76, 4),
(77, 4),
(79, 4),
(81, 4),
(85, 4),
(86, 4),
(89, 4),
(90, 4),
(93, 4),
(95, 4),
(97, 4),
(99, 4),
(101, 4),
(102, 4),
(65, 5),
(66, 5),
(67, 5),
(68, 5),
(70, 5),
(71, 5),
(72, 5),
(73, 5),
(74, 5),
(76, 5),
(77, 5),
(81, 5),
(82, 5),
(83, 5),
(85, 5),
(87, 5),
(88, 5),
(89, 5),
(92, 5),
(94, 5),
(97, 5),
(101, 5),
(102, 5),
(65, 6),
(67, 6),
(68, 6),
(69, 6),
(71, 6),
(72, 6),
(74, 6),
(76, 6),
(77, 6),
(79, 6),
(81, 6),
(82, 6),
(87, 6),
(88, 6),
(89, 6),
(90, 6),
(92, 6),
(94, 6),
(96, 6),
(97, 6),
(65, 7),
(69, 7),
(71, 7),
(73, 7),
(74, 7),
(75, 7),
(78, 7),
(81, 7),
(82, 7),
(85, 7),
(86, 7),
(90, 7),
(91, 7),
(92, 7),
(93, 7),
(94, 7),
(95, 7),
(96, 7),
(102, 7),
(66, 8),
(67, 8),
(68, 8),
(69, 8),
(70, 8),
(72, 8),
(73, 8),
(75, 8),
(77, 8),
(79, 8),
(80, 8),
(81, 8),
(85, 8),
(86, 8),
(87, 8),
(88, 8),
(89, 8),
(90, 8),
(93, 8),
(94, 8),
(95, 8),
(96, 8),
(97, 8),
(102, 8),
(127, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classrooms_blocks`
--
ALTER TABLE `classrooms_blocks`
  ADD PRIMARY KEY (`classroom_id`,`block_id`),
  ADD KEY `block_id` (`block_id`);

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
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classrooms_blocks`
--
ALTER TABLE `classrooms_blocks`
  ADD CONSTRAINT `classrooms_blocks_ibfk_1` FOREIGN KEY (`classroom_id`) REFERENCES `classrooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classrooms_blocks_ibfk_2` FOREIGN KEY (`block_id`) REFERENCES `blocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
