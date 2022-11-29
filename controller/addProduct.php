<?php
function add($name, $description, $price, $hashed_file_name)
{
	require_once "./database.php";

	$query = "INSERT INTO products (name, description, price, imgUrl) VALUES ('$name', '$description', $price, '$hashed_file_name')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Add product failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Add product successfully!"));
	}

	mysqli_close($conn);
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	// image file
	$target_dir = "../uploads/";
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_temp = $_FILES['image']['tmp_name'];
	$div = explode(".", $file_name);
	$file_ext = strtolower(end($div));
	$hashed_file_name = substr(md5(time()), 0, 10) . '.' . $file_ext;
	$target_file = $target_dir . $hashed_file_name;

	// validation
	if (getimagesize($file_temp) === false) {
		// Check if image file is a actual image or fake image
		echo json_encode(array("statusCode" => 401, "info" => "File is not an image!"));
	}	else if (file_exists($target_file)) {
		// Check if file already exists
		echo json_encode(array("statusCode" => 402, "info" => "Sorry, file already exists!"));
	} else if ($file_size > 1000000) {
		// Check file size
		echo json_encode(array("statusCode" => 403, "info" => "Sorry, your file is too large!"));
	} else if ($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg" && $file_ext != "gif") {
		// Allow certain file formats
		echo json_encode(array("statusCode" => 404, "info" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed!"));
	} else if (!move_uploaded_file($file_temp, $target_file)) {
		// Can't move temp file to target destination
		echo json_encode(array("statusCode" => 405, "info" => "Sorry, there was an error uploading your file!"));
	}	else {
		// everything ok -> add into database
		add($name, $description, $price, $hashed_file_name);
	}
} else {
	echo json_encode(array("statusCode" => 406, "info" => "Not enough information for server!"));
}
?>