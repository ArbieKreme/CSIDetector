-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 10:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `firstname`, `middlename`, `lastname`, `email`, `contact_number`, `house_number`, `street`, `city`, `password`, `created_at`) VALUES
(7, 'arbie', 'Ronald', '', 'Tecson', 'tecsonronaldbo@gmail.com', '+639279585321', '124', 'Twin Pioneer', 'Pasay', 'eb11ee2bbfb6ccfe7cde6cb835a03381', '2019-04-05 05:30:23.091501'),
(8, 'ronald', 'ronald', '', 'tecson', '', '+639279585321', '124', 'Twin Pioneer', 'Pasay', 'eb11ee2bbfb6ccfe7cde6cb835a03381', '2019-04-05 07:39:28.024929');

-- --------------------------------------------------------

--
-- Table structure for table `sightings`
--

CREATE TABLE `sightings` (
  `sightings_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `respondent` varchar(255) NOT NULL,
  `coconutcondition` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sightings`
--

INSERT INTO `sightings` (`sightings_id`, `location`, `respondent`, `coconutcondition`, `status`, `created_at`) VALUES
(39, 'Brgy Kalusugan', 'Ronald', 'Severe', 'Open', '2019-04-05 06:11:20.387014'),
(40, 'Moon', 'Ronald', 'Normal', 'In Progress', '2019-04-05 06:29:03.451867'),
(41, 'Asia', 'Ronald', 'Normal', 'Open', '2019-04-05 07:08:38.861397'),
(42, 'QC', 'Ronald', 'Mild', 'In Progress', '2019-04-05 07:37:10.138978'),
(43, 'Pasay', 'Ronald', 'Severe', 'Open', '2019-04-05 07:37:48.893610'),
(44, 'moon', 'ronald', 'Normal', 'In Progress', '2019-04-05 07:39:50.390321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `sightings`
--
ALTER TABLE `sightings`
  ADD PRIMARY KEY (`sightings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sightings`
--
ALTER TABLE `sightings`
  MODIFY `sightings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
