-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 02:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnotes`
--

CREATE TABLE `tblnotes` (
  `notesId` int(11) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltype`
--

CREATE TABLE `tbltype` (
  `Type_ID` int(11) NOT NULL,
  `Role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltype`
--

INSERT INTO `tbltype` (`Type_ID`, `Role`) VALUES
(1, 'Administrator'),
(2, 'Moderator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `User_ID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Type_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`User_ID`, `UserName`, `Password`, `Email`, `Type_ID`) VALUES
(1, 'Jake', '8f69ce5da4e55f393c3b5878ed18b6bed7b305f3768964b55c94f8992198a6c67e7a4498c9fcdf4aa7768f606b3887db7814e1d882aaf70fb1be8ff518ea4dc3', 'jaketichenor@gmail.com', 1),
(2, 'Craig', 'a4317322c01ef6d39c2ec0d46cb5070d973c7ea8c4f744a80c17d8a7b318d8799410f0149bdeca412dcf1510df369b34da3067eb5d4e5b880142ce0013589aff', 'crsaig2289@gmail.com', 1),
(3, 'Esta', 'b9d3bbccda0a4d0637df4e086a9f2e73f7a8e0eda030f75cc7d499b2907b1da15220b2a5784daec741c37ab5e3f97eab3ae5e091427f68d272060a8479278423', 'eblago@comcast.net', 2),
(4, 'Julia', 'f191512f5fb423104bb718e153b7cfa03f2550afd9f11d58e25e8b387d82709f8e45bc846dd537d83e79d25f0705d65cd12a60f390927f1dfc81d2f88eff0c9c', 'jsx30@gmail.com', 3),
(5, 'Mike', '7cf2e5730cdea22f7c2f6e8fb926ff738464b20ec61a5b8a1c83f4facecdae306f29a2b768522d5cf0f367747f30ce39c74863278fae6c27e17ce9e30b6ccbd9', 'mcollins@students.clark.edu', 3),
(6, 'Kati', '0236fba37fcb8b344437f39f6b9630234296a81e26363e33dffbb24abc7cab1876f4524488926d8e5b1ed99e9505510881d08d3c5132ef6d3d9ce5015ab6cc25', 'katireed@yahoo.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`notesId`);

--
-- Indexes for table `tbltype`
--
ALTER TABLE `tbltype`
  ADD PRIMARY KEY (`Type_ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `notesId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltype`
--
ALTER TABLE `tbltype`
  MODIFY `Type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
