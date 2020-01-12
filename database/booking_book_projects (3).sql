-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 02:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_book_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`book_id`, `title`, `description`, `type`) VALUES
(4, 'JAVA Script', 'Java Programming', 'Programming Language'),
(8, 'English', 'This book to help you understand about the English', 'English'),
(9, 'Allastrator', 'To help you to understand about the design', 'Design'),
(10, 'PHP', 'Basic PHP', 'Programming Language'),
(11, 'Academic writing ', 'This book to help you improve you writing', 'English'),
(12, 'JAVA Programming ', 'This book to help you know about java ', 'Programming Language'),
(13, 'Database Advance', 'To help you to know about Query ', 'database'),
(14, 'Responsive Design', 'To help you to know about Responsive page ', 'Front end Design '),
(15, 'Usability principle ', 'This book help you to know about the UX and UI design', 'Front end Design '),
(16, 'Query ', 'To know about JavaScript Framework', 'Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `book_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `Username`, `gender`, `email`, `book_id`, `startdate`, `enddate`) VALUES
(2, 'SereyRotha CHAN', 'Male', 'piseth.poeurn@gamil.com', 4, '2020-01-14', '2020-01-10'),
(3, 'piseth23', 'Female', 'manager@example.com', 4, '2020-01-07', '2020-01-10'),
(6, 'Kamyoeurng Vet', 'Male', 'khamyourn@gmail.com', 16, '2020-01-10', '2020-01-18'),
(7, 'Samnang Hen', 'Female', 'samnang@gmail.com', 8, '2020-01-11', '2020-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `user_name`
--

CREATE TABLE `user_name` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_name`
--

INSERT INTO `user_name` (`id`, `username`, `password`, `email`) VALUES
(1, 'group3', 12345, 'group3@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_student_class_idx` (`book_id`);

--
-- Indexes for table `user_name`
--
ALTER TABLE `user_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_name`
--
ALTER TABLE `user_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_student_class` FOREIGN KEY (`book_id`) REFERENCES `tbl_book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
