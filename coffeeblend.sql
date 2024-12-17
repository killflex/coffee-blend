-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeblend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin.frist', 'admin.frist@gmail.com', '$2y$10$TavyoucVFMdOQTRka5PGZu9Cc16TQE7KpcjLKsZqvzjR15VR91Sw.', '2023-07-21 12:10:19', '2023-07-21 12:10:19'),
(3, 'Mohamed', 'Moh@gmail.com', '$2y$10$6wgWd3CJlmDz1mr2AZTJ0.UCCUbHPN5gu5j3RMcpzsTjqsiQa10.y', '2023-07-22 06:08:06', '2023-07-22 06:08:06'),
(4, 'john', 'john@gmail.com', '$2y$10$zQbRKUXxRrf9dNpqN52Px.XwKVPxUuJDY6VLhnevO37/MesU6n./.', '2023-07-22 06:08:54', '2023-07-22 06:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` int(30) NOT NULL,
  `message` text NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `date`, `time`, `phone`, `message`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Mohamed', 'Hassan', '7/24/2023', '1:00am', 343434, 'Conveniently scale just in time value whereas bricks-and-clicks mindshare. Proactively incubate synergistic human capital rather than just in time scenario', '1:00am', 'Processing', '2023-07-20 05:25:42', '2023-07-22 09:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pro_id`, `name`, `image`, `price`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 1, 'COFFEE CAPUCCINO', 'bg_2.jpg', '5.55', 1, '2023-07-23 06:45:55', '2023-07-23 06:45:55');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `state`, `address`, `city`, `zip_code`, `phone`, `email`, `price`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'Hassan', 'France', 'Professionally create resource-leveling niche markets via ubiquitous methods of empowerment. Interactively enhance seamless synergy after focused markets. Appropriately recaptiualize bleeding-', 'Paris', '0293923', 19299332, 'email@gmial.com', '11.55', 1, 'Processing', '2023-07-19 08:01:43', '2023-07-22 07:26:18'),
(2, 'Mohamed', 'Hassan', 'France', 'Assertively leverage existing impactful systems through wireless internal or \"organic\" sources. Monotonectally revolutionize high-quality potentialities with functional leadership skills.', 'Town', '0299392', 19298388, 'email@email.com', '11.55', 1, 'Delivered', '2023-07-19 09:17:26', '2023-07-22 07:25:41'),
(3, 'Mohamed', 'Hassan', 'France', 'Assertively leverage existing impactful systems through wireless internal or \"organic\" sources. Monotonectally revolutionize high-quality potentialities with functional leadership skills.', 'Town', '0299392', 19298388, 'email@email.com', '11.55', 1, 'Processing', '2023-07-19 09:20:14', '2023-07-19 09:20:14'),
(4, 'Mohmade', 'Hassan', 'France', 'Continually repurpose leading-edge markets vis-a-vis end-to-end e-markets. Proactively build interactive data for cost effective niche markets. Proactively morph worldwide catalysts for change without', 'town', '3343443', 199293344, 'emal@gmail.com', '11.55', 1, 'Delivered', '2023-07-19 09:41:30', '2023-07-22 09:13:26'),
(7, 'MOhamed', 'Hassan', 'France', 'Authoritatively supply market-driven architectures without top-line scenarios. Seamlessly plagiarize leading-edge \"outside the box\" thinking after client-centered processes. Collaboratively incubate', 'town', '03939', 129993222, 'email@gmial.com', '11.55', 1, 'Processing', '2023-07-23 05:41:29', '2023-07-23 05:41:29'),
(8, 'Mohamed', 'Hassan', 'France', 'Phosfluorescently myocardinate real-time deliverables after installed base convergencePhosfluorescently myocardinate real-time deliverables after installed base convergencePhosfluorescently myocardinate real-time deliverables after installed base convergence', 'town', '0029291', 1929293322, 'moha@gmail.com', '5.55', 1, 'Delivered', '2023-07-23 06:48:06', '2023-07-23 06:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'COFFEE CAPUCCINO', 'bg_2.jpg', '5.55', 'Competently strategize transparent infrastructures via highly efficient channels. Efficiently build ', 'drinks', '2023-07-17 09:21:17', '2023-07-17 09:21:17'),
(2, 'Mocha', 'menu-3.jpg', '6', 'Completely restore flexible strategic theme areas with cross-platform e-business. Enthusiastically', 'drinks', '2023-07-17 09:21:17', '2023-07-17 09:21:17'),
(3, 'Pancake', 'dessert-2.jpg', '6', 'Completely restore flexible strategic theme areas with cross-platform e-business. Enthusiastically', 'desserts', '2023-07-17 09:21:17', '2023-07-17 09:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `review` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `created_at`, `updated_at`) VALUES
(3, 'Mohamed', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27'),
(4, 'Mohamed', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27'),
(5, 'Mohamed', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27'),
(6, 'John', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27'),
(7, 'Jack', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27'),
(8, 'Rose', 'Continually leverage other\'s ethical value without superior technology. Monotonectally pursue cutting-', '2023-07-20 09:07:27', '2023-07-20 09:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'moa@gmial.com', NULL, '$2y$10$TavyoucVFMdOQTRka5PGZu9Cc16TQE7KpcjLKsZqvzjR15VR91Sw.', NULL, '2023-07-16 08:25:38', '2023-07-16 08:25:38'),
(2, 'John', 'john@gmial.c.om', NULL, '$2y$10$KP3UmupvoAMOWzO5gpjDKu/fXTJSf.wEyEILjnTy5Tj1AhMCQIitG', NULL, '2023-07-16 09:00:05', '2023-07-16 09:00:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
