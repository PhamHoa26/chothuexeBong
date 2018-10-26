-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 10:54 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xemay`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `days` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE IF NOT EXISTS `cart_details` (
  `id_carts` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `nums` int(11) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `caterogies`
--

CREATE TABLE IF NOT EXISTS `caterogies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `caterogies`
--

INSERT INTO `caterogies` (`id`, `name`, `order`, `hide`) VALUES
(1, 'Khuyến Mãi', 1, 0),
(2, 'Xe Tay Ga', 2, 0),
(3, 'Xe Số', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `subject`, `content`, `status`) VALUES
(3, '1. Pháº£n há»“i vá» thÃ¡i Ä‘á»™ phá»¥c vá»¥', '<p><img alt="" src="http://img.infonet.vn/w660/Uploaded/2018/bnx_mjxuh/2018_08_02/nui_olympus.jpg" style="height:371px; width:660px" /></p>\r\n', 'ÄÃ£ Nháº­n ThÃ´ng Tin'),
(4, '1. Pháº£n há»“i vá» thÃ¡i Ä‘á»™ phá»¥c vá»¥', '<p>phá»¥c vá»¥ k&eacute;m</p>\r\n', 'ÄÃ£ Nháº­n ThÃ´ng Tin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `hide` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `detail`, `id_cate`, `hide`) VALUES
(23, 'HonDa Tay Ga 01', 150000, 'honda-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(24, 'HonDa Tay Ga 02', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(25, 'HonDa Tay Ga 03', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(26, 'HonDa Tay Ga 04', 150000, 'honda-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(27, 'HonDa Tay Ga 05', 150000, 'honda-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(28, 'HonDa Tay Ga 06', 150000, 'honda-xega (6).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(29, 'HonDa Tay Ga 07', 150000, 'honda-xega (7).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(30, 'HonDa Tay Ga 08', 150000, 'honda-xega (8).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(31, 'HonDa Tay Ga 09', 150000, 'honda-xega (9).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(32, 'HonDa Tay Ga 10', 150000, 'honda-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(33, 'HonDa Tay Ga 11', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(34, 'HonDa Tay Ga 12', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(35, 'HonDa Tay Ga 13', 150000, 'honda-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(36, 'HonDa Tay Ga 14', 150000, 'honda-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(37, 'HonDa Tay Ga 15', 150000, 'honda-xega (6).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(38, 'HonDa Tay Ga 16', 150000, 'honda-xega (7).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(39, 'HonDa Tay Ga 17', 150000, 'honda-xega (8).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(40, 'HonDa Tay Ga 18', 150000, 'honda-xega (9).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(41, 'HonDa Tay Ga 19', 150000, 'honda-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(42, 'HonDa Tay Ga 20', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(43, 'HonDa Tay Ga 21', 150000, 'honda-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(44, 'HonDa Tay Ga 22', 150000, 'honda-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(45, 'HonDa Tay Ga 23', 150000, 'honda-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(46, 'HonDa Tay Ga 24', 150000, 'honda-xega (6).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(47, 'HonDa Tay Ga 25', 150000, 'honda-xega (7).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(81, 'Suzuki Xe Ga 01', 150000, 'suzuki-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(82, 'Suzuki Xe Ga 02', 150000, 'suzuki-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(83, 'Suzuki Xe Ga 03', 150000, 'suzuki-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(84, 'Suzuki Xe Ga 04', 150000, 'suzuki-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(85, 'Suzuki Xe Ga 04', 150000, 'suzuki-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(86, 'Suzuki Xe Ga 06', 150000, 'suzuki-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(87, 'Suzuki Xe Ga 07', 150000, 'suzuki-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(88, 'Suzuki Xe Ga 08', 150000, 'suzuki-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(89, 'Suzuki Xe Ga 09', 150000, 'suzuki-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(90, 'Suzuki Xe Ga 10', 150000, 'suzuki-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(91, 'Suzuki Xe Ga 11', 150000, 'suzuki-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(92, 'Suzuki Xe Ga 12', 150000, 'suzuki-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(93, 'Suzuki Xe Ga 13', 150000, 'suzuki-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(94, 'Suzuki Xe Ga 14', 150000, 'suzuki-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(95, 'Suzuki Xe Ga 15', 150000, 'suzuki-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(96, ' Yamaha Xe Ga 01', 150000, 'yamaha-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(97, ' Yamaha Xe Ga 02', 150000, 'yamaha-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(98, ' Yamaha Xe Ga 03', 150000, 'yamaha-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(99, ' Yamaha Xe Ga 04', 150000, 'yamaha-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(100, ' Yamaha Xe Ga 04', 150000, 'yamaha-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(101, ' Yamaha Xe Ga 06', 150000, 'yamaha-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(102, ' Yamaha Xe Ga 07', 150000, 'yamaha-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(103, ' Yamaha Xe Ga 08', 150000, 'yamaha-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(104, ' Yamaha Xe Ga 09', 150000, 'yamaha-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(105, ' Yamaha Xe Ga 10', 150000, 'yamaha-xega (1).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(106, ' Yamaha Xe Ga 11', 150000, 'yamaha-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(107, ' Yamaha Xe Ga 12', 150000, 'yamaha-xega (4).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(108, ' Yamaha Xe Ga 13', 150000, 'yamaha-xega (5).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(109, ' Yamaha Xe Ga 14', 150000, 'yamaha-xega (2).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(110, ' Yamaha Xe Ga 15', 150000, 'yamaha-xega (3).jpg', 'Xe tay ga đã trở nên khá phổ biến trên đường phố hiện nay tại Việt Nam. Không khó để có thể bắt gặp một chiếc xe tay ga đang lưu thông trên đường phố, thậm chí tỉ lệ sử dụng xe tay ga tại các thành phố lớn đã vượt qua xe số. Với kiểu dáng sang trong, dễ lái, xe tay ga đã thu hút được rất nhiều sự quan tâm từ khách hàng, nhưng đi kèm với đó là một số nhược điểm khiến khách hàng khó chịu.', 2, 0),
(111, ' HonDa Xe Số 01', 150000, 'honda-xeso (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(112, ' HonDa Xe Số 02', 150000, 'honda-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(113, ' HonDa Xe Số 03', 150000, 'honda-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(114, ' HonDa Xe Số 04', 150000, 'honda-xeso (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(115, ' HonDa Xe Số 04', 150000, 'honda-xeso (5).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(116, ' HonDa Xe Số 06', 150000, 'honda-xeso (6).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(117, ' HonDa Xe Số 07', 150000, 'honda-xeso (7).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(118, ' HonDa Xe Số 08', 150000, 'honda-xeso (8).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(119, ' HonDa Xe Số 09', 150000, 'honda-xeso (9).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(120, ' HonDa Xe Số 10', 150000, 'honda-xeso (10).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(121, ' HonDa Xe Số 11', 150000, 'honda-xeso (11).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(122, ' HonDa Xe Số 12', 150000, 'honda-xeso (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(123, ' HonDa Xe Số 13', 150000, 'honda-xeso (5).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(124, ' HonDa Xe Số 14', 150000, 'honda-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(125, ' HonDa Xe Số 15', 150000, 'honda-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(126, ' Suzuki Xe Số 01', 150000, 'suzuki-xeso (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(127, ' Suzuki Xe Số 02', 150000, 'suzuki-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(128, ' Suzuki Xe Số 03', 150000, 'suzuki-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(129, ' Suzuki Xe Số 04', 150000, 'suzuki-xeso (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(130, ' Suzuki Xe Số 04', 150000, 'suzuki-xeso (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(131, ' Suzuki Xe Số 06', 150000, 'suzuki-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(132, ' Suzuki Xe Số 07', 150000, 'suzuki-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(133, ' Suzuki Xe Số 08', 150000, 'suzuki-xeso (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(134, ' Suzuki Xe Số 09', 150000, 'suzuki-xeso (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(135, ' Suzuki Xe Số 10', 150000, 'suzuki-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(136, ' Suzuki Xe Số 11', 150000, 'suzuki-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(137, ' Suzuki Xe Số 12', 150000, 'suzuki-xeso (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(138, ' Suzuki Xe Số 13', 150000, 'suzuki-xeso (5).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(139, ' Suzuki Xe Số 14', 150000, 'suzuki-xeso (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(140, ' Suzuki Xe Số 15', 150000, 'suzuki-xeso (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 3, 0),
(141, ' Xe Khuyến Mãi 01', 150000, 'khuyenmai (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(142, ' Xe Khuyến Mãi 02', 150000, 'khuyenmai (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(143, ' Xe Khuyến Mãi 03', 150000, 'khuyenmai (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(144, ' Xe Khuyến Mãi 04', 150000, 'khuyenmai (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(145, ' Xe Khuyến Mãi 04', 150000, 'khuyenmai (5).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(146, ' Xe Khuyến Mãi 06', 150000, 'khuyenmai (6).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(147, ' Xe Khuyến Mãi 07', 150000, 'khuyenmai (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(148, ' Xe Khuyến Mãi 08', 150000, 'khuyenmai (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(149, ' Xe Khuyến Mãi 09', 150000, 'khuyenmai (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(150, ' Xe Khuyến Mãi 10', 150000, 'khuyenmai (4).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(151, ' Xe Khuyến Mãi 11', 150000, 'khuyenmai (5).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(152, ' Xe Khuyến Mãi 12', 150000, 'khuyenmai (6).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(153, ' Xe Khuyến Mãi 13', 150000, 'khuyenmai (1).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(154, ' Xe Khuyến Mãi 14', 150000, 'khuyenmai (2).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0),
(155, ' Xe Khuyến Mãi 15', 150000, 'khuyenmai (3).jpg', 'Xe gắn máy là chỉ phương tiện chạy bằng động cơ, có hai bánh hoặc ba bánh và vận tốc thiết kế lớn nhất không lớn hơn 50 km/h. ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `cmnd` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `gplx` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `role`, `cmnd`, `gplx`) VALUES
(7, 'h', 'e10adc3949ba59abbe56e057f20f883e', 'a@gmail.com', '01654036388', 0, '142222511111', '14379899799');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caterogies`
--
ALTER TABLE `caterogies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `caterogies`
--
ALTER TABLE `caterogies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
