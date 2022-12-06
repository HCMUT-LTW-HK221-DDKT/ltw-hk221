<?php
    $conn = new mysqli('localhost', 'root', '', 'data');
    if (isset($_POST['url'])){
        $url = mysqli_real_escape_string($conn,$_POST['url']);
        $q = "delete from blog where url = '".$url."'";
        if (mysqli_query($conn,$q)){
            echo "<p>Delete data successfully</p>";
        }
    }
    $conn->close();
?>