-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 07:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans1`
--

CREATE TABLE `ans1` (
  `id1` int(20) NOT NULL,
  `result` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cmp1`
--

CREATE TABLE `cmp1` (
  `id1` int(20) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qsn1`
--

CREATE TABLE `qsn1` (
  `id1` int(20) NOT NULL,
  `qsn` varchar(200) NOT NULL,
  `opt1` varchar(200) NOT NULL,
  `opt2` varchar(200) NOT NULL,
  `opt3` varchar(200) NOT NULL,
  `opt4` varchar(200) NOT NULL,
  `ans` varchar(200) NOT NULL,
  `a1` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qsn1`
--

INSERT INTO `qsn1` (`id1`, `qsn`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `a1`) VALUES
(1, '()push and ()pop operations are available in?', 'queues', 'stacks', 'trees', 'lists', 'stacks', '0'),
(2, 'Minimum number of spanning tree in connected graph', 'n', 'n^n', '0', '1', '1', '0'),
(3, 'Which of the following algorithm does not divide the list ?\r\n', 'linear search', 'binary search', 'merge sort', 'quick sort', 'linear search', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans1`
--
ALTER TABLE `ans1`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `cmp1`
--
ALTER TABLE `cmp1`
  ADD PRIMARY KEY (`id1`);

--
-- Indexes for table `qsn1`
--
ALTER TABLE `qsn1`
  ADD PRIMARY KEY (`id1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmp1`
--
ALTER TABLE `cmp1`
  MODIFY `id1` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
