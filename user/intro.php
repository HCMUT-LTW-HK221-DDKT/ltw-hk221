<?php require_once '../controller/user.php'; 
?>

<!DOCTYPE html>
<html lang="vi">

<head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>WebASM1</title>

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

     <link rel="preload " href="css/intro.css" as="style"/>
     <link href="css/intro.css" data-rocket-async="style" onload="this.onload=null;this.rel='stylesheet'"
          rel="stylesheet">
          <link rel="preload " href="css/intro2.css" as="style"/>
     <link rel="stylesheet" href="css/intro2.css" data-rocket-async="style"
          onload="this.onload=null;this.rel='stylesheet'" media="all" data-minify="1">
     <link rel="preload " href="css/intro3.css" as="style"/>
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
							<li class="active">
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
     <div class="m-show header-gap"></div>

     <section class="about spad">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="about__pic">
                              <img src="img/about-us-1.jpg" alt>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="about__item">
                              <h4>Về chúng tôi?</h4>
                              <p>Tinh Lâm là đứa con tinh thần mà Huỳnh Lập tâm huyết nhất . Sở dĩ việc đặt tên thương
                                   hiệu là
                                   Tinh Lâm bởi vì đây vốn là một nhân vật rất đỗi quen thuộc với những ai mà là fan của
                                   Huỳnh
                                   Lập trong các tác phẩm như “ Pháp Sư Mù “ , “ Ai chết giơ tay “. Đã có nhiều người
                                   khi theo
                                   dõi các series này quan tâm đến những phụ kiện đi kèm của nhân vật Tinh Lâm , và vì
                                   thế Tinh
                                   Lâm – Trang Sức Phong Thủy ra đời.</p>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="about__item">
                              <h4>Chúng tôi làm gì?</h4>
                              <p>Thiên nhiên luôn ẩn chứa vô vàn điều bí ẩn , vẻ đẹp lung linh , huyền ảo. Từ sự hòa hợp
                                   của 5
                                   yếu tố ngũ hành trong vũ trụ: Vĩnh cửu như Kim, sắc sảo như Mộc, long lanh như Thuỷ,
                                   mê hoặc
                                   như Hoả, huyền bí như Thổ. Đúng như cái tên chúng tôi chọn, đó là tập trung hết mình
                                   vào
                                   Trang Sức Phong Thủy. Mang đến những giá trị cốt lõi , tinh thần giúp mọi người tự
                                   tin hơn
                                   trong công việc, cuộc sống . Không những mang đến cho mọi người vẻ đẹp bên ngoài mà
                                   còn mang
                                   tới những yếu tố ngũ hành phù hợp với từng cá nhân để giúp cho con đường phát triển
                                   của cá
                                   nhân đó thăng hoa hơn.</p>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="about__item">
                              <h4>Tại sao nên chọn?</h4>
                              <p>Một thương hiệu thành công được xây dựng bởi lòng tin và sự hài lòng của khách hàng.
                                   Tinh Lâm
                                   được ra đời bởi điều đó : sự chân thành , lòng tin và hơn hết nữa chúng tôi dành rất
                                   nhiều
                                   thời gian , tìm hiểu để mang đến những sản phẩm chất lượng nhất đến người tiêu dùng.
                              </p>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="testimonial">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-lg-6 p-0">
                         <div class="testimonial__text">
                              <span class="icon_quotations"></span>
                              <p>“Một thương hiệu thành công được xây dựng bởi lòng tin và sự hài lòng của khách hàng.
                                   Tinh
                                   Lâm được ra đời bởi điều đó : sự chân thành , lòng tin và hơn hết nữa chúng tôi dành
                                   rất
                                   nhiều thời gian , tìm hiểu để mang đến những sản phẩm chất lượng nhất đến người tiêu
                                   dùng.”
                              </p>
                              <div class="testimonial__author">
                                   <div class="testimonial__author__pic">
                                        <img src="img/author-1.png" alt>
                                   </div>
                                   <div class="testimonial__author__text">
                                        <h5>Huỳnh Lập</h5>
                                        <p>TinhLam JW</p>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-6 p-0">
                         <div class="testimonial__pic set-bg"
                              data-setbg="img/testimonial-pic.jpg"
                              style="background-image: url(&quot;img/testimonial-pic.jpg&quot;);"></div>
                    </div>
               </div>
          </div>
     </section>
     <!-- Testimonial Section End -->
     <!-- Team Section Begin -->
     <section class="team spad">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="section-title">
                              <span>TINH LÂM</span>
                              <h2>Về Chúng Tôi</h2>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <p>Tinh Lâm là đứa con tinh thần mà Huỳnh Lập tâm huyết nhất . Sở dĩ việc đặt tên thương hiệu
                              là
                              Tinh Lâm bởi vì đây vốn là một nhân vật rất đỗi quen thuộc với những ai mà là fan của
                              Huỳnh Lập
                              trong các tác phẩm như “ Pháp Sư Mù “ , “ Ai chết giơ tay “. Đã có nhiều người khi theo
                              dõi các
                              series này quan tâm đến những phụ kiện đi kèm của nhân vật Tinh Lâm , và vì thế Tinh Lâm –
                              Trang
                              Sức Phong Thủy ra đời.</p>
                    </div>
               </div>
          </div>
     </section>
     <!-- Team Section End -->
     <div class="footer">
          <div class="container">
               <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                         <div class="about-us">
                              <div class="logo">
                                   <a href="index.php">
                                        <img src="./img/footer-logo.png" alt="logo">
                                   </a>
                              </div>
                              <p><i class="fa fa-map-marker-alt"></i> 280 E10 Lương Định Của, P. An Phú, Q.2, TP Hồ Chí
                                   Minh</p>
                              <p><i class="fa fa-map-marker-alt"></i> 61C Phan Đình Phùng, P. 17, Q.Phú Nhuận, TP Hồ Chí
                                   Minh</p>
                              <p><i class="fa fa-map-marker-alt"></i> Tầng 2, chung cư 42 Nguyễn Huệ, P. Bến Nghé, Quận
                                   1, TP Hồ Chí Minh
                              </p>
                              <p class="contact"><i class="fa fa-phone"></i>
                                   1900 29 29 17
                                   <i class="fa fa-envelope"></i> tinhlamjw@gmail.com
                              </p>
                              <div class="social__redirect">
                                   <a target="_blank" class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                   <a target="_blank" class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                   <a target="_blank" class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                         <div class="categories">
                              <h6>Sản phẩm</h6>
                              <ul>
                                   <li><a href="#">Vòng Đá Phong Thủy</a></li>
                                   <li><a href="#">Vòng Đá Thời Trang</a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                         <div class="categories">
                              <h6>Hỗ trợ</h6>
                              <ul>
                                   <li><a href="#">Hướng dẫn mua hàng</a></li>
                                   <li><a href="#">Chính sách bán hàng</a></li>
                                   <li><a href="#">Chính sách bảo hành và đổi trả</a>                                   </li>
                                   <li><a href="#">Giao nhận và Thanh toán</a></li>
                                   <li><a href="#">Chính sách bảo mật</a></li>
                              </ul>
                              <img src="./img/logoNoti.png" alt="" width = 50% height = 50%/>
                         </div>
                    </div>
               </div>
               <div class="footer__copyright__text">
                    <p>Copyright © 2022
                         All rights reserved
                    </p>
               </div>
          </div>
     </div>

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