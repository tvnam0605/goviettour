-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 06:49 AM
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
-- Database: `goviettour`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fc2LUZt82NQtWt0Tr8P8Fc9lPxoiNPHTpkwBdd31', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGNlazk1RFJ1QTVZbXlQQlhLN21NbENaRU9DMG5iM0M2N0t4UzFHYSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RvdXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743140776);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(10) NOT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `fullName`, `address`, `userName`, `password`, `email`, `createdDate`) VALUES
(2, 'Trần Văn Nam', 'Đăk Nông', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@example.com', '2025-03-21 13:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bookingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `numAdults` int(11) NOT NULL,
  `numChildren` int(11) NOT NULL,
  `totalPrice` double NOT NULL,
  `bookingStatus` enum('y','b','c','f') NOT NULL DEFAULT 'b' COMMENT '''y'' : Confirmed,\r\n''b'' : booked,\r\n''c'' : cancel,\r\n''f'' : finish,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`bookingId`, `tourId`, `userId`, `fullName`, `email`, `phoneNumber`, `address`, `bookingDate`, `numAdults`, `numChildren`, `totalPrice`, `bookingStatus`) VALUES
(36, 1, 29, 'Trương Tấn Diệm', '2111817@dlu.edu.vn', '0123456789', '45/2 Huyền Trân Công Chúa', '2025-03-26 15:52:47', 2, 1, 2250000, 'f'),
(37, 4, 29, 'Trương Tấn Diệm', '2111817@dlu.edu.vn', '0123456798', '45/2 Huyền Trân Công Chúa', '2025-03-27 14:51:52', 1, 0, 4990000, 'f'),
(38, 1, 29, 'Trương Tấn Diệm', '2111817@dlu.edu.vn', '0123456798', '45/2 Huyền Trân Công Chúa', '2025-03-27 14:51:56', 2, 0, 2000000, 'f'),
(39, 5, 29, 'Trương Tấn Diệm', '2111817@dlu.edu.vn', '0123456789', '45/2 Huyền Trân Công Chúa', '2025-03-27 14:51:59', 2, 1, 2250000, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `chatId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `readStatus` enum('y','n') DEFAULT 'n' COMMENT 'y: yes\r\nn: no',
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ipAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `checkoutId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `paymentDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` double NOT NULL,
  `paymentStatus` varchar(255) NOT NULL,
  `transactionId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`checkoutId`, `bookingId`, `paymentMethod`, `paymentDate`, `amount`, `paymentStatus`, `transactionId`) VALUES
(19, 36, 'office-payment', '2025-03-26 15:52:17', 2250000, 'n', NULL),
(21, 38, 'office-payment', '2025-03-27 03:29:20', 2000000, 'n', NULL),
(22, 39, 'office-payment', '2025-03-27 14:51:23', 2250000, 'n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `historyId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `actionType` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `imageId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`imageId`, `tourId`, `imageURL`, `description`, `uploadDate`) VALUES
(5, 1, 'PhuQuoc1.jpg', 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '2025-03-07 08:57:31'),
(6, 1, 'PhuQuoc2.jpg', 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '2025-03-07 08:57:31'),
(7, 2, 'con-dao-1.jpg', 'BIỂN ĐẢO 1N | KHÁM PHÁ CÔN ĐẢO HUYỀN BÍ', '2025-03-07 08:59:58'),
(8, 2, 'con-dao-2.jpg', 'BIỂN ĐẢO 1N | KHÁM PHÁ CÔN ĐẢO HUYỀN BÍ', '2025-03-07 08:59:58'),
(9, 2, 'con-dao-3.jpg', 'BIỂN ĐẢO 1N | KHÁM PHÁ CÔN ĐẢO HUYỀN BÍ', '2025-03-07 08:59:58'),
(10, 2, 'con-dao-4.jpg', 'BIỂN ĐẢO 1N | KHÁM PHÁ CÔN ĐẢO HUYỀN BÍ', '2025-03-07 08:59:58'),
(11, 2, 'con-dao-5.jpg', 'BIỂN ĐẢO 1N | KHÁM PHÁ CÔN ĐẢO HUYỀN BÍ', '2025-03-07 08:59:58'),
(12, 1, 'PhuQuoc3.jpg', 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '2025-03-07 08:58:29'),
(13, 1, 'PhuQuoc4.jpg', 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '2025-03-07 08:58:29'),
(14, 1, 'PhuQuoc5.jpg', 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '2025-03-07 08:58:29'),
(15, 3, 'mien-bac-4n3d-1.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '2025-03-07 09:40:14'),
(16, 3, 'mien-bac-4n3d-2.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '2025-03-07 09:40:14'),
(17, 3, 'mien-bac-4n3d-3.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '2025-03-07 09:40:14'),
(18, 3, 'mien-bac-4n3d-4.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '2025-03-07 09:40:14'),
(19, 3, 'mien-bac-4n3d-5.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '2025-03-07 09:40:14'),
(20, 4, 'mien-trung-5n4d-1.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49'),
(21, 4, 'mien-trung-5n4d-2.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49'),
(22, 4, 'mien-trung-5n4d-3.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49'),
(23, 4, 'mien-trung-5n4d-4.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49'),
(24, 4, 'mien-trung-5n4d-5.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49'),
(25, 5, 'mien-bac-4n3-1.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '2025-03-27 08:48:09'),
(26, 5, 'mien-bac-4n3-2.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '2025-03-27 08:48:09'),
(27, 5, 'mien-bac-4n3-3.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '2025-03-27 08:48:09'),
(28, 5, 'mien-bac-4n3-4.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '2025-03-27 08:48:09'),
(29, 5, 'mien-bac-4n3-5.jpg', 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '2025-03-27 08:48:09'),
(30, 6, 'mien-bac-5n4d-1.jpg', 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '2025-03-27 08:48:09'),
(31, 6, 'mien-bac-5n4d-2.jpg', 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '2025-03-27 08:48:09'),
(32, 6, 'mien-bac-5n4d-3.jpg', 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '2025-03-27 08:48:09'),
(33, 6, 'mien-bac-5n4d-4.jpg', 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '2025-03-27 08:48:09'),
(34, 6, 'mien-bac-5n4d-5.jpg', 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '2025-03-27 08:48:09'),
(35, 7, 'mien-trung-4n3d-1.jpg', 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '2025-03-27 08:48:09'),
(36, 7, 'mien-trung-4n3d-2.jpg', 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '2025-03-27 08:48:09'),
(37, 7, 'mien-trung-5n4d-3.jpg', 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '2025-03-27 08:48:09'),
(38, 7, 'mien-trung-5n4d-4.jpg', 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '2025-03-27 08:48:09'),
(39, 7, 'mien-trung-5n4d-5.jpg', 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '2025-03-27 08:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `invoiceId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `amount` double NOT NULL,
  `dateIssued` date NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `promotionId` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `reviewId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`reviewId`, `tourId`, `userId`, `rating`, `comment`, `timestamp`) VALUES
(1, 1, 29, 5, 'Tuyệt vời', '2025-03-27 09:13:14'),
(2, 5, 29, 4, 'rất đang để đi', '2025-03-27 15:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `timeLineId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`timeLineId`, `tourId`, `title`, `description`) VALUES
(5, 1, 'TP. HỒ CHÍ MINH - PHÚ QUỐC', 'Tập trung tại sân bay Tân Sơn Nhất, đáp chuyến bay TP. HCM – Phú Quốc. (Các chuyến bay dự kiến từ 09:45 – 11:00). Đến sân bay Phú Quốc, xe và hướng dẫn viên đón khách khởi hành chương trình khám phá đảo ngọc Phú Quốc.\n\nĂn trưa tại nhà hàng. Khởi hành tham quan phía Đông đảo:\n\nNhà thùng nước mắm: tìm hiểu cách ủ nước mắm truyền thống có lịch sử hơn 100 năm tại Phú Quốc, với thương hiệu nổi tiếng “Nước mắm Phú Quốc” được bảo hộ trên toàn thế giới.\nVườn tiêu: Với những nọc tiêu thẳng tắp, xanh mơn mởn. \nCơ sở sản xuất rượu sim: thưởng thức rượu sim rừng đặc sản Phú Quốc.\nChùa Hùng Long Tự (Am Sư Muôn): Một ngôi chùa nằm giữa lưng chừng núi, nơi đây quý khách có thể nhìn thấy toàn cảnh thị trấn Dương Đông.\nThắng cảnh Dinh Cậu: nơi ngư dân địa phương gửi gắm đức tin và là địa điểm ngắm hoàng hôn đẹp nhất ở phía Tây đảo ngọc Phú Quốc.\nSuối Tranh: dòng suối đẹp mà thiên nhiên ban tặng cho Phú Quốc (Suối chỉ có nước vào tháng 5 đến tháng 11)\nLàng chài cổ Hàm Ninh: nổi tiếng với nghề đánh bắt hải sản của địa phương.\nTrường hợp nếu đoàn không tham quan suối Tranh và Làng chài Hàm Ninh sẽ được thay thế bằng điểm tham quan check-in làng Địa Trung Hải vào ngày thứ 2.\n\nĂn tối tại nhà hàng. Về khách sạn nhận phòng. Tự do khám phá Phú Quốc về đêm hoặc đăng ký option tour câu mực đêm (Chi phí câu mực tự túc).'),
(6, 1, 'PHÚ QUỐC - KHÁM PHÁ ĐẢO NGỌC', 'Ăn sáng. Khởi hành tham quan 01 trong 02 lựa chọn sau:\r\n\r\nLựa chọn 01: THAM QUAN NAM ĐẢO, TẮM BIỂN BÃI SAO:\r\n\r\nCơ sở chế tác ngọc trai Phú Quốc: tìm hiểu về công nghệ nuôi trai lấy ngọc. Phú Quốc được biết đến là địa phương nuôi cấy và chế tác ngọc trai nổi tiếng của Việt Nam.\r\nDi tích lịch sử nhà tù Phú Quốc – được biết đến với tên gọi khác “Nhà lao Cây Dừa”, tọa lạc tại thị trấn An Thới và là một trong những di tích lịch sử nổi tiếng tại Việt Nam.\r\nLên tàu đến một trong những đảo: Hòn Rỏi, hòn Dăm, bãi Đá Trào (tham quan từ tháng 11 đến tháng 3) hoặc Giếng Tiên – nơi có dấu tích vua Gia Long thời bôn tẩu (tham quan từ tháng 4 đến tháng 10) và trải nghiệm câu cá. Tàu được trang bị đầy đủ dụng cụ chuyên dụng: áo phao, kính lặn, ống thở cho du khách tắm biển và ngắm san hô giữa đảo.\r\nĂn trưa trên tàu. Tiếp tục hành trình tham quan:\r\n\r\nKhu du lịch Bãi Sao – Một trong những bãi biển đẹp nhất Phú Quốc. Tự do tắm biển và tham gia các trò chơi trên biển như: lướt ván; chơi kajak; chạy jetsky (chi phí tự túc).\r\nCheck in tại làng Địa Trung Hải – Thị trấn Hoàng Hôn (điểm tham quan được thay thế cho Suối Tranh và Làng Chài Hàm Ninh ngày 1): Làng Địa Trung Hải được xây dựng và mô phỏng theo phong cách Châu Âu cổ kính, tọa lạc tại thị trấn An Thới, phía Tây Nam đảo. Tham quan và check-in: Tháp chuông, cầu tình yêu…\r\nII – LỰA CHỌN 02:\r\n\r\nTour Cano Tham quan 4 Đảo (Chưa bao gồm, giá từ: ~ 690.000VNĐ/Khách)\r\n\r\n(Loại hình tour đang được nhiều khách hàng lựa chọn nhất hiện nay)\r\n\r\nHòn Mây Rút Trong – là điểm tham quan hấp dẫn cho những tín đồ du lịch biển.\r\nHòn Mây Rút Ngoài: hòn đảo hoang sơ ví như viên ngọc tự nhiên ẩn mình giữa đại dương.\r\nHòn Gầm Ghì (Dăm Ngang): trải nghiệm ngắm san hô với đồ lặn chuyên dụng.\r\nHòn Móng Tay – đảo nổi tiếng và được ví như Maldives của Việt Nam.\r\n=> Tặng clip quay bằng flycam cho đoàn trên đảo. \r\n\r\n– Check-in giữa đại dương và chụp hình với phao nổi bằng flycam.\r\n\r\nCano đưa khách trở về cảng, xe đưa đoàn về lại khách sạn nghỉ ngơi. \r\n\r\nĂn tối tại nhà hàng. Tự do khám phá chợ đêm Dinh Cậu.'),
(7, 1, 'PHÚ QUỐC - TP.HỒ CHÍ MINH', 'Ăn sáng. Làm thủ tục trả phòng. Ra sân bay làm thủ tục đáp chuyến bay trở lại TP. HCM.\r\n\r\n(Các chuyến bay dự kiến sau 12:00). Đến sân bay Tân Sơn Nhất, kết thúc chương trình tham quan!\r\n\r\n*** Nếu quý khách book vé máy bay chặng về các chuyến tối có thể tự túc lựa chọn thêm các option tour sau:\r\n\r\n1. Vinpearl Safari Phú Quốc (chi phí tự túc – giá tham khảo: 650,000VNĐ) – công viên bảo tồn động vật với mô hình bán hoang dã đầu tiên của Việt Nam có diện tích 380 ha với nhiều loài động vật quý hiếm.\r\n\r\n2. Vinwonders (chi phí tự túc – giá tham khảo: 950,000VNĐ/khách) – là một khu giải trí tổng hợp với nhiều trò chơi trong nhà và ngoài trời như: tàu lượn siêu tốc, đu quay vòng xoay, đĩa quay siêu tốc, biểu diễn cá heo, công viên nước, thủy cung, lễ hội đường phố…\r\n\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.'),
(8, 2, 'TP. HCM – CÔN ĐẢO – TP. HCM', 'Tập trung tại sân bay Tân Sơn Nhất. Làm thủ tục đáp chuyến bay TP. HCM – Côn Đảo (Các chuyến bay dự kiến cất cánh trước 06:00). Đến sân bay Côn Đảo, xe và HDV đón đoàn.\r\n\r\nĂn sáng. Khởi hành tham quan:\r\n\r\nMiếu Cậu – nơi thờ Hoàng tử Cải, con của chúa Nguyễn Ánh và bà Hoàng Phi Yến.\r\nViếng Nghĩa trang Hàng Keo – di tích Đặc biệt Quốc gia được công nhận năm 2012.\r\nViếng Nghĩa trang Hàng Dương: Sân hành lễ của nghĩa trang Hàng Dương được xem là nấm mồ tập thể của cả gần 2000 chiến sĩ đang yên nghỉ tại nơi đây. Đặt vòng hoa viếng và thắp hương ở đài tưởng niệm. Tham quan đền thờ Côn Đảo.\r\nViếng mộ cô Sáu: nổi tiếng linh thiêng và huyền bí.\r\nViếng các phần mộ cố Tổng Bí thư Lê Hồng Phong, nhà yêu nước Nguyễn An Ninh, Lê Văn Việt…\r\nĂn trưa. Khởi hành tham quan:\r\n\r\nMiếu bà Phi Yến (An Sơn Miếu): Bà Phi Yến là thứ phi của chúa Nguyễn Ánh, là 1 trong 2 người phụ nữ bảo trợ tâm linh cho người dân Côn Đảo. Nghe kể chuyện về Bà và tìm hiểu câu hát ru “Gió đưa cây cải về trời, rau răm ở lại chịu đời đắng cay”.\r\nVân Sơn Tự (Chùa Núi Một): Du khách có thể ngắm toàn cảnh đẹp Côn Đảo từ trên cao, chùa mang một nét kiến trúc miền Bắc với cổng tam quan phía dưới.\r\nMiếu Ngũ Hành – nơi gửi gắm đức tin của người dân xứ đảo.\r\nMiếu Thổ Địa – cầu phúc lành.\r\nDi chuyển ra sân bay làm thủ tục đáp chuyến bay Côn Đảo – TP. HCM trở lại TP. HCM.\r\n\r\n(Các chuyến bay dự kiến cất cánh từ 17:00 – 18:20). Kết thúc chương trình tham quan.\r\n\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.'),
(9, 3, 'TP. HCM – HÀ NỘI', 'Tập trung tại sân bay Tân Sơn Nhất đáp chuyến bay TP. HCM – HÀ NỘI. (Các chuyến bay dự kiến từ 06:00 – 09:00). Xe và HDV đón khách tại sân bay Nội Bài, đoàn di chuyển về trung tâm Hà Nội.\r\n\r\nĂn trưa. Nhận phòng khách sạn. Khởi hành tham quan:\r\n\r\nHồ Tây – Hồ lớn nhất Hà Nội, chùa Trấn Quốc, Hồ Gươm, đền Ngọc Sơn, cầu Thê Húc, chụp hình lưu niệm tại Nhà Thờ Lớn, Nhà Hát Lớn thành phố.\r\nThưởng thức bánh cốm Hàng Than, kem Tràng Tiền – Nét văn hóa ẩm thực đặc trưng rất riêng của Hà Nội.\r\nĂn tối. Tự do khám phá Hà Nội về đêm. Nghỉ đêm tại Hà Nội.'),
(10, 3, 'HÀ NỘI – LÀO CAI – SAPA', 'Ăn sáng. Trả phòng. Tham quan Lăng Bác, thăm Phủ Chủ Tịch, nhà sàn, ao cá Bác Hồ, Chùa Một Cột, Văn Miếu – Quốc Tử Giám – trường đại học đầu tiên của Việt Nam.\r\n\r\nĂn trưa. Khởi hành đi SaPa – nơi mà người Pháp xưa gọi là “Kinh đô mùa hè của xứ Bắc Kỳ” theo tuyến đường cao tốc dài nhất Việt Nam 250km. Đến Lào Cai, dừng chân chụp ảnh lưu niệm tại cột mốc biên giới 102 – cửa khẩu Quốc tế Lào Cai. Đến SaPa, nhận phòng khách sạn.\r\n\r\nĂn tối. Thư giãn với liệu trình massage chân, mỗi khách được tặng 01 vé foot massage.\r\n\r\nTự do khám phá phố núi về đêm, tự do thưởng thức: Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng… Nghỉ đêm tại thị trấn SaPa. '),
(11, 3, 'SAPA – BẢN CÁT CÁT – FANSIPAN', 'Ăn sáng. Tham quan Bản Cát Cát – địa bàn cư trú của người H’Mông, ngắm cảnh hùng vĩ của núi rừng Tây Bắc, tham quan thác thuỷ điện Cát Cát do người Pháp xây dựng.\r\n\r\nĂn trưa. Di chuyển đến ga cáp treo Fansipan bắt đầu hành trình chinh phục Fansipan bằng hệ thống cáp treo 3 dây hiện đại nhất thế giới với cabin có sức chứa tới 35 khách. Vượt qua 639 bậc thang chinh phục đỉnh Fansipan trên độ cao 3.143m – nóc nhà của Đông Dương. (chi phí cáp treo tự túc)\r\n\r\nĂn tối. Tự do khám phá SaPa về đêm. Nghỉ đêm tại thị trấn SaPa.'),
(12, 3, 'SAPA – HÀ NỘI – TP. HCM', 'Ăn sáng. Trả phòng. Khởi hành về lại Hà Nội.\r\n\r\nĂn trưa. Di chuyển ra sân bay Nội Bài đáp chuyến bay Hà Nội – TP. HCM.\r\n\r\n(Các chuyến bay dự kiến từ 16:30 – 17:30). Kết thúc chương trình tham quan!\r\n\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.'),
(13, 4, 'TP. HCM – ĐÀ NẴNG – SƠN TRÀ', 'Đón quý khách tại sân bay Tân Sơn Nhất, đáp chuyến bay khởi hành đi Đà Nẵng (các chuyến bay dự kiến từ 07:00 – 09:30). Đến Đà Nẵng, xe và HDV đón khách.\r\n\r\nĂn trưa đặc sản Đà Nẵng “Bánh tráng thịt heo 2 đầu da & mì Quảng”. Nhận phòng, nghỉ ngơi.\r\n\r\nBuổi chiều, khởi hành tham quan bán đảo Sơn Trà ngắm phố biển từ trên cao.\r\n\r\nViếng Linh Ứng Tự – nơi có tượng Phật Bà cao 67 mét cao nhất Việt Nam.\r\nCông viên kỳ quan thế giới Đà Nẵng – công trình thu nhỏ mô phỏng 9 kỳ quan thế giới và các địa danh nổi tiếng tại Việt Nam.\r\nTắm biển Mỹ Khê – từng được tạp chí Forbes bình chọn là bãi biển quyến rũ nhất hành tinh.\r\nĂn tối. Tự do thưởng ngoạn du thuyền sông Hàn ngắm cảnh Đà Thành về đêm. (chi phí tự túc)'),
(14, 4, 'ĐÀ NẴNG – PHỐ CỔ HỘI AN', 'Ăn sáng buffet tại khách sạn. Khởi hành tham quan:\r\n\r\nCông viên vườn tượng Apec Đà Nẵng – công trình thể hiện tinh thần hội nhập quốc tế và khát vọng vươn xa của người dân Đà Nẵng.\r\nCầu Tình Yêu và check-in với biểu tượng Cá Chép Hóa Rồng, cầu Rồng Đà Nẵng…\r\nChùa Quan Thế Âm – tọa lạc tại chân núi Kim Sơn, một trong năm ngọn Ngũ Hành Sơn.\r\nLàng nghề điêu khắc đá và mua sắm tại cửa hàng đặc sản Miền Trung.\r\nĂn trưa. Khởi hành tham quan Phố cổ Hội An – du khách tản bộ khám phá các công trình kiến trúc nổi tiếng: Chùa Cầu Nhật Bản, các ngôi nhà cổ hàng trăm tuổi, Hội Quán Phước Kiến, Xưởng thủ công mỹ nghệ. Phố cổ Hội An là quá khứ vàng son của một thương cảng sầm uất thời phong kiến.\r\n\r\nĂn tối. Khởi hành về lại Đà Nẵng. Tự do khám phá Đà Nẵng về đêm. Nghỉ đêm tại Đà Nẵng. '),
(15, 4, 'ĐÀ NẴNG – BÀ NÀ – HUẾ', 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:\r\n\r\nKhu du lịch Bà Nà Hills – chinh phục Bà Nà bằng hệ thống cáp treo một dây dài nhất thế giới 5.801m và là một trong 10 tuyến cáp treo ấn tượng nhất thế giới. Bà Nà là nơi có những khoảnh khắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày.\r\n(chi phí cáp treo Bà Nà tự túc)\r\nChùa Linh Ứng với tượng Phật Thích Ca cao 27m, đền thờ Bà Chúa Mẫu Thượng Ngàn.\r\nCầu Vàng – cây cầu độc đáo nằm trong vườn Thiên Thai, được xây dựng trên độ cao 1.400m so với mặt nước biển, được nâng đỡ bởi kiến trúc hình đôi bàn tay khổng lồ độc đáo.\r\nCông viên Fantasy Park với hơn 100 trò chơi phiêu lưu hấp dẫn, mang đến cho quý khách nhiều cung bậc cảm xúc bất ngờ và thú vị.\r\nĂn trưa buffet tại Bà Nà (chi phí tự túc).\r\n\r\n*Giá combo vé cáp treo Bà Nà Hills + vé buffet trưa tham khảo: 1,250,000VNĐ/ người.\r\n\r\n(Nếu quý khách không tham quan Bà Nà thì tự túc ăn trưa và tự túc chi phí nhập đoàn tại điểm hẹn).\r\n\r\nKhởi hành đi Huế đi xuyên hầm đường bộ đèo Hải Vân. Trên đường di chuyển, dừng chân chụp hình lưu niệm tại Làng chài Lăng Cô. Đến Huế, nhận phòng khách sạn.\r\n\r\nĂn tối với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái…). Xuống thuyền Rồng thưởng thức Ca Huế trên sông Hương – nét văn hóa độc đáo của xứ Huế. Nghỉ đêm tại Huế.'),
(16, 4, 'THÁNH ĐỊA LA VANG – ĐỘNG PHONG NHA', 'Ăn sáng buffet tại khách sạn. Rời Huế khởi hành đi Phong Nha – Kẻ Bàng. Trên đường tham quan:\r\n\r\nThánh Địa La Vang – Tiểu Vương Cung Thánh Đường, nơi lưu dấu những vết tích của lịch sử và là trung tâm hành hương Công Giáo lớn nhất của nước ta.\r\nVĩ tuyến 17 với chứng tích sông Bến Hải – cầu Hiền Lương huyền thoại.\r\nDi chuyển ngang qua cánh đồng điện gió Quảng Bình là dự án điện gió trên bờ có quy mô lớn nhất Việt Nam tính đến thời điểm hiện nay.\r\nĂn trưa tại Phong Nha. Ngồi thuyền ngược sông Son chinh phục Động Phong Nha: Cô Tiên & Cung Đình dưới sâu lòng núi nơi có con sông ngầm từ Lào chảy sang, chiêm ngưỡng các khối thạch nhũ tuyệt đẹp được kiến tạo bởi thiên nhiên qua hàng nghìn năm.\r\n\r\nKhởi hành về Huế theo đường Trường Sơn – Hồ Chí Minh.\r\n\r\nĂn tối. Tự do khám phá cố đô Huế về đêm với cầu Tràng Tiền rực rỡ soi mình xuống dòng sông Hương thơ mộng. Nghỉ đêm tại Huế.'),
(17, 4, 'HUẾ – ĐÀ NẴNG – TP. HCM', 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:\r\n\r\nĐại Nội – Hoàng cung triều Nguyễn, được xây dựng từ đầu thế kỷ XIX đến nửa đầu thế kỷ XX, là một trong số các di tích thuộc cụm Quần thể di tích Cố đô Huế được công nhận là Di sản Văn hoá Thế giới UNESCO từ năm 1993. Toàn cảnh Đại Nội Huế còn lưu giữ nhiều dấu ấn đặc sắc của triều đình phong kiến nhà Nguyễn hàng trăm năm.\r\nChùa Thiên Mụ cổ kính là nơi lưu giữ nhiều cổ vật có giá trị về mặt lịch sử và nghệ thuật.\r\nĂn trưa. Tham quan:\r\n\r\nLàng hương Thủy Xuân – Làng nghề làm hương truyền thống hơn 700 năm của xứ Huế.\r\nDi chuyển ra sân bay đáp chuyến bay về lại TP. HCM. Chia tay đoàn và hẹn gặp lại!\r\n\r\nSân bay Huế (các chuyến bay dự kiến sau 14:30).\r\nSân bay Đà Nẵng (các chuyến bay dự kiến sau 17:00).\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.'),
(19, 1, 'PHÚ QUỐC - TP. HỒ CHÍ MINH', 'Ăn sáng. Làm thủ tục trả phòng. Ra sân bay làm thủ tục đáp chuyến bay Phú Quốc – TP. HCM trở lại TP. HCM.\r\n\r\n(Các chuyến bay dự kiến sau 12:00).\r\n\r\nĐến sân bay Tân Sơn Nhất, kết thúc chương trình tham quan.'),
(21, 5, 'HÀ NỘI', 'KHỞI HÀNH THỨ 5 HÀNG TUẦN.\r\nTập trung tại sân bay Tân Sơn Nhất, làm thủ tục đáp chuyến bay đi Hà Nội (các chuyến bay cất cánh từ 07h00 đến 09h00). Đến sân bay Nội Bài, xe và HDV đón quý khách.\r\nĂn trưa. Nhận phòng khách sạn. Khởi hành tham quan:\r\nHồ Tây – hồ lớn nhất và là thắng cảnh nổi tiếng nhất ở thủ đô Hà Nội.\r\nChùa Trấn Quốc là một ngôi chùa cổ kính, được xây dựng cách đây 1.500 năm. Ngôi chùa này nguyên là Chùa Khai Quốc, từng là trung tâm hành hương Phật giáo của cả kinh thành Thăng Long vào thời Lý, Trần.\r\nNgắm hồ Gươm, thăm đền Ngọc Sơn, cầu Thê Húc.\r\nChụp hình tại Nhà Thờ Lớn, Nhà Hát Lớn Thành Phố.\r\nThưởng thức bánh cốm Hàng Than, kem Tràng Tiền – nét văn hóa ẩm thực đặc trưng rất riêng của Hà Nội.\r\nXem show diễn đặc sắc giới thiệu về quang cảnh và đời sống của vùng đồng bằng Bắc bộ qua show “Rối nước”.\r\nĂn tối với buffet. Tự do khám phá Hà Thành về đêm. Nghỉ đêm tại Hà Nội.\r\nVườn tiêu: Với những nọc tiêu thẳng tắp, xanh mơn mởn. \r\nCơ sở sản xuất rượu sim: thưởng thức rượu sim rừng đặc sản Phú Quốc.\r\nChùa Hùng Long Tự (Am Sư Muôn): Một ngôi chùa nằm giữa lưng chừng núi, nơi đây quý khách có thể nhìn thấy toàn cảnh thị trấn Dương Đông.\r\nThắng cảnh Dinh Cậu: nơi ngư dân địa phương gửi gắm đức tin và là địa điểm ngắm hoàng hôn đẹp nhất ở phía Tây đảo ngọc Phú Quốc.\r\nSuối Tranh: dòng suối đẹp mà thiên nhiên ban tặng cho Phú Quốc (Suối chỉ có nước vào tháng 5 đến tháng 11)\r\nLàng chài cổ Hàm Ninh: nổi tiếng với nghề đánh bắt hải sản của địa phương.\r\nTrường hợp nếu đoàn không tham quan suối Tranh và Làng chài Hàm Ninh sẽ được thay thế bằng điểm tham quan check-in làng Địa Trung Hải vào ngày thứ 2.\r\nĂn tối tại nhà hàng. Về khách sạn nhận phòng. Tự do khám phá Phú Quốc về đêm hoặc đăng ký option tour câu mực đêm (Chi phí câu mực tự túc).'),
(22, 5, 'HÀ NỘI – TRÀNG AN – BÁI ĐÍNH – HẠ LONG', 'Ăn sáng tại khách sạn. Trả phòng. Khởi hành tham quan khu du lịch Tràng An – Ninh Bình đã được UNESCO công nhận là Di sản Văn hóa và Thiên nhiên Thế giới vào năm 2014. Quý khách ngồi trên thuyền du ngoạn khám phá vẻ đẹp hoang sơ được ví như “Vịnh Hạ Long trên cạn” với vô vàn các hạng động, hệ thống sông, suối chảy tràn trong các thung lũng, các hang xuyên thủy động, các dãy núi đá vôi trùng điệp.\r\n\r\nĂn trưa với đặc sản cơm cháy dê núi. Tham quan chùa Bái Đính – ngôi chùa lớn nổi tiếng tại Miền Bắc, làm lễ cầu phúc lành. Rời Ninh Bình, theo quốc lộ 10 đi Hạ Long. Trên đường đi quý khách sẽ được cảm nhận cuộc sống, phong cảnh đặc trưng của đồng bằng Bắc Bộ với cảnh làng quê thanh bình qua các tỉnh Nam Định, Thái Bình, Hải Phòng.\r\n\r\nĐến Hạ Long, nhận phòng khách sạn.\r\n\r\nĂn tối. Tự do đi dạo chợ đêm Hạ Long, ngắm cảnh thành phố về đêm.\r\n\r\nNghỉ đêm tại Hạ Long.'),
(23, 5, 'HẠ LONG – YÊN TỬ – HÀ NỘI', 'Ăn sáng. Trả phòng. Khởi hành tham quan:\r\n\r\nVịnh Hạ Long – Di sản thiên nhiên Thế giới được UNESSCO công nhận. Chiêm ngưỡng vẻ đẹp huyền bí của hàng ngàn đảo đá và các hang động kỳ thú: Động Thiên Cung, ngắm cảnh Làng Chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi…\r\nĂn trưa. Tham quan:\r\n\r\nKhu danh thắng đất Phật Yên Tử – đất tổ của Thiền Phái Trúc Lâm. Quý khách đi cáp treo, tham quan Vườn Tháp Tổ, Chùa Hoa Yên (đã bao gồm vé cáp treo Yên Tử chặng Hoa Yên).\r\nKhởi hành về Hà Nội, trên đường dừng chân thưởng thức đặc sản bánh đậu xanh Hải Dương.\r\n\r\nĂn tối với đặc sản bún chả Hà Nội.\r\n\r\nNhận phòng khách sạn, nghỉ ngơi hoặc tự do tham gia không gian văn hóa, hòa nhịp với các ban nhạc đường phố, thưởng thức ẩm thực phố cổ với các món ăn tinh hoa đất thủ đô (chi phí tự túc, chợ diễn ra vào tối thứ 6,7,CN hàng tuần). Nghỉ đêm tại Hà Nội.'),
(24, 5, 'HÀ NỘI – TP. HCM', 'Ăn sáng. Khởi hành tham quan:\r\n\r\nViếng Lăng Bác, thăm Phủ Chủ Tịch, Nhà sàn, ao cá Bác Hồ, Chùa Một Cột…\r\nVăn Miếu – Quốc Tử Giám – Trường đại học đầu tiên của Việt Nam.\r\nĂn trưa. Di chuyển ra sân bay Nội Bài, làm thủ tục đáp chuyến bay về lại TP. HCM. \r\n\r\n(Các chuyến bay dự kiến từ 16:00 – 17:30). Về đến TP. HCM, kết thúc chương trình tham quan!\r\n\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.'),
(25, 6, 'TP. HCM – HÀ NỘI – HÀ GIANG', 'Tập trung tại sân bay Tân Sơn Nhất đáp chuyến bay TP. HCM – HÀ NỘI. (Các chuyến bay dự kiến trước 07:00). Xe và HDV đón khách tại sân bay Nội Bài. Khởi hành đi Hà Giang.\r\n\r\nĂn trưa tại Phú Thọ. Tiếp tục hành trình đến Hà Giang, đoàn check-in với cột mốc Km 0 – điểm khởi đầu con đường hạnh phúc xuyên cao nguyên đá.\r\n\r\nĂn tối. Nghỉ đêm tại Hà Giang.'),
(26, 6, 'HÀ GIANG – QUẢN BẠ – ĐỒNG VĂN', 'Ăn sáng tại khách sạn. Trả phòng. Di chuyển trên con đường hạnh phúc đến thị trấn Đồng Văn, trên đường đi du khách chiêm ngưỡng Núi Đôi Cô Tiên Quản Bạ. Khởi hành tham quan:\r\n\r\nPhố Cáo (Sủng Là) là một thung lũng nằm ở vùng núi Tây Bắc Việt Nam nổi tiếng với vẻ đẹp bình dị, nguyên sơ trường tồn qua năm tháng. Sở hữu lối kiến trúc độc đáo của những ngôi nhà trình tường màu vàng hoặc màu đỏ nhuộm màu thời gian.\r\nLàng văn hóa Lũng Cẩm nơi lấy bối cảnh những thước phim nổi tiếng “Chuyện của Pao”.\r\nĂn trưa. Nhận phòng khách sạn, nghỉ ngơi. Chiều, tham quan:\r\n\r\nDinh thự vua Mèo Vương Chí Sình là một công trình dinh thự lớn được xây dựng từ cuối thế kỉ XIX với những nét kiến trúc độc đáo và những câu chuyện bí ẩn xung quanh.\r\nCột cờ Lũng Cú – Cực Bắc – Nơi địa đầu Tổ Quốc, hay còn được miêu tả là: “Nơi cúi mặt sát đất, ngẩng mặt đụng trời”. Ngắm bản Séo Lủng và các thửa ruộng bậc thang từ trên cao.\r\nĂn tối. Tự do khám phá khu phố cổ Đồng Văn về đêm. Nghỉ đêm tại Đồng Văn.'),
(27, 6, 'ĐỒNG VĂN – MÃ PÌ LÈNG – CAO BẰNG', 'Ăn sáng. Trả phòng. Khởi hành đi Cao Bằng. Trên đường đi, thưởng ngoạn đèo Mã Pì Lèng – Nơi được mệnh danh là đệ nhất hùng quan của Việt Nam, hay con đường hạnh phúc.\r\n\r\nĂn trưa. Tiếp tục hành trình đi Cao Bằng, nếu thời tiết thuận lợi và điều kiện cho phép xe di chuyển theo cung đường đèo Mả Pia – đèo 14 tầng nổi tiếng nhất các đèo tại Việt Nam.\r\n\r\n(Nếu kịp giờ đoàn sẽ dừng chân tham quan: suối Lê Nin, Hang Pác Bó – Nơi hoạt động cách mạng đầu tiên sau khi chủ tịch Hồ chí Minh về nước).\r\n\r\nĐến Cao Bằng, nhận phòng khách sạn.\r\n\r\nĂn tối. Tự do khám phá Cao Bằng về đêm. Nghỉ đêm tại Cao Bằng.'),
(28, 6, 'CAO BẰNG – THÁC BẢN GIỐC – BA BỂ', 'Ăn sáng. Trả phòng. Khởi hành tham quan:\r\n\r\nThác Bản Giốc – Thác nước đẹp nhất Việt Nam và là thác nước lớn nhất Đông Nam Á. Thác có độ cao 53m, chia làm 3 tầng được ví von như dải lụa trắng giữa núi rừng Đông Bắc. Theo dòng chảy của sông Quây Sơn, từ thượng nguồn, mạch nước tuôn mạnh mẽ, tràn qua các thác phụ tạo nên một chiếc rèm nước tự nhiên tuyệt đẹp. Thác Bản Giốc có ý nghĩa đặc biệt khi nằm trên biên giới giữa Việt Nam và Trung Quốc.\r\nChụp hình lưu niệm với cột mốc biên giới 836 (02) chủ quyền thiêng liêng của Tổ Quốc.\r\nĐộng Ngườm Ngao – là hang động có vẻ đẹp kỳ thú ẩn mình trong ngọn núi hùng vĩ ở xã Đàm Thủy, huyện Trùng Khánh (Cao Bằng) và là một trong những hang động đẹp nhất Cao Bằng. Được ví như kiệt tác thiên nhiên hiếm có, giữ nguyên vẻ đẹp hoang sơ và độc đáo.\r\nĂn trưa. Khởi hành đi Ba Bể.\r\n\r\nĐến Ba Bể, nhận phòng nghỉ ngơi.\r\n\r\nĂn tối. Tự do khám phá Ba Bể về đêm. Nghỉ đêm tại Ba Bể.'),
(29, 6, 'BA BỂ – HÀ NỘI – TP. HCM', 'Ăn sáng. Di chuyển xuống thuyền đi tham quan dọc theo Hồ 1, Hồ 2 và Hồ 3 với các điểm:\r\n\r\nĐộng Puông.\r\nThác Đầu Đẳng.\r\nĐảo Bà Goá – gắn liền với sự tích Hồ Ba Bể.\r\nTìm hiểu cuộc sống, văn hoá, tập quán của các bản làng dân tộc sống trên triền núi bên hồ.\r\nĂn trưa. Khởi hành về Hà Nội.\r\n\r\nĐến sân bay Nội Bài, làm thủ tục đáp chuyến bay về lại TP. HCM (chuyến bay dự kiến sau 18:00).\r\n\r\nVề đến TP. HCM, kết thúc chuyến tham quan, chia tay đoàn và hẹn gặp lại!'),
(30, 7, 'TP. HCM – ĐÀ NẴNG – SƠN TRÀ', 'Đón Quý khách tại sân bay Tân Sơn Nhất, đáp chuyến bay khởi hành đi Đà Nẵng (các chuyến bay dự kiến chuyến bay từ 07:00 – 09:30). Đến Đà Nẵng, xe và HDV đón khách.\r\n\r\nĂn trưa đặc sản Đà Nẵng “Bánh tráng thịt heo 2 đầu da & mì Quảng”. Nhận phòng, nghỉ ngơi.\r\n\r\nBuổi chiều, khởi hành tham quan bán đảo Sơn Trà ngắm phố biển từ trên cao.\r\n\r\nViếng Linh Ứng Tự – nơi có tượng Phật Bà cao 67 mét cao nhất Việt Nam.\r\nCông viên kỳ quan thế giới Đà Nẵng – công trình thu nhỏ mô phỏng 9 kỳ quan thế giới và các địa danh nổi tiếng tại Việt Nam.\r\nTắm biển Mỹ Khê – từng được tạp chí Forbes bình chọn là bãi biển quyến rũ nhất hành tinh.\r\nĂn tối. Tự do thưởng ngoạn du thuyền sông Hàn ngắm cảnh Đà Thành về đêm. (chi phí tự túc)'),
(31, 7, 'ĐÀ NẴNG - PHỐ CỔ HỘI AN', 'Ăn sáng buffet tại khách sạn. Khởi hành tham quan:\r\n\r\nCông viên vườn tượng Apec Đà Nẵng – công trình thể hiện tinh thần hội nhập quốc tế và khát vọng vươn xa của người dân Đà Nẵng.\r\nCầu Tình Yêu và check-in với biểu tượng Cá Chép Hóa Rồng, cầu Rồng Đà Nẵng…\r\nChùa Quan Thế Âm – tọa lạc tại chân núi Kim Sơn, một trong năm ngọn Ngũ Hành Sơn.\r\nLàng nghề điêu khắc đá và mua sắm tại cửa hàng đặc sản Miền Trung.\r\nĂn trưa. Khởi hành tham quan:\r\n\r\nPhố cổ Hội An – du khách tản bộ khám phá các công trình kiến trúc nổi tiếng: Chùa Cầu Nhật Bản, các ngôi nhà cổ hàng trăm tuổi, Hội Quán Phước Kiến, Xưởng thủ công mỹ nghệ. Phố cổ Hội An là quá khứ vàng son của một thương cảng sầm uất thời phong kiến.\r\nĂn tối. Khởi hành về lại Đà Nẵng. Tự do khám phá Đà Nẵng về đêm. Nghỉ đêm tại Đà Nẵng.'),
(32, 7, 'ĐÀ NẴNG – BÀ NÀ – HUẾ', 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:\r\n\r\nKhu du lịch Bà Nà Hills – chinh phục Bà Nà bằng hệ thống cáp treo một dây dài nhất thế giới 5.801m và là một trong 10 tuyến cáp treo ấn tượng nhất thế giới. Bà Nà là nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày.\r\n(chi phí cáp treo Bà Nà tự túc)\r\n\r\nChùa Linh Ứng với tượng Phật Thích Ca cao 27m, đền thờ Bà Chúa Mẫu Thượng Ngàn.\r\nCầu Vàng – cây cầu độc đáo nằm trong vườn Thiên Thai, được xây dựng trên độ cao 1.400m so với mặt nước biển, được nâng đỡ bởi kiến trúc hình đôi bàn tay khổng lồ độc đáo.\r\nCông viên Fantasy Park với hơn 100 trò chơi phiêu lưu hấp dẫn, mang đến cho quý khách nhiều cung bậc cảm xúc bất ngờ và thú vị.\r\nĂn trưa buffet tại Bà Nà (chi phí tự túc).\r\n\r\n*Giá combo vé cáp treo Bà Nà Hills + vé buffet trưa tham khảo: 1,250,000VNĐ/ người.\r\n\r\n(Nếu quý khách không tham quan Bà Nà thì tự túc ăn trưa và tự túc chi phí nhập đoàn tại điểm hẹn).\r\n\r\nKhởi hành đi Huế đi xuyên hầm đường bộ đèo Hải Vân. Trên đường di chuyển, chụp hình lưu niệm tại Làng chài Lăng Cô. Đến Huế, nhận phòng khách sạn.\r\n\r\nĂn tối với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái…). Xuống thuyền Rồng thưởng thức Ca Huế trên sông Hương – nét văn hóa độc đáo của xứ Huế. Nghỉ đêm tại Huế.'),
(33, 7, 'HUẾ – ĐÀ NẴNG – TP. HCM', 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:\r\n\r\nĐại Nội – Hoàng cung triều Nguyễn, được xây dựng từ đầu thế kỷ XIX đến nửa đầu thế kỷ XX, là một trong số các di tích thuộc cụm Quần thể di tích Cố đô Huế được công nhận là Di sản Văn hoá Thế giới UNESCO từ năm 1993. Toàn cảnh Đại Nội Huế còn lưu giữ nhiều dấu ấn đặc sắc của triều đình phong kiến nhà Nguyễn hàng trăm năm.\r\nChùa Thiên Mụ cổ kính là nơi lưu giữ nhiều cổ vật có giá trị về mặt lịch sử và nghệ thuật.\r\nĂn trưa. Tham quan:\r\n\r\nLàng hương Thủy Xuân – Làng nghề làm hương truyền thống hơn 700 năm của xứ Huế.\r\nDi chuyển ra sân bay đáp chuyến bay về lại TP. HCM. Chia tay đoàn và hẹn gặp lại!\r\n\r\nSân bay Huế (các chuyến bay dự kiến sau 14:30).\r\nSân bay Đà Nẵng (các chuyến bay dự kiến sau 17:00).\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tours`
--

CREATE TABLE `tbl_tours` (
  `tourId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `priceAdult` double NOT NULL,
  `priceChild` double NOT NULL,
  `destination` varchar(255) NOT NULL,
  `domain` enum('b','t','n') NOT NULL COMMENT '''b'' MienBac,\r\n''t'' MienTrung,\r\n''n'' MienNam',
  `availability` tinyint(1) NOT NULL,
  `reviews` varchar(255) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tours`
--

INSERT INTO `tbl_tours` (`tourId`, `title`, `time`, `description`, `quantity`, `priceAdult`, `priceChild`, `destination`, `domain`, `availability`, `reviews`, `startDate`, `endDate`) VALUES
(1, 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '3 ngày 2 đêm', 'Tham quan: khu du lịch bãi Sao, di tích nhà tù Phú Quốc, Dinh Cậu, Hùng Long Tự, suối Tranh, làng chài cổ Hàm Ninh, Thị trấn Hoàng Hôn, vườn tiêu, nhà thùng nước mắm, cơ sở chế tác Ngọc Trai, cơ sở sản xuất rượu sim rừng…<br> Lưu trú: Khách sạn chuẩn 3 sao, resort 3 sao – 4 sao.<br> Hoạt động khác: tắm biển, lặn biển, ngắm san hô, câu cá và thử sức với các trò chơi biển,…', 39, 1000000, 500000, 'PHÚ QUỐC', 'n', 1, NULL, '2025-04-01', '2025-04-24'),
(2, 'BIỂN ĐẢO 1N', '1 ngày', '', 41, 2000000, 1500000, 'Côn đảo', 'n', 1, NULL, '2025-04-01', '2025-04-23'),
(3, 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '4 ngày 3 đêm', '', 42, 4790000, 3600000, 'HÀ NỘI, LÀO CAI, SA PA', 'b', 1, NULL, '2025-04-01', '2025-04-25'),
(4, 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '5 ngày 4 đêm', '', 9, 4990000, 3750000, 'ĐÀ NẴNG, HỘI AN, BÀ NÀ, HUẾ, PHONG NHA', 't', 1, NULL, '2025-03-30', '2025-04-02'),
(5, 'MIỀN BẮC 4N3Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ', '4 ngày 3 đêm', 'Tham quan: Hồ Tây, Chùa Trấn Quốc, Hồ Gươm, Vịnh Hạ Long, Viếng Lăng Bác, Khu danh thắng đất Phật Yên Tử, Chùa Bái Đính,… \r\nLưu trú: Khách sạn chuẩn 4*. \r\nĂn uống: Thưởng thức bún chả Hà Nội, kem Tràng Tiền, bánh cốm Hàng Than, 01 bữa buffet tối.\r\nHoạt động khác: Tìm hiểu về đời sống văn hóa của người nông dân Bắc Bộ qua các tiết mục múa rối nước. ', 37, 1000000, 500000, ' HÀ NỘI, NINH BÌNH, HẠ LONG, YÊN TỬ', 'b', 1, NULL, '2025-04-01', '2025-04-30'),
(6, 'MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN', '5 ngày 4 đêm ', 'Tham quan: Phố Cáo, làng văn hóa Lũng Cẩm, dinh thự vua Mèo, thác Bản Giốc, đèo Mã Pí Lèng, đèo Mả Pia – đèo 14 tầng, hồ Ba Bể…\r\nLưu trú: Homestay cao cấp, Khách sạn 3*. \r\nHoạt động khác: Chụp hình lưu niệm với cột mốc biên giới 836 (02) chủ quyền thiêng liêng của Tổ Quốc. ', 40, 2000000, 1500000, 'HÀ NỘI, HÀ GIANG, CAO BẰNG, BẮC KẠN', 'b', 1, NULL, '2025-04-01', '2025-04-30'),
(7, 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ', '4 ngày 3 đêm', 'Tham quan: Bà Nà Hills, Chùa Linh Ứng, Cầu Tình Yêu, Cá Chép Hóa Rồng, Chùa Quan Thế Âm, Làng nghề điêu khắc đá, Đại Nội – Hoàng Cung Triều Nguyễn, Chùa Cầu Nhật Bản,… \r\nLưu trú: Khách sạn chuẩn 4 sao. \r\nĂn uống: Bánh tráng thịt heo 2 đầu da và mì Quảng Đà Nẵng, đặc sản xứ Huế: Bánh bèo, lọc, nậm, khoái…\r\nHoạt động khác: Thưởng thức ca Huế trên sông Hương, Tắm biển Mỹ Khê,…', 50, 3990000, 3500000, 'ĐÀ NẴNG, HỘI AN, BÀ NÀ, HUẾ', 't', 1, NULL, '2025-04-01', '2025-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `google_id` varchar(50) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ipAddress` varchar(50) DEFAULT NULL,
  `isActive` enum('y','n') NOT NULL DEFAULT 'n' COMMENT 'y: yes n: no',
  `status` enum('d','b') DEFAULT NULL COMMENT 'd: delete b: banned',
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `activation_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `google_id`, `fullName`, `username`, `password`, `email`, `avatar`, `phoneNumber`, `address`, `ipAddress`, `isActive`, `status`, `createdDate`, `updatedDate`, `activation_token`) VALUES
(29, NULL, NULL, 'thanhla', 'e10adc3949ba59abbe56e057f20f883e', 'totiiteee@gmail.com', '1743067033.jpg', '999999', 'Đà Lạtff', NULL, 'y', NULL, '2025-03-15 18:00:22', '2025-03-15 18:00:22', NULL),
(32, '117262954282976031887', 'Nam Tran Van', 'user-google-8260', '25d55ad283aa400af464c76d713c07ad', 'trannamvan0605@gmail.com', '1742195684.png', '0898354417', 'Đăk Nông', NULL, 'y', NULL, '2025-03-17 07:04:16', '2025-03-17 07:04:16', NULL),
(33, '102131736694418022784', 'Nam Trần Văn', 'user-google-8086', '25d55ad283aa400af464c76d713c07ad', 'anhmk864@gmail.com', '1742197534.jpg', NULL, NULL, NULL, 'y', NULL, '2025-03-17 07:05:57', '2025-03-17 07:05:57', NULL),
(34, NULL, NULL, 'testq', 'e10adc3949ba59abbe56e057f20f883e', '2115239@dlu.edu.vn', NULL, NULL, NULL, NULL, 'y', NULL, '2025-03-21 13:41:55', '2025-03-21 13:41:55', NULL),
(35, NULL, NULL, 'tandiem', 'e10adc3949ba59abbe56e057f20f883e', 'tandiem101@gmail.com', NULL, NULL, NULL, NULL, 'n', NULL, '2025-03-27 14:47:57', '2025-03-27 14:47:57', '0fjKOG8Irqe919CgsOwgAiYUfJxqXt7YszyzciwMOaEz6u2ye5HedTUkStfw');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `fk_booking_tour` (`tourId`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chatId`),
  ADD KEY `fk_chat_user` (`userId`),
  ADD KEY `fk_chat_admin` (`adminId`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`checkoutId`),
  ADD KEY `fk_checkout_booking` (`bookingId`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`historyId`),
  ADD KEY `fk_history_user` (`userId`),
  ADD KEY `fk_history_tour` (`tourId`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `fk_image_tour` (`tourId`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`invoiceId`),
  ADD KEY `fk_invoice` (`bookingId`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promotionId`);

--
-- Indexes for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `fk_review_user` (`userId`),
  ADD KEY `fk_revirew_tour` (`tourId`);

--
-- Indexes for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`timeLineId`),
  ADD KEY `fk_tour` (`tourId`);

--
-- Indexes for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`tourId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `checkoutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `invoiceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promotionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `timeLineId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `fk_booking_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Constraints for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD CONSTRAINT `fk_chat_admin` FOREIGN KEY (`adminId`) REFERENCES `tbl_admin` (`adminId`),
  ADD CONSTRAINT `fk_chat_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD CONSTRAINT `fk_checkout_booking` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Constraints for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `fk_history_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`),
  ADD CONSTRAINT `fk_history_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD CONSTRAINT `fk_image_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Constraints for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `fk_invoice` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Constraints for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`),
  ADD CONSTRAINT `fk_revirew_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Constraints for table `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD CONSTRAINT `fk_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
