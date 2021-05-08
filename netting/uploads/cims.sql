-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 07:13 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cims`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `cataid` int(11) NOT NULL,
  `cataname` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`cataid`, `cataname`) VALUES
(11, 'test'),
(12, 'testt'),
(13, 'üçüncü'),
(14, 'asdf'),
(15, 'test'),
(16, 'Sunucu'),
(17, 'asdfasdfasdf'),
(18, 'serhsf'),
(19, 'kategori1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `proid` int(11) NOT NULL,
  `categoryname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `proname` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `prodesc` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `propic` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `probar` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`proid`, `categoryname`, `proname`, `prodesc`, `propic`, `price`, `probar`) VALUES
(1, '', 'asdf', '<p>asdf</p>', 'panning 1.JPG', 0.00, 'barcode'),
(2, '', 'asdf', '<p>asdf</p>', 'bluring moving object 1.JPG', 0.00, 'barcode'),
(3, '', 'asdfasdf', '<p>asdfasdf</p>', 'bluring moving object 1.JPG', 0.00, 'bluring moving object.JPG'),
(4, 'test', 'asdf', '<p>asdf</p>', 'bluring moving object 1.JPG', 0.00, 'bluring moving object.JPG'),
(5, 'test', 'asdfasdf', '<p>asdfasdf</p>', 'bluring moving object 1.JPG', 0.00, 'bluring moving object.JPG'),
(6, 'test', 'bidaha', '<p>test</p>', 'bluring moving object.JPG', 0.00, 'bluring moving object 1.JPG'),
(7, 'test', 'test', '<p>test</p>', 'Nightshot 1.CR2', 0.00, 'Nightshot 1.CR2'),
(8, 'test', 'asdf', '<p>asdf</p>', 'bluring moving object.JPG', 0.00, 'barcode'),
(9, 'üçüncü', 'adsfasdf', '<p>asdf</p>', 'bluring moving object 1.JPG', 0.00, 'barcode'),
(10, 'üçüncü', 'tesdf', '<p>sdfasd</p>', 'bluring moving object 1.JPG', 0.00, 'barcode'),
(11, 'test', 'asdf', '<p>asdf</p>', 'bluring moving object 1.JPG', 0.00, 'bluring moving object 1.JPG'),
(12, 'test', 'asdf', '<p>asdf</p>', 'bluring moving object 1.JPG', 0.00, 'bluring moving object 1.JPG'),
(13, 'test', 'aasdf', '<p>asdf</p>', 'bluring.JPG', 0.00, 'barcode'),
(14, 'test', 'asdf', '<p>asdf</p>', 'bluring.JPG', 0.00, 'barcode'),
(15, 'test', 'asdf123', '<p>asdf123</p>', 'bluring.JPG', 0.00, 'barcode'),
(16, 'test', '111111', '<p>11111</p>', 'american.txt', 0.00, 'barcode'),
(17, 'test', '123123', '<p>123123</p>', 'american.txt', 0.00, 'barcode'),
(18, 'test', 'sdfgsdfg', '<p>sdfgsdfg</p>', 'bunlar1.jpg', 0.00, 'barcode'),
(19, 'test', 'asdfasdf', '<p>teeeeext</p>', 'american.txt', 0.00, 'barcode'),
(20, 'üçüncü', 'asdfasd', '<p>asdfasdf</p>', 'pattern 1.JPG', 0.00, 'barcode'),
(21, 'test', '1231', '<p>asdf</p>', 'Macro 1.jpg', 0.00, 'barcode'),
(22, 'test', 'asdfasdf', '<p>asdfasdf</p>', 'Macro 3.jpg', 0.00, 'barcode'),
(23, 'test', 'hadi,', '<p>olcakmı</p>', 'asdfasdfasdf.jpg', 0.00, 'barcode'),
(24, 'test', 'asd', '<p>olcakmı</p>', 'american.txt', 0.00, 'barcode'),
(25, 'test', 'wer', '<p>olcakmı</p>', 'american.txt', 0.00, 'barcode'),
(26, 'test', 'jg', '<p>kiu</p>', '', 0.00, ''),
(27, 'asdf', 'asdfasd', '<p>asdfasdf</p>', 'bluring.JPG', 0.00, 'bluring.JPG'),
(28, 'asdfasdfasdf', 'asdf', '<p>asdf</p>', 'bluring moving object.jpg', 123.00, 'bluring moving object.jpg'),
(29, 'test', 'yeniuun', '<p>asdfasdf</p>', 'bluring moving object.jpg', 123.00, '12312312'),
(30, 'test', 'asdf', '<p>asdf</p>', 'bluring.JPG', 123.00, '123');

-- --------------------------------------------------------

--
-- Table structure for table `proser`
--

CREATE TABLE `proser` (
  `proserid` int(11) NOT NULL,
  `proserbrand` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `prosername` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `proserpic` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `prosercpu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `proserram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `proserdisk` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `prosertowtype` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `proserbarcode` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `proserprice` double(8,2) NOT NULL,
  `currency` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `proser`
--

INSERT INTO `proser` (`proserid`, `proserbrand`, `prosername`, `proserpic`, `prosercpu`, `proserram`, `proserdisk`, `prosertowtype`, `proserbarcode`, `proserprice`, `currency`, `stock`) VALUES
(1, 'proserbrand', 'prosername', 'proserpic', 'prosercpu', 'proserram', 'proserdisk', 'prosertowtype', 'proserbarcode', 123.00, '', 0),
(2, 'asdf', 'asdf', 'bluring moving object.jpg', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 123.00, '', 0),
(3, 'asdf', 'asdf', 'Languages.jpg', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 143.00, '₺', 0),
(4, 'asdf', 'asdf', 'Languages.jpg', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 123.00, '₺', 0),
(5, 'sdf', 'adsf', '', 'adfs', 'fdsafdsa', 'fdsa', 'fdsa', 'dsaf', 123.00, '₺', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userpass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `userauth` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpass`, `userauth`) VALUES
(1, 'goksel', '7cbb3252ba6b7e9c422fac5334d22054', '1'),
(2, 'ozgur', '7cbb3252ba6b7e9c422fac5334d22054', '2'),
(3, 'admin', '202cb962ac59075b964b07152d234b70', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`cataid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `proser`
--
ALTER TABLE `proser`
  ADD PRIMARY KEY (`proserid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `cataid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `proser`
--
ALTER TABLE `proser`
  MODIFY `proserid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
