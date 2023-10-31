-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2023 at 06:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aircraft_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aircraft_identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cancelled_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `uuid`, `token`, `employee_id`, `service_id`, `date`, `start_time`, `end_time`, `client_name`, `client_email`, `client_phone`, `aircraft_location`, `aircraft_identifier`, `created_at`, `updated_at`, `cancelled_at`) VALUES
(1, 'a1f35466-c7ab-415f-bf8b-cb1205fee326', 'fAnoCveYY6fxBaNsf43C7uAFTfAo8gyh', 1, 1, '2023-01-25', '21:30:00', '22:30:00', 'John', 'John@gmail.com', '', '', '', '2023-01-25 23:08:18', '2023-01-25 23:08:18', NULL),
(2, '8be57148-fe99-4ce2-afec-d41d735a28b4', 'iPpBh2opRTmMk8codfzlxM3srFCzM6Em', 1, 1, '2023-02-22', '11:30:00', '12:30:00', 'Jasneetpal Singh', 'jasneetpalwork@gmail.com', '', '', '', '2023-02-22 17:49:47', '2023-02-22 17:49:47', NULL),
(3, '46cc4376-d80b-4576-bfb9-22cf9331e8cb', 'km2pHWAYODXC8GwzM3fAtQhPGr5PJpMC', 1, 1, '2023-02-22', '14:30:00', '15:30:00', 'Jasneetpal Singh', 'jasneetpalsingh619@gmail.com', '', '', '', '2023-02-22 20:31:04', '2023-02-22 20:31:04', '2023-02-22 20:43:53'),
(4, 'd42fab2a-ac51-4ce5-93bc-d780f7756d16', 'NTZrylBZIORVq1HSekq4oa4qkpZxIcww', 1, 1, '2023-02-22', '15:00:00', '16:00:00', 'Ajaypal Singh', 'ajaypal.singh403@gmail.com', '', '', '', '2023-02-22 20:50:23', '2023-02-22 21:00:24', '2023-02-22 21:00:24'),
(5, '75ff4e6b-1cc6-48c7-8286-f672b7bef45b', 'p2mcB7vvvDn8Po9m3aEZy78YT2hRWiWS', 1, 1, '2023-02-22', '16:00:00', '17:00:00', 'Jasneetpal Singh', 'jasneetpalsingh619@gmail.com', '', '', '', '2023-02-22 21:01:52', '2023-02-22 21:01:58', '2023-02-22 21:01:58'),
(6, '986c5b37-786b-43e0-8d33-bb31b62c18ba', 'XL2LAkj2ma5iLrXtUttIwUi3Cvve5fo5', 1, 1, '2023-02-22', '15:00:00', '16:00:00', 'Jasneetpal Singh', 'jasneetpalsingh619@gmail.com', '', '', '', '2023-02-22 21:02:59', '2023-02-22 21:03:06', '2023-02-22 21:03:06'),
(7, '526db141-1b49-4a35-9311-a70bee534db1', 'wMs4H6yfpDM7rl7WMXTqXLp5r0mwiBo5', 1, 1, '2023-02-25', '01:30:00', '02:30:00', 'Jasneetpal Singh', 'jasneetpalwork@gmail.com', '', '', '', '2023-02-25 08:16:05', '2023-02-25 08:16:05', NULL),
(8, '58ca4174-a9fb-4b15-b4f0-817cee29cbf2', 'EBmq6KLnmjygEHCRO66x9GtxGLDNK8se', 1, 1, '2023-02-25', '03:30:00', '04:30:00', 'Jasneetpal Singh', 'jasneetpalsingh@gmail.com', '', '', '', '2023-02-25 09:26:48', '2023-02-25 09:26:48', NULL),
(9, '62f7818f-a1be-40d5-bcb7-db5c82155507', 'Q8y7FBw8ebP0Q6tgTpWFJK9FGtCJRMGd', 1, 1, '2023-02-25', '05:30:00', '06:30:00', 'Ajaypal Singh', 'ajaypal.singh403@gmail.com', '', '', '', '2023-02-25 10:08:18', '2023-02-25 10:08:18', NULL),
(10, '2d23face-765a-4ddd-ad37-f2c62c2d6eff', 'mLNVpS5Yw0BusoFTLZaY2pIOAgKhTjut', 1, 1, '2023-02-25', '08:30:00', '09:30:00', 'Jasneet Singh', 'jsing600@mtroyal.ca', '', '', '', '2023-02-25 10:12:59', '2023-02-25 10:12:59', NULL),
(11, 'f320624d-49e5-42ba-894e-71be4f4586a4', 'ly5GcRGKwtnLsygLMpWGsONrqaDaiw6I', 1, 1, '2023-02-25', '07:00:00', '08:00:00', 'Ajaypal Singh', 'ajaypal.singh403@gmail.com', '', '', '', '2023-02-25 10:22:00', '2023-02-25 10:22:00', NULL),
(12, '64b6765c-4117-4bf9-acde-e2d2864f0164', '7Cz2Y8nEqiZrsxdT5X1T6xCD4Iy6rFC1', 1, 1, '2023-02-25', '10:30:00', '11:30:00', 'Jasneet Singh', 'jsing600@mtroyal.ca', '', '', '', '2023-02-25 10:29:19', '2023-02-25 10:29:19', NULL),
(13, '19e5bb75-fa94-4a90-835e-27303456231e', 'VVZfdTYE11ltWUNKlRJelzzNLnwE81II', 1, 1, '2023-02-25', '12:30:00', '13:30:00', 'Jasneet Singh', 'jsing600@mtroyal.ca', '', '', '', '2023-02-25 10:31:45', '2023-02-25 10:31:45', NULL),
(14, '0c5bcb3f-1ef5-4755-900b-56cba63a88ae', 'xW7E1l3X4UBtXJOGtUkgkoaA7Rq6evoN', 1, 1, '2023-02-25', '14:00:00', '15:00:00', 'Jasneetpal Singh', 'jasneetpalsingh619@gmail.com', '', '', '', '2023-02-25 10:33:54', '2023-02-25 10:33:54', NULL),
(15, 'f651cf31-e4b7-410c-b29a-9a81b5c3ee79', 'JwdwUZJyne02YuJl6z76tqzxBO98Z8Ad', 1, 1, '2023-03-09', '13:00:00', '14:00:00', 'Jasneetpal Singh', 'singhjasneetpal@gmail.com', '', '', '', '2023-03-09 19:04:29', '2023-03-09 19:05:34', '2023-03-09 19:05:34'),
(16, 'f1e76fae-c4a3-4daf-adc7-080fa13c5288', 'Qt9RqWGIzVulJnceZQx0oSGBB4OEFJ3E', 1, 1, '2023-04-08', '21:30:00', '22:30:00', 'Jasneetpal Singh', 'jasneetpalsingh@gmail.com', '18253655215', 'd4', 'E4h5', '2023-04-09 01:24:05', '2023-04-09 03:19:50', '2023-04-09 03:19:50'),
(17, '47ad092b-e7f8-4d6d-a890-11f292c5b34f', 'ZvLl8Q6VZVUqgU9Ou3K3lkTxsMhrX1vB', 1, 1, '2023-04-14', '17:00:00', '18:00:00', 'Jasneetpal Singh', 'jasneetpalsingh@gmail.com', '18253655215', 'd4', 'E4-h-5', '2023-04-14 23:01:00', '2023-04-14 23:01:00', NULL),
(18, '64ff1061-9ef4-42b2-a5ac-6dac27949d97', 'ieRQhWanRF8vJZfDldySgJmBGY54TJS7', 1, 1, '2023-10-16', '12:00:00', '13:00:00', 'fff', 'a@g.c', '1639170967', 'fff', 'fff', '2023-10-16 05:27:54', '2023-10-16 05:27:54', NULL),
(19, '95fc9859-ad77-43ef-bef0-d05c565ac1fe', 'GzCU0INqzjGy0hP6cpptSsIJV6zzW9XO', 1, 1, '2023-10-16', '13:30:00', '14:30:00', 'Manager', 'yarin6@live.nl', '1639170967', 'fff', 'fff', '2023-10-16 05:52:45', '2023-10-16 05:52:45', NULL),
(20, 'aa715916-a9f4-4a31-90f2-ebd247525ad4', 'xq8UAP1hOS8Xskz6p5cRwpoNjuQ2uck7', 1, 1, '2023-10-16', '15:00:00', '16:00:00', 'Manager', 'hair@gmali.com', '1639170967', 'fff', 'fff', '2023-10-16 05:53:45', '2023-10-16 05:53:45', NULL),
(21, '7eedca32-2de8-4490-894e-c644108409dc', '3fl707kP9LnqpjiNkkT3HMryY3l7HOjo', 1, 1, '2023-10-17', '12:30:00', '13:30:00', 'Micah Hancock', 'a@g.c', 'sdfsdf', 'fff', 'fff', '2023-10-16 05:54:46', '2023-10-16 05:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'as@g.f', '12:00:00', '16:00:00', NULL, NULL),
(2, 'Mabel', 'ss@ff.f', '10:00:00', '18:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_service`
--

CREATE TABLE `employee_service` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_service`
--

INSERT INTO `employee_service` (`id`, `employee_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_12_235711_create_employees_table', 2),
(6, '2023_01_13_002041_create_services_table', 3),
(7, '2023_01_13_002511_create_employee_service_table', 4),
(8, '2023_01_13_003257_create_schedules_table', 5),
(9, '2023_01_13_010058_create_schedules_table', 6),
(10, '2023_01_16_201941_create_schedule_unavailabilities_table', 7),
(11, '2023_01_25_153042_create_appointments_table', 8),
(12, '2023_02_22_133648_add_cancelled_at_to_appointments_table', 9),
(13, '2023_10_16_113749_create_jobs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `employee_id`, `date`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-04-14', '09:00:00', '23:00:00', NULL, NULL),
(2, 1, '2023-04-09', '09:00:00', '22:00:00', NULL, NULL),
(3, 2, '2023-02-03', '09:00:00', '17:00:00', NULL, NULL),
(4, 1, '2023-10-11', '12:00:00', '16:00:00', NULL, NULL),
(5, 1, '2023-10-12', '12:00:00', '16:00:00', NULL, NULL),
(6, 1, '2023-10-13', '12:00:00', '16:00:00', NULL, NULL),
(7, 1, '2023-10-14', '12:00:00', '16:00:00', NULL, NULL),
(8, 1, '2023-10-15', '12:00:00', '16:00:00', NULL, NULL),
(9, 1, '2023-10-16', '12:00:00', '16:00:00', NULL, NULL),
(10, 1, '2023-10-17', '12:00:00', '16:00:00', NULL, NULL),
(11, 1, '2023-10-18', '12:00:00', '16:00:00', NULL, NULL),
(12, 1, '2023-10-19', '12:00:00', '16:00:00', NULL, NULL),
(13, 1, '2023-10-20', '12:00:00', '16:00:00', NULL, NULL),
(14, 1, '2023-10-21', '12:00:00', '16:00:00', NULL, NULL),
(15, 1, '2023-10-22', '12:00:00', '16:00:00', NULL, NULL),
(16, 1, '2023-10-23', '12:00:00', '16:00:00', NULL, NULL),
(17, 1, '2023-10-24', '12:00:00', '16:00:00', NULL, NULL),
(18, 1, '2023-10-25', '12:00:00', '16:00:00', NULL, NULL),
(19, 1, '2023-10-26', '12:00:00', '16:00:00', NULL, NULL),
(20, 1, '2023-10-27', '12:00:00', '16:00:00', NULL, NULL),
(21, 1, '2023-10-28', '12:00:00', '16:00:00', NULL, NULL),
(22, 1, '2023-10-29', '12:00:00', '16:00:00', NULL, NULL),
(23, 1, '2023-10-30', '12:00:00', '16:00:00', NULL, NULL),
(24, 1, '2023-10-31', '12:00:00', '16:00:00', NULL, NULL),
(25, 1, '2023-11-01', '12:00:00', '16:00:00', NULL, NULL),
(26, 1, '2023-11-02', '12:00:00', '16:00:00', NULL, NULL),
(27, 1, '2023-11-03', '12:00:00', '16:00:00', NULL, NULL),
(28, 1, '2023-11-04', '12:00:00', '16:00:00', NULL, NULL),
(29, 1, '2023-11-05', '12:00:00', '16:00:00', NULL, NULL),
(30, 1, '2023-11-06', '12:00:00', '16:00:00', NULL, NULL),
(31, 1, '2023-11-07', '12:00:00', '16:00:00', NULL, NULL),
(32, 1, '2023-11-08', '12:00:00', '16:00:00', NULL, NULL),
(33, 1, '2023-11-09', '12:00:00', '16:00:00', NULL, NULL),
(34, 1, '2023-11-10', '12:00:00', '16:00:00', NULL, NULL),
(35, 2, '2023-10-11', '10:00:00', '18:00:00', NULL, NULL),
(36, 2, '2023-10-12', '10:00:00', '18:00:00', NULL, NULL),
(37, 2, '2023-10-13', '10:00:00', '18:00:00', NULL, NULL),
(38, 2, '2023-10-14', '10:00:00', '18:00:00', NULL, NULL),
(39, 2, '2023-10-15', '10:00:00', '18:00:00', NULL, NULL),
(40, 2, '2023-10-16', '10:00:00', '18:00:00', NULL, NULL),
(41, 2, '2023-10-17', '10:00:00', '18:00:00', NULL, NULL),
(42, 2, '2023-10-18', '10:00:00', '18:00:00', NULL, NULL),
(43, 2, '2023-10-19', '10:00:00', '18:00:00', NULL, NULL),
(44, 2, '2023-10-20', '10:00:00', '18:00:00', NULL, NULL),
(45, 2, '2023-10-21', '10:00:00', '18:00:00', NULL, NULL),
(46, 2, '2023-10-22', '10:00:00', '18:00:00', NULL, NULL),
(47, 2, '2023-10-23', '10:00:00', '18:00:00', NULL, NULL),
(48, 2, '2023-10-24', '10:00:00', '18:00:00', NULL, NULL),
(49, 2, '2023-10-25', '10:00:00', '18:00:00', NULL, NULL),
(50, 2, '2023-10-26', '10:00:00', '18:00:00', NULL, NULL),
(51, 2, '2023-10-27', '10:00:00', '18:00:00', NULL, NULL),
(52, 2, '2023-10-28', '10:00:00', '18:00:00', NULL, NULL),
(53, 2, '2023-10-29', '10:00:00', '18:00:00', NULL, NULL),
(54, 2, '2023-10-30', '10:00:00', '18:00:00', NULL, NULL),
(55, 2, '2023-10-31', '10:00:00', '18:00:00', NULL, NULL),
(56, 2, '2023-11-01', '10:00:00', '18:00:00', NULL, NULL),
(57, 2, '2023-11-02', '10:00:00', '18:00:00', NULL, NULL),
(58, 2, '2023-11-03', '10:00:00', '18:00:00', NULL, NULL),
(59, 2, '2023-11-04', '10:00:00', '18:00:00', NULL, NULL),
(60, 2, '2023-11-05', '10:00:00', '18:00:00', NULL, NULL),
(61, 2, '2023-11-06', '10:00:00', '18:00:00', NULL, NULL),
(62, 2, '2023-11-07', '10:00:00', '18:00:00', NULL, NULL),
(63, 2, '2023-11-08', '10:00:00', '18:00:00', NULL, NULL),
(64, 2, '2023-11-09', '10:00:00', '18:00:00', NULL, NULL),
(65, 2, '2023-11-10', '10:00:00', '18:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_unavailabilities`
--

CREATE TABLE `schedule_unavailabilities` (
  `id` bigint UNSIGNED NOT NULL,
  `schedule_id` bigint UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_unavailabilities`
--

INSERT INTO `schedule_unavailabilities` (`id`, `schedule_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 1, '20:00:00', '21:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'AV GAS 100LL', 60, NULL, NULL),
(2, 'JET A-1 (FSII)', 60, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Caleb Vincent', 'dezalecatu@mailinator.com', NULL, '$2y$10$OvgIipbibCONBe3mATL.AOcx.bBPsKknzd.UhEjSu7epXE2eeUiwu', NULL, '2023-10-11 01:12:56', '2023-10-11 01:12:56'),
(2, 'Shad Delaney', 'a@g.c', NULL, '$2y$10$K1DOCBwE9s4FC73pWlC4xOQOPjvQjLOTqGLTbRbOxmx1fsumda56e', NULL, '2023-10-16 05:24:34', '2023-10-16 05:24:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_employee_id_foreign` (`employee_id`),
  ADD KEY `appointments_service_id_foreign` (`service_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_service_employee_id_foreign` (`employee_id`),
  ADD KEY `employee_service_service_id_foreign` (`service_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `schedule_unavailabilities`
--
ALTER TABLE `schedule_unavailabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_unavailabilities_schedule_id_foreign` (`schedule_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_service`
--
ALTER TABLE `employee_service`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `schedule_unavailabilities`
--
ALTER TABLE `schedule_unavailabilities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD CONSTRAINT `employee_service_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule_unavailabilities`
--
ALTER TABLE `schedule_unavailabilities`
  ADD CONSTRAINT `schedule_unavailabilities_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
