-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 12:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listup_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` varchar(13) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_first_name` varchar(100) NOT NULL COMMENT 'Desired name in text',
  `admin_last_name` varchar(100) NOT NULL,
  `admin_contact_number` varchar(13) NOT NULL,
  `admin_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_password`, `admin_first_name`, `admin_last_name`, `admin_contact_number`, `admin_address`) VALUES
('639364417890', 'agpuon05', 'Christian Paul', 'Agpuon', '639364417890', 'Alannay ,Lasam ,Cagayan');

-- --------------------------------------------------------

--
-- Table structure for table `customers_table`
--

CREATE TABLE `customers_table` (
  `customer_id` varchar(255) NOT NULL COMMENT 'Uniquely defined id for customer',
  `customer_firstname` varchar(100) NOT NULL,
  `customer_lastname` varchar(100) NOT NULL,
  `customer_contact` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_table`
--

INSERT INTO `customers_table` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_contact`) VALUES
('639364413000', 'Manaca', 'Viaol', '09364492890'),
('639364418899', 'Angelica', 'Mascarenas', '09364417890');

-- --------------------------------------------------------

--
-- Table structure for table `testing_table`
--

CREATE TABLE `testing_table` (
  `test_id` varchar(250) NOT NULL,
  `test_name` varchar(250) NOT NULL,
  `test_result` varchar(250) NOT NULL,
  `date_tested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing_table`
--

INSERT INTO `testing_table` (`test_id`, `test_name`, `test_result`, `date_tested`) VALUES
('202001', 'Test one', 'negative', '2021-01-20 02:41:01'),
('202002', 'Test two', 'positive', '2021-01-20 02:41:01'),
('202003', 'Test three', 'positive', '2021-01-20 02:41:01'),
('202004', 'Test Four', 'positive', '2021-01-20 02:41:01'),
('202005', 'Test Five', 'positive', '2021-01-20 02:41:01'),
('202006', 'Test Six', 'negative', '2021-01-20 02:41:01'),
('202007', 'test seven', 'positive', '2021-01-20 04:47:43'),
('202008', 'Test eightt', 'negative', '2021-01-21 01:49:22'),
('202009', '', '', '2021-01-21 02:01:53'),
('202010', 'Test sequence nine', 'positive', '2021-01-21 10:57:28'),
('202011', 'test number eleven', 'negative', '2021-01-21 11:07:29'),
('202012', 'test number eleven', 'negative', '2021-01-21 11:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transaction_id` varchar(255) NOT NULL,
  `admin_id` varchar(25) NOT NULL,
  `customer_id` varchar(25) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `transaction_status` varchar(26) NOT NULL,
  `remainder` varchar(100) NOT NULL,
  `balance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_table`
--

INSERT INTO `transaction_table` (`transaction_id`, `admin_id`, `customer_id`, `amount`, `transaction_status`, `remainder`, `balance`) VALUES
('1', '639364417890', '639364418899', '25', 'paid', '0', '0'),
('2021-1', '639364417890', '639364418899', '50', 'paid', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers_table`
--
ALTER TABLE `customers_table`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `testing_table`
--
ALTER TABLE `testing_table`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `transaction_table`
--
ALTER TABLE `transaction_table`
  ADD PRIMARY KEY (`transaction_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
