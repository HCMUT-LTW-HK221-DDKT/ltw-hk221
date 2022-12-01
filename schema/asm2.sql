-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 06, 2021 at 04:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm2`
--
CREATE DATABASE IF NOT EXISTS `asm2` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `asm2`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'admin123'),
('kieu', 'kieu123'),
('trung', 'trung123'),
('duong', 'duong123'),
('duy', 'duy123');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`) VALUES
(1, 'tinhlamjw@gmail.com', '1900 29 29 17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(13) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT "New Order"
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `orders` (`id`, `created_at`, `total_price`, `username`, `Status`) VALUES
(1, '2022-12-01 11:56:30', 1968000, `kieuhoang`, `New Order`),
(2, '2022-12-01 13:56:30', 2680000, `trungtran93`, `New Order`),
(3, '2022-12-01 15:56:20', 5680000, `duong`, `Preparing`),
(4, '2022-12-01 17:56:10', 4860000, `duytran`, `Done`);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` char(13) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `price` bigint(20) NOT NULL,
  `imgUrl` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `imgUrl`) VALUES
(1, 'VÒNG HỔ PHÁCH MẬT LẠP', 'Sơ lược:\r\n\r\nHổ pháp (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách...thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ phách được hình thành từ quá trình hoá thạch của nhựa cây (chủ yếu là nhựa cây thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, .... \r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,...\r\n\r\nThành phần: C40H6404\r\n\r\nĐộ cứng thang Mohs: 2 - 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành \r\n\r\nHổ phách được xem như là vật dung hoà của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thuỷ), phát ra anh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hoả) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một "tinh thể" tấy uế\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ\r\nNgười xưa thuong đeo vòng Hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ em tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hoá, có thể khử đi các gốc tự do đang phá huỷ tế bào.\r\nPhục hồi thần kinh và tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, …\r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 3375000, 'HP-VANG-LUC-LAC.png'),
(2, 'THẠCH ANH DÂU TÂY XANH\r\n(AVENTURINE)', 'Sơ lược:\r\n\r\nXanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.\r\n\r\nKhu vực được khai thác:Nga, Brazil, Đức, Việt Nam ( Nam Thanh Hóa,Vạn Yên, Bảo Lộc, Gia Nghĩa ),…\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7 – 7.5/10\r\n\r\nMạng phù hợp: Mộc – Hỏa\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nMang lại sự thoải mái, năng lượng dương tích cực và lành mạnh.\r\nBiểu tượng cho sức sống, niềm tin và hy vọng.\r\nThu hút các mối quan hệ,  gắn kết, hóa thù thành bạn.\r\nGiúp tình yêu trở nên cởi mở, tràn đầy năng lượng và nhiệt huyết.Tác dụng sức khoẻ:\r\n\r\nGiúp người mang tràn đầy năng lượng, lưu thông khí huyết.\r\nRất tốt đối với hệ thần kinh và tim mạch.\r\nBảo vệ người mang từ những tia tù trường bức xạ xấu.\r\n\r\n \r\n\r\nCách bảo quản thạch anh dâu xanh:\r\n\r\nThạch anh khá bền và có khả năng chống hao mòn.\r\nNhạy cảm với một số axit.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nBảo quản vòng tay thì hãy để riêng, không để chung với các loại trang sức đá quý khác.\r\nVệ sinh vòng tay bằng cách dùng khăn mềm (không đổ lông) thấm nước muối tự nhiên (muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá.\r\n\r\n \r\n\r\nTiếp thêm năng lượng cho đá bằng cách:\r\n\r\nPhơi dưới ánh nắng mặt trời hoặc ánh trăng 24h → 72h.\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1968000, 'THACH-ANH-DAU-TAY-XANH.png'),
(3, 'THẠCH ANH DÂU TÂY XANH\r\n(AVENTURINE)', 'Sơ lược:\r\n\r\nXanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.\r\n\r\nKhu vực được khai thác:Nga, Brazil, Đức, Việt Nam ( Nam Thanh Hóa,Vạn Yên, Bảo Lộc, Gia Nghĩa ),…\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7 – 7.5/10\r\n\r\nMạng phù hợp: Mộc – Hỏa\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nMang lại sự thoải mái, năng lượng dương tích cực và lành mạnh.\r\nBiểu tượng cho sức sống, niềm tin và hy vọng.\r\nThu hút các mối quan hệ,  gắn kết, hóa thù thành bạn.\r\nGiúp tình yêu trở nên cởi mở, tràn đầy năng lượng và nhiệt huyết.Tác dụng sức khoẻ:\r\n\r\nGiúp người mang tràn đầy năng lượng, lưu thông khí huyết.\r\nRất tốt đối với hệ thần kinh và tim mạch.\r\nBảo vệ người mang từ những tia tù trường bức xạ xấu.\r\n\r\n \r\n\r\nCách bảo quản thạch anh dâu xanh:\r\n\r\nThạch anh khá bền và có khả năng chống hao mòn.\r\nNhạy cảm với một số axit.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nBảo quản vòng tay thì hãy để riêng, không để chung với các loại trang sức đá quý khác.\r\nVệ sinh vòng tay bằng cách dùng khăn mềm (không đổ lông) thấm nước muối tự nhiên (muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá.\r\n\r\n \r\n\r\nTiếp thêm năng lượng cho đá bằng cách:\r\n\r\nPhơi dưới ánh nắng mặt trời hoặc ánh trăng 24h → 72h.\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1186000, 'THACH-ANH-DAU-TAY-XANH-8ly.png'),
(4, 'THẠCH ANH DÂU TÂY XANH\r\n(AVENTURINE)', 'Sơ lược:\r\n\r\nXanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.\r\n\r\nKhu vực được khai thác:Nga, Brazil, Đức, Việt Nam ( Nam Thanh Hóa,Vạn Yên, Bảo Lộc, Gia Nghĩa ),…\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7 – 7.5/10\r\n\r\nMạng phù hợp: Mộc – Hỏa\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nMang lại sự thoải mái, năng lượng dương tích cực và lành mạnh.\r\nBiểu tượng cho sức sống, niềm tin và hy vọng.\r\nThu hút các mối quan hệ,  gắn kết, hóa thù thành bạn.\r\nGiúp tình yêu trở nên cởi mở, tràn đầy năng lượng và nhiệt huyết.Tác dụng sức khoẻ:\r\n\r\nGiúp người mang tràn đầy năng lượng, lưu thông khí huyết.\r\nRất tốt đối với hệ thần kinh và tim mạch.\r\nBảo vệ người mang từ những tia tù trường bức xạ xấu.\r\n\r\n \r\n\r\nCách bảo quản thạch anh dâu xanh:\r\n\r\nThạch anh khá bền và có khả năng chống hao mòn.\r\nNhạy cảm với một số axit.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nBảo quản vòng tay thì hãy để riêng, không để chung với các loại trang sức đá quý khác.\r\nVệ sinh vòng tay bằng cách dùng khăn mềm (không đổ lông) thấm nước muối tự nhiên (muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá.\r\n\r\n \r\n\r\nTiếp thêm năng lượng cho đá bằng cách:\r\n\r\nPhơi dưới ánh nắng mặt trời hoặc ánh trăng 24h → 72h.\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1186000, 'THACH-ANH-DAU-TAY-XANH-10ly.png'),
(5, 'GỖ HÓA THẠCH\r\n(Petrified Wood)', 'Sơ lược :\r\n\r\n“Gỗ hóa thạch” hiểu đơn giản là gỗ hóa đá. Gỗ hóa thạch được tạo thành sau những lần núi lửa hoạt động, một số cây gỗ không bị cháy mà bị vùi dưới lớp nham thạch, trong thành phần của nham thạch có chứa SiO2 thấm vào các thớ cây làm thành những đường vân gỗ tuyệt đẹp và tạo độ cứng tương đương như đá mã não.\r\n\r\n \r\n\r\nKhu vực được khai thác: Australia, Hoa Kỳ, Myanma, Việt Nam (Lạng Sơn, Tây Nguyên và Phú Yên)\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5,5 – 6,5 /10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nThổ – Kim & Tất cả các mệnh\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nLàm cho hệ thần kinh vững vàng hơn.\r\nCó khả năng trấn tà, trừ ám khí,hạn chế những điều rủi ro và đem lại may mắn.\r\nNăng lượng dương của đá giúp tâm trí bạn bình an để bước vào thiền định dễ dàng hơn.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nGỗ Hóa Thạch đỏ: dùng chữa các bệnh về sưng nóng, đỏ, đau (như các chứng viêm khớp có kèm sưng nóng), các bệnh thuộc tim mạch, huyết áp, giúp ổn định tinh thần.\r\nGỗ Hóa Thạch trắng: dùng chữa các bệnh thuộc đường hô hấp như viêm phế quản, viêm họng, viêm suyễn và viêm mũi dị ứng.\r\nGỗ Hóa Thạch vàng: dùng chữa các bệnh về Tỳ vị như rối loạn tiêu hóa, tiêu chảy thường xuyên, ăn uống không tiêu gầy yếu, chữa các chứng tê bại, giúp trừ chứng lo âu suy nghĩ vẩn vơ.\r\nGỗ Hóa Thạch nâu đen: dùng để để chữa các chứng bệnh thuộc Thận như suy yếu sinh dục (nam liệt dương, nữ lãnh cảm), hiếm muộn, viêm thận mãn tính, thường hay đau lưng nhức mỏi, giúp trừ chứng sợ hãi vô cớ.\r\nGỗ Hóa Thạch xanh: dùng để chữa các bệnh về gan mật.\r\nĐặc biệt có thể hỗ trợ chữa các chứng bệnh liên quan đến suy yếu sinh dục cho cả nam và nữ (Hiếm muộn)…\r\n\r\nCách bảo quản đá :\r\n\r\nGỗ hóa thạch khá bền và có khả năng chống hao mòn.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\nBảo quản để riêng, không để chung với các loại trang sức đá quý khác.\r\nBọc bằng vải mềm và cho vào hộp.\r\nĐịnh kỳ 6 tháng đến 1 năm bạn nên tẩy uế, sạc lại năng lượng cho đá bằng cách phơi dưới ánh trăng rằm (để qua đêm).', 1860000, 'GO-HOA-THACH.png'),
(6, 'GỖ HÓA THẠCH\r\n(Petrified Wood)', 'Sơ lược :\r\n\r\n“Gỗ hóa thạch” hiểu đơn giản là gỗ hóa đá. Gỗ hóa thạch được tạo thành sau những lần núi lửa hoạt động, một số cây gỗ không bị cháy mà bị vùi dưới lớp nham thạch, trong thành phần của nham thạch có chứa SiO2 thấm vào các thớ cây làm thành những đường vân gỗ tuyệt đẹp và tạo độ cứng tương đương như đá mã não.\r\n\r\n \r\n\r\nKhu vực được khai thác: Australia, Hoa Kỳ, Myanma, Việt Nam (Lạng Sơn, Tây Nguyên và Phú Yên)\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5,5 – 6,5 /10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nThổ – Kim & Tất cả các mệnh\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nLàm cho hệ thần kinh vững vàng hơn.\r\nCó khả năng trấn tà, trừ ám khí,hạn chế những điều rủi ro và đem lại may mắn.\r\nNăng lượng dương của đá giúp tâm trí bạn bình an để bước vào thiền định dễ dàng hơn.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nGỗ Hóa Thạch đỏ: dùng chữa các bệnh về sưng nóng, đỏ, đau (như các chứng viêm khớp có kèm sưng nóng), các bệnh thuộc tim mạch, huyết áp, giúp ổn định tinh thần.\r\nGỗ Hóa Thạch trắng: dùng chữa các bệnh thuộc đường hô hấp như viêm phế quản, viêm họng, viêm suyễn và viêm mũi dị ứng.\r\nGỗ Hóa Thạch vàng: dùng chữa các bệnh về Tỳ vị như rối loạn tiêu hóa, tiêu chảy thường xuyên, ăn uống không tiêu gầy yếu, chữa các chứng tê bại, giúp trừ chứng lo âu suy nghĩ vẩn vơ.\r\nGỗ Hóa Thạch nâu đen: dùng để để chữa các chứng bệnh thuộc Thận như suy yếu sinh dục (nam liệt dương, nữ lãnh cảm), hiếm muộn, viêm thận mãn tính, thường hay đau lưng nhức mỏi, giúp trừ chứng sợ hãi vô cớ.\r\nGỗ Hóa Thạch xanh: dùng để chữa các bệnh về gan mật.\r\nĐặc biệt có thể hỗ trợ chữa các chứng bệnh liên quan đến suy yếu sinh dục cho cả nam và nữ (Hiếm muộn)…\r\n\r\nCách bảo quản đá :\r\n\r\nGỗ hóa thạch khá bền và có khả năng chống hao mòn.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\nBảo quản để riêng, không để chung với các loại trang sức đá quý khác.\r\nBọc bằng vải mềm và cho vào hộp.\r\nĐịnh kỳ 6 tháng đến 1 năm bạn nên tẩy uế, sạc lại năng lượng cho đá bằng cách phơi dưới ánh trăng rằm (để qua đêm).', 1086000, 'GO-HOA-THACH.png-8ly.png'),
(7, 'GỖ HÓA THẠCH\r\n(Petrified Wood)', 'Sơ lược :\r\n\r\n“Gỗ hóa thạch” hiểu đơn giản là gỗ hóa đá. Gỗ hóa thạch được tạo thành sau những lần núi lửa hoạt động, một số cây gỗ không bị cháy mà bị vùi dưới lớp nham thạch, trong thành phần của nham thạch có chứa SiO2 thấm vào các thớ cây làm thành những đường vân gỗ tuyệt đẹp và tạo độ cứng tương đương như đá mã não.\r\n\r\n \r\n\r\nKhu vực được khai thác: Australia, Hoa Kỳ, Myanma, Việt Nam (Lạng Sơn, Tây Nguyên và Phú Yên)\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5,5 – 6,5 /10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nThổ – Kim & Tất cả các mệnh\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nLàm cho hệ thần kinh vững vàng hơn.\r\nCó khả năng trấn tà, trừ ám khí,hạn chế những điều rủi ro và đem lại may mắn.\r\nNăng lượng dương của đá giúp tâm trí bạn bình an để bước vào thiền định dễ dàng hơn.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nGỗ Hóa Thạch đỏ: dùng chữa các bệnh về sưng nóng, đỏ, đau (như các chứng viêm khớp có kèm sưng nóng), các bệnh thuộc tim mạch, huyết áp, giúp ổn định tinh thần.\r\nGỗ Hóa Thạch trắng: dùng chữa các bệnh thuộc đường hô hấp như viêm phế quản, viêm họng, viêm suyễn và viêm mũi dị ứng.\r\nGỗ Hóa Thạch vàng: dùng chữa các bệnh về Tỳ vị như rối loạn tiêu hóa, tiêu chảy thường xuyên, ăn uống không tiêu gầy yếu, chữa các chứng tê bại, giúp trừ chứng lo âu suy nghĩ vẩn vơ.\r\nGỗ Hóa Thạch nâu đen: dùng để để chữa các chứng bệnh thuộc Thận như suy yếu sinh dục (nam liệt dương, nữ lãnh cảm), hiếm muộn, viêm thận mãn tính, thường hay đau lưng nhức mỏi, giúp trừ chứng sợ hãi vô cớ.\r\nGỗ Hóa Thạch xanh: dùng để chữa các bệnh về gan mật.\r\nĐặc biệt có thể hỗ trợ chữa các chứng bệnh liên quan đến suy yếu sinh dục cho cả nam và nữ (Hiếm muộn)…\r\n\r\nCách bảo quản đá :\r\n\r\nGỗ hóa thạch khá bền và có khả năng chống hao mòn.\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\nBảo quản để riêng, không để chung với các loại trang sức đá quý khác.\r\nBọc bằng vải mềm và cho vào hộp.\r\nĐịnh kỳ 6 tháng đến 1 năm bạn nên tẩy uế, sạc lại năng lượng cho đá bằng cách phơi dưới ánh trăng rằm (để qua đêm).', 1086000, 'GO-HOA-THACH.png-10ly.png'),
(8, 'ĐÁ GARNET LỰU ĐỎ', 'Sơ lược :\r\n\r\nĐá Garnet hay Granat là 1 loại đá quý có lịch sử lâu đời trong khoáng sản học, thường được biết đến với cái tên Ngọc hồng lựu bởi màu đỏ của nó giống như quả lựu. Có khoảng 20 loại khác nhau như: Almandine, Rhodolite, Spessartine, Hessonite, Tsavorite, Demantoid,…mà ở Việt Nam người ta hay gọi dân dã là đá Garnet đỏ, Garnet cam, Garnet nâu, Garnet xanh, Garnet vàng, Garnet đen hay Garnet sao. Khi gọi đá Garnet chung chung hay Ngọc hồng lựu, ý mọi người nói đến đá Garnet đỏ (đỏ sậm) – loại đá phổ biến nhất.\r\n\r\n \r\n\r\nKhu vực được khai thác: Úc, Áo, Mỹ, Nga, Nhật, Đức,…Việt Nam ( Cao Bằng, Nghệ An, Lâm Đồng )\r\n\r\n \r\n\r\nThành phần: X3Z2(SiO4)3 với X = Ca, Fe,…Z = Al, Cr,…\r\n\r\nĐộ cứng thang Mohs: 6.5 – 7.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nHỏa – Thổ\r\n\r\nTác dụng tinh thần:\r\n\r\n–  Giúp người đeo chống lại sự u sầu và cảnh báo những linh hồn xấu xa, tránh được những cơn ác mộng .\r\n\ Truyền cảm hứng cho sự suy ngẫm và tính trung thực.\r\n\ Cực kỳ có lợi trong lĩnh vực kinh doanh theo định hướng con người.\r\n\ Lựa chọn lý tưởng cho những người đang bước vào một nơi mới, đi đến địa điểm mới.\r\nThuộc tính mạnh nhất của garnet là khả năng giúp người ta vượt qua trầm cảm.\r\nPhục hồi, thanh lọc và cân bằng năng lượng, loại bỏ sự ức chế, cấm kỵ, tức giận và bất hòa.\r\nBảo vệ người mang khỏi sự ảnh hưởng bởi năng lượng xấu của người khác.\r\nCân bằng ham muốn tình dục, hỗ trợ cho khả năng tình dục và khả năng sinh sản.\r\nLà biểu tượng của tình yêu, xua đuổi vận rủi và mang lại hạnh phúc.\r\n\r\n \r\n\r\nTác dụng sức khoẻ: .\r\n\r\n Đặc tính nổi bật nhất của Garnet là thanh lọc và tốt cho hệ tuần hoàn, tăng cường sự trao đổi chất, cải thiện nhịp tim và các vấn đề thể chất liên quan đến máu.\r\n Giúp người phụ nữ đang mang thai có tâm trạng thoải mái, chống bị trầm cảm và dễ sinh nở hơn.\r\n\ Giúp tăng cường sức khỏe cho người đeo. Đối với nam giới – đá giữ cho hệ thống sinh sản khỏe mạnh. Đối với nữ giới – đá thúc đẩy sự cân bằng nội tiết tố và giảm sưng.\r\n Kích thích sự trao đổi chất, điều trị các rối loạn cột sống và tế bào, thanh lọc và tái tạo máu, tim và phổi, và tái tạo DNA\r\nTác động tích cực tới luân xa số 1 giúp chủ nhân cảm thấy khỏe khoắn, tỉnh táo và tràn đầy sinh lực.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\n Luôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\n\ Bảo quản riêng, không để chung với các loại trang sức đá quý khác\r\n Bọc bằng vải mềm, và cho vào hộp.\r\n Khi sử dụng 1 thời gian, đá Garnet bị bám bụi, lúc này bạn có thể dùng khăn sạch thấm rượu trắng nhẹ nhàng vệ sinh cho đá.', 2168000, 'GARNET-LUU-DO-6ly.png'),
(9, 'ĐÁ GARNET LỰU ĐỎ', 'Sơ lược :\r\n\r\nĐá Garnet hay Granat là 1 loại đá quý có lịch sử lâu đời trong khoáng sản học, thường được biết đến với cái tên Ngọc hồng lựu bởi màu đỏ của nó giống như quả lựu. Có khoảng 20 loại khác nhau như: Almandine, Rhodolite, Spessartine, Hessonite, Tsavorite, Demantoid,…mà ở Việt Nam người ta hay gọi dân dã là đá Garnet đỏ, Garnet cam, Garnet nâu, Garnet xanh, Garnet vàng, Garnet đen hay Garnet sao. Khi gọi đá Garnet chung chung hay Ngọc hồng lựu, ý mọi người nói đến đá Garnet đỏ (đỏ sậm) – loại đá phổ biến nhất.\r\n\r\n \r\n\r\nKhu vực được khai thác: Úc, Áo, Mỹ, Nga, Nhật, Đức,…Việt Nam ( Cao Bằng, Nghệ An, Lâm Đồng )\r\n\r\n \r\n\r\nThành phần: X3Z2(SiO4)3 với X = Ca, Fe,…Z = Al, Cr,…\r\n\r\nĐộ cứng thang Mohs: 6.5 – 7.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nHỏa – Thổ\r\n\r\nTác dụng tinh thần:\r\n\r\n–  Giúp người đeo chống lại sự u sầu và cảnh báo những linh hồn xấu xa, tránh được những cơn ác mộng .\r\n\ Truyền cảm hứng cho sự suy ngẫm và tính trung thực.\r\n\ Cực kỳ có lợi trong lĩnh vực kinh doanh theo định hướng con người.\r\n\ Lựa chọn lý tưởng cho những người đang bước vào một nơi mới, đi đến địa điểm mới.\r\nThuộc tính mạnh nhất của garnet là khả năng giúp người ta vượt qua trầm cảm.\r\nPhục hồi, thanh lọc và cân bằng năng lượng, loại bỏ sự ức chế, cấm kỵ, tức giận và bất hòa.\r\nBảo vệ người mang khỏi sự ảnh hưởng bởi năng lượng xấu của người khác.\r\nCân bằng ham muốn tình dục, hỗ trợ cho khả năng tình dục và khả năng sinh sản.\r\nLà biểu tượng của tình yêu, xua đuổi vận rủi và mang lại hạnh phúc.\r\n\r\n \r\n\r\nTác dụng sức khoẻ: .\r\n\r\n Đặc tính nổi bật nhất của Garnet là thanh lọc và tốt cho hệ tuần hoàn, tăng cường sự trao đổi chất, cải thiện nhịp tim và các vấn đề thể chất liên quan đến máu.\r\n Giúp người phụ nữ đang mang thai có tâm trạng thoải mái, chống bị trầm cảm và dễ sinh nở hơn.\r\n\ Giúp tăng cường sức khỏe cho người đeo. Đối với nam giới – đá giữ cho hệ thống sinh sản khỏe mạnh. Đối với nữ giới – đá thúc đẩy sự cân bằng nội tiết tố và giảm sưng.\r\n Kích thích sự trao đổi chất, điều trị các rối loạn cột sống và tế bào, thanh lọc và tái tạo máu, tim và phổi, và tái tạo DNA\r\nTác động tích cực tới luân xa số 1 giúp chủ nhân cảm thấy khỏe khoắn, tỉnh táo và tràn đầy sinh lực.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\n Luôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\n\ Bảo quản riêng, không để chung với các loại trang sức đá quý khác\r\n Bọc bằng vải mềm, và cho vào hộp.\r\n Khi sử dụng 1 thời gian, đá Garnet bị bám bụi, lúc này bạn có thể dùng khăn sạch thấm rượu trắng nhẹ nhàng vệ sinh cho đá.', 1286000, 'GARNET-LUU-DO-8ly.png'),
(10, 'ĐÁ GARNET LỰU ĐỎ', 'Sơ lược :\r\n\r\nĐá Garnet hay Granat là 1 loại đá quý có lịch sử lâu đời trong khoáng sản học, thường được biết đến với cái tên Ngọc hồng lựu bởi màu đỏ của nó giống như quả lựu. Có khoảng 20 loại khác nhau như: Almandine, Rhodolite, Spessartine, Hessonite, Tsavorite, Demantoid,…mà ở Việt Nam người ta hay gọi dân dã là đá Garnet đỏ, Garnet cam, Garnet nâu, Garnet xanh, Garnet vàng, Garnet đen hay Garnet sao. Khi gọi đá Garnet chung chung hay Ngọc hồng lựu, ý mọi người nói đến đá Garnet đỏ (đỏ sậm) – loại đá phổ biến nhất.\r\n\r\n \r\n\r\nKhu vực được khai thác: Úc, Áo, Mỹ, Nga, Nhật, Đức,…Việt Nam ( Cao Bằng, Nghệ An, Lâm Đồng )\r\n\r\n \r\n\r\nThành phần: X3Z2(SiO4)3 với X = Ca, Fe,…Z = Al, Cr,…\r\n\r\nĐộ cứng thang Mohs: 6.5 – 7.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nHỏa – Thổ\r\n\r\nTác dụng tinh thần:\r\n\r\n–  Giúp người đeo chống lại sự u sầu và cảnh báo những linh hồn xấu xa, tránh được những cơn ác mộng .\r\n\ Truyền cảm hứng cho sự suy ngẫm và tính trung thực.\r\n\ Cực kỳ có lợi trong lĩnh vực kinh doanh theo định hướng con người.\r\n\ Lựa chọn lý tưởng cho những người đang bước vào một nơi mới, đi đến địa điểm mới.\r\nThuộc tính mạnh nhất của garnet là khả năng giúp người ta vượt qua trầm cảm.\r\nPhục hồi, thanh lọc và cân bằng năng lượng, loại bỏ sự ức chế, cấm kỵ, tức giận và bất hòa.\r\nBảo vệ người mang khỏi sự ảnh hưởng bởi năng lượng xấu của người khác.\r\nCân bằng ham muốn tình dục, hỗ trợ cho khả năng tình dục và khả năng sinh sản.\r\nLà biểu tượng của tình yêu, xua đuổi vận rủi và mang lại hạnh phúc.\r\n\r\n \r\n\r\nTác dụng sức khoẻ: .\r\n\r\n Đặc tính nổi bật nhất của Garnet là thanh lọc và tốt cho hệ tuần hoàn, tăng cường sự trao đổi chất, cải thiện nhịp tim và các vấn đề thể chất liên quan đến máu.\r\n Giúp người phụ nữ đang mang thai có tâm trạng thoải mái, chống bị trầm cảm và dễ sinh nở hơn.\r\n\ Giúp tăng cường sức khỏe cho người đeo. Đối với nam giới – đá giữ cho hệ thống sinh sản khỏe mạnh. Đối với nữ giới – đá thúc đẩy sự cân bằng nội tiết tố và giảm sưng.\r\n Kích thích sự trao đổi chất, điều trị các rối loạn cột sống và tế bào, thanh lọc và tái tạo máu, tim và phổi, và tái tạo DNA\r\nTác động tích cực tới luân xa số 1 giúp chủ nhân cảm thấy khỏe khoắn, tỉnh táo và tràn đầy sinh lực.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay.\r\n Luôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc.\r\n\ Bảo quản riêng, không để chung với các loại trang sức đá quý khác\r\n Bọc bằng vải mềm, và cho vào hộp.\r\n Khi sử dụng 1 thời gian, đá Garnet bị bám bụi, lúc này bạn có thể dùng khăn sạch thấm rượu trắng nhẹ nhàng vệ sinh cho đá.', 1286000, 'GARNET-LUU-DO-10ly.png'),
(11, 'VÒNG MÃ NÃO ĐEN\r\n\r\n(BLACK AGATE)', 'Sơ lược : \r\n\r\n \r\n\r\nMã não có tính đa sắc bao gồm đen, vàng, hồng, đỏ, xám, trắng và nâu…Một số loại Agate có màu sẫm đen, xám trong khi một số còn có các vết tích hóa thạch hoặc rắn. \r\n\r\nMã não được hình thành trong tất cả các môi trường khoáng vật, nhưng thường được tìm thấy nhiều nhất trong đá núi lửa. \r\n\r\nCái tên “Agate”, bắt nguồn từ tiếng Hy Lạp cổ “Achates” – có nghĩa là hạnh phúc.\r\n\r\nĐá mã não đen là một trong 7 báu vật được tôn thờ, coi trọng nhất. \r\n\r\n \r\n\r\nKhu vực được khai thác: Brazil, Mexico,  Ấn Độ, Madagascar, Hoa Kỳ, Namibia, Việt Nam ( Đắk Lăk, Đắk Nông, Lâm Đồng, Phú Yên….)\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7.0/ 10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\n \r\n\r\nThủy – Kim \r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nBảo vệ chống lại các năng lượng xấu tiêu cực từ ngoài môi trường\r\nBiểu tượng của May mắn sức khỏe, là viên đá Trường Thọ\r\nGiảm tính bảo thủ suy nghĩ tích cực\r\nGiúp bạn giảm căng thẳng, áp lực trong công việc mang lại sự bình an và may mắn\r\nGiúp nam giới quyến rũ hơn trong mắt của phụ nữ\r\nChuyển hóa cái cũ, mở đường cho cái mới\r\nGiúp hộ thể bảo vệ chống lại tà khí, âm khí và ma quỷ\r\nLà lá bùa hộ mệnh cho những bạn đi làm ăn xa hoặc trong những chuyến đi du lịch dài ngày.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n \r\n\r\nCân bằng và hài hòa cơ thể, loại bỏ sự tiêu cực\r\nXoa dịu phần nào cơn đau cho những người phụ nữ đang trong thời kỳ đang mang thai\r\nNóng sốt thì lăn và xoa nhiều lần trên chỗ cần giảm nhiệt độ\r\nGiảm các chứng đau tiêu hóa, như viêm dạ dày\r\nHỗ trợ trong điều trị các bệnh liên quan đến da, dị ứng da…\r\nHữu ích cho các mạch máu, và nó cũng có thể tăng cường cơ tim của bạn.\r\n \r\n\r\nCách bảo quản đá:\r\n\r\n \r\n\r\nAgate Superior khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp.\r\n \r\n\r\nNên tẩy uế, nạp lại năng lượng cho đá bằng cách : \r\n\r\n \r\n\r\nPhơi dưới ánh nắng mặt trời 2 – 4 giờ\r\nDùng vải mềm ( không đổ lông ) thấm ướt bằng rượu trắng hoặc nước muối tự nhiên ( muối mỏ, muối đá, muối hột ) lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1860000, 'MA-NAO-DEN-6ly.png'),
(12, 'VÒNG MÃ NÃO ĐEN\r\n\r\n(BLACK AGATE)', 'Sơ lược : \r\n\r\n \r\n\r\nMã não có tính đa sắc bao gồm đen, vàng, hồng, đỏ, xám, trắng và nâu…Một số loại Agate có màu sẫm đen, xám trong khi một số còn có các vết tích hóa thạch hoặc rắn. \r\n\r\nMã não được hình thành trong tất cả các môi trường khoáng vật, nhưng thường được tìm thấy nhiều nhất trong đá núi lửa. \r\n\r\nCái tên “Agate”, bắt nguồn từ tiếng Hy Lạp cổ “Achates” – có nghĩa là hạnh phúc.\r\n\r\nĐá mã não đen là một trong 7 báu vật được tôn thờ, coi trọng nhất. \r\n\r\n \r\n\r\nKhu vực được khai thác: Brazil, Mexico,  Ấn Độ, Madagascar, Hoa Kỳ, Namibia, Việt Nam ( Đắk Lăk, Đắk Nông, Lâm Đồng, Phú Yên….)\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7.0/ 10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\n \r\n\r\nThủy – Kim \r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nBảo vệ chống lại các năng lượng xấu tiêu cực từ ngoài môi trường\r\nBiểu tượng của May mắn sức khỏe, là viên đá Trường Thọ\r\nGiảm tính bảo thủ suy nghĩ tích cực\r\nGiúp bạn giảm căng thẳng, áp lực trong công việc mang lại sự bình an và may mắn\r\nGiúp nam giới quyến rũ hơn trong mắt của phụ nữ\r\nChuyển hóa cái cũ, mở đường cho cái mới\r\nGiúp hộ thể bảo vệ chống lại tà khí, âm khí và ma quỷ\r\nLà lá bùa hộ mệnh cho những bạn đi làm ăn xa hoặc trong những chuyến đi du lịch dài ngày.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n \r\n\r\nCân bằng và hài hòa cơ thể, loại bỏ sự tiêu cực\r\nXoa dịu phần nào cơn đau cho những người phụ nữ đang trong thời kỳ đang mang thai\r\nNóng sốt thì lăn và xoa nhiều lần trên chỗ cần giảm nhiệt độ\r\nGiảm các chứng đau tiêu hóa, như viêm dạ dày\r\nHỗ trợ trong điều trị các bệnh liên quan đến da, dị ứng da…\r\nHữu ích cho các mạch máu, và nó cũng có thể tăng cường cơ tim của bạn.\r\n \r\n\r\nCách bảo quản đá:\r\n\r\n \r\n\r\nAgate Superior khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp.\r\n \r\n\r\nNên tẩy uế, nạp lại năng lượng cho đá bằng cách : \r\n\r\n \r\n\r\nPhơi dưới ánh nắng mặt trời 2 – 4 giờ\r\nDùng vải mềm ( không đổ lông ) thấm ướt bằng rượu trắng hoặc nước muối tự nhiên ( muối mỏ, muối đá, muối hột ) lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1086000, 'MA-NAO-DEN-8ly.png'),
(13, 'VÒNG MÃ NÃO ĐEN\r\n\r\n(BLACK AGATE)', 'Sơ lược : \r\n\r\n \r\n\r\nMã não có tính đa sắc bao gồm đen, vàng, hồng, đỏ, xám, trắng và nâu…Một số loại Agate có màu sẫm đen, xám trong khi một số còn có các vết tích hóa thạch hoặc rắn. \r\n\r\nMã não được hình thành trong tất cả các môi trường khoáng vật, nhưng thường được tìm thấy nhiều nhất trong đá núi lửa. \r\n\r\nCái tên “Agate”, bắt nguồn từ tiếng Hy Lạp cổ “Achates” – có nghĩa là hạnh phúc.\r\n\r\nĐá mã não đen là một trong 7 báu vật được tôn thờ, coi trọng nhất. \r\n\r\n \r\n\r\nKhu vực được khai thác: Brazil, Mexico,  Ấn Độ, Madagascar, Hoa Kỳ, Namibia, Việt Nam ( Đắk Lăk, Đắk Nông, Lâm Đồng, Phú Yên….)\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7.0/ 10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\n \r\n\r\nThủy – Kim \r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nBảo vệ chống lại các năng lượng xấu tiêu cực từ ngoài môi trường\r\nBiểu tượng của May mắn sức khỏe, là viên đá Trường Thọ\r\nGiảm tính bảo thủ suy nghĩ tích cực\r\nGiúp bạn giảm căng thẳng, áp lực trong công việc mang lại sự bình an và may mắn\r\nGiúp nam giới quyến rũ hơn trong mắt của phụ nữ\r\nChuyển hóa cái cũ, mở đường cho cái mới\r\nGiúp hộ thể bảo vệ chống lại tà khí, âm khí và ma quỷ\r\nLà lá bùa hộ mệnh cho những bạn đi làm ăn xa hoặc trong những chuyến đi du lịch dài ngày.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n \r\n\r\nCân bằng và hài hòa cơ thể, loại bỏ sự tiêu cực\r\nXoa dịu phần nào cơn đau cho những người phụ nữ đang trong thời kỳ đang mang thai\r\nNóng sốt thì lăn và xoa nhiều lần trên chỗ cần giảm nhiệt độ\r\nGiảm các chứng đau tiêu hóa, như viêm dạ dày\r\nHỗ trợ trong điều trị các bệnh liên quan đến da, dị ứng da…\r\nHữu ích cho các mạch máu, và nó cũng có thể tăng cường cơ tim của bạn.\r\n \r\n\r\nCách bảo quản đá:\r\n\r\n \r\n\r\nAgate Superior khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp.\r\n \r\n\r\nNên tẩy uế, nạp lại năng lượng cho đá bằng cách : \r\n\r\n \r\n\r\nPhơi dưới ánh nắng mặt trời 2 – 4 giờ\r\nDùng vải mềm ( không đổ lông ) thấm ướt bằng rượu trắng hoặc nước muối tự nhiên ( muối mỏ, muối đá, muối hột ) lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1086000, 'MA-NAO-DEN-10ly.png')
(14, 'HỔ PHÁCH (AMBER)', 'Sơ lược :\r\n\r\n Hổ phách (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách… thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ Phách được hình thành từ quá trình hóa thạch của nhựa cây (chủ yếu là nhựa cây Thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, …\r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\n \r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,…\r\n\r\nThành phần: C40H64O4\r\n\r\nĐộ cứng thang Mohs: 2 – 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành\r\n\r\n Hổ Phách được xem như là vật dung hòa của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thủy), phát ánh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hỏa) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n Tác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng.\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một “tinh thể” tẩy uế.\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ.\r\nNgười xưa thường đeo vòng hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hóa, có thể khử đi các gốc tự do đang phá hủy tế bào.\r\nPhục hồi thần kinh và tăng cường hệ miễn dịch để chống lại nhiễm trùng\r\nKhi được tiếp xúc trực tiếp với da, độ ẩm của da sẽ làm những tinh dầu tự nhiên của hổ phách thấm vào da, giúp tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, … \r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 4070000, 'HP-MAT-ONG-SEN.png'),
(15, 'HỔ PHÁCH (AMBER)', 'Sơ lược :\r\n\r\n Hổ phách (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách… thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ Phách được hình thành từ quá trình hóa thạch của nhựa cây (chủ yếu là nhựa cây Thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, …\r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\n \r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,…\r\n\r\nThành phần: C40H64O4\r\n\r\nĐộ cứng thang Mohs: 2 – 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành\r\n\r\n Hổ Phách được xem như là vật dung hòa của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thủy), phát ánh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hỏa) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n Tác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng.\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một “tinh thể” tẩy uế.\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ.\r\nNgười xưa thường đeo vòng hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hóa, có thể khử đi các gốc tự do đang phá hủy tế bào.\r\nPhục hồi thần kinh và tăng cường hệ miễn dịch để chống lại nhiễm trùng\r\nKhi được tiếp xúc trực tiếp với da, độ ẩm của da sẽ làm những tinh dầu tự nhiên của hổ phách thấm vào da, giúp tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, … \r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 3045000, 'HP-DO-TRON.png'),
(16, 'HỔ PHÁCH (AMBER)', 'Sơ lược :\r\n\r\n Hổ phách (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách… thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ Phách được hình thành từ quá trình hóa thạch của nhựa cây (chủ yếu là nhựa cây Thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, …\r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\n \r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,…\r\n\r\nThành phần: C40H64O4\r\n\r\nĐộ cứng thang Mohs: 2 – 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành\r\n\r\n Hổ Phách được xem như là vật dung hòa của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thủy), phát ánh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hỏa) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n Tác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng.\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một “tinh thể” tẩy uế.\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ.\r\nNgười xưa thường đeo vòng hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hóa, có thể khử đi các gốc tự do đang phá hủy tế bào.\r\nPhục hồi thần kinh và tăng cường hệ miễn dịch để chống lại nhiễm trùng\r\nKhi được tiếp xúc trực tiếp với da, độ ẩm của da sẽ làm những tinh dầu tự nhiên của hổ phách thấm vào da, giúp tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, … \r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 4460000, 'HP-CHERRY-NGOC-BOI.png'),
(17, 'HỔ PHÁCH (AMBER)', 'Sơ lược :\r\n\r\n Hổ phách (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách… thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ Phách được hình thành từ quá trình hóa thạch của nhựa cây (chủ yếu là nhựa cây Thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, …\r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\n \r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,…\r\n\r\nThành phần: C40H64O4\r\n\r\nĐộ cứng thang Mohs: 2 – 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành\r\n\r\n Hổ Phách được xem như là vật dung hòa của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thủy), phát ánh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hỏa) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n Tác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng.\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một “tinh thể” tẩy uế.\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ.\r\nNgười xưa thường đeo vòng hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hóa, có thể khử đi các gốc tự do đang phá hủy tế bào.\r\nPhục hồi thần kinh và tăng cường hệ miễn dịch để chống lại nhiễm trùng\r\nKhi được tiếp xúc trực tiếp với da, độ ẩm của da sẽ làm những tinh dầu tự nhiên của hổ phách thấm vào da, giúp tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, … \r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 4530000, 'HP-CHERRY-MAT-DOI.png'),
(18, 'VÒNG HỔ PHÁCH MẬT LẠP', 'Sơ lược:\r\n\r\nHổ pháp (Amber) hay còn có tên gọi khác là: Hồng tùng chi, minh phách...thực chất không phải là một loại đá quý như những loại đá được hình thành trong lòng đất. Hổ phách được hình thành từ quá trình hoá thạch của nhựa cây (chủ yếu là nhựa cây thông) trải qua hàng triệu đến hàng trăm triệu năm. Hổ phách có các màu phổ biến như: màu vàng và vàng óng, vàng cam, đỏ, .... \r\n\r\nCái tên Hổ phách được đặt ra bởi trong truyền thuyết của Trung Quốc cổ đại, Hổ phách là hồn phách của con hổ. Từ xa xưa, Hổ phách đã là bảo vật quý giá, bởi Hổ phách là nhựa cây thông, mà cây thông tại Trung Quốc tượng trưng cho trường thọ.\r\n\r\nKhu vực được khai thác: Vùng Baltic, Ba Lan, Nga, Úc, Trung Quốc, Áo, Đức, Ý, Mỹ,...\r\n\r\nThành phần: C40H6404\r\n\r\nĐộ cứng thang Mohs: 2 - 2.5\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCân bằng ngũ hành \r\n\r\nHổ phách được xem như là vật dung hoà của cả ngũ hành. Xuất phát từ cây (Mộc), có dòng chảy như máu huyết (Thuỷ), phát ra anh sáng vàng kim (Kim). Chịu sức nóng từ Trái đất để trở nên cứng cáp (Hoả) và ẩn sâu dưới lòng đất lâu ngày (Thổ).\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nGia tăng sự tự tin và đem đến may mắn cho người sử dụng\r\nCó khả năng hấp thu những rung động tiêu cực, được xem là một "tinh thể" tấy uế\r\nHổ phách ứng với luân xa số 5 cổ họng, thường được dùng cho gan và thận.\r\nHổ phách giúp cân bằng và ổn định cảm xúc cho thân chủ\r\nNgười xưa thuong đeo vòng Hổ phách cho trẻ em như một lá bùa hộ mệnh giúp trẻ em được bình an và giữ an toàn cho trẻ em tránh khỏi ma quỷ, tà ám và nguy hiểm.\r\n\r\nTác dụng sức khoẻ:\r\n\r\nTrong y học cổ truyền Trung Quốc hổ phách để xoa dịu kinh mạch, lưu thông khí huyết.\r\nGiúp an thần, ngủ ngon, chữa mất ngủ, phòng ngừa nguy cơ đột quỵ, tai biến.\r\nHỗ trợ tốt điều trị trầm cảm.\r\nTrẻ con mang có thể tránh bệnh tật ốm đau, phụ nữ mang có thể an thai, thuận lợi sinh sản.\r\nGiàu chất chống oxy hoá, có thể khử đi các gốc tự do đang phá huỷ tế bào.\r\nPhục hồi thần kinh và tăng cường sức khỏe cho người đeo.\r\nThuộc tính chữa bệnh vật lý: Giảm cân, hen suyễn, tuyến giáp, xương khớp, giải độc, nhức đầu, tim mạch, tăng cường sinh lực, …\r\n\r\nCách bảo quản hổ phách:\r\n\r\n(lưu ý oxi và tác động môi trường có thể làm màu sắc hổ phách biến đổi theo thời gian.)\r\n\r\nChú ý tránh khu vực có độ ẩm hoặc nhiệt độ quá cao hoặc quá thấp để giúp ngăn ngừa xỉn màu, phá hủy cấu trúc của hổ phách. Không mang theo vòng hổ phách khi tắm nước nóng, phòng tắm hơi, …\r\nTránh tiếp xúc trực tiếp keo xịt tóc, nước hoa, chất tẩy rửa lên bề mặt hổ phách vì khi dính vào sẽ làm mất đi vẻ sáng bóng.\r\nHổ phách không phải là viên đá phù hợp đeo cho tất cả các hoạt động trong ngày, Nếu cảm thấy các sinh hoạt sắp tới không bảo vệ được hổ phách, bạn nên tháo gỡ và cất chúng vào túi mềm hoặc hộp kín để bảo quản.\r\nCẩn thận không làm rơi, để chung với các trang sức khác dễ gây trầy xước hoặc làm hỏng bề mặt hổ phách. Do hổ phách tương đối mềm.', 3755000, 'HP-VANG-DONG-TIEN.png');

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showrooms`
--

INSERT INTO `showrooms` (`address`) VALUES
('280 E10 Lương Định Của, P. An Phú, Q.2, TP HCM (có chỗ đậu ô tô)'),
('61C Phan Đình Phùng, P. 17, Q.Phú Nhuận, TP HCM (có chỗ đậu ô tô theo khung giờ 9 am - 2pm và sau 8 pm)'),
('Tầng 2, chung cư 42 Nguyễn Huệ, P. Bến Nghé, Q.1, TP HCM (có chỗ đậu ô tô trên đường Mạc Thị Bưởi)'),
('91 Xuân Thủy, P. Thảo Điền, Q. 2, TP HCM (khuôn viên cà phê Cộng - có chỗ đậu ô tô)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createtime` varchar(255) NOT NULL,
  `imgUrl` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `email`, `phone`, `address`, `password`, `createtime`, `imgUrl`, `status`) VALUES
('kieuhoang', 'Linh Kieu', 'linhkieukute@gmail.com', '0901491633', 'Bảo Lộc', 'kieuverykute', '2022-12-01 14:55:29', 'kieu.jpg', 'active'),
('trungtran93', 'Tran Viet Trung', 'trungtran93@gmail.com', '0396727532', 'Bình Phước', 'viettrung', '2022-12-01 10:16:03', 'defaultavatar.png', 'banned'),
('duytran', 'Duy', 'duytran@gmail.com', '0901491234', 'Đà Lạt', 'duy123', '2022-12-01 19:53:22', 'defaultavatar.png', 'banned'),
('duong', 'Duong', 'duong@gmail.com', '0901456789', 'Hà Nội', 'duong1234', '2022-12-01 19:54:35', 'defaultavatar.png', 'banned');

--
-- Table structure for table `blog`
--
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` varchar(80) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `img` varchar(80) NOT NULL,
  `url` varchar(1000) UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--
INSERT INTO `blog` (`id`,`date`,`description`,`img`, `url`) VALUES
(1,'Tháng Một 6, 2021','Không có gì ngoài điều kiện: Việt Hương lì xì Huỳnh Lập 117 triệu để lấy hên đầu năm 2021','hinh1.jpeg',NULL),
(2,'Tháng Mười Một 21, 2020','TINH LÂM JW – ĐỒNG HÀNH CÙNG NGHỆ SĨ VIỆT','hinh2.jpg',NULL),
(3,'Tháng Mười 9, 2020','Nghề Tay Trái – Huỳnh Lập: \"Giữ vững đam mê nghệ thuật và kinh doanh\"','hinh3.jpg',NULL),
(4,'Tháng Chín 19, 2020','Đại Nghĩa, Thu Trang nhiệt tình ủng hộ showroom đá phong thủy Tinh Lâm của Huỳnh Lập','hinh4.jpg',NULL),
(5,'Tháng Chín 19, 2020','Đồng nghiệp ủng hộ Huỳnh Lập bán đá phong thủy','3.jpg',NULL),
(6,'Tháng Chín 19, 2020','Huỳnh Lập lên chức ông chủ, dàn sao Vbiz khủng nườm nượp đến chúc mừng','5.jpg',NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username_constraint` (`username`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_constraint` (`product_id`),
  ADD KEY `order_id_constraint` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`address`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--

-- AUTO_INCREMENT for dumped tables
--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--

-- AUTO_INCREMENT for table `blog`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `username_constraint` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_id_constraint` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_id_constraint` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
