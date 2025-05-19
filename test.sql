-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 01:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `IdProduct` int(100) NOT NULL,
  `Product_image` text NOT NULL,
  `Product_img1` text NOT NULL,
  `Product_img2` text NOT NULL,
  `Product_img3` text NOT NULL,
  `Product_img4` text NOT NULL,
  `NomProduct` text NOT NULL,
  `desciption` text NOT NULL,
  `Categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`IdProduct`, `Product_image`, `Product_img1`, `Product_img2`, `Product_img3`, `Product_img4`, `NomProduct`, `desciption`, `Categorie`) VALUES
(1, 'showroom1.jpg\r\n', '0', '0', '0', '0', '', '', 'tvUnit'),
(3, 'doors1.jpg', '0', '0', '0', '0', 'Door', '', 'alumi'),
(4, '1.jpeg', '0', '0', '0', '0', 'Ogero', '', 'wood\r\n'),
(5, '2.jpeg', '0', '0', '0', '0', 'Ogero', '', 'wood'),
(6, '3.jpeg', '0', '0', '0', '0', 'Ogero', '', 'wood'),
(7, '4.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(8, '5.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(9, '6.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(10, '7.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(11, '8.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(12, '9.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(13, '10.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(14, '11.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(15, '12.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(16, '13.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(17, '14.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(18, '16.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(19, '17.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(20, '15.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(21, '18.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(22, '19.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(23, '20.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(24, '21.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(25, '22.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(26, '23.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(27, '24.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(28, '25.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(29, '26.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(30, '27.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(31, '28.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(32, '29.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(33, '30.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(34, '31.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(35, '32.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(36, '33.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(37, 'doorspaint1.jpg', '0', '0', '0', '0', '', '', 'paint'),
(38, 'kitchen1.1.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(39, 'kitchen1.jpeg', '0', '0', '0', '0', '', '', 'wood'),
(40, 'kitchen2.jpg', '0', '0', '0', '0', '', '', 'wood'),
(41, 'showroom2.jpg', '0', '0', '0', '0', '', '', 'wood'),
(42, 'wals1.jpg', '0', '0', '0', '0', '', '', 'paint'),
(43, 'walsdecore1.jpg', '0', '0', '0', '0', '', '', 'paint'),
(44, 'aluminum.jpg', '0', '0', '0', '0', 'Aluminum', '', 'alumi'),
(45, 'aluminium3.jpg', '0', '0', '0', '0', 'Window Aluminum', '', 'alumi'),
(46, 'aluminium4.jpg', '0', '0', '0', '0', 'Window Aluminum', '', 'alumi'),
(47, 'tv1.jpeg', '', '', '', '', '', '', 'tvUnit'),
(48, 'tv2.jpeg', '', '', '', '', '', '', 'tvUnit'),
(49, 'tv4.jpeg', '', '', '', '', '', '', 'tvUnit'),
(50, 'tv5.jpeg', '', '', '', '', '', '', 'tvUnit'),
(51, 'tv6.jpeg', '', '', '', '', '', '', 'tvUnit'),
(52, 'tv7.jpeg', '', '', '', '', '', '', 'tvUnit'),
(53, 'tv8.jpeg', '', '', '', '', '', '', 'tvUnit'),
(54, 'showroom2.jpg', '', '', '', '', '', '', 'tvUnit'),
(55, 'e1.jpeg', 'e1.jpeg', 'e2.jpeg', 'e3.jpeg', '', '', '', 'kitchen'),
(56, 'f2.jpeg', 'f2.jpeg', 'f1.jpeg', 'f3.jpeg', 'f4.jpeg', '', '', 'kitchen'),
(57, 'g1.jpeg', 'g1.jpeg', 'g2.jpeg', 'g3.jpeg', '', '', '', 'kitchen'),
(58, 'h1.jpeg', 'h1.jpeg', 'h2.jpeg', 'h3.jpeg', 'h4.jpeg', '', '', 'kitchen'),
(59, 'i1.jpg', 'i1.jpg', 'i2.jpg', 'i3.jpg', 'i4.jpg', '', '', 'kitchen'),
(60, 'j1.jpeg', '', '', '', '', '', '', 'office'),
(61, 'j2.jpeg', '', '', '', '', '', '', 'office'),
(62, 'j3.jpeg', '', '', '', '', '', '', 'office'),
(63, 'j4.jpeg', '', '', '', '', '', '', 'office'),
(64, 'j5.jpeg', '', '', '', '', '', '', 'office'),
(65, 'j6.jpeg', '', '', '', '', '', '', 'office'),
(66, 'j7.jpeg', '', '', '', '', '', '', 'office'),
(67, 'j8.jpeg', '', '', '', '', '', '', 'office'),
(69, 'j9.jpeg', '', '', '', '', '', '', 'office'),
(70, 'j10.jpeg', '', '', '', '', '', '', 'office'),
(71, 'j11.jpeg', '', '', '', '', '', '', 'office'),
(72, 'j12.jpeg', '', '', '', '', '', '', 'office'),
(73, 'j13.jpeg', '', '', '', '', '', '', 'office'),
(74, 'j14.jpeg', '', '', '', '', '', '', 'office'),
(75, 'j15.jpeg', '', '', '', '', '', '', 'office'),
(76, 'j16.jpeg', '', '', '', '', '', '', 'office');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`IdProduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `IdProduct` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
