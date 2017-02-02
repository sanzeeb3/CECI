-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 02:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceci`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `partner_organization` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text,
  `remember_token` text,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `contract_start_date`, `contract_end_date`, `partner_organization`, `username`, `password`, `remember_token`, `is_admin`) VALUES
(3, 'Ram Prasad', '1995-07-13', '2017-02-16', '2017-02-28', '1', 'ramprasad', '$2y$10$oScPpcmFKepkdnHH0a4X2.aJuAkb.9SvOSUj5MagvrkEL.NebH.UC', 'QcWyoB6LP8WRVY9PR7HETG2QrCFrT15taKB8Ct2YhihsQmbEHa8M1GpHrwFl', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
