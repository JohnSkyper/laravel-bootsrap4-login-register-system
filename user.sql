-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2018 at 05:47 PM
-- Server version: 5.6.31-77.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haxskl8x_igni311`
--

-- --------------------------------------------------------

--
-- Table structure for table `hx_user`
--

CREATE TABLE `hx_user` (
  `ID` int(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hash_pass` text NOT NULL,
  `salt_` text NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hx_user`
--

INSERT INTO `hx_user` (`ID`, `email`, `hash_pass`, `salt_`, `ip`) VALUES
(7, 'mofimarji@gmail.com', '019f4f428ef4553fe6054a8ff0e6d35a266946f1f739b1fe820bddade21aabc6', '67795b01aa927c210', '47.29.232.201');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hx_user`
--
ALTER TABLE `hx_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hx_user`
--
ALTER TABLE `hx_user`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
