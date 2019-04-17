-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 08:11 AM
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
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_pdf_link` varchar(500) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `book_author`, `book_pdf_link`, `course_id`) VALUES
(1, 'The C Programming Language', 'Brian Kernighan and Dennis Ritchie\r\n', 'https://www.dipmat.univpm.it/~demeio/public/the_c_programming_language_2.pdf', 1),
(2, 'C Programming: A Modern Approach', 'Kim N. King', 'https://www.scribd.com/document/362525466/K-N-King-C-Programming-A-Modern-Approach-2nd-Edition-pdf', 1),
(3, '21st Century C: C Tips from the New School', 'Ben Klemens', 'http://karadev.net/uroci/filespdf/files/21st-century-c-o-reilly-ben-klemens.pdf', 1);

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(1, 'abc', 'def'),
(2, 'pqr', 'xyz');

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
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `pdf_id` int(11) NOT NULL,
  `pdf_title` varchar(100) DEFAULT NULL,
  `pdf_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`pdf_id`, `pdf_title`, `pdf_link`) VALUES
(1, 'API', 'pdf/api'),
(2, 'Basic Concepts', 'pdf/basic_concepts'),
(3, 'Ethics', 'pdf/ethics'),
(4, 'Git', 'pdf/git'),
(5, 'JSON', 'pdf/json'),
(6, 'Modularity', 'pdf/modularity'),
(7, 'MSA', 'pdf/msa'),
(8, 'Process Models', 'pdf/process_models'),
(9, 'REST', 'pdf/rest'),
(10, 'SOA', 'pdf/soa'),
(11, 'System Design', 'pdf/system_design'),
(12, 'Test', 'pdf/test');

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
-- Table structure for table `single_course`
--

CREATE TABLE `single_course` (
  `course_id` int(10) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_description` varchar(5000) NOT NULL,
  `course_pdf_link` varchar(500) NOT NULL,
  `course_book_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `single_course`
--

INSERT INTO `single_course` (`course_id`, `course_title`, `course_description`, `course_pdf_link`, `course_book_description`) VALUES
(1, 'C Programming', 'The fastest, easiest way to learn to program C on a Mac or Windows. This course will teach you to program the C language from the ground up. You will learn everything from the very fundamentals of programming right through to the complexities of pointers, addresses and File IO.\r\nMaybe you\'ve tried to master C before but failed. Or maybe you are new to C or new to programming. If so, this is the course for you! \r\n\r\nC is one of the most important of all programming languages. It is used to program desktop applications, compilers, tools and utilities and even hardware devices. The C language is fast and efficient – but it can be hard to learn. Unless you use this course. This course begins with a gentle introduction to C but quickly moves on to explain some of its most confusing features: everything from C\'s \'scoping\' rules to the curious connection between arrays and memory addresses. By the end of the course you will have a deep understanding both of the C language itself and also of the underlying \'architecture\' of your computer.', 'https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true', 'When you write any program in C language then to run that program you need to compile that program using a C Compiler which converts your program into a language understandable by a computer. This is called machine language (ie. binary format). So before proceeding, make sure you have C Compiler available at your computer. It comes alongwith all flavors of Unix and Linux. If you are working over Unix or Linux then you can type gcc -v or cc -v and check the result. You can ask your system administrator or you can take help from anyone to identify an available C Compiler at your computer.');

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
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `topic_title` varchar(100) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `pdf_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_title`, `video_id`, `pdf_id`) VALUES
(1, 'C Programming', 1, 1);

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
  `video_title` varchar(100) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_link`) VALUES
(1, 'C Tutorial for Beginners 1', 'si-KFFOW2gw'),
(2, 'C Tutorial for Beginners 2', 'sB7YGSbAIvQ'),
(3, 'C Tutorial for Beginners 3', 'nZnMH5x6PfQ'),
(4, 'C Tutorial for Beginners 4', 'rFnWoTnoC50'),
(5, 'C Tutorial for Beginners 5', 'TxWKGhF9KdM'),
(6, 'C Tutorial for Beginners 6', 'ndfz-biPdZ0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `course_id` (`course_id`);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

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
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`pdf_id`);

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
-- Indexes for table `single_course`
--
ALTER TABLE `single_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `video_id` (`video_id`),
  ADD KEY `pdf_id` (`pdf_id`);

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
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `single_course`
--
ALTER TABLE `single_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `single_course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `video` (`video_id`),
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`pdf_id`) REFERENCES `pdf` (`pdf_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
