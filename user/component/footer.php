<div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-12">
          <div class="about-us">
            <div class="logo">
              <a href="index.html">
                <img src="./img/footer-logo.png" alt="logo">
              </a>
            </div>
            <?php   
              require_once "../controller/database.php";     
              $query = "SELECT * FROM showrooms";
              $result = mysqli_query($conn, $query) or die('Error, query failed');
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<p><i class='fa fa-map-marker-alt'></i> ". $row['address'] . "</p>";
              }

              $query = "SELECT * FROM contacts";
              $result = mysqli_query($conn, $query) or die('Error, query failed');
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<p class='contact'><i class='fa fa-phone'></i> ".
                $row['phone']
                . "<i class='fa fa-envelope'></i> " . $row['email'] ."</p>";
              }
              //close the connection
              mysqli_close($conn);
            ?>
            <div class="social__redirect">
              <a target="_blank" class="facebook" href="#"><i
                class="fab fa-facebook-f"></i></a>
            <a target="_blank" class="youtube" href="#"><i
                class="fab fa-youtube"></i></a>
            <a target="_blank" class="instagram" href="#"><i
                class="fab fa-instagram"></i></a>
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
              <li><a href="#">Chính sách bảo hành và đổi trả</a></li>
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