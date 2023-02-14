-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cliente`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(21, 'jm@gmail.com', '2022-08-05 11:24:30'),
(22, 'jm@gmail.com', '2022-08-05 11:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(18, 'jm@gmail.com', 'Admin', 'Create Account', '2022-08-05 11:18:01'),
(19, 'mm@gmail.com', 'Admin', 'Create Account', '2022-08-05 13:37:30'),
(20, 'amish@gmail.com', 'Admin', 'Create Account', '2022-08-05 13:47:07'),
(21, 'moses@gmail.com', 'Admin', 'Create Account', '2022-08-06 06:00:32'),
(22, 'j@gmail.com', 'Admin', 'Create Account', '2022-08-06 06:35:53'),
(23, 'amina@gmail.com', 'Admin', 'Create Account', '2022-12-03 07:33:39'),
(24, 'maureen@gmail.com', 'Admin', 'Create Account', '2022-12-03 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `outcomes`
--

CREATE TABLE `outcomes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `outcome` varchar(250) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `outcomes`
--

INSERT INTO `outcomes` (`id`, `name`, `outcome`, `createdDate`) VALUES
(1, 'Amishika', 'It will help my purchases', '2022-12-03 07:33:39'),
(2, 'Maureen', 'Will help me in application', '2022-12-03 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `notes` varchar(250) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `name`, `notes`, `createdDate`) VALUES
(1, 'Amishika', 'I updated my details recently', '2022-12-03 07:33:39'),
(2, 'Maureen', 'I need to make application', '2022-12-03 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `referrals` varchar(250) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `name`, `referrals`, `createdDate`) VALUES
(1, 'Amishika', '001122', '2022-12-03 07:33:39'),
(2, 'Maureen', '0345', '2022-12-03 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `requests` varchar(250) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `requests`, `createdDate`) VALUES
(1, 'Amishika', 'Update my account age details.', '2022-12-03 07:33:39'),
(2, 'Maureen', 'Update my details', '2022-12-03 13:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `surname` varchar(250) NOT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `postalcode` varchar(200) DEFAULT NULL,
  `empstatus` varchar(250) NOT NULL,
  `accneeds` varchar(200) DEFAULT NULL,
  `requests` varchar(250) NOT NULL,
  `outcome` varchar(200) DEFAULT NULL,
  `referrals` varchar(250) NOT NULL,
  `notes` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `age`, `email`, `phone`, `postalcode`, `empstatus`, `accneeds`, `requests`, `outcome`, `referrals`, `notes`, `status`, `createdDate`) VALUES
(1, 'Amishika', 'Amina', 'Female', '16', 'amina@gmail.com', '0723906045', '00100', 'Self Employed', 'I need updating for my account', 'Kindly update my details', 'This will give you my current updated details', '98888888', 'I need updating for my account because I have changed ID', '1', '2022-12-03 07:33:39'),
(2, 'Maureen', 'maureen', 'Female', '25', 'maureen@gmail.com', '0728906047', '00100', 'Company Employed', 'Change Information', 'Why now', 'It will facilitate my travel', '998800', 'I need to get passport', '1', '2022-12-03 13:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outcomes`
--
ALTER TABLE `outcomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `outcomes`
--
ALTER TABLE `outcomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
