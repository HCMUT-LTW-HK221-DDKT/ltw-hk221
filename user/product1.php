<?php require_once '../controller/user.php'; ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Product detail</title>

	<!-- bootstrap 5.0.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- font awesome 5.10.0 -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- font google  -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

	<!-- main css  -->
	<link rel="stylesheet" href="./css/index.css" />

	<!-- product1 css -->
	<link rel="stylesheet" href="./css/product1.css" />

	<script>
		var id = <?php echo $_GET['id']; ?>;
	</script>
</head>

<body>
	<?php require_once "./component/navbar.php"; ?>
	<div class="header">
  <div class="header__bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-12">
					<div class="header__logo__responsive">
						<a href="index.php"><img src="./img/logo.png" alt="" /></a>
					</div>
					<div class="header__bottom__left slogan">
						<p>Cam kết sản phẩm hoàn toàn là đá tự nhiên</p>
					</div>
				</div>
				<div class="col-7 d-md-block d-none">
					<nav class="header__menu">
						<ul>
							<li class="active">
								<a href="index.php">TRANG CHỦ</a>
							</li>
							<li>
								<a href="intro.php">GIỚI THIỆU</a>
							</li>
							<li>
								<a href="products.php">SẢN PHẨM</a>
							</li>
							<li>
								<a href="blog.php">BLOG</a>
							</li>
							<li>
								<a href="contact.php">LIÊN HỆ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="active__menu__button"><i class="fa fa-bars"></i></div>
		</div>
	</div>
</div>
	<section class="my-5 py-5">
		<div class="container my-5">
			<div id="r2" class="row">
				<div id="r2c1" class="col-md-6 mb-5">
					<img id="image" src="" alt="item" />
					<p class="text-center px-5 pt-3">
						***Lưu ý: Hình ảnh chỉ mang tính chất minh hoạ.<br />
						Sản phẩm là đá tự nhiên nên vân đá có thể thay đổi.
					</p>
				</div>

				<div id="r2c2" class="col-md-6">
					<h3 id="name" class="fw-bold"></h3>
					<p>
						Mã sản phẩm: <span id="id" class="code"></span><br />
						Trạng thái: <span class="status">NEW</span>
					</p>
					<div class="noiDungSanPham py-3 mb-3">
						<h5>NỘI DUNG SẢN PHẨM:</h5>
						<h5 class="pt-3">
							MẠNG PHÙ HỢP: <span class="mang">DÙNG CHO TẤT CẢ CÁC MẠNG</span>
						</h5>
					</div>
					<p class="chonCharm">
						Chọn Charm và Size viên đá để thể hiện giá sản phẩm
					</p>
					<p id="price" class="giaTien"></p>

					<form>
						<div class="row">
							<div class="col-md-6 col-lg-4 py-3 text-center">
								<p>Charm</p>
								<select>
									<option>Vui lòng chọn</option>
									<option>LU THỐNG & NGHÊ</option>
								</select>
							</div>
							<div class="col-md-6 col-lg-4 py-3 text-center">
								<p>Size Viên Đá</p>
								<select>
									<option>Vui lòng chọn</option>
									<option>11 Li</option>
								</select>
							</div>
							<div class="col-lg-4 py-3 text-center">
								<p>Size Cổ Tay (cm)</p>
								<div class="d-flex justify-content-center">
									<button id="sizeCoTayMinusButton" class="minus-button" onclick="sizeCoTayMinus(); return false;">
										&#x2014;
									</button>
									<input id="sizeCoTayInput" class="plus-minus-input" type="number" value="12" step="0.5" />
									<button id="sizeCoTayPlusButton" class="plus-button" onclick="sizeCoTayPlus(); return false;">
										&#x254B;
									</button>
								</div>
							</div>
						</div>

						<div class="text-center my-4">
							<input type="checkbox" />
							<label> Tặng cho bạn bè hoặc người thân </label>
						</div>

						<div class="row">
							<div class="col-lg-4 text-center">
								<p>SỐ LƯỢNG</p>
								<div class="d-flex justify-content-center">
									<button id="soLuongMinusButton" class="minus-button" onclick="soLuongMinus(); return false;">
										&#x2014;
									</button>
									<input id="soLuongInput" class="plus-minus-input" type="number" value="1" step="1" />
									<button id="soLuongPlusButton" class="plus-button" onclick="soLuongPlus(); return false;">
										&#x254B;
									</button>
								</div>
							</div>
							<div class="col-lg-8 text-center">
								<p class="invisible">SỐ LƯỢNG</p>
								<button id="themVaoGioHang">THÊM VÀO GIỎ HÀNG</button>
							</div>

							<div class="text-center mt-5">
								<button id="lienHeHotline">
									<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;LIÊN HỆ HOTLINE: 1900 29 29 17
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div id="r3" class="row my-5">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="openThongTinGiaoHang(); return false;" style="font-weight: 700; color: #7c6455;">Thông tin giao hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="openChiTietSanPham(); return false;" style="font-weight: 700; color: #7c6455;">Chi tiết sản phẩm</a>
					</li>
				</ul>

				<div class="px-5 py-3">
					<div id="thongTinGiaoHang">
						<h5 class="fw-bold">THÔNG TIN VẬN CHUYỂN VÀ HOÀN TRẢ</h5>
						<div class="row">
							<div class="col-md-6 border-end border-dark text-justify">
								<p>
									<b>Giao hàng</b><br />
									– Nội thành: Giao từ 1 – 3 ngày; Miễn phí giao hàng trong
									bán kính 10km<br />
									– Tỉnh khác: Giao từ 5 – 7 ngày; 30.000 VNĐ / đơn<br />
									** Lưu ý: Thời gian nhận hàng có thể thay đổi sớm hoặc muộn
									hơn tùy theo địa chỉ cụ thể của khách hàng.<br />
									*** Trong trường hợp sản phầm tạm hết hàng, nhân viên CSKH
									sẽ liên hệ trực tiếp với quý khách để thông báo về thời gian
									giao hàng.<br />
									Nếu khách hàng có yêu cầu về Giấy Kiểm Định Đá, đơn hàng sễ
									cộng thêm 20 ngày để hoàn thành thủ tục.
								</p>
							</div>
							<div class="col-md-6">
								<p>
									<b>Chính sách hoàn trả</b><br />
									– Chúng tôi chấp nhận đổi / trả sản phẩm ngay lúc khách kiểm
									tra và xác nhận hàng hóa. Chúng tôi cam kết sẽ hỗ trợ và áp
									dụng chính sách bảo hành tốt nhất tới Quý khách, đảm bảo mọi
									quyền lợi Quý khách được đầy đủ.<br />
									– Những trình trạng bể, vỡ do quá trình quý khách sử dụng
									chúng tôi xin từ chối đổi hàng.<br />
									– Tùy vào tình hình thực tế của sản phẩm , chúng tôi sẽ cân
									nhắc hỗ trợ đổi / trả nếu sản phẩm lỗi hoặc các vấn đề liên
									quan khác.<br />
									– Chúng tôi nhận bảo hành dây đeo vĩnh viễn dành cho khách
									hàng nếu tình trạng dây lâu ngày bị giãn nở, cọ sát vớt đá
									gây đứt dây trong quá trình sử dụng, chi phí vận chuyển xin
									quý khách vui lòng tự thanh toán.
								</p>
							</div>
						</div>
					</div>

					<div id="chiTietSanPham"></div>
				</div>
			</div>
		</div>
	</section>

	<?php require_once "./component/footer.php"; ?>

	<!-- jquery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- bootstrap 5.0.1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- header.js -->
	<script src="./js/header.js"></script>

	<!-- product1.js -->
	<script src="./js/product1.js"></script>
</body>

</html>