-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 07:19 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorname`
--

CREATE TABLE `authorname` (
  `bookid` int(11) NOT NULL,
  `author_name` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `expected_price` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `starts` date NOT NULL,
  `ends` date NOT NULL,
  `soldornot` varchar(10) NOT NULL,
  `sellid` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `book_name`, `expected_price`, `status`, `starts`, `ends`, `soldornot`, `sellid`, `productid`, `datetime`) VALUES
(1, 'fg gjhgh', 12000, 'good', '2018-10-04', '2018-10-03', 'notsold', 33, 54, '2018-10-05 19:16:30'),
(2, 'fg gjhgh', 12000, 'good', '2018-10-05', '0000-00-00', 'notsold', 38, 59, '2018-10-05 19:16:30'),
(3, '', 0, '', '0000-00-00', '0000-00-00', 'notsold', 41, 62, '2018-10-05 19:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE `buys` (
  `buyid` int(11) NOT NULL,
  `buyerid` int(20) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`buyid`, `buyerid`, `productid`) VALUES
(1, 5, 66),
(2, 5, 66),
(3, 5, 66),
(4, 5, 66),
(5, 5, 66),
(6, 5, 66),
(7, 5, 66),
(8, 5, 66),
(9, 5, 43),
(10, 5, 43),
(11, 5, 44),
(12, 5, 66),
(13, 5, 66),
(15, 5, 66),
(16, 5, 66);

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `laptopid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `expected_price` float NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `purchase_date` date NOT NULL,
  `starts` date NOT NULL,
  `ends` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `soldornot` varchar(10) NOT NULL,
  `sellid` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`laptopid`, `name`, `expected_price`, `manufacturer`, `purchase_date`, `starts`, `ends`, `status`, `soldornot`, `sellid`, `productid`, `datetime`) VALUES
(1, 'hp', 12000, 'HP', '2018-10-02', '2018-10-02', '2018-10-05', '', 'notsold', 28, 49, '2018-10-05 19:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phoneid` int(11) NOT NULL,
  `mobilename` varchar(20) NOT NULL,
  `expectedprice` int(11) NOT NULL,
  `manufacturer` varchar(20) NOT NULL,
  `purchasedate` date NOT NULL,
  `starts` date NOT NULL,
  `ends` date NOT NULL,
  `soldornot` varchar(10) NOT NULL,
  `sellid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phoneid`, `mobilename`, `expectedprice`, `manufacturer`, `purchasedate`, `starts`, `ends`, `soldornot`, `sellid`, `productid`, `datetime`) VALUES
(1, 'adfs', 677, 'afs', '2018-10-30', '0000-00-00', '2018-10-08', 'notsold', 19, 41, '0000-00-00 00:00:00'),
(2, 'sfs', 0, 'micromax', '2018-10-30', '0000-00-00', '2018-10-01', 'notsold', 21, 42, '0000-00-00 00:00:00'),
(3, 'sdf', 12000, '34', '2018-10-30', '0000-00-00', '2018-10-04', 'notsold', 22, 43, '0000-00-00 00:00:00'),
(4, 'README note 4', 12000, 'micromax', '2018-10-02', '2018-10-02', '2018-10-04', 'notsold', 23, 44, '0000-00-00 00:00:00'),
(5, 'README note 4', 12000, 'micromax', '2018-10-30', '2018-10-31', '2018-10-04', 'notsold', 24, 45, '0000-00-00 00:00:00'),
(6, 'da', 12000, 'micromax', '2018-10-30', '2018-10-01', '0000-00-00', 'notsold', 25, 46, '0000-00-00 00:00:00'),
(7, 'README note 4', 12000, 'micromax', '2018-10-30', '2018-10-06', '2018-10-04', 'notsold', 26, 47, '0000-00-00 00:00:00'),
(8, 'README note 4', 12000, 'micromax', '2018-10-30', '2018-10-06', '2018-10-04', 'notsold', 27, 48, '0000-00-00 00:00:00'),
(9, 'README note 4', 12000, 'micromax', '2018-10-31', '2018-10-02', '2018-10-03', 'notsold', 29, 50, '0000-00-00 00:00:00'),
(10, 'README note 4', 12000, 'micromax', '2018-10-30', '2018-10-04', '2018-10-03', 'notsold', 34, 55, '0000-00-00 00:00:00'),
(11, 'README note 4', 12000, 'micromax', '2018-10-31', '2018-10-05', '2018-10-05', 'notsold', 35, 56, '0000-00-00 00:00:00'),
(12, 'README note 4', 12000, 'micromax', '2018-10-31', '2018-10-05', '2018-10-06', 'notsold', 35, 57, '0000-00-00 00:00:00'),
(13, 'README note 4', 12000, 'micromax', '2018-10-01', '2018-10-06', '2018-10-03', 'notsold', 35, 58, '0000-00-00 00:00:00'),
(14, 'README note 4', 12000, 'micromax', '2018-10-02', '2018-10-02', '2018-10-03', 'notsold', 39, 60, '0000-00-00 00:00:00'),
(15, 'README note 4', 12000, 'micromax', '2018-10-04', '2018-10-07', '2018-10-05', 'notsold', 42, 63, '0000-00-00 00:00:00'),
(16, '', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', 'notsold', 43, 64, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `category`, `price`) VALUES
(1, 'phone', 4300.33),
(2, 'phone', 12000),
(3, 'phone', 11000),
(4, 'phone', 11000),
(5, 'phone', 11000),
(6, 'phone', 11000),
(7, 'book', 400),
(8, 'book', 400),
(9, 'book', 400),
(10, 'book', 400),
(11, 'book', 400),
(12, 'book', 400),
(13, 'book', 400),
(14, 'book', 400),
(15, 'book', 400),
(16, '', 0),
(17, 'phone', 400),
(18, '', 400),
(19, 'phone', 400),
(20, 'phone', 400),
(21, 'phone', 12000),
(22, 'phone', 400),
(23, 'phone', 12000),
(24, 'phone', 400),
(25, 'phone', 400),
(26, 'phone', 12000),
(27, 'phone', 11000),
(28, 'phone', 12000),
(29, 'phone', 11000),
(30, 'phone', 400),
(31, 'phone', 400),
(32, 'phone', 400),
(33, 'phone', 400),
(34, 'phone', 400),
(35, '', 12000),
(36, 'phone', 400),
(37, 'phone', 400),
(38, 'phone', 400),
(39, 'phone', 400),
(40, 'phone', 11000),
(41, 'phone', 677),
(42, 'phone', 0),
(43, 'phone', 12000),
(44, 'phone', 12000),
(45, 'phone', 12000),
(46, 'phone', 12000),
(47, 'phone', 12000),
(48, 'phone', 12000),
(49, 'phone', 12000),
(50, 'phone', 12000),
(51, 'phone', 12000),
(52, 'book', 12000),
(53, 'book', 12000),
(54, 'book', 12000),
(55, 'phone', 12000),
(56, 'phone', 12000),
(57, 'phone', 12000),
(58, 'phone', 12000),
(59, 'book', 12000),
(60, 'phone', 12000),
(61, 'laptop', 12000),
(62, 'book', 0),
(63, 'phone', 12000),
(64, 'phone', 0),
(65, 'book', 0),
(66, 'phone', 11000),
(67, 'phone', 0);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `recordid` int(11) NOT NULL,
  `sellid` int(11) NOT NULL,
  `buyid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `sellername` varchar(10) NOT NULL,
  `buyername` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`recordid`, `sellid`, `buyid`, `productid`, `sellername`, `buyername`) VALUES
(4, 45, 1, 66, 'komal', 'bishain'),
(5, 23, 11, 44, 'bishain', 'bishain'),
(6, 45, 1, 66, 'komal', 'bishain'),
(7, 45, 1, 66, 'komal', 'bishain'),
(9, 45, 1, 66, 'komal', 'bishain'),
(10, 45, 1, 66, 'komal', 'bishain');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `sellid` int(11) NOT NULL,
  `sellerid` int(20) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`sellid`, `sellerid`, `productid`) VALUES
(12, 5, 31),
(13, 5, 32),
(14, 5, 33),
(15, 5, 34),
(16, 5, 36),
(17, 5, 37),
(18, 5, 38),
(19, 5, 39),
(21, 5, 42),
(22, 5, 43),
(23, 5, 44),
(24, 5, 45),
(25, 5, 46),
(26, 6, 47),
(27, 6, 48),
(28, 6, 49),
(29, 6, 50),
(30, 6, 51),
(31, 6, 52),
(32, 6, 53),
(33, 6, 54),
(34, 6, 55),
(35, 7, 56),
(38, 5, 59),
(39, 5, 60),
(40, 5, 61),
(41, 5, 62),
(42, 10, 63),
(43, 9, 64),
(44, 9, 65),
(45, 11, 66),
(46, 9, 67);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `suppid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `location` varchar(10) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `passward` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `occupation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userid`, `passward`, `name`, `mobileno`, `occupation`) VALUES
(5, 'bishain_b160642cs', 'abcd', 'bishain', '1234567890', 'student'),
(6, 'bishain_b160643cs', 'abcd', 'bishain', '1234567890', 'faculty'),
(7, 'bishain_b160644cs', 'abcd', 'navrange shab', '1234567890', 'student'),
(9, '', '', '', '', ''),
(10, 'hushain123', 'asdf', 'hushain', '1234567890', 'faculty'),
(11, 'komal22', 'asdf', 'komal', '1234567890', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorname`
--
ALTER TABLE `authorname`
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `buys`
--
ALTER TABLE `buys`
  ADD PRIMARY KEY (`buyid`),
  ADD KEY `buyerid` (`buyerid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`laptopid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `sellid` (`sellid`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phoneid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `sellid` (`sellid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`recordid`),
  ADD KEY `buyid` (`buyid`),
  ADD KEY `sellid` (`sellid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`sellid`),
  ADD KEY `sellerid` (`sellerid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`suppid`),
  ADD KEY `productid` (`productid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buys`
--
ALTER TABLE `buys`
  MODIFY `buyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `laptopid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phoneid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `sellid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `suppid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

--
-- Constraints for table `buys`
--
ALTER TABLE `buys`
  ADD CONSTRAINT `buys_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `buys_ibfk_3` FOREIGN KEY (`buyerid`) REFERENCES `user` (`id`);

--
-- Constraints for table `laptops`
--
ALTER TABLE `laptops`
  ADD CONSTRAINT `laptops_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `laptops_ibfk_2` FOREIGN KEY (`sellid`) REFERENCES `sells` (`sellid`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `phone_ibfk_2` FOREIGN KEY (`sellid`) REFERENCES `sells` (`sellid`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_3` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `record_ibfk_4` FOREIGN KEY (`buyid`) REFERENCES `buys` (`buyid`),
  ADD CONSTRAINT `record_ibfk_5` FOREIGN KEY (`sellid`) REFERENCES `sells` (`sellid`);

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
  ADD CONSTRAINT `sells_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `sells_ibfk_3` FOREIGN KEY (`sellerid`) REFERENCES `user` (`id`);

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`),
  ADD CONSTRAINT `supplier_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
