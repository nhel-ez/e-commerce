-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 09:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminFirstName` varchar(255) NOT NULL,
  `adminLastName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminFirstName`, `adminLastName`, `adminEmail`, `password`, `dateCreated`) VALUES
(3, 'admin', 'Leo', 'Esguerra', '', '21232f297a57a5a743894a0e4a801fc3', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `fillup`
--

CREATE TABLE `fillup` (
  `id` int(255) UNSIGNED NOT NULL,
  `trackingNo` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `variation` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `shippingFee` decimal(5,2) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `paymentProof` varchar(255) NOT NULL,
  `totalPrice` decimal(7,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `rate` int(255) NOT NULL DEFAULT 0,
  `create_datetime` datetime NOT NULL,
  `updated_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userAddress` varchar(255) NOT NULL,
  `securityQuestion` varchar(255) NOT NULL,
  `securityAnswer` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_datetime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminName` (`adminName`),
  ADD UNIQUE KEY `adminEmail` (`adminEmail`);

--
-- Indexes for table `fillup`
--
ALTER TABLE `fillup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fillup`
--
ALTER TABLE `fillup`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
