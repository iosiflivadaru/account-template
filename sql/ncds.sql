-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 01:43 AM
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
-- Database: `ncds`
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

--
-- Dumping data for table `tblnotes`
--

INSERT INTO `tblnotes` (`notesId`, `content`, `User_ID`) VALUES
(1, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>lol</span><span class=\'timeSent\'>7:35 AM</span></div>\r\n    \r\n    ', 12),
(2, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>hi</span><span class=\'timeSent\'>7:44 AM</span></div>\r\n    \r\n    ', 12),
(3, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>ooh</span><span class=\'timeSent\'>7:44 AM</span></div>\r\n    \r\n    ', 12),
(4, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>naaah</span><span class=\'timeSent\'>7:44 AM</span></div>\r\n    \r\n    ', 12),
(5, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>dude</span><span class=\'timeSent\'>7:59 AM</span></div>\r\n    \r\n    ', 12),
(6, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>no</span><span class=\'timeSent\'>8:00 AM</span></div>\r\n    \r\n    ', 12),
(7, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>hello</span><span class=\'timeSent\'>8:14 AM</span></div>\r\n    \r\n    ', 12),
(8, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>it\'s Jake :)</span><span class=\'timeSent\'>8:14 AM</span></div>\r\n    \r\n    ', 12),
(9, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>lol</span><span class=\'timeSent\'>8:15 AM</span></div>\r\n    \r\n    ', 12),
(10, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>I see the chat tho</span><span class=\'timeSent\'>8:16 AM</span></div>\r\n    \r\n    ', 12),
(11, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>xD</span><span class=\'timeSent\'>8:16 AM</span></div>\r\n    \r\n    ', 12),
(12, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>AYEEE</span><span class=\'timeSent\'>8:16 AM</span></div>\r\n    \r\n    ', 12),
(13, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>hahaha</span><span class=\'timeSent\'>8:16 AM</span></div>\r\n    \r\n    ', 12),
(14, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>I set a 10 sec relod on the posts </span><span class=\'timeSent\'>8:16 AM</span></div>\r\n    \r\n    ', 12),
(15, '<div class=\'msgln\'>Jacob<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>Hey</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 14),
(16, '<div class=\'msgln\'>Jacob<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>I made an account </span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 14),
(17, '<div class=\'msgln\'>Jacob<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>it\'s even more lit</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 14),
(18, '<div class=\'msgln\'>test<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>heeeeey</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 12),
(19, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>Really????</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 13),
(20, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>I need to add emojies</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 13),
(21, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>xD</span><span class=\'timeSent\'>8:18 AM</span></div>\r\n    \r\n    ', 13),
(22, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>heey</span><span class=\'timeSent\'>8:42 AM</span></div>\r\n    \r\n    ', 13),
(23, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>yoo</span><span class=\'timeSent\'>8:44 AM</span></div>\r\n    \r\n    ', 13),
(24, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>its working!!!</span><span class=\'timeSent\'>9:44 AM</span></div>\r\n    \r\n    ', 13),
(25, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>haaaai</span><span class=\'timeSent\'>9:53 AM</span></div>\r\n    \r\n    ', 13),
(26, '<div class=\'msgln\'>Iosif<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>heeey</span><span class=\'timeSent\'>9:53 AM</span></div>\r\n    \r\n    ', 13),
(27, '<div class=\'msgln\'>Cristina<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>Heiiiii</span><span class=\'timeSent\'>9:53 AM</span></div>\r\n    \r\n    ', 16),
(28, '<div class=\'msgln\'>Jessica<br></div>\r\n    <div class=\'msg\'><span class=\'content\'>Ooooohhhh</span><span class=\'timeSent\'>9:53 AM</span></div>\r\n    \r\n    ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `postsId` int(11) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `User_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`postsId`, `post`, `User_ID`) VALUES
(1, '\r\n    <br>\r\n    <div class=\"jumbotron p-3\">\r\n    <h3 class=\"d-inline\">Iosif Livadaru</h3>\r\n    <i class=\"fas fa-ellipsis-h fa-lg pt-2 d-inline float-right\"></i>\r\n    <hr class=\"my-3\">\r\n    <h5>Well Hello there!! :)</h5>\r\n    <hr class=\"my-3\">\r\n        <div class=\"text-center\">\r\n            <i class=\"fas fa-heart fa-lg pr-2\"> Like</i> | \r\n            <i class=\"far fa-comment fa-lg pl-2\"> Comment</i>\r\n        </div>\r\n    </div>\r\n    ', 13),
(2, '\r\n    <br>\r\n    <div class=\"jumbotron p-3\">\r\n    <h3 class=\"d-inline\">Jessica Phan</h3>\r\n    <i class=\"fas fa-ellipsis-h fa-lg pt-2 d-inline float-right\"></i>\r\n    <hr class=\"my-3\">\r\n    <h5>Test subject!</h5>\r\n    <hr class=\"my-3\">\r\n        <div class=\"text-center\">\r\n            <i class=\"fas fa-heart fa-lg pr-2\"> Like</i> | \r\n            <i class=\"far fa-comment fa-lg pl-2\"> Comment</i>\r\n        </div>\r\n    </div>\r\n    ', 15),
(3, '\r\n    <br>\r\n    <div class=\"jumbotron p-3\">\r\n    <h3 class=\"d-inline\">Iosif Livadaru</h3>\r\n    <i class=\"fas fa-ellipsis-h fa-lg pt-2 d-inline float-right\"></i>\r\n    <hr class=\"my-3\">\r\n    <h5>rwewAEwqTEQEQEWEQEQTEqEQETWQQWtweQ</h5>\r\n    <hr class=\"my-3\">\r\n        <div class=\"text-center\">\r\n            <i class=\"fas fa-heart fa-lg pr-2\"> Like</i> | \r\n            <i class=\"far fa-comment fa-lg pl-2\"> Comment</i>\r\n        </div>\r\n    </div>\r\n    ', 13);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`) VALUES
(10, 'Iosif', 'Livadaru', 'iosiflivadaru@yahoo.com', '(360) 787 8899', '1600ed3295bffbeb4267477f9dd72add6d5795177d49b1c711eeff6141c40551969d04f5def36776800044b93b693c81d8cf3e160594eddd6925e1ee84e01a06'),
(12, 'test', 'test', 'test@test.com', '3601234567', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff'),
(13, 'Iosif', 'Livadaru', 'iosiflivadaru@yahoo.com', '3607878899', 'cd1839476f44a1b93c5d442b671a99bbdd55dcd829c319a479460a5c58925f3cf7d4fa080c65b92de4375687b9616f78e28b431deb820bda2e3c76805fabe264'),
(14, 'Jacob', 'Tichenor', 'jake@jacobtichenor.com', '3607217555', 'e859f042716695a5de8b3e3253ed60eda07321dd3d7f886f94bb4da7061a1779229e80feb2950facd37dee414e4fd21fb3973a24db013ccb875ed0af8d3b57ba'),
(15, 'Jessica', 'Phan', 'jessicacacacaca21@gmail.com', '3603565601', '1eb088cb7033d99290a0307619af52af569ef2c9e3dbfde3368c17182b9d5dbac76563bce6036e06492fb4e2b873c22554844f03edd01d372b138a97e98a2194'),
(16, 'Cristina', 'Macovei', 'pissycutza_205@yahoo.com', '0743150009', '817e2c4a1fe39344168cccd9d42ba7d79945e16f0116abf34fbcb12ff815507231042f095f985cc2e3ecaea10abda3ef860b6db884774e7e5ecb576d16e5852f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`notesId`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`postsId`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `notesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `postsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
