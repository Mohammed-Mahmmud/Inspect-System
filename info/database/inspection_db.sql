-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2024 at 10:12 AM
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
-- Database: `inspection_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptance`
--

CREATE TABLE `acceptance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acceptance`
--

INSERT INTO `acceptance` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Accepted', 1, NULL, NULL),
(2, 'Rejected', 2, NULL, NULL),
(3, 'Repaire', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `check` tinyint(4) NOT NULL DEFAULT 0,
  `comment` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `thorough_examination_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`id`, `question`, `check`, `comment`, `type`, `thorough_examination_id`, `created_at`, `updated_at`) VALUES
(90, 'Enter Space Bars and End Covers', 1, 'Aliquip', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(91, 'Main Gears & Reduction Gears', 1, 'Fuga Nu', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(92, 'Record of Major Repairs / Alterations / Replacements', 1, 'Est qui', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(93, 'Personnel Basket', 0, 'Irure co', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(94, 'Hoisting Speed', 0, 'At place', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(95, 'Lowering Speed', 0, 'Non recu', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(96, 'Boom', 1, 'Sed aspe', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(97, 'Gauges in Cab', 1, 'Inventor', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(98, 'Turntable Bearing', 1, 'Repudian', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(99, 'Shear Wave Ultra-Sonic', 0, 'Nesciunt', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(100, 'Steering System', 0, 'Quia min', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(101, 'Labels and Tags', 0, 'Labore s', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(102, 'outriggers / stabilizers', 1, 'Rerum qu', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(103, 'directional controls', 1, 'Est sint', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(104, 'Main Gears & Reduction Gears', 1, 'Molestia', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(105, 'Hydraulic System', 1, 'Sint no', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(106, 'Motor / Electric System', 1, 'Magna su', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(107, 'Brakes / Clutch', 0, 'In ipsum', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(108, 'Controls / Operational Controls', 1, 'Maxime l', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(109, 'Tyres and Wheels', 1, 'Consequa', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(110, 'Eddy Current', 1, 'Sit volu', 'manlift_checklist', 66, '2024-06-05 02:30:46', '2024-06-05 02:30:46'),
(111, 'Enter Space Bars and End Covers', 1, 'Lorem eo', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(112, 'Main Gears & Reduction Gears', 1, 'Optio e', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(113, 'Record of Major Repairs / Alterations / Replacements', 1, 'Cupidita', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(114, 'Personnel Basket', 0, 'Id volu', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(115, 'Hoisting Speed', 0, 'Ipsum a', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(116, 'Lowering Speed', 0, 'Eaque la', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(117, 'Boom', 0, 'Commodo', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(118, 'Gauges in Cab', 0, 'Aut aper', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(119, 'Turntable Bearing', 0, 'Libero e', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(120, 'Shear Wave Ultra-Sonic', 1, 'Accusant', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(121, 'Steering System', 0, 'Quia rat', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(122, 'Labels and Tags', 1, 'Omnis in', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(123, 'outriggers / stabilizers', 0, 'Quibusda', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(124, 'directional controls', 1, 'Vitae bl', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(125, 'Main Gears & Reduction Gears', 1, 'Illum v', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(126, 'Hydraulic System', 0, 'Beatae f', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(127, 'Motor / Electric System', 1, 'Est maio', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(128, 'Brakes / Clutch', 1, 'Dolores', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(129, 'Controls / Operational Controls', 1, 'Laboris', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(130, 'Tyres and Wheels', 0, 'Eligendi', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(131, 'Eddy Current', 0, 'Velit d', 'manlift_checklist', 67, '2024-06-05 02:34:20', '2024-06-05 02:34:20'),
(132, 'Spark Arrestor', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(133, 'Reverse Alarm / Beacon Light', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(134, 'Space Bars and End Covers', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(135, 'Counter Weight', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(136, 'Hoisting Speed', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(137, 'Lowering Speed', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(138, 'Bucket', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(139, 'Boom / Mast', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(140, 'Fire Extinguisher', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(141, 'Gauges in Cab', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(142, 'Tyres and Wheels', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(143, 'Labels and Tags', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(144, 'Hydraulic System & Hoses', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(145, 'Air System', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(146, 'Electric System / Lights', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(147, 'Brakes / Clutch', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(148, 'Controls / Operational Controls', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(149, 'Manufacturer Data Plate', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(150, 'Steering System', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25'),
(151, 'Records of Major Repairs', 1, NULL, 'wheel_loader_checklist', 77, '2024-06-23 09:13:25', '2024-06-23 09:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` tinyint(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `full_name`, `email`, `password`, `location`, `deleted_at`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'ECDC', 'Egyptian Chinese Development Company', 'ECDC@stc-eg.com', 'DpkGI33461=@/@-', 'cairo', NULL, NULL, 0, NULL, 0),
(3, 'S T', 'Sinothrow', 'ST@stc-eg.com', 'DpkGI33461', NULL, NULL, NULL, 0, NULL, 0),
(7, 'test comapny', 'testing new company', 'newcomapny@stc-eg.com', 'wFLGp69703/@!!/', NULL, NULL, '2024-01-08 04:50:26', 1, '2024-01-11 08:23:39', NULL),
(8, 'Eugenia Hutchinson', 'Phillip Saunders', 'EugeniaHutchinson@stc-eg.com', 'qpaar62428$$?#@', NULL, NULL, '2024-02-04 07:03:43', 1, '2024-02-04 07:03:43', NULL),
(10, 'Quincy Cunningham', 'Yuri Cotton', 'QuincyCunningham@stc-eg.com', 'lGEVK05664#*_-$', 'Repellendus Suscipi', NULL, '2024-02-05 05:19:04', 1, '2024-02-05 05:19:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_ticket`
--

CREATE TABLE `job_ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ispr` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `well_name` varchar(255) DEFAULT NULL,
  `ref_number` varchar(255) DEFAULT NULL,
  `job_price` varchar(255) DEFAULT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(43, 'App\\Models\\Dashboard\\Lifting\\Mpi', 238, '0a2690fd-ba94-4d1c-b6ea-8902931cc143', 'mpi', 'New Inspection Stamp', 'New-Inspection-Stamp.png', 'image/png', 'media', 'media', 163090, '[]', '[]', '[]', '[]', 1, '2024-04-01 09:41:36', '2024-04-01 09:41:36'),
(44, 'App\\Models\\Dashboard\\Lifting\\Mpi', 238, 'e3f459f3-cd06-48bd-838b-e5ab0969faca', 'mpi', 'STC free zone', 'STC-free-zone.png', 'image/png', 'media', 'media', 86611, '[]', '[]', '[]', '[]', 2, '2024-04-01 09:41:36', '2024-04-01 09:41:36'),
(45, 'App\\Models\\Dashboard\\Lifting\\Mpi', 238, 'b345c552-05bc-4e88-b617-4f26c0bef70b', 'mpi', 'STC Stamp', 'STC-Stamp.png', 'image/png', 'media', 'media', 199368, '[]', '[]', '[]', '[]', 3, '2024-04-01 09:41:36', '2024-04-01 09:41:36'),
(46, 'App\\Models\\Dashboard\\Lifting\\Mpi', 238, '61eac4dd-2aae-4eb9-8685-f8cd7858971d', 'mpi', 'stc-min', 'stc-min.png', 'image/png', 'media', 'media', 29306, '[]', '[]', '[]', '[]', 4, '2024-04-01 09:41:36', '2024-04-01 09:41:36'),
(47, 'App\\Models\\Dashboard\\Lifting\\Mpi', 238, '21e3e816-d064-4018-8dc9-3836e1027e4e', 'mpi', 'toppng.com-red-rejected-stamp-1096x797', 'toppng.com-red-rejected-stamp-1096x797.png', 'image/png', 'media', 'media', 92267, '[]', '[]', '[]', '[]', 5, '2024-04-01 09:41:36', '2024-04-01 09:41:36'),
(55, 'App\\Models\\Report\\ReportSettings', 20, '85aea8b1-8a1d-4f6d-aff6-b1fe056b5ba4', 'header_image', 'stc_logo', 'stc_logo.png', 'image/png', 'media', 'media', 236115, '[]', '[]', '[]', '[]', 1, '2024-05-01 07:56:51', '2024-05-01 07:56:51'),
(63, 'App\\Models\\Report\\ReportSettings', 20, '13ddabc8-900d-4c89-a4c4-7f4c3605c4c6', 'headerImage', 'd80a3172-971b-4004-9c0b-ba5ececf0f69', 'd80a3172-971b-4004-9c0b-ba5ececf0f69.png', 'image/png', 'media', 'media', 236115, '[]', '[]', '[]', '[]', 2, '2024-05-26 08:25:21', '2024-05-26 08:25:21'),
(71, 'App\\Models\\Report\\ReportSettings', 21, 'ed287f54-1a93-4446-9aa0-534aa3017334', 'footerImage', 'final png', 'final-png.png', 'image/png', 'media', 'media', 255462, '[]', '[]', '[]', '[]', 1, '2024-06-25 07:09:07', '2024-06-25 07:09:07'),
(72, 'Mpi', 273, '6f463cf6-d8c4-411d-86e5-f3897f4e13ed', 'mpi', 'stc-min', 'stc-min.png', 'image/png', 'media', 'media', 27898, '[]', '[]', '[]', '[]', 1, '2024-06-30 06:13:25', '2024-06-30 06:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000001_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_124133_create_admins_table', 1),
(6, '2023_11_27_185060_create_company_table', 1),
(7, '2023_11_30_125110_add_email_to_company_table', 1),
(8, '2023_11_30_125355_add_password_to_company_table', 1),
(9, '2023_12_03_085734_create_rig_table', 1),
(10, '2023_12_03_105708_create_orders_table', 1),
(11, '2023_12_03_133209_create_foreign_keys', 1),
(12, '2023_12_04_123603_add_trash_to_users_table', 2),
(13, '2024_01_01_071527_create_mpi_table', 3),
(14, '2024_01_01_071528_create_mpi_table', 4),
(15, '2024_01_01_071529_create_mpi_table', 5),
(16, '2024_01_03_115002_create_images_table', 6),
(17, '2024_01_07_133523_add_full_name_to_users_table', 7),
(18, '2024_01_07_133926_add_created_by_to_users_table', 7),
(19, '2024_01_07_133937_add_updated_by_to_users_table', 7),
(20, '2024_01_08_064007_add_updated_by_to_company', 8),
(21, '2024_01_08_064016_add_created_by_to_company', 8),
(22, '2024_01_08_101203_add_acceptance_to_mpi', 9),
(23, '2024_01_08_101204_add_acceptance_to_mpi', 10),
(24, '2024_01_08_105012_add_first_content_to_mpi', 11),
(25, '2024_01_08_105021_add_second_content_to_mpi', 11),
(26, '2024_01_08_130613_add_second_label_to_mpi', 12),
(27, '2024_01_08_130623_add_first_label_to_mpi', 12),
(28, '2024_01_09_140434_add_created_by_to_mpi', 13),
(29, '2024_01_09_140439_add_updated_by_to_mpi', 13),
(30, '2024_01_11_110829_add_name_to_images', 14),
(31, '2024_01_20_101758_create_report_type_table', 15),
(32, '2024_01_21_125011_add_created_by_to_orders', 16),
(33, '2024_01_21_125018_add_updated_by_to_orders', 16),
(34, '2024_01_21_130601_add_date_to_orders', 17),
(35, '2024_01_21_132356_add_report_id_to_orders', 18),
(36, '2024_01_22_092358_add_purchase_order_no_to_mpi', 19),
(37, '2024_01_22_104407_add_supervisor_to_mpi', 20),
(38, '2024_01_22_224256_add_note_to_mpi', 21),
(39, '2024_01_22_230723_add_magnetizing_current_to_mpi', 22),
(40, '2024_01_22_230747_add_magnetic_particles_to_mpi', 22),
(41, '2024_01_22_230904_add_surface_condition_to_mpi', 22),
(42, '2024_01_22_230724_add_magnetizing_current_to_mpi', 23),
(43, '2024_01_22_230748_add_magnetic_particles_to_mpi', 23),
(44, '2024_01_22_230905_add_surface_condition_to_mpi', 23),
(45, '2024_01_23_095218_add_equipment_to_mpi', 24),
(46, '2024_01_23_112616_create_mpi_equipment_table', 25),
(47, '2024_01_23_112617_create_mpi_equipment_table', 26),
(48, '2024_01_23_112618_create_mpi_equipment_table', 27),
(49, '2024_01_23_112619_create_mpi_equipment_table', 28),
(50, '2024_01_24_075022_add_equipment_to_mpi_table', 29),
(51, '2024_01_24_111457_add_uv_light_no_to_mpi_equipment', 30),
(52, '2024_01_28_080514_add_specifiacation_to_mpi_table', 31),
(53, '2024_01_28_100917_add_magnetic_particles_to_mpi_table', 32),
(54, '2023_12_03_105709_create_orders_table', 33),
(55, '2023_12_03_105707_create_orders_table', 34),
(56, '2023_12_03_105706_create_orders_table', 35),
(57, '2024_01_28_194450_add_foreign_key_to_orders_table', 36),
(58, '2024_01_28_200515_add_order_id_to_mpi_table', 37),
(59, '2024_01_28_200925_add_foreign_key_to_mpi_table', 37),
(60, '2024_01_29_111402_create_job_ticket_table', 38),
(61, '2024_01_29_111403_create_job_ticket_table', 39),
(62, '2024_01_29_211549_create_job_ticket_content_table', 39),
(63, '2024_01_29_211550_create_job_ticket_content_table', 40),
(64, '2024_01_29_111474_create_job_ticket_table', 41),
(65, '2024_01_29_211551_create_job_ticket_content_table', 41),
(66, '2024_02_01_104436_add_morph_to_images_table', 42),
(67, '2024_02_04_114122_add_end_date_to_job_ticket_table', 43),
(68, '2024_02_04_142107_add_location_to_company_table', 44),
(69, '2024_02_05_121113_add_next_date_to_mpi_table', 45),
(70, '2024_02_06_090944_create_thorough_examination_table', 46),
(71, '2024_02_06_123700_add_perfect_note_to_thorough_examination_table', 47),
(72, '2024_02_06_090945_create_thorough_examination_table', 48),
(73, '2024_02_07_061948_add_diameter_unit_to_thorough_examination_table', 49),
(74, '2024_02_07_072029_create_shakle_size_table', 50),
(75, '2024_02_07_093516_add_shaklesize_id_to_thorough_examination_table', 51),
(76, '2024_02_12_124730_add_thorough_type_to_thorough_examination_table', 52),
(77, '2024_02_13_100647_create_checklist_table', 53),
(78, '2024_02_13_100657_create_checklist_table', 54),
(79, '2024_02_13_100658_create_checklist_table', 55),
(80, '2024_02_20_122657_create_mud_jar_table', 56),
(81, '2024_02_20_132949_create_mad_jar_body_table', 57),
(82, '2024_02_20_122667_create_mud_jar_table', 58),
(83, '2024_02_20_132979_create_mad_jar_body_table', 59),
(84, '2024_02_21_093904_create_acceptance_table', 60),
(85, '2024_02_21_094453_add_accept_to_mud_jar_table', 61),
(86, '2024_02_20_122670_create_mud_jar_table', 62),
(87, '2024_02_20_132991_create_mad_jar_body_table', 63),
(88, '2024_02_20_122671_create_mud_jar_table', 64),
(89, '2024_02_20_132993_create_mad_jar_body_table', 65),
(90, '2024_02_20_132999_create_mad_jar_body_table', 66),
(91, '2024_02_26_063009_create_tools_table', 67),
(92, '2024_02_26_064336_create_tools_body_table', 68),
(93, '2024_02_26_072613_create_tools_body_table', 69),
(94, '2024_02_26_072615_create_tools_body_table', 70),
(95, '2024_02_26_063010_create_tools_table', 71),
(96, '2024_02_26_072616_create_tools_body_table', 72),
(97, '2024_02_28_111924_create_tools_desc_table', 73),
(98, '2024_02_28_111926_create_tools_desc_table', 74),
(99, '2024_02_28_111927_create_tools_desc_table', 75),
(100, '2024_02_28_111928_create_tools_desc_table', 76),
(101, '2024_02_29_083745_create_reports_descriptions_table', 77),
(102, '2024_02_29_083746_create_reports_descriptions_table', 78),
(103, '2024_02_29_083747_create_reports_descriptions_table', 79),
(104, '2024_03_03_051411_add_work_order_to_tools_table', 80),
(105, '2024_03_04_084921_add_desc_to_tools_table', 81),
(106, '2024_03_06_131530_create_tublar_reports_table', 82),
(107, '2024_03_08_074226_add_carried_out_to_thorough_examination_table', 83),
(108, '2024_03_12_080043_create_tublar_summary_table', 84),
(109, '2024_03_14_111550_add_details_to_tublar_summary', 85),
(110, '2024_03_31_102733_create_permission_tables', 86),
(111, '2024_03_31_170320_add_equipment_to_mpi_table', 87),
(112, '2024_04_01_031210_create_media_table', 88),
(113, '2024_02_26_063222_create_tools_table', 89),
(114, '2024_04_03_074149_create_report_desc_table', 90),
(115, '2024_02_26_063225_create_tools_table', 91),
(116, '2024_04_18_071426_create_tools_extensions_table', 92),
(117, '2024_04_28_053009_creare_heavy_weight_table', 93),
(118, '2024_04_28_053009_creare_tubs_table', 94),
(119, '2024_04_30_123746_create_insp_methods_table', 95),
(120, '2024_05_01_065916_create_report_header_table', 95),
(121, '2024_05_01_072052_create_report_front_details_table', 96),
(122, '2024_05_01_072052_create_report_settings_table', 97),
(123, '2024_05_14_061037_create_translation_keys_table', 98),
(124, '2024_05_15_072049_create_test_table', 99),
(125, '2024_05_22_053831_create_sidebar_table', 100),
(126, '2024_05_22_053832_create_sidebar_table', 101),
(127, '2024_05_22_053835_create_sidebar_table', 102),
(128, '2024_05_22_093701_add_type_to_sidebar_table', 103),
(129, '2024_05_22_093702_add_type_to_sidebar_table', 104),
(130, '2024_04_28_053030_creare_tubs_table', 105),
(131, '2024_04_28_053031_creare_tubs_table', 106),
(132, '2024_04_28_053033_creare_tubs_table', 107),
(133, '2024_04_28_053034_creare_tubs_table', 108),
(134, '2024_04_28_053035_creare_tubs_table', 109),
(135, '2024_04_28_053036_creare_tubs_table', 110),
(136, '2024_06_03_094222_add_drill_pipe_details_to_tubs_table', 111),
(137, '2024_02_13_100660_create_checklist_table', 112),
(138, '2024_06_06_111047_add_status_to_users_table', 113),
(139, '2024_06_06_111048_add_status_to_users_table', 114),
(140, '2024_06_06_111640_add_status_to_users_table', 115),
(141, '2024_06_22_145411_add_trash_to_users_table', 116),
(142, '2024_06_26_104033_create_tubs_summary_table', 117);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(30, 'User', 43),
(30, 'User', 44),
(30, 'User', 47),
(30, 'User', 48),
(31, 'User', 1),
(34, 'User', 42);

-- --------------------------------------------------------

--
-- Table structure for table `mpi`
--

CREATE TABLE `mpi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `customer_work_number` varchar(255) DEFAULT NULL,
  `extent` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `method` varchar(255) NOT NULL DEFAULT 'Magnetic Particle Inspection',
  `type` varchar(255) NOT NULL DEFAULT 'mpi',
  `description` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `result` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `acceptance` tinyint(4) NOT NULL,
  `first_label` varchar(255) DEFAULT NULL,
  `first_content` varchar(255) DEFAULT NULL,
  `created_by` tinyint(4) DEFAULT NULL,
  `updated_by` tinyint(4) DEFAULT NULL,
  `purchase_order_no` varchar(255) DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `surface_condition` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`surface_condition`)),
  `specification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`specification`)),
  `magnetic_particles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`magnetic_particles`)),
  `magnetizing_current` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`magnetizing_current`)),
  `next_date` date DEFAULT NULL,
  `equipment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`equipment`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mpi`
--

INSERT INTO `mpi` (`id`, `order_id`, `location`, `customer_work_number`, `extent`, `date`, `report_number`, `method`, `type`, `description`, `serial`, `result`, `user_id`, `deleted_at`, `created_at`, `updated_at`, `acceptance`, `first_label`, `first_content`, `created_by`, `updated_by`, `purchase_order_no`, `supervisor`, `note`, `surface_condition`, `specification`, `magnetic_particles`, `magnetizing_current`, `next_date`, `equipment`) VALUES
(255, 18, 'Quod ven', '427', 'Dolor cu', '1992-05-06', 'STC-10/24-S T-Rig15-MPI-1', 'Magnetic Particle Inspection', 'mpi', 'Sunt se', '274', 'Officia', 1, NULL, '2024-06-10 22:02:18', '2024-06-10 22:02:18', 0, NULL, NULL, 1, NULL, 'Molestia', 'Chiquita Stevens', 'Ipsum is', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Velit in\",\"edition\":\"Facere d\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1992-11-05', '{\"ac_yoke\":\"0\",\"ac_yoke_no\":\"40\",\"dc_coil\":\"1\",\"dc_coil_no\":\"306\",\"permanent_magnet\":\"1\",\"permanent_magnet_no\":\"386\",\"uv_light\":\"0\",\"uv_light_no\":\"272\",\"other_name\":\"Jermaine Hubbard\",\"other_no\":\"516\"}'),
(257, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-1', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 1, NULL, '2024-06-10 22:06:17', '2024-06-10 22:10:35', 0, NULL, NULL, 1, 1, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(260, 14, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-10/24-Quincy_Cunningham-Rig5-MPI-3', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 43, NULL, '2024-06-12 03:11:36', '2024-06-12 03:11:36', 1, NULL, NULL, 43, NULL, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(261, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-2', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 44, NULL, '2024-06-14 20:58:06', '2024-06-14 20:58:07', 0, NULL, NULL, 44, NULL, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(262, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-3', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 1, NULL, '2024-06-23 03:24:47', '2024-06-23 03:24:47', 0, NULL, NULL, 1, NULL, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(266, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-5', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 1, NULL, '2024-06-23 03:25:30', '2024-06-23 03:25:30', 0, NULL, NULL, 1, NULL, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(270, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-6', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 1, NULL, '2024-06-25 02:56:15', '2024-06-25 02:56:15', 1, NULL, NULL, 1, NULL, 'Possimus', 'Shelley Nealkjlkhkjb', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(271, 6, 'Non sunt', '3', 'Quasi pe', '1998-08-16', 'STC-9/24-ECDC-Rig10-MPI-6', 'Magnetic Particle Inspection', 'mpi', 'Doloribu', '333', 'Adipisic', 1, NULL, '2024-06-27 07:51:03', '2024-06-27 07:51:03', 0, NULL, NULL, 1, NULL, 'Possimus', 'Shelley Neal', 'Ipsam qu', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Assumend\",\"edition\":\"Laborios\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1999-02-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"764\",\"dc_coil\":\"0\",\"dc_coil_no\":\"438\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"660\",\"uv_light\":\"1\",\"uv_light_no\":\"701\",\"other_name\":\"Quinn Hinton\",\"other_no\":\"551\"}'),
(272, 18, 'Quod ven', '427', 'Dolor cu', '1992-05-06', 'STC-10/24-S T-Rig15-MPI-2', 'Magnetic Particle Inspection', 'mpi', 'Sunt se', '274', 'Officia', 43, NULL, '2024-06-30 06:05:54', '2024-06-30 06:05:54', 0, NULL, NULL, 43, NULL, 'Molestia', 'Chiquita Stevens', 'Ipsum is', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Velit in\",\"edition\":\"Facere d\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1992-11-05', '{\"ac_yoke\":\"0\",\"ac_yoke_no\":\"40\",\"dc_coil\":\"1\",\"dc_coil_no\":\"306\",\"permanent_magnet\":\"1\",\"permanent_magnet_no\":\"386\",\"uv_light\":\"0\",\"uv_light_no\":\"272\",\"other_name\":\"Jermaine Hubbard\",\"other_no\":\"516\"}'),
(273, 17, 'Porro ma', '444', 'Excepteu', '1987-01-16', 'STC-9/24-S_T-Rig12-MPI-1', 'Magnetic Particle Inspection', 'mpi', 'Exercita', '150', 'dwdwwdw', 1, NULL, '2024-06-30 06:13:25', '2024-06-30 06:13:25', 1, NULL, NULL, 1, NULL, 'Qui poss', 'Tallulah Young', 'Nisi ips', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\"],\"other\":null,\"edition\":null}', '[\"dry\",\"wet\"]', '[\"ac\",\"dc\"]', '1987-07-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"603\",\"dc_coil\":\"1\",\"dc_coil_no\":\"256\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"384\",\"uv_light\":\"0\",\"uv_light_no\":\"309\",\"other_name\":\"Medge Serrano\",\"other_no\":\"523\"}'),
(274, 17, 'Porro ma', '444', 'Excepteu', '1987-01-16', 'STC-9/24-S_T-Rig12-MPI-2', 'Magnetic Particle Inspection', 'mpi', 'Exercita', '150', 'dwdwwdw', 1, NULL, '2024-06-30 06:16:59', '2024-06-30 06:16:59', 1, NULL, NULL, 1, NULL, 'Qui poss', 'Tallulah Young', 'Nisi ips', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\"],\"other\":null,\"edition\":null}', '[\"dry\",\"wet\"]', '[\"ac\",\"dc\"]', '1987-07-15', '{\"ac_yoke\":\"1\",\"ac_yoke_no\":\"603\",\"dc_coil\":\"1\",\"dc_coil_no\":\"256\",\"permanent_magnet\":\"0\",\"permanent_magnet_no\":\"384\",\"uv_light\":\"0\",\"uv_light_no\":\"309\",\"other_name\":\"Medge Serrano\",\"other_no\":\"523\"}');

-- --------------------------------------------------------

--
-- Table structure for table `mud_jar`
--

CREATE TABLE `mud_jar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tool` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `inspect_procedure` varchar(255) DEFAULT NULL,
  `visual` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`visual`)),
  `boroscopic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`boroscopic`)),
  `dimensional` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`dimensional`)),
  `liquid_penetrant` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`liquid_penetrant`)),
  `mpi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`mpi`)),
  `ultrasonic` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`ultrasonic`)),
  `eddy_current` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`eddy_current`)),
  `type` varchar(255) NOT NULL,
  `accept` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mud_jar`
--

INSERT INTO `mud_jar` (`id`, `tool`, `serial`, `report_number`, `date`, `summary`, `inspect_procedure`, `visual`, `boroscopic`, `dimensional`, `liquid_penetrant`, `mpi`, `ultrasonic`, `eddy_current`, `type`, `accept`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(25, 'Veniam', 'Nulla ve', 'STC-10/24-Eugenia_Hutchinson-Rig15-JAR-1', '1974-04-15', 'Accusamu', 'Velit e', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'jar', 1, 1, 15, '2024-06-05 07:28:07', '2024-06-05 07:28:07'),
(26, 'Consequa', 'Ratione', 'STC-10/24-Eugenia_Hutchinson-Rig15-JAR-2', '2001-02-05', 'Esse id', 'Qui moll', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'jar', 2, 1, 15, '2024-06-05 07:28:17', '2024-06-05 07:28:17'),
(27, 'Consequa', 'Ratione', 'STC-10/24-Eugenia_Hutchinson-Rig15-JAR-3', '2001-02-05', 'Esse id', 'Qui moll', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'jar', 2, 1, 15, '2024-06-05 07:28:31', '2024-06-05 07:28:31'),
(28, 'Vitae mo', 'Adipisci', 'STC-9/24-S_T-Rig2-MUD-1', '1976-04-23', 'Reiciend', 'Aut dele', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'mud', 3, 1, 7, '2024-06-05 07:28:53', '2024-06-05 07:28:53'),
(29, 'Vitae mo', 'Adipisciffff', 'STC-9/24-S_T-Rig2-MUD-2', '1976-04-23', 'Reiciend', 'Aut dele', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'mud', 3, 1, 7, '2024-06-05 07:29:01', '2024-06-05 07:29:31'),
(30, 'Vitae mo', 'Adipisci', 'STC-9/24-S_T-Rig2-MUD-3', '1976-04-23', 'Reiciend', 'Aut dele', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', '{\"conn\":null,\"body\":null}', 'mud', 1, 1, 7, '2024-06-09 07:09:08', '2024-06-09 07:09:08'),
(32, 'Itaque c', 'Sapiente', 'STC-3/24-ECDC-Rig5-MUD-1', '2015-05-23', 'Asperior', 'Minima c', '{\"conn\":\"Nihil co\",\"body\":\"Dolor am\"}', '{\"conn\":\"Quam et\",\"body\":\"Commodi\"}', '{\"conn\":\"Illo del\",\"body\":\"Quasi co\"}', '{\"conn\":\"Sit odio\",\"body\":\"Minima q\"}', '{\"conn\":\"Sit sin\",\"body\":\"Perferen\"}', '{\"conn\":\"Perferen\",\"body\":\"Qui cons\"}', '{\"conn\":\"Enim in\",\"body\":\"In sed r\"}', 'mud', 3, 1, 5, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(33, 'Quidem a', 'Vel aut', 'STC-10/24-S T-Rig15-JAR-1', '1989-08-16', 'Reprehen', 'Sunt tot', '{\"conn\":\"Dolor qu\",\"body\":\"Vero sae\"}', '{\"conn\":\"Cupidita\",\"body\":\"Deserunt\"}', '{\"conn\":\"Quae qui\",\"body\":\"In qui o\"}', '{\"conn\":\"Enim et\",\"body\":\"Sit tene\"}', '{\"conn\":\"Soluta a\",\"body\":\"Sed inci\"}', '{\"conn\":\"Officiis\",\"body\":\"Temporib\"}', '{\"conn\":\"Aut dict\",\"body\":\"Voluptas\"}', 'jar', 1, 1, 18, '2024-06-23 09:34:07', '2024-06-23 09:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `rig_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `date`, `company_id`, `rig_id`, `deleted_at`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'STC-3/24-ECDC-Rig5-2014-07-04', 'STC-3/24-ECDC-Rig5', '2014-07-04', 1, 10, NULL, 1, 1, '2024-01-28 17:35:24', '2024-01-30 20:19:33'),
(6, 'STC-9/24-ECDC-Rig10-1999-08-20', 'STC-9/24-ECDC-Rig10', '1999-08-20', 1, 1, NULL, 1, 1, '2024-01-28 17:36:07', '2024-02-08 01:51:04'),
(7, 'STC-9/24-S_T-Rig2-2016-08-05', 'STC-9/24-S_T-Rig2', '2016-08-05', 3, 2, NULL, 1, 1, '2024-01-29 09:03:31', '2024-02-08 04:34:28'),
(10, 'STC-6/24-S_T-Rig5-1971-09-15', 'STC-6/24-S_T-Rig5', '1971-09-15', 3, 10, NULL, 1, NULL, '2024-01-31 04:22:39', '2024-01-31 04:22:39'),
(12, 'STC-9/24-Test_comapny-Rig12-2023-05-11', 'STC-9/24-Test_comapny-Rig12', '2023-05-11', 7, 7, NULL, 1, 1, '2024-01-31 04:22:59', '2024-02-08 04:34:48'),
(13, 'STC-9/24-ECDC-Rig12-2024-02-10', 'STC-9/24-ECDC-Rig12', '2024-02-10', 1, 7, NULL, 1, 1, '2024-02-04 07:03:05', '2024-02-08 04:34:58'),
(14, 'STC-10/24-Quincy_Cunningham-Rig5-2024-02-15', 'STC-10/24-Quincy_Cunningham-Rig5', '2024-02-15', 10, 10, NULL, 4, 1, '2024-02-04 10:32:30', '2024-02-05 05:24:48'),
(15, 'STC-10/24-Eugenia_Hutchinson-Rig15-2024-02-13', 'STC-10/24-Eugenia_Hutchinson-Rig15', '2024-02-13', 8, 14, NULL, 4, NULL, '2024-02-04 10:34:59', '2024-02-04 10:34:59'),
(17, 'STC-9/24-S_T-Rig12-2024-02-15', 'STC-9/24-S_T-Rig12', '2024-02-15', 3, 7, NULL, 1, NULL, '2024-02-14 06:18:18', '2024-02-14 06:18:18'),
(18, 'STC-10/24-S T-Rig15-1977-06-24', 'STC-10/24-S T-Rig15', '1977-06-24', 3, 5, NULL, 1, NULL, '2024-02-22 12:26:32', '2024-02-22 12:26:32'),
(19, 'STC-11/24-Test Comapny-Rig15-2015-07-26', 'STC-11/24-Test Comapny-Rig15', '2015-07-26', 7, 5, NULL, 1, NULL, '2024-05-24 09:08:04', '2024-05-24 09:08:04'),
(22, 'STC-12/24-Eugenia Hutchinson-Rig10-2014-10-05', 'STC-12/24-Eugenia Hutchinson-Rig10', '2014-10-05', 8, 1, NULL, 1, NULL, '2024-06-21 00:46:08', '2024-06-21 00:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role.view', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(2, 'role.create', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(3, 'role.edit', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(4, 'role.delete', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(5, 'companies', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(6, 'Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(7, 'Rigs', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(8, 'Summary', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(9, 'Job Ticket', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(10, 'Settings', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(11, 'view companies', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(12, 'Mpi Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(13, 'Lifting Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(14, 'Tublar Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(15, 'View Rigs', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(16, 'View JobTicket Numbers', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(17, 'View JobTickets', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(18, 'Create JobTicket', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(20, 'Operators', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(21, 'Report Settings', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(22, 'Roles', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(23, 'View MPI Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(24, 'Create MPI Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(25, 'Wire Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(26, 'Shakles Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(27, 'Thorough Examination', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(28, 'Tools Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(29, 'Mud Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(30, 'Jar Reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(31, 'Drill Pipe', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(32, 'Drill Collar', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(33, 'Heavy Weight', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(34, 'view wire reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(35, 'create wire report', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(36, 'view shakles reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(37, 'create shakle report', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(38, 'view shakle sizes', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(39, 'view thorough examinatoin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(40, 'create thorough examinatoin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(41, 'pin * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(42, 'box * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(43, 'box * box', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(44, 'view mud reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(45, 'create mud reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(46, 'view jar reports', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(47, 'create jar report', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(50, 'view drill collar', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(51, 'create drill collar', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(52, 'view heavy weight', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(53, 'create heavy weight', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(54, 'view pin * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(55, 'view box * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(56, 'view box * box', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(57, 'create pin * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(58, 'create box * pin', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(59, 'create box * box', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(60, 'Users', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(61, 'users.create', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(62, 'users.edit', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(63, 'users.destroy', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(64, 'create companies', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(65, 'edit companies', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(66, 'delete companies', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(87, 'editor', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(88, 'view drill pipe', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(89, 'create drill pipe', 'web', '2024-06-06 07:46:02', '2024-06-06 07:46:02'),
(93, 'Tublar Summaries', 'web', '2024-06-26 05:10:54', '2024-06-26 05:10:54'),
(94, 'Drill Pipe Summary', 'web', '2024-06-26 05:14:10', '2024-06-26 05:14:10'),
(96, 'Drill Collar Summary', 'web', '2024-06-26 05:14:41', '2024-06-26 05:14:41'),
(97, 'Heavy Weight Summary', 'web', '2024-06-26 05:14:55', '2024-06-26 05:14:55'),
(98, 'View DP Summary', 'web', '2024-06-26 05:33:37', '2024-06-26 05:33:37'),
(99, 'Create DP Summary', 'web', '2024-06-26 05:33:46', '2024-06-26 05:33:46'),
(100, 'Create DC Summary', 'web', '2024-06-26 05:33:58', '2024-06-26 05:33:58'),
(101, 'View DC Summary', 'web', '2024-06-26 05:34:02', '2024-06-26 05:34:02'),
(102, 'Create HW Summary', 'web', '2024-06-26 05:34:11', '2024-06-26 05:34:11'),
(103, 'View HW Summary', 'web', '2024-06-26 05:34:30', '2024-06-26 05:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_desc`
--

CREATE TABLE `report_desc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`description`)),
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_desc`
--

INSERT INTO `report_desc` (`id`, `description`, `model_type`, `model_id`, `created_at`, `updated_at`) VALUES
(628, '{\"serial\":\"Accusant\",\"slot\":\"Tempora\",\"pin_od\":\"Consequa\",\"pin_id\":\"In simil\",\"pin_tong_space\":\"Iure vol\",\"pin_bevel\":\"Excepteu\",\"pin_seal\":\"Officia\",\"pin_length\":\"Nulla pr\",\"pin_srg_length\":\"Amet la\",\"pin_srg_dia\":\"Sint ci\",\"pin_f_repair\":\"Temporib\",\"pin_reface\":\"Rerum ab\",\"pin_condition\":\"Atque co\",\"box_od\":\"Dolore o\",\"box_tong_space\":\"Ratione\",\"box_bevel\":\"Commodi\",\"box_seal\":\"Quisquam\",\"box_length\":\"Aut haru\",\"box_cbore_dia\":\"Dolor vo\",\"box_cbore_length\":\"Aperiam\",\"box_bback_length\":\"Proident\",\"box_bback_dia\":\"Consequa\",\"box_f_repair\":\"Et quia\",\"box_reface\":\"Cupidita\",\"box_condition\":\"Occaecat\",\"upset_mpi\":\"Ratione\",\"banding_pin\":\"Totam re\",\"banding_middle\":\"Pariatur\",\"banding_box\":\"Voluptat\",\"overall_length\":\"Non eum\",\"bent\":\"Voluptat\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(629, '{\"serial\":\"Blanditi\",\"slot\":\"Non labo\",\"pin_od\":\"Asperior\",\"pin_id\":\"Sunt ape\",\"pin_tong_space\":\"Totam at\",\"pin_bevel\":\"Cumque v\",\"pin_seal\":\"Id dolor\",\"pin_length\":\"Est eli\",\"pin_srg_length\":\"Mollitia\",\"pin_srg_dia\":\"Eum volu\",\"pin_f_repair\":\"Lorem es\",\"pin_reface\":\"Et error\",\"pin_condition\":\"Ipsam op\",\"box_od\":\"Nisi mol\",\"box_tong_space\":\"Aliqua\",\"box_bevel\":\"Incididu\",\"box_seal\":\"Sit exer\",\"box_length\":\"Officia\",\"box_cbore_dia\":\"Labore d\",\"box_cbore_length\":\"Assumend\",\"box_bback_length\":\"Nesciunt\",\"box_bback_dia\":\"Eos faci\",\"box_f_repair\":\"Lorem fu\",\"box_reface\":\"Anim sae\",\"box_condition\":\"Ea anim\",\"upset_mpi\":\"Quas vel\",\"banding_pin\":\"Ut error\",\"banding_middle\":\"Velit a\",\"banding_box\":\"Itaque e\",\"overall_length\":\"Labore u\",\"bent\":\"Omnis ul\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(630, '{\"serial\":\"Occaecat\",\"slot\":\"Atque di\",\"pin_od\":\"Omnis vo\",\"pin_id\":\"Consequa\",\"pin_tong_space\":\"Sit dui\",\"pin_bevel\":\"Nulla re\",\"pin_seal\":\"Delectus\",\"pin_length\":\"Et ab si\",\"pin_srg_length\":\"Temporib\",\"pin_srg_dia\":\"Consequu\",\"pin_f_repair\":\"Earum la\",\"pin_reface\":\"Nisi lab\",\"pin_condition\":\"Saepe au\",\"box_od\":\"Aliquip\",\"box_tong_space\":\"Sit duc\",\"box_bevel\":\"Accusant\",\"box_seal\":\"Omnis qu\",\"box_length\":\"Animi u\",\"box_cbore_dia\":\"Illum c\",\"box_cbore_length\":\"Maiores\",\"box_bback_length\":\"Officiis\",\"box_bback_dia\":\"Quod a c\",\"box_f_repair\":\"Expedita\",\"box_reface\":\"Praesent\",\"box_condition\":\"Exercita\",\"upset_mpi\":\"Odit eiu\",\"banding_pin\":\"Anim sae\",\"banding_middle\":\"Non id\",\"banding_box\":\"Sequi mi\",\"overall_length\":\"Sit in n\",\"bent\":\"Rerum an\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(631, '{\"serial\":\"Quo culp\",\"slot\":\"Reiciend\",\"pin_od\":\"Officiis\",\"pin_id\":\"Commodi\",\"pin_tong_space\":\"Dolor la\",\"pin_bevel\":\"Qui atqu\",\"pin_seal\":\"Ex facil\",\"pin_length\":\"Et aliqu\",\"pin_srg_length\":\"Laboris\",\"pin_srg_dia\":\"Enim dol\",\"pin_f_repair\":\"Ad volup\",\"pin_reface\":\"Veniam\",\"pin_condition\":\"Voluptat\",\"box_od\":\"Sed aliq\",\"box_tong_space\":\"Eaque re\",\"box_bevel\":\"Repudian\",\"box_seal\":\"Aliquam\",\"box_length\":\"Vel sed\",\"box_cbore_dia\":\"Sit dol\",\"box_cbore_length\":\"Error ut\",\"box_bback_length\":\"Do culpa\",\"box_bback_dia\":\"Exceptur\",\"box_f_repair\":\"Adipisic\",\"box_reface\":\"Aut libe\",\"box_condition\":\"Delectus\",\"upset_mpi\":\"Nihil ma\",\"banding_pin\":\"Anim per\",\"banding_middle\":\"Eu sed e\",\"banding_box\":\"Cumque q\",\"overall_length\":\"Illum d\",\"bent\":\"Mollitia\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(632, '{\"serial\":\"Recusand\",\"slot\":\"Nostrud\",\"pin_od\":\"Dolores\",\"pin_id\":\"Reprehen\",\"pin_tong_space\":\"Ut culpa\",\"pin_bevel\":\"Nisi dol\",\"pin_seal\":\"Aut ad u\",\"pin_length\":\"Architec\",\"pin_srg_length\":\"Repellen\",\"pin_srg_dia\":\"Fuga Cu\",\"pin_f_repair\":\"Odio dol\",\"pin_reface\":\"Quia cup\",\"pin_condition\":\"Cum qui\",\"box_od\":\"In autem\",\"box_tong_space\":\"Qui quis\",\"box_bevel\":\"Aut ad q\",\"box_seal\":\"Dolore d\",\"box_length\":\"Quae dol\",\"box_cbore_dia\":\"Animi a\",\"box_cbore_length\":\"Maiores\",\"box_bback_length\":\"Quibusda\",\"box_bback_dia\":\"Recusand\",\"box_f_repair\":\"Nostrum\",\"box_reface\":\"Rerum re\",\"box_condition\":\"Atque ea\",\"upset_mpi\":\"Molestia\",\"banding_pin\":\"Consequa\",\"banding_middle\":\"Dolorem\",\"banding_box\":\"Maiores\",\"overall_length\":\"Quo inci\",\"bent\":\"Quo fugi\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(633, '{\"serial\":\"Nihil om\",\"slot\":\"Aut faci\",\"pin_od\":\"Non quae\",\"pin_id\":\"Rerum pr\",\"pin_tong_space\":\"In eiusm\",\"pin_bevel\":\"Fugit a\",\"pin_seal\":\"Voluptat\",\"pin_length\":\"Quod ame\",\"pin_srg_length\":\"Aut nobi\",\"pin_srg_dia\":\"Dolorem\",\"pin_f_repair\":\"Autem al\",\"pin_reface\":\"Magnam c\",\"pin_condition\":\"Molestia\",\"box_od\":\"Quo labo\",\"box_tong_space\":\"Molestia\",\"box_bevel\":\"Voluptas\",\"box_seal\":\"Est non\",\"box_length\":\"Qui rem\",\"box_cbore_dia\":\"Animi a\",\"box_cbore_length\":\"Explicab\",\"box_bback_length\":\"Est exc\",\"box_bback_dia\":\"Magnam e\",\"box_f_repair\":\"Quia lab\",\"box_reface\":\"Deserunt\",\"box_condition\":\"Animi a\",\"upset_mpi\":\"Consequa\",\"banding_pin\":\"Culpa c\",\"banding_middle\":\"Illum e\",\"banding_box\":\"Non veri\",\"overall_length\":\"Quo qui\",\"bent\":\"Explicab\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(634, '{\"serial\":\"Hic repr\",\"slot\":\"Quisquam\",\"pin_od\":\"Tempora\",\"pin_id\":\"In imped\",\"pin_tong_space\":\"Doloremq\",\"pin_bevel\":\"Praesent\",\"pin_seal\":\"Voluptat\",\"pin_length\":\"Cupidata\",\"pin_srg_length\":\"Et labor\",\"pin_srg_dia\":\"Temporib\",\"pin_f_repair\":\"Anim dol\",\"pin_reface\":\"Do fugit\",\"pin_condition\":\"Architec\",\"box_od\":\"Veritati\",\"box_tong_space\":\"Ut bland\",\"box_bevel\":\"Eum id h\",\"box_seal\":\"Sed faci\",\"box_length\":\"Culpa s\",\"box_cbore_dia\":\"Aliqua\",\"box_cbore_length\":\"Id excep\",\"box_bback_length\":\"Ab atque\",\"box_bback_dia\":\"Ex eveni\",\"box_f_repair\":\"Quia qui\",\"box_reface\":\"Iste cor\",\"box_condition\":\"Reprehen\",\"upset_mpi\":\"Fugit d\",\"banding_pin\":\"Omnis de\",\"banding_middle\":\"Voluptat\",\"banding_box\":\"Veniam\",\"overall_length\":\"Sapiente\",\"bent\":\"Culpa si\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(635, '{\"serial\":\"Nihil at\",\"slot\":\"Voluptat\",\"pin_od\":\"Saepe of\",\"pin_id\":\"Commodo\",\"pin_tong_space\":\"Maiores\",\"pin_bevel\":\"Adipisci\",\"pin_seal\":\"Placeat\",\"pin_length\":\"Ut eos d\",\"pin_srg_length\":\"Porro su\",\"pin_srg_dia\":\"Nisi aut\",\"pin_f_repair\":\"Ratione\",\"pin_reface\":\"Iste est\",\"pin_condition\":\"Sunt ver\",\"box_od\":\"Occaecat\",\"box_tong_space\":\"Ad quos\",\"box_bevel\":\"Nihil es\",\"box_seal\":\"Quae tot\",\"box_length\":\"Et labor\",\"box_cbore_dia\":\"Laboris\",\"box_cbore_length\":\"Expedita\",\"box_bback_length\":\"Eveniet\",\"box_bback_dia\":\"Voluptat\",\"box_f_repair\":\"Numquam\",\"box_reface\":\"Eos volu\",\"box_condition\":\"Eu et te\",\"upset_mpi\":\"Accusant\",\"banding_pin\":\"Velit au\",\"banding_middle\":\"Veniam\",\"banding_box\":\"Consequu\",\"overall_length\":\"Exercita\",\"bent\":\"Assumend\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(636, '{\"serial\":\"Omnis ex\",\"slot\":\"Qui quia\",\"pin_od\":\"Repudian\",\"pin_id\":\"Consequa\",\"pin_tong_space\":\"Vel quam\",\"pin_bevel\":\"Do cillu\",\"pin_seal\":\"Ut et iu\",\"pin_length\":\"Sed dolo\",\"pin_srg_length\":\"Qui volu\",\"pin_srg_dia\":\"Rerum re\",\"pin_f_repair\":\"Quisquam\",\"pin_reface\":\"Rem sint\",\"pin_condition\":\"Ea omnis\",\"box_od\":\"Natus di\",\"box_tong_space\":\"Et quis\",\"box_bevel\":\"Aut fugi\",\"box_seal\":\"Id quid\",\"box_length\":\"Sint pro\",\"box_cbore_dia\":\"Id dele\",\"box_cbore_length\":\"Voluptat\",\"box_bback_length\":\"Sapiente\",\"box_bback_dia\":\"Sit culp\",\"box_f_repair\":\"Ea in od\",\"box_reface\":\"Voluptat\",\"box_condition\":\"Omnis es\",\"upset_mpi\":\"Voluptat\",\"banding_pin\":\"Vel offi\",\"banding_middle\":\"Esse vo\",\"banding_box\":\"Consequa\",\"overall_length\":\"Perspici\",\"bent\":\"Alias ev\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(637, '{\"serial\":\"Voluptat\",\"slot\":\"Irure cu\",\"pin_od\":\"Mollit a\",\"pin_id\":\"Harum lo\",\"pin_tong_space\":\"Quia ame\",\"pin_bevel\":\"Et magna\",\"pin_seal\":\"Error ve\",\"pin_length\":\"Amet in\",\"pin_srg_length\":\"Inventor\",\"pin_srg_dia\":\"Exceptur\",\"pin_f_repair\":\"Maiores\",\"pin_reface\":\"In quos\",\"pin_condition\":\"Voluptas\",\"box_od\":\"Eum opti\",\"box_tong_space\":\"Est volu\",\"box_bevel\":\"Qui quis\",\"box_seal\":\"Sit est\",\"box_length\":\"Repudian\",\"box_cbore_dia\":\"Quam ani\",\"box_cbore_length\":\"Quo accu\",\"box_bback_length\":\"Consecte\",\"box_bback_dia\":\"Accusamu\",\"box_f_repair\":\"Veniam\",\"box_reface\":\"Sed elit\",\"box_condition\":\"Dolor fa\",\"upset_mpi\":\"Velit om\",\"banding_pin\":\"Perferen\",\"banding_middle\":\"Ratione\",\"banding_box\":\"Libero n\",\"overall_length\":\"Amet es\",\"bent\":\"Deleniti\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 18, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(685, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 25, '2024-06-05 07:28:07', '2024-06-05 07:28:07'),
(686, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 26, '2024-06-05 07:28:17', '2024-06-05 07:28:17'),
(687, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 27, '2024-06-05 07:28:31', '2024-06-05 07:28:31'),
(688, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null,\"body_thread_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 28, '2024-06-05 07:28:53', '2024-06-05 07:28:53'),
(690, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null,\"body_thread_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 29, '2024-06-05 07:29:31', '2024-06-05 07:29:31'),
(704, '{\"serial\":\"Est offi\",\"slot\":\"Mollit c\",\"pipe_wt\":\"Impedit\",\"pipe_od\":\"Sint ut\",\"pipe_emi\":\"Quo aper\",\"pipe_eai\":\"Maxime v\",\"pipe_utea\":\"Ipsum o\",\"pipe_corr_in\":\"Ab eaque\",\"pipe_corr_ext\":\"Neque al\",\"pipe_ipc\":\"Est lib\",\"pipe_bent\":\"Porro mi\",\"pin_od\":\"Velit be\",\"pin_id\":\"Sit sit\",\"pin_tong_space\":\"Quis ver\",\"pin_bevel\":\"Aspernat\",\"pin_seal\":\"Omnis an\",\"pin_length\":\"Beatae e\",\"pin_neck\":\"A beatae\",\"pin_cyl\":\"Ea sint\",\"pin_nose\":\"Tempor v\",\"pin_lead\":\"Dolore q\",\"pin_f_repair\":\"Quae sim\",\"pin_reface\":\"Quis ut\",\"pin_hardbanding\":\"Magni et\",\"pin_condition\":\"Eu ullam\",\"box_od\":\"Necessit\",\"box_tong_space\":\"In aut n\",\"box_bevel\":\"Perferen\",\"box_seal\":\"Eos eos\",\"box_shldr\":\"Omnis qu\",\"box_length\":\"Nostrum\",\"box_cbore_dia\":\"Adipisci\",\"box_cbore_length\":\"Voluptat\",\"box_cbore_wall\":\"Laborios\",\"box_f_repair\":\"Qui id a\",\"box_reface\":\"Proident\",\"box_hardbanding\":\"Voluptat\",\"box_condition\":\"Dolore l\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(705, '{\"serial\":\"Ea qui q\",\"slot\":\"Eum omni\",\"pipe_wt\":\"Accusamu\",\"pipe_od\":\"Esse sin\",\"pipe_emi\":\"Odio dol\",\"pipe_eai\":\"Perferen\",\"pipe_utea\":\"Est magn\",\"pipe_corr_in\":\"Tempor a\",\"pipe_corr_ext\":\"Sit lab\",\"pipe_ipc\":\"Nisi et\",\"pipe_bent\":\"Accusamu\",\"pin_od\":\"Esse des\",\"pin_id\":\"Impedit\",\"pin_tong_space\":\"Porro qu\",\"pin_bevel\":\"Quia est\",\"pin_seal\":\"Dolor si\",\"pin_length\":\"Recusand\",\"pin_neck\":\"Aut in e\",\"pin_cyl\":\"Accusant\",\"pin_nose\":\"Non quis\",\"pin_lead\":\"Esse co\",\"pin_f_repair\":\"Molestia\",\"pin_reface\":\"Fugiat c\",\"pin_hardbanding\":\"Voluptas\",\"pin_condition\":\"Dolor ve\",\"box_od\":\"Qui veri\",\"box_tong_space\":\"Eum simi\",\"box_bevel\":\"Est et o\",\"box_seal\":\"Tenetur\",\"box_shldr\":\"Dolor qu\",\"box_length\":\"Providen\",\"box_cbore_dia\":\"Eiusmod\",\"box_cbore_length\":\"Magni co\",\"box_cbore_wall\":\"Accusamu\",\"box_f_repair\":\"Rerum ut\",\"box_reface\":\"Consequu\",\"box_hardbanding\":\"Rerum ev\",\"box_condition\":\"Voluptat\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(706, '{\"serial\":\"Porro an\",\"slot\":\"Laudanti\",\"pipe_wt\":\"Rerum es\",\"pipe_od\":\"Vel offi\",\"pipe_emi\":\"Est sapi\",\"pipe_eai\":\"Earum ne\",\"pipe_utea\":\"Reprehen\",\"pipe_corr_in\":\"Id simil\",\"pipe_corr_ext\":\"Fugiat\",\"pipe_ipc\":\"Est cons\",\"pipe_bent\":\"Possimus\",\"pin_od\":\"Commodi\",\"pin_id\":\"Aut offi\",\"pin_tong_space\":\"Dolor qu\",\"pin_bevel\":\"Qui repr\",\"pin_seal\":\"At conse\",\"pin_length\":\"Aut nost\",\"pin_neck\":\"Eius par\",\"pin_cyl\":\"Labore q\",\"pin_nose\":\"Laborum\",\"pin_lead\":\"Qui fuga\",\"pin_f_repair\":\"Voluptat\",\"pin_reface\":\"Quam dui\",\"pin_hardbanding\":\"Fugit a\",\"pin_condition\":\"Consecte\",\"box_od\":\"Recusand\",\"box_tong_space\":\"Error of\",\"box_bevel\":\"Duis dol\",\"box_seal\":\"Suscipit\",\"box_shldr\":\"Dolores\",\"box_length\":\"Aut opti\",\"box_cbore_dia\":\"Nostrum\",\"box_cbore_length\":\"Sapiente\",\"box_cbore_wall\":\"Ipsam na\",\"box_f_repair\":\"Nihil do\",\"box_reface\":\"Molestia\",\"box_hardbanding\":\"Sapiente\",\"box_condition\":\"Sunt eu\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(707, '{\"serial\":\"Laudanti\",\"slot\":\"In recus\",\"pipe_wt\":\"Exercita\",\"pipe_od\":\"Neque si\",\"pipe_emi\":\"Vel mole\",\"pipe_eai\":\"Incididu\",\"pipe_utea\":\"Dolorum\",\"pipe_corr_in\":\"Molestia\",\"pipe_corr_ext\":\"Velit co\",\"pipe_ipc\":\"Est mole\",\"pipe_bent\":\"Exercita\",\"pin_od\":\"Et nobis\",\"pin_id\":\"Tenetur\",\"pin_tong_space\":\"Et ipsa\",\"pin_bevel\":\"Ipsam er\",\"pin_seal\":\"Pariatur\",\"pin_length\":\"Sint et\",\"pin_neck\":\"Sapiente\",\"pin_cyl\":\"Exercita\",\"pin_nose\":\"Exceptur\",\"pin_lead\":\"Aut eum\",\"pin_f_repair\":\"Sed obca\",\"pin_reface\":\"Accusamu\",\"pin_hardbanding\":\"Laborum\",\"pin_condition\":\"Quaerat\",\"box_od\":\"Dolores\",\"box_tong_space\":\"Quaerat\",\"box_bevel\":\"Eveniet\",\"box_seal\":\"Repudian\",\"box_shldr\":\"Pariatur\",\"box_length\":\"Laborum\",\"box_cbore_dia\":\"Qui et d\",\"box_cbore_length\":\"Ullamco\",\"box_cbore_wall\":\"Autem ni\",\"box_f_repair\":\"Et conse\",\"box_reface\":\"Animi l\",\"box_hardbanding\":\"Eaque de\",\"box_condition\":\"Dolores\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(708, '{\"serial\":\"Est ad e\",\"slot\":\"Ea est d\",\"pipe_wt\":\"Velit au\",\"pipe_od\":\"Assumend\",\"pipe_emi\":\"Est labo\",\"pipe_eai\":\"Illum v\",\"pipe_utea\":\"Tempor c\",\"pipe_corr_in\":\"Aperiam\",\"pipe_corr_ext\":\"Aperiam\",\"pipe_ipc\":\"Quisquam\",\"pipe_bent\":\"Sit vol\",\"pin_od\":\"Sunt a\",\"pin_id\":\"Alias et\",\"pin_tong_space\":\"Nihil ve\",\"pin_bevel\":\"Commodi\",\"pin_seal\":\"Autem hi\",\"pin_length\":\"Cum impe\",\"pin_neck\":\"Consecte\",\"pin_cyl\":\"Sunt re\",\"pin_nose\":\"Sed plac\",\"pin_lead\":\"Nostrud\",\"pin_f_repair\":\"Rerum qu\",\"pin_reface\":\"Explicab\",\"pin_hardbanding\":\"Minus in\",\"pin_condition\":\"Voluptat\",\"box_od\":\"Adipisci\",\"box_tong_space\":\"Consequu\",\"box_bevel\":\"Occaecat\",\"box_seal\":\"Illum e\",\"box_shldr\":\"Aute bea\",\"box_length\":\"Rerum an\",\"box_cbore_dia\":\"Voluptat\",\"box_cbore_length\":\"Sequi ut\",\"box_cbore_wall\":\"Perspici\",\"box_f_repair\":\"Ut conse\",\"box_reface\":\"Et corpo\",\"box_hardbanding\":\"Quia qui\",\"box_condition\":\"Mollitia\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(709, '{\"serial\":\"Fugit e\",\"slot\":\"Consequa\",\"pipe_wt\":\"Quis sim\",\"pipe_od\":\"Et et do\",\"pipe_emi\":\"Unde et\",\"pipe_eai\":\"Rerum qu\",\"pipe_utea\":\"Ducimus\",\"pipe_corr_in\":\"Asperior\",\"pipe_corr_ext\":\"Et aut e\",\"pipe_ipc\":\"Unde arc\",\"pipe_bent\":\"Fuga Re\",\"pin_od\":\"Aliquip\",\"pin_id\":\"Harum id\",\"pin_tong_space\":\"Exercita\",\"pin_bevel\":\"Quis nob\",\"pin_seal\":\"Dolore i\",\"pin_length\":\"Exceptur\",\"pin_neck\":\"Irure du\",\"pin_cyl\":\"Dignissi\",\"pin_nose\":\"Do paria\",\"pin_lead\":\"Enim non\",\"pin_f_repair\":\"Dolor bl\",\"pin_reface\":\"Quia eni\",\"pin_hardbanding\":\"Officia\",\"pin_condition\":\"Iste mol\",\"box_od\":\"Earum in\",\"box_tong_space\":\"Anim et\",\"box_bevel\":\"Mollit o\",\"box_seal\":\"Ea cupid\",\"box_shldr\":\"Quam tem\",\"box_length\":\"Veniam\",\"box_cbore_dia\":\"Est rep\",\"box_cbore_length\":\"Duis sun\",\"box_cbore_wall\":\"Qui eius\",\"box_f_repair\":\"Sit ita\",\"box_reface\":\"Consequa\",\"box_hardbanding\":\"Sed aut\",\"box_condition\":\"Ipsum in\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(710, '{\"serial\":\"In autem\",\"slot\":\"Commodi\",\"pipe_wt\":\"Reprehen\",\"pipe_od\":\"Dolore c\",\"pipe_emi\":\"Enim iru\",\"pipe_eai\":\"Vel moll\",\"pipe_utea\":\"Ex labor\",\"pipe_corr_in\":\"Iure exe\",\"pipe_corr_ext\":\"Totam ea\",\"pipe_ipc\":\"Est arch\",\"pipe_bent\":\"Doloremq\",\"pin_od\":\"Tenetur\",\"pin_id\":\"Molestia\",\"pin_tong_space\":\"Dolor ma\",\"pin_bevel\":\"Reiciend\",\"pin_seal\":\"Ut possi\",\"pin_length\":\"Dolores\",\"pin_neck\":\"Exercita\",\"pin_cyl\":\"Et aliqu\",\"pin_nose\":\"Laudanti\",\"pin_lead\":\"Officiis\",\"pin_f_repair\":\"Minus ve\",\"pin_reface\":\"Error as\",\"pin_hardbanding\":\"Illo eos\",\"pin_condition\":\"Quae dol\",\"box_od\":\"Est atq\",\"box_tong_space\":\"Est reru\",\"box_bevel\":\"Quasi se\",\"box_seal\":\"Dolore v\",\"box_shldr\":\"Illum o\",\"box_length\":\"Enim aut\",\"box_cbore_dia\":\"Ex duis\",\"box_cbore_length\":\"Tempor e\",\"box_cbore_wall\":\"Elit mi\",\"box_f_repair\":\"Voluptat\",\"box_reface\":\"Eos rati\",\"box_hardbanding\":\"Quia vol\",\"box_condition\":\"In velit\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(711, '{\"serial\":\"Ad elige\",\"slot\":\"Quaerat\",\"pipe_wt\":\"Beatae s\",\"pipe_od\":\"Consequa\",\"pipe_emi\":\"In odit\",\"pipe_eai\":\"Omnis pa\",\"pipe_utea\":\"Autem la\",\"pipe_corr_in\":\"Vero pla\",\"pipe_corr_ext\":\"Sit sint\",\"pipe_ipc\":\"Quo ut r\",\"pipe_bent\":\"Et volup\",\"pin_od\":\"Sit qui\",\"pin_id\":\"Aliqua\",\"pin_tong_space\":\"Cupidata\",\"pin_bevel\":\"Itaque f\",\"pin_seal\":\"Magna no\",\"pin_length\":\"Quos est\",\"pin_neck\":\"Voluptat\",\"pin_cyl\":\"Reiciend\",\"pin_nose\":\"Reiciend\",\"pin_lead\":\"Beatae s\",\"pin_f_repair\":\"Labore c\",\"pin_reface\":\"Elit pa\",\"pin_hardbanding\":\"Inventor\",\"pin_condition\":\"Aspernat\",\"box_od\":\"Tenetur\",\"box_tong_space\":\"Tempora\",\"box_bevel\":\"Quaerat\",\"box_seal\":\"At volup\",\"box_shldr\":\"Rerum se\",\"box_length\":\"Et disti\",\"box_cbore_dia\":\"Eum face\",\"box_cbore_length\":\"In bland\",\"box_cbore_wall\":\"Itaque s\",\"box_f_repair\":\"Fugiat i\",\"box_reface\":\"Dolore q\",\"box_hardbanding\":\"Obcaecat\",\"box_condition\":\"Soluta q\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(712, '{\"serial\":\"Perspici\",\"slot\":\"Non anim\",\"pipe_wt\":\"A dolore\",\"pipe_od\":\"Harum at\",\"pipe_emi\":\"Enim ea\",\"pipe_eai\":\"Perferen\",\"pipe_utea\":\"Ipsum e\",\"pipe_corr_in\":\"Et sunt\",\"pipe_corr_ext\":\"Nemo dol\",\"pipe_ipc\":\"Et esse\",\"pipe_bent\":\"Culpa de\",\"pin_od\":\"Vero qui\",\"pin_id\":\"Et dolor\",\"pin_tong_space\":\"Repudian\",\"pin_bevel\":\"Impedit\",\"pin_seal\":\"Eius har\",\"pin_length\":\"Laboris\",\"pin_neck\":\"Culpa de\",\"pin_cyl\":\"Veniam\",\"pin_nose\":\"Aut dele\",\"pin_lead\":\"Anim sit\",\"pin_f_repair\":\"Officia\",\"pin_reface\":\"Veniam\",\"pin_hardbanding\":\"Nisi vol\",\"pin_condition\":\"Dolor en\",\"box_od\":\"Eius asp\",\"box_tong_space\":\"Laboris\",\"box_bevel\":\"Non enim\",\"box_seal\":\"Et conse\",\"box_shldr\":\"Quis lab\",\"box_length\":\"Animi v\",\"box_cbore_dia\":\"Id tenet\",\"box_cbore_length\":\"Odit cor\",\"box_cbore_wall\":\"Omnis am\",\"box_f_repair\":\"Qui quis\",\"box_reface\":\"Nostrum\",\"box_hardbanding\":\"Iste sun\",\"box_condition\":\"Ab beata\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(713, '{\"serial\":\"Quas ani\",\"slot\":\"Neque qu\",\"pipe_wt\":\"Labore r\",\"pipe_od\":\"Quo volu\",\"pipe_emi\":\"Odio omn\",\"pipe_eai\":\"Voluptat\",\"pipe_utea\":\"Quia acc\",\"pipe_corr_in\":\"Amet qu\",\"pipe_corr_ext\":\"Nulla vo\",\"pipe_ipc\":\"Pariatur\",\"pipe_bent\":\"Id volu\",\"pin_od\":\"Nulla si\",\"pin_id\":\"Totam si\",\"pin_tong_space\":\"Dolores\",\"pin_bevel\":\"Fugit q\",\"pin_seal\":\"Magna re\",\"pin_length\":\"Velit p\",\"pin_neck\":\"Aspernat\",\"pin_cyl\":\"Nisi rep\",\"pin_nose\":\"Incidunt\",\"pin_lead\":\"Odit off\",\"pin_f_repair\":\"In iure\",\"pin_reface\":\"Dolore e\",\"pin_hardbanding\":\"At id ex\",\"pin_condition\":\"Sint al\",\"box_od\":\"Quia nob\",\"box_tong_space\":\"Quisquam\",\"box_bevel\":\"Velit qu\",\"box_seal\":\"Sed esse\",\"box_shldr\":\"Quos pla\",\"box_length\":\"Ut rerum\",\"box_cbore_dia\":\"Eaque an\",\"box_cbore_length\":\"Ullamco\",\"box_cbore_wall\":\"Mollit h\",\"box_f_repair\":\"Perspici\",\"box_reface\":\"Temporib\",\"box_hardbanding\":\"Dolor at\",\"box_condition\":\"Quis rer\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(714, '{\"description\":null,\"serial_no\":null,\"length\":null,\"box_thread\":null,\"box_od\":null,\"box_cond\":null,\"pin_conn\":null,\"pin_id\":null,\"pin_cond\":null,\"body_thread_cond\":null}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 30, '2024-06-09 07:09:08', '2024-06-09 07:09:08'),
(715, '{\"serial\":\"In sed l\",\"description\":\"Aut dolo\",\"box1_conn\":\"Ipsam la\",\"box2_conn\":\"Qui maio\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Tempora\",\"box1_cb\":\"Voluptas\",\"box1_bb_diameter\":\"A aspern\",\"box1_bb_depth\":\"Dolore t\",\"box1_bevel_diameter\":\"Rerum re\",\"box2_od\":\"Quibusda\",\"box2_cb\":\"Officia\",\"box2_bb_diameter\":\"Sunt par\",\"box2_bb_depth\":\"Ullamco\",\"box2_bevel_diameter\":\"Omnis co\",\"body_fishing_neck\":\"Anim dol\",\"body_length\":\"Culpa co\",\"remarks\":\"Officiis\"}', 'Tools', 39, '2024-06-09 07:12:38', '2024-06-09 07:12:38'),
(716, '{\"serial\":\"Incidunt\",\"description\":\"Vel ut r\",\"box1_conn\":\"Amet ea\",\"box2_conn\":\"Non mole\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Sapiente\",\"box1_cb\":\"Est numq\",\"box1_bb_diameter\":\"Eligendi\",\"box1_bb_depth\":\"Illo sun\",\"box1_bevel_diameter\":\"Eveniet\",\"box2_od\":\"Minim la\",\"box2_cb\":\"Voluptas\",\"box2_bb_diameter\":\"Est qui\",\"box2_bb_depth\":\"Aut dolo\",\"box2_bevel_diameter\":\"Consequa\",\"body_fishing_neck\":\"Vel est\",\"body_length\":\"Et eu et\",\"remarks\":\"Dolore d\"}', 'Tools', 39, '2024-06-09 07:12:38', '2024-06-09 07:12:38'),
(717, '{\"serial\":\"Facilis\",\"description\":\"Sit nih\",\"box1_conn\":\"Ad quia\",\"box2_conn\":\"Velit se\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Labore e\",\"box1_cb\":\"Laboris\",\"box1_bb_diameter\":\"Ut id qu\",\"box1_bb_depth\":\"Aut id o\",\"box1_bevel_diameter\":\"Tempor v\",\"box2_od\":\"Blanditi\",\"box2_cb\":\"Pariatur\",\"box2_bb_diameter\":\"Ut corru\",\"box2_bb_depth\":\"Cupidata\",\"box2_bevel_diameter\":\"Eiusmod\",\"body_fishing_neck\":\"Qui ea d\",\"body_length\":\"Consecte\",\"remarks\":\"Voluptat\"}', 'Tools', 39, '2024-06-09 07:12:38', '2024-06-09 07:12:38'),
(718, '{\"serial\":\"In sed l\",\"description\":\"Aut dolo\",\"box1_conn\":\"Ipsam la\",\"box2_conn\":\"Qui maio\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Tempora\",\"box1_cb\":\"Voluptas\",\"box1_bb_diameter\":\"A aspern\",\"box1_bb_depth\":\"Dolore t\",\"box1_bevel_diameter\":\"Rerum re\",\"box2_od\":\"Quibusda\",\"box2_cb\":\"Officia\",\"box2_bb_diameter\":\"Sunt par\",\"box2_bb_depth\":\"Ullamco\",\"box2_bevel_diameter\":\"Omnis co\",\"body_fishing_neck\":\"Anim dol\",\"body_length\":\"Culpa co\",\"remarks\":\"Officiis\"}', 'Tools', 40, '2024-06-09 07:35:22', '2024-06-09 07:35:22'),
(719, '{\"serial\":\"Incidunt\",\"description\":\"Vel ut r\",\"box1_conn\":\"Amet ea\",\"box2_conn\":\"Non mole\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Sapiente\",\"box1_cb\":\"Est numq\",\"box1_bb_diameter\":\"Eligendi\",\"box1_bb_depth\":\"Illo sun\",\"box1_bevel_diameter\":\"Eveniet\",\"box2_od\":\"Minim la\",\"box2_cb\":\"Voluptas\",\"box2_bb_diameter\":\"Est qui\",\"box2_bb_depth\":\"Aut dolo\",\"box2_bevel_diameter\":\"Consequa\",\"body_fishing_neck\":\"Vel est\",\"body_length\":\"Et eu et\",\"remarks\":\"Dolore d\"}', 'Tools', 40, '2024-06-09 07:35:22', '2024-06-09 07:35:22'),
(720, '{\"serial\":\"Facilis\",\"description\":\"Sit nih\",\"box1_conn\":\"Ad quia\",\"box2_conn\":\"Velit se\",\"box1_cond\":null,\"box2_cond\":null,\"body_cond\":null,\"box1_od\":\"Labore e\",\"box1_cb\":\"Laboris\",\"box1_bb_diameter\":\"Ut id qu\",\"box1_bb_depth\":\"Aut id o\",\"box1_bevel_diameter\":\"Tempor v\",\"box2_od\":\"Blanditi\",\"box2_cb\":\"Pariatur\",\"box2_bb_diameter\":\"Ut corru\",\"box2_bb_depth\":\"Cupidata\",\"box2_bevel_diameter\":\"Eiusmod\",\"body_fishing_neck\":\"Qui ea d\",\"body_length\":\"Consecte\",\"remarks\":\"Voluptat\"}', 'Tools', 40, '2024-06-09 07:35:22', '2024-06-09 07:35:22'),
(721, '{\"serial\":\"Est offi\",\"slot\":\"Mollit c\",\"pipe_wt\":\"Impedit\",\"pipe_od\":\"Sint ut\",\"pipe_emi\":\"Quo aper\",\"pipe_eai\":\"Maxime v\",\"pipe_utea\":\"Ipsum o\",\"pipe_corr_in\":\"Ab eaque\",\"pipe_corr_ext\":\"Neque al\",\"pipe_ipc\":\"Est lib\",\"pipe_bent\":\"Porro mi\",\"pin_od\":\"Velit be\",\"pin_id\":\"Sit sit\",\"pin_tong_space\":\"Quis ver\",\"pin_bevel\":\"Aspernat\",\"pin_seal\":\"Omnis an\",\"pin_length\":\"Beatae e\",\"pin_neck\":\"A beatae\",\"pin_cyl\":\"Ea sint\",\"pin_nose\":\"Tempor v\",\"pin_lead\":\"Dolore q\",\"pin_f_repair\":\"Quae sim\",\"pin_reface\":\"Quis ut\",\"pin_hardbanding\":\"Magni et\",\"pin_condition\":\"Eu ullam\",\"box_od\":\"Necessit\",\"box_tong_space\":\"In aut n\",\"box_bevel\":\"Perferen\",\"box_seal\":\"Eos eos\",\"box_shldr\":\"Omnis qu\",\"box_length\":\"Nostrum\",\"box_cbore_dia\":\"Adipisci\",\"box_cbore_length\":\"Voluptat\",\"box_cbore_wall\":\"Laborios\",\"box_f_repair\":\"Qui id a\",\"box_reface\":\"Proident\",\"box_hardbanding\":\"Voluptat\",\"box_condition\":\"Dolore l\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(722, '{\"serial\":\"Ea qui q\",\"slot\":\"Eum omni\",\"pipe_wt\":\"Accusamu\",\"pipe_od\":\"Esse sin\",\"pipe_emi\":\"Odio dol\",\"pipe_eai\":\"Perferen\",\"pipe_utea\":\"Est magn\",\"pipe_corr_in\":\"Tempor a\",\"pipe_corr_ext\":\"Sit lab\",\"pipe_ipc\":\"Nisi et\",\"pipe_bent\":\"Accusamu\",\"pin_od\":\"Esse des\",\"pin_id\":\"Impedit\",\"pin_tong_space\":\"Porro qu\",\"pin_bevel\":\"Quia est\",\"pin_seal\":\"Dolor si\",\"pin_length\":\"Recusand\",\"pin_neck\":\"Aut in e\",\"pin_cyl\":\"Accusant\",\"pin_nose\":\"Non quis\",\"pin_lead\":\"Esse co\",\"pin_f_repair\":\"Molestia\",\"pin_reface\":\"Fugiat c\",\"pin_hardbanding\":\"Voluptas\",\"pin_condition\":\"Dolor ve\",\"box_od\":\"Qui veri\",\"box_tong_space\":\"Eum simi\",\"box_bevel\":\"Est et o\",\"box_seal\":\"Tenetur\",\"box_shldr\":\"Dolor qu\",\"box_length\":\"Providen\",\"box_cbore_dia\":\"Eiusmod\",\"box_cbore_length\":\"Magni co\",\"box_cbore_wall\":\"Accusamu\",\"box_f_repair\":\"Rerum ut\",\"box_reface\":\"Consequu\",\"box_hardbanding\":\"Rerum ev\",\"box_condition\":\"Voluptat\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(723, '{\"serial\":\"Porro an\",\"slot\":\"Laudanti\",\"pipe_wt\":\"Rerum es\",\"pipe_od\":\"Vel offi\",\"pipe_emi\":\"Est sapi\",\"pipe_eai\":\"Earum ne\",\"pipe_utea\":\"Reprehen\",\"pipe_corr_in\":\"Id simil\",\"pipe_corr_ext\":\"Fugiat\",\"pipe_ipc\":\"Est cons\",\"pipe_bent\":\"Possimus\",\"pin_od\":\"Commodi\",\"pin_id\":\"Aut offi\",\"pin_tong_space\":\"Dolor qu\",\"pin_bevel\":\"Qui repr\",\"pin_seal\":\"At conse\",\"pin_length\":\"Aut nost\",\"pin_neck\":\"Eius par\",\"pin_cyl\":\"Labore q\",\"pin_nose\":\"Laborum\",\"pin_lead\":\"Qui fuga\",\"pin_f_repair\":\"Voluptat\",\"pin_reface\":\"Quam dui\",\"pin_hardbanding\":\"Fugit a\",\"pin_condition\":\"Consecte\",\"box_od\":\"Recusand\",\"box_tong_space\":\"Error of\",\"box_bevel\":\"Duis dol\",\"box_seal\":\"Suscipit\",\"box_shldr\":\"Dolores\",\"box_length\":\"Aut opti\",\"box_cbore_dia\":\"Nostrum\",\"box_cbore_length\":\"Sapiente\",\"box_cbore_wall\":\"Ipsam na\",\"box_f_repair\":\"Nihil do\",\"box_reface\":\"Molestia\",\"box_hardbanding\":\"Sapiente\",\"box_condition\":\"Sunt eu\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(724, '{\"serial\":\"Laudanti\",\"slot\":\"In recus\",\"pipe_wt\":\"Exercita\",\"pipe_od\":\"Neque si\",\"pipe_emi\":\"Vel mole\",\"pipe_eai\":\"Incididu\",\"pipe_utea\":\"Dolorum\",\"pipe_corr_in\":\"Molestia\",\"pipe_corr_ext\":\"Velit co\",\"pipe_ipc\":\"Est mole\",\"pipe_bent\":\"Exercita\",\"pin_od\":\"Et nobis\",\"pin_id\":\"Tenetur\",\"pin_tong_space\":\"Et ipsa\",\"pin_bevel\":\"Ipsam er\",\"pin_seal\":\"Pariatur\",\"pin_length\":\"Sint et\",\"pin_neck\":\"Sapiente\",\"pin_cyl\":\"Exercita\",\"pin_nose\":\"Exceptur\",\"pin_lead\":\"Aut eum\",\"pin_f_repair\":\"Sed obca\",\"pin_reface\":\"Accusamu\",\"pin_hardbanding\":\"Laborum\",\"pin_condition\":\"Quaerat\",\"box_od\":\"Dolores\",\"box_tong_space\":\"Quaerat\",\"box_bevel\":\"Eveniet\",\"box_seal\":\"Repudian\",\"box_shldr\":\"Pariatur\",\"box_length\":\"Laborum\",\"box_cbore_dia\":\"Qui et d\",\"box_cbore_length\":\"Ullamco\",\"box_cbore_wall\":\"Autem ni\",\"box_f_repair\":\"Et conse\",\"box_reface\":\"Animi l\",\"box_hardbanding\":\"Eaque de\",\"box_condition\":\"Dolores\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(725, '{\"serial\":\"Est ad e\",\"slot\":\"Ea est d\",\"pipe_wt\":\"Velit au\",\"pipe_od\":\"Assumend\",\"pipe_emi\":\"Est labo\",\"pipe_eai\":\"Illum v\",\"pipe_utea\":\"Tempor c\",\"pipe_corr_in\":\"Aperiam\",\"pipe_corr_ext\":\"Aperiam\",\"pipe_ipc\":\"Quisquam\",\"pipe_bent\":\"Sit vol\",\"pin_od\":\"Sunt a\",\"pin_id\":\"Alias et\",\"pin_tong_space\":\"Nihil ve\",\"pin_bevel\":\"Commodi\",\"pin_seal\":\"Autem hi\",\"pin_length\":\"Cum impe\",\"pin_neck\":\"Consecte\",\"pin_cyl\":\"Sunt re\",\"pin_nose\":\"Sed plac\",\"pin_lead\":\"Nostrud\",\"pin_f_repair\":\"Rerum qu\",\"pin_reface\":\"Explicab\",\"pin_hardbanding\":\"Minus in\",\"pin_condition\":\"Voluptat\",\"box_od\":\"Adipisci\",\"box_tong_space\":\"Consequu\",\"box_bevel\":\"Occaecat\",\"box_seal\":\"Illum e\",\"box_shldr\":\"Aute bea\",\"box_length\":\"Rerum an\",\"box_cbore_dia\":\"Voluptat\",\"box_cbore_length\":\"Sequi ut\",\"box_cbore_wall\":\"Perspici\",\"box_f_repair\":\"Ut conse\",\"box_reface\":\"Et corpo\",\"box_hardbanding\":\"Quia qui\",\"box_condition\":\"Mollitia\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(726, '{\"serial\":\"Fugit e\",\"slot\":\"Consequa\",\"pipe_wt\":\"Quis sim\",\"pipe_od\":\"Et et do\",\"pipe_emi\":\"Unde et\",\"pipe_eai\":\"Rerum qu\",\"pipe_utea\":\"Ducimus\",\"pipe_corr_in\":\"Asperior\",\"pipe_corr_ext\":\"Et aut e\",\"pipe_ipc\":\"Unde arc\",\"pipe_bent\":\"Fuga Re\",\"pin_od\":\"Aliquip\",\"pin_id\":\"Harum id\",\"pin_tong_space\":\"Exercita\",\"pin_bevel\":\"Quis nob\",\"pin_seal\":\"Dolore i\",\"pin_length\":\"Exceptur\",\"pin_neck\":\"Irure du\",\"pin_cyl\":\"Dignissi\",\"pin_nose\":\"Do paria\",\"pin_lead\":\"Enim non\",\"pin_f_repair\":\"Dolor bl\",\"pin_reface\":\"Quia eni\",\"pin_hardbanding\":\"Officia\",\"pin_condition\":\"Iste mol\",\"box_od\":\"Earum in\",\"box_tong_space\":\"Anim et\",\"box_bevel\":\"Mollit o\",\"box_seal\":\"Ea cupid\",\"box_shldr\":\"Quam tem\",\"box_length\":\"Veniam\",\"box_cbore_dia\":\"Est rep\",\"box_cbore_length\":\"Duis sun\",\"box_cbore_wall\":\"Qui eius\",\"box_f_repair\":\"Sit ita\",\"box_reface\":\"Consequa\",\"box_hardbanding\":\"Sed aut\",\"box_condition\":\"Ipsum in\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(727, '{\"serial\":\"In autem\",\"slot\":\"Commodi\",\"pipe_wt\":\"Reprehen\",\"pipe_od\":\"Dolore c\",\"pipe_emi\":\"Enim iru\",\"pipe_eai\":\"Vel moll\",\"pipe_utea\":\"Ex labor\",\"pipe_corr_in\":\"Iure exe\",\"pipe_corr_ext\":\"Totam ea\",\"pipe_ipc\":\"Est arch\",\"pipe_bent\":\"Doloremq\",\"pin_od\":\"Tenetur\",\"pin_id\":\"Molestia\",\"pin_tong_space\":\"Dolor ma\",\"pin_bevel\":\"Reiciend\",\"pin_seal\":\"Ut possi\",\"pin_length\":\"Dolores\",\"pin_neck\":\"Exercita\",\"pin_cyl\":\"Et aliqu\",\"pin_nose\":\"Laudanti\",\"pin_lead\":\"Officiis\",\"pin_f_repair\":\"Minus ve\",\"pin_reface\":\"Error as\",\"pin_hardbanding\":\"Illo eos\",\"pin_condition\":\"Quae dol\",\"box_od\":\"Est atq\",\"box_tong_space\":\"Est reru\",\"box_bevel\":\"Quasi se\",\"box_seal\":\"Dolore v\",\"box_shldr\":\"Illum o\",\"box_length\":\"Enim aut\",\"box_cbore_dia\":\"Ex duis\",\"box_cbore_length\":\"Tempor e\",\"box_cbore_wall\":\"Elit mi\",\"box_f_repair\":\"Voluptat\",\"box_reface\":\"Eos rati\",\"box_hardbanding\":\"Quia vol\",\"box_condition\":\"In velit\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(728, '{\"serial\":\"Ad elige\",\"slot\":\"Quaerat\",\"pipe_wt\":\"Beatae s\",\"pipe_od\":\"Consequa\",\"pipe_emi\":\"In odit\",\"pipe_eai\":\"Omnis pa\",\"pipe_utea\":\"Autem la\",\"pipe_corr_in\":\"Vero pla\",\"pipe_corr_ext\":\"Sit sint\",\"pipe_ipc\":\"Quo ut r\",\"pipe_bent\":\"Et volup\",\"pin_od\":\"Sit qui\",\"pin_id\":\"Aliqua\",\"pin_tong_space\":\"Cupidata\",\"pin_bevel\":\"Itaque f\",\"pin_seal\":\"Magna no\",\"pin_length\":\"Quos est\",\"pin_neck\":\"Voluptat\",\"pin_cyl\":\"Reiciend\",\"pin_nose\":\"Reiciend\",\"pin_lead\":\"Beatae s\",\"pin_f_repair\":\"Labore c\",\"pin_reface\":\"Elit pa\",\"pin_hardbanding\":\"Inventor\",\"pin_condition\":\"Aspernat\",\"box_od\":\"Tenetur\",\"box_tong_space\":\"Tempora\",\"box_bevel\":\"Quaerat\",\"box_seal\":\"At volup\",\"box_shldr\":\"Rerum se\",\"box_length\":\"Et disti\",\"box_cbore_dia\":\"Eum face\",\"box_cbore_length\":\"In bland\",\"box_cbore_wall\":\"Itaque s\",\"box_f_repair\":\"Fugiat i\",\"box_reface\":\"Dolore q\",\"box_hardbanding\":\"Obcaecat\",\"box_condition\":\"Soluta q\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(729, '{\"serial\":\"Perspici\",\"slot\":\"Non anim\",\"pipe_wt\":\"A dolore\",\"pipe_od\":\"Harum at\",\"pipe_emi\":\"Enim ea\",\"pipe_eai\":\"Perferen\",\"pipe_utea\":\"Ipsum e\",\"pipe_corr_in\":\"Et sunt\",\"pipe_corr_ext\":\"Nemo dol\",\"pipe_ipc\":\"Et esse\",\"pipe_bent\":\"Culpa de\",\"pin_od\":\"Vero qui\",\"pin_id\":\"Et dolor\",\"pin_tong_space\":\"Repudian\",\"pin_bevel\":\"Impedit\",\"pin_seal\":\"Eius har\",\"pin_length\":\"Laboris\",\"pin_neck\":\"Culpa de\",\"pin_cyl\":\"Veniam\",\"pin_nose\":\"Aut dele\",\"pin_lead\":\"Anim sit\",\"pin_f_repair\":\"Officia\",\"pin_reface\":\"Veniam\",\"pin_hardbanding\":\"Nisi vol\",\"pin_condition\":\"Dolor en\",\"box_od\":\"Eius asp\",\"box_tong_space\":\"Laboris\",\"box_bevel\":\"Non enim\",\"box_seal\":\"Et conse\",\"box_shldr\":\"Quis lab\",\"box_length\":\"Animi v\",\"box_cbore_dia\":\"Id tenet\",\"box_cbore_length\":\"Odit cor\",\"box_cbore_wall\":\"Omnis am\",\"box_f_repair\":\"Qui quis\",\"box_reface\":\"Nostrum\",\"box_hardbanding\":\"Iste sun\",\"box_condition\":\"Ab beata\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(730, '{\"serial\":\"Quas ani\",\"slot\":\"Neque qu\",\"pipe_wt\":\"Labore r\",\"pipe_od\":\"Quo volu\",\"pipe_emi\":\"Odio omn\",\"pipe_eai\":\"Voluptat\",\"pipe_utea\":\"Quia acc\",\"pipe_corr_in\":\"Amet qu\",\"pipe_corr_ext\":\"Nulla vo\",\"pipe_ipc\":\"Pariatur\",\"pipe_bent\":\"Id volu\",\"pin_od\":\"Nulla si\",\"pin_id\":\"Totam si\",\"pin_tong_space\":\"Dolores\",\"pin_bevel\":\"Fugit q\",\"pin_seal\":\"Magna re\",\"pin_length\":\"Velit p\",\"pin_neck\":\"Aspernat\",\"pin_cyl\":\"Nisi rep\",\"pin_nose\":\"Incidunt\",\"pin_lead\":\"Odit off\",\"pin_f_repair\":\"In iure\",\"pin_reface\":\"Dolore e\",\"pin_hardbanding\":\"At id ex\",\"pin_condition\":\"Sint al\",\"box_od\":\"Quia nob\",\"box_tong_space\":\"Quisquam\",\"box_bevel\":\"Velit qu\",\"box_seal\":\"Sed esse\",\"box_shldr\":\"Quos pla\",\"box_length\":\"Ut rerum\",\"box_cbore_dia\":\"Eaque an\",\"box_cbore_length\":\"Ullamco\",\"box_cbore_wall\":\"Mollit h\",\"box_f_repair\":\"Perspici\",\"box_reface\":\"Temporib\",\"box_hardbanding\":\"Dolor at\",\"box_condition\":\"Quis rer\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 20, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(738, '{\"serial\":\"test\",\"description\":\"test\",\"pin1_conn\":\"test\",\"pin2_conn\":\"test\",\"pin1_cond\":\"ok\",\"pin2_cond\":\"ok\",\"body_cond\":\"ok\",\"pin1_od\":\"test\",\"pin1_id\":\"test\",\"pin1_diameter\":\"test\",\"pin1_srg\":\"test\",\"pin1_length\":\"test\",\"pin1_bevel\":\"test\",\"pin2_od\":\"test\",\"pin2_id\":\"test\",\"pin2_diameter\":\"test\",\"pin2_srg\":\"test\",\"pin2_length\":\"test\",\"pin2_bevel\":\"test\",\"body_length\":\"test\",\"remarks\":\"test\"}', 'Tools', 41, '2024-06-23 09:24:10', '2024-06-23 09:24:10'),
(739, '{\"serial\":\"test\",\"description\":\"test\",\"pin1_conn\":\"test\",\"pin2_conn\":\"test\",\"pin1_cond\":\"GT\",\"pin2_cond\":\"GT\",\"body_cond\":\"GT\",\"pin1_od\":\"test\",\"pin1_id\":\"test\",\"pin1_diameter\":\"test\",\"pin1_srg\":\"test\",\"pin1_length\":\"test\",\"pin1_bevel\":\"test\",\"pin2_od\":\"test\",\"pin2_id\":\"test\",\"pin2_diameter\":\"test\",\"pin2_srg\":\"test\",\"pin2_length\":\"test\",\"pin2_bevel\":\"test\",\"body_length\":\"test\",\"remarks\":\"test\"}', 'Tools', 41, '2024-06-23 09:24:10', '2024-06-23 09:24:10'),
(740, '{\"serial\":\"test\",\"description\":\"test\",\"pin1_conn\":\"test\",\"pin2_conn\":\"test\",\"pin1_cond\":\"TP\",\"pin2_cond\":\"TP\",\"body_cond\":\"TP\",\"pin1_od\":\"test\",\"pin1_id\":\"test\",\"pin1_diameter\":\"test\",\"pin1_srg\":\"test\",\"pin1_length\":\"test\",\"pin1_bevel\":\"test\",\"pin2_od\":\"test\",\"pin2_id\":\"test\",\"pin2_diameter\":\"test\",\"pin2_srg\":\"test\",\"pin2_length\":\"test\",\"pin2_bevel\":\"test\",\"body_length\":\"test\",\"remarks\":\"test\"}', 'Tools', 41, '2024-06-23 09:24:10', '2024-06-23 09:24:10'),
(741, '{\"serial\":\"test\",\"description\":\"test\",\"pin1_conn\":\"test\",\"pin2_conn\":\"test\",\"pin1_cond\":\"TD\",\"pin2_cond\":\"SP\",\"body_cond\":\"SP\",\"pin1_od\":\"test\",\"pin1_id\":\"test\",\"pin1_diameter\":\"test\",\"pin1_srg\":\"test\",\"pin1_length\":\"test\",\"pin1_bevel\":\"test\",\"pin2_od\":\"test\",\"pin2_id\":\"test\",\"pin2_diameter\":\"test\",\"pin2_srg\":\"test\",\"pin2_length\":\"test\",\"pin2_bevel\":\"test\",\"body_length\":\"test\",\"remarks\":\"test\"}', 'Tools', 41, '2024-06-23 09:24:10', '2024-06-23 09:24:10'),
(742, '{\"serial\":\"Quis mag\",\"description\":\"Incidunt\",\"pin_conn\":\"Veniam\",\"box_conn\":\"Voluptat\",\"pin_cond\":\"ok\",\"box_cond\":\"ok\",\"body_cond\":\"ok\",\"pin_od\":\"Irure co\",\"pin_id\":\"Voluptas\",\"pin_diameter\":\"A archit\",\"pin_srg\":\"Qui ex m\",\"pin_length\":\"Quaerat\",\"pin_bevel\":\"Laborios\",\"box_od\":\"Dolorem\",\"box_cb\":\"Sed dolo\",\"box_bb_diameter\":\"Exceptur\",\"box_bb_depth\":\"Pariatur\",\"box_bevel_diameter\":\"Deleniti\",\"body_fishing_neck\":\"Cum illu\",\"body_length\":\"Eveniet\",\"remarks\":\"Deserunt\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(743, '{\"serial\":\"Occaecat\",\"description\":\"Id nost\",\"pin_conn\":\"Velit ne\",\"box_conn\":\"Omnis qu\",\"pin_cond\":\"TP\",\"box_cond\":\"TP\",\"body_cond\":\"SP\",\"pin_od\":\"Qui qui\",\"pin_id\":\"Architec\",\"pin_diameter\":\"Dolore c\",\"pin_srg\":\"Aut volu\",\"pin_length\":\"Dolor co\",\"pin_bevel\":\"Non nisi\",\"box_od\":\"Adipisci\",\"box_cb\":\"Voluptat\",\"box_bb_diameter\":\"Sed face\",\"box_bb_depth\":\"Sint et\",\"box_bevel_diameter\":\"Sequi co\",\"body_fishing_neck\":\"Dolore a\",\"body_length\":\"Deleniti\",\"remarks\":\"Deserunt\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(744, '{\"serial\":\"Ipsum no\",\"description\":\"Est a ex\",\"pin_conn\":\"Eos adip\",\"box_conn\":\"Facere v\",\"pin_cond\":\"CR\",\"box_cond\":\"SD\",\"body_cond\":\"TP\",\"pin_od\":\"Eos sim\",\"pin_id\":\"Doloribu\",\"pin_diameter\":\"Aliqua\",\"pin_srg\":\"Qui enim\",\"pin_length\":\"Sed rati\",\"pin_bevel\":\"Duis des\",\"box_od\":\"Debitis\",\"box_cb\":\"Delectus\",\"box_bb_diameter\":\"Aliquip\",\"box_bb_depth\":\"Aut ea s\",\"box_bevel_diameter\":\"Obcaecat\",\"body_fishing_neck\":\"Eos ex n\",\"body_length\":\"Tempore\",\"remarks\":\"Qui sit\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(745, '{\"serial\":\"Enim con\",\"description\":\"Mollit b\",\"pin_conn\":\"Iste odi\",\"box_conn\":\"Ea eveni\",\"pin_cond\":\"ok\",\"box_cond\":\"SP\",\"body_cond\":\"SD\",\"pin_od\":\"Numquam\",\"pin_id\":\"Ut sunt\",\"pin_diameter\":\"Enim lab\",\"pin_srg\":\"Ea saepe\",\"pin_length\":\"Tempor e\",\"pin_bevel\":\"Elit in\",\"box_od\":\"Explicab\",\"box_cb\":\"Neque ex\",\"box_bb_diameter\":\"Laboris\",\"box_bb_depth\":\"Nisi min\",\"box_bevel_diameter\":\"Eiusmod\",\"body_fishing_neck\":\"Ad ratio\",\"body_length\":\"Mollitia\",\"remarks\":\"Deleniti\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(746, '{\"serial\":\"Vitae ad\",\"description\":\"Nihil la\",\"pin_conn\":\"Ea nostr\",\"box_conn\":\"Amet al\",\"pin_cond\":\"CR\",\"box_cond\":\"SP\",\"body_cond\":\"SD\",\"pin_od\":\"Ea adipi\",\"pin_id\":\"Magni qu\",\"pin_diameter\":\"Ea hic p\",\"pin_srg\":\"Dolore p\",\"pin_length\":\"Nostrud\",\"pin_bevel\":\"Illo est\",\"box_od\":\"Quae nes\",\"box_cb\":\"Asperior\",\"box_bb_diameter\":\"Et irure\",\"box_bb_depth\":\"Sed occa\",\"box_bevel_diameter\":\"Hic offi\",\"body_fishing_neck\":\"Excepteu\",\"body_length\":\"Sunt vel\",\"remarks\":\"Dolorum\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(747, '{\"serial\":\"Quis exc\",\"description\":\"Est occa\",\"pin_conn\":\"Quo unde\",\"box_conn\":\"Saepe as\",\"pin_cond\":\"CR\",\"box_cond\":\"SD\",\"body_cond\":\"TD\",\"pin_od\":\"Quo exce\",\"pin_id\":\"Eiusmod\",\"pin_diameter\":\"Commodi\",\"pin_srg\":\"Sed itaq\",\"pin_length\":\"Ad offic\",\"pin_bevel\":\"Similiqu\",\"box_od\":\"In odit\",\"box_cb\":\"Nihil qu\",\"box_bb_diameter\":\"Obcaecat\",\"box_bb_depth\":\"Sed fugi\",\"box_bevel_diameter\":\"Exercita\",\"body_fishing_neck\":\"Consequa\",\"body_length\":\"Autem do\",\"remarks\":\"Autem in\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(748, '{\"serial\":\"Suscipit\",\"description\":\"Velit di\",\"pin_conn\":\"Quos dig\",\"box_conn\":\"Elit cu\",\"pin_cond\":\"TP\",\"box_cond\":\"SP\",\"body_cond\":\"SD\",\"pin_od\":\"Sit ut u\",\"pin_id\":\"Qui eu d\",\"pin_diameter\":\"Blanditi\",\"pin_srg\":\"Blanditi\",\"pin_length\":\"Autem ip\",\"pin_bevel\":\"Ullam de\",\"box_od\":\"Fugiat i\",\"box_cb\":\"Aut pari\",\"box_bb_diameter\":\"Aut et q\",\"box_bb_depth\":\"Nulla of\",\"box_bevel_diameter\":\"Irure ci\",\"body_fishing_neck\":\"Atque at\",\"body_length\":\"Dolor ve\",\"remarks\":\"Rerum si\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(749, '{\"serial\":\"Voluptat\",\"description\":\"Porro no\",\"pin_conn\":\"Duis pro\",\"box_conn\":\"Aute lab\",\"pin_cond\":\"SD\",\"box_cond\":\"SRG\",\"body_cond\":\"SRG\",\"pin_od\":\"Minus pl\",\"pin_id\":\"Voluptat\",\"pin_diameter\":\"Nulla qu\",\"pin_srg\":\"Laboris\",\"pin_length\":\"Velit ut\",\"pin_bevel\":\"Similiqu\",\"box_od\":\"Deserunt\",\"box_cb\":\"Id eum c\",\"box_bb_diameter\":\"Qui dele\",\"box_bb_depth\":\"Modi qui\",\"box_bevel_diameter\":\"Dolor re\",\"body_fishing_neck\":\"Quod est\",\"body_length\":\"Asperior\",\"remarks\":\"Sit veni\"}', 'Tools', 42, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(750, '{\"serial\":\"Nostrud\",\"description\":\"Reprehen\",\"box1_conn\":\"Consecte\",\"box2_conn\":\"Sunt pr\",\"box1_cond\":\"GT\",\"box2_cond\":\"GT\",\"body_cond\":\"TD\",\"box1_od\":\"Cum et t\",\"box1_cb\":\"Consequa\",\"box1_bb_diameter\":\"Aute ame\",\"box1_bb_depth\":\"Magni pr\",\"box1_bevel_diameter\":\"Quod fac\",\"box2_od\":\"Proident\",\"box2_cb\":\"Sint dol\",\"box2_bb_diameter\":\"Odio id\",\"box2_bb_depth\":\"Nisi qui\",\"box2_bevel_diameter\":\"Optio s\",\"body_fishing_neck\":\"Et corpo\",\"body_length\":\"Explicab\",\"remarks\":\"Ea nihil\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(751, '{\"serial\":\"Quisquam\",\"description\":\"In magna\",\"box1_conn\":\"Quis ven\",\"box2_conn\":\"Esse al\",\"box1_cond\":\"SP\",\"box2_cond\":\"SD\",\"body_cond\":\"CR\",\"box1_od\":\"Modi sed\",\"box1_cb\":\"Id eos\",\"box1_bb_diameter\":\"Omnis mo\",\"box1_bb_depth\":\"Qui id\",\"box1_bevel_diameter\":\"Incididu\",\"box2_od\":\"Ut adipi\",\"box2_cb\":\"Nostrum\",\"box2_bb_diameter\":\"Et lauda\",\"box2_bb_depth\":\"Voluptat\",\"box2_bevel_diameter\":\"Exercita\",\"body_fishing_neck\":\"Totam vo\",\"body_length\":\"Vero ut\",\"remarks\":\"Possimus\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(752, '{\"serial\":\"Repudian\",\"description\":\"Quia lab\",\"box1_conn\":\"Delectus\",\"box2_conn\":\"Dolorum\",\"box1_cond\":\"SP\",\"box2_cond\":\"SD\",\"body_cond\":\"SD\",\"box1_od\":\"Officia\",\"box1_cb\":\"Iure ill\",\"box1_bb_diameter\":\"Possimus\",\"box1_bb_depth\":\"A volupt\",\"box1_bevel_diameter\":\"Consecte\",\"box2_od\":\"Eos omni\",\"box2_cb\":\"Ea elit\",\"box2_bb_diameter\":\"Sint ape\",\"box2_bb_depth\":\"Ut odio\",\"box2_bevel_diameter\":\"In cillu\",\"body_fishing_neck\":\"Dolore f\",\"body_length\":\"Sunt del\",\"remarks\":\"Perferen\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(753, '{\"serial\":\"Atque ut\",\"description\":\"Aliquid\",\"box1_conn\":\"Nam comm\",\"box2_conn\":\"In error\",\"box1_cond\":\"SD\",\"box2_cond\":\"SP\",\"body_cond\":\"B.B\",\"box1_od\":\"Est cumq\",\"box1_cb\":\"Eligendi\",\"box1_bb_diameter\":\"Esse sed\",\"box1_bb_depth\":\"Voluptat\",\"box1_bevel_diameter\":\"Exercita\",\"box2_od\":\"Minima s\",\"box2_cb\":\"Eum vel\",\"box2_bb_diameter\":\"Omnis do\",\"box2_bb_depth\":\"Iste off\",\"box2_bevel_diameter\":\"Et non a\",\"body_fishing_neck\":\"Dolor no\",\"body_length\":\"Animi q\",\"remarks\":\"Ea offic\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(754, '{\"serial\":\"Voluptas\",\"description\":\"Quidem m\",\"box1_conn\":\"Omnis et\",\"box2_conn\":\"Quae ten\",\"box1_cond\":\"B.B\",\"box2_cond\":\"SD\",\"body_cond\":\"SD\",\"box1_od\":\"Sint di\",\"box1_cb\":\"Quas et\",\"box1_bb_diameter\":\"Voluptas\",\"box1_bb_depth\":\"Voluptat\",\"box1_bevel_diameter\":\"Minima e\",\"box2_od\":\"Beatae v\",\"box2_cb\":\"Itaque v\",\"box2_bb_diameter\":\"Quis rat\",\"box2_bb_depth\":\"Reprehen\",\"box2_bevel_diameter\":\"Eum inve\",\"body_fishing_neck\":\"Praesent\",\"body_length\":\"Sit iust\",\"remarks\":\"Dolore n\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(755, '{\"serial\":\"Elit qu\",\"description\":\"Laborum\",\"box1_conn\":\"Ipsa ut\",\"box2_conn\":\"Eaque de\",\"box1_cond\":\"TD\",\"box2_cond\":\"SD\",\"body_cond\":\"SD\",\"box1_od\":\"Dolores\",\"box1_cb\":\"Nostrum\",\"box1_bb_diameter\":\"Nisi arc\",\"box1_bb_depth\":\"Facere a\",\"box1_bevel_diameter\":\"Quo pari\",\"box2_od\":\"Minim la\",\"box2_cb\":\"Non sed\",\"box2_bb_diameter\":\"Et sit e\",\"box2_bb_depth\":\"Sit cum\",\"box2_bevel_diameter\":\"Ea persp\",\"body_fishing_neck\":\"Tempore\",\"body_length\":\"Omnis in\",\"remarks\":\"Hic expl\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43');
INSERT INTO `report_desc` (`id`, `description`, `model_type`, `model_id`, `created_at`, `updated_at`) VALUES
(756, '{\"serial\":\"Suscipit\",\"description\":\"Cupidita\",\"box1_conn\":\"Incididu\",\"box2_conn\":\"Aliqua\",\"box1_cond\":\"SP\",\"box2_cond\":\"CR\",\"body_cond\":\"CR\",\"box1_od\":\"Exceptur\",\"box1_cb\":\"Nulla ut\",\"box1_bb_diameter\":\"Hic fugi\",\"box1_bb_depth\":\"Atque as\",\"box1_bevel_diameter\":\"Sint qui\",\"box2_od\":\"Voluptat\",\"box2_cb\":\"Ut elit\",\"box2_bb_diameter\":\"Non veri\",\"box2_bb_depth\":\"Ducimus\",\"box2_bevel_diameter\":\"Beatae n\",\"body_fishing_neck\":\"Eius vel\",\"body_length\":\"Delectus\",\"remarks\":\"Sunt qu\"}', 'Tools', 43, '2024-06-23 09:27:43', '2024-06-23 09:27:43'),
(757, '{\"description\":\"Et illum\",\"serial_no\":\"Porro ut\",\"length\":\"Repellen\",\"box_thread\":\"Dolor qu\",\"box_od\":\"Quae dol\",\"box_cond\":\"Ut in do\",\"pin_conn\":\"Veritati\",\"pin_id\":\"Minus cu\",\"pin_cond\":\"Minim a\",\"body_thread_cond\":\"Exceptur\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(758, '{\"description\":\"Sed id l\",\"serial_no\":\"Beatae n\",\"length\":\"Eiusmod\",\"box_thread\":\"Reprehen\",\"box_od\":\"Id offic\",\"box_cond\":\"Voluptat\",\"pin_conn\":\"Nam sapi\",\"pin_id\":\"Incididu\",\"pin_cond\":\"Pariatur\",\"body_thread_cond\":\"Sint arc\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(759, '{\"description\":\"Vitae qu\",\"serial_no\":\"Qui expl\",\"length\":\"Nobis in\",\"box_thread\":\"Pariatur\",\"box_od\":\"Incidunt\",\"box_cond\":\"Lorem pa\",\"pin_conn\":\"Consequu\",\"pin_id\":\"Fugit s\",\"pin_cond\":\"Esse la\",\"body_thread_cond\":\"Facere u\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(760, '{\"description\":\"Est veni\",\"serial_no\":\"Quis dol\",\"length\":\"Nam dele\",\"box_thread\":\"Sint per\",\"box_od\":\"Omnis at\",\"box_cond\":\"Consecte\",\"pin_conn\":\"Ut amet\",\"pin_id\":\"Doloremq\",\"pin_cond\":\"Ad lauda\",\"body_thread_cond\":\"Ad minim\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(761, '{\"description\":\"Ut corpo\",\"serial_no\":\"Non est\",\"length\":\"Dignissi\",\"box_thread\":\"Ullamco\",\"box_od\":\"Culpa o\",\"box_cond\":\"Iure ull\",\"pin_conn\":\"Nam sed\",\"pin_id\":\"Pariatur\",\"pin_cond\":\"Tenetur\",\"body_thread_cond\":\"Odit sun\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(762, '{\"description\":\"Velit in\",\"serial_no\":\"Laborum\",\"length\":\"Corporis\",\"box_thread\":\"Alias ar\",\"box_od\":\"Dolor la\",\"box_cond\":\"Libero m\",\"pin_conn\":\"Sed aut\",\"pin_id\":\"Ab labor\",\"pin_cond\":\"Libero a\",\"body_thread_cond\":\"Amet ut\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 32, '2024-06-23 09:28:30', '2024-06-23 09:28:30'),
(763, '{\"description\":\"Eiusmod\",\"serial_no\":\"Ratione\",\"length\":\"Est comm\",\"box_thread\":\"Voluptat\",\"box_od\":\"Sint pra\",\"box_cond\":\"Magna im\",\"pin_conn\":\"Nulla ob\",\"pin_id\":\"Debitis\",\"pin_cond\":\"Aliquip\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(764, '{\"description\":\"Vitae si\",\"serial_no\":\"Nihil ad\",\"length\":\"Aspernat\",\"box_thread\":\"Perferen\",\"box_od\":\"Non non\",\"box_cond\":\"Omnis qu\",\"pin_conn\":\"Irure im\",\"pin_id\":\"Et excep\",\"pin_cond\":\"Molestia\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(765, '{\"description\":\"Sit ani\",\"serial_no\":\"Aut vel\",\"length\":\"Voluptat\",\"box_thread\":\"Temporib\",\"box_od\":\"Explicab\",\"box_cond\":\"Laborum\",\"pin_conn\":\"Molestia\",\"pin_id\":\"Non eu c\",\"pin_cond\":\"Veritati\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(766, '{\"description\":\"At debit\",\"serial_no\":\"Nesciunt\",\"length\":\"Ut cum a\",\"box_thread\":\"Sunt acc\",\"box_od\":\"Nam quas\",\"box_cond\":\"Beatae q\",\"pin_conn\":\"Deleniti\",\"pin_id\":\"Ut neque\",\"pin_cond\":\"Modi a c\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(767, '{\"description\":\"Dolor qu\",\"serial_no\":\"Alias qu\",\"length\":\"Commodo\",\"box_thread\":\"Iste eu\",\"box_od\":\"Est iure\",\"box_cond\":\"Temporib\",\"pin_conn\":\"Quia dol\",\"pin_id\":\"Velit en\",\"pin_cond\":\"Cumque c\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(768, '{\"description\":\"Mollit i\",\"serial_no\":\"Dolore a\",\"length\":\"Non magn\",\"box_thread\":\"Est ea v\",\"box_od\":\"Magni pe\",\"box_cond\":\"Voluptat\",\"pin_conn\":\"Praesent\",\"pin_id\":\"Nesciunt\",\"pin_cond\":\"Fugiat\"}', 'App\\Models\\Dashboard\\Tublar\\MudJar\\MudJar', 33, '2024-06-23 09:34:07', '2024-06-23 09:34:07'),
(769, '{\"serial\":\"Eos qui\",\"slot\":\"Anim lib\",\"pipe_wt\":\"Qui exce\",\"pipe_od\":\"Temporib\",\"pipe_emi\":\"Aut ex u\",\"pipe_eai\":\"Officia\",\"pipe_utea\":\"Autem mo\",\"pipe_corr_in\":\"Laudanti\",\"pipe_corr_ext\":\"Minima i\",\"pipe_ipc\":\"Repudian\",\"pipe_bent\":\"Exercita\",\"pin_od\":\"Optio d\",\"pin_id\":\"In non a\",\"pin_tong_space\":\"Debitis\",\"pin_bevel\":\"Placeat\",\"pin_seal\":\"Fugiat\",\"pin_length\":\"Ut dolor\",\"pin_neck\":\"Iusto in\",\"pin_cyl\":\"Reiciend\",\"pin_nose\":\"Irure ne\",\"pin_lead\":\"Ut eiusm\",\"pin_f_repair\":\"Nihil qu\",\"pin_reface\":\"Sunt nem\",\"pin_hardbanding\":\"Adipisic\",\"pin_condition\":\"Officiis\",\"box_od\":\"Ullam au\",\"box_tong_space\":\"Magna ir\",\"box_bevel\":\"Nulla et\",\"box_seal\":\"Omnis ip\",\"box_shldr\":\"Quisquam\",\"box_length\":\"Amet it\",\"box_cbore_dia\":\"Ducimus\",\"box_cbore_length\":\"Explicab\",\"box_cbore_wall\":\"Aliquam\",\"box_f_repair\":\"Aut omni\",\"box_reface\":\"Ad moles\",\"box_hardbanding\":\"Totam cu\",\"box_condition\":\"Voluptat\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(770, '{\"serial\":\"Deleniti\",\"slot\":\"Sunt qui\",\"pipe_wt\":\"Aspernat\",\"pipe_od\":\"Excepteu\",\"pipe_emi\":\"Et conse\",\"pipe_eai\":\"Cumque r\",\"pipe_utea\":\"Explicab\",\"pipe_corr_in\":\"Ea quo s\",\"pipe_corr_ext\":\"Est tot\",\"pipe_ipc\":\"Ea conse\",\"pipe_bent\":\"Esse au\",\"pin_od\":\"Omnis ut\",\"pin_id\":\"Consequa\",\"pin_tong_space\":\"Cum recu\",\"pin_bevel\":\"Eu omnis\",\"pin_seal\":\"Temporib\",\"pin_length\":\"Amet nu\",\"pin_neck\":\"Excepteu\",\"pin_cyl\":\"Est qui\",\"pin_nose\":\"Sunt du\",\"pin_lead\":\"Ut dolor\",\"pin_f_repair\":\"Ut nihil\",\"pin_reface\":\"Consecte\",\"pin_hardbanding\":\"Et labor\",\"pin_condition\":\"Aliquid\",\"box_od\":\"In vel s\",\"box_tong_space\":\"Perferen\",\"box_bevel\":\"Assumend\",\"box_seal\":\"In ut vo\",\"box_shldr\":\"Sed reru\",\"box_length\":\"Quis bea\",\"box_cbore_dia\":\"Sint ex\",\"box_cbore_length\":\"Eum labo\",\"box_cbore_wall\":\"Proident\",\"box_f_repair\":\"Rerum eu\",\"box_reface\":\"Minus od\",\"box_hardbanding\":\"Sit qui\",\"box_condition\":\"Velit fu\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(771, '{\"serial\":\"Enim ven\",\"slot\":\"Ipsum ve\",\"pipe_wt\":\"Aut corp\",\"pipe_od\":\"Modi nih\",\"pipe_emi\":\"Exercita\",\"pipe_eai\":\"Qui opti\",\"pipe_utea\":\"Voluptat\",\"pipe_corr_in\":\"Officia\",\"pipe_corr_ext\":\"Impedit\",\"pipe_ipc\":\"Dignissi\",\"pipe_bent\":\"Animi m\",\"pin_od\":\"Ut place\",\"pin_id\":\"Sed dist\",\"pin_tong_space\":\"Explicab\",\"pin_bevel\":\"Autem to\",\"pin_seal\":\"Adipisci\",\"pin_length\":\"Ut in au\",\"pin_neck\":\"Debitis\",\"pin_cyl\":\"Irure en\",\"pin_nose\":\"In quisq\",\"pin_lead\":\"Dolor to\",\"pin_f_repair\":\"Labore r\",\"pin_reface\":\"Minus ut\",\"pin_hardbanding\":\"Ex sed d\",\"pin_condition\":\"Sunt vit\",\"box_od\":\"Explicab\",\"box_tong_space\":\"Magnam v\",\"box_bevel\":\"Quo dolo\",\"box_seal\":\"Perspici\",\"box_shldr\":\"Ea omnis\",\"box_length\":\"Non anim\",\"box_cbore_dia\":\"Obcaecat\",\"box_cbore_length\":\"Dolore v\",\"box_cbore_wall\":\"Ipsum ad\",\"box_f_repair\":\"Duis per\",\"box_reface\":\"Dolor vo\",\"box_hardbanding\":\"Quo non\",\"box_condition\":\"Cupidata\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(772, '{\"serial\":\"Tenetur\",\"slot\":\"Temporib\",\"pipe_wt\":\"In sit\",\"pipe_od\":\"Explicab\",\"pipe_emi\":\"Perspici\",\"pipe_eai\":\"Facere s\",\"pipe_utea\":\"Tempore\",\"pipe_corr_in\":\"Providen\",\"pipe_corr_ext\":\"Et incid\",\"pipe_ipc\":\"Reiciend\",\"pipe_bent\":\"Dolor vo\",\"pin_od\":\"Quis opt\",\"pin_id\":\"Ducimus\",\"pin_tong_space\":\"Dolores\",\"pin_bevel\":\"Rem ut a\",\"pin_seal\":\"Sunt no\",\"pin_length\":\"Asperior\",\"pin_neck\":\"Impedit\",\"pin_cyl\":\"Ex vero\",\"pin_nose\":\"Velit id\",\"pin_lead\":\"Ut non q\",\"pin_f_repair\":\"Tempor o\",\"pin_reface\":\"Est enim\",\"pin_hardbanding\":\"Voluptat\",\"pin_condition\":\"Quibusda\",\"box_od\":\"Eum arch\",\"box_tong_space\":\"Quae vol\",\"box_bevel\":\"Deserunt\",\"box_seal\":\"Perferen\",\"box_shldr\":\"Aut a fu\",\"box_length\":\"Mollitia\",\"box_cbore_dia\":\"Tempor n\",\"box_cbore_length\":\"Vel omni\",\"box_cbore_wall\":\"Voluptat\",\"box_f_repair\":\"Molestia\",\"box_reface\":\"Aliqua\",\"box_hardbanding\":\"Ad atque\",\"box_condition\":\"Voluptat\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(773, '{\"serial\":\"Expedita\",\"slot\":\"Aut nisi\",\"pipe_wt\":\"Amet vo\",\"pipe_od\":\"Magna qu\",\"pipe_emi\":\"Incidunt\",\"pipe_eai\":\"Irure co\",\"pipe_utea\":\"Ab accus\",\"pipe_corr_in\":\"Iusto co\",\"pipe_corr_ext\":\"Ea ea en\",\"pipe_ipc\":\"Id quis\",\"pipe_bent\":\"Reprehen\",\"pin_od\":\"Modi iru\",\"pin_id\":\"Quis et\",\"pin_tong_space\":\"Eos in\",\"pin_bevel\":\"Natus pe\",\"pin_seal\":\"Exercita\",\"pin_length\":\"Dolores\",\"pin_neck\":\"Ut sunt\",\"pin_cyl\":\"Dolor es\",\"pin_nose\":\"Amet of\",\"pin_lead\":\"Beatae c\",\"pin_f_repair\":\"Aut ipsu\",\"pin_reface\":\"Perspici\",\"pin_hardbanding\":\"Eos in\",\"pin_condition\":\"Aliqua\",\"box_od\":\"Animi f\",\"box_tong_space\":\"Voluptat\",\"box_bevel\":\"Explicab\",\"box_seal\":\"Esse iru\",\"box_shldr\":\"Est ver\",\"box_length\":\"Dolorem\",\"box_cbore_dia\":\"Sit sequ\",\"box_cbore_length\":\"Saepe de\",\"box_cbore_wall\":\"Exercita\",\"box_f_repair\":\"Eos ipsu\",\"box_reface\":\"Nostrum\",\"box_hardbanding\":\"Dolores\",\"box_condition\":\"Sequi no\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(774, '{\"serial\":\"Odit dol\",\"slot\":\"Nobis la\",\"pipe_wt\":\"Voluptat\",\"pipe_od\":\"Aut et e\",\"pipe_emi\":\"Culpa do\",\"pipe_eai\":\"Expedita\",\"pipe_utea\":\"Asperior\",\"pipe_corr_in\":\"Et vero\",\"pipe_corr_ext\":\"Enim qua\",\"pipe_ipc\":\"Occaecat\",\"pipe_bent\":\"Velit r\",\"pin_od\":\"Quos ali\",\"pin_id\":\"Et itaqu\",\"pin_tong_space\":\"Qui et f\",\"pin_bevel\":\"Est eni\",\"pin_seal\":\"Commodi\",\"pin_length\":\"Cupidata\",\"pin_neck\":\"Vel even\",\"pin_cyl\":\"Quis sun\",\"pin_nose\":\"Suscipit\",\"pin_lead\":\"Minim co\",\"pin_f_repair\":\"Ipsa al\",\"pin_reface\":\"Exercita\",\"pin_hardbanding\":\"Quis et\",\"pin_condition\":\"Sapiente\",\"box_od\":\"Velit il\",\"box_tong_space\":\"Ut nostr\",\"box_bevel\":\"Exercita\",\"box_seal\":\"Est id n\",\"box_shldr\":\"Qui sunt\",\"box_length\":\"Ipsum ha\",\"box_cbore_dia\":\"Ut fugia\",\"box_cbore_length\":\"Aut dolo\",\"box_cbore_wall\":\"Voluptat\",\"box_f_repair\":\"Quia aut\",\"box_reface\":\"Rerum co\",\"box_hardbanding\":\"In sint\",\"box_condition\":\"Quis atq\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(775, '{\"serial\":\"Enim eni\",\"slot\":\"Hic iste\",\"pipe_wt\":\"Amet co\",\"pipe_od\":\"Aperiam\",\"pipe_emi\":\"Pariatur\",\"pipe_eai\":\"Voluptat\",\"pipe_utea\":\"Dolore c\",\"pipe_corr_in\":\"Qui dese\",\"pipe_corr_ext\":\"Quia ut\",\"pipe_ipc\":\"Est ver\",\"pipe_bent\":\"Ut sint\",\"pin_od\":\"Ut repre\",\"pin_id\":\"Deserunt\",\"pin_tong_space\":\"Reiciend\",\"pin_bevel\":\"Mollit q\",\"pin_seal\":\"Recusand\",\"pin_length\":\"Quia ita\",\"pin_neck\":\"In illo\",\"pin_cyl\":\"Et venia\",\"pin_nose\":\"Voluptat\",\"pin_lead\":\"Quae est\",\"pin_f_repair\":\"Tempora\",\"pin_reface\":\"Aperiam\",\"pin_hardbanding\":\"Repellen\",\"pin_condition\":\"Excepteu\",\"box_od\":\"Aut volu\",\"box_tong_space\":\"Dignissi\",\"box_bevel\":\"Cum ut r\",\"box_seal\":\"Dolor qu\",\"box_shldr\":\"Est qui\",\"box_length\":\"Aspernat\",\"box_cbore_dia\":\"Mollitia\",\"box_cbore_length\":\"Dolor co\",\"box_cbore_wall\":\"Est occ\",\"box_f_repair\":\"Dignissi\",\"box_reface\":\"Quae odi\",\"box_hardbanding\":\"Ullam re\",\"box_condition\":\"Et quia\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(776, '{\"serial\":\"Eaque oc\",\"slot\":\"Nostrud\",\"pipe_wt\":\"Consecte\",\"pipe_od\":\"Eos volu\",\"pipe_emi\":\"Dolores\",\"pipe_eai\":\"Providen\",\"pipe_utea\":\"Et eaque\",\"pipe_corr_in\":\"Est qui\",\"pipe_corr_ext\":\"Voluptat\",\"pipe_ipc\":\"Voluptat\",\"pipe_bent\":\"Lorem po\",\"pin_od\":\"In duis\",\"pin_id\":\"Et conse\",\"pin_tong_space\":\"Blanditi\",\"pin_bevel\":\"Sed non\",\"pin_seal\":\"Aspernat\",\"pin_length\":\"Necessit\",\"pin_neck\":\"Aliquip\",\"pin_cyl\":\"Atque co\",\"pin_nose\":\"Impedit\",\"pin_lead\":\"Maxime u\",\"pin_f_repair\":\"Adipisci\",\"pin_reface\":\"Est quo\",\"pin_hardbanding\":\"Eum exer\",\"pin_condition\":\"Consecte\",\"box_od\":\"Veniam\",\"box_tong_space\":\"Consecte\",\"box_bevel\":\"Quia at\",\"box_seal\":\"Et tempo\",\"box_shldr\":\"Consecte\",\"box_length\":\"Quisquam\",\"box_cbore_dia\":\"Quis qui\",\"box_cbore_length\":\"Est mag\",\"box_cbore_wall\":\"Elit nu\",\"box_f_repair\":\"Cumque d\",\"box_reface\":\"Odio per\",\"box_hardbanding\":\"Quod nis\",\"box_condition\":\"Praesent\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(777, '{\"serial\":\"Ipsa ad\",\"slot\":\"Amet no\",\"pipe_wt\":\"Eius ani\",\"pipe_od\":\"Rerum vi\",\"pipe_emi\":\"Eu earum\",\"pipe_eai\":\"Aute qui\",\"pipe_utea\":\"Necessit\",\"pipe_corr_in\":\"Optio v\",\"pipe_corr_ext\":\"Corporis\",\"pipe_ipc\":\"Corrupti\",\"pipe_bent\":\"Minim qu\",\"pin_od\":\"Voluptas\",\"pin_id\":\"Ullam do\",\"pin_tong_space\":\"Eum qui\",\"pin_bevel\":\"Quisquam\",\"pin_seal\":\"Non reru\",\"pin_length\":\"Perspici\",\"pin_neck\":\"Voluptat\",\"pin_cyl\":\"Iusto vo\",\"pin_nose\":\"Nostrum\",\"pin_lead\":\"Maxime m\",\"pin_f_repair\":\"Dolor de\",\"pin_reface\":\"Error te\",\"pin_hardbanding\":\"Inventor\",\"pin_condition\":\"Consecte\",\"box_od\":\"Velit ra\",\"box_tong_space\":\"Nemo del\",\"box_bevel\":\"Quis pos\",\"box_seal\":\"Eligendi\",\"box_shldr\":\"Similiqu\",\"box_length\":\"Neque do\",\"box_cbore_dia\":\"Quaerat\",\"box_cbore_length\":\"Aute lab\",\"box_cbore_wall\":\"Dolor ve\",\"box_f_repair\":\"Voluptas\",\"box_reface\":\"Eiusmod\",\"box_hardbanding\":\"Ea esse\",\"box_condition\":\"Autem si\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(778, '{\"serial\":\"In incid\",\"slot\":\"Odio dol\",\"pipe_wt\":\"Omnis qu\",\"pipe_od\":\"Et autem\",\"pipe_emi\":\"Dolore v\",\"pipe_eai\":\"Non repu\",\"pipe_utea\":\"Voluptas\",\"pipe_corr_in\":\"Eaque as\",\"pipe_corr_ext\":\"Dignissi\",\"pipe_ipc\":\"Eu autem\",\"pipe_bent\":\"Dolore u\",\"pin_od\":\"Fuga Od\",\"pin_id\":\"Voluptas\",\"pin_tong_space\":\"Nam nihi\",\"pin_bevel\":\"Beatae d\",\"pin_seal\":\"Tempora\",\"pin_length\":\"Quo quo\",\"pin_neck\":\"Magnam v\",\"pin_cyl\":\"Eveniet\",\"pin_nose\":\"Dolorem\",\"pin_lead\":\"Consecte\",\"pin_f_repair\":\"Laborum\",\"pin_reface\":\"Reprehen\",\"pin_hardbanding\":\"Tenetur\",\"pin_condition\":\"Aliqua\",\"box_od\":\"Veniam\",\"box_tong_space\":\"Modi cor\",\"box_bevel\":\"Quia quo\",\"box_seal\":\"Dolore f\",\"box_shldr\":\"Omnis et\",\"box_length\":\"Ut quis\",\"box_cbore_dia\":\"Velit vo\",\"box_cbore_length\":\"Eius sed\",\"box_cbore_wall\":\"Dolore a\",\"box_f_repair\":\"Harum ex\",\"box_reface\":\"Ea eum s\",\"box_hardbanding\":\"Dolor ve\",\"box_condition\":\"Sit vol\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 21, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(779, '{\"serial\":\"Aperiam\",\"slot\":\"Maxime c\",\"pin_od\":\"Eiusmod\",\"pin_id\":\"Autem do\",\"pin_tong_space\":\"Eu offic\",\"pin_bevel\":\"Animi d\",\"pin_seal\":\"Similiqu\",\"pin_length\":\"Aut unde\",\"pin_neck\":\"Quia dol\",\"pin_srg_length\":\"Qui et e\",\"pin_srg_dia\":\"Quis dol\",\"pin_f_repair\":\"Nam qui\",\"pin_reface\":\"Quis ab\",\"pin_condition\":\"Enim aut\",\"box_od\":\"Aut laud\",\"box_tong_space\":\"Nulla te\",\"box_bevel\":\"Adipisci\",\"box_seal\":\"Odio sun\",\"box_shldr\":\"Nisi omn\",\"box_length\":\"Maxime a\",\"box_cbore_dia\":\"Corrupti\",\"box_cbore_length\":\"Animi u\",\"box_bback_length\":\"Laudanti\",\"box_bback_dia\":\"Recusand\",\"box_f_repair\":\"Et nihil\",\"box_reface\":\"Occaecat\",\"box_condition\":\"Fugiat\",\"slip_groove\":\"Consequa\",\"overall_length\":\"Omnis do\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:09', '2024-06-23 09:35:09'),
(780, '{\"serial\":\"Officiis\",\"slot\":\"Accusant\",\"pin_od\":\"Eveniet\",\"pin_id\":\"Sed sint\",\"pin_tong_space\":\"Ex non l\",\"pin_bevel\":\"Est fug\",\"pin_seal\":\"Quia dol\",\"pin_length\":\"Quia ad\",\"pin_neck\":\"Laborum\",\"pin_srg_length\":\"Enim ali\",\"pin_srg_dia\":\"Voluptat\",\"pin_f_repair\":\"Placeat\",\"pin_reface\":\"Maiores\",\"pin_condition\":\"Temporib\",\"box_od\":\"Esse ex\",\"box_tong_space\":\"Quam rep\",\"box_bevel\":\"Dolores\",\"box_seal\":\"Velit ip\",\"box_shldr\":\"Nisi lor\",\"box_length\":\"Soluta a\",\"box_cbore_dia\":\"Dolorum\",\"box_cbore_length\":\"Sit expe\",\"box_bback_length\":\"Ex omnis\",\"box_bback_dia\":\"Velit et\",\"box_f_repair\":\"Rerum am\",\"box_reface\":\"Rerum ma\",\"box_condition\":\"Amet fu\",\"slip_groove\":\"Et in in\",\"overall_length\":\"Enim fug\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:09', '2024-06-23 09:35:09'),
(781, '{\"serial\":\"Nisi ips\",\"slot\":\"Autem at\",\"pin_od\":\"Eu dolor\",\"pin_id\":\"Dignissi\",\"pin_tong_space\":\"Ea qui t\",\"pin_bevel\":\"Eligendi\",\"pin_seal\":\"Est corp\",\"pin_length\":\"Maiores\",\"pin_neck\":\"Impedit\",\"pin_srg_length\":\"Adipisic\",\"pin_srg_dia\":\"Ea venia\",\"pin_f_repair\":\"A rem pl\",\"pin_reface\":\"Perferen\",\"pin_condition\":\"Quos sin\",\"box_od\":\"Ab est s\",\"box_tong_space\":\"Enim sed\",\"box_bevel\":\"Cupidata\",\"box_seal\":\"Itaque m\",\"box_shldr\":\"Et dicta\",\"box_length\":\"Aut odio\",\"box_cbore_dia\":\"Tempora\",\"box_cbore_length\":\"Sint sap\",\"box_bback_length\":\"Reiciend\",\"box_bback_dia\":\"Nihil ni\",\"box_f_repair\":\"Voluptas\",\"box_reface\":\"Magna re\",\"box_condition\":\"Minim ea\",\"slip_groove\":\"Velit co\",\"overall_length\":\"Quo duis\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(782, '{\"serial\":\"Temporib\",\"slot\":\"Natus se\",\"pin_od\":\"Libero e\",\"pin_id\":\"Architec\",\"pin_tong_space\":\"Delectus\",\"pin_bevel\":\"Ut exped\",\"pin_seal\":\"Maiores\",\"pin_length\":\"Ipsa ex\",\"pin_neck\":\"Commodi\",\"pin_srg_length\":\"Hic quos\",\"pin_srg_dia\":\"Excepteu\",\"pin_f_repair\":\"Tempore\",\"pin_reface\":\"Mollitia\",\"pin_condition\":\"Est non\",\"box_od\":\"A magnam\",\"box_tong_space\":\"Suscipit\",\"box_bevel\":\"In proid\",\"box_seal\":\"Ad amet\",\"box_shldr\":\"Maiores\",\"box_length\":\"Enim et\",\"box_cbore_dia\":\"Voluptat\",\"box_cbore_length\":\"Sit illo\",\"box_bback_length\":\"Facilis\",\"box_bback_dia\":\"Veritati\",\"box_f_repair\":\"Architec\",\"box_reface\":\"Harum co\",\"box_condition\":\"Eos cum\",\"slip_groove\":\"Voluptat\",\"overall_length\":\"Aut veni\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(783, '{\"serial\":\"Neque pa\",\"slot\":\"Accusant\",\"pin_od\":\"Sunt bl\",\"pin_id\":\"Ullam qu\",\"pin_tong_space\":\"Velit vo\",\"pin_bevel\":\"Necessit\",\"pin_seal\":\"Amet ut\",\"pin_length\":\"Aliquam\",\"pin_neck\":\"Dolorem\",\"pin_srg_length\":\"Ut adipi\",\"pin_srg_dia\":\"Reiciend\",\"pin_f_repair\":\"Nihil si\",\"pin_reface\":\"Corporis\",\"pin_condition\":\"Similiqu\",\"box_od\":\"Ut offic\",\"box_tong_space\":\"Et paria\",\"box_bevel\":\"Non pari\",\"box_seal\":\"Est quis\",\"box_shldr\":\"Qui offi\",\"box_length\":\"Omnis vo\",\"box_cbore_dia\":\"Quia har\",\"box_cbore_length\":\"Non aspe\",\"box_bback_length\":\"Debitis\",\"box_bback_dia\":\"Delectus\",\"box_f_repair\":\"Voluptat\",\"box_reface\":\"Id paria\",\"box_condition\":\"Rerum pe\",\"slip_groove\":\"Similiqu\",\"overall_length\":\"Rerum no\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(784, '{\"serial\":\"Consecte\",\"slot\":\"Providen\",\"pin_od\":\"Sit eu\",\"pin_id\":\"Iure fac\",\"pin_tong_space\":\"Exercita\",\"pin_bevel\":\"Et quia\",\"pin_seal\":\"Dolor ni\",\"pin_length\":\"Porro au\",\"pin_neck\":\"Nostrum\",\"pin_srg_length\":\"Laboris\",\"pin_srg_dia\":\"Aut ulla\",\"pin_f_repair\":\"Eum dolo\",\"pin_reface\":\"Nesciunt\",\"pin_condition\":\"Nesciunt\",\"box_od\":\"Vitae ex\",\"box_tong_space\":\"Et sint\",\"box_bevel\":\"Consequa\",\"box_seal\":\"Id venia\",\"box_shldr\":\"Sapiente\",\"box_length\":\"Dolorum\",\"box_cbore_dia\":\"Repudian\",\"box_cbore_length\":\"Officiis\",\"box_bback_length\":\"Sit occ\",\"box_bback_dia\":\"Doloremq\",\"box_f_repair\":\"Itaque p\",\"box_reface\":\"Laborum\",\"box_condition\":\"Cupidita\",\"slip_groove\":\"Quo aspe\",\"overall_length\":\"Est accu\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(785, '{\"serial\":\"Recusand\",\"slot\":\"Magni im\",\"pin_od\":\"Doloribu\",\"pin_id\":\"Voluptas\",\"pin_tong_space\":\"Aut mole\",\"pin_bevel\":\"Amet au\",\"pin_seal\":\"Amet no\",\"pin_length\":\"Modi con\",\"pin_neck\":\"A sit i\",\"pin_srg_length\":\"Maiores\",\"pin_srg_dia\":\"Ipsum e\",\"pin_f_repair\":\"Itaque l\",\"pin_reface\":\"Qui cons\",\"pin_condition\":\"Exercita\",\"box_od\":\"Minim eo\",\"box_tong_space\":\"Sed magn\",\"box_bevel\":\"Ab aliqu\",\"box_seal\":\"Autem ei\",\"box_shldr\":\"Aut id a\",\"box_length\":\"Ullamco\",\"box_cbore_dia\":\"Nam quae\",\"box_cbore_length\":\"Vel volu\",\"box_bback_length\":\"Velit v\",\"box_bback_dia\":\"Providen\",\"box_f_repair\":\"Adipisci\",\"box_reface\":\"Incidunt\",\"box_condition\":\"Rerum ad\",\"slip_groove\":\"Est qui\",\"overall_length\":\"Doloremq\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(786, '{\"serial\":\"Velit vo\",\"slot\":\"Totam qu\",\"pin_od\":\"Voluptat\",\"pin_id\":\"Quisquam\",\"pin_tong_space\":\"Magnam i\",\"pin_bevel\":\"In adipi\",\"pin_seal\":\"Consecte\",\"pin_length\":\"Itaque s\",\"pin_neck\":\"Nostrud\",\"pin_srg_length\":\"Dolor ut\",\"pin_srg_dia\":\"Suscipit\",\"pin_f_repair\":\"Voluptas\",\"pin_reface\":\"Tempore\",\"pin_condition\":\"Sed mini\",\"box_od\":\"In simil\",\"box_tong_space\":\"Eos sin\",\"box_bevel\":\"Sunt ni\",\"box_seal\":\"Molestia\",\"box_shldr\":\"Do place\",\"box_length\":\"Odio qui\",\"box_cbore_dia\":\"Necessit\",\"box_cbore_length\":\"Magnam q\",\"box_bback_length\":\"Unde aut\",\"box_bback_dia\":\"Adipisci\",\"box_f_repair\":\"Quia ven\",\"box_reface\":\"Voluptat\",\"box_condition\":\"Ea eaque\",\"slip_groove\":\"Sed labo\",\"overall_length\":\"Id dolor\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(787, '{\"serial\":\"Dolores\",\"slot\":\"Eveniet\",\"pin_od\":\"Incidunt\",\"pin_id\":\"Enim ess\",\"pin_tong_space\":\"Dolorem\",\"pin_bevel\":\"Repellen\",\"pin_seal\":\"Facilis\",\"pin_length\":\"Omnis en\",\"pin_neck\":\"Illum c\",\"pin_srg_length\":\"Eos est\",\"pin_srg_dia\":\"Odit vel\",\"pin_f_repair\":\"Tempor i\",\"pin_reface\":\"Et volup\",\"pin_condition\":\"Aut null\",\"box_od\":\"Mollitia\",\"box_tong_space\":\"Et omnis\",\"box_bevel\":\"Et vero\",\"box_seal\":\"Esse dig\",\"box_shldr\":\"Recusand\",\"box_length\":\"Tempora\",\"box_cbore_dia\":\"Rerum si\",\"box_cbore_length\":\"Sapiente\",\"box_bback_length\":\"Dignissi\",\"box_bback_dia\":\"Aperiam\",\"box_f_repair\":\"Ad hic a\",\"box_reface\":\"Eligendi\",\"box_condition\":\"Odio ali\",\"slip_groove\":\"Voluptat\",\"overall_length\":\"Impedit\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10'),
(788, '{\"serial\":\"Aspernat\",\"slot\":\"Blanditi\",\"pin_od\":\"Ut aut o\",\"pin_id\":\"Aperiam\",\"pin_tong_space\":\"Inventor\",\"pin_bevel\":\"Numquam\",\"pin_seal\":\"Maiores\",\"pin_length\":\"Incidunt\",\"pin_neck\":\"Sed reru\",\"pin_srg_length\":\"Voluptat\",\"pin_srg_dia\":\"Obcaecat\",\"pin_f_repair\":\"In in mi\",\"pin_reface\":\"Quisquam\",\"pin_condition\":\"Eiusmod\",\"box_od\":\"Quia ver\",\"box_tong_space\":\"Cupidita\",\"box_bevel\":\"Non volu\",\"box_seal\":\"Et enim\",\"box_shldr\":\"Unde qui\",\"box_length\":\"Nobis et\",\"box_cbore_dia\":\"Est quam\",\"box_cbore_length\":\"Ad dicta\",\"box_bback_length\":\"Sint nul\",\"box_bback_dia\":\"Dolor ex\",\"box_f_repair\":\"Impedit\",\"box_reface\":\"Et liber\",\"box_condition\":\"Doloremq\",\"slip_groove\":\"Voluptat\",\"overall_length\":\"Mollit t\"}', 'App\\Models\\Dashboard\\Tublar\\Tubs\\Tubs', 22, '2024-06-23 09:35:10', '2024-06-23 09:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `report_settings`
--

CREATE TABLE `report_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_settings`
--

INSERT INTO `report_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(8, 'title', 'Skills for Technology and Coring STC', '2024-05-01 07:51:48', '2024-05-01 07:51:48'),
(9, 'address', '5H/6 Al Nasr Street, New Maadi, Cairo, Egypt,', '2024-05-01 07:52:22', '2024-05-01 07:52:22'),
(10, 'phone1', '+201007666103', '2024-05-01 07:52:40', '2024-05-01 07:52:40'),
(11, 'phone2', '+201006617985+201006617985', '2024-05-01 07:52:54', '2024-05-01 07:52:54'),
(12, 'email1', 'khaled.soliman@stc-eg.com', '2024-05-01 07:53:27', '2024-05-01 07:53:27'),
(13, 'email2', 'abbas@stc-eg.com', '2024-05-01 07:53:42', '2024-05-01 07:53:42'),
(14, 'fax', '+20225175939', '2024-05-01 07:54:06', '2024-05-01 07:54:06'),
(15, 'website', 'www.stc-eg.com', '2024-05-01 07:54:23', '2024-05-01 07:54:23'),
(16, 'Commercial Registration No', '76451', '2024-05-01 07:54:48', '2024-05-01 07:54:48'),
(17, 'EGPC Registration No', '122 / Dec 2022', '2024-05-01 07:55:09', '2024-05-01 07:55:09'),
(18, 'Doc Ref', NULL, '2024-05-01 07:55:20', '2024-05-01 07:55:20'),
(19, 'Tax ID Number', '479-427-860', '2024-05-01 07:55:36', '2024-05-01 07:55:36'),
(20, 'headerImage', NULL, '2024-05-01 07:56:51', '2024-05-01 10:38:05'),
(21, 'footerImage', NULL, '2024-05-01 07:59:50', '2024-05-01 07:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `rig`
--

CREATE TABLE `rig` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rig`
--

INSERT INTO `rig` (`id`, `name`, `company_id`, `location`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'rig10', 1, 'cNostrum voluptas hic', NULL, NULL, '2024-03-18 05:26:55'),
(2, 'rig2', 1, 'Quam incididunt dolo', NULL, NULL, '2024-02-08 04:32:23'),
(5, 'rig15', 3, 'Architecto soluta ni', NULL, NULL, '2024-02-08 04:33:12'),
(7, 'rig12', 3, 'Reprehenderit elit', NULL, NULL, '2024-02-08 04:32:58'),
(10, 'rig5', 1, 'badr', NULL, '2024-01-01 05:29:28', '2024-01-28 17:56:57'),
(13, 'rig11', 8, 'Officia ullamco est', NULL, '2024-02-04 07:05:12', '2024-02-08 04:32:37'),
(14, 'rig20', 8, 'egypt alex', NULL, '2024-02-04 10:34:20', '2024-02-08 04:33:24'),
(15, 'Stout Bass Traders', 8, 'Quis id', NULL, '2024-06-21 00:44:36', '2024-06-21 00:44:36'),
(16, 'Sullivan Landry LLC', 1, 'Dolorem', NULL, '2024-06-21 00:44:45', '2024-06-21 00:44:45'),
(19, 'Velez and Carney Plc', 3, 'Aut amet', NULL, '2024-06-22 01:40:34', '2024-06-22 01:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(30, 'Operator', 'web', '2024-06-11 04:13:36', '2024-06-11 04:13:36'),
(31, 'Owner', 'web', '2024-06-11 04:28:05', '2024-06-11 04:28:05'),
(34, 'admin', 'web', '2024-06-11 04:46:07', '2024-06-11 04:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 31),
(2, 31),
(3, 31),
(4, 31),
(5, 31),
(5, 34),
(6, 30),
(6, 31),
(6, 34),
(7, 30),
(7, 31),
(7, 34),
(8, 30),
(8, 31),
(8, 34),
(9, 30),
(9, 31),
(9, 34),
(10, 31),
(10, 34),
(11, 31),
(11, 34),
(12, 30),
(12, 31),
(12, 34),
(13, 30),
(13, 31),
(13, 34),
(14, 30),
(14, 31),
(14, 34),
(15, 30),
(15, 31),
(15, 34),
(16, 30),
(16, 31),
(16, 34),
(17, 30),
(17, 31),
(17, 34),
(18, 30),
(18, 31),
(18, 34),
(20, 30),
(20, 31),
(20, 34),
(21, 31),
(22, 31),
(23, 30),
(23, 31),
(23, 34),
(24, 30),
(24, 31),
(24, 34),
(25, 30),
(25, 31),
(25, 34),
(26, 30),
(26, 31),
(26, 34),
(27, 30),
(27, 31),
(27, 34),
(28, 30),
(28, 31),
(28, 34),
(29, 30),
(29, 31),
(29, 34),
(30, 30),
(30, 31),
(30, 34),
(31, 30),
(31, 31),
(31, 34),
(32, 30),
(32, 31),
(32, 34),
(33, 30),
(33, 31),
(33, 34),
(34, 30),
(34, 31),
(34, 34),
(35, 30),
(35, 31),
(35, 34),
(36, 30),
(36, 31),
(36, 34),
(37, 30),
(37, 31),
(37, 34),
(38, 30),
(38, 31),
(38, 34),
(39, 30),
(39, 31),
(39, 34),
(40, 30),
(40, 31),
(40, 34),
(41, 30),
(41, 31),
(41, 34),
(42, 30),
(42, 31),
(42, 34),
(43, 30),
(43, 31),
(43, 34),
(44, 30),
(44, 31),
(44, 34),
(45, 30),
(45, 31),
(45, 34),
(46, 30),
(46, 31),
(46, 34),
(47, 30),
(47, 31),
(47, 34),
(50, 30),
(50, 31),
(50, 34),
(51, 30),
(51, 31),
(51, 34),
(52, 30),
(52, 31),
(52, 34),
(53, 30),
(53, 31),
(53, 34),
(54, 30),
(54, 31),
(54, 34),
(55, 30),
(55, 31),
(55, 34),
(56, 30),
(56, 31),
(56, 34),
(57, 30),
(57, 31),
(57, 34),
(58, 30),
(58, 31),
(58, 34),
(59, 30),
(59, 31),
(59, 34),
(60, 31),
(60, 34),
(61, 31),
(61, 34),
(62, 31),
(62, 34),
(63, 31),
(63, 34),
(64, 31),
(64, 34),
(65, 31),
(65, 34),
(66, 31),
(66, 34),
(87, 31),
(87, 34),
(88, 30),
(88, 31),
(88, 34),
(89, 30),
(89, 31),
(89, 34),
(93, 30),
(93, 31),
(93, 34),
(94, 30),
(94, 31),
(94, 34),
(96, 30),
(96, 31),
(96, 34),
(97, 30),
(97, 31),
(97, 34),
(98, 30),
(98, 31),
(98, 34),
(99, 30),
(99, 31),
(99, 34),
(100, 30),
(100, 31),
(100, 34),
(101, 30),
(101, 31),
(101, 34),
(102, 30),
(102, 31),
(102, 34),
(103, 30),
(103, 31),
(103, 34);

-- --------------------------------------------------------

--
-- Table structure for table `shakle_size`
--

CREATE TABLE `shakle_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `swl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shakle_size`
--

INSERT INTO `shakle_size` (`id`, `size`, `swl`, `created_at`, `updated_at`) VALUES
(4, '1/4', '0.5', '2024-02-07 07:25:14', '2024-02-07 07:25:14'),
(5, '5/16', '0.75', '2024-02-07 07:25:55', '2024-02-07 07:25:55'),
(6, '3/8', '1', '2024-02-07 07:28:38', '2024-02-07 07:28:38'),
(7, '1/2', '2', '2024-02-07 07:28:48', '2024-02-07 07:28:48'),
(8, '5/8', '3.25', '2024-02-07 07:29:13', '2024-02-07 07:29:13'),
(9, '3/4', '4.75', '2024-02-07 07:29:26', '2024-02-07 07:29:26'),
(10, '7/8', '6.5', '2024-02-07 07:29:41', '2024-02-07 07:29:41'),
(11, '1', '8.5', '2024-02-07 07:29:59', '2024-02-07 07:29:59'),
(12, '1-1/8', '9.5', '2024-02-07 07:30:14', '2024-02-07 07:31:02'),
(13, '1-1/4', '12', '2024-02-07 07:30:30', '2024-02-07 07:30:30'),
(14, '1-3/8', '13.5', '2024-02-07 07:30:42', '2024-02-07 07:30:51'),
(15, '1-1/2', '17', '2024-02-07 07:31:21', '2024-02-07 07:31:21'),
(16, '1-3/4', '25', '2024-02-07 07:31:33', '2024-02-07 07:31:33'),
(17, '2', '35', '2024-02-07 07:31:40', '2024-02-07 07:31:40'),
(18, '2-1/2', '55', '2024-02-07 07:31:53', '2024-02-07 07:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `order` int(11) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `name`, `route`, `type`, `status`, `order`, `parent_id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'companies', NULL, NULL, 'Active', 1, NULL, 'ph-graduation-cap', NULL, NULL),
(2, 'Reports', NULL, NULL, 'Active', 2, NULL, 'bi bi-clipboard2-check-fill', NULL, NULL),
(3, 'Rigs', NULL, NULL, 'Active', 3, NULL, 'ph-buildings', NULL, NULL),
(4, 'Summary', NULL, NULL, 'Active', 4, NULL, 'bx bx-collection', NULL, NULL),
(5, 'Job Ticket', NULL, NULL, 'Active', 5, NULL, 'ph-ticket', NULL, NULL),
(6, 'Settings', NULL, NULL, 'Active', 6, NULL, 'ph-wrench', NULL, NULL),
(13, 'view companies', 'company.index', NULL, 'Active', 1, 1, NULL, NULL, NULL),
(14, 'Mpi Reports', '', NULL, 'Active', 1, 2, NULL, NULL, NULL),
(15, 'Lifting Reports', '', NULL, 'Active', 2, 2, '', NULL, NULL),
(16, 'Tublar Reports', '', NULL, 'Active', 3, 2, '', NULL, NULL),
(17, 'View Rigs', 'rig.index', NULL, 'Active', 1, 3, NULL, NULL, NULL),
(18, 'View JobTicket Numbers', 'order.index', NULL, 'Active', 1, 5, NULL, NULL, NULL),
(19, 'View JobTickets', 'jobTicket.index', NULL, 'Active', 2, 5, NULL, NULL, NULL),
(20, 'Create JobTicket', 'jobTicket.create', NULL, 'Active', 3, 5, NULL, NULL, NULL),
(22, 'Users', 'users.index', NULL, 'Active', 2, 6, NULL, NULL, NULL),
(23, 'Report Settings', 'report_settings.index', NULL, 'Active', 3, 6, NULL, NULL, NULL),
(24, 'Roles', 'dashboard.roles.index', NULL, 'Active', 4, 6, NULL, NULL, NULL),
(25, 'View MPI Reports', 'mpi.reports.index', NULL, 'Active', 1, 14, NULL, NULL, NULL),
(26, 'Create MPI Reports', 'mpi.reports.create', NULL, 'Active', 2, 14, NULL, NULL, NULL),
(27, 'Wire Reports', '', NULL, 'Active', 1, 15, NULL, NULL, NULL),
(28, 'Shakles Reports', '', NULL, 'Active', 2, 15, NULL, NULL, NULL),
(29, 'Thorough Examination', '', NULL, 'Active', 3, 15, NULL, NULL, NULL),
(30, 'Tools Reports', '', NULL, 'Active', 1, 16, NULL, NULL, NULL),
(31, 'Mud Reports', '', NULL, 'Active', 2, 16, NULL, NULL, NULL),
(32, 'Jar Reports', '', NULL, 'Active', 3, 16, NULL, NULL, NULL),
(33, 'Drill Pipe', '', NULL, 'Active', 4, 16, NULL, NULL, NULL),
(34, 'Drill Collar', '', NULL, 'Active', 5, 16, NULL, NULL, NULL),
(35, 'Heavy Weight', '', NULL, 'Active', 6, 16, NULL, NULL, NULL),
(36, 'view wire reports', 'examination.reports.index', 'wire', 'Active', 1, 27, NULL, NULL, NULL),
(37, 'create wire report', 'examination.reports.create', 'wire', 'Active', 2, 27, NULL, NULL, NULL),
(38, 'view shakles reports', 'examination.reports.index', 'shakle', 'Active', 1, 28, NULL, NULL, NULL),
(39, 'create shakle report', 'examination.reports.create', 'shakle', 'Active', 2, 28, NULL, NULL, NULL),
(40, 'view shakle sizes', 'examination.shaklesize.index', '', 'Active', 3, 28, NULL, NULL, NULL),
(41, 'view thorough examinatoin', 'examination.reports.index', 'thorough', 'Active', 1, 29, NULL, NULL, NULL),
(42, 'create thorough examinatoin', 'examination.reports.create', 'thorough', 'Active', 2, 29, NULL, NULL, NULL),
(43, 'pin * pin', NULL, NULL, 'Active', 1, 30, NULL, NULL, NULL),
(44, 'box * pin', NULL, NULL, 'Active', 2, 30, NULL, NULL, NULL),
(45, 'box * box', NULL, NULL, 'Active', 3, 30, NULL, NULL, NULL),
(46, 'view mud reports', 'mud-jar.reports.index', 'mud', 'Active', 1, 31, NULL, NULL, NULL),
(47, 'create mud reports', 'mud-jar.reports.create', 'mud', 'Active', 2, 31, NULL, NULL, NULL),
(48, 'view jar reports', 'mud-jar.reports.index', 'jar', 'Active', 1, 32, NULL, NULL, NULL),
(49, 'create jar report', 'mud-jar.reports.create', 'jar', 'Active', 2, 32, NULL, NULL, NULL),
(50, 'view drill pipe', 'tubs.reports.index', 'drillpipe', 'Active', 1, 33, NULL, NULL, NULL),
(51, 'create drill pipe', 'tubs.reports.create', 'drillpipe', 'Active', 2, 33, NULL, NULL, NULL),
(52, 'view drill collar', 'tubs.reports.index', 'drillcollar', 'Active', 1, 34, NULL, NULL, NULL),
(53, 'create drill collar', 'tubs.reports.create', 'drillcollar', 'Active', 2, 34, NULL, NULL, NULL),
(124, 'view heavy weight', 'tubs.reports.index', 'heavyweight', 'Active', 1, 35, NULL, NULL, NULL),
(125, 'create heavy weight', 'tubs.reports.create', 'heavyweight', 'Active', 2, 35, NULL, NULL, NULL),
(126, 'view pin * pin', 'tools.reports.index', 'pin*pin', 'Active', 1, 43, NULL, NULL, NULL),
(127, 'view box * pin', 'tools.reports.index', 'box*pin', 'Active', 1, 44, NULL, NULL, NULL),
(128, 'view box * box', 'tools.reports.index', 'box*box', 'Active', 1, 45, NULL, NULL, NULL),
(129, 'create pin * pin', 'tools.reports.create', 'pin*pin', 'Active', 2, 43, NULL, NULL, NULL),
(130, 'create box * pin', 'tools.reports.create', 'box*pin', 'Active', 2, 44, NULL, NULL, NULL),
(131, 'create box * box', 'tools.reports.create', 'box*box', 'Active', 2, 45, NULL, NULL, NULL),
(133, 'Tublar Summaries', '', NULL, 'Active', 1, 4, '', NULL, NULL),
(134, 'Drill Pipe Summary', '', NULL, 'Active', 1, 133, NULL, NULL, NULL),
(135, 'Drill Collar Summary', '', NULL, 'Active', 2, 133, NULL, NULL, NULL),
(136, 'Heavy Weight Summary', '', NULL, 'Active', 2, 133, NULL, NULL, NULL),
(137, 'View HW Summary', 'tubs.summary.index', 'heavyweight', 'Active', 1, 136, NULL, NULL, NULL),
(138, 'Create HW Summary', 'tubs.summary.create', 'heavyweight', 'Active', 2, 136, NULL, NULL, NULL),
(139, 'View DP Summary', 'tubs.summary.index', 'drillpipe', 'Active', 1, 134, NULL, NULL, NULL),
(140, 'Create DP Summary', 'tubs.summary.create', 'drillpipe', 'Active', 2, 134, NULL, NULL, NULL),
(141, 'View DC Summary', 'tubs.summary.index', 'drillcollar', 'Active', 1, 135, NULL, NULL, NULL),
(142, 'Create DC Summary', 'tubs.summary.create', 'drillcollar', 'Active', 2, 135, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thorough_examination`
--

CREATE TABLE `thorough_examination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `manufature_date` date DEFAULT NULL,
  `swl` varchar(255) DEFAULT NULL,
  `last_exam_date` date DEFAULT NULL,
  `original_cert_number` varchar(255) DEFAULT NULL,
  `original_cert_date` date DEFAULT NULL,
  `cert_body_name` varchar(255) DEFAULT NULL,
  `desc_header` varchar(255) DEFAULT NULL,
  `desc_content` varchar(255) DEFAULT NULL,
  `diameter` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `thorough_type` varchar(255) DEFAULT NULL,
  `first_exam_after` tinyint(4) DEFAULT NULL,
  `carried_out` varchar(255) NOT NULL,
  `has_equipment` tinyint(4) DEFAULT NULL,
  `defect_note` varchar(255) DEFAULT NULL,
  `accept` tinyint(4) DEFAULT NULL,
  `danger` tinyint(4) DEFAULT NULL,
  `danger_date` date DEFAULT NULL,
  `next_exam` date DEFAULT NULL,
  `carried_exam` varchar(255) DEFAULT NULL,
  `carried_note` varchar(255) DEFAULT NULL,
  `safe_equipment` tinyint(4) DEFAULT NULL,
  `desc_type` varchar(255) DEFAULT NULL,
  `perfect_note` varchar(255) DEFAULT NULL,
  `desc_manufature` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diameter_unit` varchar(255) DEFAULT NULL,
  `length_unit` varchar(255) DEFAULT NULL,
  `shaklesize_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thorough_examination`
--

INSERT INTO `thorough_examination` (`id`, `date`, `report_number`, `serial`, `qty`, `manufature_date`, `swl`, `last_exam_date`, `original_cert_number`, `original_cert_date`, `cert_body_name`, `desc_header`, `desc_content`, `diameter`, `length`, `description`, `location`, `type`, `thorough_type`, `first_exam_after`, `carried_out`, `has_equipment`, `defect_note`, `accept`, `danger`, `danger_date`, `next_exam`, `carried_exam`, `carried_note`, `safe_equipment`, `desc_type`, `perfect_note`, `desc_manufature`, `user_id`, `order_id`, `created_at`, `updated_at`, `diameter_unit`, `length_unit`, `shaklesize_id`) VALUES
(11, '1991-11-01', 'STC-6/24-S_T-Rig5-SHAKLE-2', '407', '811', '2015-08-04', NULL, '1984-11-04', '3', '2009-02-25', 'Fiona Maddox', 'Iusto ut sequi alias', NULL, NULL, NULL, NULL, NULL, 'shakle', NULL, 1, 'interval_year', 1, 'r4r4r4r4r', 1, 1, '2024-02-10', '1992-04-30', '[\"visual_inspection\"]', 'vfxrgxzf', 1, 'Ea delectus et ut q', 'vcxvrfgxzvd', 'Odit elit duis volu', 1, 10, '2024-02-07 12:02:56', '2024-02-12 11:48:37', NULL, NULL, 9),
(14, '2004-07-06', 'STC-3/24-ECDC-Rig5-SHAKLE-2', '329', '612', '2010-11-24', NULL, '2017-11-15', '211', '1978-01-30', 'Lila Kane', 'Quis in amet sed qu', NULL, NULL, NULL, NULL, NULL, 'shakle', NULL, 0, 'interval_year', 0, NULL, 0, 0, NULL, '2005-01-05', '[\"finction_test\"]', NULL, 0, 'Autem distinctio Du', NULL, 'Voluptatibus aliquid', 1, 5, '2024-02-08 10:01:06', '2024-02-08 10:57:54', NULL, NULL, 12),
(17, '2008-08-09', 'STC-3/24-ECDC-Rig5-WIRE-1', '216', '464', '1989-08-29', 'khater', '1987-07-12', '159', '2007-04-11', 'Alan Ratliff', 'Culpa excepturi repu', 'Ex laboriosam dolor', NULL, NULL, NULL, 'Magnam minima tempor', 'wire', NULL, 1, 'interval_year', 1, 'vcv', 1, 1, '2024-02-21', '2009-02-08', '[\"visual_inspection\"]', 'vcvc', 1, NULL, 'xssds', NULL, 1, 5, '2024-02-12 11:33:02', '2024-05-13 02:50:13', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(44, '1975-06-02', 'STC-9/24-ECDC-Rig10-WIRE-1', '970', '388', '2004-06-06', 'Vel ut quae debitis', '2006-05-21', '658', '2007-11-18', 'Breanna Cortez', 'Saepe distinctio Ins', 'Sint in suscipit con', NULL, NULL, NULL, 'Proident iure eum d', 'wire', NULL, 0, 'circumstances', 1, NULL, 0, 1, NULL, '1975-12-01', '[\"visual_inspection\"]', NULL, 1, NULL, NULL, NULL, 1, 6, '2024-03-08 06:26:02', '2024-03-18 05:24:28', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(66, '2021-02-21', 'STC-10/24-Quincy_Cunningham-Rig5-EARUM PR-2', '919', '572', '2020-02-24', 'Deserunt', '1979-09-12', '103', '1977-08-23', 'Wilma Wiley', NULL, NULL, NULL, NULL, 'Iste pla', NULL, 'thorough', 'Earum pr', 1, 'interval_year', 1, 'Deserunt', 1, 1, '2003-03-25', '2022-02-20', '[\"visual_inspection\"]', 'Ut id i', 0, NULL, 'Proident', NULL, 1, 14, '2024-06-05 02:30:46', '2024-06-05 02:30:46', NULL, NULL, NULL),
(67, '2005-03-09', 'STC-9/24-ECDC-Rig12-THOROUGH-0', '252', '493', '1993-09-25', 'Dicta id', '2009-12-02', '269', '2018-02-15', 'Fiona Beck', NULL, NULL, NULL, NULL, 'Facilis', NULL, 'thorough', 'Sit quo', 0, 'interval_year', 1, 'Deserunt', 0, 1, '2003-03-25', '2005-09-08', '[\"visual_inspection\"]', 'Ut id i', 0, NULL, 'Proident', NULL, 1, 13, '2024-06-05 02:31:25', '2024-06-05 02:34:20', NULL, NULL, NULL),
(70, '2005-03-09', 'STC-9/24-ECDC-Rig12-SIT QUO-2', NULL, '493', '1993-09-25', 'Dicta id', '2009-12-02', '269', '2018-02-15', 'Fiona Beck', NULL, NULL, NULL, NULL, 'Facilis', NULL, 'thorough', 'Sit quo', 0, 'interval_year', 1, 'Deserunt', 1, 1, '2003-03-25', '2006-03-08', '[\"visual_inspection\"]', 'Ut id i', 0, NULL, 'Proident', NULL, 1, 13, '2024-06-09 06:49:52', '2024-06-09 06:49:52', NULL, NULL, NULL),
(71, '2005-03-09', 'STC-9/24-ECDC-Rig12-SIT QUO-3', NULL, '493', '1993-09-25', 'Dicta id', '2009-12-02', '269', '2018-02-15', 'Fiona Beck', NULL, NULL, NULL, NULL, 'Facilis', NULL, 'thorough', 'Sit quo', 0, 'interval_year', 1, 'Deserunt', 0, 1, '2003-03-25', '2006-03-08', '[\"visual_inspection\"]', 'Ut id i', 0, NULL, 'Proident', NULL, 1, 13, '2024-06-09 06:50:19', '2024-06-09 06:50:19', NULL, NULL, NULL),
(75, '1978-07-26', 'STC-11/24-Test Comapny-Rig15-WIRE-1', NULL, 'test', '2022-05-11', 'test', '2007-01-03', 'test', '2021-08-20', 'test', 'test', 'test', 'test', 'test', NULL, 'test', 'wire', NULL, 1, 'interval_month', 0, 'test', 1, 0, '2024-06-28', '1979-01-25', '[\"visual_inspection\",\"function_test\",\"load_test\",\"mpi\"]', 'test', 0, NULL, 'test', NULL, 1, 19, '2024-06-23 09:10:52', '2024-06-23 09:10:52', 'MM', 'M', NULL),
(76, '1987-06-11', 'STC-10/24-S T-Rig15-SHAKLE-1', NULL, 'test', '1988-10-22', NULL, '1998-07-24', 'test', '2001-05-11', 'test', 'test', NULL, NULL, NULL, NULL, NULL, 'shakle', NULL, 1, 'interval_month', 0, 'test', 1, 0, '2024-06-21', '1987-12-10', '[\"visual_inspection\"]', 'test', 0, 'test', 'test', 'test', 1, 18, '2024-06-23 09:12:06', '2024-06-23 09:12:06', NULL, NULL, 9),
(77, '2010-08-29', 'STC-9/24-ECDC-Rig12-TEST-4', NULL, 'test', '2002-04-07', 'test', '2007-08-09', 'test', '1999-08-02', 'test', NULL, NULL, NULL, NULL, 'test', NULL, 'thorough', 'test', 0, 'interval_month', 0, 'test', 1, 0, '2024-06-12', '2011-02-28', '[\"function_test\"]', 'test', 0, NULL, 'test', NULL, 1, 13, '2024-06-23 09:13:25', '2024-06-23 09:13:25', NULL, NULL, NULL),
(78, '1989-08-17', 'STC-10/24-Quincy_Cunningham-Rig5-WIRE-1', NULL, '127', '1993-05-28', 'Porro ut', '2006-12-15', '374', '2015-03-14', 'James Lawrence', 'Odit bla', 'Ipsa no', NULL, NULL, NULL, 'Ex dolor', 'wire', NULL, 1, 'interval_month', 0, 'hhfhhfh', 1, 0, '2024-06-20', '1990-02-16', '[\"visual_inspection\",\"function_test\",\"load_test\"]', 'wew', 0, NULL, 'vcjjfjfj', NULL, 1, 14, '2024-06-30 07:19:25', '2024-06-30 07:19:25', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(79, '1989-08-17', 'STC-10/24-Quincy_Cunningham-Rig5-WIRE-2', NULL, '127', '1993-05-28', 'Porro ut', '2006-12-15', '374', '2015-03-14', 'James Lawrence', 'Odit bla', 'Ipsa no', NULL, NULL, NULL, 'Ex dolor', 'wire', NULL, 1, 'interval_month', 0, 'hhfhhfh', 1, 0, '2024-06-20', '1990-02-16', '[\"visual_inspection\",\"function_test\",\"load_test\"]', 'wew', 0, NULL, 'vcjjfjfj', NULL, 1, 14, '2024-06-30 07:20:56', '2024-06-30 07:20:56', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(80, '1989-08-17', 'STC-10/24-Quincy_Cunningham-Rig5-WIRE-3', NULL, '127', '1993-05-28', 'Porro ut', '2006-12-15', '374', '2015-03-14', 'James Lawrence', 'Odit bla', 'Ipsa no', NULL, NULL, NULL, 'Ex dolor', 'wire', NULL, 1, 'interval_month', 0, 'hhfhhfh', 1, 0, '2024-06-20', '1990-02-16', '[\"visual_inspection\",\"function_test\",\"load_test\"]', 'wew', 0, NULL, 'vcjjfjfj', NULL, 1, 14, '2024-06-30 07:22:33', '2024-06-30 07:22:33', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(81, '1989-08-17', 'STC-10/24-Quincy_Cunningham-Rig5-WIRE-4', NULL, '127', '1993-05-28', 'Porro ut', '2006-12-15', '374', '2015-03-14', 'James Lawrence', 'Odit bla', 'Ipsa no', NULL, NULL, NULL, 'Ex dolor', 'wire', NULL, 1, 'interval_month', 0, 'hhfhhfh', 1, 0, '2024-06-20', '1990-02-16', '[\"visual_inspection\",\"function_test\",\"load_test\"]', 'wew', 0, NULL, 'vcjjfjfj', NULL, 1, 14, '2024-06-30 07:22:42', '2024-06-30 07:22:42', 'Choose Diameter Unit', 'Choose Length Unit', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `work_order` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fin_date` date DEFAULT NULL,
  `spec` varchar(255) NOT NULL,
  `procedure` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`methods`)),
  `summary` varchar(255) NOT NULL,
  `accept` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `report_number`, `work_order`, `status`, `date`, `fin_date`, `spec`, `procedure`, `type`, `methods`, `summary`, `accept`, `serial`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(39, 'STC-10/24-Eugenia_Hutchinson-Rig15-BOX*BOX-1', 'Animi u', 'Tenetur', '1993-05-21', '2008-11-13', 'Est mod', 'Officia', 'box*box', '[\"visual\",\"boroscopic\",\"dimensional\",\"mag particle\",\"eddy current\",\"liquid penet\",\"ultrasonic\"]', 'Voluptat', 2, NULL, 1, 15, '2024-06-09 07:12:38', '2024-06-09 07:12:38'),
(40, 'STC-10/24-Eugenia_Hutchinson-Rig15-BOX*BOX-2', 'Animi u', 'Tenetur', '1993-05-21', '2008-11-13', 'Est mod', 'Officia', 'box*box', '[\"visual\",\"boroscopic\",\"dimensional\",\"mag particle\",\"eddy current\",\"liquid penet\",\"ultrasonic\"]', 'Voluptat', 2, NULL, 1, 15, '2024-06-09 07:35:22', '2024-06-09 07:35:22'),
(41, 'STC-9/24-S_T-Rig2-PIN*PIN-1', 'test', 'test', '1972-07-26', '1976-03-15', 'test', 'test', 'pin*pin', '[\"visual\",\"boroscopic\",\"dimensional\"]', 'test', 3, NULL, 1, 7, '2024-06-23 09:16:16', '2024-06-23 09:16:16'),
(42, 'STC-10/24-S T-Rig15-BOX*PIN-1', 'Voluptas', 'Praesent', '1984-03-28', '2024-01-18', 'Deserunt', 'Perspici', 'box*pin', '[\"dimensional\"]', 'Corrupti', 2, NULL, 1, 18, '2024-06-23 09:26:04', '2024-06-23 09:26:04'),
(43, 'STC-9/24-ECDC-Rig12-BOX*BOX-1', 'Delectus', 'Anim min', '1982-09-07', '2012-01-24', 'Et exerc', 'Voluptas', 'box*box', '[\"ultrasonic\"]', 'Mollit m', 1, NULL, 1, 13, '2024-06-23 09:27:43', '2024-06-23 09:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `tools_extensions`
--

CREATE TABLE `tools_extensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools_extensions`
--

INSERT INTO `tools_extensions` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'ok', 'OK', NULL, NULL),
(2, 'GT', 'Galled Thread', NULL, NULL),
(3, 'TP', 'Thread Pitting', NULL, NULL),
(4, 'TD', 'Thread Damage', NULL, NULL),
(5, 'SP', 'Seal Pitting', NULL, NULL),
(6, 'SD', 'Seal Damage', NULL, NULL),
(7, 'CR', 'Crack', NULL, NULL),
(8, 'SRG', 'Stress Relief Groove', NULL, NULL),
(9, 'B.B', 'Bore Back', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translation_keys`
--

CREATE TABLE `translation_keys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translation_keys`
--

INSERT INTO `translation_keys` (`id`, `key`, `name`, `created_at`, `updated_at`) VALUES
(1, 'en', 'english', NULL, NULL),
(2, 'ar', 'arabic', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tublar_summary`
--

CREATE TABLE `tublar_summary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `st_date` date NOT NULL,
  `fin_date` date NOT NULL,
  `contract_num` varchar(255) DEFAULT NULL,
  `report_num` varchar(255) DEFAULT NULL,
  `customer_sign` varchar(255) DEFAULT NULL,
  `comments` varchar(255) NOT NULL,
  `sheets` varchar(255) DEFAULT NULL,
  `work_order` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `colour_code` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`colour_code`)),
  `details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`details`)),
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`description`)),
  `accept` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tublar_summary`
--

INSERT INTO `tublar_summary` (`id`, `st_date`, `fin_date`, `contract_num`, `report_num`, `customer_sign`, `comments`, `sheets`, `work_order`, `type`, `colour_code`, `details`, `description`, `accept`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '1996-09-10', '1987-06-11', 'Minim et molestiae nc', 'STC-9/24-S_T-Rig12-DRILLCOLLAR-1', NULL, 'Modi qui facilis aut', 'Cillum labore aliqui', 'Eos voluptate id ut', 'drillcollar', '{\"good\": \"Sit possimus asper\", \"scrap\": \"Provident suscipit\", \"shop_rep\": \"Veniam aut at irure\", \"field_rep\": \"Sed dolor rerum ut v\"}', '{\"conn\": \"Nemo eiusmod qui ill\", \"size\": \"Sint aliquip ratione\", \"spec\": \"Aspernatur ea do ab\", \"type\": \"Omnis quis recusanda\", \"nom_id\": \"Anim accusantium rep\", \"nom_od\": \"Enim dignissimos qui\", \"weight\": \"Temporibus illum te\", \"hardbrand\": \"Porro quia inventore\", \"insp_type\": \"Aliquam pariatur Ni\"}', '{\"scrap\": \"Magna dolor ullamco\", \"blocked\": \"Aut rerum quia praes\", \"crooked\": \"Ut sit officia excep\", \"shop_rep\": \"Sequi impedit susci\", \"field_rep\": \"Cupidatat non sint\", \"acc_joints\": \"Enim id numquam reru\", \"box_damage\": \"Eum adipisci eos ex\", \"pin_damage\": \"Velit quaerat nisi\", \"rej_joints\": \"Nulla enim reprehend\", \"box_preface\": \"Vero nihil quod quod\", \"pin_preface\": \"Eiusmod labore conse\", \"straightened\": \"Illo rerum qui possi\", \"pin_box_damage\": \"Non ea quia culpa en\", \"inspected_joints\": \"Suscipit velit null\"}', NULL, 1, 17, '2024-03-17 18:07:39', '2024-03-18 05:30:30'),
(4, '1978-09-17', '2003-03-22', 'Aut tempore suscipi', 'STC-9/24-ECDC-Rig10-TUBING-2', NULL, 'Et quisquam veniam', 'Voluptate pariatur', 'Vel fugiat in sit v', 'tubing', '{\"new\": \"Nostrud rerum incidi\", \"used\": \"Magna nostrum omnis\", \"damaged1\": \"Hic aliquam ea excep\", \"damaged2\": \"Magnam omnis minus n\", \"damaged_body\": \"Reiciendis asperiore\"}', '{\"conn\": \"Est pariatur Aliqu\", \"size\": \"Quisquam necessitati\", \"spec\": \"Vel non quia eu quib\", \"type\": \"Maiores sed reprehen\", \"grade\": \"Deleniti sapiente ea\", \"range\": \"Inventore tempore a\", \"weight\": \"Magna aperiam ad con\", \"insp_type\": \"Delectus adipisicin\", \"wall_thick\": \"Dolorem ut iusto cil\"}', '{\"scrap\": \"Omnis quia at tenetu\", \"ut_acc\": \"Modi est soluta aspe\", \"ut_rej\": \"Molestiae asperiores\", \"blocked\": \"Elit saepe est sunt\", \"crooked\": \"Nihil eum maxime cul\", \"emi_acc\": \"Veniam adipisci qui\", \"emi_rej\": \"Minus minima neque s\", \"ut_insp\": \"Omnis eaque dolor au\", \"shop_rep\": \"Laborum aliquid assu\", \"field_rep\": \"Harum et quo exceptu\", \"acc_joints\": \"Exercitation ea volu\", \"pass_drift\": \"Et placeat non ipsu\", \"rej_joints\": \"Ullam ex amet quod\", \"ut_remarks\": \"At et qui est nostru\", \"visual_acc\": \"Aliquam facere quo n\", \"damaged_pin\": \"Sint ut pariatur I\", \"emi_remarks\": \"Et eos laboris exce\", \"failed_drift\": \"Deleniti nesciunt i\", \"visual_thread\": \"Unde est enim reici\", \"damaged_couple\": \"Aliquip officiis aut\", \"full_length_emi\": \"Omnis sed dignissimo\", \"inspected_joints\": \"Similique laborum sa\", \"full_length_drift\": \"Nam et laboriosam d\"}', NULL, 1, 6, '2024-03-17 18:09:21', '2024-03-17 18:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `tubs`
--

CREATE TABLE `tubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `order_num` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `remarks` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `magnetizing` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`magnetizing`)),
  `drill_pipe_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`drill_pipe_details`)),
  `magnetic_particles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`magnetic_particles`)),
  `other_methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`other_methods`)),
  `specification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specification`)),
  `equipment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`equipment`)),
  `tool_desc` longtext DEFAULT NULL,
  `supervisor` varchar(255) DEFAULT NULL,
  `pin_conn` varchar(255) DEFAULT NULL,
  `box_conn` varchar(255) DEFAULT NULL,
  `conn_inspected` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`conn_inspected`)),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `accept` bigint(20) UNSIGNED DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tubs`
--

INSERT INTO `tubs` (`id`, `report_number`, `customer`, `order`, `location`, `order_num`, `date`, `remarks`, `type`, `magnetizing`, `drill_pipe_details`, `magnetic_particles`, `other_methods`, `specification`, `equipment`, `tool_desc`, `supervisor`, `pin_conn`, `box_conn`, `conn_inspected`, `user_id`, `accept`, `serial`, `order_id`, `created_at`, `updated_at`) VALUES
(18, 'STC-6/24-S_T-Rig5-HEAVYWEIGHT-2', 'Ut volup', 'Deserunt', 'Ea in es', NULL, '2004-07-30', 'Incidunt', 'heavyweight', '{\"ac_yoke\":\"1\",\"permanent\":\"0\",\"dc_coil\":\"1\"}', NULL, '{\"dry\":\"1\",\"wet\":\"0\",\"visible\":\"0\",\"fluorescent\":\"0\"}', '{\"eai\":\"0\",\"vti\":\"1\",\"tgi\":\"0\",\"other\":\"Nesciunt\"}', '{\"api\":\"1\",\"dsi\":\"0\",\"other\":\"Quae sus\",\"edition\":\"Reprehen\"}', '{\"equip_ac_yoke\":\"0\",\"equip_dc_coil\":\"0\",\"equip_permanent_magnet\":\"0\",\"equip_uv_light\":\"1\",\"other\":\"Consecte\",\"ac_ypke_serial\":\"Possimus\",\"dc_coil_serial\":\"Sint qui\",\"permanent_magnet_serial\":\"Eos magn\",\"uv_light_serial\":\"Tempora\",\"other_serial\":\"Perferen\"}', 'Nemo dol', 'Animi d', 'Culpa do', 'Laboris', '{\"total\":\"Esse ess\",\"accepted\":\"Sit vol\",\"defected\":\"Sit anim\",\"repaired\":\"Sed sit\"}', 1, NULL, NULL, 10, '2024-06-05 05:37:16', '2024-06-05 05:37:16'),
(19, 'STC-11/24-Test Comapny-Rig15-DRILLPIPE-1', 'Sint mag', 'Ipsum o', 'Ut error', NULL, '1973-10-23', 'Mollit c', 'drillpipe', '{\"ac_yoke\":\"0\",\"permanent\":\"1\",\"dc_coil\":\"0\",\"emi\":\"0\"}', '{\"grade\":\"Voluptas\",\"range\":\"Culpa e\",\"weight\":\"Sint qua\",\"wt\":\"Dolores\",\"od\":\"Eius ut\",\"id\":\"Voluptat\",\"t\":\"Iure eni\",\"connection\":\"Fugiat a\"}', '{\"dry\":\"0\",\"wet\":\"0\",\"visible\":\"1\",\"fluorescent\":\"1\"}', '{\"eai\":\"0\",\"vti\":\"0\",\"wt\":\"1\",\"tgi\":\"1\",\"other\":\"Beatae i\"}', '{\"api\":\"1\",\"dsi\":\"1\",\"other\":\"Voluptas\",\"edition\":\"Facilis\"}', '{\"equip_ac_yoke\":\"0\",\"equip_dc_coil\":\"0\",\"equip_permanent_magnet\":\"0\",\"equip_uv_light\":\"1\",\"equip_emi\":\"0\",\"equip_wt\":\"1\",\"other\":\"Sint vo\",\"ac_ypke_serial\":\"Qui est\",\"dc_coil_serial\":\"Ipsa so\",\"permanent_magnet_serial\":\"Sit non\",\"uv_light_serial\":\"Nam in n\",\"emi_serial\":\"Cupidita\",\"wt_serial\":\"Sed iure\",\"other_serial\":\"Ut aliqu\"}', 'Qui quia', 'Enim dol', NULL, NULL, NULL, 1, NULL, NULL, 19, '2024-06-05 08:30:09', '2024-06-05 08:30:09'),
(20, 'STC-11/24-Test Comapny-Rig15-DRILLPIPE-2', 'Sint mag', 'Ipsum o', 'Ut error', NULL, '1973-10-23', 'Mollit c', 'drillpipe', '{\"ac_yoke\":\"0\",\"permanent\":\"1\",\"dc_coil\":\"0\",\"emi\":\"0\"}', '{\"grade\":\"Voluptas\",\"range\":\"Culpa e\",\"weight\":\"Sint qua\",\"wt\":\"Dolores\",\"od\":\"Eius ut\",\"id\":\"Voluptat\",\"t\":null,\"connection\":\"Fugiat a\"}', '{\"dry\":\"0\",\"wet\":\"0\",\"visible\":\"1\",\"fluorescent\":\"1\"}', '{\"eai\":\"0\",\"vti\":\"0\",\"wt\":\"1\",\"tgi\":\"1\",\"other\":\"Beatae i\"}', '{\"api\":\"1\",\"dsi\":\"1\",\"other\":\"Voluptas\",\"edition\":\"Facilis\"}', '{\"equip_ac_yoke\":\"0\",\"equip_dc_coil\":\"0\",\"equip_permanent_magnet\":\"0\",\"equip_uv_light\":\"1\",\"equip_emi\":\"0\",\"equip_wt\":\"1\",\"other\":\"Sint vo\",\"ac_ypke_serial\":\"Qui est\",\"dc_coil_serial\":\"Ipsa so\",\"permanent_magnet_serial\":\"Sit non\",\"uv_light_serial\":\"Nam in n\",\"emi_serial\":\"Cupidita\",\"wt_serial\":\"Sed iure\",\"other_serial\":\"Ut aliqu\"}', 'Qui quia', 'Enim dol', NULL, NULL, NULL, 1, NULL, NULL, 19, '2024-06-10 00:27:46', '2024-06-10 00:27:46'),
(21, 'STC-9/24-ECDC-Rig10-DRILLPIPE-1', 'Alias es', 'Quo fugi', 'Ea fuga', NULL, '1972-08-02', 'Vel cons', 'drillpipe', '{\"ac_yoke\":\"0\",\"permanent\":\"0\",\"dc_coil\":\"0\",\"emi\":\"1\"}', '{\"grade\":\"Nihil ei\",\"range\":\"Possimus\",\"weight\":\"Earum od\",\"wt\":\"Doloremq\",\"od\":\"Irure su\",\"id\":\"Dolor ad\",\"t\":\"Qui culp\",\"connection\":\"Consequa\"}', '{\"dry\":\"0\",\"wet\":\"0\",\"visible\":\"1\",\"fluorescent\":\"1\"}', '{\"eai\":\"0\",\"vti\":\"0\",\"wt\":\"1\",\"tgi\":\"0\",\"other\":\"Rem dolo\"}', '{\"api\":\"1\",\"dsi\":\"0\",\"other\":\"Et sit o\",\"edition\":\"Nulla in\"}', '{\"equip_ac_yoke\":\"0\",\"equip_dc_coil\":\"0\",\"equip_permanent_magnet\":\"0\",\"equip_uv_light\":\"1\",\"equip_emi\":\"1\",\"equip_wt\":\"0\",\"other\":\"Dolorem\",\"ac_ypke_serial\":\"Corporis\",\"dc_coil_serial\":\"Et culpa\",\"permanent_magnet_serial\":\"Asperior\",\"uv_light_serial\":\"Est aute\",\"emi_serial\":\"Sint ali\",\"wt_serial\":\"Mollitia\",\"other_serial\":\"Consecte\"}', 'Providen', 'Molestia', NULL, NULL, NULL, 1, NULL, NULL, 6, '2024-06-23 09:34:30', '2024-06-23 09:34:30'),
(22, 'STC-9/24-S_T-Rig12-DRILLCOLLAR-1', 'Sunt eni', 'Deleniti', 'Enim et', NULL, '1998-10-13', 'Do excep', 'drillcollar', '{\"ac_yoke\":\"1\",\"permanent\":\"1\",\"dc_coil\":\"0\"}', NULL, '{\"dry\":\"0\",\"wet\":\"1\",\"visible\":\"1\",\"fluorescent\":\"0\"}', '{\"eai\":\"1\",\"vti\":\"0\",\"tgi\":\"0\",\"other\":\"Nostrud\"}', '{\"api\":\"1\",\"dsi\":\"1\",\"other\":\"Quis qui\",\"edition\":\"Dolores\"}', '{\"equip_ac_yoke\":\"1\",\"equip_dc_coil\":\"1\",\"equip_permanent_magnet\":\"1\",\"equip_uv_light\":\"0\",\"other\":\"Est in\",\"ac_ypke_serial\":\"Non et n\",\"dc_coil_serial\":\"Excepteu\",\"permanent_magnet_serial\":\"Magnam o\",\"uv_light_serial\":\"Enim et\",\"other_serial\":\"Id anim\"}', 'Voluptas', 'Minus ha', 'Nostrud', 'Deleniti', '{\"total\":\"Omnis qu\",\"accepted\":\"Tempore\",\"defected\":\"Reprehen\",\"repaired\":\"Nisi et\"}', 1, NULL, NULL, 17, '2024-06-23 09:35:09', '2024-06-23 09:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `tubs_summary`
--

CREATE TABLE `tubs_summary` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `order_num` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comments` longtext DEFAULT NULL,
  `equipment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`equipment`)),
  `specification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specification`)),
  `type` varchar(255) NOT NULL,
  `insp_method` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`insp_method`)),
  `tool_desc` longtext DEFAULT NULL,
  `dp_summary_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`dp_summary_details`)),
  `supervisor` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `accept` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('Active','Not Active') NOT NULL DEFAULT 'Active',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `trash` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `email`, `status`, `email_verified_at`, `deleted_at`, `trash`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'mohamed khater', 'owner@stc.com', 'Active', NULL, NULL, 0, '$2y$10$GfX3Z78XRWtbKFV4VDtDjOcLba1tyjIsTWUvKQM15Y2eGsNaSQYhi', NULL, NULL, '2024-06-11 08:38:04'),
(42, 'admin', 'admin', 'admin@stc.com', 'Active', NULL, NULL, 0, '$2y$10$WZFT..nZa5JgeZmei9PqYubZyevaKSjQXOhWRbd8KEI/7cGgZ8Pj2', NULL, '2024-06-11 08:38:27', '2024-06-12 07:25:56'),
(43, 'operator1', 'operator1', 'operator1@stc.com', 'Active', NULL, NULL, 0, '$2y$10$sqzCTWsjgz8cKgU3eF2.ZOLbuo88gsOEruJL9ZV04Ngogdkihqg6O', NULL, '2024-06-11 08:39:04', '2024-06-12 10:40:17'),
(44, 'operator2', 'operator2', 'operator2@stc.com', 'Not Active', NULL, NULL, 1, '$2y$10$H87D13bZkGU/A1shsoPfoOO0cIe0x1GVemDCyFfk3e4sVThzRJbOy', NULL, '2024-06-22 11:51:06', '2024-06-22 12:22:02'),
(48, 'test', 'test', 'test@stc.com', 'Not Active', NULL, NULL, 1, '$2y$10$THDaTsZcG2XD3N5spsDBTOkXSsNXsmObR3jInGRSohSboSAyvrEiS', NULL, '2024-06-22 11:52:27', '2024-06-22 12:22:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptance`
--
ALTER TABLE `acceptance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checklist_thorough_examination_id_foreign` (`thorough_examination_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_ticket`
--
ALTER TABLE `job_ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_ticket_order_id_foreign` (`order_id`),
  ADD KEY `job_ticket_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `mpi`
--
ALTER TABLE `mpi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mpi_order_id_foreign` (`order_id`);

--
-- Indexes for table `mud_jar`
--
ALTER TABLE `mud_jar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mud_jar_accept_foreign` (`accept`),
  ADD KEY `mud_jar_order_id_foreign` (`order_id`),
  ADD KEY `mud_jar_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`),
  ADD KEY `orders_company_id_foreign` (`company_id`),
  ADD KEY `orders_rig_id_foreign` (`rig_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `report_desc`
--
ALTER TABLE `report_desc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_desc_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `report_settings`
--
ALTER TABLE `report_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rig`
--
ALTER TABLE `rig`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rig_company_id_foreign` (`company_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shakle_size`
--
ALTER TABLE `shakle_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sidebar_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `thorough_examination`
--
ALTER TABLE `thorough_examination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thorough_examination_order_id_foreign` (`order_id`),
  ADD KEY `thorough_examination_user_id_foreign` (`user_id`),
  ADD KEY `thorough_examination_shaklesize_id_foreign` (`shaklesize_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tools_accept_foreign` (`accept`),
  ADD KEY `tools_order_id_foreign` (`order_id`),
  ADD KEY `tools_user_id_foreign` (`user_id`);

--
-- Indexes for table `tools_extensions`
--
ALTER TABLE `tools_extensions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translation_keys`
--
ALTER TABLE `translation_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tublar_summary`
--
ALTER TABLE `tublar_summary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tublar_summary_accept_foreign` (`accept`),
  ADD KEY `tublar_summary_order_id_foreign` (`order_id`),
  ADD KEY `tublar_summary_user_id_foreign` (`user_id`);

--
-- Indexes for table `tubs`
--
ALTER TABLE `tubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tubs_accept_foreign` (`accept`),
  ADD KEY `tubs_order_id_foreign` (`order_id`),
  ADD KEY `tubs_user_id_foreign` (`user_id`);

--
-- Indexes for table `tubs_summary`
--
ALTER TABLE `tubs_summary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tubs_summary_accept_foreign` (`accept`),
  ADD KEY `tubs_summary_order_id_foreign` (`order_id`),
  ADD KEY `tubs_summary_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `acceptance`
--
ALTER TABLE `acceptance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_ticket`
--
ALTER TABLE `job_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `mpi`
--
ALTER TABLE `mpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `mud_jar`
--
ALTER TABLE `mud_jar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_desc`
--
ALTER TABLE `report_desc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=798;

--
-- AUTO_INCREMENT for table `report_settings`
--
ALTER TABLE `report_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rig`
--
ALTER TABLE `rig`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `shakle_size`
--
ALTER TABLE `shakle_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `thorough_examination`
--
ALTER TABLE `thorough_examination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tools_extensions`
--
ALTER TABLE `tools_extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `translation_keys`
--
ALTER TABLE `translation_keys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tublar_summary`
--
ALTER TABLE `tublar_summary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tubs`
--
ALTER TABLE `tubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tubs_summary`
--
ALTER TABLE `tubs_summary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `checklist_thorough_examination_id_foreign` FOREIGN KEY (`thorough_examination_id`) REFERENCES `thorough_examination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_ticket`
--
ALTER TABLE `job_ticket`
  ADD CONSTRAINT `job_ticket_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_ticket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mpi`
--
ALTER TABLE `mpi`
  ADD CONSTRAINT `mpi_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mud_jar`
--
ALTER TABLE `mud_jar`
  ADD CONSTRAINT `mud_jar_accept_foreign` FOREIGN KEY (`accept`) REFERENCES `acceptance` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mud_jar_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mud_jar_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_rig_id_foreign` FOREIGN KEY (`rig_id`) REFERENCES `rig` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `rig`
--
ALTER TABLE `rig`
  ADD CONSTRAINT `rig_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD CONSTRAINT `sidebar_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `sidebar` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `thorough_examination`
--
ALTER TABLE `thorough_examination`
  ADD CONSTRAINT `thorough_examination_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `thorough_examination_shaklesize_id_foreign` FOREIGN KEY (`shaklesize_id`) REFERENCES `shakle_size` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `thorough_examination_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `tools_accept_foreign` FOREIGN KEY (`accept`) REFERENCES `acceptance` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tools_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tools_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tublar_summary`
--
ALTER TABLE `tublar_summary`
  ADD CONSTRAINT `tublar_summary_accept_foreign` FOREIGN KEY (`accept`) REFERENCES `acceptance` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tublar_summary_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tublar_summary_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tubs`
--
ALTER TABLE `tubs`
  ADD CONSTRAINT `tubs_accept_foreign` FOREIGN KEY (`accept`) REFERENCES `acceptance` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tubs_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tubs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tubs_summary`
--
ALTER TABLE `tubs_summary`
  ADD CONSTRAINT `tubs_summary_accept_foreign` FOREIGN KEY (`accept`) REFERENCES `acceptance` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tubs_summary_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tubs_summary_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
