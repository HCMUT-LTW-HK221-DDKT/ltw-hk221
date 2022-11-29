<?php require_once '../controller/user.php'; 
    if(!isset($_SESSION['username'])) {
        // if(!isset($_SESSION['previous_location'])) {
        //     echo "run";
        //     header('location: index.php');
        // }
        header('location: index.php');
    }
?>


<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Page</title>

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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



</head>

<body>

  <?php 
    require_once "./component/navbar.php";
  ?>
    <div class="toast" id="updateProfileSuccess">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-bell"></i> Cập nhật</strong>
        </div>
        <div class="toast-body">
            <div>Cập nhật thông tin thành công</div>
        </div>
    </div>
    <div class="toast" id="changePasswordSuccess">
        <div class="toast-header">
            <strong class="mr-auto"><i class="fa fa-bell"></i> Cập nhật</strong>
        </div>
        <div class="toast-body">
            <div>Thay đổi mật khẩu thành công</div>
        </div>
    </div>
    
  <?php 
    if (isset($_SESSION['updateProfileSuccess'])) {
        echo "
        <script>
        $(document).ready(function(){
            $('#updateProfileSuccess').toast('show');
        });
    </script>
        ";
      unset($_SESSION['updateProfileSuccess']);
    }
    if (isset($_SESSION['changePasswordSuccess'])) {
        echo "
        <script>
        $(document).ready(function(){
            $('#changePasswordSuccess').toast('show');
        });
    </script>
        ";
      unset($_SESSION['changePasswordSuccess']);
    }
  ?>



<div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img preview">
                        <img id="img" src="../uploads/<?php echo $_SESSION['imgUrl'] ?>" alt="" />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-head">
                        <h5>
                            <?php echo $_SESSION['username'] ?>
                        </h5>
                        <p class="proile-rating">Thời gian tạo: <br><span>
                            <?php echo $_SESSION['createtime'] ?>
                        </span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
    <button class="nav-link <?php
                            if(!isset($_SESSION['isUpdateProfile']) && !isset($_SESSION['isChangePassword'])) {
                                echo 'active';
                            };
                        ?>" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Thông tin</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link <?php
                            if(isset($_SESSION['isUpdateProfile'])) {
                                echo 'active';
                            };
                        ?>" id="update-tab" data-bs-toggle="tab" data-bs-target="#update" type="button" role="tab" aria-controls="update" aria-selected="false">Cập nhật hồ sơ</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link <?php
                            if(isset($_SESSION['isChangePassword'])) {
                                echo 'show active';
                            };
                        ?>" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Đổi mật khẩu</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order" type="button" role="tab" aria-controls="order" aria-selected="false">Đơn hàng</button>
  </li>
</ul>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade <?php
                            if(!isset($_SESSION['isUpdateProfile']) && !isset($_SESSION['isChangePassword'])) {
                                echo 'show active';
                            };
                        ?>" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Họ tên</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <?php echo $_SESSION['fullname'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Số điện thoại</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                    <?php echo $_SESSION['phone'] ?>
    
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                    <?php echo $_SESSION['email'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                    <?php echo $_SESSION['address'] ?>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade <?php
                            if(isset($_SESSION['isUpdateProfile'])) {
                                echo 'show active';
                            };
                        ?>" id="update" role="tabpanel" aria-labelledby="update-tab">
                            <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Họ tên</label>
                                </div>
                                <div class="col-md-6">
                                    <input name="update_name" id="edit-name" type="text" class="editable my-1 form-control" value="<?php echo $_SESSION['fullname'];?>">
                                    <div class="text-warning"><?php echo $signupFullnameError;?></div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Số điện thoại</label>
                                </div>
                                <div class="col-md-6">
                                    <input name="update_phone" id="edit-name" type="text" class="editable my-1 form-control" value="<?php echo $_SESSION['phone'] ?>">
                                    <div class="text-warning"><?php echo $signupPhoneError;?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input name="update_email" id="edit-name" type="text" class="editable my-1 form-control" value="<?php echo $_SESSION['email'] ?>">
                                    <div class="text-warning"><?php echo $signupEmailError;?></div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6">
                                    <label>Địa chỉ</label>
                                </div>
                                <div class="col-md-6">
                                    <input name="update_address" id="edit-name" type="text" class="editable my-1 form-control" value="<?php echo $_SESSION['address'] ?>">
                                    <div class="text-warning"><?php echo $signupAddressError;?></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Cập nhật ảnh đại diện</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="avatar" class="btn btn-lg" type="file" name="avatar" style="padding: 5px;"/>
                                </div>
                                <div class="text-warning"><?php echo $signUpImageError;?></div>
                            </div>
                                <button type="submit" id="editProfileBtn" name="editProfileBtn" class="blue-button ml-auto my-1">
                                    Cập nhật thông tin
                                </button>
                            </form>
                           
                        </div>
                        <div class="tab-pane fade <?php
                            if(isset($_SESSION['isChangePassword'])) {
                                echo 'show active';
                            };
                        ?>" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <form method="POST">
                                <div class="row">
                                        <div class="col-md-6">
                                            <label>Old password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="oldPassword" id="old-password" type="password" class="editable my-1 form-control pwd">
                                            <div>
                                                <?php echo $oldPasswordError;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>New password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input name="newPassword" id="password" type="password" class="editable my-1 form-control pwd">
                                            <div>
                                                <?php echo $newPasswordError;?>
                                            </div>
                                        </div>
                                    </div>
                      
                                    <button type="submit" id="changePasswordBtn" name="changePasswordBtn" class="blue-button ml-auto my-1">
                                    Đổi mật khẩu
                                    </button>
                                </form>
                                
                        </div>
                        <div class="tab-pane fade" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <p>Danh sách đơn hàng</p>
                            <?php 
                                require_once "../controller/database.php";
                                $username = $_SESSION['username'];
                                $query = "SELECT * FROM orders WHERE username='$username'";
                                $result = mysqli_query($conn, $query) or die('Error, query failed');
                                if (!$result) {
                                    echo "<div>Đã có lỗi xảy ra.</div>";
                                } else {
                                    ?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>Mã đơn hàng</th>
				<th>Ngày đặt</th>
				<th>Tổng giá tiền</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>

				<tr id="<?php echo $row['id'] ?>">
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['created_at'] ?></td>
					<td><?php echo $row['total_price'] ?> VNĐ</td>
				</tr>

			<?php
			}
			?>

		</tbody>
	</table>



<?php
}
                            ?> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
        



    <?php 
    require_once "./component/footer.php";
  ?>
  <!-- js bootstrap  -->


    </body>

</html>