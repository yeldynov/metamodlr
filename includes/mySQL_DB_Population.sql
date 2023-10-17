-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 08:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

/*
DO THIS FIRST
USE `meme3104_metamodelr_DB`
*/

/*--------------------------------------------------------
-- Table structure for table `login`
--
*/
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*--
-- Dumping data for table `login`
*/
INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Elias Abdurrahman', 'eliasfsdev@gmail.com', '$2y$10$Nqq/y251QX2Ccvb1Ax7hUuMqQSkG3yRLCxN2KPdetnSP3oaXVH70a');



/*
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
*/
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

/*
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
*/
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;














/*--------------------------------------------------------
-- Table structure for table `registration`
--
*/
CREATE TABLE `registration` (
  `regId` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `regDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*
-- Dumping data for table `registration`
*/
INSERT INTO `registration` (`regId`, `firstName`, `lastName`, `email`, `address`, `amount`, `regDate`) VALUES
(1, 'Test', 'Prajapati', 'aabha@gmail.com', 'jkhsdjkh', 50, '2018-04-30'),
(2, 'Test', 'Surname', 'test@test.com', 'xyz, abcd', 200, '2018-04-30');


/*
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
*/
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginId`);

/*
-- Indexes for table `registration`
*/
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regId`);

/*
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
*/
ALTER TABLE `login`
  MODIFY `loginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*
-- AUTO_INCREMENT for table `registration`
*/
ALTER TABLE `registration`
  MODIFY `regId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
