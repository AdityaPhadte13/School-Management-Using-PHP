-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2018 at 05:51 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `admin_id`, `password`) VALUES
(1, 'Admin first', 'Admin1', 'admin@123'),
(2, 'admin second', 'admin2', 'admin@1234'),
(3, 'Aditya', 'myid', 'mypass'),
(4, 'Admin THird', 'admin', 'admin@1234'),
(7, 'omkar', 'admin4', 'omkar@123');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `Subject`, `date`) VALUES
(18, 'holiday 1', '2018-10-26'),
(22, 'holiday 12', '2018-10-31'),
(23, 'day 1', '2018-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `link` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `Subject`, `date`, `link`) VALUES
(1, 'Event1', '2018-10-03', 'Notice1.docx'),
(2, 'Event2', '2018-11-01', 'Notice2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `student_attain`
--

DROP TABLE IF EXISTS `student_attain`;
CREATE TABLE IF NOT EXISTS `student_attain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `days_present` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_attain`
--

INSERT INTO `student_attain` (`id`, `year`, `month`, `student_id`, `days_present`) VALUES
(1, 2018, 'NOV', 1, 24),
(2, 2018, 'OCT', 1, 26),
(3, 2018, 'DEC', 1, 25),
(4, 2018, 'OCT', 2, 19),
(5, 2018, 'OCT', 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `roll_no` int(11) NOT NULL,
  `standard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `name`, `address`, `birth_date`, `roll_no`, `standard`, `division`, `user_name`, `password`) VALUES
(1, 'aditya phadte', 'kundaim,goa', '1999-08-05', 122, 'X', 'A', 'adit', 'adit@1'),
(2, 'Student1', 'Ponda,Goa', '2008-06-18', 104, 'V', 'C', 'stud1', 'stud@1'),
(4, 'Student2', 'Panaji,Goa', '2007-06-13', 20, 'VI', 'A', 'stud2', 'stud@2');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

DROP TABLE IF EXISTS `teachers_info`;
CREATE TABLE IF NOT EXISTS `teachers_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`id`, `name`, `qualification`, `birth_date`, `contact_no`) VALUES
(1, 'Teacher1', 'MSC', '1975-05-04', 9767452391),
(2, 'Faculty1', '10TH', '1970-07-08', 94654423241),
(3, 'Teacher2', 'BSC', '1983-02-18', 2412354212),
(4, 'Faculty2', '12TH', '1987-06-15', 12453643556),
(6, 'FacultyOld', '11TH', '1966-07-21', 234564457);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_attain`
--
ALTER TABLE `student_attain`
  ADD CONSTRAINT `student_attain_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
