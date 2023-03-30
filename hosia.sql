-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2021 at 07:41 AM
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
('Security guard', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patients_details`
--

CREATE TABLE `patients_details` (
  `email` varchar(30) NOT NULL,
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
('whizcomp@yahoo.com', 'victor kipkoech', '1997-05-12', 'male', 1, 'New Patient', 'Uganda', 'Burkeni', 'Vincent okeyo', '0712117213', '0721219369', 3),
('ngenovic4@gmail.com', 'Victor ngeno', '1997-12-05', 'male', 2, '18/11/2021\r\nAnnual body check up\r\n#pharmacy\r\nGave proofen ', 'Kenya', 'Nairobi', 'Mercy burgei', '0110297979', '0771234100', 2),
('123email@gmail.com', 'one two', '1997-06-10', 'female', 4, 'New patient', 'South Sudan', 'Khartoum', 'Three Four', '0745987114', '0798797085', 1),
('peacemark@gmail.com', 'Peace Mark', '1997-11-11', 'male', 5, NULL, 'USA', 'New york', 'Barrack', '0745987212', '0798791221', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `fullname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL DEFAULT '123456',
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`fullname`, `id`, `email`, `password`, `cate_id`) VALUES
('victor kipkoech', 1, 'ngenovic4@gmail.com', '123456', 1),
('weldon korir', 2, 'woli@email.com', '123456', 2),
('Daktari Kevin', 3, 'ngenovic@gmail.com', '123456', 1);

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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients_details`
--
ALTER TABLE `patients_details`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
