-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 09:13 PM
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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `books_id` int(11) NOT NULL,
  `books_name` varchar(250) NOT NULL,
  `writer_name` varchar(250) NOT NULL,
  `book_subject` varchar(250) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `person_mail` varchar(255) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `link` longtext NOT NULL,
  `video_title` varchar(250) NOT NULL,
  `pdf_title` varchar(250) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `person_mail`, `sector_id`, `level_id`, `class_id`, `subject_id`, `type_id`, `link`, `video_title`, `pdf_title`, `topic_id`) VALUES
(1, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', '', '', 0),
(2, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', '', '', 0),
(3, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', '', '', 0),
(4, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(5, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(6, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(7, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(8, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(9, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(10, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(11, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(12, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=wQzSvbscR8g', '', '', 0),
(13, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=q1IZALDfTCc', '', '', 0),
(14, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=cfpxKJCZ4ZM', '', '', 0),
(15, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=cfpxKJCZ4ZM', '', '', 0),
(16, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', 'Ami Tomari Naam Gai', '', 0),
(17, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(18, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(19, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(20, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(21, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(22, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(23, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(24, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(25, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(26, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=rYEDA3JcQqw&list=PLpDaZJaFURj6jmZr8qMg39ltpw1OlqqVp&index=13', 'Rolling in the Deep', '', 0),
(27, '', 0, 0, 0, 0, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', 'Rolling in the Deep', '', 0),
(28, '', 0, 0, 0, 0, 1, '', '', '', 0),
(29, '', 0, 0, 0, 0, 1, '', '', '', 0),
(30, '', 1, 0, 0, 0, 1, '', '', '', 0),
(31, '', 1, 2, 6, 0, 1, '', '', '', 0),
(32, '', 1, 2, 6, 0, 1, '', '', '', 0),
(33, '', 1, 2, 6, 0, 1, '', '', '', 0),
(34, '', 3, 7, 29, 11, 1, 'https://www.youtube.com/watch?v=bgXIKFJxySY', 'Demo input', '', 13);

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
(4, 'Aditi Debnath', 'aditi@gmail.com', '1111', '6547893211', 'sayed nagar', '', '', 'UIU', 'CSE', 'Guest'),
(5, 'Omar ', 'omarfaruk@gmail.com', '123456789', '01773357272', '', '', '', '', '', 'Teacher');

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
(20, 29, 'Network Security'),
(21, 1, 'Bangla'),
(22, 1, 'English'),
(23, 1, 'Math'),
(24, 1, ''),
(25, 2, 'Bangla'),
(26, 2, 'English'),
(27, 2, 'Math'),
(28, 2, 'Science'),
(29, 3, 'Bangla'),
(30, 3, 'English'),
(31, 3, 'Math'),
(32, 3, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `subject_id`) VALUES
(1, 'Introduction with C', 7),
(2, 'Variable', 7),
(3, 'Data Type', 7),
(4, 'if else', 7),
(5, 'switch', 7),
(6, 'loop', 7),
(7, 'array', 7),
(8, 'function', 7),
(9, 'pointer', 7),
(10, 'file', 7),
(11, 'Integration', 3),
(12, 'Differentiation', 3),
(13, 'Circuit', 11),
(14, 'Circuit 2', 11);

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

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`books_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

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
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `books_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
