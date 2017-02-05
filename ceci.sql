-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 11:34 AM
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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `duration` date DEFAULT NULL,
  `q1` text,
  `q2` text,
  `q3` text,
  `q4` text,
  `q5` text,
  `q6` text,
  `q7` text,
  `q8` text,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `month`, `duration`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `created_at`, `updated_at`) VALUES
(1, 'sdf', 'january', '2017-02-14', 'bvb', ' vbcx', 'sdfds hfgbn', 'sdf sdf', ' ddf vbdf', '6', '5', '4', '2017-02-04', '2017-02-04'),
(2, 'df', 'feburary', '2017-02-22', 'asdf df asdf', 'moment or experience from this month relating to your', 'ncing in your mandate and how are yo', 'asdf', 'cvb adsf', '5', '6', '7', '2017-02-05', '2017-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `report_user`
--

CREATE TABLE `report_user` (
  `user_id` int(11) DEFAULT NULL,
  `report_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_user`
--

INSERT INTO `report_user` (`user_id`, `report_id`) VALUES
(3, 1),
(3, 2);

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
(3, 'Ram Prasad', '1995-07-13', '2017-02-15', '2017-02-28', '14', 'ramprasad', '$2y$10$oScPpcmFKepkdnHH0a4X2.aJuAkb.9SvOSUj5MagvrkEL.NebH.UC', 'm5rscE2XiLmxQvbmKeAIiH4lCBcgg2tjK534zaUt98nYbeejaeXyFAiAlRLr', 0),
(4, 'rov', '2017-02-09', '2017-02-22', '2017-02-28', '2', 'sdfsdf', '$2y$10$d1I2aBW4jmNOvvx/5.U1T.V/SnaoZ4/bCTP2XoPTU4VmOyTxJK6SO', 'Tx8hvtb3RwW5UE1gIRjPxNW5n29dXGMj7LcoZP3vwEMIDOilkjWaujmvlqwj', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
