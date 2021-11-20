-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2021 at 06:32 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitfarms_ltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@email.com', 'admin', 'super-admin', NULL, '$2y$10$S8hZJtoese8GqnpYC9eDW.0rwYePezyCQ6i8pJJQxsR.bhIIccuSC', NULL, NULL, '2020-12-23 11:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallet_addresses`
--

DROP TABLE IF EXISTS `admin_wallet_addresses`;
CREATE TABLE IF NOT EXISTS `admin_wallet_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` bigint(50) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_wallet_addresses`
--

INSERT INTO `admin_wallet_addresses` (`id`, `admin_id`, `name`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'BTC', '3MNVPUwfph2NaRViKGfv1Q7rBjaQ3zvaQY', '1625249010validation.png', NULL, '2021-07-02 17:03:30'),
(2, 1, 'ETH', '1BfSBpGosSzV3ytHXK1xHH14RWyGBfVrMu', NULL, NULL, '2020-12-23 11:27:48'),
(3, 1, 'LTC', 'LdcriFxmxit6hzj9JNbZZBacC1L4vV8Qx1', NULL, NULL, '2020-12-23 11:27:48'),
(4, 1, 'XRP', '864212964', NULL, NULL, '2020-12-23 11:27:48'),
(5, 1, 'TRON', 'TDkKDLFmARzBrSpUt6Nxn6T3bBxfYJHFo9', NULL, NULL, '2020-12-23 11:27:48'),
(6, 1, 'USDT', '0xd413365D3AA6ac0f5984323d26fdfD85dE6CF487', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

DROP TABLE IF EXISTS `investments`;
CREATE TABLE IF NOT EXISTS `investments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invest_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_package_id` int(10) UNSIGNED DEFAULT NULL,
  `cryptocurrency` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `investments_investment_package_id_index` (`investment_package_id`),
  KEY `investments_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `invest_id`, `investment_package_id`, `cryptocurrency`, `user_id`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(20, 'DMI-37239', 1, 'BTC', 11, 45, 0, '2021-07-02 11:06:58', '2021-07-02 11:06:58'),
(19, 'DMI-03844', 2, 'Bitcoin Cash', 11, 2000, 1, '2021-03-14 11:33:24', '2021-03-14 11:33:24'),
(18, 'DMI-59109', 1, 'Binance Coin', 11, 400, 1, '2021-03-14 11:33:03', '2021-03-14 11:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `investment_packages`
--

DROP TABLE IF EXISTS `investment_packages`;
CREATE TABLE IF NOT EXISTS `investment_packages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `referral_bonus` int(11) DEFAULT NULL,
  `monthly_profit` int(11) DEFAULT NULL,
  `days_turnover` int(11) DEFAULT NULL,
  `expert_advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `option1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compound_roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_packages`
--

INSERT INTO `investment_packages` (`id`, `name`, `min`, `max`, `referral_bonus`, `monthly_profit`, `days_turnover`, `expert_advice`, `deposit_bonus`, `option1`, `option2`, `option3`, `description`, `roi`, `compound_roi`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 50, 499, NULL, NULL, 24, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Build an emergency fund so you can weather any storm. We recommend this for every client, because life happens.', '10% after 24 hours', NULL, 1, NULL, NULL),
(2, 'Silver', 500, 4999, NULL, NULL, 48, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Helps investors lower risk; whether you’re saving for a purchase, short-term goal or a payment plan. This plan will help you achieve it Faster', '20% after 48 hours ', NULL, 1, NULL, NULL),
(3, 'Gold', 2000, NULL, NULL, NULL, 72, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Start on the path of financial freedom. It may seem far away, but starting sooner makes it easier to get the retirement lifestyle you want.\r\n            (You can make daily/weekly/Monthly deposits till you get to the minimum investment)\r\n            ', '50% after 72 hours', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_30_200519_create_wallets_table', 1),
(5, '2020_05_30_200548_create_admins_table', 1),
(6, '2020_05_30_200614_create_investments_table', 1),
(7, '2020_06_03_082900_create_investment_packages_table', 1),
(9, '2020_10_16_004759_create_transactions_table', 2),
(10, '2020_12_22_061339_create_admin_wallet_addresses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `debit`, `credit`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 10000, 0, 'You made an investment request', '2020-10-16 11:31:01', '2020-10-16 11:31:01'),
(2, 10, 0, 10000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 11:59:15', '2020-10-16 11:59:15'),
(3, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:03:38', '2020-10-16 12:03:38'),
(4, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:05:46', '2020-10-16 12:05:46'),
(5, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:09:08', '2020-10-16 12:09:08'),
(6, 11, 0, 400, 'profit from', '2020-11-15 11:29:29', '2020-11-15 11:29:29'),
(7, 12, 0, 300, 'for commission', '2020-11-15 11:33:21', '2020-11-15 11:33:21'),
(8, 12, 0, 800, NULL, '2020-11-21 13:16:54', '2020-11-21 13:16:54'),
(9, 11, 400, 0, 'You made an investment request', '2020-12-27 09:02:20', '2020-12-27 09:02:20'),
(10, 11, 500, 0, 'You made an investment request', '2021-03-07 13:22:34', '2021-03-07 13:22:34'),
(11, 11, 555, 0, 'You made an investment request', '2021-03-07 13:27:01', '2021-03-07 13:27:01'),
(12, 11, 0, 555, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:28:38', '2021-03-07 13:28:38'),
(13, 11, 0, 500, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:28:49', '2021-03-07 13:28:49'),
(14, 11, 400, 0, 'You made an investment request', '2021-03-07 13:32:04', '2021-03-07 13:32:04'),
(15, 11, 0, 400, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:34:02', '2021-03-07 13:34:02'),
(16, 11, 700, 0, 'You made an investment request', '2021-03-07 13:35:19', '2021-03-07 13:35:19'),
(17, 11, 2000, 0, 'You made an investment request', '2021-03-09 13:56:10', '2021-03-09 13:56:10'),
(18, 11, 0, 2000, 'Congratulations, Your Investment Has Been Approved', '2021-03-09 13:57:29', '2021-03-09 13:57:29'),
(19, 11, 600, 0, 'You made an investment request', '2021-03-13 09:18:55', '2021-03-13 09:18:55'),
(20, 11, 7000, 0, 'You made an investment request', '2021-03-13 09:19:18', '2021-03-13 09:19:18'),
(21, 11, 400, 0, 'You made an investment request', '2021-03-13 09:30:31', '2021-03-13 09:30:31'),
(22, 11, 400, 0, 'You made an investment request', '2021-03-14 11:33:03', '2021-03-14 11:33:03'),
(23, 11, 2000, 0, 'You made an investment request', '2021-03-14 11:33:24', '2021-03-14 11:33:24'),
(24, 11, 10, 0, 'You made a withdrawal request', '2021-06-20 07:14:07', '2021-06-20 07:14:07'),
(25, 14, 990, 0, 'Congratulations, Your Withdrawal of $10 Has Been Approved', '2021-06-20 07:20:25', '2021-06-20 07:20:25'),
(26, 11, 45, 0, 'You made an investment request', '2021-07-02 11:06:58', '2021-07-02 11:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_backup` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `valid_id` text COLLATE utf8mb4_unicode_ci,
  `wallet_id` int(10) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bitcoin_wallet` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethereum_wallet` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_wallet_id_index` (`wallet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `password_backup`, `image`, `valid_id`, `wallet_id`, `mobile`, `country`, `state`, `address`, `bitcoin_wallet`, `ethereum_wallet`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Dexter Neutron', 'ching@nourishingafrica.com', NULL, '$2y$10$jDKlmm1ZuMuSO.aieU0Dwe91IvqDtvU17ACKfEHh4VxB6bCPMp/sC', '11111111', '1602805343WhatsApp Image 2020-09-24 at 11.20.41 AM.jpeg', NULL, 13, NULL, 'Australia', 'South Australia', NULL, NULL, NULL, 1, NULL, '2020-10-15 22:42:23', '2020-10-15 23:11:18'),
(12, 'Emy Sedde', 'chidng@nourishingafrica.com', NULL, '$2y$10$a6OjlENpUt7zdN7SL9.7O.dMUeHYLJ6mcTuD8digyZYnuZFCrk5Vu', '11111111', '1602968296teju_intense.png', NULL, 15, NULL, 'Ashmore and Cartier Island', 'Ashmore and Cartier Island', NULL, NULL, NULL, 0, NULL, '2020-10-17 19:58:16', '2020-10-17 19:58:16'),
(11, 'Emy Mba', 'xeddtech@gmail.com', NULL, '$2y$10$k8x4grjIBP07hnCRvRJbuOtqSs/p21Z7h53HXMW3m9g3pdc8U/qhG', '11111111', '1602805547262d208f065b212aa9a40f3b92e04179.jpg', NULL, 14, NULL, 'Armenia', 'Lorri', NULL, 'rirnrpr epenrperner rjrprnrjror', '[kon;nmnl;m', 1, 'YvDVsv6f6GgsAAPENjiA1eQGYgjhqkCMfzb5NFWHO6vDxDQrSHkVqvSTmNoh', '2020-10-15 22:45:47', '2021-05-31 18:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL DEFAULT '0',
  `profit` int(11) DEFAULT '0',
  `commission` int(11) DEFAULT '0',
  `bonus` int(12) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `amount`, `profit`, `commission`, `bonus`, `created_at`, `updated_at`) VALUES
(11, 1000, 0, 0, 0, '2020-10-15 22:37:34', '2020-10-15 22:37:34'),
(10, 1000, 0, 0, 0, '2020-10-15 22:33:35', '2020-10-15 22:33:35'),
(9, 1000, 0, 0, 0, '2020-10-15 22:32:41', '2020-10-15 22:32:41'),
(8, 1000, 0, 0, 0, '2020-10-15 22:30:37', '2020-10-15 22:30:37'),
(7, 1000, 0, 0, 0, '2020-10-04 05:59:23', '2020-10-04 05:59:23'),
(6, 723, 0, 0, 0, '2020-06-03 21:51:09', '2020-06-13 10:08:47'),
(12, 1000, 0, 0, 0, '2020-10-15 22:39:25', '2020-10-15 22:39:25'),
(13, 1000, 0, 0, 0, '2020-10-15 22:42:23', '2020-10-15 22:42:23'),
(14, 990, 400, 0, 0, '2020-10-15 22:45:47', '2021-06-20 07:20:25'),
(15, 800, 500, 300, 0, '2020-10-17 19:58:16', '2021-03-17 21:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE IF NOT EXISTS `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cryptocurrency` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cryptocurrency_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `withdrawals_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `type`, `cryptocurrency`, `cryptocurrency_address`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, '', '', 20, 0, '2020-07-20 13:35:43', '2020-07-20 15:53:26'),
(2, 5, NULL, '', '', 20, 1, '2020-07-20 13:36:30', '2020-07-20 16:06:11'),
(3, 5, NULL, '', '', 230, 1, '2020-07-20 13:41:19', '2020-07-20 15:57:52'),
(4, 5, NULL, '', 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 50, 0, '2020-09-20 21:17:59', '2020-09-20 21:17:59'),
(5, 5, NULL, '', 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 344, 0, '2020-10-15 14:07:44', '2020-10-15 14:07:44'),
(6, 11, NULL, 'BTC', 'tttttttttttttttttttttttttttt', 10, 1, '2021-06-20 07:14:07', '2021-06-20 07:20:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
