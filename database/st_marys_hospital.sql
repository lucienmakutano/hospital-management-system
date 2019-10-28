-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 06:22 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `Citation_card` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `sorted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `Citation_card`, `doctor_id`, `date`, `time`, `summary`, `sorted`) VALUES
(2, 1, 3, '2019-10-10', '03:03:00.000000', 'dfdfffdf', 0),
(3, 2, 3, '2019-10-27', '11:06:00.000000', 'sdfghjk', 0),
(4, 1, 3, '2019-10-27', '17:56:00.000000', 'this is the test appointment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_tablet` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `quantity`, `price_per_tablet`, `provider`) VALUES
(2, 'paracetamol', 100, 10, 'twist inc.'),
(3, 'paracetamol', 400, 20, 'lucien org'),
(4, 'cypro', 220, 40, 'twist inc.'),
(5, 'apirine', 500, 50, 'lucien org'),
(7, 'shalsip tz', 500, 50, 'shalina');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `message` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `message`, `date`) VALUES
(1, 'title', 'this is the first news', '2019-10-20'),
(2, 'lorem', 'lorem ipsum', '2019-10-20'),
(3, 'lorem 1', 'this is the third news of the day', '2019-10-20'),
(4, 'lorem 2', 'bla bla', '2019-10-20'),
(5, 'hjkjj', 'lorem ipsum 6', '2019-10-20'),
(6, 'lorem 2', 'lorem ipsum 87', '2019-10-20'),
(7, 'lorem 2', 'fghjkl;\'56789', '2019-10-20'),
(8, 'lorem 2', 'fggdfgdff', '2019-10-20'),
(9, 'news 123', 'Lorem ipsum dolor sit amet, mei nibh tacimates principes an, ei exerci oblique disputando est, consul officiis eos eu. Cum eu omnes persequeris, cu clita postulant percipitur vel. Ius quod erant populo ad, ius dicat euismod at, ea dicam ceteros sed. Ne vocent laboramus constituto cum, duo alienum of', '2019-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Citation_card` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `DOB` date NOT NULL,
  `gender` text NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Citation_card`, `fname`, `lname`, `DOB`, `gender`, `phonenumber`, `address`) VALUES
(1, 'luciien', 'maku', '2019-10-26', 'male', 123456, 'nairobi'),
(2, 'luciien', 'maku', '2019-10-26', 'male', 123456, 'nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `patient_room`
--

CREATE TABLE `patient_room` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_room`
--

INSERT INTO `patient_room` (`id`, `patient_id`, `room_id`, `date`) VALUES
(2, 1, 1, '2019-10-27 17:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescription_id` varchar(100) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `Citation_card` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `issued_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `sorted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `provider_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`provider_id`, `name`, `address`, `email`, `phone_number`) VALUES
(1, 'twist inc.', 'nairobi kenya', 'lucien.programmer@gmail.com', 713125823),
(2, 'lucien org', 'congo kinshasa', 'lucien@org.cd', 713125823),
(3, 'shalina', 'bukavu,  DRC', 'shaline@shal.cs', 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_number` int(11) NOT NULL,
  `type` text NOT NULL,
  `number_of_beds` int(20) NOT NULL,
  `price` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_number`, `type`, `number_of_beds`, `price`, `is_available`) VALUES
(1, 'luxury', 1, 14000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` int(11) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `speciality`, `staff_id`) VALUES
(1, 'pediatrician', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `profile_picture` varchar(200) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verification_key` varchar(100) NOT NULL,
  `is_validated` varchar(4) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fname`, `lname`, `dob`, `gender`, `email`, `phone_number`, `profile_picture`, `user_type`, `password`, `verification_key`, `is_validated`) VALUES
(8, 'annie', 'kihangi', '2019-10-26', 'female', 'annie@gmail.com', 790129900, 'http://localhost/st_marys_hospital/uploads/avatar-icon.jpg', 'nurse', 'X2MEOQY8Aj8HM1YzWDtYYgcy', 'aa48a79699cda827ab361e767755b4c8', 'no'),
(6, 'bill', 'nyerere', '2019-10-26', 'male', 'bill@gmail.com', 711220000, 'http://localhost/st_marys_hospital/uploads/Zoltan-Avatar1.jpg', 'pharmacist', 'CSRdZgYzAScAPAcyADJbO1clAH0HZVI2WGUBYg==', 'f6a838af36bddef1c564fbbebcc2a0c7', 'no'),
(5, 'christian', 'maunga', '2019-10-26', 'male', 'christian@gmail.com', 711000000, 'http://localhost/st_marys_hospital/uploads/person-avatar.png', 'nurse', 'DT5WcFN1VHNWYgpvBWYKMFNm', 'b4a1c8d9de890eea4ae3f94a45651139', 'no'),
(3, 'kirtan', 'patel', '2019-10-26', 'male', 'kirtan@gmail.com', 700000000, 'http://localhost/st_marys_hospital/uploads/Arnold-Avatar.jpg', 'doctor', 'DTRQbAg/UHBSbAYgVDRaYQY0ATw=', '42709b0dd2837586679c3a858f16e8d5', 'no'),
(2, 'lucien', 'makutano', '2019-10-26', 'male', 'lucien@gmail.com', 713125823, 'http://localhost/st_marys_hospital/uploads/one-punch-man-avatar.png', 'admin', 'WmZTZAY/ATwBPlQxAGMAOldi', '5b99c3e52edb9176114c7b43266451f6', 'no'),
(7, 'tryphose', 'masika', '2019-10-26', 'female', 'tryphy@gmail.com', 995960789, 'http://localhost/st_marys_hospital/uploads/cute-avatar.JPG', 'pharmacist', 'W2oEOAgqBzZSMgpsVzUNMA==', 'a7a621dd50b348a762f5011d86e90a98', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `citation_card` (`Citation_card`),
  ADD KEY `doc_id` (`doctor_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `prov_id` (`provider`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Citation_card`);

--
-- Indexes for table `patient_room`
--
ALTER TABLE `patient_room`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_id` (`patient_id`),
  ADD UNIQUE KEY `room_id` (`room_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `doc-ID` (`doctor_id`),
  ADD KEY `cit_id` (`Citation_card`),
  ADD KEY `med-id` (`medicine_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`provider_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Citation_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_room`
--
ALTER TABLE `patient_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Citation_card`) REFERENCES `patient` (`Citation_card`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`provider`) REFERENCES `provider` (`name`);

--
-- Constraints for table `patient_room`
--
ALTER TABLE `patient_room`
  ADD CONSTRAINT `patient_room_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`Citation_card`),
  ADD CONSTRAINT `patient_room_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_number`);

--
-- Constraints for table `specialities`
--
ALTER TABLE `specialities`
  ADD CONSTRAINT `specialities_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
