<?php require_once '../controller/user.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <title>Signup Page - Tinh Lâm JW</title>
    <!-- import bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
<div class="toast" id="signUpSuccess">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-bell"></i>Thông báo</strong>
        </div>
        <div class="toast-body">
            <div>Đăng ký tài khoản thành công</div>
        </div>
    </div>

<?php  
if (isset($_SESSION['signup-success'])) {
  
  echo "
        <script>
        $(document).ready(function(){
            $('#signUpSuccess').toast('show');
        });
    </script>
        ";
      unset($_SESSION['signup-success']);
      echo "
      <script>
          setTimeout(function(){window.location.replace('login.php');}, 1500);
      </script>
    ";
} 
else {
  unset($_SESSION['signup-success']);
}
?>


                             
                                        
                                     

        <div class="signup">
          
          <div class="signup-container">
            <div class="signup-brand">
              <a href="index.php"><img src="./img/logo.png" alt="" /></a>
            </div>
            <h1 class="signup-heading">Đăng ký</h1>
            <form class="signup-form" action="" method="POST" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-6">
                <label for="signup_username" class="form-label">Tên tài khoản</label>
                <input type="text" id="signup_username" class="form-input" placeholder="Ví dụ: user123"  name="signup_username">
                <div class="text-warning"><?php echo $signupUsernameError;?></div>
              </div>
              <div class="form-group col-6">
                <label for="signup_password" class="form-label">Mật khẩu</label>
                <input type="password" id="signup_password" class="form-input" placeholder="************"  name="signup_password">
                <div class="text-warning"><?php echo $signupPasswordError;?></div>
              </div>
              <div class="form-group col-6">
                <label for="signup_fullname"  class="form-label">Họ tên</label>
                <input type="text" id="signup_fullname" class="form-input" placeholder="Ex: Tuan Tran" name="signup_fullname">
                <div class="text-warning"><?php echo $signupFullnameError;?></div>
              </div>

              <div class="form-group col-6">
                <label for="signup_email" class="form-label">Email</label>
                <input type="text" id="signup_email" class="form-input" placeholder="Ví dụ: user@gmail.com"  name="signup_email">
                <div class="text-warning"><?php echo $signupEmailError;?></div>
              </div>
              <div class="form-group col-6">
                <label for="signup_phone" class="form-label">Số điện thoại</label>
                <input type="text" id="signup_phone" class="form-input" placeholder="Ví dụ: 0901234567"  name="signup_phone">
                <div class="text-warning"><?php echo $signupPhoneError;?></div>
              </div>
              <div class="form-group col-6">
                <label for="signup_addr" class="form-label">Địa chỉ</label>
                <input type="text" id="signup_addr" class="form-input" placeholder="Ví dụ: Quận 1, TPHCM"  name="signup_addr">
                <div class="text-warning"><?php echo $signupAddressError;?></div>
              </div>
              <div class="form-group col-6">
                <label for="signup_img" class="form-label">Ảnh đại diện</label>
                <input type="file" id="signup_img" class="form-input" name="signup_img">
                <div class="text-warning"><?php echo $signUpImageError;?></div>
              </div>
              </div>
              
              
              <div class="form-group signup-term">
              <a href="login.php" class="signup-term-link">Đăng nhập</a> nếu đã có tài khoản.
              </div>
              <button type="submit" name="btnSignup" class="btn btn--gradient">Đăng ký</button>
            </form>
          </div>
        </div>
        
</body>
</html>