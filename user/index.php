<?php require_once '../controller/user.php'; 
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WebASM2</title>

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
  <div class="banner__carousel">
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/banner1.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner2.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner3.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner4.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner5.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner6.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner7.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
        <img src="./img/banner8.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner9.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner10.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner11.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner12.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner13.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner14.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner15.jpeg" alt="banner">
        </div>
        <div class="carousel-item">
          <img src="./img/banner16.jpeg" alt="banner">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="home__social">
    <div class="container">
      <div class="social__detail">
        <a target="_blank" class="facebook" href="https://www.facebook.com/trangsucphongthuytinhlam"><i
            class="fab fa-facebook-f"></i></a>
        <a target="_blank" class="youtube" href="https://www.youtube.com/channel/UC8vQFLQ6RUSh8_G0Gv8lsGg"><i
            class="fab fa-youtube"></i></a>
        <a target="_blank" class="instagram" href="https://www.instagram.com/tinhlamvongdaphongthuy/"><i
            class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <div class="product__carousel">
    <div class="container">
      <div class="owl-carousel owl-theme">
        <div class="item"><img src="./img/products/-6034image19.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image30.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image35.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image39.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image45.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image47.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image52.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image56.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image60.jpeg" alt="products"></div>
        <div class="item"><img src="./img/products/-6034image61.jpeg" alt="products"></div>
      </div>
    </div>
  </div>

  <div class="categories__intro">
    <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="intro__banner">
            <a href="#">
              <img src="./img/-6022image109.jpeg" alt="banner" >
            </a>
          </div>
        </div>
        <div class="col-4">
          <div class="detail__banner">
            <div class="top">
              <a href="#">Vòng đá PHONG THỦY</a>
            </div>
            <div class="center">
              <div class="center__top">
                <a href="#">
                  <img src="./img/hero-top-hover.png" alt="banner">
                </a>
              </div>
              <div class="center__bottom">
                <a href="#">
                  <img src="./img/hero-bottom.png" alt="banner">
                </a>
              </div>
            </div>
            <div class="bottom">
              <a href="#">Vòng đá THỜI TRANG</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="intro__banner">
            <a href="#">
              <img src="./img/fashion-right.jpg" alt="banner">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="product__categories">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="best-seller-tab" data-bs-toggle="tab" data-bs-target="#best-seller" type="button"
          role="tab" aria-controls="best-seller" aria-selected="true">Bán chạy nhất</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab"
          aria-controls="new" aria-selected="false">Mới nhất</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="tab" data-bs-target="#special" type="button"
          role="tab" aria-controls="special" aria-selected="false">Đặc biệt</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade" id="best-seller" role="tabpanel" aria-labelledby="best-seller-tab">
        <div class="container">
          <div class="row">
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
        <div class="container">
          <div class="row">
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="special" role="tabpanel" aria-labelledby="special-tab">
        <div class="container">
          <div class="row">
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 py-2">
              <div class="card">
                <img src="./img/products/-6034image19.jpeg" alt="item">
                <div class="tag">
                  New
                </div>
                <div class="detail_icon">
                  <a href="#">
                    <img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="">
                  </a>
                </div>
                <div class="detail__text">
                  <a href="#">Xem chi tiết</a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Vòng ưu linh ngũ sắc</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="home__advisory">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12">
          <div class="advisory__img row">
            <div class="img__item col-4">
              <img src="./img/product-1-2.jpg" alt="">
            </div>
            <div class="img__item col-4">
              <img src="./img/product-2-2.jpg" alt="">
            </div>
            <div class="img__item col-4">
              <img src="./img/product-3-2.jpg" alt="">
            </div>
            <div class="img__item col-4">
              <img src="./img/product-4-2.jpg" alt="">
            </div>
            <div class="img__item col-4">
              <img src="./img/product-5-1.jpg" alt="">
            </div>
            <div class="img__item col-4">
              <img src="./img/product-6-1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="advisory__detail">
            <h2>Ngũ hành</h2>
            <p>
              Vòng đá phong thủy theo ngũ hành (Kim, Thủy, Mộc, Hỏa, Thổ) là những chiếc vòng được làm từ chính những
              viên đá có sẵn trong tự nhiên, với những màu sắc khác nhau và được chế tác vô cùng kỳ công. Ngoài ra, nó
              còn được xem là những vật phẩm có khả năng đem lại những may mắn cho con người. Mang đến tài lộc, thịnh
              vượng, phù trợ cho con người trong công việc cũng như cuộc sống. Đặc biệt là những người kinh doanh, buôn
              bán sẽ giúp bạn thuận lợi hơn trong con đường công danh sự nghiệp.
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="home__blog">
    <div class="container">
      <span>TINH LÂM </span>
      <h2>Chuyện của Đá</h2>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="blog__item">
            <div class="image">
              <img src="./img/1-1.png" alt="">
            </div>
            <div class="intro">
              <div class="date">
                <img src="./img/calendar.png" alt="">
                <span> Tháng Bảy 13, 2021</span>
              </div>
              <div class="title">
                <p>Số Lượng Hạt Trong Một Vòng Đá Phong Thủy</p>
              </div>
              <div class="detail">
                <a href="#">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="blog__item">
            <div class="image">
              <img src="./img/1-2.png" alt="">
            </div>
            <div class="intro">
              <div class="date">
                <img src="./img/calendar.png" alt="">
                <span>Tháng Bảy 5, 2021</span>
              </div>
              <div class="title">
                <p>Vì sao mỗi người cần có nhiều hơn 1 vòng đá phong thủy?</p>
              </div>
              <div class="detail">
                <a href="#">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="blog__item">
            <div class="image">
              <img src="./img/1-3.png" alt="">
            </div>
            <div class="intro">
              <div class="date">
                <img src="./img/calendar.png" alt="">
                <span>Tháng Mười 9, 2020</span>
              </div>
              <div class="title">
                <p>Nghề Tay Trái – Huỳnh Lập: “Giữ vững đam mê nghệ thuật và kinh doanh”</p>
              </div>
              <div class="detail">
                <a href="#">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once "./component/footer.php";
  ?>

<?php 
    require_once "./component/searchModal.php";
  ?>

  <!-- js bootstrap  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
    crossorigin="anonymous"></script>
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