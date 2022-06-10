-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 10:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `actual_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `actual_name`, `price`, `quantity`) VALUES
(1, 'arm_sleeve', 'Arm Sleeve', 9, 10),
(2, 'knee_brace', 'Knee Brace', 15, 12),
(3, 'socks', 'Socks', 21, 8),
(4, 'wristband', 'Wristband', 2, 17),
(5, 'headband', 'Headband', 12, 17),
(6, 'return_net', 'Return net', 45, 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `timestamp`) VALUES
(1, 'rubinaga02@gmail.com', 'admin', '2022-06-07 11:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_of_msg` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` varchar(10) NOT NULL,
  `subject` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_of_msg`, `firstname`, `lastname`, `country`, `subject`, `timestamp`) VALUES
(1, 'Rubin', 'Aga', 'Albania', 'testteste', '2022-06-07 20:48:52'),
(2, 'Rubin', 'asd', 'Kosova', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaatest', '2022-06-07 20:50:02'),
(3, 'Rubinn', 'Aga', 'Kosova', 'randomfootercheck', '2022-06-09 13:36:44'),
(4, '', '', 'Albania', 'Wow what an amazing website!!', '2022-06-09 13:38:15'),
(5, '', '', 'Albania', 'success test', '2022-06-09 13:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `actual_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`id`, `name`, `actual_name`, `price`, `quantity`) VALUES
(101, 'golden_state_warriors_shirt', 'Golden State Warriors Shirt', 40, 8),
(102, 'boston_celtics_shirt', 'Boston Celtics Shirt', 32, 6),
(103, 'la_lakers_shirt', 'LA Lakers Shirt', 35, 32),
(104, 'miami_heat_shirt', 'Miami Heat Shirt', 33, 4),
(105, 'toronto_raptors_shirt', 'Toronto Raptors Shirt', 28, 8);

-- --------------------------------------------------------

--
-- Table structure for table `shorts`
--

CREATE TABLE `shorts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `actual_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shorts`
--

INSERT INTO `shorts` (`id`, `name`, `actual_name`, `price`, `quantity`) VALUES
(201, 'golden_state_warriors_shorts', 'Golden State Warriors Shorts', 40, 4),
(202, 'boston_celtics_shorts', 'Boston Celtics Shorts', 32, 7),
(203, 'la_lakers_shorts', 'LA Lakers Shorts', 35, 13),
(204, 'miami_heat_shorts', 'Miami Heat Shorts', 33, 21),
(205, 'toronto_raptors_shorts', 'Toronto Raptors Shorts', 28, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `date`, `timestamp`) VALUES
(2, 'alissa', 'cenga', 'acenga20@epoka.edu.al', 'kristal2', '2022-05-19', '2022-06-07 11:38:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_of_msg`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shorts`
--
ALTER TABLE `shorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_of_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
