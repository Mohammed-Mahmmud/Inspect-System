-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2024 at 10:48 AM
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
(113, 'Hydraulic System & Hoses', 1, 'Voluptas ut eu labor', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(114, 'Spark Arrestor', 1, 'Sint dolorum culpa', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(115, 'Reverse Alarm / Beacon Light', 1, 'Aut vel aute tempore', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(116, 'Space Bars and End Covers', 1, 'Sequi officia nulla', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(117, 'Counter Weight', 1, 'Et dolores quos eius', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(118, 'Hoisting Speed', 1, 'Irure voluptas aut v', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(119, 'Lowering Speed', 1, 'At aut consequat Es', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(120, 'Bucket', 1, 'Laudantium ad molli', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(121, 'Boom / Mast', 1, 'Quis et aperiam expl', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(122, 'Fire Extinguisher', 1, 'Dolorum sapiente ver', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(123, 'Gauges in Cab', 1, 'Officia sit non ita', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(124, 'Tyres and Wheels', 0, 'Soluta in non dolor', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(125, 'Labels and Tags', 1, 'Ipsam elit minim si', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(126, 'Hydraulic System & Hoses', 1, 'Culpa quis eos prae', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(127, 'Air System', 0, 'Dolor necessitatibus', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(128, 'Electric System / Lights', 0, 'Dolorem eveniet vol', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(129, 'Brakes / Clutch', 0, 'Corporis vero hic qu', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(130, 'Controls / Operational Controls', 1, 'Quis recusandae Id', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(131, 'Manufacturer Data Plate', 1, 'Eiusmod quaerat aut', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(132, 'Steering System', 1, 'Labore nobis minima', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(133, 'Records of Major Repairs', 0, 'Voluptatum laboris m', 'wheel_loader_checklist', 35, '2024-02-18 10:49:13', '2024-02-18 10:49:13'),
(134, 'Enter Space Bars and End Covers', 1, 'Veniam eos non con', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(135, 'Main Gears & Reduction Gears', 1, 'Totam omnis consecte', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(136, 'Record of Major Repairs / Alterations / Replacements', 0, 'Commodi a et commodi', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(137, 'Personnel Basket', 1, 'Quis praesentium con', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(138, 'Hoisting Speed', 1, 'Unde vel at consequu', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(139, 'Lowering Speed', 1, 'Fugiat culpa perspi', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(140, 'Boom', 1, 'Voluptas libero nost', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(141, 'Gauges in Cab', 0, 'Eiusmod vero ullamco', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(142, 'Turntable Bearing', 1, 'Voluptate in incidun', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(143, 'Shear Wave Ultra-Sonic', 1, 'Debitis eveniet ess', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(144, 'Steering System', 1, 'Esse iste voluptas', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(145, 'Labels and Tags', 1, 'Sed velit eum asperi', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(146, 'outriggers / stabilizers', 0, 'Aspernatur duis in l', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(147, 'directional controls', 1, 'Rerum amet labore a', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(148, 'Main Gears & Reduction Gears', 1, 'In eu aute consequat', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(149, 'Hydraulic System', 1, 'Quae exercitation au', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(150, 'Motor / Electric System', 0, 'Dolores quisquam ame', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(151, 'Brakes / Clutch', 1, 'Aut est est hic et', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(152, 'Controls / Operational Controls', 0, 'Facere voluptates ei', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(153, 'Tyres and Wheels', 0, 'Quidem necessitatibu', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(154, 'Eddy Current', 0, 'Id consequatur cupid', 'manlift_checklist', 36, '2024-02-18 10:50:04', '2024-02-18 10:50:04'),
(183, 'Record of Major Repairs / Alterations / Replacements', 0, 'Sed dolor tempore v', 'mobile_crane_checklist', 37, '2024-02-18 14:39:43', '2024-02-18 14:39:43'),
(212, 'Enter Space Bars and End Covers', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(213, 'Main Gears & Reduction Gears', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(214, 'Record of Major Repairs / Alterations / Replacements', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(215, 'Personnel Basket', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(216, 'Hoisting Speed', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(217, 'Lowering Speed', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(218, 'Boom', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(219, 'Gauges in Cab', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(220, 'Turntable Bearing', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(221, 'Shear Wave Ultra-Sonic', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(222, 'Steering System', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(223, 'Labels and Tags', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(224, 'outriggers / stabilizers', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(225, 'directional controls', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(226, 'Main Gears & Reduction Gears', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(227, 'Hydraulic System', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(228, 'Motor / Electric System', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(229, 'Brakes / Clutch', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(230, 'Controls / Operational Controls', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(231, 'Tyres and Wheels', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(232, 'Eddy Current', 1, NULL, 'manlift_checklist', 38, '2024-02-18 18:06:57', '2024-02-18 18:06:57'),
(289, 'Enter Space Bars and End Covers', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(290, 'Main Gears & Reduction Gears', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(291, 'Record of Major Repairs / Alterations / Replacements', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(292, 'Personnel Basket', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(293, 'Hoisting Speed', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(294, 'Lowering Speed', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(295, 'Boom', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(296, 'Gauges in Cab', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(297, 'Turntable Bearing', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(298, 'Shear Wave Ultra-Sonic', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(299, 'Steering System', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(300, 'Labels and Tags', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(301, 'outriggers / stabilizers', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(302, 'directional controls', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(303, 'Main Gears & Reduction Gears', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(304, 'Hydraulic System', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(305, 'Motor / Electric System', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(306, 'Brakes / Clutch', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(307, 'Controls / Operational Controls', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(308, 'Tyres and Wheels', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(309, 'Eddy Current', 1, NULL, 'manlift_checklist', 42, '2024-02-21 18:14:40', '2024-02-21 18:14:40'),
(310, 'Spark Arrestor', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(311, 'Reverse Alarm / Beacon Light', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(312, 'Space Bars and End Covers', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(313, 'Counter Weight', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(314, 'Hoisting Speed', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(315, 'Lowering Speed', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(316, 'Bucket', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(317, 'Boom / Mast', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(318, 'Fire Extinguisher', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(319, 'Gauges in Cab', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(320, 'Tyres and Wheels', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(321, 'Labels and Tags', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(322, 'Hydraulic System & Hoses', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(323, 'Air System', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(324, 'Electric System / Lights', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(325, 'Brakes / Clutch', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(326, 'Controls / Operational Controls', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(327, 'Manufacturer Data Plate', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(328, 'Steering System', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(329, 'Records of Major Repairs', 1, NULL, 'wheel_loader_checklist', 41, '2024-02-29 11:13:00', '2024-02-29 11:13:00'),
(330, 'Outriggers', 1, 'dsfsdf', 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(331, 'Leveling Indicator', 1, 'fdsfsd', 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(332, 'Angel Indicator', 1, 'dfs', 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(333, 'Safe Load Indicator (Limiter)', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(334, 'Crane Load Chart', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(335, 'Hydraulic Systems', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(336, 'Pendants', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(337, 'Power Unit', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(338, 'Cabin - Cranes Controls', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(339, 'Braking / Holding', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(340, 'Wire Rope Terminations', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(341, 'Cathead Structure', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(342, 'Boom Structure , Sections', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(343, 'Wire Rope - Auxiliary', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(344, 'Wire Rope – Main', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(345, 'Auxiliary Hook', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(346, 'Main Hook', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(347, 'Auxiliary Hoist Winch', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(348, 'Main Hoist Winch', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(349, 'Luﬃng Hoist Machinery', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(350, 'Turntable Bearing', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(351, 'Slewing System & Mechanism', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(352, 'Ballast Weight / Counter Weight', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(353, 'Steering , Brakes & tires / Crawler', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(354, 'Electric/ Spark Arrestor/ Fire Extinguisher/Reverse Alarm', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(355, 'Carrier Including Engine', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(356, 'Crane Limit Switches', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(357, 'Record of Major Repairs / Alterations / Replacements', 1, NULL, 'mobile_crane_checklist', 45, '2024-04-17 07:23:40', '2024-04-17 07:23:40'),
(358, 'Spark Arrestor', 0, 'In fugiat ad laboru', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(359, 'Reverse Alarm / Beacon Light', 1, 'Labore omnis delenit', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(360, 'Space Bars and End Covers', 1, 'Itaque veniam id ea', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(361, 'Counter Weight', 0, 'Ducimus debitis cup', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(362, 'Hoisting Speed', 0, 'Exercitation nobis e', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(363, 'Lowering Speed', 1, 'Cum voluptas aut qui', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(364, 'Bucket', 0, 'Animi similique sun', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(365, 'Boom / Mast', 0, 'Velit autem in quae', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(366, 'Fire Extinguisher', 0, 'Reprehenderit nobis', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(367, 'Gauges in Cab', 0, 'Pariatur Magnam qua', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(368, 'Tyres and Wheels', 0, 'Sit amet culpa ass', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(369, 'Labels and Tags', 0, 'Laboris duis dolore', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(370, 'Hydraulic System & Hoses', 1, 'Aute ut velit ut aut', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(371, 'Air System', 1, 'Perspiciatis conseq', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(372, 'Electric System / Lights', 1, 'Sit fugit est nulla', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(373, 'Brakes / Clutch', 0, 'Modi commodo reicien', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(374, 'Controls / Operational Controls', 1, 'Et magna quia ullam', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(375, 'Manufacturer Data Plate', 1, 'Reprehenderit et mai', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(376, 'Steering System', 1, 'Aliquip architecto s', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(377, 'Records of Major Repairs', 1, 'Non et aut error et', 'wheel_loader_checklist', 46, '2024-05-13 05:12:07', '2024-05-13 05:12:07'),
(378, 'Spark Arrestor', 0, 'Aut velit vero dolor', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(379, 'Reverse Alarm / Beacon Light', 1, 'Natus excepteur in o', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(380, 'Space Bars and End Covers', 1, 'Consequatur harum cu', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(381, 'Counter Weight', 1, 'Sint numquam nihil', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(382, 'Hoisting Speed', 0, 'Pariatur Unde culpa', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(383, 'Lowering Speed', 0, 'Vel excepturi quaera', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(384, 'Bucket', 1, 'Recusandae Eiusmod', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(385, 'Boom / Mast', 1, 'Doloribus amet quis', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(386, 'Fire Extinguisher', 1, 'Aliquam qui sint exc', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(387, 'Gauges in Cab', 0, 'A cupidatat consequa', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(388, 'Tyres and Wheels', 1, 'Ea illo minima magna', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(389, 'Labels and Tags', 0, 'Consequuntur dolor v', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(390, 'Hydraulic System & Hoses', 0, 'Nostrum molestiae vo', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(391, 'Air System', 1, 'Nesciunt repellendu', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(392, 'Electric System / Lights', 1, 'Aut assumenda minus', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(393, 'Brakes / Clutch', 0, 'Blanditiis inventore', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(394, 'Controls / Operational Controls', 1, 'In quas quia laudant', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(395, 'Manufacturer Data Plate', 0, 'Et quis ea aspernatu', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(396, 'Steering System', 0, 'Dolores consectetur', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(397, 'Records of Major Repairs', 0, 'Voluptatem quia exe', 'wheel_loader_checklist', 47, '2024-05-13 05:13:27', '2024-05-13 05:13:27'),
(398, 'Enter Space Bars and End Covers', 1, 'Consectetur molesti', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(399, 'Main Gears & Reduction Gears', 0, 'Nisi labore at eveni', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(400, 'Record of Major Repairs / Alterations / Replacements', 1, 'Omnis earum dolor es', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(401, 'Personnel Basket', 1, 'Aut modi possimus c', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(402, 'Hoisting Speed', 1, 'Consequatur veritati', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(403, 'Lowering Speed', 0, 'Et voluptatum amet', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(404, 'Boom', 1, 'Ratione nostrud impe', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(405, 'Gauges in Cab', 0, 'Nam autem optio per', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(406, 'Turntable Bearing', 1, 'Culpa laudantium q', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(407, 'Shear Wave Ultra-Sonic', 1, 'Elit vitae autem id', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(408, 'Steering System', 1, 'Velit commodi et eu', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(409, 'Labels and Tags', 0, 'Distinctio Ea quod', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(410, 'outriggers / stabilizers', 1, 'Nisi ut dolorum nequ', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(411, 'directional controls', 0, 'Est non sit velit', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(412, 'Main Gears & Reduction Gears', 1, 'Non qui reiciendis i', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(413, 'Hydraulic System', 0, 'Consectetur providen', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(414, 'Motor / Electric System', 1, 'Voluptatem id dolore', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(415, 'Brakes / Clutch', 0, 'A illo quia itaque c', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(416, 'Controls / Operational Controls', 1, 'Sit minim exercitat', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(417, 'Tyres and Wheels', 0, 'Voluptate quo et mol', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38'),
(418, 'Eddy Current', 0, 'Debitis a duis vitae', 'manlift_checklist', 48, '2024-05-13 05:14:38', '2024-05-13 05:14:38');

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

--
-- Dumping data for table `job_ticket`
--

INSERT INTO `job_ticket` (`id`, `work_number`, `address`, `ispr`, `start_date`, `well_name`, `ref_number`, `job_price`, `approval`, `user_id`, `order_id`, `created_at`, `updated_at`, `end_date`) VALUES
(31, '709', 'Natus rem enim digni', 'Et ut corrupti ea d', '1984-01-26', 'Abdul Snider', '25', '869', 'Magnam modi eu moles', 4, 13, '2024-02-04 09:04:30', '2024-02-04 09:04:30', NULL),
(34, '988ds', NULL, 'Aut laborum iste id', '2006-08-22', 'Elijah Rodriguez', '785', '874', 'Cillum ipsum provid', 1, 12, '2024-02-18 06:08:04', '2024-03-18 05:31:03', NULL),
(35, '795', NULL, 'Odio sunt laudantium', '2001-08-26', 'Charles Torres', '210', '510', 'Lorem culpa dolores', 1, 6, '2024-05-01 12:22:34', '2024-05-01 12:22:34', '1991-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `job_ticket_content`
--

CREATE TABLE `job_ticket_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_description` varchar(255) DEFAULT NULL,
  `contract_code` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `od_size` varchar(255) DEFAULT NULL,
  `range` varchar(255) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `job_ticket_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_ticket_content`
--

INSERT INTO `job_ticket_content` (`id`, `main_description`, `contract_code`, `quantity`, `description`, `od_size`, `range`, `unit_price`, `total_price`, `job_ticket_id`, `created_at`, `updated_at`) VALUES
(48, 'Cupidatat odit cupid', 'Asperiores vero aliq', '763', 'Nesciunt sequi reic', 'Modi temporibus enim', 'Enim voluptas labori', '799', '491', 31, '2024-02-04 09:04:30', '2024-02-04 09:04:30'),
(49, 'Cupidatat assumenda', 'Laboris inventore do', '675', 'Saepe distinctio Ve', 'In doloribus fugiat', 'Sunt dolore aut veli', '519', '878', 31, '2024-02-04 09:04:30', '2024-02-04 09:04:30'),
(112, 'Nobis et voluptates', 'Quo enim consequatur', '390', 'Sed et nihil ut dolo', 'Nostrum quis qui sit', 'Voluptatem Vel face', '743', '812', 34, '2024-03-18 05:31:03', '2024-03-18 05:31:03'),
(113, 'Soluta quisquam fuga', 'Quis optio laboris', '239', 'Ratione temporibus v', 'Dolorem voluptate di', 'Corrupti et minim i', '584', '607', 34, '2024-03-18 05:31:03', '2024-03-18 05:31:03'),
(114, 'Sit aliqua Repudia', 'Id provident corpor', '869', 'Quos ratione dolor c', 'Sunt quas rem lorem', 'Earum ex sed nisi mo', '64', '369', 35, '2024-05-01 12:22:34', '2024-05-01 12:22:34'),
(115, 'Labore consequatur n', 'Non do ipsum nostrud', '189', 'Numquam molestiae qu', 'Quaerat atque conseq', 'In assumenda ut qui', '601', '102', 35, '2024-05-01 12:22:34', '2024-05-01 12:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `mad_jar_body`
--

CREATE TABLE `mad_jar_body` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `length` varchar(255) DEFAULT NULL,
  `box_thread` varchar(255) DEFAULT NULL,
  `box_od` varchar(255) DEFAULT NULL,
  `box_cond` varchar(255) DEFAULT NULL,
  `body_thread_cond` varchar(255) DEFAULT NULL,
  `pin_conn` varchar(255) DEFAULT NULL,
  `pin_id` varchar(255) DEFAULT NULL,
  `pin_cond` varchar(255) DEFAULT NULL,
  `mud_jar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mad_jar_body`
--

INSERT INTO `mad_jar_body` (`id`, `serial_no`, `description`, `length`, `box_thread`, `box_od`, `box_cond`, `body_thread_cond`, `pin_conn`, `pin_id`, `pin_cond`, `mud_jar_id`, `created_at`, `updated_at`) VALUES
(13, 'Possimus cupidatat', 'Ab et nostrum nostru', 'Aliqua Explicabo C', 'Dolore quibusdam con', 'Illo molestias velit', 'Nihil sit dolorum ve', NULL, 'Velit ex totam cupi', 'Natus deserunt vitae', 'Aut pariatur Quos c', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(14, 'Enim quia totam inci', 'Est sit in soluta e', 'Laboris eaque conseq', 'Sit ipsum rem expl', 'Voluptatem sit pro', 'Voluptas id quae mag', NULL, 'Dolorem voluptate ra', 'Est dolor non tempor', 'Molestias sequi assu', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(15, 'Consequatur similiq', 'Consequatur eveniet', 'Omnis tempor alias v', 'Necessitatibus qui a', 'Enim nulla aut sed s', 'Voluptas in obcaecat', NULL, 'Ipsum qui dolore mod', 'Aliquip commodi moll', 'Non tempor eos repre', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(16, 'Minima minim fugiat', 'Consequatur archite', 'Ullamco non dolore r', 'Dolorum qui quidem q', 'Aut corporis soluta', 'Nisi dolores quisqua', NULL, 'Aut voluptatem quia', 'Ut officiis in dolor', 'Itaque vitae sit te', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(17, 'Dicta et tempore ea', 'Consequatur Assumen', 'Et voluptates sapien', 'Quia accusamus rem o', 'Beatae eiusmod occae', 'Rerum id aliquid qui', NULL, 'Velit maiores sint', 'Architecto animi am', 'At sapiente cupidata', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(18, 'Minim dolor libero i', 'Id labore quo qui a', 'Architecto aperiam m', 'Molestias distinctio', 'Eum nihil molestias', 'Pariatur Aut aliqua', NULL, 'Voluptas tempore pa', 'Asperiores soluta ac', 'Quam in deserunt ape', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(19, 'Dolorem molestiae qu', 'Eum repudiandae in s', 'Ea sed quo ex doloru', 'Suscipit sunt impedi', 'Dolores aliquam reru', 'Reprehenderit volupt', NULL, 'Minima quis nulla ea', 'Accusantium quia con', 'Sit placeat enim so', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(20, 'Lorem quia cupidatat', 'Id blanditiis natus', 'Nulla est sunt assum', 'Qui dolor labore non', 'Delectus sit est n', 'Itaque eu aut non se', NULL, 'Qui dolorem sequi al', 'Illum voluptatibus', 'Minim ea magna place', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(21, 'Rerum porro nulla la', 'Voluptas non omnis q', 'Nostrud commodi culp', 'Est voluptatem Non', 'Quasi deserunt iste', 'Consequatur eos quae', NULL, 'Magnam autem fuga E', 'Autem eum rerum fugi', 'Consequatur Maiores', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(22, 'Aut odit incidunt p', 'Sed sed nesciunt es', 'Quam aliquam omnis o', 'Officia dignissimos', 'Dolore mollitia offi', 'Quam consectetur qu', NULL, 'Id voluptatem Volu', 'Cumque aliquam eum o', 'Ex labore magnam min', 6, '2024-02-25 10:17:54', '2024-02-25 10:17:54'),
(34, 'Quos libero dignissi', 'Aliquip porro distin', 'Ex fugiat at animi', 'Veniam anim veritat', 'Quia nostrud laborum', 'Minus id rem molesti', 'Officia accusantium', 'Eius quia debitis ex', 'Aliquam cum et ratio', 'Amet sunt modi ist', 8, '2024-02-25 11:17:39', '2024-02-25 11:17:39'),
(35, 'Voluptatem Non inci', 'Voluptates tenetur n', 'Omnis eaque at repud', 'Dolor tempora Nam co', 'Aspernatur repellend', 'Odio sint consectetu', 'Quis incididunt repu', 'Id eius quia dolorem', 'Perferendis in velit', 'Voluptas nulla sed q', 8, '2024-02-25 11:17:39', '2024-02-25 11:17:39'),
(36, 'Illo quos ad quaerat', 'Iusto adipisicing vo', 'Velit rerum mollitia', 'Neque placeat verit', 'Quidem incidunt cup', 'Nemo aut nostrud pro', 'Cupidatat reprehende', 'Totam magni est debi', 'Pariatur Deserunt n', 'Accusamus consequatu', 8, '2024-02-25 11:17:39', '2024-02-25 11:17:39'),
(37, 'Nihil duis velit au', 'Temporibus aliquam v', 'Eiusmod dolorem nemo', 'Eius qui natus quia', 'Et nostrum earum bla', 'Architecto eos in ni', 'Natus quasi eos ad', 'Iste neque deleniti', 'Dolore veniam ipsa', 'Impedit sunt sed es', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(38, 'Consequuntur corpori', 'Rerum consequatur U', 'At eligendi animi t', 'Dicta adipisicing do', 'Vitae modi voluptatu', 'Sunt cupidatat lorem', 'Enim dolorem error a', 'A deserunt blanditii', 'Tempor placeat veni', 'Corrupti nulla quia', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(39, 'Omnis obcaecati accu', 'Quo at voluptates re', 'Adipisicing assumend', 'Aut est recusandae', 'Doloremque sequi eos', 'Ab aut officia sit', 'Esse eum deleniti po', 'Quaerat qui harum ex', 'Cillum adipisicing e', 'Sit perferendis aut', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(40, 'Sint a illum non su', 'Facilis nostrum tota', 'In nobis quas volupt', 'Maiores beatae quide', 'Excepturi sunt facer', 'Culpa ex eius est n', 'Magna natus aut nobi', 'Maxime perferendis e', 'Officia quas perfere', 'Corporis obcaecati a', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(41, 'Et mollitia assumend', 'Non nihil et non cul', 'Ut minus sapiente vo', 'Et qui facere quia i', 'Eum quas sit volupt', 'Voluptatem minus tem', 'Explicabo Aliquam q', 'Sed voluptas molesti', 'Deserunt harum ut al', 'Qui ea velit molesti', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(42, 'Elit consectetur mi', 'Enim elit quisquam', 'Sunt perspiciatis i', 'Incididunt inventore', 'Possimus quod nulla', 'Eum sint culpa vol', 'Illum aliquid excep', 'Sit ut irure atque', 'Iusto voluptate prae', 'Reprehenderit laudan', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(43, 'Harum ullam officiis', 'Qui ad enim sint ad', 'Velit modi ut quo an', 'Iure id aut volupta', 'Quaerat expedita eve', 'Ipsum adipisci imped', 'Doloribus est offici', 'Voluptatibus rem ita', 'Odit et molestiae ve', 'Enim provident dolo', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(44, 'Sed maiores aut enim', 'Quis nulla dignissim', 'Est est vitae quod l', 'Excepteur sed vero s', 'Minim in dolorem in', 'Enim ad dolores reru', 'Aut labore ipsum vel', 'Ab sunt quo eum illu', 'Eu ad reiciendis vol', 'Sequi voluptas solut', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(45, 'Odio ab rerum labori', 'Molestias unde natus', 'Consequatur aut aut', 'Non ullam autem non', 'Inventore placeat d', 'Numquam inventore et', 'Voluptas dolorem quo', 'Numquam ipsum alias', 'Fugit sint quisqua', 'Consequuntur ut assu', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(46, 'Quae id natus corrup', 'Voluptatem id aute', 'Ipsam dolorem tempor', 'Alias tempore ad ni', 'Et et omnis rem adip', 'Sapiente sed est con', 'Et sunt ut mollit o', 'Rem quod voluptatem', 'Reprehenderit except', 'Expedita eius est de', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53'),
(47, 'Ipsum ut ut nisi ad', 'Maiores nisi sint at', 'Eum aut eum sit in', 'Ad laborum In sint', 'Anim exercitation se', 'Vero consequatur Id', 'Vitae non vitae nece', 'Rerum veritatis est', 'Ut deserunt non ea u', 'Atque aliquip ex nul', 7, '2024-02-29 11:14:53', '2024-02-29 11:14:53');

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
(60, 'Mpi', 238, '941b4787-9bbc-4abb-bc47-806961a8bc98', 'mpi', 'stc-min', 'stc-min.png', 'image/png', 'media', 'media', 29306, '[]', '[]', '[]', '[]', 1, '2024-05-08 05:36:39', '2024-05-08 05:36:39'),
(61, 'Mpi', 238, 'bd118327-0569-41c3-9b4f-26cd1fc9d3fc', 'mpi', 'STC Stamp', 'STC-Stamp.png', 'image/png', 'media', 'media', 199368, '[]', '[]', '[]', '[]', 2, '2024-05-08 05:36:39', '2024-05-08 05:36:39'),
(62, 'App\\Models\\Report\\ReportSettings', 21, '2e0d76e9-83c2-4a1f-a5ab-f111b8fce19b', 'footerImage', 'horiReport', 'horiReport.png', 'image/png', 'media', 'media', 289572, '[]', '[]', '[]', '[]', 1, '2024-05-12 08:28:04', '2024-05-12 08:28:04');

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
(122, '2024_05_01_072052_create_report_settings_table', 97);

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
  `result` varchar(255) DEFAULT NULL,
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
(238, 14, 'Est labore laboris c', '436', 'Voluptas vero eiusmo', '2021-03-04', 'STC-10/24-Quincy_Cunningham-Rig5-MPI-1', 'Magnetic Particle Inspection', 'mpi', 'Molestias nobis sed', '92', 'enwjkfkjnwejkfknwknfkwefkjwnjkfnj wkfkwefkwkenfkwen wfnekjnfkjwenfekjwne nwjkfkjnwejkfk nwknfkwefkjwnjkfnjwkfkwe fkwkenfkwenwfnekjnfkjwenfekjwnenwjkfkjnw ejkfknwknfkwefkjwnjkfnjwkfk wefkwkenfkwenwfnekjnfkjwenfekjwn', 1, NULL, '2024-04-01 08:48:10', '2024-05-08 06:34:18', 0, NULL, NULL, 1, 1, 'Magna nihil id ex e', 'Eligendi irure fuga', 'Eum doloribus qui al', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"api\",\"dsi\",\"astm\",\"asme\",\"aws\"],\"other\":\"Aspernatur dolor ali\",\"edition\":\"Consequatur odit per\"}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '2021-09-03', '{\"ac_yoke\":\"0\",\"ac_yoke_no\":\"501\",\"dc_coil\":\"1\",\"dc_coil_no\":\"380\",\"permanent_magnet\":\"1\",\"permanent_magnet_no\":\"795\",\"uv_light\":\"1\",\"uv_light_no\":\"428\",\"other_name\":\"Shea Wilson\",\"other_no\":\"107\"}'),
(240, 7, 'Voluptatibus harum q', '736', 'Quo ab anim exercita', '1981-02-13', 'STC-9/24-S_T-Rig2-MPI-3', 'Magnetic Particle Inspection', 'mpi', 'Fugit sit et quo u', '655', NULL, 1, NULL, '2024-05-08 08:35:12', '2024-05-08 08:35:12', 1, NULL, NULL, 1, NULL, 'Facere asperiores du', 'Voluptatem qui accus', 'Quis in quasi pariat', '[\"Cleaned to Base Metal\",\"Not Cleaned to Base Metal\"]', '{\"select\":[\"asme\"],\"other\":null,\"edition\":null}', '[\"dry\",\"wet\",\"visibale\",\"flourescent\"]', '[\"ac\",\"dc\"]', '1981-08-12', '{\"ac_yoke\":\"0\",\"ac_yoke_no\":null,\"dc_coil\":\"1\",\"dc_coil_no\":null,\"permanent_magnet\":\"0\",\"permanent_magnet_no\":null,\"uv_light\":\"1\",\"uv_light_no\":null,\"other_name\":null,\"other_no\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `mud_jar`
--

CREATE TABLE `mud_jar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tool` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `report_num` varchar(255) DEFAULT NULL,
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

INSERT INTO `mud_jar` (`id`, `tool`, `serial`, `report_num`, `date`, `summary`, `inspect_procedure`, `visual`, `boroscopic`, `dimensional`, `liquid_penetrant`, `mpi`, `ultrasonic`, `eddy_current`, `type`, `accept`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(6, 'khater', 'khater', 'STC-3/24-ECDC-Rig5-JAR-1', '1996-09-16', 'khater', 'khater', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"khater\", \"conn\": \"khater\"}', '{\"body\": \"v\", \"conn\": \"v\"}', 'jar', 3, 1, 5, '2024-02-22 12:34:21', '2024-02-25 10:17:54'),
(7, 'Aspernatur in molest', 'Nesciunt eius imped', 'STC-10/24-Quincy_Cunningham-Rig5-MUD-1', '1987-10-17', 'Repudiandae vero eni', 'Quam do numquam quis', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', '{\"body\": null, \"conn\": null}', 'mud', 1, 1, 14, '2024-02-22 14:17:08', '2024-02-29 11:14:53'),
(8, 'Laborum Et suscipit', 'Dicta occaecat ut re', 'STC-3/24-ECDC-Rig5-MUD-1', '1995-07-24', 'Tempor labore est au', 'Sint est aliquam sun', '{\"body\": \"Distinctio Ea magni\", \"conn\": \"Laborum quos maiores\"}', '{\"body\": \"Elit minus dicta qu\", \"conn\": \"Aut ut Nam eius offi\"}', '{\"body\": \"Aute exercitationem\", \"conn\": \"Quo ullamco dolores\"}', '{\"body\": \"Similique proident\", \"conn\": \"Dignissimos et aliqu\"}', '{\"body\": \"Sequi consequat Ven\", \"conn\": \"Aliquam dolor ducimu\"}', '{\"body\": \"Veritatis rem accusa\", \"conn\": \"Beatae excepteur del\"}', '{\"body\": \"Quis omnis doloremqu\", \"conn\": \"Numquam molestiae do\"}', 'mud', 2, 1, 5, '2024-02-25 11:17:39', '2024-03-18 05:26:38'),
(9, 'Aut maiores velit di', 'Sit eum minim id rer', 'STC-6/24-S_T-Rig5-JAR-2', '2006-04-26', 'Aliquip voluptatem l', 'Eveniet dolore et d', '{\"conn\":\"Perspiciatis explic\",\"body\":\"Voluptas ex enim do\"}', '{\"conn\":\"Velit voluptas sit n\",\"body\":\"Officiis ducimus ni\"}', '{\"conn\":\"Aliquam ut voluptate\",\"body\":\"Sit atque velit iste\"}', '{\"conn\":\"Tenetur consequatur\",\"body\":\"Cupidatat et vero ve\"}', '{\"conn\":\"Placeat dolore pers\",\"body\":\"Dicta quia mollit es\"}', '{\"conn\":\"Facere magni sed per\",\"body\":\"Aute aut possimus e\"}', '{\"conn\":\"Corrupti maiores no\",\"body\":\"Veritatis ullam qui\"}', 'jar', 1, 1, 10, '2024-05-08 10:06:31', '2024-05-08 10:06:31');

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
(18, 'STC-10/24-S T-Rig15-1977-06-24', 'STC-10/24-S T-Rig15', '1977-06-24', 3, 5, NULL, 1, NULL, '2024-02-22 12:26:32', '2024-02-22 12:26:32');

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
(33, '{\"box_cb\": \"Temporibus velit ei\", \"box_od\": \"Eaque animi ex modi\", \"pin_id\": \"Mollitia sunt lorem\", \"pin_od\": \"Sint autem rerum mol\", \"serial\": \"Ea dolore aliqua De\", \"pin_srg\": \"Libero ut animi fug\", \"remarks\": \"Et quo quos molestia\", \"box_cond\": \"Voluptatem enim ad\", \"box_conn\": \"Quidem suscipit pari\", \"pin_cond\": \"Nisi odit aliquid po\", \"pin_conn\": \"Vel animi duis illu\", \"body_cond\": \"Rerum mollit quidem\", \"pin_bevel\": \"Nulla sit in nihil\", \"pin_length\": \"Consequatur Natus o\", \"body_length\": \"Ut nisi neque offici\", \"description\": \"Soluta molestias nis\", \"box_bb_depth\": \"Ut porro fuga Eiusm\", \"pin_diameter\": \"Corporis totam imped\", \"box_bb_diameter\": \"Quia quasi sunt ven\", \"body_fishing_neck\": \"Ad minus qui enim li\", \"box_bevel_diameter\": \"khater\"}', 'Tools', 16, '2024-04-04 06:14:23', '2024-04-04 06:14:23'),
(34, '{\"box_cb\": \"Tempore lorem ex ei\", \"box_od\": \"Voluptate et magnam\", \"pin_id\": \"Dolorem dolores et d\", \"pin_od\": \"Quam deserunt repreh\", \"serial\": \"Do sit eligendi sin\", \"pin_srg\": \"Repudiandae sit quas\", \"remarks\": \"Veritatis sed consec\", \"box_cond\": \"Voluptatem pariatur\", \"box_conn\": \"Dolore excepturi qui\", \"pin_cond\": \"Omnis alias dolore c\", \"pin_conn\": \"Voluptas anim nemo q\", \"body_cond\": \"Explicabo Eaque min\", \"pin_bevel\": \"Eos omnis dolor sunt\", \"pin_length\": \"Consequatur Maxime\", \"body_length\": \"Cumque nulla digniss\", \"description\": \"Quidem eius velit si\", \"box_bb_depth\": \"Officia voluptas con\", \"pin_diameter\": \"Dolore incididunt qu\", \"box_bb_diameter\": \"Dolorum voluptas cor\", \"body_fishing_neck\": \"Deserunt est perfere\", \"box_bevel_diameter\": \"khater2\"}', 'Tools', 16, '2024-04-04 06:14:23', '2024-04-04 06:14:23'),
(35, '{\"box_cb\": \"Ipsum ipsa est atqu\", \"box_od\": \"Aut qui repellendus\", \"pin_id\": \"Enim et repellendus\", \"pin_od\": \"Est proident tempor\", \"serial\": \"Quis nisi dolore sin\", \"pin_srg\": \"Perferendis odio ips\", \"remarks\": \"Impedit quos nisi r\", \"box_cond\": \"Eos do sed rerum asp\", \"box_conn\": \"Fugit aliquid sint\", \"pin_cond\": \"Ipsum qui sit commo\", \"pin_conn\": \"Accusantium voluptat\", \"body_cond\": \"Numquam veniam impe\", \"pin_bevel\": \"Nostrum natus sint\", \"pin_length\": \"Veniam dolore conse\", \"body_length\": \"Occaecat et ab offic\", \"description\": \"Molestiae provident\", \"box_bb_depth\": \"Deserunt quod volupt\", \"pin_diameter\": \"Ut ad dolores sint d\", \"box_bb_diameter\": \"Incididunt voluptas\", \"body_fishing_neck\": \"Optio modi officia\", \"box_bevel_diameter\": \"khater4\"}', 'Tools', 16, '2024-04-04 06:14:23', '2024-04-04 06:14:23'),
(36, '{\"box_cb\": \"In aut dolore quidem\", \"box_od\": \"Ut aliquip modi alia\", \"pin_id\": \"Ut est et eligendi o\", \"pin_od\": \"Proident autem omni\", \"serial\": \"Tempor quo doloribus\", \"pin_srg\": \"Cupidatat enim eveni\", \"remarks\": \"Suscipit dicta corru\", \"box_cond\": \"Aut exercitation ips\", \"box_conn\": \"Pariatur Velit veri\", \"pin_cond\": \"Optio minim aut mag\", \"pin_conn\": \"Consequatur rerum ex\", \"body_cond\": \"Necessitatibus deser\", \"pin_bevel\": \"Magna ullam et fugia\", \"pin_length\": \"Laboris ut illum qu\", \"body_length\": \"Deserunt voluptatem\", \"description\": \"Quia occaecat facere\", \"box_bb_depth\": \"Duis et quo et offic\", \"pin_diameter\": \"Illo quis qui ut ut\", \"box_bb_diameter\": \"Tempore adipisicing\", \"body_fishing_neck\": \"Laborum earum accusa\", \"box_bevel_diameter\": \"khater5\"}', 'Tools', 16, '2024-04-04 06:14:23', '2024-04-04 06:14:23'),
(43, '{\"serial\": \"Sed nemo amet fuga\", \"box1_cb\": \"Quam magnam eveniet\", \"box1_od\": \"Tenetur laborum Aut\", \"box2_cb\": \"Est voluptatem in q\", \"box2_od\": \"Voluptas est neque q\", \"remarks\": \"Nostrud blanditiis a\", \"body_cond\": \"Dolore vitae lorem e\", \"box1_cond\": \"Nesciunt minim offi\", \"box1_conn\": \"Ea incidunt est de\", \"box2_cond\": \"Est ea nobis aut qu\", \"box2_conn\": \"Provident voluptate\", \"body_length\": \"Doloremque in incidu\", \"description\": \"Sit rerum illum deb\", \"box1_bb_depth\": \"Soluta officiis minu\", \"box2_bb_depth\": \"Mollit temporibus vo\", \"box1_bb_diameter\": \"Accusantium perspici\", \"box2_bb_diameter\": \"Dolor vitae alias ma\", \"body_fishing_neck\": \"Ullam qui exercitati\", \"box1_bevel_diameter\": \"khater1\", \"box2_bevel_diameter\": \"Facere sunt cupidata\"}', 'Tools', 19, '2024-04-04 08:49:50', '2024-04-04 08:49:50'),
(44, '{\"serial\": \"Qui dolor aut eu sit\", \"box1_cb\": \"Non pariatur Porro\", \"box1_od\": \"Possimus magnam occ\", \"box2_cb\": \"Dolore consectetur\", \"box2_od\": \"Voluptatem Dignissi\", \"remarks\": \"Non amet anim elige\", \"body_cond\": \"Quis et officia dolo\", \"box1_cond\": \"Sunt voluptate unde\", \"box1_conn\": \"Quia officia amet s\", \"box2_cond\": \"Voluptate reprehende\", \"box2_conn\": \"Magnam repudiandae q\", \"body_length\": \"Quam aut non non sae\", \"description\": \"Explicabo Laborum\", \"box1_bb_depth\": \"In nemo deserunt eli\", \"box2_bb_depth\": \"Eos rem aut aut labo\", \"box1_bb_diameter\": \"Aliqua Ut irure qui\", \"box2_bb_diameter\": \"Sit ea ratione vero\", \"body_fishing_neck\": \"Qui qui unde et sit\", \"box1_bevel_diameter\": \"khater2\", \"box2_bevel_diameter\": \"Dolorem nulla tempor\"}', 'Tools', 19, '2024-04-04 08:49:50', '2024-04-04 08:49:50'),
(56, '{\"serial\": \"2121212\", \"pin1_id\": \"12\", \"pin1_od\": \"12\", \"pin2_id\": \"5\", \"pin2_od\": \"Reprehenderit saepe\", \"remarks\": \"454\", \"pin1_srg\": \"2\", \"pin2_srg\": \"54\", \"body_cond\": \"2\", \"pin1_cond\": \"12\", \"pin1_conn\": \"2\", \"pin2_cond\": \"21\", \"pin2_conn\": \"Tempore nostrud com\", \"pin1_bevel\": \"2\", \"pin2_bevel\": \"5645\", \"body_length\": \"45\", \"description\": \"21\", \"pin1_length\": \"12\", \"pin2_length\": \"54\", \"pin1_diameter\": \"21\", \"pin2_diameter\": \"4564\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(57, '{\"serial\": \"54\", \"pin1_id\": \"54\", \"pin1_od\": \"54\", \"pin2_id\": \"45\", \"pin2_od\": \"545\", \"remarks\": \"54\", \"pin1_srg\": \"54\", \"pin2_srg\": \"45\", \"body_cond\": \"54\", \"pin1_cond\": \"454\", \"pin1_conn\": \"45\", \"pin2_cond\": \"54\", \"pin2_conn\": \"45\", \"pin1_bevel\": \"54\", \"pin2_bevel\": \"54\", \"body_length\": \"54\", \"description\": \"545\", \"pin1_length\": \"54\", \"pin2_length\": \"454\", \"pin1_diameter\": \"54\", \"pin2_diameter\": \"45\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(58, '{\"serial\": \"54\", \"pin1_id\": \"45\", \"pin1_od\": \"45\", \"pin2_id\": \"45\", \"pin2_od\": \"45\", \"remarks\": \"54\", \"pin1_srg\": \"45\", \"pin2_srg\": \"54\", \"body_cond\": \"45\", \"pin1_cond\": \"45\", \"pin1_conn\": \"545\", \"pin2_cond\": \"45\", \"pin2_conn\": \"45\", \"pin1_bevel\": \"45\", \"pin2_bevel\": \"54\", \"body_length\": \"54\", \"description\": \"54\", \"pin1_length\": \"45\", \"pin2_length\": \"54\", \"pin1_diameter\": \"45\", \"pin2_diameter\": \"4\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(59, '{\"serial\": \"54\", \"pin1_id\": \"45\", \"pin1_od\": \"45\", \"pin2_id\": \"54\", \"pin2_od\": \"54\", \"remarks\": \"45\", \"pin1_srg\": \"454\", \"pin2_srg\": \"54\", \"body_cond\": \"45\", \"pin1_cond\": \"45\", \"pin1_conn\": \"45\", \"pin2_cond\": \"45\", \"pin2_conn\": \"45\", \"pin1_bevel\": \"54\", \"pin2_bevel\": \"5\", \"body_length\": \"45\", \"description\": \"545\", \"pin1_length\": \"54\", \"pin2_length\": \"54\", \"pin1_diameter\": \"45\", \"pin2_diameter\": \"54\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(60, '{\"serial\": \"54\", \"pin1_id\": \"54\", \"pin1_od\": \"5\", \"pin2_id\": \"45\", \"pin2_od\": \"5\", \"remarks\": \"54\", \"pin1_srg\": \"54\", \"pin2_srg\": \"45\", \"body_cond\": \"54\", \"pin1_cond\": \"45\", \"pin1_conn\": \"5\", \"pin2_cond\": \"4\", \"pin2_conn\": \"45\", \"pin1_bevel\": \"54\", \"pin2_bevel\": \"54\", \"body_length\": \"54\", \"description\": \"54\", \"pin1_length\": \"54\", \"pin2_length\": \"454\", \"pin1_diameter\": \"54\", \"pin2_diameter\": \"45\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(61, '{\"serial\": \"54\", \"pin1_id\": \"54\", \"pin1_od\": \"54\", \"pin2_id\": \"454\", \"pin2_od\": \"5\", \"remarks\": \"5\", \"pin1_srg\": \"5\", \"pin2_srg\": \"45\", \"body_cond\": \"54\", \"pin1_cond\": \"54\", \"pin1_conn\": \"54\", \"pin2_cond\": \"54\", \"pin2_conn\": \"54\", \"pin1_bevel\": \"54\", \"pin2_bevel\": \"54\", \"body_length\": \"54\", \"description\": \"54\", \"pin1_length\": \"454\", \"pin2_length\": \"454\", \"pin1_diameter\": \"54\", \"pin2_diameter\": \"5\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(62, '{\"serial\": \"5\", \"pin1_id\": \"51\", \"pin1_od\": \"54\", \"pin2_id\": \"34\", \"pin2_od\": \"34\", \"remarks\": \"54\", \"pin1_srg\": \"5\", \"pin2_srg\": \"381\", \"body_cond\": \"54\", \"pin1_cond\": \"54\", \"pin1_conn\": \"54\", \"pin2_cond\": \"54\", \"pin2_conn\": \"54\", \"pin1_bevel\": \"1\", \"pin2_bevel\": \"01\", \"body_length\": \"1\", \"description\": \"54\", \"pin1_length\": \"11\", \"pin2_length\": \"81\", \"pin1_diameter\": \"1\", \"pin2_diameter\": \"1\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(63, '{\"serial\": \"84\", \"pin1_id\": \"48\", \"pin1_od\": \"48\", \"pin2_id\": \"8\", \"pin2_od\": \"84\", \"remarks\": \"88\", \"pin1_srg\": \"44\", \"pin2_srg\": \"84\", \"body_cond\": \"54\", \"pin1_cond\": \"51\", \"pin1_conn\": \"Aut nihil id est si\", \"pin2_cond\": \"84\", \"pin2_conn\": \"843\", \"pin1_bevel\": \"84\", \"pin2_bevel\": \"48\", \"body_length\": \"4\", \"description\": \"164\", \"pin1_length\": \"84\", \"pin2_length\": \"8\", \"pin1_diameter\": \"848\", \"pin2_diameter\": \"484\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(64, '{\"serial\": \"48\", \"pin1_id\": \"8484\", \"pin1_od\": \"48\", \"pin2_id\": \"84\", \"pin2_od\": \"84\", \"remarks\": \"84\", \"pin1_srg\": \"844\", \"pin2_srg\": \"8\", \"body_cond\": \"84\", \"pin1_cond\": \"48\", \"pin1_conn\": \"884\", \"pin2_cond\": \"4884\", \"pin2_conn\": \"4\", \"pin1_bevel\": \"4884\", \"pin2_bevel\": \"484\", \"body_length\": \"848\", \"description\": \"84\", \"pin1_length\": \"84\", \"pin2_length\": \"848\", \"pin1_diameter\": \"84\", \"pin2_diameter\": \"8484\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(65, '{\"serial\": \"884\", \"pin1_id\": \"84\", \"pin1_od\": \"8484\", \"pin2_id\": \"8484\", \"pin2_od\": \"84\", \"remarks\": \"84\", \"pin1_srg\": \"84\", \"pin2_srg\": \"8484\", \"body_cond\": \"8\", \"pin1_cond\": \"8484\", \"pin1_conn\": \"8484\", \"pin2_cond\": \"8\", \"pin2_conn\": \"84\", \"pin1_bevel\": \"84\", \"pin2_bevel\": \"48\", \"body_length\": \"84\", \"description\": \"8\", \"pin1_length\": \"8484\", \"pin2_length\": \"8\", \"pin1_diameter\": \"8484\", \"pin2_diameter\": \"84\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(66, '{\"serial\": \"84\", \"pin1_id\": \"84\", \"pin1_od\": \"8484\", \"pin2_id\": \"884\", \"pin2_od\": \"88\", \"remarks\": \"84\", \"pin1_srg\": \"484\", \"pin2_srg\": \"84\", \"body_cond\": \"84\", \"pin1_cond\": \"84\", \"pin1_conn\": \"84\", \"pin2_cond\": \"8484\", \"pin2_conn\": \"8484\", \"pin1_bevel\": \"84\", \"pin2_bevel\": \"84\", \"body_length\": \"84\", \"description\": \"8484\", \"pin1_length\": \"84\", \"pin2_length\": \"8484\", \"pin1_diameter\": \"848\", \"pin2_diameter\": \"84\"}', 'Tools', 17, '2024-04-04 10:15:31', '2024-04-04 10:15:31'),
(70, '{\"box_cb\": \"Voluptas do eius par\", \"box_od\": \"Officiis ut sed culp\", \"pin_id\": \"Minima est sint co\", \"pin_od\": \"Ea sit dolor qui qu\", \"serial\": \"Sed cillum quod veni\", \"pin_srg\": \"Ipsum nisi consequun\", \"remarks\": \"Pariatur Autem cons\", \"box_cond\": \"we2\", \"box_conn\": \"Labore quia ab volup\", \"pin_cond\": \"we1\", \"pin_conn\": \"Fugiat officiis et f\", \"body_cond\": \"SD\", \"pin_bevel\": \"Deserunt non tempore\", \"pin_length\": \"Praesentium nihil qu\", \"body_length\": \"Maiores corporis cor\", \"description\": \"Provident in et aut\", \"box_bb_depth\": \"Magnam ea rerum aliq\", \"pin_diameter\": \"Ut alias fugiat volu\", \"box_bb_diameter\": \"Dolores et saepe est\", \"body_fishing_neck\": \"Quasi culpa veritati\", \"box_bevel_diameter\": \"Ullamco saepe reicie\"}', 'Tools', 20, '2024-04-18 08:57:01', '2024-04-18 08:57:01'),
(71, '{\"box_cb\": \"Dolore nemo iste quo\", \"box_od\": \"Deserunt non incidun\", \"pin_id\": \"Quis consequat Veri\", \"pin_od\": \"Qui cum eius id exc\", \"serial\": \"Vero ut labore aut v\", \"pin_srg\": \"Irure dicta quia aut\", \"remarks\": \"Labore soluta possim\", \"box_cond\": \"B.B\", \"box_conn\": \"Amet sit vitae qua\", \"pin_cond\": \"TD\", \"pin_conn\": \"Sed officia est qui\", \"body_cond\": \"we3\", \"pin_bevel\": \"Laborum Ut saepe qu\", \"pin_length\": \"Quia autem quisquam\", \"body_length\": \"Quod molestias quis\", \"description\": \"In minus in neque in\", \"box_bb_depth\": \"Rerum molestiae poss\", \"pin_diameter\": \"Dolore beatae volupt\", \"box_bb_diameter\": \"Ut ut aute officia q\", \"body_fishing_neck\": \"Est tempor ad est to\", \"box_bevel_diameter\": \"Ab vitae ut cupidita\"}', 'Tools', 20, '2024-04-18 08:57:01', '2024-04-18 08:57:01'),
(72, '{\"box_cb\": \"Tempora eveniet lib\", \"box_od\": \"Accusamus nulla at i\", \"pin_id\": \"Et esse provident a\", \"pin_od\": \"Ad rem animi dolore\", \"serial\": \"Aut laboris in fugit\", \"pin_srg\": \"Rerum anim mollit mo\", \"remarks\": \"Non molestiae incidi\", \"box_cond\": \"SRG\", \"box_conn\": \"Aliquam atque quis i\", \"pin_cond\": \"ok\", \"pin_conn\": \"Eos laborum Aliquip\", \"body_cond\": \"we3\", \"pin_bevel\": \"Necessitatibus quis\", \"pin_length\": \"Accusantium impedit\", \"body_length\": \"Occaecat irure velit\", \"description\": \"Quis exercitation et\", \"box_bb_depth\": \"Suscipit vero est u\", \"pin_diameter\": \"Dolore ad assumenda\", \"box_bb_diameter\": \"Sit eum sed sed sequ\", \"body_fishing_neck\": \"Nulla et duis vel qu\", \"box_bevel_diameter\": \"Dolore natus reicien\"}', 'Tools', 20, '2024-04-18 08:57:01', '2024-04-18 08:57:01');

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
(17, 'EGPC Registration No:', '122 / Dec 2022', '2024-05-01 07:55:09', '2024-05-01 07:55:09'),
(18, 'Doc Ref :', NULL, '2024-05-01 07:55:20', '2024-05-01 07:55:20'),
(19, 'Tax ID Number:', '479-427-860', '2024-05-01 07:55:36', '2024-05-01 07:55:36'),
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
(14, 'rig20', 8, 'egypt alex', NULL, '2024-02-04 10:34:20', '2024-02-08 04:33:24');

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

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `thorough_examination`
--

CREATE TABLE `thorough_examination` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_date` date NOT NULL,
  `report_number` varchar(255) DEFAULT NULL,
  `identified_number` varchar(255) DEFAULT NULL,
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

INSERT INTO `thorough_examination` (`id`, `exam_date`, `report_number`, `identified_number`, `qty`, `manufature_date`, `swl`, `last_exam_date`, `original_cert_number`, `original_cert_date`, `cert_body_name`, `desc_header`, `desc_content`, `diameter`, `length`, `description`, `location`, `type`, `thorough_type`, `first_exam_after`, `carried_out`, `has_equipment`, `defect_note`, `accept`, `danger`, `danger_date`, `next_exam`, `carried_exam`, `carried_note`, `safe_equipment`, `desc_type`, `perfect_note`, `desc_manufature`, `user_id`, `order_id`, `created_at`, `updated_at`, `diameter_unit`, `length_unit`, `shaklesize_id`) VALUES
(11, '1991-11-01', 'STC-6/24-S_T-Rig5-SHAKLE-2', '407', '811', '2015-08-04', NULL, '1984-11-04', '3', '2009-02-25', 'Fiona Maddox', 'Iusto ut sequi alias', NULL, NULL, NULL, NULL, NULL, 'shakle', NULL, 1, 'interval_year', 1, 'r4r4r4r4r', 1, 1, '2024-02-10', '1992-04-30', '[\"visual_inspection\"]', 'vfxrgxzf', 1, 'Ea delectus et ut q', 'vcxvrfgxzvd', 'Odit elit duis volu', 1, 10, '2024-02-07 12:02:56', '2024-02-12 11:48:37', NULL, NULL, 9),
(14, '2004-07-06', 'STC-3/24-ECDC-Rig5-SHAKLE-2', '329', '612', '2010-11-24', NULL, '2017-11-15', '211', '1978-01-30', 'Lila Kane', 'Quis in amet sed qu', NULL, NULL, NULL, NULL, NULL, 'shakle', NULL, 0, 'interval_year', 0, NULL, 0, 0, NULL, '2005-01-05', '[\"finction_test\"]', NULL, 0, 'Autem distinctio Du', NULL, 'Voluptatibus aliquid', 1, 5, '2024-02-08 10:01:06', '2024-02-08 10:57:54', NULL, NULL, 12),
(17, '2008-08-09', 'STC-3/24-ECDC-Rig5-WIRE-1', '216', '464', '1989-08-29', 'khater', '1987-07-12', '159', '2007-04-11', 'Alan Ratliff', 'Culpa excepturi repu', 'Ex laboriosam dolor', NULL, NULL, NULL, 'Magnam minima tempor', 'wire', NULL, 1, 'interval_year', 1, 'vcv', 1, 1, '2024-02-21', '2009-02-08', '[\"visual_inspection\"]', 'vcvc', 1, NULL, 'xssds', NULL, 1, 5, '2024-02-12 11:33:02', '2024-05-13 02:50:13', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(20, '2003-04-11', 'STC-3/24-ECDC-Rig5-THOROUGH-1', '537', '247', '1992-01-18', 'Est dolore qui ut a', '2006-12-07', '763', '2013-07-02', 'Lillith Coffey', NULL, NULL, NULL, NULL, 'Ex totam enim placea', NULL, 'thorough', 'Nihil assumenda iste', 1, 'interval_year', 1, 'deede', 0, 1, NULL, '2003-10-10', '[\"function_test\"]', 'de', 1, NULL, 'dede', NULL, 1, 5, '2024-02-12 11:42:30', '2024-02-12 11:42:30', NULL, NULL, NULL),
(23, '2008-04-22', 'STC-3/24-ECDC-Rig5-QUI REPELLENDUS ALI-4', '345', '233', '1973-06-08', 'Laborum incidunt se', '2008-01-02', '588', '2023-05-09', 'Berk Sellers', NULL, NULL, NULL, NULL, 'Qui quia vel maxime', NULL, 'thorough', 'Qui repellendus Ali', 1, 'interval_year', 1, 'rer', 1, 1, '2024-02-07', '2008-10-21', '[\"visual_inspection\"]', 'ree', 1, NULL, 're', NULL, 1, 5, '2024-02-18 05:02:51', '2024-02-18 05:02:51', NULL, NULL, NULL),
(35, '2020-08-28', 'STC-9/24-ECDC-Rig12-ILLUM NOBIS PRAESEN-2', '321', '370', '2000-07-26', 'Quis eaque quidem ve', '1975-09-05', '696', '1975-01-30', 'Ayanna Kennedy', NULL, NULL, NULL, NULL, 'Ex reprehenderit re', NULL, 'thorough', 'Illum nobis praesen', 1, 'interval_year', 1, 'frsfrs', 1, 1, '2024-02-17', '2021-02-27', '[\"visual_inspection\",\"function_test\",\"load_test\",\"mpi\"]', 'frss', 0, NULL, 'frsrs', NULL, 1, 13, '2024-02-18 10:49:13', '2024-02-18 10:49:13', NULL, NULL, NULL),
(36, '1990-02-09', 'STC-9/24-ECDC-Rig10-SED PERSPICIATIS UT-2', '467', '683', '2014-04-08', 'Saepe magnam rerum e', '2019-07-19', '271', '2006-08-07', 'Denise Sweet', NULL, NULL, NULL, NULL, 'Illo esse ad molest', NULL, 'thorough', 'Sed perspiciatis ut', 1, 'interval_year', 1, 'vdfd', 1, 1, '2024-02-15', '1990-08-08', '[\"visual_inspection\"]', 'vdffd', 1, NULL, 'vdfvd', NULL, 1, 6, '2024-02-18 10:50:04', '2024-02-18 10:50:04', NULL, NULL, NULL),
(37, '2016-01-16', 'STC-9/24-ECDC-Rig12-THOROUGH-0', '601', '12', '2011-05-03', 'Alias et quia est ac', '1984-06-10', '310', '2018-01-03', 'Skyler Hatfield', NULL, NULL, NULL, NULL, 'Qui in ex aute enim', NULL, 'thorough', 'Id earum sint corrup', 1, 'interval_year', 1, 'dsedes', 1, 1, '2024-02-14', '2016-07-15', '[\"visual_inspection\"]', 'ds', 0, NULL, 'dsds', NULL, 1, 13, '2024-02-18 10:51:28', '2024-02-18 14:39:43', NULL, NULL, NULL),
(38, '1980-12-19', 'STC-9/24-Test_comapny-Rig12-THOROUGH-0', '777', '686', '1988-06-02', 'Ex reiciendis qui am', '1976-01-11', '774', '1979-02-03', 'Cheryl Boyle', NULL, NULL, NULL, NULL, 'Harum aut aute sunt', NULL, 'thorough', 'Magna asperiores ut', 1, 'interval_year', 1, 'fewf', 0, 1, '2024-02-09', '1981-06-18', '[\"visual_inspection\",\"function_test\",\"load_test\",\"mpi\"]', 'mk', 1, NULL, 'mvrekver', NULL, 1, 12, '2024-02-18 15:06:04', '2024-02-18 18:06:57', NULL, NULL, NULL),
(41, '1992-01-05', 'STC-10/24-Quincy_Cunningham-Rig5-THOROUGH-0', '688', '616', '2002-09-25', 'Asperiores officia n', '1972-03-10', '729', '1990-07-09', 'Matthew Porter', NULL, NULL, NULL, NULL, 'Perspiciatis debiti', NULL, 'thorough', 'Adipisicing omnis se', 1, 'interval_year', 1, 'mkmk', 1, 1, '2024-02-06', '1992-07-04', '[\"visual_inspection\"]', 'kmk', 1, NULL, 'mkmk', NULL, 1, 14, '2024-02-21 18:12:38', '2024-02-29 11:13:00', NULL, NULL, NULL),
(42, '1986-09-27', 'STC-9/24-S_T-Rig2-THOROUGH-0', '870', '362', '1974-06-29', 'Dolore in ipsam qui', '2024-02-29', '387', '2018-05-07', 'Wynne Reynolds', NULL, NULL, NULL, NULL, 'Dolorem est et dolo', NULL, 'thorough', 'Omnis inventore anim', 0, 'interval_year', 0, NULL, 0, 0, NULL, '1987-03-26', '[\"visual_inspection\"]', NULL, 1, NULL, NULL, NULL, 1, 7, '2024-02-21 18:14:40', '2024-03-07 08:45:18', NULL, NULL, NULL),
(43, '1984-12-25', 'STC-9/24-Test_comapny-Rig12-THOROUGH-0', '61', '57', '1980-08-31', 'Ipsum distinctio Re', '1992-03-31', '783', '1978-01-15', 'Marcia Benton', NULL, NULL, NULL, NULL, 'Debitis est autem nu', NULL, 'thorough', 'Illo tempore labori', 1, 'circumstances', 0, 'rr', 1, 1, '2024-03-20', '1985-06-24', '[\"visual_inspection\"]', 'rr', 1, NULL, 'rr', NULL, 1, 12, '2024-03-07 11:59:30', '2024-03-08 05:46:55', NULL, NULL, NULL),
(44, '1975-06-02', 'STC-9/24-ECDC-Rig10-WIRE-1', '970', '388', '2004-06-06', 'Vel ut quae debitis', '2006-05-21', '658', '2007-11-18', 'Breanna Cortez', 'Saepe distinctio Ins', 'Sint in suscipit con', NULL, NULL, NULL, 'Proident iure eum d', 'wire', NULL, 0, 'circumstances', 1, NULL, 0, 1, NULL, '1975-12-01', '[\"visual_inspection\"]', NULL, 1, NULL, NULL, NULL, 1, 6, '2024-03-08 06:26:02', '2024-03-18 05:24:28', 'Choose Diameter Unit', 'Choose Length Unit', NULL),
(45, '1992-03-25', 'STC-3/24-ECDC-Rig5-NULLA OMNIS ACCUSAMU-4', '556', '647', '1982-02-26', 'Sapiente totam verit', '1998-06-26', '550', '2012-07-17', 'Cassady Harmon', NULL, NULL, NULL, NULL, 'Nihil in fugit volu\r\nsdmskdmfs\r\nnfsnd \r\nmdfdkng\r\nnjdnfjngjfd\r\nnjdfjngdfg', NULL, 'thorough', 'Nulla omnis accusamu', 0, 'interval_year', 0, 'fdsfs', 1, 0, '2024-04-17', '1993-03-24', '[\"visual_inspection\",\"function_test\",\"load_test\",\"mpi\"]', 'Laudantium et nostr', 0, NULL, 'fdsf', NULL, 1, 5, '2024-04-17 07:23:40', '2024-04-17 07:23:40', NULL, NULL, NULL),
(46, '1985-12-02', 'STC-9/24-ECDC-Rig12-CULPA ET EXPEDITA N-4', '368', '707', '2006-04-17', 'Labore debitis qui a', '1986-11-09', '197', '1981-03-05', 'Zenaida Ramos', NULL, NULL, NULL, NULL, 'Rerum possimus assu', NULL, 'thorough', 'Culpa et expedita n', 1, 'interval_month', 0, 'dummy data', 0, 0, '2024-05-16', '1986-06-01', '[\"visual_inspection\",\"function_test\"]', 'wew', 1, NULL, 'dummy data', NULL, 1, 13, '2024-05-13 05:12:07', '2024-05-13 05:12:07', NULL, NULL, NULL),
(47, '1982-06-20', 'STC-9/24-Test_comapny-Rig12-ID ULLAM MAGNAM IPSA-4', '223', '122', '2010-12-22', 'Soluta excepturi et', '1999-06-03', '801', '1975-01-10', 'Brock Jennings', NULL, NULL, NULL, NULL, 'Do excepteur laborio', NULL, 'thorough', 'Id ullam magnam ipsa', 0, 'interval_month', 1, 'dummy data', 1, 0, '2024-05-09', '1982-12-19', '[\"visual_inspection\"]', 'dummy data', 0, NULL, 'dummy data', NULL, 1, 12, '2024-05-13 05:13:27', '2024-05-13 05:13:27', NULL, NULL, NULL),
(48, '1989-07-10', 'STC-10/24-S T-Rig15-IUSTO ILLO AB MOLEST-2', '157', '173', '1987-02-09', 'Aut ut nulla maiores', '1973-09-05', '219', '2016-09-19', 'Oscar David', NULL, NULL, NULL, NULL, 'Autem est ea aliqua', NULL, 'thorough', 'Iusto illo ab molest', 0, 'interval_month', 0, 'dummy data', 1, 0, '2024-05-24', '1990-01-09', '[\"visual_inspection\",\"function_test\"]', 'dummy data', 0, NULL, 'dummy data', NULL, 1, 18, '2024-05-13 05:14:38', '2024-05-13 05:14:38', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report_num` varchar(255) DEFAULT NULL,
  `work_order` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `st_date` date DEFAULT NULL,
  `fin_date` date DEFAULT NULL,
  `spec` varchar(255) NOT NULL,
  `procedure` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`methods`)),
  `summary` varchar(255) NOT NULL,
  `accept` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `report_num`, `work_order`, `status`, `st_date`, `fin_date`, `spec`, `procedure`, `type`, `methods`, `summary`, `accept`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(16, 'STC-6/24-S_T-Rig5-BOX*PIN-1', 'Ad ea est nostrud l', 'Laboriosam adipisci', '2015-10-27', '1979-06-03', 'Optio officiis maio', 'Repellendus Soluta', 'box*pin', '[\"visual\", \"dimensional\", \"eddy current\", \"ultrasonic\"]', 'Laborum exercitation', 1, 1, 10, '2024-04-04 05:52:02', '2024-04-04 06:14:23'),
(17, 'STC-3/24-ECDC-Rig5-PIN*PIN-1', 'In magni odio ut ex', 'Velit perferendis ma', '2009-02-17', '1975-06-19', 'Recusandae Praesent', 'Excepturi aut corpor', 'pin*pin', '[\"visual\", \"boroscopic\", \"dimensional\", \"mag particle\", \"eddy current\", \"liquid penet\", \"ultrasonic\"]', 'Dolore natus cupidat', 3, 1, 5, '2024-04-04 06:27:25', '2024-04-04 10:15:31'),
(19, 'STC-9/24-S_T-Rig2-BOX*BOX-1', 'Adipisci et minus ve', 'Omnis ipsa a aute r', '1998-01-10', '1989-05-14', 'Consequat Hic sit', 'Cupiditate accusanti', 'box*box', '[\"visual\", \"mag particle\", \"liquid penet\"]', 'Eu qui facilis id no', 1, 1, 7, '2024-04-04 07:02:05', '2024-04-04 08:49:50'),
(20, 'STC-3/24-ECDC-Rig5-BOX*PIN-1', 'Ut blanditiis natus', 'Vero elit aut sunt', '2015-12-13', '1981-08-16', 'Exercitation et fugi', 'Culpa labore aut eli', 'box*pin', '[\"mag particle\"]', 'Mollitia sint ipsam', 2, 1, 5, '2024-04-18 08:55:36', '2024-04-18 08:57:01');

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
  `report_num` varchar(255) DEFAULT NULL,
  `order_num` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `desc` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `methods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`methods`)),
  `magnetic_particles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`magnetic_particles`)),
  `equipment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`equipment`)),
  `remarks` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `pin_conn` varchar(255) NOT NULL,
  `box_conn` varchar(255) NOT NULL,
  `accepted_conn` int(11) NOT NULL,
  `defective_conn` int(11) NOT NULL,
  `repaired_conn` int(11) NOT NULL,
  `total_conn` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `accept` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL
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
  `role` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` tinyint(4) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` tinyint(4) NOT NULL,
  `trash` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `full_name`, `email`, `role`, `email_verified_at`, `deleted_at`, `password`, `remember_token`, `created_at`, `created_by`, `updated_at`, `updated_by`, `trash`) VALUES
(1, 'Admin', 'Mohamed Khater User', 'admin@stc.com', 1, NULL, NULL, '$2y$10$Bf17si1K3dPzSb3miBju0OKot7SYAUjEDCQp20aTJRpOCayh2jz1u', NULL, NULL, 0, '2024-02-06 04:36:04', 1, 0),
(4, 'Mohamed Khater', '', 'khater@stc.com', 2, NULL, NULL, '$2y$10$3MxPJBipK7dxI28uvaIac.YzvZqSdONOFfwrqiG0fscuDDRNEvHG.', NULL, NULL, 0, '2023-12-04 10:45:00', 0, 1);

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
-- Indexes for table `job_ticket_content`
--
ALTER TABLE `job_ticket_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_ticket_content_jobticket_id_foreign` (`job_ticket_id`);

--
-- Indexes for table `mad_jar_body`
--
ALTER TABLE `mad_jar_body`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mad_jar_body_mud_jar_id_foreign` (`mud_jar_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_ticket`
--
ALTER TABLE `job_ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `job_ticket_content`
--
ALTER TABLE `job_ticket_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `mad_jar_body`
--
ALTER TABLE `mad_jar_body`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `mpi`
--
ALTER TABLE `mpi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `mud_jar`
--
ALTER TABLE `mud_jar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_desc`
--
ALTER TABLE `report_desc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `report_settings`
--
ALTER TABLE `report_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rig`
--
ALTER TABLE `rig`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shakle_size`
--
ALTER TABLE `shakle_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `thorough_examination`
--
ALTER TABLE `thorough_examination`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tools_extensions`
--
ALTER TABLE `tools_extensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tublar_summary`
--
ALTER TABLE `tublar_summary`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tubs`
--
ALTER TABLE `tubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `checklist_thorough_examination_id_foreign` FOREIGN KEY (`thorough_examination_id`) REFERENCES `thorough_examination` (`id`);

--
-- Constraints for table `job_ticket`
--
ALTER TABLE `job_ticket`
  ADD CONSTRAINT `job_ticket_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_ticket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `job_ticket_content`
--
ALTER TABLE `job_ticket_content`
  ADD CONSTRAINT `job_ticket_content_jobticket_id_foreign` FOREIGN KEY (`job_ticket_id`) REFERENCES `job_ticket` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mad_jar_body`
--
ALTER TABLE `mad_jar_body`
  ADD CONSTRAINT `mad_jar_body_mud_jar_id_foreign` FOREIGN KEY (`mud_jar_id`) REFERENCES `mud_jar` (`id`) ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
