<?php
	require_once "./database.php";

    if(isset($_POST['id'])) {
    $id = $_POST['id'];
	$status = "SELECT * FROM orders WHERE id = '$id'";
	$result = mysqli_query($conn, $status);
	if (!mysqli_num_rows($result)) {
		echo json_encode(array("statusCode" => 400, "info" => "This order doesn't exist!"));
		exit();
	} else if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Update order failed!"));
		exit();
	}
    $row = mysqli_fetch_assoc($result);
    if ($row['Status'] == "New Order") {
	    $query = "UPDATE orders SET Status = 'Prepared' WHERE id = '$id'";
	    $result = mysqli_query($conn, $query);
	    if (!$result) {
		    echo json_encode(array("statusCode" => 400, "info" => "Update order status failed!"));
	    } else {
		    echo json_encode(array("statusCode" => 200, "info" => "Update order status successfully!"));
	    }
    }
    else if ($row['Status'] == "Prepared"){
        $query = "UPDATE orders SET Status = 'Done' WHERE id = '$id'";
	    $result = mysqli_query($conn, $query);
	    if (!$result) {
		    echo json_encode(array("statusCode" => 400, "info" => "Update order status failed!"));
	    } else {
		    echo json_encode(array("statusCode" => 200, "info" => "Update order status successfully!"));
	    }
    }
    else exit();
}
	mysqli_close($conn);
