-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 09:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Name`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL,
  `Regular` int(11) NOT NULL,
  `VIP` int(11) NOT NULL,
  `MaxAttendees` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Poster`, `Name`, `Details`, `Venue`, `Time`, `Date`, `Regular`, `VIP`, `MaxAttendees`, `created_at`, `updated_at`) VALUES
(1, '1709066193.jpg', 'Worship Night', 'A time to worship and praise God', 'ICC Nairobi West', '19:00:00', '2024-03-01', 200, 600, 20, '2024-02-27 17:36:33', '2024-02-28 15:39:28'),
(2, '1709070882.jpg', 'Sports Event', 'Compete in a friendly football match', 'Nyayo Stadium', '20:00:00', '2024-03-09', 100, 300, 30, '2024-02-27 17:48:10', '2024-02-28 15:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_27_005426_create_admins_table', 1),
(5, '2024_02_27_184256_create_events_table', 2),
(6, '2024_02_27_185917_create_events_table', 3),
(7, '2024_02_27_194740_create_events_table', 4),
(8, '2024_02_27_202702_create_events_table', 5),
(9, '2024_02_27_232428_create_reservations_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TicketType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberofTickets` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Name`, `Email`, `FullName`, `TicketType`, `NumberofTickets`, `TotalPrice`, `created_at`, `updated_at`) VALUES
(1, 'Sports Event', 'mogorechelsea@gmail.com', 'Chelsea', 'Regular', 3, 300, '2024-02-27 22:05:01', '2024-02-27 22:05:01'),
(2, 'Sports Event', 'chelsea.mogore@gmail.com', 'Mogore', 'Regular', 4, 400, '2024-02-27 22:07:33', '2024-02-27 22:07:33'),
(3, 'Worship Night', 'chelsea.mogore@gmail.com', 'Chelsea Mogore', 'Regular', 3, 600, '2024-02-28 06:52:50', '2024-02-28 06:52:50'),
(4, 'Sports Event', 'mogorechelsea@gmail.com', 'Chelsea Mogore', 'Regular', 3, 300, '2024-02-28 07:27:34', '2024-02-28 07:27:34'),
(5, 'Worship Night', 'chelsea.mogore@gmail.com', 'Chelsea Mogore', 'Regular', 4, 800, '2024-02-28 08:21:43', '2024-02-28 08:21:43'),
(6, 'Worship Night', 'mogorechelsea@gmail.com', 'Chelsea', 'Regular', 3, 600, '2024-02-28 08:24:25', '2024-02-28 08:24:25'),
(7, 'Sports Event', 'mogorechelsea@gmail.com', 'Chelsea Mogore', 'Regular', 5, 500, '2024-02-28 09:25:34', '2024-02-28 09:25:34'),
(8, 'Sports Event', 'mogorechelsea@gmail.com', 'Mogore', 'VIP', 2, 600, '2024-02-28 16:28:20', '2024-02-28 16:28:20'),
(9, 'Sports Event', 'mogorechelsea@gmail.com', 'Chelsea Mogore', 'Regular', 2, 200, '2024-02-28 17:03:32', '2024-02-28 17:03:32'),
(10, 'Sports Event', 'mogorechelsea@gmail.com', 'Chelsea Mogore', 'Regular', 4, 400, '2024-02-28 17:03:49', '2024-02-28 17:03:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`Email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
