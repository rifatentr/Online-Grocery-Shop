-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Fresh Cabbage', 150, './image/product-4.png'),
(2, 'Fresh Meat', 500, './image/product-3.png'),
(3, 'Fresh Orange', 300, './image/product-1.png'),
(4, 'Green lemon', 35, './image/product-8.png'),
(5, 'Fresh Carrot', 99, './image/product-7.png'),
(6, 'Watermelon', 100, './image/cart-img-1.png'),
(7, 'Onion', 39, './image/product-2.png'),
(8, 'Fresh Avocado', 100, './image/product-6.png'),
(9, 'Potatoe', 70, './image/product-5.png'),
(10, 'Milk', 170, './image/cat-3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
