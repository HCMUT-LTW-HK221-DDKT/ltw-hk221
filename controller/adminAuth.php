<?php 
session_start();
// session_destroy();
$hn = 'localhost';
$db = 'data';
$un = 'root';
$pw = '';
// echo "run 1234";
$usernameError = "";
$emailError = "";
$phoneError = "";

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error){
    die("Fatal error");
}
    if(isset($_POST['requestLogin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_check_query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $username_check_query);
        $user = mysqli_fetch_assoc($result);

        if(!$user) {
            echo json_encode(array("statusCode" => 400, "info" => "Thông tin đăng nhập không hợp lệ!"));
        }
        else {
            $_SESSION['adminLog'] = $username;
            echo json_encode(array("statusCode" => 200, "info" => "Đăng nhập thành công!"));
        }
    }

    if(isset($_POST['requestLogout'])) {
        unset($_SESSION['adminLog']);
        session_destroy();
        echo json_encode(array("statusCode" => 200, "info" => "Đăng xuất thành công!"));
    }
?>