-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 07:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testpaymentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2014_10_12_000000_create_users_table', 2),
(8, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanentaddress` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentmobileno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentschoolname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examlanguage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameOfTheInstitution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BCA Academy',
  `addressOfTheInstitution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Dhaka 1200',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FAIL',
  `sp_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '001',
  `bankTxStatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FAIL',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `fathername`, `mothername`, `presentaddress`, `permanentaddress`, `mobile`, `parentmobileno`, `presentschoolname`, `classname`, `roll`, `examlanguage`, `nameOfTheInstitution`, `addressOfTheInstitution`, `status`, `sp_code`, `bankTxStatus`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jahidul Alam Mishuk', 'jahidul.alam13@diit.info', 'mishuk', 'ma', '95/1', '594', '01681805060', '01777288229', 'fcg', 'nine', '1', 'bangla', 'BCA Academy', 'Dhaka 1200', 'Success', '000', 'FAIL', NULL, '$2y$10$Z.ySt4.i0A73d22BqlTSPuyT3dR5HNrEv0ZwvxnQOryDMtX9j9.MS', NULL, '2020-08-28 10:02:23', '2020-08-28 11:04:51'),
(2, 'MD. JAHIDUL ALAM MISHUK', 'jahiduk.alam13@gmail.com', 'mishuk', 'ma', '95', '21', '01681805060', '0177288229', 'fcg', 'nine', '2', 'bangla', 'BCA Academy', 'Dhaka 1200', 'Success', '000', 'FAIL', NULL, '$2y$10$YPMCbT.pYnugzf2XrKF/IetejJlXFITpfEdETlG16O0b3rRrSnrv6', NULL, '2020-08-28 11:18:16', '2020-08-28 11:19:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
