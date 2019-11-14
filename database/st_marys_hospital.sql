-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 03:02 PM
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
  `date` datetime NOT NULL,
  `summary` varchar(255) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `Citation_card`, `doctor_id`, `date`, `summary`, `checked`) VALUES
(2, 1, 3, '2019-10-10 00:00:00', 'dfdfffdf', 1),
(3, 2, 3, '2019-10-27 00:00:00', 'sdfghjk', 1),
(4, 1, 3, '2019-10-27 00:00:00', 'this is the test appointment', 1),
(5, 1, 3, '2019-11-07 00:00:00', 'Headache', 1),
(6, 4, 14, '2019-11-09 11:42:00', 'headache', 0),
(7, 5, 14, '2019-11-09 11:43:00', 'stomacache', 0),
(8, 3, 14, '2019-11-09 12:18:00', 'broken hand', 0),
(9, 4, 14, '2019-11-09 12:19:00', 'broken leg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `ID` int(11) NOT NULL,
  `citation_card` int(11) DEFAULT NULL,
  `blood_pressure` varchar(15) DEFAULT NULL,
  `height` varchar(20) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `BMI` varchar(20) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`ID`, `citation_card`, `blood_pressure`, `height`, `weight`, `BMI`, `Date`) VALUES
(1, 1, '120', '153', '65', '14', '2019-11-11 08:29:20'),
(3, 2, '140', '153', '67', '25', '2019-11-11 08:36:07'),
(4, 3, '120', '123', '120', '23', '2019-11-11 14:03:11'),
(5, 4, '120', '90', '170', '26', '2019-11-11 14:04:10'),
(6, NULL, '45t', '1.59', '69', '27.29322416043669', '2019-11-14 06:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `dispatches`
--

CREATE TABLE `dispatches` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `citation_card` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_dispatched` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medic_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `price_per_tablet` int(11) NOT NULL,
  `provider` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medic_id`, `quantity`, `expiry_date`, `price_per_tablet`, `provider`) VALUES
(16, 4, 234, '2019-11-09', 12, 3),
(17, 1, 120, '2019-11-09', 23, 2),
(20, 3, 122, '2019-11-09', 1, 2),
(21, 1, 211, '2019-11-09', 12, 2),
(22, 2, 879, '2019-11-09', 346, 3),
(23, 1, 324, '2019-11-09', 234, 2),
(24, 1, 34, '2019-11-09', 234, 3),
(25, 3, 4, '2019-11-16', 3, 3),
(26, 2, 450, '2019-10-09', 50, 3),
(27, 4, 56, '2019-10-09', 7, 3),
(28, 3, 56, '2019-10-09', 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_details`
--

CREATE TABLE `medicine_details` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(50) NOT NULL,
  `unit` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_details`
--

INSERT INTO `medicine_details` (`medicine_id`, `medicine_name`, `unit`) VALUES
(1, 'paracetamol', 'tablet'),
(2, 'amoxy', 'tablet'),
(3, 'panadol', 'tablet'),
(4, 'apirine', 'tablet');

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
(9, 'news 123', 'Lorem ipsum dolor sit amet, mei nibh tacimates principes an, ei exerci oblique disputando est.\r\n', '2019-10-24');

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
(2, 'luciien', 'maku', '2019-10-26', 'male', 123456, 'nairobi'),
(3, 'tryphose', 'masika', '2019-11-09', 'male', 995960789, 'nairobi kenya'),
(4, 'lucien', 'makutano', '2019-11-09', 'male', 2147483647, 'nairobi kenya'),
(5, 'lucien', 'makutano', '2019-11-09', 'male', 2147483647, 'nairobi kenya'),
(6, 'tryphose', 'masika', '2019-11-09', 'male', 712120000, 'nairobi kenya');

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
  `prescription_id` int(11) NOT NULL,
  `dosage` varchar(10) NOT NULL,
  `doctor_id` varchar(50) NOT NULL,
  `Citation_card` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `issued_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `checked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescription_id`, `dosage`, `doctor_id`, `Citation_card`, `medicine_id`, `issued_on`, `checked`) VALUES
(1, 'fsdafasdfs', '3', 2, 0, '2019-11-14 07:08:12', 0),
(2, 'sfdfsdfsdf', '3', 1, 0, '2019-11-14 07:10:08', 0);

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
(1, 'pediatrician', 3),
(2, 'surgeon', 14);

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
(13, 'blessing', 'makutano', '2019-11-09', 'male', 'b@mail.com', 34567890, 'http://localhost/st_marys_hospital/uploads/illustration-avatar.jpg', 'admin', 'CDcDPAk8AzJVdwMkUWkAZwRiCXM=', '444f00fcc10fee9233a97729a9110eb3', 'no'),
(6, 'bill', 'nyerere', '2019-10-26', 'male', 'bill@gmail.com', 711220000, 'http://localhost/st_marys_hospital/uploads/Zoltan-Avatar1.jpg', 'pharmacist', 'CSRdZgYzAScAPAcyADJbO1clAH0HZVI2WGUBYg==', 'f6a838af36bddef1c564fbbebcc2a0c7', 'no'),
(5, 'christian', 'maunga', '2019-10-26', 'male', 'christian@gmail.com', 711000000, 'http://localhost/st_marys_hospital/uploads/person-avatar.png', 'nurse', 'DT5WcFN1VHNWYgpvBWYKMFNm', 'b4a1c8d9de890eea4ae3f94a45651139', 'no'),
(12, 'faustin', 'makutano', '2019-11-06', 'male', 'f@gmail.com', 2147483647, 'http://localhost/st_marys_hospital/uploads/cartoon-avatar.jpg', 'admin', 'DTZTYVNyUXYNKAQ5Um1cZAIxAjgDZA==', '2911d95412271069c08bbe0ce9e7e5c6', 'no'),
(17, 'felix', 'tshitshi', '2019-11-06', 'male', 'felix@gmail.com', 7987654, 'http://localhost/st_marys_hospital/uploads/mojtaba-avatar.png', 'pharmacist', 'DzQEMldvAz4FLFR0ACIMbQFpAn8AIAE/Wzw=', '31a84984e90ff1c64fbb21795256a1ce', 'no'),
(15, 'hellene', 'maunga', '2019-11-02', 'female', 'hm@gmail.com', 56789876, 'http://localhost/st_marys_hospital/uploads/miracle-avatr.png', 'admin', 'ADVSZAI6V29SZldtVGALMwQ3BD5XMA==', '5e9af806e6dae667cb80157880fcf115', 'no'),
(14, 'juliette', 'makutano', '2019-07-08', 'female', 'j@gmail.com', 567896534, 'http://localhost/st_marys_hospital/uploads/summer-avatar3.png', 'doctor', 'ADcGIFVtDTAEMFZ2BCFaNg==', 'ebb962091dc1e838be90178c961a3e5c', 'no'),
(3, 'kirtan', 'patel', '2019-10-26', 'male', 'kirtan@gmail.com', 700000000, 'http://localhost/st_marys_hospital/uploads/Arnold-Avatar.jpg', 'doctor', 'DTRQbAg/UHBSbAYgVDRaYQY0ATw=', '42709b0dd2837586679c3a858f16e8d5', 'no'),
(16, 'lydia', 'makutano', '2019-11-02', 'female', 'lm@gmail.com', 456785490, 'http://localhost/st_marys_hospital/uploads/avatar-icon1.jpg', 'admin', 'X24ELlJiATwAMARhUzANN1Fk', '75cf0ae4af721db4840ca67be7536aec', 'no'),
(2, 'lucien', 'makutano', '2019-10-26', 'male', 'lucien@gmail.com', 713125823, 'http://localhost/st_marys_hospital/uploads/one-punch-man-avatar.png', 'admin', 'WmYGMQI7BjtSbVNuVXcLdgZ1Vj5WcQE4AX0=', '5b99c3e52edb9176114c7b43266451f6', 'no'),
(18, 'fsda', 'sda', '2019-11-06', 'sda', 'sdaf@fsd.dfsa', 2342345, 'http://localhost/st_marys_hospital/uploads/skecth-avatar.png', 'nurse', 'DTpXbAM8BzQAOwM/AzUNYgNxVTZSaldrAGEBJlslADk=', '29291adef1a83962d94eafbed8c4e60c', 'no'),
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
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `citation_card` (`citation_card`);

--
-- Indexes for table `dispatches`
--
ALTER TABLE `dispatches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicine_id` (`medicine_id`),
  ADD KEY `citation_card` (`citation_card`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`),
  ADD KEY `prov_id` (`provider`);

--
-- Indexes for table `medicine_details`
--
ALTER TABLE `medicine_details`
  ADD PRIMARY KEY (`medicine_id`);

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dispatches`
--
ALTER TABLE `dispatches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `medicine_details`
--
ALTER TABLE `medicine_details`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Citation_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_room`
--
ALTER TABLE `patient_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- Constraints for table `dispatches`
--
ALTER TABLE `dispatches`
  ADD CONSTRAINT `dispatches_ibfk_1` FOREIGN KEY (`citation_card`) REFERENCES `patient` (`Citation_card`),
  ADD CONSTRAINT `dispatches_ibfk_2` FOREIGN KEY (`medicine_id`) REFERENCES `medicine` (`medicine_id`);

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
