-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2023 lúc 03:56 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `beautyreviewer`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_auth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `image`, `describe`, `id_category`, `content`, `id_auth`, `created_at`, `updated_at`) VALUES
(1, 'product', '1686824913.jpg', 'Body Care', '3', '<p>12313</p>', 9, '2023-06-12 03:43:44', '2023-06-15 03:28:33'),
(3, 'hair', '1686824848.jpg', 'tóc 12345', '3', '<p><img alt=\"\" src=\"https://img3.thuthuatphanmem.vn/uploads/2019/07/13/anh-dep-cau-rong-da-nang-phun-nuoc_085826155.jpg\" style=\"height:100px; width:188px\" /></p>\r\n\r\n<p>cầu rồng đ&agrave; nẵng1</p>', 9, '2023-06-12 09:42:54', '2023-06-15 03:27:28'),
(7, 'tóc đẹp', '1686764487.jpg', 'đây là sản phẩm chất lượng', '3', '<p>birthday</p>\r\n\r\n<p><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></p>', 10, '2023-06-14 10:41:27', '2023-06-14 10:41:27'),
(8, 'tóc', '1686764599.jpg', 'tóc đẹp', '3', '<p>t&oacute;c đẹp</p>', 10, '2023-06-14 10:43:19', '2023-06-14 10:43:19'),
(9, 'hair hair', '1686896668.jpg', 'hair 12345', '3', '<p>tocn dep 123</p>', 9, '2023-06-15 23:24:02', '2023-06-15 23:24:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogcomment`
--

CREATE TABLE `blogcomment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_auth` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogcomment`
--

INSERT INTO `blogcomment` (`id`, `comment`, `name`, `id_auth`, `id_blog`, `image`, `level`, `created_at`, `updated_at`) VALUES
(1, '123', 'tho', 9, 3, 'ảnh đại diện 5.jpg', 0, '2023-06-13 08:57:20', '2023-06-13 08:57:20'),
(2, 'beautiful 121313123', 'khuong', 10, 3, '346095206_145421255171319_2441730451596319557_n.jpg', 1, '2023-06-13 09:04:09', '2023-06-13 09:04:09'),
(3, '123', 'tho', 9, 5, 'ảnh đại diện 5.jpg', 0, '2023-06-14 01:41:28', '2023-06-14 01:41:28'),
(4, '456', 'tho', 9, 5, 'ảnh đại diện 5.jpg', 3, '2023-06-14 01:43:40', '2023-06-14 01:43:40'),
(5, 'san pham dep', 'tho', 9, 9, 'ảnh đại diện 5.jpg', 0, '2023-06-15 23:24:56', '2023-06-15 23:24:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Hair', '2023-06-12 01:29:25', '2023-06-12 01:29:25'),
(3, 'Make up', '2023-06-12 01:35:15', '2023-06-12 01:35:15'),
(4, 'Body care', '2023-06-12 01:35:40', '2023-06-12 01:35:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_01_092433_update_users_table', 2),
(6, '2023_06_07_173158_update_users1_table', 3),
(7, '2023_06_12_081355_create_cart_table', 4),
(8, '2023_06_12_094514_update_category_table', 5),
(9, '2023_06_12_100154_create_blog_table', 6),
(10, '2023_06_12_102145_update_blog3_table', 7),
(11, '2023_06_13_130101_create_comment_table', 8),
(12, '2023_06_13_154728_update_blog1_table', 9);

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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1:admin 0:member',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `avatar`, `description`, `address`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Lê Viết Thọ', 'leviettho0611@gmail.com', NULL, '$2y$10$nwzAyueaT6MlL2JtODGW0eA69dy/TKdJ.ONZpx14orZqQD/nNUbGq', NULL, NULL, NULL, NULL, NULL, 1, '2023-06-01 02:26:35', '2023-06-01 02:26:35'),
(2, 'Lê Viết Thọ1', 'leviettho06111@gmail.com', NULL, '$2y$10$tabqZRyTUYG6zIZEBHytFuBgXTUCdsMqbis7mfunKCPuh14ouEpQW', NULL, NULL, NULL, NULL, NULL, 1, '2023-06-01 02:55:49', '2023-06-01 02:55:49'),
(3, 'khuong', 'khanh@gmail.com', NULL, '$2y$10$K7gbKLrjVgtbypsXFH5.M.clZeyTTXQ4Vog8LhcH4VNlXPs2iNe9u', '0708061102', '346053089_228289613158703_7060751333123317440_n (1).jpg', NULL, NULL, NULL, 0, '2023-06-01 07:10:54', '2023-06-01 07:10:54'),
(4, 'huy1', 'huy@gmail.com', NULL, '$2y$10$vCI6LyoLdPgg7B9it/CcOOSwoXw7QWW88Ir18gOHB3eVc52VWOjFe', '0708061102', 'cach-tao-anh-dai-dien-hoat-hinh-tren-facebook_031902036.png', 'than thien', '123 Le Dinh Duong', NULL, 0, '2023-06-01 07:25:38', '2023-06-07 11:38:11'),
(6, 'Lê Viết Thọ', 'leviettho@gmail.com', NULL, '$2y$10$V.LHD6CArmcBpHgApur/yuzJCMq.EdPP6iV9en2aKIyeXKY9oIPvq', '0708061102', 'ảnh đại diện 4.jpg', NULL, NULL, NULL, 0, '2023-06-08 01:45:40', '2023-06-08 01:45:40'),
(7, 'tho', 'tho@gmail.com', NULL, '$2y$10$VautPnMHsYknwUlRtgF5DuA94iOWS16kCGNLy57I7hdvdNWz5rJ/C', NULL, NULL, NULL, NULL, NULL, 1, '2023-06-12 01:02:31', '2023-06-12 01:02:31'),
(9, 'tho', 'leviettho123@gmail.com', NULL, '$2y$10$Y.CM3rirWO3rP8TTRzmzc.zLTpG2Uxk5Tb8.0lgQLdfntRimthX4i', '0708061102', 'ảnh đại diện 5.jpg', 'than thien', '155 le dinh duong', NULL, 0, '2023-06-12 01:37:58', '2023-06-12 10:11:15'),
(10, 'khuong', 'khuong123@gmail.com', NULL, '$2y$10$g6awNBU7xtBzu0wTQo3vVOkRzTVmVkAsLDW/.A0ZCM.cgy/Gh3HUG', '1123131', '346095206_145421255171319_2441730451596319557_n.jpg', NULL, NULL, NULL, 0, '2023-06-13 09:03:29', '2023-06-13 09:03:29');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `blogcomment`
--
ALTER TABLE `blogcomment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
