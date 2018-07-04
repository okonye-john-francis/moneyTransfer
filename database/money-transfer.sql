-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 09:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `money-transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` enum('bank_account','mobile_money') COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accounts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_name`, `account_type`, `account_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'MTN Mobile Money', 'mobile_money', '0788753585', 3, '2018-07-03 21:00:00', '2018-07-03 21:00:00'),
(2, 'DFCU', 'bank_account', '01371036825126', 3, '2018-07-03 21:00:00', '2018-07-03 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_03_083857_create_accounts_table', 1),
(2, '2018_07_03_083937_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` decimal(8,2) NOT NULL,
  `sender_account` int(10) UNSIGNED NOT NULL,
  `reciever_account` int(10) UNSIGNED NOT NULL,
  `Created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_sender_account_foreign` (`sender_account`),
  KEY `transactions_reciever_account_foreign` (`reciever_account`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phonenumber`, `country`, `is_active`, `password`, `created_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Okonye', 'John Francis', 'francis.jero2@gmail.com', '0788753585', 'Uganda', 1, '$2y$10$vCao0UfwsxB5cqzWNxHJxO2MXqNFdkhRm0HLpGV01bJkYtR8vWgjW', NULL, 'X9ANHJ37Iw1y3N8V1EZJZZ2RHClwsapf5FMsoxzBNmNJlJ1PX5tgDtDSRH2H', '2018-07-03 09:35:48', '2018-07-03 09:35:48'),
(4, 'Ngolobe', 'Fredrick', 'ngolobefredrick@gmail.com', '0702753585', 'Uganda', 1, '$2y$10$ZmW9../lFx5eRyvDQ60jl.9V1N0Yqx7R.sbMYpRmJx9LIULxHL.62', NULL, 'ME90M5B1v9vPlFAyDS5vjofaJGDXhWRXJTe6DPmathHuerFdaLabOB48mYiA', '2018-07-03 12:55:48', '2018-07-03 12:55:48'),
(5, 'admin', 'admin', 'admin@admin.com', '0712341111', 'Uganda', 1, '$2y$10$sd19usE/G1aak5JPnNScI.tooSgGMAgIy4mYyI1lU3ALa.ZnThi7e', NULL, 'Hg7zrFfPA7APOXgZLi8dofb5V363B3cgivFSLNsiMzB2RsgEpY8nRB5DYJb4', '2018-07-03 12:57:36', '2018-07-03 12:57:36'),
(6, 'Obua', 'Emmanuel', 'eobua@gmail.com', '0791263961', 'Rwanda', 1, '$2y$10$gApZ2rAoTyS9sET7SQcp6ejCxKswfGPNDY4v/zDb6KwNh6lGdkpbm', NULL, 'nGGjLHxiWK8KmvdM73RCKX4zZudUFLIdgdrKYKHfnQh7z8WOoZFOyTbbQ2W1', '2018-07-03 13:24:34', '2018-07-03 13:24:34'),
(7, 'Mugoda', 'Pascal', 'mugodapascal@gmail.com', '0785133725', 'Uganda', 1, '$2y$10$66XMob5liXsrLK0Cp7a6euRi7VwGBoL8DWC46/K8Spq3P8Cyhg4U2', '3', 'cdCk6b1sJwtI0BLJ0i3e2cSjwkjhoSbSXoxKeEtk28KP6dHYLGtcCWc3Drqw', '2018-07-03 17:59:42', '2018-07-03 17:59:42'),
(8, 'Walusansa', 'Douglas', 'walusansadouglas@gmail.com', '0712673925', 'Rwanda', 1, '$2y$10$3IJBlcawItAmQEMabs3THe53RRg4VO5rNHe25xav0njiUugdMiSDC', '3', 'IaZRGbGoxzqcurQOnlZd1mFgPGvYM2QnBiY1MJxrzdQJJxBAh1oHiGd0fLMF', '2018-07-03 18:01:04', '2018-07-03 18:01:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
