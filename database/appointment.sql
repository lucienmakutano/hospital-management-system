-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2019 at 02:37 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_marys_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `Citation_card` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `summary` varchar(255) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`appointment_id`),
  KEY `citation_card` (`Citation_card`),
  KEY `doc_id` (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `Citation_card`, `doctor_id`, `date`, `summary`, `checked`) VALUES
(2, 1, 3, '2019-10-10 00:00:00', 'dfdfffdf', 1),
(3, 2, 3, '2019-10-27 00:00:00', 'sdfghjk', 1),
(4, 1, 3, '2019-10-27 00:00:00', 'this is the test appointment', 1),
(5, 1, 3, '2019-11-07 00:00:00', 'Headache', 1),
(6, 4, 14, '2019-11-09 11:42:00', 'headache', 1),
(7, 5, 14, '2019-11-09 11:43:00', 'stomacache', 0),
(8, 3, 14, '2019-11-09 12:18:00', 'broken hand', 0),
(9, 4, 14, '2019-11-09 12:19:00', 'broken leg', 1),
(10, 4, 3, '2020-08-31 10:30:00', 'heartattack', 1),
(11, 3, 14, '2019-11-11 10:59:00', 'heart attack', 0),
(12, 4, 3, '2019-11-11 00:52:00', 'dfgdsfgd', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Citation_card`) REFERENCES `patient` (`Citation_card`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
