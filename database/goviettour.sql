-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 10, 2025 lúc 12:55 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `goviettour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
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
-- Cấu trúc bảng cho bảng `job_batches`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('901df7NDqmLFJB97YaUbRgEcopyn8AZCybPIE6yZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmtOYm5TQUJmZll3RVFTQW9DVjlURTJHZUNrSUJDTDhuNzNZUjBBeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hdXRoL2dvb2dsZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToic3RhdGUiO3M6NDA6IjFScGtDRjNnRkxNMlZHaXRvV0R1aGF1ZVJUNG5DZGRXcnM2d1VEa1EiO30=', 1741605332),
('qN3qzLJ8NIt5vSNPezwwkTI5qEmU8hJDPlzgjrV8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXJuQ1BPclFWRWg2eE5zcU5RUFN3T1F0WjY4NXVmdDBPeWt0VU1hUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTA0OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvY2xpZW50cy9hc3NldHMvZm9udHMvZmxhdGljb25fR29WaWV0VG91cjEwZjMudHRmPzZhMTdlOWUyNmRiYjVhMjM2MGY1MTVlMTIzYzhlOTIxPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741607679);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(10) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passWord` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `bookingId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `numAdult` int(11) NOT NULL,
  `numChild` int(11) NOT NULL,
  `totalPrice` double NOT NULL,
  `bookingStatus` varchar(255) NOT NULL,
  `specialRequests` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chat`
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
-- Cấu trúc bảng cho bảng `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `checkoutId` int(11) NOT NULL,
  `bookingId` int(11) NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `paymentDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` double NOT NULL,
  `paymentStatus` varchar(255) NOT NULL,
  `transactionId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_history`
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
-- Cấu trúc bảng cho bảng `tbl_images`
--

CREATE TABLE `tbl_images` (
  `imageId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `uploadDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_images`
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
(24, 4, 'mien-trung-5n4d-5.jpg', 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '2025-03-07 09:41:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_invoice`
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
-- Cấu trúc bảng cho bảng `tbl_promotion`
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
-- Cấu trúc bảng cho bảng `tbl_reviews`
--

CREATE TABLE `tbl_reviews` (
  `reviewId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `timeLineId` int(11) NOT NULL,
  `tourId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`timeLineId`, `tourId`, `title`, `description`) VALUES
(5, 1, 'TP. HỒ CHÍ MINH - PHÚ QUỐC', 'ập trung tại sân bay Tân Sơn Nhất, đáp chuyến bay TP. HCM – Phú Quốc. (Các chuyến bay dự kiến từ 09:45 – 11:00). Đến sân bay Phú Quốc, xe và hướng dẫn viên đón khách khởi hành chương trình khám phá đảo ngọc Phú Quốc.\r\n\r\nĂn trưa tại nhà hàng. Khởi hành tham quan phía Đông đảo:\r\n\r\nNhà thùng nước mắm: tìm hiểu cách ủ nước mắm truyền thống có lịch sử hơn 100 năm tại Phú Quốc, với thương hiệu nổi tiếng “Nước mắm Phú Quốc” được bảo hộ trên toàn thế giới.\r\nVườn tiêu: Với những nọc tiêu thẳng tắp, xanh mơn mởn. \r\nCơ sở sản xuất rượu sim: thưởng thức rượu sim rừng đặc sản Phú Quốc.\r\nChùa Hùng Long Tự (Am Sư Muôn): Một ngôi chùa nằm giữa lưng chừng núi, nơi đây quý khách có thể nhìn thấy toàn cảnh thị trấn Dương Đông.\r\nThắng cảnh Dinh Cậu: nơi ngư dân địa phương gửi gắm đức tin và là địa điểm ngắm hoàng hôn đẹp nhất ở phía Tây đảo ngọc Phú Quốc.\r\nSuối Tranh: dòng suối đẹp mà thiên nhiên ban tặng cho Phú Quốc (Suối chỉ có nước vào tháng 5 đến tháng 11)\r\nLàng chài cổ Hàm Ninh: nổi tiếng với nghề đánh bắt hải sản của địa phương.\r\nTrường hợp nếu đoàn không tham quan suối Tranh và Làng chài Hàm Ninh sẽ được thay thế bằng điểm tham quan check-in làng Địa Trung Hải vào ngày thứ 2.\r\n\r\nĂn tối tại nhà hàng. Về khách sạn nhận phòng. Tự do khám phá Phú Quốc về đêm hoặc đăng ký option tour câu mực đêm (Chi phí câu mực tự túc).'),
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
(17, 4, 'HUẾ – ĐÀ NẴNG – TP. HCM', 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:\r\n\r\nĐại Nội – Hoàng cung triều Nguyễn, được xây dựng từ đầu thế kỷ XIX đến nửa đầu thế kỷ XX, là một trong số các di tích thuộc cụm Quần thể di tích Cố đô Huế được công nhận là Di sản Văn hoá Thế giới UNESCO từ năm 1993. Toàn cảnh Đại Nội Huế còn lưu giữ nhiều dấu ấn đặc sắc của triều đình phong kiến nhà Nguyễn hàng trăm năm.\r\nChùa Thiên Mụ cổ kính là nơi lưu giữ nhiều cổ vật có giá trị về mặt lịch sử và nghệ thuật.\r\nĂn trưa. Tham quan:\r\n\r\nLàng hương Thủy Xuân – Làng nghề làm hương truyền thống hơn 700 năm của xứ Huế.\r\nDi chuyển ra sân bay đáp chuyến bay về lại TP. HCM. Chia tay đoàn và hẹn gặp lại!\r\n\r\nSân bay Huế (các chuyến bay dự kiến sau 14:30).\r\nSân bay Đà Nẵng (các chuyến bay dự kiến sau 17:00).\r\nCác mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tours`
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
-- Đang đổ dữ liệu cho bảng `tbl_tours`
--

INSERT INTO `tbl_tours` (`tourId`, `title`, `time`, `description`, `quantity`, `priceAdult`, `priceChild`, `destination`, `domain`, `availability`, `reviews`, `startDate`, `endDate`) VALUES
(1, 'BIỂN ĐẢO 4N3Đ | PHÚ QUỐC', '3 ngày 2 đêm', 'Tham quan: khu du lịch bãi Sao, di tích nhà tù Phú Quốc, Dinh Cậu, Hùng Long Tự, suối Tranh, làng chài cổ Hàm Ninh, Thị trấn Hoàng Hôn, vườn tiêu, nhà thùng nước mắm, cơ sở chế tác Ngọc Trai, cơ sở sản xuất rượu sim rừng…<br> Lưu trú: Khách sạn chuẩn 3 sao, resort 3 sao – 4 sao.<br> Hoạt động khác: tắm biển, lặn biển, ngắm san hô, câu cá và thử sức với các trò chơi biển,…', 50, 1000000, 500000, 'PHÚ QUỐC', 'n', 0, NULL, '2025-03-07', '2025-03-31'),
(2, 'BIỂN ĐẢO 1N', '1 ngày', '', 50, 2000000, 1500000, 'Côn đảo', 'n', 0, NULL, '2025-03-07', '2025-03-20'),
(3, 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA', '4 ngày 3 đêm', '', 50, 4790000, 3600000, 'HÀ NỘI, LÀO CAI, SA PA', 'b', 1, NULL, '2025-03-07', '2025-03-13'),
(4, 'MIỀN TRUNG 5N4Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ – PHONG NHA', '5 ngày 4 đêm', '', 50, 4990000, 3750000, 'À NẴNG, HỘI AN, BÀ NÀ, HUẾ, PHONG NHA', 't', 1, NULL, '2025-03-07', '2025-03-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `google_id` varchar(50) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `google_id`, `fullName`, `username`, `password`, `email`, `phoneNumber`, `address`, `ipAddress`, `isActive`, `status`, `createdDate`, `updatedDate`, `activation_token`) VALUES
(9, NULL, NULL, 'haha', 'e36f42b72dead51a788200bbfdac58d8', 'laathanh09@gmail.com', NULL, NULL, NULL, 'y', NULL, '2025-03-08 18:46:51', '2025-03-08 18:46:51', NULL),
(14, NULL, NULL, 'hihi', '96e79218965eb72c92a549dd5a330112', '2115268@dlu.edu.vn', NULL, NULL, NULL, 'n', NULL, '2025-03-08 19:13:48', '2025-03-08 19:13:48', 'VMzjTE9qRL4Z5rXMos3D78EseM7nvrcAcvE0QmlxojklZ2hXowlItMbI1RLW'),
(15, NULL, NULL, 'thanhla', '96e79218965eb72c92a549dd5a330112', 'totiiteee@gmail.com', NULL, NULL, NULL, 'n', NULL, '2025-03-08 19:15:35', '2025-03-08 19:15:35', '2nRBdELpIk71ZGGDEar4zt1hQbmdz00gN2XouNpDMVOQ186z2KG1xbxYeDrw'),
(16, NULL, NULL, 'tvnam', 'e10adc3949ba59abbe56e057f20f883e', 'anhmk864@gmail.com', NULL, NULL, NULL, 'y', NULL, '2025-03-10 02:45:05', '2025-03-10 02:45:05', NULL),
(18, '117262954282976031887', 'Nam Tran Van', 'user-google', '25d55ad283aa400af464c76d713c07ad', 'trannamvan0605@gmail.com', NULL, NULL, NULL, 'y', NULL, '2025-03-10 11:25:15', '2025-03-10 11:25:15', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `fk_booking_tour` (`tourId`);

--
-- Chỉ mục cho bảng `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`chatId`),
  ADD KEY `fk_chat_user` (`userId`),
  ADD KEY `fk_chat_admin` (`adminId`);

--
-- Chỉ mục cho bảng `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`checkoutId`),
  ADD KEY `fk_checkout_booking` (`bookingId`);

--
-- Chỉ mục cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`historyId`),
  ADD KEY `fk_history_user` (`userId`),
  ADD KEY `fk_history_tour` (`tourId`);

--
-- Chỉ mục cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `fk_image_tour` (`tourId`);

--
-- Chỉ mục cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`invoiceId`),
  ADD KEY `fk_invoice` (`bookingId`);

--
-- Chỉ mục cho bảng `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promotionId`);

--
-- Chỉ mục cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `fk_review_user` (`userId`),
  ADD KEY `fk_revirew_tour` (`tourId`);

--
-- Chỉ mục cho bảng `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`timeLineId`),
  ADD KEY `fk_tour` (`tourId`);

--
-- Chỉ mục cho bảng `tbl_tours`
--
ALTER TABLE `tbl_tours`
  ADD PRIMARY KEY (`tourId`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE ``
  ADD PRIMARY KEY (`userId`);

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
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `chatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `checkoutId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `historyId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `invoiceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promotionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `timeLineId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_tours`
--
ALTER TABLE `tbl_tours`
  MODIFY `tourId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `fk_booking_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Các ràng buộc cho bảng `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD CONSTRAINT `fk_chat_admin` FOREIGN KEY (`adminId`) REFERENCES `tbl_admin` (`adminId`),
  ADD CONSTRAINT `fk_chat_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Các ràng buộc cho bảng `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD CONSTRAINT `fk_checkout_booking` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Các ràng buộc cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `fk_history_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`),
  ADD CONSTRAINT `fk_history_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`);

--
-- Các ràng buộc cho bảng `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD CONSTRAINT `fk_image_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Các ràng buộc cho bảng `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `fk_invoice` FOREIGN KEY (`bookingId`) REFERENCES `tbl_booking` (`bookingId`);

--
-- Các ràng buộc cho bảng `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD CONSTRAINT `fk_review_user` FOREIGN KEY (`userId`) REFERENCES `tbl_users` (`userId`),
  ADD CONSTRAINT `fk_revirew_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);

--
-- Các ràng buộc cho bảng `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD CONSTRAINT `fk_tour` FOREIGN KEY (`tourId`) REFERENCES `tbl_tours` (`tourId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
