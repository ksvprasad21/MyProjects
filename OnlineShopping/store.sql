-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 02:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `price`) VALUES
(1, 'SONY ES3', 36000),
(2, 'CANON K4', 20000),
(3, 'SONY E29', 43000),
(4, 'SONY RE4', 65000),
(5, 'HMT Milan', 10000),
(6, 'Titan Model #456', 20000),
(7, 'Faber Luba', 9000),
(8, 'Titan Model #457', 9000),
(9, 'H&W', 5000),
(10, 'Luis Phil', 4000),
(11, 'Twills', 6000),
(12, 'Jhalsani', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `useritems`
--

CREATE TABLE `useritems` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useritems`
--

INSERT INTO `useritems` (`id`, `userid`, `itemid`, `status`) VALUES
(10, 5, 6, 'Confirmed'),
(9, 5, 3, 'Confirmed'),
(6, 4, 7, 'Added to cart'),
(8, 4, 9, 'Added to cart'),
(7, 4, 1, 'Added to cart'),
(11, 5, 1, 'Confirmed'),
(12, 5, 7, 'Confirmed'),
(13, 5, 12, 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `useremail` varchar(40) NOT NULL,
  `userpassword` varchar(40) NOT NULL,
  `usercontact` varchar(20) NOT NULL,
  `usercity` varchar(40) NOT NULL,
  `useraddress` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `useremail`, `userpassword`, `usercontact`, `usercity`, `useraddress`) VALUES
(1, 'siva', 'siva@gmail.com', '64ea5307f989b47e6b5e38dbeb682ae7', '9865325421', 'Attili', 'WestGodavari'),
(2, 'prasad', 'prasad@gmail.com', 'e506d60ef6111617a098344db2e92e7b', '9874563214', 'Attili', 'Westkfjdhjsk'),
(3, 'hhjh', 'd@d.in', 'd14b617a3f156a9a8e702a9d3d1c7cc6', '8512547845', 'jhjkjh', 'kjhhkjh'),
(4, 'ghgjhg', 'ffff@ff.ff', 'd41d8cd98f00b204e9800998ecf8427e', '7896541414', 'ghghg', 'jfjhg'),
(5, 'dfghjhg', 'siv@siva.siv', 'e807f1fcf82d132f9bb018ca6738a19f', '1234567890', 'dfghjk', 'fghjkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `useritems`
--
ALTER TABLE `useritems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `usercontact` (`usercontact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `useritems`
--
ALTER TABLE `useritems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
