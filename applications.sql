-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 10:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snatcoopsco_site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_form` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stop_order` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payslip` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proof_residence` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence_confirmation` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_residence_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `app_name`, `membership_form`, `stop_order`, `id_card`, `payslip`, `proof_residence`, `residence_confirmation`, `owner_residence_id`, `passport_photo`, `created_at`, `updated_at`) VALUES
(21, '1710335818', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 11:16:58', '2024-03-13 11:16:58'),
(22, '1710336054', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 11:20:54', '2024-03-13 11:20:54'),
(23, '1710336548', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 11:29:08', '2024-03-13 11:29:08'),
(24, '1710337482', '24_application_formBDL Fee Policy.pdf', '24_stop_orderQuotation QUA40540.pdf', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 11:44:42', '2024-03-13 11:44:42'),
(25, '1710337739', '25_application_form_BDL Fee Policy.pdf', '25_stop_order_Quotation QUA40540.pdf', '25_id_card_BDL Fee Policy.pdf', NULL, NULL, NULL, NULL, NULL, '2024-03-13 11:49:00', '2024-03-13 11:49:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
