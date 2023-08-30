-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 09:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aptech vision`
--

-- --------------------------------------------------------

--
-- Table structure for table `billrecord`
--

CREATE TABLE `billrecord` (
  `customer_id` int(11) NOT NULL,
  `billing_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `consumer_number` int(11) NOT NULL,
  `bill_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billrecord`
--

INSERT INTO `billrecord` (`customer_id`, `billing_name`, `price`, `consumer_number`, `bill_image`) VALUES
(1, 'electricity ', 9000, 2147483647, 'Images/electricity bill.jpg'),
(2, 'student billing', 78000, 465786998, 'Images/bill.png'),
(3, 'book', 8000, 576780989, 'Images/bill-book-170-500x500.png');

-- --------------------------------------------------------

--
-- Table structure for table `dob`
--

CREATE TABLE `dob` (
  `id` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dob`
--

INSERT INTO `dob` (`id`, `month`, `days`, `year`, `gender`) VALUES
(1, 'september', '24', '1998', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `email`, `password`) VALUES
(1, 'mary@gmail.com', '234'),
(2, 'mary@gmail.com', '234');

-- --------------------------------------------------------

--
-- Table structure for table `imagecrud`
--

CREATE TABLE `imagecrud` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(244) NOT NULL,
  `cat_image` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagecrud`
--

INSERT INTO `imagecrud` (`id`, `cat_name`, `cat_image`) VALUES
(1, 'hospital department', 'Image/img-1.jpg'),
(2, 'bill pay', 'Image/images.png'),
(3, 'PITC', 'Image/download.jpg'),
(4, 'image1', 'Image/logincode.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `mobile number`
--

CREATE TABLE `mobile number` (
  `id` int(11) NOT NULL,
  `mobile_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile number`
--

INSERT INTO `mobile number` (`id`, `mobile_number`) VALUES
(1, '45645646457');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`) VALUES
(1, 'mary', 'charlie');

-- --------------------------------------------------------

--
-- Table structure for table `registeremployee`
--

CREATE TABLE `registeremployee` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeremployee`
--

INSERT INTO `registeremployee` (`id`, `email`, `password`) VALUES
(1, 'mary@gmail.com', '234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billrecord`
--
ALTER TABLE `billrecord`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `dob`
--
ALTER TABLE `dob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagecrud`
--
ALTER TABLE `imagecrud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile number`
--
ALTER TABLE `mobile number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeremployee`
--
ALTER TABLE `registeremployee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billrecord`
--
ALTER TABLE `billrecord`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dob`
--
ALTER TABLE `dob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imagecrud`
--
ALTER TABLE `imagecrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobile number`
--
ALTER TABLE `mobile number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registeremployee`
--
ALTER TABLE `registeremployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
