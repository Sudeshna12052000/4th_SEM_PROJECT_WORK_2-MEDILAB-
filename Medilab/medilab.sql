-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 11:20 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medilab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` bigint(250) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `Phone_no` bigint(200) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`, `First_name`, `Last_name`, `Email_ID`, `Phone_no`, `Designation`, `password`) VALUES
(10101, 'Jhon', 'Leo', 'jhon@gmail.com', 7897897897, 'Manager', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `clinicaltest`
--

CREATE TABLE `clinicaltest` (
  `Sl_no` bigint(250) NOT NULL,
  `Doctor_reffered` varchar(200) NOT NULL,
  `Patient_name` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Test_name` varchar(200) NOT NULL,
  `Test_type_id` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinicaltest`
--

INSERT INTO `clinicaltest` (`Sl_no`, `Doctor_reffered`, `Patient_name`, `Gender`, `Test_name`, `Test_type_id`, `Amount`) VALUES
(1, 'Dr Khan', 'Test1', 'Male', 'Blood Test', 'BT1', '80'),
(2, 'Dr Jhon', 'Test2', 'Female', 'Kidney Testing', 'KT4', '200'),
(3, 'Dr Chinmayi', 'Ramya', 'Female', 'Blood Test', 'BT1', '80');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sl_no` bigint(250) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sl_no`, `Name`, `Email_ID`, `Subject`, `Message`) VALUES
(1, 'Test2', 'test2@gmail.com', 'Testing', 'hi i am test2'),
(2, 'Test1', 'test1@gmail.com', 'Testing2', 'Hi dude I am test2'),
(3, 'Affan', 'affan@gmail.com', 'Testing3', 'Hi amigo I am Affan'),
(4, 'Test3', 'test3@gmail.com', 'Testing4', 'Hi dude I am test3, I am coming by evening '),
(5, 'chinmayi', 'chinmayi@gmail.com', 'testing5', 'hi i am test2');

-- --------------------------------------------------------

--
-- Table structure for table `lab_technician`
--

CREATE TABLE `lab_technician` (
  `ID` bigint(250) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `Phone_no` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab_technician`
--

INSERT INTO `lab_technician` (`ID`, `First_name`, `Last_name`, `Email_ID`, `Phone_no`, `password`) VALUES
(20201, 'Peter', 'Park', 'peter@gmail.com', '4564564564', '123123'),
(20202, 'Adhya', 'Arjun', 'adhya@gmail.com', '7789458615', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `Patient_ID` bigint(250) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Age` bigint(200) NOT NULL,
  `weight` varchar(200) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `Phone_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`Patient_ID`, `First_name`, `Last_name`, `Date`, `Age`, `weight`, `Email_ID`, `Phone_no`) VALUES
(1, 'Test1', 'testqq', '2020-12-28', 21, '75', 'test1@gmail.com', '9898989898'),
(2, 'Test2', 'testww', '2020-12-28', 22, '65', 'test2@gmail.com', '4567891235'),
(3, 'Ramya', 'Manjunath', '2020-12-30', 30, '50', 'ramya@gmail.com', '7896541235');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Sl_no` bigint(250) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Test_name` varchar(200) NOT NULL,
  `Test_ID` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Test1` varchar(200) NOT NULL,
  `Result1` varchar(200) NOT NULL,
  `Units` varchar(200) NOT NULL,
  `Standards1` varchar(200) NOT NULL,
  `Bio_ref1` varchar(200) NOT NULL,
  `Methadology` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Sl_no`, `First_name`, `Last_name`, `Gender`, `Test_name`, `Test_ID`, `Date`, `Time`, `Test1`, `Result1`, `Units`, `Standards1`, `Bio_ref1`, `Methadology`) VALUES
(1, 'Test1', 'testqq', 'Male', 'Blood Test', 'BT1', '2020-12-30', '09:26:00', 'Hemoglobin', '13', 'g/dL', 'is <', 'Hb', 'Arterial Sampling'),
(2, 'Test2', 'testww', 'Female', 'Kidney Testing', 'KT4', '2020-12-30', '09:33:00', 'GFR', '70', '%', 'is <', 'Glomerular Filtration Rate', 'ACR-GFR'),
(3, 'Ramya', 'Manjunath', 'Female', 'Blood Test', 'BT1', '2020-12-30', '14:55:00', 'WBC', '11500', 'millions/cumm', 'is >', 'proctitis', 'CDC');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Sl_no` bigint(250) NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Email_ID` varchar(200) NOT NULL,
  `create_password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Sl_no`, `First_name`, `Last_name`, `Email_ID`, `create_password`, `confirm_password`) VALUES
(1, 'test1', 'testq', 'test1@gmail.com', '123', '123'),
(2, 'Amith', 'Jesta', 'amith@gmail.com', '456', '456'),
(3, 'test2', 'testqw', 'test2@gmail.com', '789', '789'),
(4, 'Md', 'Affan', 'affan@gmail.com', '741', '741'),
(5, 'Test3', 'asdf', 'test3@gmail.com', '753', '753'),
(6, 'Chinmayi', 'Venugopal', 'chinmayi@gmail.com', 'blissful78992', 'blissful78992');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `clinicaltest`
--
ALTER TABLE `clinicaltest`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `lab_technician`
--
ALTER TABLE `lab_technician`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Sl_no`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `User_id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10102;

--
-- AUTO_INCREMENT for table `clinicaltest`
--
ALTER TABLE `clinicaltest`
  MODIFY `Sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lab_technician`
--
ALTER TABLE `lab_technician`
  MODIFY `ID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20203;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `Patient_ID` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Sl_no` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
