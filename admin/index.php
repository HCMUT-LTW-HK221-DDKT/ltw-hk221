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

	<title>Home Admin</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="css/index.css">

	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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

			<h1>Trang dành cho admin: theo dõi và chỉnh sửa các thông tin trên trang Web dễ dàng hơn :)</h1>
		</div>
	</div>


	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

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