SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `blog` (
  `id` int(11) NOT NULL UNIQUE,
  `date` varchar(80) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `img` varchar(80) NOT NULL,
  `url` varchar(1000) UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `blog` (`id`,`date`,`description`,`img`, `url`) VALUES
(1,'Tháng Một 6, 2021','Không có gì ngoài điều kiện: Việt Hương lì xì Huỳnh Lập 117 triệu để lấy hên đầu năm 2021','117.jpg',NULL),
(2,'Tháng Mười Một 21, 2020','TINH LÂM JW – ĐỒNG HÀNH CÙNG NGHỆ SĨ VIỆT','1.png',NULL),
(3,'Tháng Mười 9, 2020','Nghề Tay Trái – Huỳnh Lập: \"Giữ vững đam mê nghệ thuật và kinh doanh\"','img_7402-46bfa4cc.jpg',NULL),
(4,'Tháng Chín 19, 2020','Đại Nghĩa, Thu Trang nhiệt tình ủng hộ showroom đá phong thủy Tinh Lâm của Huỳnh Lập','2.jpg',NULL),
(5,'Tháng Chín 19, 2020','Đồng nghiệp ủng hộ Huỳnh Lập bán đá phong thủy','3.jpg',NULL),
(6,'Tháng Chín 19, 2020','Huỳnh Lập lên chức ông chủ, dàn sao Vbiz khủng nườm nượp đến chúc mừng','5.jpg',NULL);

ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;