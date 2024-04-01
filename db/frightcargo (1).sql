-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 02:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frightcargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@digitalwebplus.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `shipdate` varchar(100) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `raddress` varchar(200) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `edd` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `pname`, `shipdate`, `saddress`, `sname`, `raddress`, `rname`, `email`, `status`, `location`, `pdate`, `pid`, `edd`, `weight`, `servicetype`, `pdesc`, `qty`, `image`, `remark`) VALUES
(45, 'samsung phone', '2020-06-14', 'abuja', 'Paul smith', 'Lagos Nigeria', 'Daniel Amos', 'ducanharry@gmail.com', 'In the warehouse', 'Ikeja warehouse', '2020-06-16', '8SHHHGGD63', '2020-06-30', '24kg', 'Persel', 'In good condotion', '2', 'Make Money fast Online.jpg', 'healthy delivery'),
(46, 'samsung phone', '', 'abuja', 'Paul smith', '', 'Daniel Amos', 'ducanharry@gmail.com', 'Custom check', 'Lagos', '2020-06-19', '8SHHHGGD63', '', '', '', '', '', '', 'Perfect condition'),
(47, 'samsung phone', '', 'abuja', 'Paul smith', '', 'Daniel Amos', 'ducanharry@gmail.com', 'On Hold', 'Delta state police', '2020-06-25', '8SHHHGGD63', '', '', '', '', '', '', 'Awaiting clearance  '),
(48, 'samsung phone', '', 'abuja', 'Paul smith', '', 'Daniel Amos', 'ducanharry@gmail.com', 'reuy5u', 'w4y53', '2020-07-25', '8SHHHGGD63', '', '', '', '', '', '', '5yu5u'),
(49, 'P Trial', '2020-11-25', 'Sender address here', 'Sender name here', 'Receiver address here', 'Receiver Name here', 'receiver@gmail.cok', 'Status shipment here', 'Ikorodu warehouse', '2020-11-30', '10GS2967D5', '2020-12-01', '54kg', 'percelll', 'description here', '57 pcs', 'lolololo.jpeg', 'remark here');

-- --------------------------------------------------------

--
-- Table structure for table `inpayment`
--

CREATE TABLE `inpayment` (
  `id` int(255) NOT NULL,
  `trackid` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inpayment`
--

INSERT INTO `inpayment` (`id`, `trackid`, `amount`, `date`, `image`, `email`, `status`) VALUES
(1, 'rei03903i', '500', '2024-01-24 12:09:13', 'uploads/uploaded_65b0fde961f8c5.45075293.png', 'moshood.ajose6@gmail.com', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `apipr` varchar(200) NOT NULL,
  `apipu` varchar(200) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `apipr`, `apipu`, `currency`, `branch`, `bname`, `baddress`, `email`, `phone`, `title`, `logo`) VALUES
(2, '', '', '', '$', '', 'Fright Cargo', '', 'support@scriptsdemo.website', '', 'Welcome to Fright Cargo', '');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `shipdate` varchar(100) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `raddress` varchar(200) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `edd` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `pname`, `shipdate`, `saddress`, `sname`, `raddress`, `rname`, `email`, `status`, `location`, `pdate`, `pid`, `edd`, `weight`, `servicetype`, `pdesc`, `qty`, `image`, `remark`) VALUES
(28, 'samsung phone', '2020-06-14', 'abuja', 'Paul smith', 'Lagos Nigeria', 'Daniel Amos', 'ducanharry@gmail.com', 'deliver', 'Ikeja warehouse', '', '8SHHHGGD63', '2020-06-30', '24kg', 'Persel', 'In good condotion', '2', 'Computer Science.jpg', 'healthy delivery'),
(29, 'P Trial', '2020-11-25', 'Sender address here', 'Sender name here', 'Receiver address here', 'Receiver Name here', 'receiver@gmail.cok', 'Status shipment here', 'Ikorodu warehouse', '2020-11-30', '10GS2967D5', '2020-12-01', '54kg', 'percelll', 'description here', '57 pcs', 'lolololo.jpeg', 'remark here');

-- --------------------------------------------------------

--
-- Table structure for table `walletpayment`
--

CREATE TABLE `walletpayment` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `addresstitle` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `barcodeimge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walletpayment`
--

INSERT INTO `walletpayment` (`id`, `image`, `addresstitle`, `wallet`, `barcodeimge`) VALUES
(7, 'uploads/images/btc.png', 'BTC', 'UE823023DJDJEYUO32-30E48', 'barcode.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inpayment`
--
ALTER TABLE `inpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walletpayment`
--
ALTER TABLE `walletpayment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `inpayment`
--
ALTER TABLE `inpayment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `walletpayment`
--
ALTER TABLE `walletpayment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
