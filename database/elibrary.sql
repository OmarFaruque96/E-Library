-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 12:49 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
  `books_title` varchar(250) NOT NULL,
  `books_cover_image` varchar(1000) NOT NULL,
  `books_description` varchar(5000) NOT NULL,
  `books_author` varchar(250) NOT NULL,
  `books_pdf_link` varchar(250) NOT NULL,
  `books_view_pdf_link` varchar(500) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`books_id`, `books_title`, `books_cover_image`, `books_description`, `books_author`, `books_pdf_link`, `books_view_pdf_link`, `course_id`) VALUES
(2, 'The C Programming Language', '', 'C is a high-level and general-purpose programming language that is ideal for developing firmware or portable applications. Originally intended for writing system software, C was developed at Bell Labs by Dennis Ritchie for the Unix Operating System in the early 1970s.', 'Brian Kernighan and Dennis Ritchie', 'https://www.dipmat.univpm.it/~demeio/public/the_c_programming_language_2.pdf', 'pdf\\The C Programming Language.pdf', 1),
(3, 'C Programming: A Modern Approach', '', 'Professor King\'s spiral approach made it accessible to a broad range of readers, from beginners to more advanced students. With adoptions at over 225 colleges, the first edition was one of the leading C textbooks of the last ten years. The second edition maintains all the book\'s popular features and brings it up to date with coverage of the C99 standard. The new edition also adds a significant number of exercises and longer programming projects, and includes extensive revisions and updates.', 'Kim N. King', 'https://cyber.rms.moe/books/01%20-%20Computer%20Science/C%20Programming%2C%20A%20Modern%20Approach%20-%20K.%20N.%20King.pdf', 'pdf\\21 Century C.pdf', 1),
(4, '21st Century C: C Tips from the New School', '', 'Throw out your old ideas about C and get to know a programming language that’s substantially outgrown its origins. With this revised edition of 21st Century C, you’ll discover up-to-date techniques missing from other C tutorials, whether you’re new to the language or just getting reacquainted. C isn’t just the foundation of modern programming languages; it is a modern language, ideal for writing efficient, state-of-the-art applications. Get past idioms that made sense on mainframes and learn the tools you need to work with this evolved and aggressively simple language. No matter what programming language you currently favor, you’ll quickly see that 21st century C rocks. Set up a C programming environment with shell facilities, makefiles, text editors, debuggers, and memory checkers Use Autotools, C’s de facto cross-platform package manager Learn about the problematic C concepts too useful to discard Solve C’s string-building problems with C-standard functions Use modern syntactic features for functions that take structured inputs Build high-level, object-based libraries and programs Perform advanced math, talk to internet servers, and run databases with existing C libraries This edition also includes new material on concurrent threads, virtual tables, C99 numeric types, and other features.', 'Ben Klemens', 'http://karadev.net/uroci/filespdf/files/21st-century-c-o-reilly-ben-klemens.pdf', 'pdf\\C Programming, A Modern Approach.pdf', 1);

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
(8, 2, 'Class-8'),
(9, 2, 'Class-9'),
(10, 2, 'Class-10'),
(11, 3, 'Class-11'),
(12, 3, 'Class-12'),
(13, 4, 'Class-1'),
(14, 4, 'Class-2'),
(15, 4, 'Class-3'),
(16, 4, 'Class-4'),
(17, 4, 'Class-5'),
(18, 4, 'Class-6'),
(19, 4, 'Class-7'),
(20, 5, 'Class-8'),
(21, 5, 'Class-9'),
(22, 5, 'Class-10'),
(23, 6, 'Class-11'),
(24, 6, 'Class-12'),
(29, 7, 'CSE'),
(30, 7, 'EEE'),
(31, 7, 'CTE'),
(32, 7, 'IPE'),
(33, 8, 'SUBJECT-01'),
(34, 9, 'ECONOMICS'),
(35, 10, 'BUSINESS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(10) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `course_description` varchar(5000) NOT NULL,
  `course_pdf_link` varchar(500) NOT NULL,
  `course_book_description` varchar(5000) NOT NULL,
  `subject_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `course_description`, `course_pdf_link`, `course_book_description`, `subject_id`) VALUES
(1, 'C Programming', 'The fastest, easiest way to learn to program C on a Mac or Windows. This course will teach you to program the C language from the ground up. You will learn everything from the very fundamentals of programming right through to the complexities of pointers, addresses and File IO.\r\nMaybe you\'ve tried to master C before but failed. Or maybe you are new to C or new to programming. If so, this is the course for you! \r\n\r\nC is one of the most important of all programming languages. It is used to program desktop applications, compilers, tools and utilities and even hardware devices. The C language is fast and efficient – but it can be hard to learn. Unless you use this course. This course begins with a gentle introduction to C but quickly moves on to explain some of its most confusing features: everything from C\'s \'scoping\' rules to the curious connection between arrays and memory addresses. By the end of the course you will have a deep understanding both of the C language itself and also of the underlying \'architecture\' of your computer.', 'https://docs.google.com/viewer?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true', 'When you write any program in C language then to run that program you need to compile that program using a C Compiler which converts your program into a language understandable by a computer. This is called machine language (ie. binary format). So before proceeding, make sure you have C Compiler available at your computer. It comes alongwith all flavors of Unix and Linux. If you are working over Unix or Linux then you can type gcc -v or cc -v and check the result. You can ask your system administrator or you can take help from anyone to identify an available C Compiler at your computer.', 7);

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
(34, '', 3, 7, 29, 11, 1, 'https://www.youtube.com/watch?v=bgXIKFJxySY', 'Demo input', '', 13),
(35, 'piya@gmail.com', 3, 7, 29, 11, 1, 'https://www.youtube.com/watch?v=YmdxYvLgsGg', 'Dub ', '', 13),
(36, 'piya@gmail.com', 3, 7, 29, 11, 1, 'https://www.youtube.com/watch?v=foT-z4bymb0', 'ebr ', '', 13),
(37, 'piya@gmail.com', 0, 0, 0, 0, 2, '70639-capturenid-(4-files-merged).pdf', '', 'Demo', 0),
(38, 'piya@gmail.com', 0, 0, 0, 0, 2, '1606-capturenid-(4-files-merged).pdf', '', 'Demo', 0),
(39, 'piya@gmail.com', 0, 0, 0, 0, 2, '8355-capturenid-(4-files-merged).pdf', '', '1st', 0);

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
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` int(10) NOT NULL,
  `notes_title` varchar(100) NOT NULL,
  `notes_pdf_link` varchar(500) NOT NULL,
  `topic_id` int(10) NOT NULL,
  `uploader_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `notes_title`, `notes_pdf_link`, `topic_id`, `uploader_id`) VALUES
(1, 'Array', 'http://karadev.net/uroci/filespdf/files/21st-century-c-o-reilly-ben-klemens.pdf', 7, 1),
(2, 'Array', 'https://www.kau.edu.sa/Files/0052053/Subjects/10_csphtp1_07pdf.pdf', 7, 1),
(3, 'Pointer', 'http://ee.hawaii.edu/~tep/EE160/Book/PDF/Chapter6.pdf', 9, 1),
(4, 'Pointer', 'http://www.cs.utexas.edu/users/fussell/cs310h/lectures/Lecture_17-310h.pdf', 9, 1),
(5, 'Conditional Statements', 'https://www.cs.cmu.edu/~mrmiller/15-110/Handouts/conditionals.pdf', 4, 1),
(6, 'Loop Statements', 'https://www.inf.unibz.it/~calvanese/teaching/06-07-ip/lecture-notes/uni06.pdf', 6, 1);

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
(7, 29, 'C Programming'),
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
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `course_id`) VALUES
(1, 'Introduction with C', 1),
(2, 'Variable', 1),
(3, 'Data Type', 1),
(4, 'if else', 1),
(5, 'switch', 1),
(6, 'loop', 1),
(7, 'array', 1),
(8, 'function', 1),
(9, 'pointer', 1),
(10, 'file', 1);

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
  `topic_id` int(11) NOT NULL,
  `uploader_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_title`, `video_link`, `topic_id`, `uploader_id`) VALUES
(1, 'C Programming - Intro into Array', 'https://www.youtube.com/embed/watch?v=BjVeWRNiddE', 7, 1),
(2, 'C Programming - Simple Array Problem', 'https://www.youtube.com/embed/watch?v=BqU3_ouKHwk', 7, 1),
(3, 'C Programming Tutorial - For Loop', 'https://www.youtube.com/embed/watch?v=FPjLbPu5BsQ', 6, 2),
(4, 'C Programming Tutorial - While Loops', 'https://www.youtube.com/embed/watch?v=7pAXm7WEA2I', 6, 2),
(5, 'C Programming Tutorial - Files', 'https://www.youtube.com/embed/watch?v=38I_AUMpKpQ', 10, 4),
(6, 'C Programming Tutorial - If, Else If, Else Statements', 'https://www.youtube.com/embed/watch?v=SOnpOBvyhDM', 4, 4);

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
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_id`);

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
  MODIFY `books_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
