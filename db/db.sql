-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2012 at 06:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `usertype`, `email`, `name`) VALUES
(4, 'admin', 'admin', 'administrator', 'vuhaik3@gmail.com', 'Vũ Đức Hải');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_article` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `content` text,
  `cat_id` int(4) DEFAULT NULL,
  `image` text,
  `intro` text,
  `author` char(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `public` int(1) DEFAULT NULL,
  `order` int(4) DEFAULT '1',
  `price` int(11) NOT NULL DEFAULT '0',
  `sale` int(4) NOT NULL DEFAULT '0',
  `made` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name_article`, `description`, `keyword`, `url`, `content`, `cat_id`, `image`, `intro`, `author`, `date`, `public`, `order`, `price`, `sale`, `made`) VALUES
(67, 'Kia morning', 'Kia morning', 'Kia morning', 'kia-morning', '<p>Kia morning slx</p>', 38, '090504Star716.jpg', NULL, 'Vũ Đức Hải', '2012-09-23', 1, 0, 0, 0, NULL),
(68, 'Toyota vios', 'Toyota vios', 'Toyota vios', 'toyota-vios', '<p>Vios</p>', 40, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(69, 'Trường Hải group', 'Trường Hải group', 'Trường Hải group', 'truong-hai-group', '<p>&nbsp;</p>\r\n<h2>Option Kia Morning SLX 2009</h2>\r\n<p>- Hệ thống phanh ABS <br />\r\n- Tay l&aacute;i điều chỉnh cao thấp, trợ lực l&aacute;i EPS<br />\r\n- T&uacute;i kh&iacute; ghế l&aacute;i ,ghế phụ<br />\r\n- Cảm biến l&ugrave;i, Camera l&ugrave;i t&iacute;ch hợp tr&ecirc;n gương<br />\r\n- Điều h&ograve;a tự động<br />\r\n- Hộp số tự động 4 cấp,chế độ số thể thao<br />\r\n- Antenna gắn ngo&agrave;i kiểu thể thao.<br />\r\n- Gương, k&iacute;nh điều khiển điện, Gương chiếu hậu trong chống ch&oacute;i ECM<br />\r\n- Hệ thống kiểm so&aacute;t nhi&ecirc;n liệu ECO<br />\r\n- Ch&igrave;a kh&oacute;a điều khiển từ xa, Kh&oacute;a cửa trung t&acirc;m<br />\r\n- Đ&egrave;n gầm<br />\r\n- Ghế l&aacute;i c&oacute; bơm ghế (điều chỉnh cao thấp) c&oacute; bệ đặt tay<br />\r\n- Tựa đầu ghế sau, Ghế sau gập 4/6<br />\r\n- &Acirc;m thanh CD, MP3, Audio, AUX, USB<br />\r\n- Larang đ&uacute;c 15 inch kiểu b&ocirc;ng mai<br />\r\n- Đu&ocirc;i c&aacute;, đ&egrave;n phanh thứ 3 tr&ecirc;n cao, Xi nhan tr&ecirc;n gương<br />\r\n- Sấy ghế l&aacute;i v&agrave; phụ l&aacute;i<br />\r\n- Ốp Bokis sườn<br />\r\n- Gạt nước mưa k&iacute;nh sau<br />\r\n- Tay mở cửa mạ Crom</p>', 43, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-25', 1, 0, 10000, 20, 'HN'),
(70, 'Lexus', 'Lexus', 'Lexus', 'lexus', '', 39, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(71, 'Limousine', 'Limousine', 'Limousine', 'limousine', '', 41, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(72, 'Xe tải TH', 'Xe tải TH', 'Xe tải TH', 'xe-tai-th', '', 43, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(73, 'Xe ben', 'Xe ben', 'Xe ben', 'xe-ben', '', 42, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(74, 'Xe không kính', 'Xe không kính', 'Xe không kính', 'xe-khong-kinh', '', 43, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(75, 'Xe có kính', 'Xe có kính', 'Xe có kính', 'xe-co-kinh', '', 42, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(76, 'Xe mới', 'Xe mới', 'Xe mới', 'xe-moi', '', 39, 'Untitled-1.png', NULL, 'Vũ Đức Hải', '2012-09-24', 1, 0, 0, 0, NULL),
(77, 'Xe demo', '1', '1', '1', '<p>fasdf</p>', 43, '512.JPG', NULL, 'Vũ Đức Hải', '2012-11-14', 1, 1, 1000, 101, 'HN'),
(78, 'xe 2', 'xe 2', 'xe 2', 'xe-2', '<p>xe 2</p>', 42, '125.gif', NULL, 'Vũ Đức Hải', '2012-11-14', 1, 22, 3000, 0, 'Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `image` text,
  `content` text,
  `link` char(100) DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `content`, `link`, `name`) VALUES
(18, 'thumbl_980x340_005.png', '', '', 'Banner 5'),
(17, 'thumbl_980x340_004.png', '', '', 'Banner 4'),
(16, 'thumbl_980x340_003.png', '', '', 'Banner 3'),
(15, 'thumbl_980x340_002.png', '', '', 'banner2'),
(14, 'thumbl_980x340.png', '', '', 'banner1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_category` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `cat_parent` int(4) DEFAULT NULL,
  `intro` text,
  `order` int(4) DEFAULT NULL,
  `public` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_category`, `description`, `keyword`, `url`, `cat_parent`, `intro`, `order`, `public`) VALUES
(38, 'Kia morning', 'Kia morning', 'Kia morning', 'kia-morning', 35, '', 3, 1),
(39, 'Lexus', 'Lexus', 'Lexus', 'lexus', 35, '', 2, 1),
(40, 'Toyota', 'Toyota', 'Toyota', 'toyota', 35, '', 1, 1),
(41, 'Huyndai', 'Huyndai', 'Huyndai', 'huyndai', 35, '', 4, 1),
(42, 'Deawoo', 'Deawoo', 'Deawoo', 'deawoo', 35, '', 5, 1),
(43, 'Trường Hải', 'Trường Hải', 'Trường Hải', 'truong-hai', 35, '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` char(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `phone` text,
  `content` text,
  `new` int(2) DEFAULT '1',
  `email` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `date`, `phone`, `content`, `new`, `email`) VALUES
(1, 'Vũ Đức Hải', '2012-09-19', '0918577122', 'If you prefer not to set preferences using the above method, you can instead put them into a config file. Simply create a new file called the upload.php, add the $config array in that file. Then save the file in: config/upload.php and it will be used automatically. You will NOT need to use the $this->upload->initialize function if you save your preferences in a config file.', 1, 'vuhak3@gmail.com'),
(4, 'Lê thị Hồng', '2012-11-24', '0918577122', 'test', 1, 'lehong3008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `metadescription` text,
  `metakeyword` text,
  `title` text,
  `email` text,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`metadescription`, `metakeyword`, `title`, `email`, `id`) VALUES
('metadescription', 'meta keyword', 'Shop online demo Webstars.com', 'vuhaik3@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_modules` char(100) DEFAULT NULL,
  `position` char(20) DEFAULT NULL,
  `order` int(4) DEFAULT '0',
  `public` int(2) DEFAULT '1',
  `pages_id` int(4) DEFAULT NULL,
  `session_id` int(4) DEFAULT NULL,
  `category_id` int(4) DEFAULT NULL,
  `article_id` int(4) DEFAULT NULL,
  `news_id` int(4) DEFAULT NULL,
  `intro` text,
  `type` char(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_news` char(100) DEFAULT NULL,
  `page_id` int(4) DEFAULT NULL,
  `content` text,
  `description` char(100) DEFAULT NULL,
  `keyword` char(100) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `author` char(100) DEFAULT NULL,
  `image` text,
  `order` int(4) DEFAULT NULL,
  `public` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name_news`, `page_id`, `content`, `description`, `keyword`, `url`, `date`, `author`, `image`, `order`, `public`) VALUES
(5, 'Yamaha', 0, '', '', '', 'yamaha', '0000-00-00', 'Vũ Hải', 'Lighthouse.jpg', 0, 1),
(6, 'Vũ Hải fadf', 10, '<h2 class="Lead">Một phần thực binh của Sư đo&agrave;n Ph&ograve;ng kh&ocirc;ng 367 tham gia  buổi diễn tập nhằm đ&aacute;nh gi&aacute; khả năng sẵn s&agrave;ng chiến đấu, tr&igrave;nh độ chỉ  huy hiệp đồng trong đ&aacute;nh địch tiến c&ocirc;ng hỏa lực đường kh&ocirc;ng.<br />\r\n&gt; <a href="http://vnexpress.net/gl/xa-hoi/2012/08/hai-quan-luyen-tap-chien-dau-doi-khong/" class="Lead">Hải qu&acirc;n luyện tập chiến đấu đối kh&ocirc;ng</a> / <a href="http://vnexpress.net/gl/xa-hoi/2012/07/nhung-man-tap-ban-ten-lua-phong-khong/" class="Lead">Những m&agrave;n tập bắn t&ecirc;n lửa ph&ograve;ng kh&ocirc;ng</a></h2>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="495" height="330" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-1.jpg" alt="Ng&agrave;y 2-3/8, Sư đo&agrave;n Ph&ograve;ng kh&ocirc;ng 367 (Qu&acirc;n chủng Ph&ograve;ng kh&ocirc;ng - Kh&ocirc;ng qu&acirc;n) tổ chức diễn tập chỉ huy một b&ecirc;n một cấp c&oacute; một phần thực binh với sự tham gia của c&aacute;c cơ quan Sư đo&agrave;n." /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">Ng&agrave;y 2-3/8, Sư đo&agrave;n Ph&ograve;ng kh&ocirc;ng 367 (Qu&acirc;n chủng Ph&ograve;ng  kh&ocirc;ng - Kh&ocirc;ng qu&acirc;n) tổ chức diễn tập chỉ huy một b&ecirc;n một cấp c&oacute; một phần  thực binh với sự tham gia của c&aacute;c cơ quan Sư đo&agrave;n. Sở chỉ huy được dựng  nhanh ch&oacute;ng dưới những t&aacute;n c&acirc;y.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="380" height="524" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-2.jpg" alt="C&aacute;c chiến sĩ triển khai đ&agrave;o c&ocirc;ng sự" /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">Cuộc diễn tập nhằm đ&aacute;nh gi&aacute; khả năng sẵn s&agrave;ng chiến  đấu, tr&igrave;nh độ chỉ huy hiệp đồng của c&aacute;c cơ quan trong đ&aacute;nh địch tiến  c&ocirc;ng hỏa lực đường kh&ocirc;ng. Trong ảnh, c&aacute;c chiến sĩ triển khai đ&agrave;o c&ocirc;ng  sự.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="495" height="336" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-3.jpg" alt="B&aacute;o động chuyển cấp sẵn s&agrave;ng chiến đấu" /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">B&aacute;o động chuyển cấp sẵn s&agrave;ng chiến đấu.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="495" height="330" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-4.jpg" alt="C&aacute;c cơ quan b&aacute;o c&aacute;o Sư đo&agrave;n trưởng kế hoạch chiến đấu" /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">C&aacute;c cơ quan b&aacute;o c&aacute;o Sư đo&agrave;n trưởng kế hoạch chiến đấu.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="495" height="324" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-5.jpg" alt="Chỉ huy Sư đo&agrave;n c&ugrave;ng cơ quan tham mưu x&aacute;c định, x&acirc;y dựng &yacute; định chiến đấu" /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">Chỉ huy Sư đo&agrave;n c&ugrave;ng cơ quan tham mưu x&aacute;c định, x&acirc;y dựng &yacute; định chiến đấu.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width="1" cellspacing="0" cellpadding="3" border="0" align="center">\r\n    <tbody>\r\n        <tr>\r\n            <td>\r\n            <p align="center"><img width="495" height="330" align="middle" src="http://vnexpress.net/Files/Subject/3b/bd/a6/78/Dien-tap-tac-chien-6.jpg" alt="Nh&acirc;n vi&ecirc;n ti&ecirc;u đồ đ&aacute;nh dấu c&aacute;c mục ti&ecirc;u tr&ecirc;n kh&ocirc;ng." /></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td class="Image">Nh&acirc;n vi&ecirc;n ti&ecirc;u đồ đ&aacute;nh dấu c&aacute;c mục ti&ecirc;u tr&ecirc;n kh&ocirc;ng. Do  chuẩn bị chu đ&aacute;o v&agrave; hiệp đồng t&aacute;c chiến chặt chẽ n&ecirc;n cuộc diễn tập đ&atilde;  th&agrave;nh c&ocirc;ng tốt đẹp, đạt được mục ti&ecirc;u đề ra. Cuộc diễn tập g&oacute;p phần n&acirc;ng  cao năng lực, tr&igrave;nh độ chỉ huy hiệp đồng của đội ngũ c&aacute;n bộ cơ quan Sư  đo&agrave;n v&agrave; l&agrave; cơ sở chuẩn bị cho những cuộc diễn tập tiếp theo.</td>\r\n        </tr>\r\n    </tbody>\r\n</table>', 'a', 'b', 'vu-hai-fadf', '0000-00-00', 'Vũ Hải', NULL, 33, 1),
(7, 'Vé máy bay đi Châu', 4, '<p>p</p>', 'a', 'b', 've-may-bay-di-chau-a-a', '0000-00-00', 'Vũ Hải', 'Chrysanthemum.jpg', 0, 1),
(8, 'Hà Nội - Sài Gòn', 8, '', '', '', 'ha-noi---sai-gon', '0000-00-00', 'Vũ Hải', '', 2, 1),
(9, 'Hà Nội - Nha Trang', 10, '', '', '', 'ha-noi-nha-trang', '0000-00-00', 'Vũ Đức Hải', '', 0, 1),
(10, 'Hà Nội - Điện Biên', 8, '', 'Hà Nội - Điện Biên', 'Hà Nội - Điện Biên', 'ha-noi---dien-bien', '0000-00-00', 'Vũ Đức Hải', '', 0, 1),
(11, 'Hà Nội - Đà Nẵng', 4, '<p>Mid montes nunc et nunc cum arcu porta penatibus. Enim! Nisi, turpis  mauris? Tristique quis! A phasellus. Eu amet facilisis? Rhoncus aliquam  sed ac pulvinar. Nunc sit cras nec, porttitor vel magna rhoncus.</p>\r\n<p>Mid montes nunc et nunc cum arcu porta penatibus. Enim! Nisi, turpis   mauris? Tristique quis! A phasellus. Eu amet facilisis? Rhoncus aliquam   sed ac pulvinar. Nunc sit cras nec, porttitor vel magna rhoncus.</p>\r\n<p>Mid montes nunc et nunc cum arcu porta penatibus. Enim! Nisi, turpis   mauris? Tristique quis! A phasellus. Eu amet facilisis? Rhoncus aliquam   sed ac pulvinar. Nunc sit cras nec, porttitor vel magna rhoncus.</p>\r\n<p>Mid montes nunc et nunc cum arcu porta penatibus. Enim! Nisi, turpis   mauris? Tristique quis! A phasellus. Eu amet facilisis? Rhoncus aliquam   sed ac pulvinar. Nunc sit cras nec, porttitor vel magna rhoncus.</p>', 'Hà Nội - Đà Nẵng', 'Hà Nội - Đà Nẵng', 'ha-noi---da-nang', '0000-00-00', 'Vũ Đức Hải', '', 0, 1),
(12, 'Mua vé máy bay như thế nào', 10, '', '', '', 'mua-ve-may-bay-nhu-the-nao', '0000-00-00', 'Vũ Hải', '', NULL, 1),
(13, 'Khi lên máy bay?', 10, '', '', '', 'khi-len-may-bay?', '0000-00-00', 'Vũ Hải', '', NULL, 1),
(14, 'Gửi đồ', 10, '', '', '', 'gui-do', '0000-00-00', 'Vũ Hải', '', NULL, 1),
(15, 'Xuống máy bay', 19, '<p>&nbsp;</p>\r\n<div align="justify" style="text-align: left;">Vụ  tai nạn tr&ecirc;n xảy ra v&agrave;o khoảng 14 giờ 30 ph&uacute;t ng&agrave;y 2/8, tại km322 quốc  lộ 1A đoạn qua địa b&agrave;n x&atilde; Nam Hưng (huyện Nam Đ&agrave;n, Nghệ An). V&agrave;o thời  gian tr&ecirc;n, chiếc xe cảnh s&aacute;t mang biển số 37A - 1174 của đơn vị Trại 3 -  Nghệ An (trực thuộc Bộ C&ocirc;ng an), l&agrave; xe d&ugrave;ng để chở phạm nh&acirc;n, gặp đoạn  đường cua gấp kh&uacute;c cộng với trời mưa to, mất tầm nh&igrave;n n&ecirc;n t&agrave;i xế mất l&aacute;i  đ&acirc;m thẳng xuống đập Ba Khe.&nbsp;</div>\r\n<div align="justify" style="text-align: left;">&nbsp;</div>\r\n<div align="justify" style="text-align: center;">\r\n<div align="center"><img width="450" align="middle" alt="Chiếc xe cảnh s&aacute;t đằm m&igrave;nh dưới đập Ba Khe." style="margin: 5px; " _fl="" src="http://dantri4.vcmedia.vn/i:7dBrKnsutwiOg2hPbvFQ/Image/2012/08/xe-5-a92d5/chiec-xe-canh-sat-dam-minh-duoi-dap-ba-khe.JPG" /></div>\r\n<div align="center"><span style="font-family: Tahoma; font-size: 10pt; ">Chiếc xe cảnh s&aacute;t &quot;đằm m&igrave;nh&quot; dưới đập Ba Khe.</span></div>\r\n</div>\r\n<div align="justify" style="text-align: left;">&nbsp;</div>\r\n<div align="justify" style="text-align: left;">Khi xảy ra tai nạn c&oacute; 3 người tr&ecirc;n xe nhưng may mắn kh&ocirc;ng ai bị thương. Chiếc xe bị hư hỏng nặng.</div>\r\n<p align="justify">Được biết đ&acirc;y l&agrave; đoạn đường c&oacute; nhiều kh&uacute;c cua gấp kh&uacute;c, đ&atilde; c&oacute; nhiều vụ tai nạn tương tự xảy ra.</p>\r\n<div align="center"><img width="450" align="middle" alt="Ngay sau đ&oacute; được vớt l&ecirc;n" style="margin: 5px; " _fl="" src="http://dantri4.vcmedia.vn/i:7dBrKnsutwiOg2hPbvFQ/Image/2012/08/xe-3-a92d5/ngay-sau-do-duoc-vot-len.JPG" /></div>\r\n<div align="center"><span style="font-size: 10pt; font-family: Tahoma; ">Ngay sau đ&oacute; được vớt l&ecirc;n</span></div>\r\n<div align="center"><span style="text-align: left; "><br />\r\n</span></div>\r\n<div align="center"><span style="text-align: left; ">Trong  một diễn biến kh&aacute;c, v&agrave;o khoảng 3 giờ s&aacute;ng ng&agrave;y 3/8, tại km 402, quốc lộ  1A thuộc địa b&agrave;n x&oacute;m 12 x&atilde; Quỳnh Hậu, huyện Quỳnh Lưu, Nghệ An cũng xảy  ra một vụ tai nạn hy hữu. V&agrave;o giờ tr&ecirc;n, chiếc xe tải chở gạch&nbsp;t&aacute;p l&ocirc;  mang biển số 37S-4071 chạy hướng Ho&agrave;ng Mai&nbsp;- Cầu Gi&aacute;t, khi đến đoạn  đường tr&ecirc;n t&agrave;i xế mất ngủ đ&atilde; lạc tay l&aacute;i v&agrave; lao xuống ruộng l&uacute;a. T&agrave;i xế  bị thương nhẹ, số gạch&nbsp;t&aacute;p l&ocirc; tr&ecirc;n th&ugrave;ng văng ra ruộng vỡ n&aacute;t, l&agrave;m  khoảng 8m2 l&uacute;a đang thời kỳ trổ đ&ograve;ng hư hỏng nặng.</span></div>\r\n<div align="center">&nbsp;</div>\r\n<div align="center"><img width="450" align="middle" alt="Chiếc xe chở gach t&aacute;p l&ocirc; lao xuống ruộng l&uacute;a." _fl="" src="http://dantri4.vcmedia.vn/i:7dBrKnsutwiOg2hPbvFQ/Image/2012/08/xe-2-a92d5/chiec-xe-cho-gach-tap-lo-lao-xuong-ruong-lua.JPG" style="MARGIN: 5px" /></div>\r\n<div align="center"><span style="FONT-FAMILY: Tahoma; FONT-SIZE: 10pt">Chiếc xe chở gach t&aacute;p l&ocirc; lao xuống ruộng l&uacute;a.</span></div>\r\n<div align="center">&nbsp;</div>\r\n<div align="center"><img width="450" align="middle" alt="Vụ tai nạn xảy ra giữa đ&ecirc;m tối do t&agrave;i xế buồn ngủ v&agrave; số gạch t&aacute;p l&ocirc; bị hư hỏng nặng." _fl="" src="http://dantri4.vcmedia.vn/i:7dBrKnsutwiOg2hPbvFQ/Image/2012/08/xe-1-a92d5/vu-tai-nan-xay-ra-giua-dem-toi-do-tai-xe-buon-ngu-va-so-gach-tap-lo-bi-hu-hong-nang.JPG" style="MARGIN: 5px" /></div>', 'Xuống máy bay', 'Xuống máy bay', 'xuong-may-bay', '0000-00-00', 'Vũ Đức Hải', '', 0, 1),
(16, 'vũ hải', 9, '', '', '', 'vu-hai', '0000-00-00', 'Vũ Hải', '', NULL, 1),
(17, 'vũ hải', 10, '', '', '', 'vu-hai', '0000-00-00', 'Vũ Hải', '20213134055-LoveHeart.jpg', NULL, 1),
(18, 'g', 0, '', '', '', 'g', '0000-00-00', 'Vũ Hải', '', NULL, 1),
(19, 'a', 0, '', '', '', 'a', '0000-00-00', 'Vũ Hải', '', 8, 1),
(20, 'fadf', 0, '', '', '', 'fadf', '0000-00-00', 'Vũ Hải', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `onlinesupport`
--

CREATE TABLE IF NOT EXISTS `onlinesupport` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` char(10) DEFAULT NULL,
  `order` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `onlinesupport`
--

INSERT INTO `onlinesupport` (`id`, `nickname`, `name`, `type`, `order`) VALUES
(5, 'vuhaik3', 'Vũ Hải', 'skype', NULL),
(4, 'hong.love_308', 'Vũ Hải', 'yahoo', NULL),
(6, '0918 577 122', 'Vũ Hải', 'hotline', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_pages` char(100) DEFAULT NULL,
  `type` char(100) DEFAULT NULL,
  `content` text,
  `description` varchar(100) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `order` int(4) DEFAULT NULL,
  `url` char(100) DEFAULT NULL,
  `position` char(100) DEFAULT NULL,
  `public` int(2) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name_pages`, `type`, `content`, `description`, `keyword`, `order`, `url`, `position`, `public`) VALUES
(2, 'Liên Hệ', 'contact', '\r\n<h2><span style="color: rgb(128, 0, 0);"><strong>Ngọc Anh Auto</strong></span></h2>\r\n<p>Chuy&ecirc;n nhập khẩu oto từ H&agrave;n Quốc</p>\r\n<p>Địa chỉ: số 8, đăng ninh, H&agrave; Nội, VN</p>\r\n<p>Email: vuhaik3@gmail.</p>\r\n<p>SDT: 0918 577 122 - 0918 577 055</p>\r\n', 'Liên Hệ', 'Liên Hệ', 11, 'lien-he', 'main-menu', 1),
(3, 'Giới thiệu', 'intro', '<h2 style="text-align: center;"><span style="color: rgb(255, 0, 0);">C&ocirc;ng ty XNK Oto H&agrave;n Quốc Ngọc Anh Auto</span></h2>\r\n<p style="text-align: justify;">Mid montes nunc et nunc cum arcu porta penatibus.  Enim! Nisi, turpis mauris? Tristique quis! A phasellus.  Eu amet facilisis? Rhoncus aliquam sed ac pulvinar.  Nunc sit cras nec, porttitor vel magna rhoncus.  Habitasse turpis adipiscing? In amet augue cum ut.  bitasse turpis adipiscing? In amet augue cum ut.  Velit ridiculus? In in elit dictumst mid odio.Mid montes nunc et nunc cum arcu porta penatibus.  Enim! Nisi, turpis mauris? Tristique quis! A phasellus.  Eu amet facilisis? Rhoncus aliquam sed ac pulvinar.  Nunc sit cras nec, porttitor vel magna rhoncus.  Habitasse turpis adipiscing? In amet augue cum ut.  bitasse turpis adipiscing? In amet augue cum ut.  Velit ridiculus? In in elit dictumst mid odio.Mid montes nunc et nunc cum arcu porta penatibus.  Enim! Nisi, turpis mauris? Tristique quis! A phasellus.  Eu amet facilisis? Rhoncus aliquam sed ac pulvinar.  Nunc sit cras nec, porttitor vel magna rhoncus.  Habitasse turpis adipiscing? In amet augue cum ut.  bitasse turpis adipiscing? In amet augue cum ut.  Velit ridiculus? In in elit dictumst mid odio.</p>', 'Giới thiệu', 'Giới thiệu', 5, 'gioi-thieu', 'main-menu', 1),
(4, 'Tin Tức', 'news', '', '', '', 9, 'tin-tuc', 'main-menu', 1),
(7, 'Footer', 'intro', '<h2><span style="color: rgb(128, 0, 0);"><strong>Ngọc Anh Auto</strong></span></h2>\r\n<p>Chuy&ecirc;n nhập khẩu oto từ H&agrave;n Quốc</p>\r\n<p>Địa chỉ: số 8, đăng ninh, H&agrave; Nội, VN</p>\r\n<p>Email: vuhaik3@gmail.</p>\r\n<p>SDT: 0918 577 122 - 0918 577 055</p>', 'Footer', 'Footer', 21, 'footer', 'footer', 1),
(8, 'Các chuyến bay phổ biến', 'news', '<p><img width="170" height="112" alt="" src="/userfiles/img1.png" /></p>', '', '', 12, 'cac-chuyen-bay-pho-bien', 'user2', 1),
(19, 'Tin oto', 'news', '', 'Tin oto', 'Tin oto', 10, 'tin-oto', 'main-menu', 1),
(10, 'Câu hỏi thường gặp', 'news', '', '', '', 1, 'cau-hoi-thuong-gap', 'question', 1),
(18, 'Dành cho quảng cáo', 'intro', '<p style="text-align: justify;">cum ut.  bitasse turpis adipiscing? In amet augue cum ut.  Velit</p>\r\n<p style="text-align: justify;"><img width="200" height="150" src="/userfiles/Koala(1).jpg" alt="" /></p>', 'Dành cho quảng cáo', 'Dành cho quảng cáo', 0, 'danh-cho-quan-cao', 'left', 1),
(20, 'Liên kết tài trợ', 'intro', '<p><a href="http://lienket.url">Li&ecirc;n kết</a></p>', 'Liên kết tài trợ', 'Liên kết tài trợ', 0, 'lien-ket-tai-tro', 'left', 1);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name_session` char(100) DEFAULT NULL,
  `description` text,
  `keyword` text,
  `url` char(100) DEFAULT NULL,
  `public` int(2) DEFAULT NULL,
  `order` int(4) DEFAULT '0',
  `intro` text,
  `position` char(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `name_session`, `description`, `keyword`, `url`, `public`, `order`, `intro`, `position`) VALUES
(35, 'Sản phẩm oto', 'Sản phẩm oto', 'Sản phẩm oto', 'san-pham-oto', 1, 0, '', 'right');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
