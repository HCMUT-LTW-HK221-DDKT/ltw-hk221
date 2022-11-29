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
('admin', 'admin123');

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
(1, 'tinhlamjw3@gmail.com', '1900292916');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(13) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` char(13) NOT NULL
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
(1, 'VÒNG ƯU LINH NGŨ SẮC', 'Sơ lược:\r\n\r\nĐá ưu linh hay thạch anh ưu linh là 1 biến thể độc đáo của đá thạch anh, tên quốc tế là Phantom Quartz. Đá ưu linh còn có cái tên khác là thạch anh rêu bởi trong nó có những tinh thể giống như rêu vậy. Những tinh thể rêu này nhìn như phong cảnh dưới nước, có nhiều hình thù khác nhau do được mẹ thiên nhiên nặn ra sau hàng triệu năm. Do đó trong tiếng anh, đá ưu linh còn có cái tên khác như: Scenic Quartz, Landscape Quartz hay Garden Quartz. Thạch anh ưu linh có nhiều loại khác nhau như: đá ưu linh xanh, đá ưu linh đỏ, đá ưu trắng,…\r\n\r\nKhu vực được khai thác: Nga, Brazil, Đức\r\n\r\nThành phần: SiO2 và tạp chất Feldspar, Chlorite\r\n\r\nĐộ cứng thang Mohs: 7.0/10\r\n\r\nĐá ưu linh xanh: là viên đá chiêu tài, giúp thân chủ thu hút tài sản, cơ hội và phát triển sự nghiệp\r\nĐá ưu linh đỏ: giúp thân chủ có tư duy logic sâu sắc, đồng thời cũng tăng cường tính bao dung của con người\r\nĐá ưu linh trắng: giúp thanh lọc tâm hồn, giúp thân chủ quên đi những niềm đau, kí ức không vui trong cuộc sống\r\nĐá ưu linh vàng: chiêu tài, tăng cường tinh thần của thân chủ\r\nĐá ưu linh tím: giúp tăng cường mối quan hệ, giúp thân thân chủ gặp được quý nhân. Đây là viên đá rất tốt cho những người mới chuyển công việc sang 1 nơi khác\r\n\r\nTác dụng sức khoẻ:\r\n\r\nĐược ví như viên thuốc kháng sinh có thể tăng cường hệ thống miễn dịch giúp tăng sức đề kháng. Chống viêm nhiễm phục hồi nhanh các vết thương ngoài da\r\nNâng cao sức khỏe, tăng tuần hoàn máu, giảm áp lực và ngăn ngừa các bệnh tật cũng như khả năng đột quỵ tốt cho những người lớn tuổi\r\nĐá thạch anh ưu linh có thể làm dịu đôi mắt mệt mỏi, hỗ trợ điều trị các tình trạng liên quan đến mắt\r\nNgoài ra, thạch anh ưu linh còn được dùng trong hỗ trợ điều trị các vấn đề liên quan đến thần kinh như lo âu, đau đầu, mất ngủ,…giúp giảm tình trạng căng thẳng, trầm uất\r\nGiúp bạn ngủ ngon, ngủ sâu.\r\n\r\nCách bảo quản đá:\r\n\r\nKhi làm việc nặng thì nên bỏ vòng tay\r\nTránh để vòng tay tiếp xúc nhiều với mỹ phẩm, các chất tẩy rửa mạnh\r\nKhông nên phơi ưu linh thời gian dài dưới ánh nắng mạnh vì ánh sáng mạnh có thể làm phai màu ưu linh\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch hoặc phơi đá ưu linh dưới 1 đêm trăng rằm là bạn đã tẩy uế và sạc lại năng lượng cho đá', 4900000, '6d4619be47.jpeg'),
(2, 'VÒNG ƯU LINH NGŨ SẮC XANH', 'Sơ lược:\r\n\r\nĐá ưu linh hay thạch anh ưu linh là 1 biến thể độc đáo của đá thạch anh, tên quốc tế là Phantom Quartz. Đá ưu linh còn có cái tên khác là thạch anh rêu bởi trong nó có những tinh thể giống như rêu vậy. Những tinh thể rêu này nhìn như phong cảnh dưới nước, có nhiều hình thù khác nhau do được mẹ thiên nhiên nặn ra sau hàng triệu năm. Do đó trong tiếng anh, đá ưu linh còn có cái tên khác như: Scenic Quartz, Landscape Quartz hay Garden Quartz. Thạch anh ưu linh có nhiều loại khác nhau như: đá ưu linh xanh, đá ưu linh đỏ, đá ưu trắng,…\r\n\r\nKhu vực được khai thác: Nga, Brazil, Đức\r\n\r\nThành phần: SiO2 và tạp chất Feldspar, Chlorite\r\n\r\nĐộ cứng thang Mohs: 7.0/10\r\n\r\nĐá ưu linh xanh: là viên đá chiêu tài, giúp thân chủ thu hút tài sản, cơ hội và phát triển sự nghiệp\r\nĐá ưu linh đỏ: giúp thân chủ có tư duy logic sâu sắc, đồng thời cũng tăng cường tính bao dung của con người\r\nĐá ưu linh trắng: giúp thanh lọc tâm hồn, giúp thân chủ quên đi những niềm đau, kí ức không vui trong cuộc sống\r\nĐá ưu linh vàng: chiêu tài, tăng cường tinh thần của thân chủ\r\nĐá ưu linh tím: giúp tăng cường mối quan hệ, giúp thân thân chủ gặp được quý nhân. Đây là viên đá rất tốt cho những người mới chuyển công việc sang 1 nơi khác\r\n\r\nTác dụng sức khoẻ:\r\n\r\nĐược ví như viên thuốc kháng sinh có thể tăng cường hệ thống miễn dịch giúp tăng sức đề kháng. Chống viêm nhiễm phục hồi nhanh các vết thương ngoài da\r\nNâng cao sức khỏe, tăng tuần hoàn máu, giảm áp lực và ngăn ngừa các bệnh tật cũng như khả năng đột quỵ tốt cho những người lớn tuổi\r\nĐá thạch anh ưu linh có thể làm dịu đôi mắt mệt mỏi, hỗ trợ điều trị các tình trạng liên quan đến mắt\r\nNgoài ra, thạch anh ưu linh còn được dùng trong hỗ trợ điều trị các vấn đề liên quan đến thần kinh như lo âu, đau đầu, mất ngủ,…giúp giảm tình trạng căng thẳng, trầm uất\r\nGiúp bạn ngủ ngon, ngủ sâu.\r\n\r\nCách bảo quản đá:\r\n\r\nKhi làm việc nặng thì nên bỏ vòng tay\r\nTránh để vòng tay tiếp xúc nhiều với mỹ phẩm, các chất tẩy rửa mạnh\r\nKhông nên phơi ưu linh thời gian dài dưới ánh nắng mạnh vì ánh sáng mạnh có thể làm phai màu ưu linh\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch hoặc phơi đá ưu linh dưới 1 đêm trăng rằm là bạn đã tẩy uế và sạc lại năng lượng cho đá', 4700000, '2e35f3ae33.jpeg'),
(3, 'VÒNG ƯU LINH NGŨ SẮC ĐỎ', 'Sơ lược:\r\n\r\nĐá ưu linh hay thạch anh ưu linh là 1 biến thể độc đáo của đá thạch anh, tên quốc tế là Phantom Quartz. Đá ưu linh còn có cái tên khác là thạch anh rêu bởi trong nó có những tinh thể giống như rêu vậy. Những tinh thể rêu này nhìn như phong cảnh dưới nước, có nhiều hình thù khác nhau do được mẹ thiên nhiên nặn ra sau hàng triệu năm. Do đó trong tiếng anh, đá ưu linh còn có cái tên khác như: Scenic Quartz, Landscape Quartz hay Garden Quartz. Thạch anh ưu linh có nhiều loại khác nhau như: đá ưu linh xanh, đá ưu linh đỏ, đá ưu trắng,…\r\n\r\nKhu vực được khai thác: Nga, Brazil, Đức\r\n\r\nThành phần: SiO2 và tạp chất Feldspar, Chlorite\r\n\r\nĐộ cứng thang Mohs: 7.0/10\r\n\r\nĐá ưu linh xanh: là viên đá chiêu tài, giúp thân chủ thu hút tài sản, cơ hội và phát triển sự nghiệp\r\nĐá ưu linh đỏ: giúp thân chủ có tư duy logic sâu sắc, đồng thời cũng tăng cường tính bao dung của con người\r\nĐá ưu linh trắng: giúp thanh lọc tâm hồn, giúp thân chủ quên đi những niềm đau, kí ức không vui trong cuộc sống\r\nĐá ưu linh vàng: chiêu tài, tăng cường tinh thần của thân chủ\r\nĐá ưu linh tím: giúp tăng cường mối quan hệ, giúp thân thân chủ gặp được quý nhân. Đây là viên đá rất tốt cho những người mới chuyển công việc sang 1 nơi khác\r\n\r\nTác dụng sức khoẻ:\r\n\r\nĐược ví như viên thuốc kháng sinh có thể tăng cường hệ thống miễn dịch giúp tăng sức đề kháng. Chống viêm nhiễm phục hồi nhanh các vết thương ngoài da\r\nNâng cao sức khỏe, tăng tuần hoàn máu, giảm áp lực và ngăn ngừa các bệnh tật cũng như khả năng đột quỵ tốt cho những người lớn tuổi\r\nĐá thạch anh ưu linh có thể làm dịu đôi mắt mệt mỏi, hỗ trợ điều trị các tình trạng liên quan đến mắt\r\nNgoài ra, thạch anh ưu linh còn được dùng trong hỗ trợ điều trị các vấn đề liên quan đến thần kinh như lo âu, đau đầu, mất ngủ,…giúp giảm tình trạng căng thẳng, trầm uất\r\nGiúp bạn ngủ ngon, ngủ sâu.\r\n\r\nCách bảo quản đá:\r\n\r\nKhi làm việc nặng thì nên bỏ vòng tay\r\nTránh để vòng tay tiếp xúc nhiều với mỹ phẩm, các chất tẩy rửa mạnh\r\nKhông nên phơi ưu linh thời gian dài dưới ánh nắng mạnh vì ánh sáng mạnh có thể làm phai màu ưu linh\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch hoặc phơi đá ưu linh dưới 1 đêm trăng rằm là bạn đã tẩy uế và sạc lại năng lượng cho đá', 4800000, 'a262bf10ed.jpeg'),
(4, 'VÒNG GARNET SAO', 'Sơ lược : \r\n\r\nĐá Garnet hay Granat là 1 loại đá quý có lịch sử lâu đời trong khoáng sản học, thường được biết đến với cái tên Ngọc hồng lựu bởi màu đỏ của nó giống như quả lựu. Có khoảng 20 loại khác nhau như: Almandine, Rhodolite, Spessartine, Hessonite, Tsavorite, Demantoid,…mà ở Việt Nam người ta hay gọi dân dã là đá Garnet đỏ, Garnet nâu, Garnet xanh, Garnet vàng, Garnet đen hay Garnet sao. Garnet từng là biểu tượng đại diện cho mặt trời.\r\n\r\n \r\n\r\nKhu vực được khai thác: Úc, Áo, Mỹ, Nga, Nhật, Đức,…Việt Nam ( Cao Bằng, Nghệ An, Lâm Đồng )\r\n\r\n \r\n\r\nThành phần: X3Z2(SiO4)3 với X = Ca, Fe,…Z = Al, Cr,…\r\n\r\nĐộ cứng thang Mohs: 6.5 – 7.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nHoả  – Thổ \r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\nChữa trầm cảm, bảo vệ con người chống lại những giấc mơ xấu .\r\nLà một món quà của tình yêu và gắn liền với sự vĩnh hằng.\r\nĐược mọi người mang theo bên mình như một lá bùa bảo vệ\r\nGiúp giải thoát nỗi buồn và sự u sầu.\r\nTăng cường năng lượng cơ thể\r\nGiúp người đeo chống lại sự u sầu và cảnh báo những linh hồn xấu xa, đặc biệt là những linh hồn của màn đêm.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\nĐặc tính nổi bật nhất của Garnet là thanh lọc và tốt cho hệ tuần hoàn, tăng cường sự trao đổi chất, cải thiện nhịp tim và các vấn đề thể chất liên quan đến máu.\r\nGiúp người phụ nữ đang mang thai có tâm trạng thoải mái, chống bị trầm cảm và dễ sinh nở hơn\r\n Tác dụng tích cực đối với hệ tiêu hoá, hệ hô hấp, tuần hoàn và hệ thống miễn dịch\r\nTác động tích cực tới luân xa số 1 giúp chủ nhân cảm thấy khỏe khoắn, tỉnh táo và tràn đầy sinh lực.\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm, và cho vào hộp\r\nKhi sử dụng 1 thời gian, đá Garnet bị bám bụi, lúc này bạn có thể dùng khăn sạch thấm rượu trắng nhẹ nhàng vệ sinh cho đá. Hoặc có thể làm sạch ngọc Garnet với nước xà phòng ấm và bàn chải mềm.', 2470000, 'a7fb7a855a.jpg'),
(5, 'VÒNG THẠCH ANH DÂU TÂY XANH', 'Sơ lược :\r\n\r\nXanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.\r\n\r\n \r\n\r\nKhu vực được khai thác: Nga, Brazil, Đức, Việt Nam ( Nam Thanh Hóa,Vạn Yên, Bảo Lộc, Gia Nghĩa ),…\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7 – 7.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nHỏa – Mộc\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nMang lại sự thoải mái, năng lượng dương tích cực và lành mạnh\r\nBiểu tượng cho sức sống, niềm tin và hy vọng\r\nThu hút các mối quan hệ, gắn kết, hóa thù thành bạn\r\nGiúp tình yêu trở nên cởi mở, tràn đầy năng lượng và nhiệt huyết.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nGiúp người mang tràn đầy năng lượng, lưu thông khí huyết\r\nRất tốt đối với hệ thần kinh và tim mạch\r\nBảo vệ người mang từ những tia tù trường bức xạ xấu.\r\nCách bảo quản thạch anh dâu xanh :\r\n\r\nThạch anh khá bền và có khả năng chống hao mòn nhưng :\r\n\r\nNhạy cảm với một số axit\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nBảo quản vòng tay thì hãy để riêng, không chung đụng với các loại trang sức đá quý khác\r\nVệ sinh vòng tay bằng cách dùng khăn mềm ( không đổ lông ) thấm nước muối tự nhiên ( muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá.\r\n \r\n\r\nTiếp thêm năng lượng cho đá bằng cách :\r\n\r\nPhơi dưới ánh nắng mặt trời – ánh trăng 24 → 72h\r\nDùng khăn mềm ngâm qua rượu trắng lau nhẹ nhàng rồi lau lại bằng nước sạch.', 1823000, '732d7135f5.jpg'),
(6, 'VÒNG MOONSTONE', 'Sơ lược :\r\n\r\nĐá mặt trăng hay Moonstone, là 1 loại đá quý thuộc nhóm Fenspat Kali. Moonstone phát ánh sáng trắng xanh mờ ảo giống như vầng trăng. Hiện tượng quang học lung linh của đá mặt trăng được các nhà khoa học đặt tên là “Adulares Age” – Ánh xà cừ\r\n\r\nMoonstone là viên đá thiêng liêng của người Ấn Độ\r\n\r\nNgười La Mã cổ đại thì tin mỗi viên đá Moonstone tượng trưng cho 1 hình ảnh của Nữ thần mặt trăng – Diana.\r\n\r\n \r\n\r\nKhu vực được khai thác: nhiều nhất ở Srilanka, được khai thác đáng kể ở Ấn Độ, Brazil, Myanmar, Madagascar, Mexico, Na Uy, Thụy Sĩ, Tanzania và Hoa Kỳ\r\n\r\n \r\n\r\nPhân bố ở Việt Nam: Không\r\n\r\n \r\n\r\nThành phần: (Na,K)AlSi3O8\r\n\r\nĐộ cứng thang Mohs: 6.0 – 6.5 / 10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nKim – Thủy\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nGiúp phá tan đi tiêu cực, cởi mở tâm trí\r\nGiúp 2 người hiểu nhau hơn, để tình cảm càng thêm hòa hợp, đằm thắm hạnh phúc\r\nTăng thêm sự nhận thức sâu sắc khi kết hợp với thiền, nó giúp con người đi về thế giới nội tâm của mình, cảm nhận rõ ràng sự thay đổi của cảm xúc bản thân\r\nTác động tới luân xa vương miện – Sahasrara, giúp con người củng cố tinh thần, có thái độ bình tĩnh khi đối mặt với thất bại trong cuộc sống.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nCó lợi cho sức khỏe sinh sản của nữ giới, giảm các vấn đề về chu kỳ kinh nguyệt, giúp cân bằng nội tiết tố. Cực kì hiệu quả và phù hợp với phụ nữ đang mang thai và mới sinh nở\r\nGiúp dễ ngủ, phòng ngừa mộng du, cải thiện làn da và tinh thần\r\nHỗ trợ quá trình giảm béo.\r\n \r\n\r\nCách bảo quản đá mặt trăng :\r\n\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nào nặng nhọc\r\nBảo quản riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp\r\nCần nạp lại năng lượng cho Moonstone bằng cách phơi dưới đêm trăng rằm để nó có thể hấp thu tinh hoa của mặt trăng và đất trời.', 3430000, '5985cdc664.jpg'),
(7, 'VÒNG MẮT HỔ VÀNG TÂM', 'Sơ lược :\r\n\r\nĐá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.\r\n\r\n \r\n\r\nKhu vực được khai thác: Australia, Trung Quốc, Namibia, Nam Phi, Anh, Mỹ, miền Trung (VN),…\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5  – 7/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nKim – Thủy\r\n\r\nTác dụng tinh thần:\r\n\r\n–  Là vật hộ mệnh trừ tà, bảo vệ người đeo khỏi những tà ma, âm khí, mang đến bình an, may mắn\r\n\r\n– Tăng tốc sự hình thành mọi thứ (sự nghiệp, tình yêu…)\r\n\r\n– Là “viên đá dũng khí”,  kích thích lòng can đảm, mang lại sự tự tin và cái nhìn tích cực trong cuộc sống\r\n\r\n– Tăng cường sinh khí, kích thích niềm tin để đối mặt với khó khăn, thử thách.\r\n\r\n \r\n\r\nTác dụng sức khoẻ: .\r\n\r\n– Thanh lọc và điều chỉnh thân thể với những người ăn uống rượu chè quá độ\r\n\r\n– Cải thiện các triệu chứng cảm lạnh, hen suyễn hay viêm phế quản\r\n\r\n– Giảm các vấn đề về xương khớp, rất phù hợp với dân văn phòng hiện nay\r\n\r\n– Hỗ trợ điều trị về các vấn đề của dạ dày, đường ruột.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nĐá mắt hổ vàng nâu khá bền và có khả năng chống hao mòn nhưng :\r\n\r\n– Nhạy cảm với một số axit\r\n\r\n– Tránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\n\r\n– Bảo quản vòng tay thì hãy để riêng, không chung đụng với các loại trang sức đá quý khác\r\n\r\n– Vệ sinh vòng tay bằng cách dùng khăn mềm ( không đổ lông ) thấm nước muối tự nhiên ( muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá\r\n\r\n– Tiếp thêm năng lượng cho đá bằng cách phơi dưới ánh nắng mặt trời – ánh trăng 24 → 72h.', 3248000, '57fa7aeb2f.jpg'),
(8, 'VÒNG MẮT HỔ VÀNG NÂU', 'Sơ lược :\r\n\r\nĐá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.\r\n\r\n \r\n\r\nKhu vực được khai thác: Australia, Trung Quốc, Namibia, Nam Phi, Anh, Mỹ, miền Trung (VN),…\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5  – 7/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nKim – Thổ\r\n\r\nTác dụng tinh thần:\r\n\r\n–  Là vật hộ mệnh trừ tà, bảo vệ người đeo khỏi những tà ma, âm khí, mang đến bình an, may mắn\r\n\r\n– Tăng tốc sự hình thành mọi thứ (sự nghiệp, tình yêu…)\r\n\r\n– Là “viên đá dũng khí”,  kích thích lòng can đảm, mang lại sự tự tin và cái nhìn tích cực trong cuộc sống\r\n\r\n– Tăng cường sinh khí, kích thích niềm tin để đối mặt với khó khăn, thử thách.\r\n\r\n \r\n\r\nTác dụng sức khoẻ: .\r\n\r\n– Thanh lọc và điều chỉnh thân thể với những người ăn uống rượu chè quá độ\r\n\r\n– Cải thiện các triệu chứng cảm lạnh, hen suyễn hay viêm phế quản\r\n\r\n– Giảm các vấn đề về xương khớp, rất phù hợp với dân văn phòng hiện nay\r\n\r\n– Hỗ trợ điều trị về các vấn đề của dạ dày, đường ruột.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nĐá mắt hổ vàng nâu khá bền và có khả năng chống hao mòn nhưng :\r\n\r\n– Nhạy cảm với một số axit\r\n\r\n– Tránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\n\r\n– Bảo quản vòng tay thì hãy để riêng, không chung đụng với các loại trang sức đá quý khác\r\n\r\n– Vệ sinh vòng tay bằng cách dùng khăn mềm ( không đổ lông ) thấm nước muối tự nhiên ( muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá\r\n\r\n– Tiếp thêm năng lượng cho đá bằng cách phơi dưới ánh nắng mặt trời – ánh trăng 24 → 72h.', 1096000, '72185b755f.jpg'),
(9, 'VÒNG MẮT HỔ TAM TÀI', 'Sơ lược :\r\n\r\nĐá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh khi thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.\r\n\r\n \r\n\r\nKhu vực được khai thác : Australia, Trung Quốc, Namibia, Nam Phi, Anh, Mỹ, miền Trung (VN),…\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\n \r\n\r\nĐộ cứng thang Mohs : 5 – 7/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nCÂN BẰNG NGŨ HÀNH\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\n– Là viên đá mang lại may mắn tốt cho các doanh nhân hoặc những người mới bước vào thế giới kinh doanh lần đầu tiên\r\n\r\n– Xóa bỏ sợ hãi, lo lắng và chứng mắc bệnh hoang tưởng,mang đến sự minh mẫn, kích thích lòng tin, dũng khí…, nâng cao năng lực hành động, dám đương đầu với khó khăn thử thách\r\n\r\n– Hỗ trợ điều trị bệnh tâm lý, giúp con người cân bằng được cảm xúc, tâm lý luôn ổn định, cảm xúc cân bằng trong cuộc sống\r\n\r\n– Tác động trực tiếp đến luân xa 6 (luân xa thái dương), giúp đầu óc luôn minh mẫn.\r\n\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\n– Ổn định huyết áp, tăng cường hệ miễn dịch, cân bằng hệ nội tiết.\r\n\r\n– Giúp cho luân xa thái dương có được nguồn năng lượng mạnh.\r\n\r\n– Hỗ trợ điều trị gãy xương, chuột rút và đau nhức cơ bắp, suy nhược cơ thể, thiếu máu, xoang, cột sống và cổ\r\n\r\n– Hấp thụ chất dinh dưỡng và vitamin tốt hơn. Rất tốt cho thị giác, cải thiện độ tập trung.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nĐá mắt hổ tam tài khá bền và có khả năng chống hao mòn nhưng :\r\n\r\n– Nhạy cảm với một số axit\r\n\r\n– Tránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\n\r\n– Bảo quản vòng tay thì hãy để riêng, không chung đụng với các loại trang sức đá quý khác\r\n\r\n– Vệ sinh vòng tay bằng cách dùng khăn mềm ( không đổ lông ) thấm nước muối tự nhiên ( muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá\r\n\r\n– Tiếp thêm năng lượng cho đá bằng cách phơi dưới ánh nắng mặt trời – ánh trăng 24 → 72h.', 2730000, 'dc9661d0c1.jpg'),
(10, 'VÒNG MẮT DIỀU HÂU', 'Sơ lược :\r\n\r\nĐá mắt diều hâu có gốc từ đá mắt hổ màu xanh xám hoặc xanh lam. Với nhiều lớp thạch anh mịn bên trong, đá có vẻ ngoài mượt mà\r\n\r\nCác xung đột nội tâm được giải quyết mang đến cuộc sống bình yên, các vấn đề về cảm xúc và tinh thần được chữa lành\r\n\r\nĐá này thiên về chủ nghĩa tâm linh, giúp con người có động lực tiếp tục hướng thượng và hướng thiện.\r\n\r\n \r\n\r\nKhu vực được khai thác : Nam Phi, Ấn Độ, Hoa Kỳ, Sri Lanka, Tây Úc, Brazil, Trung Quốc, Canada, Hàn Quốc, Myanmar, Namibia, Tây Ban Nha, Thái Lan…\r\n\r\n \r\n\r\nThành phần : SiO2\r\n\r\n \r\n\r\nĐộ cứng theo thang Mohs : 5 – 7/10\r\n\r\n \r\n\r\nMạng phù hợp :\r\n\r\nMộc – Thuỷ\r\n\r\n \r\n\r\nTác dụng tinh thần :\r\n\r\n– Kích hoạt kỹ năng tiềm ẩn trong giao tiếp, giúp giao tiếp hiệu quả hơn\r\n\r\n– Kích thích sự hiểu biết tâm linh, là loại đá quý ma thuật, là lá bùa hộ thân, chống lại các mối đe dọa trong cuộc sống\r\n\r\n– Giúp tự tin trước công chúng, mang lại may mắn\r\n\r\n– Kích thích tập trung tinh thần, năng lượng kích hoạt luân xa mắt thứ ba, đem lại sự sáng suốt, tăng cường trực giác\r\n\r\n– Khách du lịch mang vòng tay mắt chim ưng để tự bảo vệ bản thân không bị ảnh hưởng bởi các năng lượng tiêu cực từ người xa lạ.\r\n\r\n \r\n\r\nTác dụng sức khoẻ :\r\n\r\n– Hỗ trợ điều trị gãy xương, chuột rút và đau nhức cơ bắp, suy nhược cơ thể, thiếu máu, xoang, cột sống và cổ\r\n\r\n– Hấp thụ chất dinh dưỡng và vitamin tốt hơn. Rất tốt cho thị giác, cải thiện độ tập trung.\r\n\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nĐá mắt diều hâu khá bền và có khả năng chống hao mòn nhưng :\r\n\r\n– Nhạy cảm với một số axit\r\n\r\n– Tránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\n\r\n– Bảo quản vòng tay thì hãy để riêng, không chung đụng với các loại trang sức đá quý khác\r\n\r\n– Vệ sinh vòng tay bằng cách dùng khăn mềm ( không đổ lông ) thấm nước muối tự nhiên ( muối hột, muối đá, muối mỏ,…) lau nhẹ nhàng vòng đá\r\n\r\n– Tiếp thêm năng lượng cho đá bằng cách phơi dưới ánh nắng mặt trời – ánh trăng 24 → 72h.', 3240000, '5c0aad2e20.jpg'),
(11, 'VÒNG LAKE SUPERIOR AGATE', 'Sơ lược :\r\n\r\n Các viên đá mã não được xếp thành từng dải hoặc các lớp và là một phần của gia đình thuộc nhóm đá Chalcedony.\r\n\r\nMã não có tính đa sắc bao gồm đen, vàng, hồng, đỏ, xám, trắng và nâu…Một số loại Agate có màu sẫm đen, xám trong khi một số còn có các vết tích hóa thạch hoặc rắn.\r\n\r\nMã não được hình thành trong tất cả các môi trường khoáng vật, nhưng thường được tìm thấy nhiều nhất trong đá núi lửa.\r\n\r\nCÁI TÊN  “Agate”, bắt nguồn từ tiếng Hy Lạp cổ “Achates” – có nghĩa là hạnh phúc.\r\n\r\n \r\n\r\nKhu vực được khai thác: Brazil, Mexico,  Ấn Độ, Madagascar, Hoa Kỳ, Namibia, Việt Nam ( Đắk Lăk, Đắk Nông, Lâm Đồng, Phú Yên….)\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7.0/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nKim – Thổ\r\n\r\n \r\n\r\nCÂN BẰNG NGŨ HÀNH\r\n\r\n Tác dụng tinh thần:\r\n\r\nBảo vệ chống lại các năng lượng xấu tiêu cực từ ngoài môi trường\r\nBiểu tượng của May mắn sức khỏe, là viên đá Trường Thọ\r\nGiảm tính bảo thủ suy nghĩ tích cực\r\nGiúp bạn giảm căng thẳng, áp lực trong công việc mang lại sự bình an và may mắn\r\nGiúp nam giới quyến rũ hơn trong mắt của phụ nữ\r\nChuyển hóa cái cũ, mở đường cho cái mới\r\nGiúp hộ thể bảo vệ chống lại tà khí, âm khí và ma quỷ\r\nLà lá bùa hộ mệnh cho những bạn đi làm ăn xa hoặc trong những chuyến đi du lịch dài ngày.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nCân bằng và hài hòa cơ thể, loại bỏ sự tiêu cực\r\nXoa dịu phần nào cơn đau cho những người phụ nữ đang trong thời kỳ đang mang thai\r\nNóng sốt thì lăn và xoa nhiều lần trên chỗ cần giảm nhiệt độ\r\nGiảm các chứng đau tiêu hóa, như viêm dạ dày\r\nHỗ trợ trong điều trị các bệnh liên quan đến da, dị ứng da…\r\nHữu ích cho các mạch máu, và nó cũng có thể tăng cường cơ tim của bạn.\r\n \r\n\r\nCách bảo quản đá:\r\n\r\nAgate Superior khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp\r\n \r\n\r\nNên tẩy uế, nạp lại năng lượng cho đá bằng cách :\r\n\r\nPhơi dưới mặt trời khoảng vài giờ.\r\nDùng khăn mềm thấm rượu trắng lau nhẹ bề mặt đá sau đó lau lại bằng nước sạch .', 2200000, '7e82712be2.jpg'),
(12, 'VÒNG GỖ HÓA THẠCH', 'Sơ lược :\r\n\r\n“Gỗ hóa thạch” hiểu đơn giản là gỗ hóa đá. Gỗ hóa thạch được tạo thành sau những lần núi lửa hoạt động, một số cây gỗ không bị cháy mà bị vùi dưới lớp nham thạch, trong thành phần của nham thạch có chứa SiO2 thấm vào các thớ cây làm thành những đường vân gỗ tuyệt đẹp và tạo độ cứng tương đương như đá mã não.\r\n\r\n \r\n\r\nKhu vực được khai thác:  Australia, Hoa Kỳ, Myanma, Việt Nam (Lạng Sơn, Tây Nguyên và Phú Yên)\r\n\r\n \r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 5,5 – 6,5 /10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nKim – Thổ\r\n\r\n \r\n\r\nCân bằng ngũ hành\r\n\r\n \r\n\r\nTác dụng tinh thần:\r\n\r\nLàm cho hệ thần kinh vững vàng hơn\r\nCó khả năng trấn tà, trừ ám khí,hạn chế những điều rủi ro và đem lại may mắn\r\nNăng lượng dương của đá giúp tâm trí bạn bình an để bước vào thiền định dễ dàng hơn.\r\n \r\n\r\nTác dụng sức khoẻ:\r\n\r\nGỗ Hóa Thạch – Petrified Wood đỏ: dùng chữa các bệnh về sưng nóng, đỏ, đau (như các chứng viêm khớp có kèm sưng nóng), các bệnh thuộc tim mạch, huyết áp, giúp ổn định tinh thần\r\nGỗ Hóa Thạch – Petrified Wood trắng: dùng chữa các bệnh thuộc đường hô hấp như viêm phế quản, viêm họng, viêm suyễn và viêm mũi dị ứng\r\nGỗ Hóa Thạch – Petrified Wood vàng: dùng chữa các bệnh về Tỳ vị như rối loạn tiêu hóa, tiêu chảy thường xuyên, ăn uống không tiêu gầy yếu, chữa các chứng tê bại, giúp trừ chứng lo âu suy nghĩ vẩn vơ\r\nGỗ Hóa Thạch – Petrified Wood nâu đen: dùng để để chữa các chứng bệnh thuộc Thận như suy yếu sinh dục (nam liệt dương, nữ lãnh cảm), hiếm muộn, viêm thận mãn, thường hay đau lưng nhức mỏi, giúp trừ chứng sợ hãi vô cớ\r\nGỗ Hóa Thạch – Petrified Wood xanh: dùng để chữa các bệnh về gan mật.\r\nĐặc biệt gỗ hóa thạch còn có thể hỗ trợ chữa các chứng bệnh liên quan đến suy yếu sinh dục cho cả nam và nữ (Hiếm muộn)…\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nGỗ hóa thạch khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp\r\nĐịnh kỳ 6 tháng đến 1 năm bạn nên tẩy uế, sạc lại năng lượng cho đá bằng cách phơi dưới ánh trăng rằm (để qua đêm).', 2135000, '2ed4f26d41.jpg'),
(13, 'VÒNG PREHNITE', 'Sơ lược : \r\n\r\n \r\n\r\nPrehnite được biết đến là một loại đá có khá nhiều màu sắc, biến đổi tùy theo thành phần và khu vực được hình thành từ không màu đến xám sang vàng, vàng-lục hoặc trắng. Người ta cho rằng nơi này chịu những đợt phun trào bazan ở thời kỳ Cambr và tạo điều kiện để hình thành lên khoáng vật prehnite cùng với nhiều loại khác như: scolecite, agate, canxit, thạch anh khói và thạch anh tím.Prehnite đôi khi cũng có lẫn tinh thể Black Tourmaline, đây là tinh thể có trong thạch anh tóc đen tạo nên vẻ khác biệt và độc đáo.\r\n\r\nKhu vực được khai thác: Trung Quốc, Australia, Scotland, Nam Phi, Mỹ\r\n\r\n \r\n\r\nThành phần: Ca2Al2Si3O12(OH)\r\n\r\n \r\n\r\nĐộ cứng thang Mohs: 6 – 6.5/10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\nMộc – Hỏa\r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nThu hút được nguồn năng lượng tích cực và xua đuổi tà ma, những nguồn năng lượng xấu\r\nGiúp cho chủ nhân tự tin hơn, vững vàng hơn và đưa ra được quyết định sáng suốt, tỉnh táo\r\n Giúp kiềm chế cảm xúc tốt hơn, giúp giảm bớt tính Hỏa\r\nĐược người khác yêu quý và cảm mến hơn, cải thiện được các mối quan hệ.\r\nThu hút được vận đào hoa\r\nThu hút tài lộc\r\nTăng cường sức sáng tạo\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n Cải thiện và tăng cường được hệ miễn dịch của cơ thể\r\nHỗ trợ điều trị hiệu quả cũng như đem lại cho chủ nhân hệ xương khớp chắc khỏe\r\nTăng cường hệ thống tuần hoàn máu cho cơ thể, đá này rất tốt cho người bị thiếu máu.\r\nỨng luân xa cổ họng nên thích hợp với những người hay phải nói nhiều, hát nhiều\r\nCó khả năng làm sạch không khí nên nó tốt cho phổi\r\nGiúp chủ nhân cải thiện được giấc ngủ, giúp ngủ ngon hơn, sâu giấc, ít gặp ác mộng và không bị giật mình khi ngủ.\r\n Tác động lên hệ thống thần kinh, xua tan những áp lực, stress\r\nCải thiện hệ tiêu hóa, giảm cơn đau do dạ dày, bị ợ hơi, ợ nóng…\r\n \r\n\r\nCách bảo quản đá :\r\n\r\nĐá khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp.\r\n \r\n\r\nĐể tiếp thêm năng lượng, tẩy rửa cho đá phong thuỷ, ta có các cách:\r\n\r\nPhơi dưới ánh nắng mặt trời, ánh trăng 24 – 72h \r\nDùng vải mềm ( không đổ lông ) thấm ướt bằng rượu trắng hoặc nước muối tự nhiên ( muối mỏ, muối đá, muối hột ) lau nhẹ nhàng bề mặt đá sau đó lau lại bằng nước sạch .', 1280000, '900d2de032.jpg'),
(14, 'VÒNG SAN HÔ ĐỎ HÓA THẠCH', 'Sơ lược : \r\n\r\n \r\n\r\nSan Hô Đỏ là 1 trong 7 loại BẢO VẬT QUÝ HIẾM mà nhà Phật thường dùng: Xà cừ, Mã não, San hô, Hổ phách, Thiếc Vàng, Thiếc Bạc, Ngọc. Tên gọi đá san hô đỏ dùng để chỉ Corallium rubrum và một số loài san hô có quan hệ họ hàng gần, ở những vùng biển của Nhật Bản và Đài Loan, có những loài san hô đỏ sống ở độ sâu từ 350m đến 1500m trong những vùng có dòng biển mạnh. Ở Việt Nam chúng ta, có hai loài là san hô đỏ với tên gọi san hô đỏ Nhật Bản và san hô đỏ Ko-noi, đều là các loài san hô quý hiếm.\r\n\r\nKhu vực được khai thác :  Thái Bình Dương, Ấn Độ Dương\r\n\r\n \r\n\r\nThành phần: CaCO3\r\n\r\n \r\n\r\nĐộ cứng thang Mohs: 3.5 /10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\n \r\n\r\nTốt nhất :                                      Hỏa  – Thổ – Mộc\r\n( Tương thích với cả các cung mệnh còn lại )\r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nĐeo cho trẻ em nhằm tránh những nguy hiểm\r\nTrấn quỷ trừ tà, kỵ kẻ tiểu nhân\r\nChiêu tài nạp phúc, an gia định trạch\r\nĐem lại sự cát tường cho gia chủ\r\nLà một biểu tượng của hạnh phúc và vĩnh cửu\r\nLà vòng tay may mắn\r\nĐưa tâm hồn con người về với sự thanh tịnh, thuần khiết.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n \r\n\r\nGiúp xua tan stress, giảm căng thẳng\r\nThúc đẩy hệ bài tiết, tăng cường hoạt động của thận\r\nGiúp người dùng giảm bớt mệt mỏi, căng thẳng\r\nKhi sử dụng bột đá san hô đỏ pha với rượu vang tăng sức đề kháng và chống lại bệnh tật\r\nChống lại bức xạ UV của ánh nắng mặt trời.\r\n \r\n\r\nCách bảo quản đá san hô:\r\n\r\nDo đá có độ cứng không cao nên khi mang vòng tay đá san hô cần lưu ý :\r\n\r\nĐá dễ dàng bị suy yếu khi tiếp xúc với Axit, nước nóng hoặc nhiệt độ cao\r\nNên được giữ ở nơi an toàn và thường xuyên được lau bằng khăn mềm, ẩm \r\nNếu bề mặt của san hô không bị trầy xước hoặc mất độ bóng bạn có thể nhờ thợ đánh bóng lại.\r\nBảo quản riêng, không chung đụng với các vòng đá hay trang sức khác.', 2300000, '87f75ba29c.jpg'),
(15, 'VÒNG MÃ NÃO ĐEN', 'Sơ lược : \r\n\r\n \r\n\r\nMã não có tính đa sắc bao gồm đen, vàng, hồng, đỏ, xám, trắng và nâu…Một số loại Agate có màu sẫm đen, xám trong khi một số còn có các vết tích hóa thạch hoặc rắn. \r\n\r\nMã não được hình thành trong tất cả các môi trường khoáng vật, nhưng thường được tìm thấy nhiều nhất trong đá núi lửa. \r\n\r\nCái tên “Agate”, bắt nguồn từ tiếng Hy Lạp cổ “Achates” – có nghĩa là hạnh phúc.\r\n\r\nĐá mã não đen là một trong 7 báu vật được tôn thờ, coi trọng nhất. \r\n\r\n \r\n\r\nKhu vực được khai thác: Brazil, Mexico,  Ấn Độ, Madagascar, Hoa Kỳ, Namibia, Việt Nam ( Đắk Lăk, Đắk Nông, Lâm Đồng, Phú Yên….)\r\n\r\nThành phần: SiO2\r\n\r\nĐộ cứng thang Mohs: 7.0/ 10\r\n\r\n \r\n\r\nMạng phù hợp:\r\n\r\n \r\n\r\nThủy – Kim \r\n\r\n \r\n\r\nTác dụng tinh thần: \r\n\r\n \r\n\r\nBảo vệ chống lại các năng lượng xấu tiêu cực từ ngoài môi trường\r\nBiểu tượng của May mắn sức khỏe, là viên đá Trường Thọ\r\nGiảm tính bảo thủ suy nghĩ tích cực\r\nGiúp bạn giảm căng thẳng, áp lực trong công việc mang lại sự bình an và may mắn\r\nGiúp nam giới quyến rũ hơn trong mắt của phụ nữ\r\nChuyển hóa cái cũ, mở đường cho cái mới\r\nGiúp hộ thể bảo vệ chống lại tà khí, âm khí và ma quỷ\r\nLà lá bùa hộ mệnh cho những bạn đi làm ăn xa hoặc trong những chuyến đi du lịch dài ngày.\r\n \r\n\r\nTác dụng sức khoẻ: \r\n\r\n \r\n\r\nCân bằng và hài hòa cơ thể, loại bỏ sự tiêu cực\r\nXoa dịu phần nào cơn đau cho những người phụ nữ đang trong thời kỳ đang mang thai\r\nNóng sốt thì lăn và xoa nhiều lần trên chỗ cần giảm nhiệt độ\r\nGiảm các chứng đau tiêu hóa, như viêm dạ dày\r\nHỗ trợ trong điều trị các bệnh liên quan đến da, dị ứng da…\r\nHữu ích cho các mạch máu, và nó cũng có thể tăng cường cơ tim của bạn.\r\n \r\n\r\nCách bảo quản đá:\r\n\r\n \r\n\r\nAgate Superior khá bền và có khả năng chống hao mòn\r\nTránh xịt nước hoa hoặc keo cứng tóc lên vòng tay\r\nLuôn cởi vòng tay khi tập thể thao hoặc làm việc nặng nhọc\r\nBảo quản để riêng, không chung đụng với các loại trang sức đá quý khác\r\nBọc bằng vải mềm và cho vào hộp.\r\n \r\n\r\nNên tẩy uế, nạp lại năng lượng cho đá bằng cách : \r\n\r\n \r\n\r\nPhơi dưới ánh nắng mặt trời 2 – 4 giờ\r\nDùng vải mềm ( không đổ lông ) thấm ướt bằng rượu trắng hoặc nước muối tự nhiên ( muối mỏ, muối đá, muối hột ) lau nhẹ nhàng rồi lau lại bằng nước sạch.', 2070000, '4de115a718.jpg');

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
('280 E10 Lương Định Của, P. An Phú, Q.2, TP Hồ Chí Minh'),
('61C Phan Đình Phùng, P. 17, Q.Phú Nhuận, TP Hồ Chí Minh'),
('91 Xuân Thủy, P. Thảo Điền, Q. 2, TP Hồ Chí Minh (khuôn viên cà phê Cộng)'),
('Tầng 2, chung cư 42 Nguyễn Huệ, P. Bến Nghé, Quận 1, TP Hồ Chí Minh');

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
('tranttuan', 'Thanh Tuan', 'tranttuan95@gmail.com', '0901491633', 'Hóc Môn', 'thanhtuan@2020', '2021-06-01 14:55:29', 'defaultavatar.png', 'active'),
('tranttuan96', 'Tran Thanh Tuan', 'tranttuan96@gmail.com', '0901491634', 'Hóc Môn', 'thanhtuan', '2021-06-01 10:16:03', 'ea83a577a5.png', 'active'),
('user123', 'Tuan', 'user@gmail.com', '0901491635', 'Hóc Môn', 'user123', '2021-06-01 19:53:22', 'defaultavatar.png', 'active'),
('user1234', 'user1234', 'user1234@gmail.com', '0901491632', 'Hóc Môn', 'user1234', '2021-06-01 19:54:35', 'defaultavatar.png', 'banned');

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
(1,'Tháng Một 6, 2021','Không có gì ngoài điều kiện: Việt Hương lì xì Huỳnh Lập 117 triệu để lấy hên đầu năm 2021','117.jpg',NULL),
(2,'Tháng Mười Một 21, 2020','TINH LÂM JW – ĐỒNG HÀNH CÙNG NGHỆ SĨ VIỆT','1.png',NULL),
(3,'Tháng Mười 9, 2020','Nghề Tay Trái – Huỳnh Lập: \"Giữ vững đam mê nghệ thuật và kinh doanh\"','img_7402-46bfa4cc.jpg',NULL),
(4,'Tháng Chín 19, 2020','Đại Nghĩa, Thu Trang nhiệt tình ủng hộ showroom đá phong thủy Tinh Lâm của Huỳnh Lập','2.jpg',NULL),
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
