-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 05:41 AM
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
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'rifat', '$2y$10$oF/.vSODu.xxY8D3QFtOCe0Z1RWyKAVrBAx0l8YVDhIUCJ7qH48ni', 'rifat@exmaple.com', '2021-10-26 08:01:07'),
(2, 'tanvir', '$2y$10$Hz9m95ptdbB0rLY1PpzKUeabVh8MJy0FR.TJgBJduZvy495tg62uC', 'tanvir@gmail.com', '2021-10-26 09:37:33'),
(3, 'admin', '$2y$10$IWJVZr7h.eixI7hBEcgtF.izdnPIW7lbh4zoIsPJsoKWm10Gd1vpG', 'z@gmmg', '2021-10-27 15:29:25'),
(4, 'bubt', '$2y$10$8iXHaRgoJBS4dp4222ETsuw/i4uNvXgInjp9QjBEgjeG/MSYN3QPO', 'a@ere', '2021-10-27 15:33:50'),
(5, 'naim', '$2y$10$Bo7cNNFKXZ.pq2.rjHGMjuLhIzTwA3pwhowvSCL0MsIv.n3JfPddW', 'ex@hmm', '2021-10-28 09:06:47'),
(6, 'naim56', '$2y$10$BIqjfInMn3BZjPHpZ1YSxeaYhc63FQIIbObc19bB9LLJaT5BKCFRa', 'adsas@gjdfgj', '2021-12-01 03:52:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
