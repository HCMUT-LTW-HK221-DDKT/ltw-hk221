<?php
session_start();
if(!isset($_SESSION["totalquantity"])) {
    $_SESSION["totalquantity"] = 0;
  }

$signupUsernameError = "";
$signupFullnameError = "";
$signupEmailError = "";
$signupPasswordError = "";
$signupPhoneError = "";
$signupAddressError = "";
$invalidAccountError = "";
$oldPasswordError = "";
$newPasswordError = "";
$signUpImageError = "";
// $url = explode("/", $_SERVER['REQUEST_URI']);
// if($url[count($url) - 1] != "login.php" && $url[count($url) - 1] != "signup.php") {
//     $_SESSION['previous_location'] = $url[count($url) - 1];
//     // echo $url[count($url) - 1];
// }
// echo $_SESSION['previous_location'];
require_once "database.php";

if(isset($_POST['btnSignup'])) {
    $username = $_POST['signup_username'];
    $fullname = $_POST['signup_fullname'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];
    $phone = $_POST['signup_phone'];
    $address = $_POST['signup_addr'];

    $username_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $username_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($username == "") {
        $signupUsernameError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($username) < 5 || strlen($username) > 15 || preg_match("/[ ]/", $username)) {
        $signupUsernameError = "Tên tài khoản phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }
    else if($user) {
        $signupUsernameError = "Tên tài khoản đã tồn tại trên hệ thống.";
    }

    if ($fullname == "") {
        $signupFullnameError = "Vui lòng không bỏ trống.";
    }

    $email_check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($email == "") {
        $signupEmailError = "Vui lòng không bỏ trống.";
    }
    else if(!preg_match("/^.*@.*\..*/i", $email)) {
        $signupEmailError = "Email phải đúng định dạng sth@sth.sth.";
    }
    else if($user) {
        $signupEmailError = "Email đã tồn tại trên hệ thống.";
    }

    
    if ($password == "") {
        $signupPasswordError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($password) < 5 || strlen($password) > 15 || preg_match("/[ ]/", $password)) {
        $signupPasswordError = "Mật khẩu phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }
    
    $phone_check_query = "SELECT * FROM users WHERE phone='$phone'";
    $result = mysqli_query($conn, $phone_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($phone == "") {
        $signupPhoneError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($phone) < 10 || strlen($phone) > 11 || !preg_match("/[0-9]/", $phone)) {
        $signupPhoneError = "Số điện thoại phải chứa từ 10-11 số và không chứa khoảng trắng.";
    }
    else if($user) {
        $signupPhoneError = "Số điện thoại đã tồn tại trên hệ thống.";
    }

    if ($address == "") {
        $signupAddressError = "Vui lòng không bỏ trống.";
    }

    $unique_image = "";
    if ($_FILES['signup_img']['name']) {
        $file_name = $_FILES['signup_img']['name'];
		$file_size = $_FILES['signup_img']['size'];
		$file_temp = $_FILES['signup_img']['tmp_name'];
        $div = explode(".", $file_name);
		$file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
		$uploaded_image = "../uploads/" . $unique_image;

        if (getimagesize($file_temp) === false) {
            $signUpImageError = "File không phải là ảnh";
        } else if ($file_size > 2000000) {
            // Check file size
            $signUpImageError =  "Kích thước ảnh quá lớn";
        } else if ($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg" && $file_ext != "gif") {
            // Allow certain file formats
            $signUpImageError =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed!";
        }
		else {
            if (!is_uploaded_file($file_temp)) {
				$signUpImageError = "Fails to upload file";
			}
            else {
                move_uploaded_file($file_temp, $uploaded_image);
            }
        }	// echo "-------------file_temp: " . $file_temp;
		
    }
    else {
        $unique_image = "defaultavatar.png";
    }

    if($signupUsernameError == "" && $signupFullnameError == "" && $signupEmailError=="" && $signupPasswordError== "" && $signupPhoneError == "" && $signupAddressError == "" && $signUpImageError == "") {
        $createOn = new DateTime('now', new DateTimezone('Asia/Bangkok'));
        $createOn = $createOn->format("Y-m-d H:i:s");
        $query = "INSERT INTO users (username, fullname, email, phone, address, password, createtime, imgUrl) VALUES ('$username', '$fullname','$email', '$phone', '$address', '$password', '$createOn', '$unique_image');";
        if (mysqli_query($conn, $query)) {
            // $_SESSION['userUser'] = $username;
            // $_SESSION['userName'] = $name;
            $_SESSION['signup-success'] = "Sign Up Success";
            // header('location: index.php');
        } else {
            die($db->error . __LINE__);
        }
    }
}

if(isset($_POST['btnLogin'])) {
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    $username_check_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $username_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($username == "") {
        $signupUsernameError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($username) < 5 || strlen($username) > 15 || preg_match("/[ ]/", $username)) {
        $signupUsernameError = "Tên tài khoản phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }

    if ($password == "") {
        $signupPasswordError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($password) < 5 || strlen($password) > 15 || preg_match("/[ ]/", $password)) {
        $signupPasswordError = "Mật khẩu phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }

    if($signupPasswordError == "" && $signupUsernameError == "") {
        if(!$user) {
            $invalidAccountError = "Thông tin đăng nhập không hợp lệ.";
        }
        else if($user['status'] == "banned") {
            $invalidAccountError = "Tài khoản đã bị khóa.";
        }
        else {
            
            $_SESSION['showLoginSuccess'] = "";
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['imgUrl'] = $user['imgUrl'];
            $_SESSION['createtime'] = $user['createtime'];
        }
    }
    

}

if (isset($_GET['logoutBtn'])) {
    unset($_SESSION['username']);
    session_destroy();
    // $_SESSION['previous_location'] = "";
    header('location: index.php');
}

if (isset($_POST['editProfileBtn'])) {
    unset($_SESSION['isChangePassword']);

    $fullname = $_POST['update_name'];
    $email = $_POST['update_email'];
    $phone = $_POST['update_phone'];
    $address = $_POST['update_address'];

    if ($fullname == "") {
        $signupFullnameError = "Vui lòng không bỏ trống.";
    }

    $email_check_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $email_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($email == "") {
        $signupEmailError = "Vui lòng không bỏ trống.";
    }
    else if(!preg_match("/^.*@.*\..*/i", $email)) {
        $signupEmailError = "Email phải đúng định dạng sth@sth.sth.";
    }
    else if($user && $email != $_SESSION['email']) {
        $signupEmailError = "Email đã tồn tại trên hệ thống.";
    }

      
    $phone_check_query = "SELECT * FROM users WHERE phone='$phone'";
    $result = mysqli_query($conn, $phone_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($phone == "") {
        $signupPhoneError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($phone) < 10 || strlen($phone) > 11 || !preg_match("/[0-9]/", $phone)) {
        $signupPhoneError = "Số điện thoại phải chứa từ 10-11 số và không chứa khoảng trắng.";
    }
    else if($user && $phone != $_SESSION['phone']) {
        $signupPhoneError = "Số điện thoại đã tồn tại trên hệ thống.";
    }

    if ($address == "") {
        $signupAddressError = "Vui lòng không bỏ trống.";
    }

    $unique_image = "";
    if ($_FILES['avatar']['name']) {
        $file_name = $_FILES['avatar']['name'];
		$file_size = $_FILES['avatar']['size'];
		$file_temp = $_FILES['avatar']['tmp_name'];

        $div = explode(".", $file_name);
			$file_ext = strtolower(end($div));


			$unique_image = substr(md5(time()), 0, 10) . '.' . $file_ext;
			$uploaded_image = "../uploads/" . $unique_image;

            if (getimagesize($file_temp) === false) {
                $signUpImageError = "File không phải là ảnh";
            } else if ($file_size > 2000000) {
                // Check file size
                $signUpImageError =  "Kích thước ảnh quá lớn";
            } else if ($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg" && $file_ext != "gif") {
                // Allow certain file formats
                $signUpImageError =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed!";
            }
            else {
			// echo "-------------file_temp: " . $file_temp;
            if (!is_uploaded_file($file_temp)) {
				echo "Fails to upload file";
			}
            else {
                move_uploaded_file($file_temp, $uploaded_image);
                unlink("../uploads/" . $_SESSION['imgUrl']);
            }
            }
    }
    else {
        $unique_image = $_SESSION['imgUrl'];
    }

    if($signupFullnameError == "" && $signupEmailError=="" && $signupPhoneError == "" && $signupAddressError == "" && $signUpImageError == "") {
        $query = "UPDATE users SET fullname= '$fullname', email='$email', phone='$phone', address='$address', imgUrl='$unique_image' WHERE username='$_SESSION[username]';";
        
        if (mysqli_query($conn, $query)) {
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;
            $_SESSION['imgUrl'] = $unique_image;
            $_SESSION['updateProfileSuccess'] = "true";
            unset($_SESSION['isUpdateProfile']);
        } else {
            die($db->error . __LINE__);
        }
    }
    else {
        $_SESSION['isUpdateProfile'] = "true";
    }
}

if (isset($_POST['changePasswordBtn'])) {
    unset($_SESSION['isUpdateProfile']);
    $oldPass = $_POST['oldPassword'];
    $newPass = $_POST['newPassword'];

    $username_check_query = "SELECT * FROM users WHERE username='$_SESSION[username]' AND password='$oldPass'";
    $result = mysqli_query($conn, $username_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($oldPass == "") {
        $oldPasswordError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($oldPass) < 5 || strlen($oldPass) > 15 || preg_match("/[ ]/", $oldPass)) {
        $oldPasswordError = "Mật khẩu phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }
    else if(!$user) {
        $oldPasswordError = "Mật khẩu hiện tại không chính xác.";
    }

    if ($newPass == "") {
        $newPasswordError = "Vui lòng không bỏ trống.";
    }
    else if(strlen($newPass) < 5 || strlen($newPass) > 15 || preg_match("/[ ]/", $newPass)) {
        $newPasswordError = "Mật khẩu phải chứa từ 5-15 ký tự và không chứa khoảng trắng.";
    }

    if($newPasswordError == "" && $oldPasswordError=="") {
        $query = "UPDATE users SET password= '$newPass' WHERE username='$_SESSION[username]';";
        if (mysqli_query($conn, $query)) {
            $_SESSION['changePasswordSuccess'] = "true";
            unset($_SESSION['isChangePassword']);
        } else {
            die($db->error . __LINE__);
        }
    }
    else {
        $_SESSION['isChangePassword'] = "true";
    }

    

}

?>