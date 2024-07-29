-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 29, 2024 lúc 08:23 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'rerum', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(2, 'quia', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(3, 'ut', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(4, 'voluptatem', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(5, 'qui', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(6, 'rerum', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(7, 'recusandae', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(8, 'sint', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(9, 'dolores', '2024-05-21 20:04:49', '2024-05-21 20:04:49'),
(10, 'vel', '2024-05-21 20:04:49', '2024-05-21 20:04:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2024_05_17_025411_create_categories_table', 2),
(6, '2024_05_17_025519_create_products_table', 2),
(9, '2024_05_17_031914_create_categories_table', 3),
(10, '2024_05_17_031920_create_products_table', 3),
(17, '2024_05_17_064616_create_categories_table', 4),
(18, '2024_05_17_064635_create_products_table', 4),
(37, '2014_10_12_000000_create_users_table', 5),
(38, '2014_10_12_100000_create_password_reset_tokens_table', 5),
(39, '2019_08_19_000000_create_failed_jobs_table', 5),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(41, '2024_05_18_011034_create_categories_table', 5),
(42, '2024_05_18_011040_create_products_table', 5),
(43, '2014_10_12_100000_create_password_resets_table', 6),
(44, '2024_06_05_014909_create_orders_table', 7),
(45, '2024_06_05_015724_add_address_to_users_table', 8),
(46, '2024_06_05_145448_create_transactions_table', 9),
(47, '2024_06_05_160020_create_transactions_table', 10),
(48, '2024_06_05_161954_create_transactions_table', 11),
(49, '2024_06_05_173641_create_orders_table', 12),
(50, '2024_06_05_173651_create_order_items_table', 12),
(51, '2024_06_11_093548_update_products_table', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 7, 200.00, '2024-06-05 10:51:46', '2024-06-05 10:51:46'),
(2, 7, 200.00, '2024-06-05 11:39:29', '2024-06-05 11:39:29'),
(3, 7, 2642.00, '2024-06-05 20:09:54', '2024-06-05 20:09:54'),
(4, 2, 1621.00, '2024-06-06 08:03:40', '2024-06-06 08:03:40'),
(7, 7, 3863.00, '2024-06-06 20:47:27', '2024-06-06 20:47:27'),
(8, 7, 1421.00, '2024-06-09 20:40:31', '2024-06-09 20:40:31'),
(9, 7, 1421.00, '2024-06-11 02:01:43', '2024-06-11 02:01:43'),
(10, 7, 200.00, '2024-06-11 02:17:21', '2024-06-11 02:17:21'),
(11, 7, 200.00, '2024-06-11 02:17:38', '2024-06-11 02:17:38'),
(12, 7, 400.00, '2024-06-11 02:38:22', '2024-06-11 02:38:22'),
(13, 7, 0.00, '2024-06-11 02:38:43', '2024-06-11 02:38:43'),
(14, 7, 0.00, '2024-06-11 02:43:19', '2024-06-11 02:43:19'),
(15, 7, 200.00, '2024-06-11 02:43:29', '2024-06-11 02:43:29'),
(16, 7, 2000.00, '2024-06-11 02:47:03', '2024-06-11 02:47:03'),
(17, 7, 36000.00, '2024-06-11 02:47:38', '2024-06-11 02:47:38'),
(18, 7, 0.00, '2024-06-11 02:53:29', '2024-06-11 02:53:29'),
(19, 7, 1221.00, '2024-06-11 03:05:11', '2024-06-11 03:05:11'),
(20, 7, 2642.00, '2024-06-11 20:52:42', '2024-06-11 20:52:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 181, 1, 200.00, '2024-06-05 10:51:46', '2024-06-05 10:51:46'),
(2, 2, 181, 1, 200.00, '2024-06-05 11:39:29', '2024-06-05 11:39:29'),
(3, 3, 181, 1, 200.00, '2024-06-05 20:09:54', '2024-06-05 20:09:54'),
(6, 4, 181, 2, 400.00, '2024-06-06 08:03:40', '2024-06-06 08:03:40'),
(12, 7, 181, 1, 200.00, '2024-06-06 20:47:27', '2024-06-06 20:47:27'),
(15, 7, 170, 1, 1221.00, '2024-06-06 20:47:27', '2024-06-06 20:47:27'),
(16, 8, 181, 1, 200.00, '2024-06-09 20:40:31', '2024-06-09 20:40:31'),
(18, 9, 181, 1, 200.00, '2024-06-11 02:01:43', '2024-06-11 02:01:43'),
(20, 10, 181, 1, 200.00, '2024-06-11 02:17:21', '2024-06-11 02:17:21'),
(21, 11, 181, 1, 200.00, '2024-06-11 02:17:38', '2024-06-11 02:17:38'),
(22, 12, 181, 2, 400.00, '2024-06-11 02:38:22', '2024-06-11 02:38:22'),
(23, 15, 181, 1, 200.00, '2024-06-11 02:43:29', '2024-06-11 02:43:29'),
(24, 16, 181, 10, 2000.00, '2024-06-11 02:47:03', '2024-06-11 02:47:03'),
(25, 17, 181, 180, 36000.00, '2024-06-11 02:47:38', '2024-06-11 02:47:38'),
(27, 20, 181, 1, 200.00, '2024-06-11 20:52:42', '2024-06-11 20:52:42'),
(29, 20, 170, 1, 1221.00, '2024-06-11 20:52:42', '2024-06-11 20:52:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('phidzdz26@gmail.com', '$2y$12$2Z/0seozgLs2cPXJutmN7O8aP7oTX.0HTbaatY6kHuoQAXTjR.eue', '2024-06-02 20:22:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `discount` int UNSIGNED NOT NULL DEFAULT '0',
  `quantity` int UNSIGNED NOT NULL DEFAULT '0',
  `stock` int UNSIGNED NOT NULL DEFAULT '0',
  `sold` int UNSIGNED NOT NULL DEFAULT '0',
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `description`, `price`, `discount`, `quantity`, `stock`, `sold`, `views`, `category_id`, `created_at`, `updated_at`) VALUES
(158, 'sa', 'products/hIt7yNMYK2w1cw45MtT52MaokmTiFW4hI1fOjABz.jpg', 'KIM CUONG 1 2 3 4 5', 1221.00, 0, 0, 0, 0, 51, 1, '2024-05-23 20:22:58', '2024-05-26 20:25:00'),
(159, 'sa', 'products/K8sVP0F7ruDq1aLpyNexzZTGBaObjt6icvN6rELw.jpg', '', 1221.00, 0, 3, 0, 0, 0, 1, '2024-05-23 20:23:07', '2024-05-23 20:23:07'),
(160, 'sa', 'products/VRW5hpEJmsLLW0mY0CaPfxP0umkiIiU86cggP2ge.jpg', '', 1221.00, 0, 0, 0, 0, 120, 1, '2024-05-23 20:24:57', '2024-05-23 20:24:57'),
(161, 'sa', 'products/jxMezeC1s3ZMoh4FjI0NXrzBegV66DnjxfgyqAK4.jpg', '', 1221.00, 0, 1, 0, 0, 0, 1, '2024-05-23 20:25:43', '2024-05-23 20:25:43'),
(162, 'sa', 'products/EKJLT4Nrp62YTz38qY7eEZyLQYpQrXKscqXAaBOz.jpg', '', 1221.00, 0, 2, 0, 0, 80, 1, '2024-05-23 20:26:05', '2024-05-23 20:26:05'),
(163, 'sa', 'products/ykNLutQrTaX2ydFNNIccYYAohD6ng3uHuC4WK1vo.jpg', '', 1221.00, 0, 1, 0, 0, 0, 1, '2024-05-23 20:29:04', '2024-05-23 20:29:04'),
(164, 'sa', 'products/mz1TfBIXD0WkjdLOCHthGzSsohEj9JRQGOt3r6c9.jpg', '', 1221.00, 0, 5, 0, 0, 100, 1, '2024-05-23 20:29:24', '2024-05-23 20:29:24'),
(165, 'sa', 'products/PnKmtkThMOCc173UoSnORyCv04p1GSwnDI6iGVPG.jpg', '', 1221.00, 0, 3, 0, 0, 0, 1, '2024-05-23 20:29:33', '2024-05-23 20:29:33'),
(166, 'sa', 'products/8gPFi8zecWrVUuo5kbaNmOpjLQ3yuZCy7jCD5dA1.jpg', '', 1221.00, 0, 12, 0, 0, 200, 1, '2024-05-23 20:29:51', '2024-05-23 20:29:51'),
(167, 'sa', 'products/8UUXTPIOSy8C8M6MbF9KG3dVIfthCtFBi4lPwucm.jpg', '', 1221.00, 0, 10, 0, 0, 0, 1, '2024-05-23 20:30:37', '2024-05-23 20:30:37'),
(168, 'sa', 'products/eUl3UIpeQlM7XkOe1A39LLoBRWGSorCk7Qm72HxI.jpg', '', 1221.00, 0, 6, 0, 0, 0, 1, '2024-05-23 20:31:53', '2024-05-23 20:31:53'),
(169, 'sa', 'products/CtkA7fjONcInDixT9ITQ1FdJiBSg3PsEF0aHi269.jpg', '', 1221.00, 0, 0, 0, 0, 0, 1, '2024-05-23 20:34:52', '2024-05-23 20:34:52'),
(170, 'sa', 'products/WHJMMz1FitFQtvyk7EpCA6bTPL6YhQrV2pEfwjKa.jpg', '', 1221.00, 0, 6, 0, 1, 0, 1, '2024-05-23 20:41:05', '2024-06-11 20:52:42'),
(181, 'kim cương', 'products/FwjjcuGFNLNuFmZBti9vNjSFFxusDTVPEbtfsa5M.jpg', 'kim cương tự nhiên', 200.00, 0, 6, 0, 194, 0, 1, '2024-06-03 00:48:50', '2024-06-11 20:52:42'),
(183, 'kim cương', 'products/kd99BITRKZwbWXVieinxH3JTxsOayUqGs0TglOsj.jpg', '222', 2.00, 0, 0, 0, 0, 0, 1, '2024-07-28 15:46:14', '2024-07-28 15:46:14'),
(184, 'nhìn vui ghê', 'products/xVbewYedU7eRmsp3QAMK8NUZ5kMSUDx5Px7PP1oi.jpg', '2', 4.00, 0, 200, 0, 0, 0, 1, '2024-07-28 15:46:40', '2024-07-28 15:46:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `address`) VALUES
(2, 'phine2', 'phinguyen@gmail.com', NULL, '$2y$12$S2W51KS8bSsu1.NxaYcK5etdt8/LzbSt6HwmAdmR8aygZ7C9Zy1mq', NULL, '2024-05-29 03:17:24', '2024-06-06 20:43:21', '0', NULL),
(3, 'phi nguyen', 'phine@gmail.com', NULL, '$2y$12$dWlpjDVX1JSpBkZCSeEi.uv1bseuykP8Kv5YS/VGpScQbnNmLW8AG', NULL, '2024-05-29 14:18:08', '2024-05-29 14:18:08', '0', NULL),
(4, 'phinguyen', 'phi@uhaifhow', NULL, '$2y$12$QOezH4SvtONrIGPeI9JaKubXZUgw1ybSronYFkyuNMpbNg5hESIlK', NULL, '2024-06-02 20:46:18', '2024-06-02 20:46:18', '0', NULL),
(5, 'phi11', 'phidzdz261@gmail.com', NULL, '$2y$12$ZYT.D35SMDVYu.Gv95RJQOIsR2AKsKo5F2RDh4gPNxWYq20WdfCEK', NULL, '2024-06-02 20:51:28', '2024-06-02 21:12:47', 'admin', NULL),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$12$IAdp6.ilVi44q3DSced1pOTTlBVYzaofuVTN4ETgguUO5wM.3HgOG', NULL, '2024-06-03 01:28:18', '2024-06-03 01:28:18', 'admin', NULL),
(7, 'phinguyen1', 'phidzdz26@gmail.com', NULL, '$2y$12$7W59tleQsE/FFhPH4hcV/u8OW/9M5OHrV8.cpnoXzQ.j8X2iKkojG', NULL, '2024-06-03 03:21:44', '2024-06-04 20:49:07', 'admin', '572/1 âu cơ'),
(8, 'pnn', 'a@gmail.com', NULL, '$2y$12$CK1jiWDgd1bTWT6WDy81yOmjcpaW3OXNfsru1LRY9dXUHBHzUV116', NULL, '2024-06-03 03:31:43', '2024-06-03 03:31:43', 'user', NULL),
(9, 'ph', 'phinnps28427@fpt.edu.vn', NULL, '$2y$12$1qkaO9.Rg/lPaIldWSmRD.bH4iqJPJAofu.t0xnPcG4GsJosFvqK2', NULL, '2024-06-04 09:34:49', '2024-06-04 09:34:49', 'user', NULL),
(10, 'anh da đen', 'anhdaden@gmail.com', NULL, '$2y$12$IffwloGMLvDf375hJqQbRuFRslcwMNUuPCheeeS3oX.L6DVvimptK', NULL, '2024-06-04 19:00:26', '2024-06-04 19:00:26', 'user', NULL),
(11, 'abc', 'abc@gmail.com', NULL, '$2y$12$OM04/afIs76Hs7tGnq1KY.hH6YwANqeyjTadjLKHnjIDC280M1nGS', NULL, '2024-06-04 19:49:26', '2024-06-04 19:49:26', 'user', NULL),
(12, '123', '123@gmail.com', NULL, '$2y$12$vtgQLyjs2aYUAOIeeSlo4uTgpfSPQEALo8woMb0DNMtN7pUAgh9vu', NULL, '2024-06-04 20:00:59', '2024-06-04 20:00:59', 'user', NULL),
(13, 'phine', 'mbjgvctutqjsbqmeg@hotmail.com', NULL, '$2y$12$62faMdK6PgNBS4ptDPmWM.Lcvk9APVLPXdP1yK04MaTWdkkPzNC1a', NULL, '2024-06-05 08:34:08', '2024-06-05 08:34:08', 'user', NULL),
(15, 'a', 'aa@gmail.com', NULL, '$2y$12$tjtmI4Q4Dg5KBopXnSRszeBSj0Edb0gniBbrB7IOIW/fsmRN57cf6', NULL, '2024-06-11 20:25:54', '2024-06-11 20:25:54', 'user', NULL),
(16, 'nguyen van a', 'nguyen@gmail.com', NULL, '$2y$12$NOpHgyrHJhiqyn2wV.DpYOS2ZMcodn3.2miv4RhvZI7htULa6gCj.', NULL, '2024-06-11 20:29:31', '2024-06-11 20:29:31', 'user', NULL),
(17, 'nv', 'nv@gmail.com', NULL, '$2y$12$m8UzOeSNDnjVzqgpGR3E0uclYm4kMd/hnvM9X24Bis2UZ5kHd3ROO', NULL, '2024-06-11 20:30:14', '2024-06-11 20:30:14', 'user', NULL),
(18, 'aaa', 'phidz@gmail.com', NULL, '$2y$12$.s9EcVst/HrShhjwUdq8rO7iNUonnpAaRMHafJrBnr/Q7cOKQAU6.', NULL, '2024-07-10 08:50:32', '2024-07-10 08:50:32', 'user', NULL),
(19, '1', '1232@gmail.com', NULL, '$2y$12$QRNgC1cWkhfkLjFmuSkyauy2yqxQbSTstyW7K9SlDryKyJToC/z/m', NULL, '2024-07-27 00:45:47', '2024-07-27 00:45:47', 'admin', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT cho bảng `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
