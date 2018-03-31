-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 01:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmykart.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `Email`, `Message`) VALUES
(1, 'Vishal Kumar', 'vishukr780@gmail.com', 'Hi! This is contact message testing.'),
(2, 'Rohit Kumar', 'kumarrohit20@gmail.com', 'Hi. Testing is successfully completed.');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Cannon EOS', 36000),
(2, 'Nikon EOS ', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model1', 13000),
(6, 'Titan Model2', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba ', 18000),
(9, 'H&W ', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `Password`, `Contact`, `City`, `Address`) VALUES
(1, 'Vishal Kumar', 'vishukr780@gmail.com', '3de3e000cd76b453365da1cbc244697d', 7209650420, 'Ranchi', 'BIT Mesra, Ranchi, Jharkhand'),
(2, 'Rohit Kumar', 'kumarrohit8@gmail.com', '019c2b9abf4fba4fae6e0c0fc075f5dd', 7292832100, 'Ranchi', 'Kanke Road'),
(3, 'Akhilesh Kumar', 'akhil07@gmail.com', '9ca219c1c8d4d16cdc18ec3d9b8e962b', 7293102860, 'Bihar', 'Manpur, Gaya'),
(4, 'abhishek kumar', 'abhi01@gmail.com', 'd5112d1d762d634fd5f12d62cc6b900d', 9382109790, 'Patna', 'BIT Patna'),
(5, 'Aayush sinha', 'aayush123@gmail.com', '5a0ce4f3a574876302c6e02b0c845385', 7589043560, 'Patna', 'dav bseb colony');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(9, 1, 3, 'Confirmed'),
(10, 1, 6, 'Confirmed'),
(11, 1, 7, 'Confirmed'),
(25, 5, 6, 'Confirmed'),
(26, 5, 8, 'Confirmed'),
(29, 1, 1, 'Confirmed'),
(30, 1, 12, 'Confirmed'),
(31, 3, 3, 'Added to cart'),
(32, 3, 6, 'Added to cart'),
(33, 3, 7, 'Added to cart'),
(34, 4, 2, 'Confirmed'),
(35, 4, 2, 'Confirmed'),
(36, 4, 5, 'Confirmed'),
(37, 4, 8, 'Confirmed'),
(38, 4, 10, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`email`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
