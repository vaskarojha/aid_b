-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 12:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkc`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `acc_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `made_in` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `fullname`, `address`, `contact`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin', 1111, 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `dog_id` int(100) NOT NULL,
  `breed_name` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `dog_type` varchar(100) NOT NULL,
  `life_span` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`dog_id`, `breed_name`, `image`, `dog_type`, `life_span`, `weight`, `height`, `price`) VALUES
(3, 'German Shepherd', 0x35626633643561653865313531392e32303934333633322e6a7067, 'Outdoor', '16', '40', '601', 16000),
(4, 'Labrador', 0x35626633623036613361373263392e38393036323838362e6a7067, 'Hounds', '13', '40', '70', 18500),
(5, 'Dalmatian', 0x35626633623232333663663862352e30383235303136322e6a7067, 'Outdoor', '12', '60', '60', 19000),
(6, 'Japanese Spitz', 0x35626633623239663365666164372e37363137363138342e6a7067, 'Indoor', '12', '7', '30', 6500);

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `feeds_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `made_in` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`dog_id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`feeds_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `acc_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `dog_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `feeds_id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
