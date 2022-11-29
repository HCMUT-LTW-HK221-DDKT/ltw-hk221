<?php 
    session_start();
    if(isset($_SESSION['adminLog'])) {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <!-- import bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />

  <!-- font google  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- main css  -->
  <link rel="stylesheet" href="css/index.css" />
    
</head>
<body>

        <div class="login">
          <div class="login-container">
            <h1 class="login-heading">Đăng nhập trang quản trị</h1>
            <div></div>
            <form class="login-form" action="" method="POST">
              <div class="form-group">
                <label for="login_username"  class="form-label">Tên tài khoản</label>
                <input type="text" id="login_username" class="form-input" placeholder="Ví dụ: user123" name="login_username">
                <div class="usernameError"></div>
              </div>
              <div class="form-group">
                <label for="login_password" class="form-label">Mật khẩu</label>
                <input type="password" id="login_password" class="form-input" placeholder="************" name="login_password">
                <div class="passwordError"></div>
              </div>
              <div class="form-group login-term">
              <button type="submit" name="btnLogin" class="btn btn--gradient">Đăng nhập</button>
            </form>
          </div>
        </div>
    </div>
      <div class="toast" id="loginNotification">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-bell"></i>Thông báo</strong>
            <strong class="me-auto"></strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <div class="loginResult">Bạn đã đăng nhập thành công</div>
        </div>
      </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- bootstrap 5.0.1 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="./js/loginAdmin.js"></script>
        
</body>
</html>