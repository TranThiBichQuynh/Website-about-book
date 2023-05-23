-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2021 lúc 03:18 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerceapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `is_active` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Admin', 'qc@gmail.com', '$2y$10$O.2/3b03bGXm35N79pAvb.SdnQ6y0DBzn6P8XiPmTwR5ZwfiLe2mm', '0'),
(12, 'Quynh', 'quynh@gmail.com', '$2y$10$R11h/n228EwHw4VPg1CT0uaZrrmBQKeqZUW.qP1/l9DqvsP2287Ty', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Việt Nam'),
(2, 'Anh'),
(3, 'Mỹ'),
(4, 'Đan Mạch'),
(5, 'Đức'),
(6, 'Trung Quốc'),
(7, 'Nhật Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(18, 7, '::1', 9, 1),
(26, 6, '::1', 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Sách thiếu nhi'),
(3, 'Sách văn học - Tiểu thuyết'),
(4, 'Sách kỹ năng sống'),
(5, 'Sách giáo khoa'),
(6, 'Truyện tranh'),
(7, 'Sách chuyên ngành'),
(8, 'Sách văn hóa - Nghệ thuật - Du lịch'),
(9, 'Sách ngoại ngữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cod_user`
--

CREATE TABLE `cod_user` (
  `id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `p_status` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(6, 8, 60, 1, '5HJ63658DA447905T', 'Completed'),
(7, 8, 60, 1, '8NG0377948458090H', 'Completed');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` int(11) NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(100) NOT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` int(11) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` int(11) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(100) NOT NULL COMMENT 'mã ngân hàng',
  `time` date NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text CHARACTER SET utf8 NOT NULL,
  `product_image` text CHARACTER SET utf8 NOT NULL,
  `product_keywords` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 1, 'Sách \"Cây tre trăm đốt\"', 55000, 90, 'Sách hay, hấp dẫn', 'caytretramdot.jpg', 'caytretramdot, truyenthieunhi'),
(2, 3, 2, 'Sách \"Lý trí và tình cảm\"', 187000, 70, 'Sách văn học', 'lytrivatinhcam.jpg', 'vanhoc, lytrivatinhcam'),
(3, 4, 2, 'Sách \"Đắc nhân tâm\"', 155000, 100, 'Sách kỹ năng sống', 'dacnhantam.jpg', 'dacnhantam, my, sachkynangsong'),
(4, 5, 1, 'Sách \"Vật lý 10\"', 26000, 130, 'Sách cho học sinh trung học phổ thông', 'ly10.jpg', 'vatly10, sgk, sachgiaokhoa'),
(6, 6, 7, 'Sách \"Conan\"', 25000, 160, 'Sách thám tử', 'conan.jpg', 'conan, thamtu, nhatban'),
(7, 7, 1, 'Sách \"Thương mại điện tử\"', 160000, 150, 'Sách chuyên ngành TMDT', 'tmdt.jpg', 'tmdt, sachchuyennganh'),
(8, 8, 1, 'Sách \"Du lịch Việt Nam\"', 350000, 100, 'Sách du lịch', 'dulich.jpg', 'dulichVN, sachdulich, vanhoa'),
(9, 9, 4, 'Sách \"Từ vựng tiếng Đan Mạch\"', 170000, 190, 'Sách ngoại ngữ Đan Mạch', 'tiengdanmach.jpg', 'tiengdanmach, sachngoaingu'),
(10, 2, 4, 'Sách \"Nàng tiên cá\"', 45000, 150, 'Sách thiếu nhi', 'nangtienca.jpg', 'truyenthieunhi, nangtienca'),
(11, 2, 1, 'Sách \"Tấm Cám\"', 65000, 130, 'Sách thiếu nhi', 'tamcam.jpg', 'tamcam, truyenthieunhi'),
(12, 2, 5, 'Sách \"Nàng bạch tuyết và 7 chú lùn\"', 70000, 150, 'Sách thiếu nhi', 'nangbachtuyet.jpg', 'nangbachtuyet, 7chulun, truyenthieunhi'),
(13, 2, 4, 'Sách \"Cô bé bán diêm\"', 35000, 130, 'Sách thiếu nhi', 'cobebandiem.jpg', 'cobebandiem, truyenthieunhi'),
(14, 3, 2, 'Sách \"Romeo và Juliet\"', 160000, 150, 'Sách văn học', 'jomeovajuliet.jpg', 'romeovajuliet, vanhoc'),
(15, 3, 1, 'Sách \"Tôi thấy hoa vàng trên cỏ xanh\"', 200000, 130, 'Sách văn học', 'toithayhoavangtrencoxanh.png', 'toithayhoavangtrencoxanh, vanhoc'),
(16, 3, 6, 'Sách \"Mãi mãi là bao xa\"', 187000, 150, 'Sách tiểu thuyết', 'maimailabaoxa.png', 'maimailabaoxa, tieuthuyet'),
(17, 3, 3, 'Sách \"Thời thơ ngây\"', 160000, 130, 'Sách văn học', 'thoithongay.jpg', 'thoithongay, vanhoc'),
(18, 3, 3, 'Sách \"Đường đua của những giấc mơ\"', 180000, 150, 'Sách văn học', 'duongduacuanhunggiacmo.jpg', 'duongduacuanhunggiacmo, vanhoc'),
(19, 3, 6, 'Sách \"Bên nhau trọn đời\"', 250000, 130, 'Sách tiểu thuyết', 'bennhautrondoi.jpg', 'bennhautrondoi, tieuthuyet'),
(20, 4, 1, 'Sách \"Hạt giống tâm hồn\"', 75000, 100, 'Sách kỹ năng sống', 'hatgiongtamhon.jpg', 'hatgiongtamhon, kynangsong'),
(21, 4, 3, 'Sách \"Dám nghĩ lớn\"', 250000, 130, 'Sách kỹ năng sống', 'damnghilon.jpg', 'damnghilon, kynangsong'),
(22, 4, 3, '\"Đánh thức con người phi thường trong bạn\"', 160000, 100, 'Sách kỹ năng sống', 'sachnuocngoai.jpg', 'danhthucconnguoiphithuongtrongban, kynangsong'),
(23, 4, 6, 'Sách \"Khéo ăn nói sẽ có được thiên hạ\"', 250000, 130, 'Sách kỹ năng sống', 'kheoannoisecoduocthienha.jpg', 'kheoannoisecoduocthienha, kynangsong'),
(24, 5, 1, 'Sách \"Toán lớp 5\"', 23000, 150, 'Sách cho học sinh tiểu học', 'toan5.jpg', 'toan5, sgk'),
(25, 5, 1, 'Sách \"Văn lớp 9\"', 30000, 130, 'Sách cho học sinh trung học phổ thông', 'van9.jpg', 'vanhoc, sgk, van9'),
(26, 5, 1, 'Sách \"Giải tích lớp 12\"', 25000, 150, 'Sách cho học sinh trung học phổ thông', 'toan12.jpg', 'giaitich, toan12, sgk'),
(27, 5, 1, 'Sách \"Hóa học 8\"', 35000, 130, 'Sách cho học sinh trung học', 'hoa8.jpg', 'hoa8, hoahoc, sgk'),
(28, 5, 1, 'Sách \"Lịch sử lớp 6\"', 45000, 100, 'Sách cho học sinh trung học', 'lichsu6.jpg', 'lichsu6, sgk'),
(29, 6, 1, 'Sách \"Tý quậy\"', 100000, 130, 'Truyện tranh hay, hài hước', 'tyquay.jpg', 'tyquay, truyentranh'),
(30, 6, 1, 'Sách \"Trạng Quỳnh\"', 85000, 150, 'Truyện hay, hài hước', 'trangquynh.jpg', 'trangquynh, truyentranh'),
(31, 6, 7, 'Sách \"Doraemon\"', 35000, 130, 'Truyện hay, thú vị', 'doraemon.jpg', 'doraemon, truyentranh'),
(32, 6, 7, 'Sách \"7 viên ngọc rồng\"', 45000, 150, 'Truyện hay', '7vienngocrong.jpg', '7vienngocrong, truyentranh'),
(33, 6, 7, 'Sách \"Shin cậu bé bút chì\"', 55000, 130, 'Truyện hài hước', 'shin.jpg', 'shin, caubebutchi, truyentranh'),
(34, 7, 1, 'Sách \"Tài liệu y khoa\"', 187000, 150, 'Sách y học', 'yhoc.jpg', 'yhoc, sachchuyennganh'),
(35, 7, 1, 'Sách \"PHP for the web\"', 250000, 130, 'Sách web code bằng ngôn ngữ PHP', 'web.jpg', 'web, php'),
(36, 7, 1, 'Sách \"Lập trình Java\"', 450000, 150, 'Sách lập trình bằng ngôn ngữ Java', 'laptrinh.jpg', 'java, laptrinh'),
(37, 7, 1, 'Sách \"Kỹ thuật ô tô và xe máy\"', 250000, 130, 'Sách sửa chữa về ô tô và xe máy', 'oto.jpg', 'oto, xemay, chuyennganh'),
(38, 7, 1, 'Sách \"Kỹ thuật điện-điện tử\"', 160000, 150, 'Sách về sửa chữa điện', 'dientu.jpg', 'dien, dientu'),
(39, 8, 1, 'Sách \"Bàn về văn hóa du lịch\"', 250000, 200, 'Sách về văn hóa, du lịch của Việt Nam', 'vanhoa.jpg', 'vanhoa, dulich, vietnam'),
(40, 8, 1, 'Sách \"Non nước Việt Nam\"', 250000, 150, 'Sách văn hóa của 63 tỉnh thành ở VN', '63tinhthanh.jpg', '63tinhthanh, vanhoa, dulich'),
(41, 9, 7, 'Sách \"Tự học tiếng Nhật cấp tốc\"', 180000, 200, 'Sách ngoại ngữ', 'tiengnhat.jpg', 'tiengnhat, ngoaingu'),
(42, 9, 5, 'Sách \"Tự học tiếng Đức\"', 187000, 150, 'Sách ngoại ngữ', 'tiengduc.jpg', 'tiengnhat, ngoaingu'),
(43, 9, 2, 'Sách \"Hack não 1500 từ\"', 450000, 130, 'Sách từ vựng tiếng Anh', 'hacknao.jpg', 'hacknao, tienganh, ngoaingu'),
(44, 9, 6, 'Sách \"Tự học tiếng Trung\"', 250000, 130, 'Sách ngoại ngữ', 'tiengtrung.jpg', 'tiengtrung, ngoaingu'),
(45, 9, 2, 'Sách \"Tự học tiếng Anh\"', 160000, 200, 'Sách ngoại ngữ', 'tienganh.jpg', 'tienganh, ngoaingu'),
(60, 8, 1, 'Test', 1, 1, 'Hay', '1635777954_anime99999.jpg', 'sach');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(8, 'Pham', 'Linh', 'kool@gmail.com', 'e3db52e1b6bd3ad1fbcf220166247249', '9999999999', 'Ha Noi', 'Viettel'),
(9, 'Nguyen', 'Thuy', 'linh@gmail.com', 'a65076f545bdbeabd7e8ee02599d53dc', '0336935373', 'Ha Noi', 'Viettel');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cod_user`
--
ALTER TABLE `cod_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Chỉ mục cho bảng `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
