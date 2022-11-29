<?php
require_once "./database.php";

// get products on page
$query = "";
$query2="";
if(isset($_GET['id'])) {
	$keyword = $_GET['id'];
	$query = "SELECT * FROM order_items WHERE order_id ='$keyword' ";
	$query2   = "SELECT COUNT(id) AS numrows FROM order_items WHERE order_id = '$keyword' ";
}

$result = mysqli_query($conn, $query) or die('Error, query failed');

// how many rows we have in database

$result2  = mysqli_query($conn, $query2) or die('Error, query failed');
$row      = mysqli_fetch_assoc($result2);
$numrows  = $row['numrows'];


// creating previous and next link
// plus the link to go straight to
// the first and last page

if (!$result || !$result2) {
	echo json_encode(array("statusCode" => 400));
} else {
?>  
    <h4>Detail of Order: <?php echo $keyword; ?></h4>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>Product Id</th>
				<th>Quantity</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['id']; ?>">
					<td><?php echo $row['product_id']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
				</tr>
			<?php
			}
			?>

		</tbody>
	</table>

<?php
}
//close the connection
mysqli_close($conn);
?>
