<div class="reponsive__menu">
	<div class="logo">
		<a href="https://tinhlamjw.com"><img src="./img/logo-2.png" alt="" /></a>
	</div>
	<div class="language__option">
		<div class="top__hover">
			<?php if (isset($_SESSION['username'])) : ?>
				Xin chào <span style="font-weight:bold;"><?php echo $_SESSION['username']; ?><img src="../uploads/<?php echo $_SESSION['imgUrl'] ?>" style="width: 25px; display: inline; border-radius:50%" alt=""><i class="fa fa-angle-down"></i></span>
				<ul>
					<li><a class="dropdown-item border-0 my-1" href="profile.php">Hồ sơ</a></li>
					<li><a class="dropdown-item border-0 my-1" href="?logoutBtn">Đăng xuất</a></li>
				</ul>
			<?php else : ?>
				<span><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></span>
				<ul>
					<li><a href="signup.php">Đăng ký</a></li>
					<li><a href="login.php">Đăng nhập</a></li>
				</ul>
			<?php endif ?>
		</div>
	</div>
	<div class="nav__option">
		<button type="button" class="search-switch" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<img src="./img/search.png" alt="" />
		</button>
		<a href="cart.php" class="cart"><img src="./img/cart.png" alt="" />
			<span class="cart__count"><?php echo $_SESSION["totalquantity"]; ?></span>
		</a>
	</div>
	<div class="mobile__menu">
		<ul>
			<li>
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
	</div>
	<div class="social">
		<a target="_blank" class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
		<a target="_blank" class="youtube" href="#"><i class="fab fa-youtube"></i></a>
		<a target="_blank" class="instagram" href="#"><i class="fab fa-instagram"></i></a>
	</div>
</div>

<div class="header">
	<div class="header__top">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<div class="header__logo">
						<a href="./index.php"><img src="./img/logo.png" alt="" /></a>
					</div>
				</div>
				<div class="col-9">
					<div class="header__top__nav">
						<div class="nav__option">
							<button type="button" class="search" data-bs-toggle="modal" data-bs-target="#exampleModal">
								<img src="./img/search.png" alt="" />
							</button>
							<a href="cart.php" class="cart"><img src="./img/cart.png" alt="" />
								<span class="cart__count"><?php echo $_SESSION["totalquantity"]; ?></span>
							</a>
						</div>
						<div class="language__option">
							<?php if (isset($_SESSION['username'])) : ?>
								Xin chào <span style="font-weight:bold;"><?php echo $_SESSION['username']; ?><img src="../uploads/<?php echo $_SESSION['imgUrl'] ?>" style="width: 25px; display: inline; border-radius:50%" alt=""><i class="fa fa-angle-down"></i></span>
								<ul>
									<li><a class="dropdown-item border-0 my-1" href="profile.php">Hồ sơ</a></li>
									<li><a class="dropdown-item border-0 my-1" href="?logoutBtn">Đăng xuất</a></li>
								</ul>
							<?php else : ?>
								<span><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></span>
								<ul>
									<li><a href="signup.php" class="dropdown-item border-0 my-1">Đăng ký</a></li>
									<li><a href="login.php" class="dropdown-item border-0 my-1">Đăng nhập</a></li>
								</ul>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>