-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2019 at 05:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `customer_id` varchar(11) NOT NULL,
  `account_number` int(20) NOT NULL,
  `account_type` int(10) NOT NULL,
  `card_number` int(20) NOT NULL,
  `card_pin` int(10) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`customer_id`, `account_number`, `account_type`, `card_number`, `card_pin`, `balance`) VALUES
('1', 2147483647, 0, 123456789, 12345, 630.53),
('2', 2147483647, 0, 123456459, 12226, 4540.53),
('3', 2147483647, 0, 123456789, 12456, 540.53),
('4', 2147483647, 0, 123456789, 12456, 540.53),
('5', 2147483647, 0, 123456789, 12456, 540.53),
('117cs0254', 2147483647, 1, 2147483647, 12345, 5500);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `account_number` int(20) NOT NULL,
  `transaction_id` int(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `balance` float NOT NULL,
  `transaction` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`account_number`, `transaction_id`, `date`, `balance`, `transaction`) VALUES
(2147483647, 4566515, '12-5-4565', 456, 0),
(214743647, 4566515, '12-5-4515', 457, 1),
(2147483647, 56461651, '45-45-4546', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `customer_id` varchar(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `branch_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`customer_id`, `customer_name`, `dob`, `contact`, `address`, `branch_id`) VALUES
('1', 'abhi', '13-08-1998', '5594566151', 'SD Hall', 12344),
('117cs0254', 'abhilash', '12-02-1998', '453263266', 'sd hall', 12345),
('2', 'hcsndjch', '13-08-1998', '5594566151', 'SD Hall', 12344),
('3', 'jyoti', '10-04-1998', '5594566151', 'SD Hall', 12344),
('4', 'abhi21231', '13-10-1998', '5594566151', 'SD Hall', 12344),
('5', 'abhi486', '13-01-1998', '5594566151', 'SD Hall', 12344);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
