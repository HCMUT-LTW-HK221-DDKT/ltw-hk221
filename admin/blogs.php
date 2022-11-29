<?php
session_start();
if (!isset($_SESSION['adminLog'])) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Blog management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- import bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
	<!-- font awesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="css/index.css">


</head>

<body>
    <div class="wrapper">
		<!-- Sidebar -->
		<?php
		require_once "./component/sidebar.php";
		?>

        <div id="content" style="width: 100%">
			<nav class="navbar navbar-light" style="background-color: #e3f2fd;justify-content: flex-end; height: 66px; padding: 0 20px;">
				<button class="btn btn-primary adminLogout" style="padding: 6px;">Đăng xuất</button>
			</nav>

            <div class="container">
                <form id = "bl" class="form-group">
                    <div class="form-group">
                        <label for="date">Ngày:</label>
                        <input type="text" name="date" id="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="desc">Mô tả:</label>
                        <input type="text" name="desc" id="desc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="img">File hình ảnh:</label>
                        <input type="text" name="img" id="img" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="url">URL:</label>
                        <input type="text" name="url" id="url" class="form-control">
                    </div>
                    <button type="button" class="btn btn-default" name="add" id ="add">Add data</button>
                    <button type="button" class="btn btn-default" name="del" id ="del">Delete data</button>
                </form>
                <div id = 'response'></div>
                <div id = "show"></div>
            </div>
        </div>
	</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- bootstrap 5.0.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="./js/blogs.js"></script>
    <script>
        $(document).ready(function() {
            $('.adminLogout').click(function() {
                $.ajax({
                    type: "POST",
                    url: "../controller/adminAuth.php",
                    data: {
                        requestLogout: true
                    },
                    success: function(data) {
                        data = JSON.parse(data);
                        // console.log(data)
                        if (data.statusCode == 200) {
                            window.location.replace('login.php');
                        }
                    },
                });
            });
        });
    </script>
</body>