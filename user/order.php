<?php
require_once '../controller/user.php';

if (!isset($_SESSION['username'])) {
	echo "<script>alert('Quý khách vui lòng đăng nhập để đặt hàng!');</script>";
	echo "<script>window.open('login.php', '_self');</script>";
	exit();
}

// user refresh page after making order
if (!isset($_SESSION['cart']) || $_SESSION["totalquantity"] == 0) {
	echo "<script>window.open('index.php', '_self');</script>";
	exit();
}

$_SESSION['orderSuccess'] = true;
$uniqid = uniqid();
$_SESSION['orderId'] = $uniqid;
$totalPrice = $_SESSION['totalPrice'];
$username = $_SESSION['username'];
$query = "INSERT INTO orders (id, total_price, username) VALUES ('$uniqid', $totalPrice, '$username')";
$result = mysqli_query($conn, $query);
if (!$result) {
	echo "<script>alert('Có lỗi khi lưu đơn hàng vào hệ thống!');</script>";
	$_SESSION['orderSuccess'] = false;
}

foreach ($_SESSION['cart'] as $key => $orderItem) {
	$productId = intval($orderItem['id']);
	$quantity = intval($orderItem['quantity']);
	$query2 = "INSERT INTO order_items (quantity, product_id, order_id) VALUES ($quantity, $productId, '$uniqid')";
	$result2 = mysqli_query($conn, $query2);
	if (!$result2) {
		echo "<script>alert('Có lỗi khi lưu sản phẩm có mã {$key} vào đơn hàng!');</script>";
		$_SESSION['orderSuccess'] = false;
	}
}
unset($key);
unset($orderItem);

// close the connection
// mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Trang đơn hàng</title>

	<!-- bootstrap 5.0.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!-- font google  -->
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet" />

	<!-- main css  -->
	<link rel="stylesheet" href="./css/index.css" />
</head>

<body>
	<?php require_once "./component/navbar.php"; ?>

	<div class="container my-5 py-5">
		<div class="row my-5 py-5">
			<?php
			if (!$_SESSION['orderSuccess']) {
			?>
				<h1>Đặt hàng không thành công!<br>Xin quý khách vui lòng đặt hàng lại sau!</h1>
			<?php
			} else {
			?>
				<h1 id="successful">Đặt hàng thành công!<br>Mã đơn hàng là <?php echo $uniqid; ?></h1>
			<?php
				unset($_SESSION['cart']);
				$_SESSION["totalquantity"] = 0;
			}

			unset($_SESSION['orderSuccess']);
			?>
		</div>
	</div>

	<?php require_once "./component/footer.php"; ?>

	<!-- jquery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<!-- bootstrap 5.0.1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- header.js -->
	<script src="./js/header.js"></script>

	<script>
		$(document).ready(function() {
			if ($("h1").attr("id") == "successful") {
				$(".cart__count").each(function() {
					$(this).text("0");
				});
			}
		});
	</script>
</body>

</html>