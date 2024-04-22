-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 01:55 AM
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
-- Database: `phplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneDB` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `phoneDB`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', 0),
(2, 'test2', 'test2', 'test@test.com', 0),
(3, '200097950@aston.ac.uk', '$2y$10$gEzitXxIHdlI5n68n2cv3u2i31Qi6bLOQvqE9timnKOaYAnSkZkim', '', 0),
(4, 'thegermanboy09@gmail.com', '$2y$10$NGxIRhewCuuRc04jcHTQ4OlN//i/fGoPVOLmR3Lnh8uQqrwbJtM.2', '', NULL),
(5, '', '$2y$10$hwu4YYN/wZJltQ/tI9Vqye62VQ0JiL9wcGPvM.vfU5e1fp9aO1q4G', '', NULL),
(6, 'munzir.hassan01@gmail.com', '$2y$10$kZV5iJBIpUwai2wEDI2ZROkd/DOocpI3UmRdEP9VNB2pzTlebrM2y', '', NULL),
(7, 'abumazin73@yahoo.de', '$2y$10$vaiphDuWDeGgP7M5LboBNuHCEg2OgLg7hpHIrlKFVUrv8zp2RqY8q', '', NULL),
(8, 'ALAA@HOTMAIL.COM', '$2y$10$lsRdNQ8d2DEOndnZdcwxa.5TPTsw4MhpQBRizqPToI0NtmAvXUitm', '', NULL),
(9, 'test3@test.com', '$2y$10$2J7bvkDnJudeTppa4ER2X.xNIyRIALSsX5WsMkI8iWhP57dWrhP/i', '', NULL),
(10, 'test5@test.com', '$2y$10$8pbMpSLRDXlLf7FMMnmPqO1Ryzu8CBn5QUDq6lHKvuR/.nYnBnBfq', '', NULL),
(11, 'abumazin73@yahoo.com', '$2y$10$mPXzdP5XJiq/SHlErNhyB.M.9.8y0MELriyXHC8kJy4schGII269.', '', NULL),
(12, 'test10@gmail.com', '$2y$10$cahuRAO2E3Eqe/JzAaKAFu1C0Mf6tlhPbbuxLk3H37EOeRD2YWA12', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `role` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `Company`, `dateFrom`, `dateTo`, `role`, `experience`, `accounts_id`, `date_added`) VALUES
(15, 'p[l', '2002-02-01', '2022-02-01', 'software engineer', 'As a software engineer, I develop and optimize software solutions that solve complex problems and enhance user experiences.', 4, '2024-04-21 21:08:07'),
(16, 'p[l', '2003-02-01', '2022-02-01', 'software engineer', 'As a software engineer, I develop and optimize software solutions that solve complex problems and enhance user experiences.', 4, '2024-04-21 21:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `accounts_id` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `hobby`, `accounts_id`, `date_added`) VALUES
(1, 'l', 6, '2024-04-21 21:08:32'),
(2, 'opk', 4, '2024-04-21 21:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `University` text NOT NULL,
  `Qualification` text NOT NULL,
  `Grade` text NOT NULL,
  `id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`University`, `Qualification`, `Grade`, `id`, `accounts_id`, `date_added`) VALUES
('Aston', 'Masters', '112', 27, 4, '2024-04-21 21:08:45'),
('oo', 'Phd', '2:2', 28, 4, '2024-04-21 21:08:45'),
('pl', 'Masters', '112', 29, 4, '2024-04-21 21:08:45'),
('pl', 'Bachelors', 'Pass', 30, 4, '2024-04-21 21:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int(11) NOT NULL,
  `reference_name` varchar(255) NOT NULL,
  `reference_detail` text NOT NULL,
  `accounts_id` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `reference_name`, `reference_detail`, `accounts_id`, `date_added`) VALUES
(1, '', 'mp', 6, '2024-04-21 21:05:38'),
(2, '', 'ko', 4, '2024-04-21 21:05:38'),
(3, '', 'ko', 4, '2024-04-21 21:05:38'),
(4, '', 'ok', 4, '2024-04-21 21:05:38'),
(5, '', 'ok', 4, '2024-04-21 21:05:38'),
(6, '', 'ok', 4, '2024-04-21 21:05:38'),
(7, '', 'okp', 4, '2024-04-21 21:05:38'),
(8, '', 'okp', 4, '2024-04-21 21:05:38'),
(9, '', 'okpokp', 4, '2024-04-21 21:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `accounts_id`, `skill`, `date_added`) VALUES
(6, 0, 'Teamwork', '2024-04-21 21:09:03'),
(7, 6, 'k', '2024-04-21 21:09:03'),
(8, 4, 'ok', '2024-04-21 21:09:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `accounts_id` (`accounts_id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_id` (`accounts_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_id` (`accounts_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_3` (`accounts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `references_ibfk_1` FOREIGN KEY (`accounts_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
