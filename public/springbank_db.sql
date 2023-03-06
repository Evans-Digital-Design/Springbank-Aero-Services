-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 01:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `springbank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `av_gas_price`
--

CREATE TABLE `av_gas_price` (
  `id` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `av_gas_price`
--

INSERT INTO `av_gas_price` (`id`, `price`, `date`) VALUES
(1, 100.89, '2023-01-01 01:45:02'),
(2, 520.5, '2023-03-05 05:11:56'),
(3, 520.51, '2023-03-05 05:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `jet_a1_price`
--

CREATE TABLE `jet_a1_price` (
  `id` bigint(20) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jet_a1_price`
--

INSERT INTO `jet_a1_price` (`id`, `price`, `date`) VALUES
(1, 50.5, '2023-01-01 01:45:02'),
(2, 250.6, '2023-01-01 01:47:36'),
(3, 59.96, '2023-01-01 01:58:53'),
(4, 15.5, '2023-03-05 05:11:55'),
(5, 15.36, '2023-03-05 05:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date`) VALUES
(5, 'Alexander the reat', 'Alexander III of Macedon (Ancient Greek: Ἀλέξανδρος, ', '2023-03-04 17:39:31'),
(6, 'hjhj', 'Alexander IV was the son of Alexander the Great (a Macedonian Greek) and Alexander\'s wife Roxana (a Sogdian).[4][5][6] He was the grandson of Philip II of Macedon. Because Roxana was pregnant when Alexander the Great died on 11 June 323 BC and the sex ', '2023-03-04 18:38:09'),
(8, 'Mike Tyson', 'My favourite boxer of all rtime', '2023-03-06 02:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 111751043344, 'Test', '1234', '2022-12-31 23:09:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `av_gas_price`
--
ALTER TABLE `av_gas_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `jet_a1_price`
--
ALTER TABLE `jet_a1_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `av_gas_price`
--
ALTER TABLE `av_gas_price`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jet_a1_price`
--
ALTER TABLE `jet_a1_price`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
