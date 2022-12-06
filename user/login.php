<?php require_once '../controller/user.php';
  if(isset($_SESSION['username']) && !isset($_SESSION['showLoginSuccess'])) {
    header('location: index.php'); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <title>Login Page - Tinh Lâm JW</title>
    <!-- import bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />

  <!-- font google  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
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

<div class="toast" id="loginSuccess">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-bell"></i>Thông báo</strong>
        </div>
        <div class="toast-body">
            <div>Bạn đã đăng nhập thành công</div>
        </div>
    </div>

<?php  
if (isset($_SESSION['showLoginSuccess'])) {
  echo "
  <script>
  $(document).ready(function(){
      $('#loginSuccess').toast('show');
  });
</script>
  ";
  unset($_SESSION['showLoginSuccess']);
  echo "
      <script>
          setTimeout(function(){window.location.replace('index.php');}, 1500);
      </script>
    ";
} 
else {
  unset($_SESSION['showLoginSuccess']);
}
?>
        <div class="signup">
          <div class="signup-container">
            <div class="signup-brand">
                <a href="index.php"><img src="./img/logo.png" alt="" /></a>
            </div>
            <h1 class="signup-heading">Đăng nhập</h1>
            <h4 class="text-warning loginErrorResult"><?php echo $invalidAccountError;?></h4>
            <form class="signup-form" action="" method="POST">
              <div class="form-group">
                <label for="login_username"  class="form-label">Tên tài khoản</label>
                <input type="text" id="login_username" class="form-input" placeholder="Ví dụ: user123" name="login_username">
                <div class="text-warning"><?php echo $signupUsernameError;?></div>
              </div>
              <div class="form-group">
                <label for="login_password" class="form-label">Mật khẩu</label>
                <input type="password" id="login_password" class="form-input" placeholder="************" name="login_password">
                <div class="text-warning"><?php echo $signupPasswordError;?></div>
              </div>
              <div class="form-group signup-term">
              <a href="signup.php" class="signup-term-link">Đăng ký</a> nếu chưa có tài khoản. 
              </div>
              <button type="submit" name="btnLogin" class="btn btn--gradient">Đăng nhập</button>
            </form>
          </div>
        </div>
</body>
</html>