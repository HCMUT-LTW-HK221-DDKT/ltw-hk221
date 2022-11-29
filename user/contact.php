<?php 
   require_once '../controller/user.php';
?>



<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>

    <!-- import bootstrap  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />

    <!-- font awesome  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css"
    />

    <!-- font google  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- owl.carousel css  -->
    <link rel="stylesheet" href="./CSS/owl.carousel.min.css" />
    <link rel="stylesheet" href="./CSS/owl.theme.default.css" />

    <!-- main css  -->
    <link rel="stylesheet" href="./css/index.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
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
							<li  class="active">
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
    <div class="contact__map">
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2801818763705!2d106.74409341526042!3d10.78983976189528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527ccd1b591f9%3A0xaa0cb6ee9cd3e7e9!2s17%20Production%20Company!5e0!3m2!1sen!2s!4v1600537495526!5m2!1sen!2s"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
        ></iframe>
      </div>
    </div>

    <div class="contact__info">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 contact__info__right">
            <h4>Thông tin liên hệ</h4>
            <?php   
              require_once "../controller/database.php";     
              $query = "SELECT * FROM contacts";
              $result = mysqli_query($conn, $query) or die('Error, query failed');
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<p class='phone'><i class='fa fa-phone'></i> ".
                $row['phone']
                . "</p>
                <p class='email'><i class='fa fa-envelope'></i> " . $row['email'] ."</p>";
              }
              //close the connection
            ?>

            <p class="directContact">Hoặc đến showroom Tinh Lâm để được tư vấn và xem sản phẩm trực tiếp.</p>
          </div>
          <div class="col-md-6 col-12 contact__info__left">
            <form class="row sendContactMessage" method="POST">
              <div class="col-lg-6 col-12">
                <input class="send_name" name="send_name" type="text" placeholder="Name">
                <div class="text-warning nameError"></div>
              </div>
              <div class="col-lg-6 col-12">
                <input class="send_email" name="send_email" type="text" placeholder="Email">
                <div class="text-warning emailError"></div>
              </div>
              <div class="col-12">
                <input class="send_subject" name="send_subject" type="text" placeholder="Subject">
                <div class="text-warning subjectError"></div>
              </div>
              <div class="col-12">
                <textarea class="col-12" id="contact__message" name="contact__message" cols="30" rows="5" placeholder="Message"></textarea>
                <div class="text-warning messageError"></div>
              </div>
              <div class="col-12">
                <button type="submit" id="sendMessage" name="sendMessage">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php 
    require_once "./component/footer.php";
  ?>

    <script src="./js/contact.js"></script>
    <script src="./js/header.js"></script>
  </body>
</html>
