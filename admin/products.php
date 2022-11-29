<?php
session_start();
if (!isset($_SESSION['adminLog'])) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Product Management</title>

	<!-- bootstrap 5.0.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- font awesome 5.10.0 -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="css/index.css">

	<!-- products css -->
	<link href="./css/products.css" rel="stylesheet" />
	<style>
        table, th, tr, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

	<!-- copy hết div lớn này, viết content trong div.content, sau nav -->
	<div class="wrapper">
		<!-- Sidebar -->
		<?php
		require_once "./component/sidebar.php";
		?>
		<div id="content" style="width: 100%">
			<nav class="navbar navbar-light" style="background-color: #e3f2fd;justify-content: flex-end;">
				<button class="btn btn-primary adminLogout" style="padding: 10px;">Đăng xuất</button>
			</nav>

			<div class="container my-5">
				<div id="r1" class="row text-center mb-3">
					<h1>Products</h1>
					<input type="text" id="search_keyword" class="form-input" placeholder="Nhập từ khóa để tìm kiếm" name="search_keyword">
					<div class="keywordError">
        			</div>
					<button class="btn btn-primary" id="searchBtn" onclick="onClickSearchBtn()">Tìm kiếm</button>
				</div>
				<!-- table -->
				<div id="r2"></div>

				<!-- Add Button -->
				<div id="r3" class="row text-center">
					<div class="col">
						<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addProduct">ADD PRODUCT</button>
					</div>
				</div>

				<!-- Add Modal -->
				<?php require_once "./component/addProductModal.php" ?>

				<!-- Update Modal -->
				<?php require_once "./component/updateProductModal.php" ?>

				<!-- Search Modal -->
				<?php require_once "./component/searchModal.php"; ?>

			</div>
		</div>
		
	</div>
	
	<!-- jquery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- bootstrap 5.0.1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- products js -->
	<script src="./js/products.js"></script>

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

</html>