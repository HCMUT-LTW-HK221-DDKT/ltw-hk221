<?php
require_once '../controller/user.php';
?>



<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Male_Fashion Template">
  	<meta name="keywords" content="Male_Fashion, unica, creative, html">
  	<title>Cart - Tinh Lâm JW</title>

	<!-- import bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

	<!-- font awesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />

	<!-- font google  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

	<!-- owl.carousel css  -->
	<link rel="stylesheet" href="./CSS/owl.carousel.min.css" />
	<link rel="stylesheet" href="./CSS/owl.theme.default.css" />

	<!-- main css  -->
	<link rel="stylesheet" href="./css/index.css" />

	<!-- product1.css -->
	<link rel="stylesheet" href="./css/product1.css" />

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

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
	<div class="cartDetail my-5 py-5">
		<!-- <div class="row">
            <div class="col-9">

            </div>

        </div> -->
	</div>

	<?php
	require_once "./component/footer.php";
	?>

	<script src="./js/cart.js"></script>
	<script src="./js/header.js"></script>
</body>

</html>