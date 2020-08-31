-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `id_fld` int(11) NOT NULL,
  `username_fld` varchar(20) NOT NULL,
  `email_fld` varchar(50) NOT NULL,
  `pwd_fld` varchar(20) NOT NULL,
  `name_fld` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tbl`
--

INSERT INTO `customers_tbl` (`id_fld`, `username_fld`, `email_fld`, `pwd_fld`, `name_fld`) VALUES
(3, 'hazyik', 'hazy@hotmail.com', '123456', 'Halil Azy'),
(4, 'abddd', 'abd@yahoo.com', '123456', 'Abdullah'),
(10, 'MickeyMouse', 'mickey@cat.be', '456789', 'Mickey Cat'),
(11, 'emelazy', 'emmel@gmail.com', '', 'Emmel Azy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD UNIQUE KEY `customer_id` (`id_fld`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `id_fld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
