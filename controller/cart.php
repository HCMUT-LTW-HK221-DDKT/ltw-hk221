<?php
require_once "./database.php";
session_start();

if (isset($_POST["addCart"])) {
	$id = $_POST["id"];
	$soLuong = $_POST["soLuong"];

	if (isset($_SESSION['cart'][$id])) {

		$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + $soLuong;
	} else {
		$_SESSION['cart'][$id] = array(
			"id" => $id,
			"quantity" => $soLuong,
		);
	}
	$_SESSION["totalquantity"] = $_SESSION["totalquantity"] + $soLuong;
	echo json_encode(array("statusCode" => 200));
}

if (isset($_POST["adjustCart"])) {
	$id = $_POST["id"];
	$soLuong = $_POST["soLuong"];

	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + $soLuong;
	} else {
		// $_SESSION['cart'][$id] = array(
		// 	"id" => $id,
		// 	"quantity" => $soLuong,
		// );
	}
	$_SESSION["totalquantity"] = $_SESSION["totalquantity"] + $soLuong;
	echo json_encode(array("statusCode" => 200));
}

if (isset($_POST["deleteOrderItem"])) {
	$id = $_POST["id"];
	$soLuong = $_POST["soLuong"];

	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] - $soLuong;
		unset($_SESSION['cart'][$id]);
	} else {
		// $_SESSION['cart'][$id] = array(
		// 	"id" => $id,
		// 	"quantity" => $soLuong,
		// );
	}
	$_SESSION["totalquantity"] = $_SESSION["totalquantity"] - $soLuong;
	echo json_encode(array("statusCode" => 200));
}

if (isset($_GET["getCart"])) {
	if ($_SESSION["totalquantity"] == 0) {
?>
		<div class="container my-5 py-5">
			<div class="row my-5 py-5">
				<h1>Giỏ hàng trống, vui lòng chọn sản phẩm.</h1>
			</div>
		</div>
		<?php

	} else {
		$query = "SELECT * FROM products WHERE id IN (";

		foreach ($_SESSION['cart'] as $id => $value) {
			$query .= $id . ",";
		}
		$query = substr($query, 0, -1) . ") ORDER BY name ASC";
		$result = mysqli_query($conn, $query) or die('Error, query failed');


		$totalPrice = 0;
		if (!$result) {
			echo json_encode(array("statusCode" => 400));
		} else {
		?>
			<div class="container my-5 py-5">
				<div class="row">
					<div class="col-lg-9 table-responsive-sm">
						<table class="table table-striped table-hover text-center align-middle">
							<thead>
								<tr>
									<th style="min-width: 10rem">Hình ảnh</th>
									<th>Tên sản phẩm</th>
									<th>Số lượng</th>
									<th>Đơn giá</th>
									<th>Tổng tiền</th>
									<th>Xoá</th>
								</tr>
							</thead>
							<tbody>
								<?php
								//fetch the data from the database
								while ($row = mysqli_fetch_assoc($result)) {
									$subTotal = $_SESSION['cart'][$row['id']]['quantity'] * $row['price'];
									$totalPrice += $subTotal;
								?>
									<tr id="<?php echo $row['id'] ?>">
										<td style="width: 10rem"><img src="../uploads/<?php echo $row['imgUrl'] ?>" alt="item" style="width: 100%" /></td>
										<td><?php echo $row['name'] ?></td>
										<td>
											<div class="d-flex justify-content-center">
												<button class="minus-button soLuongMinusButton">
													&#x2014;
												</button>
												<input class="plus-minus-input soLuongInput" name="quantity[<?php echo $row['id'] ?>]" type="number" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" step="1" />
												<button class="plus-button soLuongPlusButton">
													&#x254B;
												</button>
											</div>
										</td>
										<td class="price">
											<?php echo $row['price']; ?>
										</td>
										<td class="price">
											<?php echo $_SESSION['cart'][$row['id']]['quantity'] * $row['price'] ?>
										</td>
										<td>
											<button class="delete"><i class='fas fa-trash'></i></button>
										</td>
									</tr>

								<?php
								}
								$_SESSION['totalPrice'] = intval($totalPrice);
								?>

							</tbody>
						</table>
					</div>
					<div class="col-lg-3 my-5 text-center">
						<p>
							Tổng giá trị đơn hàng:<br><span id="totalPrice" class="price fs-1 fw-bold"><?php echo $totalPrice ?></span>
						</p>
						<button id="datHang" class="btn fs-1 fw-bold" style="background-color: #7c6455; color: white;">ĐẶT HÀNG</button>
					</div>
				</div>
			</div>

<?php

		}
	}
}

?>