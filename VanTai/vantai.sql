-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 05:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vantai`
--

-- --------------------------------------------------------

--
-- Table structure for table `bocuc`
--

CREATE TABLE `bocuc` (
  `id` int(11) NOT NULL,
  `header_1` varchar(255) NOT NULL,
  `header_2` varchar(255) NOT NULL,
  `header_3` varchar(255) NOT NULL,
  `slide_1` varchar(255) NOT NULL,
  `slide_2` varchar(255) NOT NULL,
  `slide_3` varchar(255) NOT NULL,
  `main2_1` varchar(255) NOT NULL,
  `main2_2` varchar(255) NOT NULL,
  `main3_1` varchar(1000) NOT NULL,
  `main3_2` varchar(1000) NOT NULL,
  `main3_3` varchar(1000) NOT NULL,
  `main3h_1` varchar(255) NOT NULL,
  `main3h_2` varchar(255) NOT NULL,
  `main3h_3` varchar(255) NOT NULL,
  `footer_1` varchar(1000) NOT NULL,
  `footer_2` varchar(255) NOT NULL,
  `footer_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bocuc`
--

INSERT INTO `bocuc` (`id`, `header_1`, `header_2`, `header_3`, `slide_1`, `slide_2`, `slide_3`, `main2_1`, `main2_2`, `main3_1`, `main3_2`, `main3_3`, `main3h_1`, `main3h_2`, `main3h_3`, `footer_1`, `footer_2`, `footer_3`) VALUES
(1, '000 Thành phố Hồ Chí Minh 12345', 'https://www.facebook.com/Ti.284', 'google.com12345', 'udJ3-1.jpg', 'lDmi-2.jpg', 'eiOl-3.jpg', 'CAM KẾT CHẤT LƯỢNG PHỤC VỤ UY TÍN NHẤT', 'ƯU ĐÃI ĐẶC BIỆT DỊP NĂM MỚI', '\"Và với dịch vụ vận tải hàng hóa Bắc Nam chuyên nghiệp chúng tôi đầu tư, chúng tôi xây dựng bằng cả cái tâm, bằng cả tấm lòng. Với mong muốn nhỏ bé là xây dựng được cho quý khách một dịch vụ vừa lòng nhất.\"', '\"Vận chuyển hàng hóa bằng xe tải đường dài chuyên phục vụ cho mọi loại khách hàng. Từ khách hàng nhỏ lẻ, gửi hàng ghép,…tới những hàng nguyên xe, nguyên lô,…Á Châu không phân biệt bạn là ai, hàng hóa ra sao, đi đến đâu,…\"', '\"Giá cước vận chuyển hàng hóa đi các tỉnh miền Trung và Tây Nguyên của Á Châu sẽ giảm 30% so với mặt bằng chung các công ty vận chuyển trên thị trường...\"', 'AbR2-24.jpg', 'Y5Jr-23.jpg', 'TOsK-22.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.2487205784505!2d106.79409731541466!3d10.86867769225897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxJFocWc!5e0!3m2!1svi!2s!4v1538412562230\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '<p>222222222222222222222</p>', '<p>333333333333333333333333</p>');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `noidung` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `noidung`) VALUES
(5, '<p>&lt;p&gt;&lt;span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:times new roman,times,serif; font-size:18px\"&gt;Tp.HCM là một thành phố lớn thuộc cấp Trung Ương. Chính vì thế nơi đây có lượng dân cư đông đúc, nguồn nhân lực dồi dào, lượng hàng hoá được sản xuất tại TP.HCM phân phối cho các tỉnh thành trên cả nước là con số khổng lồ. Nhắc đến phân phối lưu thông hàng thì phải nhắc đến dịch vụ vận chuyển hàng hoá.&amp;nbsp;&lt;/span&gt;&lt;a href=\"http://vanchuyenachau.com.vn/dich-vu/\" style=\"box-sizing: border-box; background-color: rgb(243, 243, 243); color: rgb(1, 124, 240); text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-family: &amp;quot;times new roman&amp;quot;, times, serif; font-size: 18px; text-align: justify;\"&gt;&lt;strong&gt;Vận chuyển hàng hoá tại TPHCM&lt;/strong&gt;&lt;/a&gt;&lt;span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:times new roman,times,serif; font-size:18px\"&gt;&amp;nbsp;đang là vấn đề đáng được lưu tâm của các Doanh nghiệp sản xuất.&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&nbsp;</p>'),
(6, '<div>&nbsp;</div>\r\n\r\n<div>class gioithieuController extends Controller</div>\r\n\r\n<div>{</div>\r\n\r\n<div>&nbsp; &nbsp; //</div>\r\n\r\n<div>&nbsp; &nbsp; public function getdanhsach(){</div>\r\n\r\n<div>&nbsp; &nbsp; $gioithieu = gioithieu::all();</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp; &nbsp; $this-&gt;validate($request,[</div>\r\n\r\n<div>&nbsp; &nbsp; \'noidung\'=&gt;\'required\',</div>\r\n\r\n<div>&nbsp; &nbsp; ],[</div>\r\n\r\n<div>&nbsp; &nbsp; \'noidung.required\'=&gt;\'Chưa nhập nội dung\',</div>\r\n\r\n<div>&nbsp; &nbsp; \'noidung.max\'=&gt;\'Chỉ được nhập tối đa 1000 ký tự\',</div>\r\n\r\n<div>&nbsp; &nbsp; ]);</div>\r\n\r\n<div>&nbsp; &nbsp; $gioithieu = new gioithieu();</div>\r\n\r\n<div>&nbsp; &nbsp; $gioithieu-&gt;noidung = $request-&gt;noidung;</div>');

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `noidung` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `noidung`) VALUES
(5, '<ol>\r\n	<li>ưqeqwe</li>\r\n	<li>ưqeqwe</li>\r\n	<li>ưqeqwe</li>\r\n	<li>ưqewqe</li>\r\n	<li>ưqeqwe</li>\r\n</ol>'),
(6, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>}</div>'),
(7, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>}</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>'),
(8, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>'),
(9, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthe</div>'),
(10, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Requ</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthe</div>\r\n\r\n<p>1111111</p>'),
(11, '<p>&nbsp;</p>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthe</div>\r\n\r\n<p>&nbsp;</p>'),
(12, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthe</div>'),
(13, '<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.danhsach\',[\'gioithieu\'=&gt;$gioithieu]);</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp; &nbsp; public function getthem(){</div>\r\n\r\n<div>&nbsp; &nbsp; return view(\'admin.gioithieu.them\');</div>\r\n\r\n<div>&nbsp; &nbsp; }</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $req</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthem(Request $request){</div>\r\n\r\n<div>&nbsp;</div>\r\n\r\n<div>1111111</div>\r\n\r\n<div>&nbsp; &nbsp; public function postthe</div>'),
(14, '<p>Công ty cổ phần vận chuyển Á Châu là công ty hoạt động trong lĩnh vực vận chuyển hàng hóa từ Tp.HCM đi toàn quốc và từ Hà Nội đi toàn quốc. Được thành lập với đội ngũ Quản lý nhiều kinh nghiệm trong lĩnh vực vận tải, nhiệt tình, được đào tạo tốt về chuyên môn nghiệp vụ. Tự hào là một trong những công ty dịch vụ vận chuyển hàng uy tín được đông đảo khách hàng lựa chọn và tín nhiệm hợp tác.</p>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `noidung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `noidung`) VALUES
(1, '<h3>CÔNG TY CỔ PHẦN VẬN CHUYỂN Á CHÂU</h3>'),
(2, '<p><a href=\"http://vanchuyenachau.com.vn/dich-vu-van-chuyen-hang-tu-ha-noi-vao-tphcm-sai-gon.html\" style=\"box-sizing: border-box; background-color: rgb(243, 243, 243); color: rgb(1, 124, 240); text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, Arial, sans-serif; font-weight: 700; text-transform: uppercase;\">HỒ CHÍ MINH</a><strong>:</strong></p>'),
(3, 'Bãi xe Á Châu, Số 35 Đường TA 17, P. Thới An, Quận 12, TPHCM'),
(4, '<p><strong>Tell:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;028-7109 8899 - 3717 0749</span></p>'),
(5, '<p><strong>Hotline:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;</span><span style=\"background-color:rgb(243, 243, 243); color:rgb(255, 0, 0); font-family:roboto,arial,sans-serif\"><strong>19001733</strong></span></p>'),
(6, '<p><strong>Fax:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;028-37179488</span></p>'),
(7, '<p><strong>MST:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;0310031872</span></p>'),
(8, '<p><strong>Email:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;info@vanchuyenachau.com.vn</span></p>'),
(9, '<p><strong>Website:</strong><span style=\"background-color:rgb(243, 243, 243); color:rgb(16, 17, 18); font-family:roboto,arial,sans-serif\">&nbsp;</span><a href=\"http://vanchuyenachau.com.vn/\" style=\"box-sizing: border-box; background-color: rgb(243, 243, 243); color: rgb(1, 124, 240); text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, Arial, sans-serif;\">http://vanchuyenachau.com.vn</a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`) VALUES
(1, 'mô tả 123,ádasđ', 'từ khóa 123,dfdgdfgdfgdg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`) VALUES
(2, 'admin', '$2y$10$yfgw7ICU0SqHLb538.TL4.C6AqmxdvwP1SwvrEueIqyoqkLkQjt9G', 'UmUeM3fNsp8Z3gqEBxEk5FKHH4V2wJu4g3LOHjgnsDcJV81jJh7eq14tJPRl');

-- --------------------------------------------------------

--
-- Table structure for table `uudai`
--

CREATE TABLE `uudai` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uudai`
--

INSERT INTO `uudai` (`id`, `noidung`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '456456'),
(5, 'baodenho0@gmail.com'),
(6, '1323121'),
(7, 'số điện thoại nè'),
(8, '012759856333'),
(9, '01235855544');

-- --------------------------------------------------------

--
-- Table structure for table `yeucaulienhe`
--

CREATE TABLE `yeucaulienhe` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yeucaulienhe`
--

INSERT INTO `yeucaulienhe` (`id`, `hoten`, `email`, `sdt`, `diachi`, `tieude`, `noidung`) VALUES
(3, '1', '1', '1', '1', 'Gấp', 'LIÊN HỆ\r\nBãi xe Á Châu, Số 35 Đường TA 17, P. Thới An, Quận 12, TPHCM\r\nTell: 028-7109 8899 - 3717 0749\r\nHotlin'),
(4, '2', '2', '2', '2', 'Gấp 2', 'LIÊN HỆ\r\nBãi xe Á Châu, Số 35 Đường TA 17, P. Thới An, Quận 12, TPHCM\r\nTell: 028-7109 8899 - 3717 0749\r\nHotlin'),
(5, '3', '3', '3', '3', '3', 'Công ty cổ phần vận chuyển Á Châu là công ty hoạt động trong lĩnh vực vận chuyển hàng hóa từ Tp.HCM đi toàn quốc và từ Hà Nội đi toàn quốc. Được thành lập với đội ngũ Quản lý nhiều kinh nghiệm trong lĩnh vực vận tải, nhiệt tình, được đào tạo tốt về chuyên'),
(6, '4', '4', '4', '4', '4', 'Công ty cổ phần vận chuyển Á Châu là công ty hoạt động trong lĩnh vực vận chuyển hàng hóa từ Tp.HCM đi toàn quốc và từ Hà Nội đi toàn quốc. Được thành lập với đội ngũ Quản lý nhiều kinh nghiệm trong lĩnh vực vận tải, nhiệt tình, được đào tạo tốt về chuyên'),
(7, '5', '5', '5', '5', '5', 'Công ty cổ phần vận chuyển Á Châu là công ty hoạt động trong lĩnh vực vận chuyển hàng hóa từ Tp.HCM đi toàn quốc và từ Hà Nội đi toàn quốc. Được thành lập với đội ngũ Quản lý nhiều kinh nghiệm trong lĩnh vực vận tải, nhiệt tình, được đào tạo tốt về chuyên môn nghiệp vụ. Tự hào là một trong những công ty dịch vụ vận chuyển hàng uy tín được đông đảo khách hàng lựa chọn và tín nhiệm hợp tác.\r\n\r\nChúng tôi chuyên cung cấp các dịch vụ vận chuyển hàng hóa đi toàn quốc. Trong đó bao gồm dịch vụ ký gửi hàng hóa, dịch vụ chuyển phát nhanh trong nước giá rẻ, dịch vụ vận tải nội địa bằng đường bộ, đường hàng không, đường biển nội địa nhanh chóng, an toàn và chính xác, thủ tục xuất nhập khẩu, ....'),
(8, 'họ tên hay hay', '123456ti12345@gmail.com', '01234567890', 'họ tên hay hay', 'họ tên hay hay', 'họ tên hay hay'),
(9, 'Vui lòng nhập đầy', '123456ti12345@gmail.com', 'Vui lòng nhập đầy', 'Vui lòng nhập đầy', 'Vui lòng nhập đầy', 'Vui lòng nhập đầy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bocuc`
--
ALTER TABLE `bocuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uudai`
--
ALTER TABLE `uudai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yeucaulienhe`
--
ALTER TABLE `yeucaulienhe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bocuc`
--
ALTER TABLE `bocuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uudai`
--
ALTER TABLE `uudai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `yeucaulienhe`
--
ALTER TABLE `yeucaulienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
