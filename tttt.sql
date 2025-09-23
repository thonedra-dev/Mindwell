-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Sep 23, 2025 at 10:04 PM
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
-- Database: `tttt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_responses`
--

CREATE TABLE `admin_responses` (
  `response_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appointment_id` int(11) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_responses`
--

INSERT INTO `admin_responses` (`response_id`, `user_id`, `appointment_id`, `venue`, `time`, `comment`, `created_at`) VALUES
(41, 46, 76, 'sbss', '2025-01-20 19:19:00', 'ok', '2025-01-20 09:19:15'),
(42, 53, 78, 'Chancellory Building', '2025-03-27 02:24:00', 'ok', '2025-03-16 18:24:16'),
(43, 45, 80, 'sbss', '2025-03-30 02:12:00', 'I am fine good', '2025-03-27 18:12:09'),
(44, 45, 83, 'Chancellory Building', '2025-07-26 13:10:00', 'Ok haha', '2025-07-15 17:11:40'),
(45, 55, 85, 'Office', '2025-09-28 03:15:00', 'Got it', '2025-09-23 19:15:19'),
(46, 55, 85, 'Office', '2025-09-26 03:54:00', 'Please sleep well during these days.', '2025-09-23 19:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `phone_number`, `message`, `timestamp`) VALUES
(76, 46, '0147895623', 'I am very struggling with communicating people and i want to address my current solution.', '2025-01-20 04:54:07'),
(77, 45, '0182128530', 'I am Lonely', '2025-01-20 09:17:58'),
(78, 53, '0147523568', 'Headache', '2025-03-16 18:23:42'),
(79, 53, '0147523568', 'Headache', '2025-03-16 18:24:21'),
(80, 45, '54666546', 'Hi how are you?', '2025-03-27 18:11:27'),
(81, 45, '54666546', 'Hi how are you?', '2025-03-27 18:12:14'),
(82, 45, '0235647994', 'Ok', '2025-07-15 17:10:21'),
(83, 45, '0147523568', 'Loser', '2025-07-15 17:11:03'),
(84, 45, '0147523568', 'Loser', '2025-07-15 17:11:45'),
(85, 55, '02365478954', 'Testing one two three', '2025-09-23 19:14:40'),
(86, 55, '02365478954', 'Testing one two three', '2025-09-23 19:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `timestamp`) VALUES
(45, 'userA', 'thonedra2003@gmail.com', 'A', '2025-01-19 10:24:05'),
(46, 'userB', 'thonedra2004@gmail.com', 'B', '2025-01-19 10:24:15'),
(47, 'userC', 'thone.dra@student.aiu.edu.my', 'C', '2025-01-19 10:24:29'),
(48, 'userD', 'vero@gmail.com', 'd', '2025-01-19 10:24:42'),
(49, 'userE', 'chatgpt2aiu@gmail.com', 'e', '2025-01-19 10:24:51'),
(50, 'gwaytoe', 'enzo4@gmail.com', '111111', '2025-03-10 20:04:22'),
(52, 'nope', 'hsu.kyaw@student.aiu.edu.my', 'nope', '2025-03-10 20:10:24'),
(53, 'aung kaung myat', 'waterpillar4@gmail.com', '111111', '2025-03-16 18:23:03'),
(54, 'Loser', 'Loser@gmail.com', 'Loser', '2025-07-15 17:12:36'),
(55, 'Thonedra', 'thonedra455621@gmail.com', 'Thonedra', '2025-09-23 19:10:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_responses`
--
ALTER TABLE `admin_responses`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `appointment_id` (`appointment_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_responses`
--
ALTER TABLE `admin_responses`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_responses`
--
ALTER TABLE `admin_responses`
  ADD CONSTRAINT `admin_responses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `admin_responses_ibfk_2` FOREIGN KEY (`appointment_id`) REFERENCES `appointment` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
