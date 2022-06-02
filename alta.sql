-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 31, 2022 lúc 04:40 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `alta`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `device`
--

CREATE TABLE `device` (
  `id` int(11) NOT NULL,
  `de_code` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `de_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `de_ip` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `de_active` int(11) NOT NULL DEFAULT 1,
  `de_connect` int(11) NOT NULL DEFAULT 1,
  `de_service` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `de_type` int(11) NOT NULL,
  `de_username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `de_password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `device`
--

INSERT INTO `device` (`id`, `de_code`, `de_name`, `de_ip`, `de_active`, `de_connect`, `de_service`, `de_type`, `de_username`, `de_password`, `created_at`, `updated_at`) VALUES
(1, '3lk6', 'abc', '121.1421.124.124', 1, 0, 'khám mắt,Khám răng,Khám tai,Khám miệng,Khám chân', 0, 'kios', '12345', '2022-04-15 08:06:53', '2022-05-23 03:22:05'),
(2, 't44g4', 'kiosk', '162.148.1.11', 1, 0, 'Khám mắt, khám mũi', 0, 'kiwi', '12345', '2022-04-15 08:48:51', '2022-05-23 03:22:08'),
(3, '4g432', 'kiosk', '12.113.23.23', 0, 0, 'Khám tim mạch,Khám răng', 0, 'qwerty', 'qwerty', '2022-04-16 01:56:03', '2022-05-19 02:30:20'),
(7, '2ff3g', 'kiosk', '21.12.13.13', 1, 0, 'Khám tim mạch,Khám răng,Khám tim mạch,Khám răng', 0, 'fefwef', 'ewfewf', '2022-04-18 02:56:50', '2022-05-19 02:30:24'),
(8, '8k5j', 'kiosk', '12.212.21.12', 0, 1, 'Khám tim mạch,Khám răng', 2, '1212', '1212', '2022-04-18 09:09:00', '2022-05-19 02:30:25'),
(9, '3h6j', 'kiosk', '13.13.13.13.3', 1, 1, 'Khám tim mạch,Khám răng', 0, '12', '1212', '2022-04-18 09:09:22', '2022-04-18 09:59:57'),
(10, '20h4', 'kiosk', '1.2.2.3.4', 1, 1, 'Khám tim mạch', 2, '123', '123', '2022-04-18 09:51:41', '2022-04-18 09:51:41'),
(11, '2g67k', 'kiosk', '12.12.12.21', 1, 1, 'Khám tim mạch,Khám răng', 0, 'qwerty', '12345', '2022-04-21 10:56:46', '2022-04-21 10:56:46'),
(12, 'kojin', 'kiosk', '12.455.65.32', 1, 1, 'Khám Sản - Phụ Khoa,Khám hô hấp', 2, '123456', '123456', '2022-05-11 07:55:38', '2022-05-11 07:55:38'),
(13, 'kojin', 'kiosk', '12.455.65.32', 1, 1, 'Khám Sản - Phụ Khoa,Khám hô hấp', 2, '123456', '123456', '2022-05-11 07:55:54', '2022-05-11 07:55:54'),
(14, 'kojin', 'kiosk', '12.455.65.32', 1, 1, 'Khám Sản - Phụ Khoa,Khám hô hấp', 2, '123456', '123456', '2022-05-11 07:56:06', '2022-05-11 07:56:06');

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
(5, '2022_04_13_100442_add_username_into_users_table', 2),
(6, '2022_05_14_095557_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Role', 2),
(1, 'App\\Models\\Role', 7),
(1, 'App\\Models\\Role', 8),
(1, 'App\\Models\\Role', 12),
(1, 'App\\Models\\Role', 13),
(2, 'App\\Models\\Role', 2),
(2, 'App\\Models\\Role', 7),
(2, 'App\\Models\\Role', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(35, 'App\\Models\\User', 1),
(36, 'App\\Models\\User', 2),
(37, 'App\\Models\\User', 4),
(37, 'App\\Models\\User', 5),
(38, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `no_ip` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `no_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `no_describe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `notification`
--

INSERT INTO `notification` (`id`, `no_ip`, `no_name`, `no_describe`, `created_at`, `updated_at`) VALUES
(2, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám Sản - Phụ Khoa', '2022-05-11 14:47:37', '2022-05-11 14:47:37'),
(3, '127.0.0.1', 'nguyenan', 'Thêm mới dịch vụ Khám nội soi', '2022-05-11 14:49:34', '2022-05-11 14:49:34'),
(4, '127.0.0.1', 'nguyenan', 'Thêm mới thiết bị kiosk', '2022-05-11 14:56:06', '2022-05-11 14:56:06'),
(5, '127.0.0.1', 'nguyenan', 'Cập nhập thiết bị abc', '2022-05-11 14:57:48', '2022-05-11 14:57:48'),
(6, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tai mũi họng', '2022-05-12 17:48:20', '2022-05-12 17:48:20'),
(7, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-24 09:24:24', '2022-05-24 09:24:24'),
(8, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-24 09:39:19', '2022-05-24 09:39:19'),
(9, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 08:56:44', '2022-05-27 08:56:44'),
(10, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:02:47', '2022-05-27 09:02:47'),
(11, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:05:10', '2022-05-27 09:05:10'),
(12, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:07:36', '2022-05-27 09:07:36'),
(13, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:09:32', '2022-05-27 09:09:32'),
(14, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:10:16', '2022-05-27 09:10:16'),
(15, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám Sản - Phụ Khoa', '2022-05-27 09:10:29', '2022-05-27 09:10:29'),
(16, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám răng hàm mặt', '2022-05-27 09:10:46', '2022-05-27 09:10:46'),
(17, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tai mũi họng', '2022-05-27 09:13:51', '2022-05-27 09:13:51'),
(18, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tai mũi họng', '2022-05-27 09:14:11', '2022-05-27 09:14:11'),
(19, '127.0.0.1', 'nguyenan', 'Cập nhập thông tin dịch vụ Khám tim mạch', '2022-05-27 09:15:30', '2022-05-27 09:15:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `num_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `num_service` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `num_number` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `num_start_time` datetime NOT NULL,
  `num_end_time` datetime NOT NULL,
  `num_device` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `num_status` int(11) NOT NULL DEFAULT 1,
  `num_phone` int(12) NOT NULL,
  `num_email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `num_service_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `numbers`
--

INSERT INTO `numbers` (`id`, `num_name`, `num_service`, `num_number`, `num_start_time`, `num_end_time`, `num_device`, `num_status`, `num_phone`, `num_email`, `num_service_id`, `created_at`, `updated_at`) VALUES
(9, 'Nguyen Van An', 'Khám tim mạch', 'TM_115_Z', '2022-05-27 09:15:39', '2022-05-27 17:30:00', 'Hệ thống', 1, 987654321, 'nguyenan.2502@gmail.com', 1, '2022-05-27 09:15:39', '2022-05-27 09:15:39'),
(10, 'Nguyen Van An', 'Khám tim mạch', 'TM_116_Z', '2022-05-27 09:15:45', '2022-05-27 17:30:00', 'Hệ thống', 1, 987654321, 'nguyenan.2502@gmail.com', 1, '2022-05-27 09:15:45', '2022-05-27 09:15:45'),
(11, 'Nguyen Van An', 'Khám Sản - Phụ Khoa', 'PK_11_Z', '2022-05-27 09:16:05', '2022-05-27 17:30:00', 'Hệ thống', 1, 987654321, 'nguyenan.2502@gmail.com', 3, '2022-05-27 09:16:05', '2022-05-27 09:16:05'),
(12, 'Nguyen Van An', 'Khám tim mạch', 'TM_117_Z', '2022-05-27 09:16:11', '2022-05-27 17:30:00', 'Hệ thống', 1, 987654321, 'nguyenan.2502@gmail.com', 1, '2022-05-27 09:16:11', '2022-05-27 09:16:11'),
(13, 'Nguyen Van An', 'Khám Sản - Phụ Khoa', 'PK_12_Z', '2022-05-27 09:16:16', '2022-05-27 17:30:00', 'Hệ thống', 1, 987654321, 'nguyenan.2502@gmail.com', 3, '2022-05-27 09:16:16', '2022-05-27 09:16:16');

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
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'xem', 'web', '2022-05-14 03:09:37', '2022-05-14 03:09:37'),
(2, 'edit', 'web', '2022-05-15 02:01:52', '2022-05-15 02:01:52'),
(3, 'admin', 'web', '2022-05-15 02:02:02', '2022-05-15 02:02:02');

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
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `ro_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ro_describe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `ro_name`, `ro_describe`, `created_at`, `updated_at`) VALUES
(1, 'Kế toán', 'Thực hiện nhiệm vụ về thống kê số liệu và tổng hợp số liệu', '2022-05-11 09:52:18', '2022-05-11 09:52:18'),
(2, 'Quản lý', 'Thực hiện tổng hợp và thống kê dữ liệu', '2022-05-11 09:56:07', '2022-05-11 09:56:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `description`, `created_at`, `updated_at`) VALUES
(35, 'Administrator', 'web', 'Thực hiện tất cả chức năng', '2022-05-15 04:16:08', '2022-05-15 09:25:25'),
(36, 'Kế toán', 'web', 'Thống kê dữ liệu', '2022-05-15 04:17:03', '2022-05-15 07:35:37'),
(37, 'Quản lý', 'web', 'Thực hiện thao tác chỉnh sửa', '2022-05-15 04:17:52', '2022-05-15 09:25:08'),
(38, 'User', 'web', 'Xem thông tin', '2022-05-15 06:56:38', '2022-05-15 09:28:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 35, '2022-05-15 09:27:27', '2022-05-15 09:27:27'),
(1, 36, '2022-05-15 09:24:26', '2022-05-15 09:24:26'),
(1, 37, '2022-05-19 10:02:59', '2022-05-19 10:02:59'),
(1, 38, '2022-05-15 09:28:42', '2022-05-15 09:28:42'),
(2, 35, '2022-05-15 09:27:27', '2022-05-15 09:27:27'),
(2, 37, '2022-05-19 10:02:59', '2022-05-19 10:02:59'),
(3, 35, '2022-05-15 09:27:27', '2022-05-15 09:27:27'),
(3, 37, '2022-05-19 10:02:59', '2022-05-19 10:02:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `se_code` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `se_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `se_describe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `se_active` int(11) DEFAULT 1,
  `se_start_num` int(11) DEFAULT NULL,
  `se_end_num` int(11) DEFAULT NULL,
  `se_prefix` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `se_surfix` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `se_reset_num` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `se_code`, `se_name`, `se_describe`, `se_active`, `se_start_num`, `se_end_num`, `se_prefix`, `se_surfix`, `se_reset_num`, `created_at`, `updated_at`) VALUES
(1, '201', 'Khám tim mạch', 'Mô tả dịch vụ khám tim mạch', 1, 115, 999, 'TM', 'Z', 1, '0000-00-00 00:00:00', '2022-05-27 02:15:30'),
(3, '202', 'Khám Sản - Phụ Khoa', 'Mô tả dịch vụ', 1, 11, 789, 'PK', 'Z', 1, '2022-04-16 08:41:47', '2022-05-27 02:10:29'),
(4, '203', 'Khám răng hàm mặt', 'Mo ta dich vu', 1, 50, 999, 'RHM', 'Z', 1, '2022-04-29 02:33:58', '2022-05-27 02:10:46'),
(5, '204', 'Khám tai mũi họng', 'Mô tả khám tai mũi họng', 1, 105, 999, 'TMH', NULL, 1, '2022-04-29 02:35:22', '2022-05-27 02:14:11'),
(6, '205', 'Khám hô hấp', 'khám hô hấp', 1, NULL, NULL, NULL, NULL, NULL, '2022-05-02 09:23:44', '2022-05-02 09:23:44'),
(7, '206', 'Khám tổng quát', 'khám tổng quát', 1, NULL, NULL, NULL, NULL, NULL, '2022-05-02 09:24:03', '2022-05-02 09:24:03'),
(8, '207', 'Khám nội soi', 'Mô tả dịch vụ', 1, NULL, NULL, NULL, NULL, NULL, '2022-05-11 07:49:34', '2022-05-11 07:49:34');

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
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_code` datetime DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `username`, `phone`, `group_role`, `code`, `time_code`, `active`) VALUES
(1, 'nguyenan', 'nguyenan.2502@gmail.com', NULL, '$2y$10$D7GTqEr8G8Ah6droMKRi1u0JGN3UGDdqigq9INGZqFQVZ9/YL8m8i', '1652954509_2042769_16ce60f97a4cee09afc54a8dc889f7e8.jpg', NULL, NULL, '2022-05-19 10:01:49', 'Nguyen Van An', '0987654321', 'Administrator', 'd50de4e9780e6592c125552c7e8d8e62', '2022-04-13 15:06:24', 1),
(2, 'ketoan', 'ketoan@gmail.com', NULL, '$2y$10$gzoW6lTtH1/331UxasR8aOuNLz7RAn/GOXSPyneknS5g.ym9qlK.e', '1652494090_4601252_db968c897f25c74e9843998e2dfb2e2a.jpg', NULL, '2022-04-27 00:50:33', '2022-05-15 09:44:16', 'Tran Van Nhan', '098765432', 'Kế toán', NULL, NULL, 1),
(3, 'user', 'user@gmail.com', NULL, '$2y$10$Di9eecv5qUFIyXTQJoXyBOVteXS1ILm6JFe4yc0Ut8LV1c245Hdhe', NULL, NULL, '2022-05-11 03:20:55', '2022-05-23 02:52:48', 'Le Dinh Hung', '12345678', 'User', NULL, NULL, 2),
(4, 'quanly', 'quanly@gmail.com', NULL, '$2y$10$5SxMBm4lqZQJbK.yAxBdXu/bJl6ODj8s.e7IVCjn4Z921mZI1EHZm', NULL, NULL, '2022-05-15 09:47:06', '2022-05-15 09:48:23', 'RonalDo', '09876567', 'Quản lý', NULL, NULL, 1),
(5, 'abc', 'maxximus', NULL, '$2y$10$0us.NWRDH3ZzgjMyLp0XROlNapsmoR5Zj5Nuy2ACSqoEBlm8eaZUy', NULL, NULL, '2022-05-15 09:50:33', '2022-05-15 09:50:33', 'Maxximus', '09876567', 'Quản lý', NULL, NULL, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `device`
--
ALTER TABLE `device`
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
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Chỉ mục cho bảng `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `device`
--
ALTER TABLE `device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
