<?php require_once '../controller/user.php'; ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Products</title>

	<!-- bootstrap 5.0.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- font awesome 5.10.0 -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- font google  -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

	<!-- main css  -->
	<link rel="stylesheet" href="./css/index.css" />

	<!-- products css -->
	<link rel="stylesheet" href="./css/products.css" />
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
		<div class="container my-5 py-5">
			<div id="r2" class="row">
				<div id="r2c1" class="col-lg-3">
					<div id="r2c1r1" class="row pb-4 border-bottom">
						<div class="pb-4">
							<span class="fw-bold">LOẠI SẢN PHẨM</span>
							<button id="buttonLoaiSanPham" onclick="toggleLoaiSanPham();">
								&#x2014;
							</button>
						</div>

						<div id="loaiSanPham">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="loaiSanPham" id="phongThuy" />
								<label class="form-check-label" for="phongThuy">
									Phong thuỷ
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="loaiSanPham" id="thoiTrang" />
								<label class="form-check-label" for="thoiTrang">
									Thời trang
								</label>
							</div>
						</div>
					</div>

					<div id="r2c1r2" class="row py-4 border-bottom">
						<div class="pb-4">
							<span class="fw-bold">DÒNG SẢN PHẨM</span>
							<button id="buttonDongSanPham" onclick="toggleDongSanPham();">
								&#x2014;
							</button>
						</div>

						<div id="dongSanPham">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dongSanPham" id="caoCap" />
								<label class="form-check-label" for="caoCap"> Cao cấp </label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dongSanPham" id="trungCap" />
								<label class="form-check-label" for="trungCap">
									Trung cấp
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="dongSanPham" id="phoThong" />
								<label class="form-check-label" for="phoThong">
									Phổ thông
								</label>
							</div>
						</div>
					</div>

					<div id="r2c1r3" class="row py-4 border-bottom">
						<div class="pb-4">
							<span class="fw-bold">BỘ SƯU TẬP</span>
							<button id="buttonBoSuuTap" onclick="toggleBoSuuTap();">
								&#x2014;
							</button>
						</div>

						<div id="boSuuTap">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="boSuuTap" id="charmAmDuong" />
								<label class="form-check-label" for="charmAmDuong">
									Charm Âm Dương (Limited Edition)
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="phongthuy" />
								<label class="form-check-label" for="phongthuy">
									Vòng Cổ Đá Phong Thủy
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="hophach" />
								<label class="form-check-label" for="hophach">
									Vòng Hổ Phách
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="ongHo" />
								<label class="form-check-label" for="ongHo">
									Ông Hổ
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="senViet" />
								<label class="form-check-label" for="senViet">
									Sen Việt
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="luclac" />
								<label class="form-check-label" for="luclac">
									Lục Lạc Trường An
								</label><br>
								<input class="form-check-input" type="radio" name="boSuuTap" id="phunu" />
								<label class="form-check-label" for="phunu">
									Phụ Nữ Việt Nam
								</label><br>
							</div>
						</div>
					</div>

					<div id="r2c1r4" class="row py-4 border-bottom">
						<div class="pb-4">
							<span class="fw-bold">GIÁ SẢN PHẨM</span>
							<button id="buttonGiaSanPham" onclick="toggleGiaSanPham();">
								&#x2014;
							</button>
						</div>

						<div id="giaSanPham">
							<label for="leftSlider" class="form-label">Giá tối thiểu:
							</label>
							<span id="leftSliderVal">0 ₫</span>
							<input type="range" class="form-range" min="0" max="6000000" value="0" step="100000" id="leftSlider" />
							<label for="rightSlider" class="form-label">Giá tối đa: </label>
							<span id="rightSliderVal">6.000.000 ₫</span>
							<input type="range" class="form-range" min="0" max="6000000" value="6000000" step="100000" id="rightSlider" />
						</div>
					</div>

					<div id="r2c1r5" class="row pt-4 pb-5">
						<div class="pb-4">
							<span class="fw-bold">BẢN MỆNH PHÙ HỢP</span>
						</div>

						<select class="form-select" aria-label="Default select example">
							<option value="">-- Chọn năm sinh --</option>
							<option value="1924">1924</option>
							<option value="1925">1925</option>
							<option value="1926">1926</option>
							<option value="1927">1927</option>
							<option value="1928">1928</option>
							<option value="1929">1929</option>
							<option value="1930">1930</option>
							<option value="1931">1931</option>
							<option value="1932">1932</option>
							<option value="1933">1933</option>
							<option value="1934">1934</option>
							<option value="1935">1935</option>
							<option value="1936">1936</option>
							<option value="1937">1937</option>
							<option value="1938">1938</option>
							<option value="1939">1939</option>
							<option value="1940">1940</option>
							<option value="1941">1941</option>
							<option value="1942">1942</option>
							<option value="1943">1943</option>
							<option value="1944">1944</option>
							<option value="1945">1945</option>
							<option value="1946">1946</option>
							<option value="1947">1947</option>
							<option value="1948">1948</option>
							<option value="1949">1949</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1953">1953</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
					</div>
				</div>

				<div id="r2c2" class="col-lg-9 px-4">
								
				</div>
			</div>
		</div>
	</section>

	<?php require_once "../user/component/footer.php"; ?>
	<?php require_once "../user/component/searchModal.php"; ?>
	<!-- jquery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- bootstrap 5.0.1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- header.js -->
	<script src="./js/header.js"></script>

	<!-- products.js -->
	<script src="./js/products.js"></script>
</body>

</html>