-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 11:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `level_id`, `class_name`) VALUES
(1, 1, 'Class-1'),
(2, 1, 'Class-2'),
(3, 1, 'Class-3'),
(4, 1, 'Class-4'),
(5, 1, 'Class-5'),
(6, 2, 'Class-6'),
(7, 2, 'Class-7'),
(8, 2, 'class-8'),
(9, 2, 'Class-9'),
(10, 2, 'Class-10'),
(11, 3, 'Class-11'),
(12, 3, 'Class-12'),
(13, 4, 'class-01'),
(14, 4, 'class-02'),
(15, 4, 'class-03'),
(16, 4, 'class-04'),
(17, 4, 'class-04'),
(18, 4, 'class-06'),
(19, 4, 'class-07'),
(20, 5, 'class-08'),
(21, 5, 'class-09'),
(22, 5, 'class-10'),
(23, 6, 'class-11'),
(24, 6, 'class-12'),
(29, 7, 'CSE'),
(30, 7, 'EEE'),
(31, 7, 'CTE'),
(32, 7, 'IPE'),
(33, 8, 'Subject-01'),
(34, 9, 'Economics'),
(35, 10, 'Business');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `subject_id`, `course_name`) VALUES
(1, 1, 'Bangla 1st paper'),
(2, 1, 'Bangla 2nd paper');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `sector_id`, `level_name`) VALUES
(1, 1, 'Primary'),
(2, 1, 'Secondary'),
(3, 1, 'Higher Secondary'),
(4, 2, 'Class 01-07'),
(5, 2, 'O-Level'),
(6, 2, 'A-Level'),
(7, 3, 'Engineering'),
(8, 3, 'BBA'),
(9, 3, 'Economics'),
(10, 3, 'Business Studies'),
(11, 4, 'IELTS'),
(12, 4, 'GRE'),
(13, 4, 'Story'),
(14, 4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(5) NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `person_email` varchar(100) NOT NULL,
  `person_password` varchar(100) NOT NULL,
  `person_phone` varchar(100) NOT NULL,
  `person_address` varchar(100) NOT NULL,
  `person_profession` varchar(100) NOT NULL,
  `person_experience` varchar(100) NOT NULL,
  `person_university` varchar(100) NOT NULL,
  `person_department` varchar(100) NOT NULL,
  `person_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `person_name`, `person_email`, `person_password`, `person_phone`, `person_address`, `person_profession`, `person_experience`, `person_university`, `person_department`, `person_type`) VALUES
(1, 'Piya Prue Marma', 'piya@gmail.com', '1234', '01670898699', 'Sayed Nagar, Dhaka', 'Student', '2 years', 'United International University', 'CSE', 'Student'),
(2, 'Swakkhar Shatabda', 'swakkhar@gmail.com', '0000', '01836105233', 'Madani Avenue, Dhaka', 'Lecturer', '5 years', 'United International Unviersity', 'CSE', 'Teacher'),
(4, 'Aditi Debnath', 'aditi@gmail.com', '1111', '6547893211', 'sayed nagar', '', '', 'UIU', 'CSE', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photos_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `no_of_photos` int(11) NOT NULL,
  `photos_loc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(11) NOT NULL,
  `sector_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `sector_name`) VALUES
(1, 'Bangla Medium'),
(2, 'English Medium'),
(3, 'Undergraduate'),
(4, 'Graduate'),
(5, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `class_id`, `subject_name`) VALUES
(1, 12, 'Bangla'),
(2, 12, 'English'),
(3, 12, 'Math'),
(4, 12, 'Phy'),
(5, 12, 'Che'),
(6, 12, 'ICT'),
(7, 29, 'Structured Programming Language'),
(8, 29, 'Math-003'),
(9, 29, 'Eng-01'),
(10, 29, 'Eng-02'),
(11, 29, 'Circuit'),
(12, 29, 'Math-151'),
(13, 29, 'Computer Architecture'),
(14, 29, 'Advanced Programming Language'),
(15, 29, 'Data Structure'),
(16, 29, 'Algorithm'),
(17, 29, 'Object Oriented Programming'),
(18, 29, 'Theory of Computing'),
(19, 29, 'Computer Networking'),
(20, 29, 'Network Security');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'video'),
(2, 'pdf'),
(3, 'photos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photos_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photos_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
