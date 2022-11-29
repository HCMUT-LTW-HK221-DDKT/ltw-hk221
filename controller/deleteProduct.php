<?php
function delete() {
	require_once "./database.php";

	$query2 = "SELECT * FROM products WHERE id = {$_POST['id']}";
	$result2 = mysqli_query($conn, $query2);
	if (!mysqli_num_rows($result2)) {
		echo json_encode(array("statusCode" => 400, "info" => "This product doesn't exist!"));
		exit();
	} else if (!$result2) {
		echo json_encode(array("statusCode" => 400, "info" => "Delete product failed!"));
		exit();
	}

	$query = "DELETE FROM products WHERE id = {$_POST['id']}";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Delete product failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Delete product successfully!"));
	}

	mysqli_close($conn);
}

if (isset($_POST['id']) && !empty($_POST['id'])) {
	delete();
} else {
	echo json_encode(array("statusCode" => 401, "info" => "Not enough information for server!"));
}
?>
