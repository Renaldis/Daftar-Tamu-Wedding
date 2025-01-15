-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `code_rsvp` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `guests_count` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `is_present` tinyint(1) DEFAULT 0,
  `confirm` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `code_rsvp`, `name`, `email`, `phone`, `guests_count`, `notes`, `is_present`, `confirm`, `created_at`) VALUES
(1, 'RSVP-1', 'Renaldi Saputra', 'renaldis141@gmail.com', '89675754433', 1, 'Semoga berjalan lancar, Aamiin', 1, 1, '2024-11-11 19:53:00'),
(2, 'RSVP-2', 'Amellia dwi', 'amellia@gmail.com', '875759834', 1, 'lancar acaranya', 0, 0, '2024-11-11 19:58:00'),
(3, 'RSVP-3', 'Mario dewa', 'mario@gmail.com', '8976688543', 3, '', 0, 0, '2024-11-11 19:59:00'),
(4, 'RSVP-4', 'Nabilla', 'nabilla@gmail.com', '9847563349', 2, 'semoga lancar jaya acaranya', 0, 0, '2024-11-11 20:00:00'),
(5, 'RSVP-5', 'reyno fadhil', 'reyno@gmail.com', '8983994756', 2, 'sakinah mawaddah ', 0, 0, '2024-11-11 20:01:00'),
(6, 'RSVP-6', 'Manda talita', 'manda@gmail.com', '8977865765', 1, 'semoga sukses dan lancar acaranya', 0, 0, '2024-11-11 20:05:00'),
(7, 'RSVP-7', 'Elfrida', 'elfrida@gmail.com', '8977658767', 4, '', 0, 0, '2024-11-11 20:29:00'),
(8, 'RSVP-8', 'Malvin', 'malvin@gmail.com', '8778787563', 5, 'berkah selalu', 0, 0, '2024-11-11 20:31:00'),
(9, 'RSVP-9', 'Valent', 'valent@gmail.com', '8977675876', 2, 'goksss sukses terus\r\n', 0, 0, '2024-11-11 20:32:00'),
(10, 'RSVP-10', 'Anti', 'anti@gmail.com', '8587667987', 1, 'selamat semoga sukses ya', 0, 0, '2024-11-11 20:34:00'),
(23, '', 'ahmad', 'ahmad@gmail.com', '089675759858', 2, 'selamat yaa', 1, 1, '2025-01-14 21:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `is_admin`, `created_at`) VALUES
(3, 'Renaldi', 'renaldis31', '$2y$10$i/kgk8g3TNIPsqOS/o2ZJ.TJ8P1nf86gEOjXdk39TSr/wBMDefFQm', 1, '2024-11-10 07:09:06'),
(4, 'Amellia', 'amellia', '$2y$10$0kdym99dR/sLEgtKHzsS8eJa9RIzMUl2TwkYgbttWKGPNTsonH1xC', 1, '2024-11-10 14:33:51'),
(5, 'Mario', 'mario', '$2y$10$/l12m7b.1n6NoLJd/n1rz./NxERyZXyb0J1qr4CQdf1mhxOwVOxXm', 1, '2024-11-11 15:20:57'),
(6, 'reyno', 'reyno', '$2y$10$69BThq/5TGXOmyVDffwmkux/RZNlY/0qrsH6O4SP70bJeRHPc4w2e', 1, '2024-11-26 01:52:19'),
(7, 'ahmad', 'ahmad', '$2y$10$KN5r2d5DncQ7vojJ7Ooitu3BxZIbFY.m.C2OTqMajR6y/pYjPeeUm', 1, '2024-11-26 13:32:44'),
(8, 'valensbay', 'valensbay', '$2y$10$Ys1TW.VhTE0uHZX8n6cPy.xvCSX2P/W2ce2bgUjB46kw83sK7DYqy', 1, '2025-01-07 09:17:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
