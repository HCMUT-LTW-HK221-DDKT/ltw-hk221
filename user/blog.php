<?php require_once '../controller/user.php'; 
?>

<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="description" content="Male_Fashion Template">
     <meta name="keywords" content="Male_Fashion, unica, creative, html">
     <title>Blog - Tinh Lâm JW</title>

     <!-- import bootstrap  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

     <!-- font awesome  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />

     <!-- font google  -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">


     <!-- owl.carousel css  -->
     <link rel="stylesheet" href="./CSS/owl.carousel.css" />
     <link rel="stylesheet" href="./CSS/owl.theme.default.css" />

     <link href="css/intro.css" data-rocket-async="style" onload="this.onload=null;this.rel='stylesheet'"
          rel="stylesheet">
     <link rel="stylesheet" href="css/intro2.css" data-rocket-async="style" 
          onload="this.onload=null;this.rel='stylesheet'" media="all" data-minify="1">
     <link rel="stylesheet" id="woocommerce-smallscreen-css" href="css/intro3.css" type="text/css"
          media="only screen and (max-width: 768px)">

     <!-- main css  -->
     <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
<?php 
    require_once "./component/navbar.php";
  ?>
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
							<li>
								<a href="index.php">TRANG CHỦ</a>
							</li>
							<li>
								<a href="intro.php">GIỚI THIỆU</a>
							</li>
							<li>
								<a href="products.php">SẢN PHẨM</a>
							</li>
							<li  class="active">
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

     <div class="m-show header-gap"></div>
     <!-- Blog Section Begin -->
     <section class="blog spad">
          <div class="container">
               <div class="row">
                    <?php require_once "../controller/blog_item.php" ?>
               </div>
          </div>
     </section>
     <!-- Team Section End -->
     <?php 
     require_once "./component/footer.php";
     ?>

     <!-- js bootstrap  -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
          integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
          integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
     </script>
     <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
          integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
     <!-- thư việc owl.carousel  -->
     <script src="./js/owl.carousel.js"></script>

     <script src="./js/header.js"></script>

     <script>
          $('.owl-carousel').owlCarousel({
               loop: true,
               margin: 10,
               nav: true,
               dots: false,
               autoplay: true,
               autoplayTimeout: 3000,
               autoplaySpeed: 1000,
               responsive: {
                    0: {
                         items: 3
                    },
                    768: {
                         items: 4
                    }
               }
          })
     </script>
</body>

</html>