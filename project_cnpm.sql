-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 02:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_cnpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên danh mục',
  `type` tinyint(3) DEFAULT 0 COMMENT 'Loại danh mục: 0 - Product, 1 - News',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh danh mục',
  `description` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho danh mục',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo danh mục',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `avatar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hihi', 0, '', '<p>hihi</p>\r\n', 0, '2020-11-11 03:05:30', NULL),
(3, 'Cá koi', 0, '1605451097-koi_1.jpg', '<p>C&aacute; ch&eacute;p Koi hay cụ thể hơn C&aacute; ch&eacute;p Nishikigoi l&agrave; một loại c&aacute; ch&eacute;p thường (Cyprinus carpio) đ&atilde; được thuần h&oacute;a, lai tạo để nu&ocirc;i l&agrave;m cảnh trong những hồ nhỏ, được nu&ocirc;i phổ biến tại Nhật Bản. Ch&uacute;ng c&oacute; quan hệ họ h&agrave;ng gần với c&aacute; v&agrave;ng v&agrave;, tr&ecirc;n thực tế, kiểu c&aacute;ch nh&acirc;n giống v&agrave; nu&ocirc;i cảnh l&agrave; kh&aacute; giống với c&aacute;ch nu&ocirc;i c&aacute; v&agrave;ng, c&oacute; lẽ l&agrave; do c&aacute;c cố gắng của những người nh&acirc;n giống Nhật Bản trong việc ganh đua với c&aacute; v&agrave;ng. C&aacute; ch&eacute;p Koi v&agrave; c&aacute;c h&igrave;nh xăm tr&ecirc;n c&aacute; được người Nhật coi l&agrave; điềm may mắn.</p>\r\n', 1, '2020-11-15 14:38:18', '2020-11-15 21:43:53'),
(4, 'Cá rồng', 0, '1605451211-HuyetLong_001.jpg', '<p>T&ecirc;n gọi c&aacute; rồng l&agrave; một từ th&ocirc;ng dụng trong tiếng Việt để chỉ nhiều loại c&aacute; kh&ocirc;ng c&oacute; quan hệ.</p>\r\n\r\n<p>Trong tự nhi&ecirc;n ch&uacute;ng sống chủ yếu ở c&aacute;c hồ rộng hoặc ở những con s&ocirc;ng lớn, trong đ&oacute; c&oacute; một số lo&agrave;i rất hiếm được liệt k&ecirc; trong s&aacute;ch Đỏ của thế giới như: c&aacute; kim long qu&aacute; bối; c&aacute; huyết long; c&aacute; kim long hồng vĩ. Trong thế giới c&aacute; cảnh, c&aacute; rồng ch&acirc;u &Aacute; l&agrave; loại được xếp v&agrave;o h&agrave;ng đầu bởi vẻ đẹp, n&eacute;t độc đ&aacute;o v&agrave; vấn đề t&acirc;m linh v&igrave; người ta cho rằng: C&aacute; rồng l&agrave; tượng trưng cho sự may mắn, ph&aacute;t t&agrave;i lộc, đem lại hạnh ph&uacute;c v&agrave; xua đuổi t&agrave; ma l&agrave;m cho phong thủy được tốt hơn.</p>\r\n', 1, '2020-11-15 14:40:11', '2020-11-15 21:44:05'),
(5, 'Bể cá rồng', 0, '1605451317-bc_rong_r1.jpg', '<p>- Bể k&iacute;nh Việt Nhật với độ d&agrave;y ph&ugrave; hợp. ( K&iacute;nh cường lực an to&agrave;n, k&iacute;nh c&oacute; độ d&agrave;y 12mm, 15mm, 19mm, 24mm...)<br />\r\n- Bể lọc dưới c&oacute; thể t&iacute;ch ph&ugrave; hợp với bể ch&iacute;nh.<br />\r\n- Ch&acirc;n gỗ tự nhi&ecirc;n.( Khung Tr&ograve; Chỉ, Căm Xe, Lim.C&aacute;nh Sồi, Xoan, Hương Đỏ, Gụ. Chạm trổ hoa văn )<br />\r\n- Hệ thống đường ống h&uacute;t mặt h&uacute;t đ&aacute;y, nấm h&uacute;t đ&aacute;y, van air, xẻ r&atilde;nh h&uacute;t mặt với y&ecirc;u cầu thẩm mỹ cao nhất.<br />\r\n- M&aacute;y Bơm c&oacute; c&ocirc;ng suất ph&ugrave; hợp với bể của Atman.<br />\r\n- Đ&egrave;n T5 Odysea c&oacute; k&iacute;ch thước v&agrave; c&ocirc;ng suất ph&ugrave; hợp với bể.<br />\r\n- Tranh 3D in theo mẫu kh&aacute;ch lựa chọn.<br />\r\n- Vật liệu lọc b&ugrave;i nh&ugrave;i, nham thạch, sứ lọc. . .<br />\r\n- Sưởi Odysea<br />\r\n- Ngo&agrave;i ra c&ograve;n c&oacute; đường chờ cho nhiều thiết bị kh&aacute;c nếu kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu lắp th&ecirc;m ( Dotech, đ&egrave;n UV, thay nước tự động, v..v...)</p>\r\n', 1, '2020-11-15 14:41:57', '2020-11-15 21:44:11'),
(6, 'Bể cá treo tường', 0, '', '<p>- Bể c&aacute; biển treo tường khung gỗ&nbsp;<br />\r\n- Trang tr&iacute; giả cảnh biển&nbsp;<br />\r\n- Sử dụng san h&ocirc; b&ocirc;ng v&agrave; hải quỳ trang tr&iacute; bể c&aacute; cảnh . Đ&agrave;n c&aacute; bơi lội tạo n&ecirc;n bức tranh sống động ngay trong nh&agrave;.<br />\r\n- Ph&iacute;a sau l&agrave; tranh 3d tạo chiều s&acirc;u cho bể c&aacute;&nbsp;<br />\r\n- Phụ kiện : Đ&egrave;n + bộ lọc + bộ sục kh&iacute; +sưởi ,....<br />\r\n- Sang trọng - chất lượng&nbsp;</p>\r\n', 1, '2020-11-15 14:42:40', '2020-11-15 21:44:18'),
(7, 'Máy sục khí bể cá', 0, '1605451404-pk_suc_khi_s1.jpg', '<p>- Nh&atilde;n hiệu: Resun&nbsp;<br />\r\n- Model: ACO-001<br />\r\n- Loại: M&aacute;y sủi điện<br />\r\n- Số lượng đầu v&ograve;i: 04<br />\r\n- C&ocirc;ng suất: 18 w<br />\r\n- Lưu lượng kh&iacute;: 38l/ph&uacute;t<br />\r\n- Sản phẩm gồm: M&aacute;y sủi<br />\r\n- C&ocirc;ng dụng: D&ugrave;ng để tạo &ocirc; xi cho bể c&aacute;<br />\r\n- C&aacute;ch sử dụng: Để quả sủi, miếng sủi, thanh sủi, đồ chơi cho m&aacute;y sủi trong bể<br />\r\n- Khuyến c&aacute;o của nh&agrave; sản xuất: Để m&aacute;y sủi cao hơn so với mực nước của bể, tr&aacute;nh nước tiếp x&uacute;c với m&aacute;y sủi</p>\r\n', 1, '2020-11-15 14:43:24', '2020-11-15 21:44:27'),
(8, 'Đèn bể cá cảnh', 0, '1605451532-pk_den_d1.jpg', '<p>Th&ocirc;ng số kỹ thuật<br />\r\nĐiện &aacute;p: 220V<br />\r\nC&ocirc;ng suất: 8w<br />\r\nTần số: 60/50Hz<br />\r\nThiết kế hiện đại, độc đ&aacute;o, thanh lịch<br />\r\nCấu tr&uacute;c độc đ&aacute;o để điều chỉnh luồng nước lu&acirc;n chuyển v&agrave; diệt khuẩn. đ&egrave;n UV v&agrave; k&iacute;nh được l&agrave;m bằng thạch anh tinh khiết chất lượng cao, khiến hiệu quả diệt khuẩn tốt hơn.<br />\r\nC&ocirc;ng dụng: Diệt r&ecirc;u, diệt khuẩn bể c&aacute;<br />\r\nLưu &yacute;:<br />\r\n- Đ&egrave;n được lắp với m&aacute;y bơm . Nước sẽ chạy qua đ&egrave;n, được khử khuẩn v&agrave; đưa l&ecirc;n m&aacute;ng lọc, sau đ&oacute; được trả xuống bể.<br />\r\n- Kh&ocirc;ng sử dung li&ecirc;n tục, mỗi lần d&ugrave;ng 4-6h<br />\r\n- Tắt nguồn điện trước khi cho tay v&agrave;o nước<br />\r\n- Kh&ocirc;ng để &aacute;nh s&aacute;ng đ&egrave;n trực tiếp v&agrave;o mắt người, c&aacute; v&agrave; c&aacute;c động vật dưới nước kh&aacute;c để tr&aacute;nh thương t&iacute;ch v&agrave; thiệt hại</p>\r\n', 1, '2020-11-15 14:45:32', '2020-11-15 21:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà tin tức thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề tin tức',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho tin tức',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh tin tức',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'Id của user trong trường hợp đã login và đặt hàng, là khóa ngoại liên kết với bảng users',
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `mobile` int(11) DEFAULT NULL COMMENT 'SĐT khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `note` text DEFAULT NULL COMMENT 'Ghi chú từ khách hàng',
  `price_total` int(11) DEFAULT NULL COMMENT 'Tổng giá trị đơn hàng',
  `payment_status` tinyint(2) DEFAULT NULL COMMENT 'Trạng thái đơn hàng: 0 - Chưa thành toán, 1 - Đã thành toán',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL COMMENT 'Id của order tương ứng, là khóa ngoại liên kết với bảng orders',
  `product_id` int(11) DEFAULT NULL COMMENT 'Id của product tương ứng, là khóa ngoại liên kết với bảng products',
  `quantity` int(11) DEFAULT NULL COMMENT 'Số sản phẩm đã đặt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà sản phẩm thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `amount` int(11) DEFAULT NULL COMMENT 'Số lượng sản phẩm trong kho',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho sản phẩm',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT 'File ảnh slide',
  `position` tinyint(3) DEFAULT NULL COMMENT 'Vị trí hiển thị của slide, ví dụ: = 0 hiển thị đầu tiên...',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `avatar`, `position`, `status`, `created_at`, `updated_at`) VALUES
(3, 'hihi', '1605279775-bc_tuong_t1.png', 0, 0, '2020-11-13 15:02:55', '2020-11-14 21:13:12'),
(4, 'saa11', '1605280224-news_2.png', NULL, 0, '2020-11-13 15:10:24', NULL),
(5, 'aaaa222', '1605280273-news_3.jpg', 0, 0, '2020-11-13 15:11:13', '2020-11-14 21:13:18'),
(6, 'abc', '1605281780-news_4.jpg', 0, 0, '2020-11-13 15:36:20', '2020-11-14 21:13:22'),
(7, 'ac', '1605281968-news_1.jpg', 0, 0, '2020-11-13 15:39:28', '2020-11-14 21:13:38'),
(8, 'ad', '1605282073-news_3.jpg', 0, 0, '2020-11-13 15:41:13', '2020-11-14 21:13:47'),
(9, 'hihi', '1605282133-news_1.jpg', NULL, 0, '2020-11-13 15:42:13', NULL),
(10, 'gg', '1605282990-showa-koi.jpg', 0, 0, '2020-11-13 15:56:30', '2020-11-14 21:13:56'),
(11, 'hihi1', '1605362626-koi_1.jpg', 0, 0, '2020-11-14 14:03:46', '2020-11-14 21:14:06'),
(12, 'kien21', '1605362692-news_4.jpg', 0, 0, '2020-11-14 14:04:52', '2020-11-14 21:14:12'),
(13, 'saa11s', '1605362903-slide_3.jpg', 0, 0, '2020-11-14 14:08:23', '2020-11-14 21:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) DEFAULT NULL COMMENT 'Mật khẩu đăng nhập',
  `first_name` varchar(255) DEFAULT NULL COMMENT 'Fist name',
  `last_name` varchar(255) DEFAULT NULL COMMENT 'Last name',
  `phone` int(11) DEFAULT NULL COMMENT 'SĐT user',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ user',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email của user',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'File ảnh đại diện',
  `jobs` varchar(255) DEFAULT NULL COMMENT 'Nghề nghiệp',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `facebook` varchar(255) DEFAULT NULL COMMENT 'Link facebook',
  `status` tinyint(3) DEFAULT 0 COMMENT 'phân quyền : 0 - admin ; 1 - users',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `phone`, `address`, `email`, `avatar`, `jobs`, `last_login`, `facebook`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kienhi', 'e10adc3949ba59abbe56e057f20f883e', 'kien', 'bui', 123456, '', '', '1605016966-user-avatar_kienhi.jpg', '', NULL, '', 0, '2020-10-21 02:24:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
