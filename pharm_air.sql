-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2023 at 09:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharm_air`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` varchar(50) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Street` varchar(15) DEFAULT NULL,
  `ZIP` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `Name`, `First_Name`, `Last_Name`, `Email`, `password`, `Phone`, `City`, `Street`, `ZIP`, `Discount`) VALUES
('lazpharma', 'Laz Pharma', NULL, NULL, 'laz@pharma.com', 'pharma', NULL, NULL, NULL, NULL, 5),
('rahmanwolied', NULL, 'Mosheur ', 'Rahman', 'mosheur.r.wolied@gmail.com', 'wolied', NULL, NULL, NULL, NULL, NULL),
('square', 'square', NULL, NULL, 'square@g.com', 'wolied', NULL, NULL, NULL, NULL, 5),
('squarehos', 'Square Hospital', NULL, NULL, 'square@sq.com', 'square', NULL, NULL, NULL, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `id`, `stock_quantity`, `manufacturer`, `price`, `img`) VALUES
('Sertraline', 1, 100, 'Square', 200, 'assets/Sertraline.svg'),
('Atorvastatin', 2, 50, 'Square', 400, 'assets/Art.svg'),
('Montelukast', 3, 0, 'Beximco Pharmaceuticals', 100, 'assets/Mont.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
