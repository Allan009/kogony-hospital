-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 07:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `name` varchar(30) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`name`, `cate_id`) VALUES
('Doctor', 1),
('Nurse', 2),
('Social worker', 3),
('Security guard', 4),
('Lab', 5),
('pharmacy', 6),
('Manager', 7),
('Registrar', 8);

-- --------------------------------------------------------

--
-- Table structure for table `patients_details`
--

CREATE TABLE `patients_details` (
  `email` varchar(30) DEFAULT NULL,
  `names` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medical_records` text DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `keen` varchar(30) NOT NULL,
  `keentel` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `stage` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients_details`
--

INSERT INTO `patients_details` (`email`, `names`, `dob`, `gender`, `patient_id`, `medical_records`, `country`, `county`, `keen`, `keentel`, `tel`, `stage`) VALUES
('FatumaAtieno@yaho.com', 'Fatuma Atieno', '06-03-1995', 'male', 1000, 'New Patient', 'Uganda', 'kampala', 'Vincent okeyo', '0712117213', '0721219369', 8),
('', 'Mike Ogello', '1995-03-11', 'male', 1001, NULL, 'Tanzania', 'Dar es salaam', 'Barrack Otis', '0729356103', '0712122113', 0),
('Victoria@gmail.com', 'Victoria Wangeci', '1946-11-12', 'male', 1002, NULL, 'Kenya', 'Bomet', 'Steve', '0745987212', '0798791221', 0),
('whizcomp@yahoo.com', 'victor kipkoech', '1997-05-12', 'male', 1003, 'New Patient\r\n', 'Uganda', 'Burkeni', 'Vincent okeyo', '0712117213', '0721219369', 3),
('ngenovic4@gmail.com', 'Victor ngeno', '1997-12-05', 'male', 1004, '18/11/2021\r\nAnnual body check up\r\n#pharmacy\r\nGave proofen ', 'Kenya', 'Nairobi', 'Mercy burgei', '0110297979', '0771234100', 3),
('123email@gmail.com', 'one two', '1997-06-10', 'female', 1005, 'New patient', 'South Sudan', 'Khartoum', 'Three Four', '0745987114', '0798797085', 7),
('peacemark@gmail.com', 'Peace Mark', '1997-11-11', 'male', 1006, '11/19/2021\r\n\r\nDoctors remarks\r\nRequesting lab for a ct scan\r\n\r\nlab results\r\n tested positive for 2/3 results', 'USA', 'New york', 'Barrack', '0745987212', '0798791221', 1),
('Victoria@gmail.com', 'Victoria Wangeci', '1946-11-12', 'male', 1007, NULL, 'Kenya', 'Bomet', 'Steve', '0745987212', '0798791221', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Patient_Event`
--

CREATE TABLE `Patient_Event` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patient_Event`
--

INSERT INTO `Patient_Event` (`id`, `name`) VALUES
(1, 'Lab'),
(2, 'accounting'),
(3, 'pharmacy'),
(4, 'icu'),
(7, 'Doctor'),
(8, 'Registrar');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `fullname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT '123456',
  `cate_id` int(11) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `tel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`fullname`, `id`, `email`, `password`, `cate_id`, `dob`, `country`, `county`, `tel`) VALUES
('victor kipkoech', 1, 'ngenovic4@gmail.com', '123456', 1, '2001-01-01', 'USA', 'Nairobi', '0110112331'),
('weldon korir', 2, 'woli@email.com', '123456', 2, '2001-01-01', 'USA', 'Nairobi', '0110112331'),
('Daktari Kevin', 3, 'ngenovic@gmail.com', '123456', 3, '2001-01-01', 'USA', 'Nairobi', '0110112331'),
('whiz comp', 4, 'whizcomp@yahoo.com', '123456', 5, '2001-01-01', 'USA', 'Nairobi', '0110112331'),
('Obadiah Mainek', 5, 'obadiahMainek@gmail.com', '123456', 7, '2001-01-01', 'Kenya', 'Nairobi', '0123335103'),
('TifanyCherop', 6, 'TifanyCherop211@gmail.com', '123456', 8, '2001-01-01', 'Kenya', 'Nairobi', '0123335103'),
('Victor waLia', 7, 'Newstaff@gmail.com', '123456', 6, '2001-01-01', 'Kenya', 'Nairobi', '0123335103'),
('Sharon Akinyi', 8, 'SharonAkinyi@gmail.com', '123456', 5, '2001-01-01', 'Kenya', 'Nairobi', '0123335103');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `patients_details`
--
ALTER TABLE `patients_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `Patient_Event`
--
ALTER TABLE `Patient_Event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patients_details`
--
ALTER TABLE `patients_details`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `Patient_Event`
--
ALTER TABLE `Patient_Event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
