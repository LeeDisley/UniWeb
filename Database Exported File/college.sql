-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 08:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `NHS` varchar(255) NOT NULL,
  `Height` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `Address`, `Gender`, `NHS`, `Height`, `Weight`) VALUES
('Rachael', 'Rachael', 'rachael126@gmail.com', '14 Ice Lane', 'Female', '0003', '1.3cm', '66kg'),
('Brenda', 'Brenda', 'Brenda90@gmail.com', '24 Newlands Close', 'Female', '0004', '1.3cm', '54kg'),
('Lewis', 'Lewis', 'Lew123@gmail.co.uk', '44 Olive Street', 'Male', '0005', '1.7cm', '78kg'),
('Scott', 'Scott', 'ScottPrice@yahoo.co.uk', '45 Bolton Road', 'Male', '0006', '1.5cm', '67kg'),
('Andrew', 'Andrew', 'Andrew12@yahoo.com', '43 Hedge street', 'Male', '0011442', '2.1cm', '98kg'),
('Imron', 'Imron', 'Imron67@icloud.com', '64 Green Lane', 'Male', '00553', '1.6cm', '86kg'),
('Bradd', 'Bradd', 'Brad45@gmail.com', '123 Rochdale Road', 'Male', '0098', '1.6cm', '67kg'),
('Jonny', 'Jonny', 'Jonny77@icloud.com', '16 Bridge Lane', 'Male', '123098', '1.6cm', '65kg'),
('Anthony', 'Anthony', 'anthony71@gmail.com', '78 Syke road', 'Male', '12345', '1.4cm', '33kg'),
('Markus', 'Markus', 'Markr55@icloud.co.uk', '49 Norton Road', 'Male', '129984', '1.65cm', '69kg'),
('Denise', 'Denise', 'Denise12@yahoo.com', '12 Nottingham Lane', 'Female', '6789', '1.2cm', '55kg');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id_user`, `username`, `password`) VALUES
(1, 'Imron', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Toni', 'Rochdale123'),
(3, 'Toni', 'f1a1b2952cbaeef41a0f7ff09f9cdb1f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`NHS`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
