<?php 
    require_once "./database.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require_once "../PHPMailer/src/PHPMailer.php";
    require_once "../PHPMailer/src/Exception.php";
    require_once "../PHPMailer/src/SMTP.php";

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if(isset($_POST['adminRequestResetPassword'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $newpassword = generateRandomString();
        $message = "Mật khẩu mới cho tài khoản của bạn là " . $newpassword;
        
        $mail = new PHPMailer(true);    
   
                        //Server settings
                        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'quocduy.nguyen6598@gmail.com';                 // SMTP username
                        $mail->Password = 'Duy@06051998';                           // SMTP password
                        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 465;                                    // TCP port to connect to
                    
                        //Recipients
                        $mail->isHTML(true); 
                        $mail->setFrom($email, $name);
                        $mail->addAddress($email, $name);     // Add a recipient
   
                    
                        //Content
                                                         // Set email format to HTML
                        $mail->Subject = "Reset password for account ". $username;
                        $mail->Body    = $message;
                        $mail->AltBody = $message;

                        $query = "UPDATE users SET password='$newpassword' WHERE username='$username'";
                        $result = mysqli_query($conn, $query) or die('Error, query failed');
                    
                        if (!$result) {
                            echo json_encode(array("statusCode" => 400, "info" => "Reset password failed!"));
                        } else {
                            if($mail->send()) {
                                echo json_encode(array("statusCode" => 200, "info" => "Reset password success! Automated email has been sent to the customer."));
                            }
                            else {
                                echo json_encode(array("statusCode" => 401, "info" => "Automated email was not sent to the customer."));
                            }
                        }               
                        ;
    }

    if(isset($_POST['userSendContactForm'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $mail = new PHPMailer(true);    
   
                        //Server settings
                        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'quocduy.nguyen6598@gmail.com';                 // SMTP username
                        $mail->Password = 'Duy@06051998';                           // SMTP password
                        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 465;                                    // TCP port to connect to
                    
                        //Recipients
                        $mail->isHTML(true); 
                        $mail->setFrom('tinhlamjw@gmail.com', 'admin');     // Add a recipient
                        $mail->addAddress($email, $name);
   
                    
                        //Content
                                                         // Set email format to HTML
                        $mail->Subject = $subject."(". $name . " - " . $email . ")";
                        $mail->Body    = $message;
                        $mail->AltBody = $message;

                    
                        if($mail->send()) {
                            echo json_encode(array("statusCode" => 200, "info" => "Send contact email success."));
                        }
                        else {
                            echo json_encode(array("statusCode" => 401, "info" => "Send contact email fail."));
                        }             
                        ;
    }


?>