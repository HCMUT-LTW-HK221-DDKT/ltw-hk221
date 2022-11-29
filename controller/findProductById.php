<?php
// find product by id
$id = $_GET['id'];

require_once "./database.php";

//execute the SQL query and return records
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
if (!$result) {
	echo mysqli_error($conn);
	exit(); // terminate script
}
// query ok
$row = mysqli_fetch_assoc($result);
echo json_encode($row);

//close the connection
mysqli_close($conn);
?>