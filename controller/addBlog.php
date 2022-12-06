<?php
    $conn = new mysqli('localhost', 'root', '', 'data');
    if (isset($_POST['desc'])){
        $date = mysqli_real_escape_string($conn,$_POST['date']);
        $desc = mysqli_real_escape_string($conn,$_POST['desc']);
        $img = mysqli_real_escape_string($conn,$_POST['img']);
        $url = mysqli_real_escape_string($conn,$_POST['url']);
        $q = "insert into blog (date,description,img,url) values ('".$date."','".$desc."','".$img."','".$url."')";
        if (mysqli_query($conn,$q)){
            echo "<p>Add data successfully</p>";
        }
    }
    $conn->close();
?>