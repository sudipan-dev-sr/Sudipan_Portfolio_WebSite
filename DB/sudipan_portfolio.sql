-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2026 at 12:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sudipan_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password_hash`, `email`, `created_at`) VALUES
(1, 'admin', '$2y$10$kzpxe42.p91vh1iSqqAQc.H.oqnLh9QbqLRIdi43gUuWbggeEKj92', 'sudipanmandal@gmail.com', '2026-09-17 16:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `status` enum('new','read','replied') DEFAULT 'new',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `subject`, `message`, `ip_address`, `status`, `created_at`) VALUES
(1, 'Ananya Sen', 'ananya@techfirm.com', 'Senior Full Stack Role', 'Hi Sudipan, we reviewed your CV and projects and would like to connect.', 'Unknown', 'read', '2026-08-19 13:08:50'),
(2, 'John Doe', 'johndoe@example.com', 'Full-Stack Role Inquiry', 'Hello Sudipan, I saw your MRV and Strapi work and would like to discuss a role.', '127.0.0.1', 'read', '2026-08-20 13:37:13'),
(3, 'SR', 'sudipanmandalpay@gmail.com', 'Headless CMS & Strapi Architecture', 'HIIgtdhggdhhgdhd', '::1', 'read', '2026-08-20 13:40:32'),
(4, 'Soumya', 'bharatchandram314@gmail.com', 'Full-Time Engineering Role', 'ASDFGHJKWERFGHJKXSXDCFVFGBHNMSDFGHJKSXDFCVBNM<', '::1', 'read', '2026-08-20 13:41:38'),
(5, 'SSSSS', 'sudipanmandalpay@gmail.com', 'Testing Contact Form', 'This is a real message test.', 'Unknown', 'replied', '2026-09-17 12:34:22'),
(6, 'Soumya Mandal', 'sudipanmandalpay@gmail.com', 'AI & OpenAI Integration Project', 'AI & OpenAI Integration Project', '::1', 'read', '2026-09-17 12:50:36'),
(7, 'ASDF', 'asd@gmail.com', 'Headless CMS & Strapi Architecture', 'Headless CMS & Strapi Architecture', '::1', 'replied', '2026-09-17 12:52:10'),
(8, 'Rahul', 'sudipan@gmail.com', 'Full-Time Engineering Role', 'Full-Time Engineering Role', '::1', 'replied', '2026-09-17 12:53:44'),
(9, 'Sudipan Mandal', 'sudipanmandalpay@gmail.com', 'Climate-Tech MRV Platform', 'Nathing', '::1', 'read', '2026-09-17 11:45:26'),
(10, 'Sudipan Mandal', 'sudipanmandal@gmail.com', 'Headless CMS & Strapi Architecture', 'Headless CMS & Strapi Architecture', '::1', 'read', '2026-09-17 11:46:00'),
(11, 'SSSSS', 'sudipanmandalpay@gmail.com', 'Headless CMS & Strapi Architecture', 'Headless CMS & Strapi Architecture', '::1', 'read', '2026-09-17 11:46:31'),
(12, 'Integration Tester', 'test.visitor@gmail.com', 'End-to-End System Verification', 'Testing contact submission logging to MySQL and live SMTP dispatch.', '127.0.0.1', 'read', '2026-09-17 13:23:59');

-- --------------------------------------------------------

--
-- Table structure for table `mail_logs`
--

CREATE TABLE `mail_logs` (
  `id` int(11) NOT NULL,
  `log_type` enum('error','success','info') DEFAULT 'info',
  `recipient` varchar(150) NOT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `error_message` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `logged_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mail_logs`
--

INSERT INTO `mail_logs` (`id`, `log_type`, `recipient`, `subject`, `error_message`, `ip_address`, `logged_at`) VALUES
(2, 'success', 'sudipanmandal@gmail.com', 'Contact Inquiry from Integration Tester', NULL, '127.0.0.1', '2026-09-17 16:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `source` varchar(100) DEFAULT 'Website',
  `ip_address` varchar(45) DEFAULT NULL,
  `subscribed_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `source`, `ip_address`, `subscribed_at`) VALUES
(1, 'subscriber@climate-tech.org', 'Test Runner', '127.0.0.1', '2026-08-20 13:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `setting_key`, `setting_value`, `updated_at`) VALUES
(1, 'site_title', 'Sudipan Mandal | Portfolio', '2026-09-17 16:49:36'),
(2, 'contact_email', 'sudipanmandal@gmail.com', '2026-09-17 16:49:36'),
(3, 'phone', '+91 97486 42879', '2026-09-17 16:49:36'),
(4, 'location', 'Kolkata, West Bengal, India', '2026-09-17 16:49:36'),
(5, 'github_url', 'https://github.com/sudipan-dev-sr', '2026-09-17 16:49:36'),
(6, 'linkedin_url', 'https://linkedin.com/in/sudipan-mandal', '2026-09-17 16:49:36'),
(7, 'smtp_host', 'smtp.gmail.com', '2026-09-17 16:49:36'),
(8, 'smtp_port', '587', '2026-09-17 16:49:36'),
(9, 'smtp_secure', 'tls', '2026-09-17 16:49:36'),
(10, 'smtp_user', 'sudipanmandal@gmail.com', '2026-09-17 16:49:36'),
(11, 'mail_to', 'sudipanmandal@gmail.com', '2026-09-17 16:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_status` (`status`),
  ADD KEY `idx_created_at` (`created_at`);

--
-- Indexes for table `mail_logs`
--
ALTER TABLE `mail_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_log_type` (`log_type`),
  ADD KEY `idx_logged_at` (`logged_at`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mail_logs`
--
ALTER TABLE `mail_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
