-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 09:26 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `User_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `User_name`, `User_pass`) VALUES
(1, 'himanshu', 'him4n'),
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(100) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Product_Price` int(100) NOT NULL,
  `Product_Image` varchar(100) NOT NULL,
  `Product_Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Product_Name`, `Product_Price`, `Product_Image`, `Product_Category`) VALUES
(54, 'Cartoon Astronaut Shirts', 50, 'pro-image/Screenshot 2024-07-29 142749.jpg', 'Mobile'),
(55, 'Cartoon Astronaut Top', 80, 'pro-image/f8.jpg', 'Home'),
(56, 'Cartoon Astronaut Jeans', 120, 'pro-image/n6.jpg', 'Mobile'),
(57, 'Cartoon Formal Shirts', 100, 'pro-image/n7.jpg', 'Mobile'),
(58, 'Astronaut Summer Shirts', 80, 'pro-image/f5.jpg', 'Bag'),
(59, 'Astronaut Printed Shirts', 60, 'pro-image/f4.jpg', 'Bag'),
(60, 'Cartoon Astronaut Shirts', 150, 'pro-image/f6.jpg', 'Laptop'),
(61, 'Cartoon Astronaut Leggi', 90, 'pro-image/f7.jpg', 'Laptop'),
(62, 'Cartoon Astronaut Jeans', 120, 'pro-image/n6.jpg', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Number`, `Password`) VALUES
(1, 'himanshu', 'himanshu@gmail.com', '9874563210', 'himan'),
(23, 'kush', 'kush@gmail.com', '9856321470', 'kush'),
(24, 'Harsh', 'harsh@gmail.com', '9658741230', 'harsh'),
(25, 'shashank', 'shashank@gmail.com', '9874563210', 'shashank'),
(26, 'tripti', 'tripti@gmail.com', '3698745210', 'tripti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
