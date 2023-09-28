-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 02:51 AM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `actor_id` int(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`actor_id`, `aname`, `alastname`, `gender`, `birthdate`) VALUES
(101, 'Keanu', 'Reeves', 'Male', '1964-09-02'),
(102, 'Mai', 'Sakurajima', 'Female', '2001-12-02'),
(103, 'Vin', 'Diesel', 'Male', '1967-07-18'),
(108, 'Jill', 'Valentine', 'Female', '1983-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `actor_movie`
--

CREATE TABLE `actor_movie` (
  `amid` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL,
  `actor_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor_movie`
--

INSERT INTO `actor_movie` (`amid`, `movie_id`, `actor_id`) VALUES
(1, 101, 101),
(2, 102, 101),
(3, 103, 102);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sid` int(3) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `clastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sid`, `cname`, `clastname`, `address`, `telephone`) VALUES
(101, 'Dulyawat', 'Khemklat', 'Bangkok', '0830087480'),
(102, 'Alex', 'Albon', 'Bangkok', '02323232323'),
(103, 'Chanin', 'Imjinda', 'Pathum', '0943178795'),
(104, 'Peter', 'Parker', 'New York', '012141214'),
(105, 'Miles', 'Morales', 'Brooklyn', '05659898656');

-- --------------------------------------------------------

--
-- Table structure for table `customer_movie`
--

CREATE TABLE `customer_movie` (
  `cmid` int(3) NOT NULL,
  `sid` int(3) NOT NULL,
  `movie_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_movie`
--

INSERT INTO `customer_movie` (`cmid`, `sid`, `movie_id`) VALUES
(1, 101, 101),
(2, 102, 102),
(4, 101, 103);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(3) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `duration` int(4) NOT NULL,
  `releasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `mname`, `detail`, `duration`, `releasedate`) VALUES
(101, 'John Wick', 'An ex-hitman comes out of retirement to track down the gangsters who killed his dog and stole his ca', 101, '2014-10-24'),
(102, 'The Matrix', 'When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the sho', 136, '1999-03-31'),
(103, 'Rascal does not dream', 'The seemingly normal life of Sakuta Azusagawa, a high school student changes drastically when he mee', 100, '2019-07-11'),
(104, 'ascv', 'zxcvz', 111, '2023-09-09'),
(111, 'Fast and Furious', 'Fast As F', 107, '2023-09-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`amid`),
  ADD KEY `mid` (`movie_id`,`actor_id`),
  ADD KEY `aid` (`actor_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `customer_movie`
--
ALTER TABLE `customer_movie`
  ADD PRIMARY KEY (`cmid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `mid` (`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `amid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_movie`
--
ALTER TABLE `customer_movie`
  MODIFY `cmid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `actor_movie_ibfk_2` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`),
  ADD CONSTRAINT `actor_movie_ibfk_3` FOREIGN KEY (`actor_id`) REFERENCES `movie` (`movie_id`);

--
-- Constraints for table `customer_movie`
--
ALTER TABLE `customer_movie`
  ADD CONSTRAINT `customer_movie_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `customer` (`sid`),
  ADD CONSTRAINT `customer_movie_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
