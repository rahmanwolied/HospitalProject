-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 01:42 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'admin'),
('rafia', 'rafia'),
('tahia', 'tahia'),
('wolied', 'wolied');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `c_id` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`c_id`, `branch`, `address`, `city`, `street`, `zip`) VALUES
('apollo', 'Bashundhara', 'Block # E, Basudhara R/A', 'Dhaka', 'Road 1', 1234),
('apollo', 'Dhanmondi', 'Block #C, Dhanmondi', 'Dhaka', 'Road 2', 1245),
('delta', 'branch1', 'address1', 'city1', 'street1', 1234),
('delta', 'branch2', 'address2', 'city2', 'street2', 1241),
('lazpharma', 'Dhanmnodi', 'Plot#23 Dhanmondi', 'Dhaka', 'Road 2', 1235),
('lazpharma', 'Moghbazar', '233 Moghbazar', 'Dhaka', 'Mouchak', 1215);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pr_id` int(11) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pr_id`, `c_id`, `cart_id`, `quantity`) VALUES
(1, 'rahmanwolied', 1, 3),
(1, 'tahia', 1, 2),
(1, 'tahia', 3, 2),
(1, 'tahia', 4, 2),
(1, 'tahia', 5, 2),
(1, 'tahia', 6, 1),
(2, 'rahmanwolied', 1, 1),
(2, 'tahia', 1, 3),
(2, 'tahia', 2, 3),
(2, 'tahia', 4, 3),
(2, 'tahia', 5, 3),
(2, 'tahia', 6, 1),
(3, 'tahia', 1, 2),
(3, 'tahia', 4, 2),
(3, 'tahia', 5, 2),
(3, 'tahia', 6, 1),
(4, 'tahia', 1, 1),
(4, 'tahia', 2, 1),
(4, 'tahia', 6, 1),
(5, 'tahia', 1, 1),
(6, 'tahia', 1, 1),
(9, 'tahia', 1, 1),
(11, 'tahia', 1, 1),
(16, 'tahia', 3, 1),
(17, 'tahia', 3, 1);

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
  `address` varchar(255) NOT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Street` varchar(15) DEFAULT NULL,
  `ZIP` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `Name`, `First_Name`, `Last_Name`, `Email`, `password`, `Phone`, `address`, `City`, `Street`, `ZIP`, `Discount`) VALUES
('apollo', 'Apollo Hospital', NULL, NULL, 'apollo@hos.com', 'apollo', '01781240915', '', NULL, NULL, NULL, 10),
('asdasdasasdasdd', NULL, 'asd', 'asd', 'asd@f.com', '123', '123', '123', '123', '123', 123, NULL),
('asdasf', NULL, 'asd', 'asd', 'tahia@gmail.com', '123', '123', '123', '123', '123', 123, NULL),
('asfgwEWG', 'asdasdafaf', NULL, NULL, 'apollo@hos.com', '123', '1123', '123', '123', '123', 123, 5),
('cure', 'Cure Diagnostic Centre', NULL, NULL, 'cure@diag.com', 'cure', 'cure', 'House #10 Niketan, Gulshan', 'Dhaka', 'Road #3, Block-', 1214, NULL),
('delta', 'Delta Hospital', NULL, NULL, 'delta@hos.com', '1234', '12345', '', NULL, NULL, NULL, 10),
('ghk', 'hjkhj', NULL, NULL, 'apollo@hos.com', '1234', '1234', '1234', '1234', '1234', 1234, 3),
('ghk3', 'hjkhj', NULL, NULL, 'apollo@hos.com', '1234', '1234', '1234', '1234', '1234', 1234, 3),
('ghk35', 'hjkhj', NULL, NULL, 'apollo@hos.com', '1234', '1234', '1234', '1234', '1234', 1234, 3),
('hjlhj', 'hhjl', NULL, NULL, 'tahia@gmail.com', '1234', '1234', '1234', '1234', '1234', 1234, 3),
('hjlyu', 'hjl', NULL, NULL, 'tahia@gmail.com', '1234', '1234', '', '1234', '1234', 1234, 5),
('jggk', 'khjl', NULL, NULL, 'tahia@gmail.com', '1234', '1234', '1234', '1234', '1234', 1234, 5),
('Labaid', 'Labaid Diagnostics Dhanmondi ', NULL, NULL, 'labaid@diag.com', 'labaid', '01873781381', 'House-01, Road-04, Dhanmondi', 'Dhaka', 'Road 04', 2134, 5),
('labib', NULL, 'Labib', 'Ahmed', 'labib@yahoo.com', 'labib', '0123456789', '240 Bhuiyan Bari', 'Dhaka', 'Shantibagh', 1234, NULL),
('lazpharma', 'LazPharma', NULL, NULL, 'laz@pharma.com', 'laz', '0182135123', '', NULL, NULL, NULL, 10),
('popular', 'Popular Diagnostic Centre Ltd.', NULL, NULL, 'popular@diag.com', 'popular', '0123456789', 'House-16, Road-2, Dhanmondi', 'Dhaka', 'Road-2', 1217, 5),
('radiant', 'Radiant Diagnostic Center', NULL, NULL, 'radiant@diag.com', 'radiant', '012311451', '1/1/A, Ring Road, Shamoli', 'Dhaka', 'Ring Road', 2134, 5),
('rahmanwolied', NULL, 'Mosheur ', 'Rahman', 'mosheur.r.wolied@gmail.com', 'wolied', NULL, '', NULL, NULL, NULL, NULL),
('sdhsgdjsjssdfh', '', NULL, NULL, 'apollo@hos.com', '1234', '1234', '1234', 'Dhaka', '12314', 1251, 5),
('tahia', NULL, 'Tahia', 'Hossain', 'tahia@gmail.com', 'tahia', '0123456789', '260 Shantinagar', 'Dhaka', 'Paltan', 1214, NULL),
('tanzim', NULL, 'Tanzim', 'Ahmed', 'tanzim@gmail.com', 'tanzim', '1234', '260 Banasree', 'Dhaka', 'road 2', 1234, NULL),
('test', 'test', NULL, NULL, 'tahia@gmail.com', '1234', '0123456789', '260 Shantinagar', 'Dhaka', 'road 2', 2134, 5),
('test44', '', NULL, NULL, 'tahia@gmail.com', '1234', '1234', '1234', '1234', '1234', 1234, 5);

-- --------------------------------------------------------

--
-- Table structure for table `delivers_to`
--

CREATE TABLE `delivers_to` (
  `c-id` varchar(255) NOT NULL,
  `d-reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drone`
--

CREATE TABLE `drone` (
  `reg` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `max_payload` int(11) NOT NULL,
  `max_range` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drone`
--

INSERT INTO `drone` (`reg`, `model`, `operator`, `max_payload`, `max_range`) VALUES
('DR001', 'Model A', 'Amazon', 10, 200),
('DR002', 'Model B', 'UPS', 8, 150),
('DR003', 'Model C', 'FedEx', 12, 180),
('DR004', 'Model D', 'DHL', 15, 250);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `d_reg` varchar(255) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `c_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `status`, `order_date`, `delivery_date`, `d_reg`, `cart_id`, `c_id`) VALUES
(1, 'Delivered', '2023-04-15', '2023-04-10', 'DR001', 1, 'tahia'),
(2, 'Pending', '2023-04-15', '0000-00-00', 'DR002', 2, 'tahia'),
(3, 'Pending', '2023-04-16', '2023-04-19', 'DR004', 3, 'tahia'),
(4, 'Pending', '2023-04-16', '2023-04-19', 'DR004', 4, 'tahia'),
(5, 'Pending', '2023-04-16', '2023-04-19', 'DR003', 5, 'tahia');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `method`, `due_date`, `pay_date`) VALUES
(1, 49, 'Cash on Delivery', '2023-04-19', '2023-04-16'),
(2, 4200, 'Bkash', '2023-04-19', '2023-04-16'),
(3, 49, 'Nagad', '2023-04-19', '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Manufacturer` varchar(255) NOT NULL,
  `Stock_Quantity` int(11) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Manufacturer`, `Stock_Quantity`, `Img`) VALUES
(1, 'Montair', 16, 'Incepta Pharmaceuticals Ltd.', 798, 'images/montair.webp'),
(2, 'Encilor', 3, 'Incepta Pharmaceuticals Ltd.', 397, 'images/encilor.jpg'),
(3, 'Oradin', 4, 'SK+F', 198, 'images/oradin.jpg'),
(4, 'Entacyd-Plus', 2, 'Square Pharmaceuticals Ltd.', 1200, 'images/entacyd-plus.jpg'),
(5, 'Hexisol Hand Rub', 130, 'ACI', 150, 'images/hexisol.webp'),
(6, 'Alarid Tablet', 3, 'Square Pharmaceuticals Ltd.', 425, 'images/alarid.jpg'),
(7, 'Entacyd Suspension', 80, 'Square Pharmaceuticals Ltd.', 9, 'images/entacyd susp.jpg'),
(8, 'NeoStrip Bandage', 1, '', 780, 'images/neostrip.webp'),
(9, 'Camlodin', 5, 'Square Pharmaceuticals Ltd.', 7, 'images/camlodin.png'),
(10, 'Moxaclav Forte', 207, 'Square Pharmaceuticals Ltd.', 0, 'images/moxaclav.jpg'),
(11, 'Flexi', 5, 'Square Pharmaceuticals Ltd.', 1, 'images/flexi.jpg'),
(12, 'Zimax 250 capsules', 25, 'Square Pharmaceuticals Ltd.', 30, 'images/zimax.jpg'),
(13, 'Ambrox Capsules', 6, 'Square Pharmaceuticals Ltd.', 90, 'images/ambrox.jpg'),
(14, 'Amodis 400', 2, 'Square Pharmaceuticals Ltd.', 130, 'images/amodis.jpg'),
(15, 'Ace Power', 2, 'Square Pharmaceuticals Ltd.', 0, 'images/ace power.jpg'),
(16, 'Alatrol', 3, 'Square Pharmaceuticals Ltd.', 1600, 'images/alatrol.jpg'),
(17, 'Moxacil', 30, 'Square Pharmaceuticals Ltd.', 23, 'images/moxacil.jpg'),
(18, 'Doxacil', 2, 'Square Pharmaceuticals Ltd.', 40, 'images/doxacil.jpg'),
(19, 'ACE 125 Suppository', 4, 'Square Pharmaceuticals Ltd.', 15, 'images/ace 125 supp.jpg'),
(20, 'ACE Plus', 2, 'Square Pharmaceuticals Ltd.', 72, 'images/ace plus.jpg'),
(21, 'Cef 3 Max', 250, 'Square Pharmaceuticals Ltd.', 11, 'images/cef-3-max.jpg'),
(22, 'Ciprocin 250 Suspension', 100, 'Square Pharmaceuticals Ltd.', 0, 'images/ciprocin.jpg'),
(23, 'Depram', 5, 'Square Pharmaceuticals Ltd.', 1, 'images/depram.jpg'),
(24, 'Clofenac Suppository', 14, 'Square Pharmaceuticals Ltd.', 7, 'images/clofenac.jpg'),
(25, 'Eromycin Lotion', 120, 'Square Pharmaceuticals Ltd.', 2, 'images/eromycin.jpg'),
(26, 'Ceevit', 2, 'Square Pharmaceuticals Ltd.', 880, 'images/ceevit.jpg'),
(27, 'Imotil', 1, 'Square Pharmaceuticals Ltd.', 370, 'images/imotil.jpg'),
(28, 'Loratin', 3, 'Square Pharmaceuticals Ltd.', 950, 'images/loratin.jpg'),
(29, 'Citivas', 50, 'Square Pharmaceuticals Ltd.', 10, 'images/citivas.jpg'),
(30, 'Nebanol', 44, 'Square Pharmaceuticals Ltd.', 2, 'images/nebanol.jpg'),
(31, 'Normal Saline 500 ml', 67, 'Square Pharmaceuticals Ltd.', 2, 'images/saline.jpg'),
(32, 'Fungidal', 50, 'Square Pharmaceuticals Ltd.', 4, 'images/fungidal.jpg'),
(33, 'Sulprex Nebulizer 2.5 ml', 20, 'Square Pharmaceuticals Ltd.', 25, 'images/sulprex nebulizer.jpg'),
(34, 'Square Zinc', 35, 'Square Pharmaceuticals Ltd.', 0, 'images/zinc.jpg'),
(35, 'Metaspray', 252, 'Square Pharmaceuticals Ltd.', 3, 'images/metaspray.jpg'),
(36, 'Sulprex Inhaler', 250, 'Square Pharmaceuticals Ltd.', 0, 'images/sulprex.jpg'),
(37, 'Seclo 20', 6, 'Square Pharmaceuticals Ltd.', 60, 'images/seclo.png'),
(38, 'Norpill', 70, 'Square Pharmaceuticals Ltd.', 1, 'images/norpill.jpg'),
(39, 'Orostar Coolmint', 80, 'Square Pharmaceuticals Ltd.', 6, 'images/orostar.jpg'),
(40, 'Orostar Plus', 150, 'Square Pharmaceuticals Ltd.', 1, 'images/orostar plus.jpg'),
(41, 'Rice ORS', 9, 'Square Pharmaceuticals Ltd.', 30, 'images/rice ors.jpg'),
(42, 'Salicid Cream', 100, 'Square Pharmaceuticals Ltd.', 0, 'images/salicid.jpg'),
(43, 'E Cap 400 Softgel Capsules', 7, '', 75, 'images/ecap.jpg'),
(44, 'Flatameal DS Suspension', 75, 'Beximco Pharmaceuticals Ltd.', 1, 'images/flatameal ds.jpg'),
(45, 'Napa Extend', 2, 'Beximco Pharmaceuticals Ltd.', 2000, 'images/napa-extend.jpg'),
(46, 'E Cap 200 Softgel Capsules', 5, '', 120, 'images/ecap200'),
(47, 'Surgical Face Mask', 5, '', 5000, 'images/mask.jpg'),
(48, 'Black Face Mask', 5, '', 3650, 'images/black.jpg'),
(49, 'Savlon Antiseptic Cream', 50, '', 52, 'images/savlon.jpg'),
(50, 'Glaxose D 250g Orange Flavour', 160, '', 11, 'images/glaxose.jpg'),
(51, 'Glaxose D 400g', 145, '', 67, 'images/glucose.jpg'),
(52, 'Toilet Paper', 25, 'Fresh Toiletries', 1732, 'images/tissue.jpg'),
(53, 'Moov Spray', 305, '', 84, 'images/moov.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `S-ID` char(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`S-ID`, `Name`, `Email`, `Phone`, `City`, `Country`) VALUES
('S1', 'Square Pharmaceuticals Ltd.', 'dicdhk@squaregroup.com', '+8802-8891580', 'Dhaka', 'Bangladesh'),
('S2', 'Incepta Pharmaceuticals Ltd.', 'dhaka@inceptapharma.com', '+8801714-165707', 'Dhaka', 'Bangladesh'),
('S3', 'Eskayef Pharmaceuticals Ltd.', 'skf@transcombd.com', '+88-02-9882843', 'Dhaka', 'Bangladesh'),
('S4', 'Aristopharma Ltd.', 'info@aristopharma.com', '+8802222221653', 'Dhaka', 'Bangladesh'),
('S5', 'Opsonin Pharma Ltd.', 'info@opsonin.net', '+880-0248311900', 'Dhaka', 'Bangladesh'),
('S6', 'Beximco Pharmaceuticals Ltd.', 'info@bpl.net', '+8802-58611001-7', 'Dhaka', 'Bangladesh'),
('S7', 'Renata Limited', 'sales@renata-ltd.com', '+880-28001450-54', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `s-id` varchar(255) NOT NULL,
  `pr-id` varchar(255) NOT NULL,
  `supply_date` date NOT NULL,
  `supply_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`c_id`,`branch`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pr_id`,`c_id`,`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `delivers_to`
--
ALTER TABLE `delivers_to`
  ADD PRIMARY KEY (`c-id`,`d-reg`);

--
-- Indexes for table `drone`
--
ALTER TABLE `drone`
  ADD PRIMARY KEY (`reg`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`S-ID`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`s-id`,`pr-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
