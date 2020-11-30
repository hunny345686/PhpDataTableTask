-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatable`
--

CREATE TABLE `datatable` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datatable`
--

INSERT INTO `datatable` (`id`, `fname`, `lname`, `email`, `gender`, `dob`) VALUES
(75, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(76, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(77, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(78, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(79, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(80, 'prem', 'singh', 'hunny345686@gmail.com', 'male', '2020-10-27'),
(81, 'prem', 'singh', 'hunny345686@gmail.com', 'female', '2020-10-27'),
(82, 'asfd', 'sdf', 'sdf', 'male', '2020-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatable`
--
ALTER TABLE `datatable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatable`
--
ALTER TABLE `datatable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
