<?php
require_once "./database.php";

// how many rows to show per page
$rowsPerPage = 12;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if (isset($_GET['page'])) {
	$pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

// get products on page
$query = "";
$query2="";
if(isset($_GET['keyword'])) {
	$keyword = $_GET['keyword'];
	$query = "SELECT * FROM orders WHERE Status LIKE '%$keyword%' " .
	"LIMIT $offset, $rowsPerPage";
	$query2   = "SELECT COUNT(id) AS numrows FROM orders WHERE Status LIKE '%$keyword%' ";
}
else {
	$query = "SELECT * FROM orders ". "LIMIT $offset, $rowsPerPage";
    $query2   = "SELECT COUNT(id) AS numrows FROM orders";
}

$result = mysqli_query($conn, $query) or die('Error, query failed');

// how many rows we have in database

$result2  = mysqli_query($conn, $query2) or die('Error, query failed');
$row      = mysqli_fetch_assoc($result2);
$numrows  = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows / $rowsPerPage);

// creating current link
$current =
	"<li class='page-item active' aria-current='page'>"
	. "<button class='page-link' data-page='0'>$pageNum</button>"
	. "</li>";

// creating previous and next link
// plus the link to go straight to
// the first and last page

if ($pageNum > 1) {
	$page  = $pageNum - 1;
	$prev  =
		"<li class='page-item'>"
		. "<button class='page-link' data-page='$page'>&#x2190;</button>"
		. "</li>";

	$first =
		"<li class='page-item'>"
		. "<button class='page-link' data-page='1'>&#x21D0;</button>"
		. "</li>";
} else {
	$prev  = // we're on page one, don't print previous link
		"<li class='page-item disabled'>"
		. "<button class='page-link' tabindex='-1' aria-disabled='true' data-page='0'>&#x2190;</button>"
		. "</li>";
	$first = // nor the first page link
		"<li class='page-item disabled'>"
		. "<button class='page-link' tabindex='-1' aria-disabled='true' data-page='0'>&#x21D0;</button>"
		. "</li>";
}

if ($pageNum < $maxPage) {
	$page = $pageNum + 1;
	$next =
		"<li class='page-item'>"
		. "<button class='page-link' data-page='$page'>&#x2192;</button>"
		. "</li>";

	$last =
		"<li class='page-item'>"
		. "<button class='page-link' data-page='$maxPage'>&#x21D2;</button>"
		. "</li>";
} else {
	$next = // we're on the last page, don't print next link
		"<li class='page-item disabled'>"
		. "<button class='page-link' tabindex='-1' aria-disabled='true' data-page='0'>&#x2192;</button>"
		. "</li>";
	$last = // nor the last page link
		"<li class='page-item disabled'>"
		. "<button class='page-link' tabindex='-1' aria-disabled='true' data-page='0'>&#x21D2;</button>"
		. "</li>";
}

if (!$result || !$result2) {
	echo json_encode(array("statusCode" => 400));
} else {
?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>Id</th>
				<th>Ordered Date</th>
				<th>Total Price</th>
				<th>UserName</th>
				<th>Details</th>
                <th>Status</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['id']; ?>">
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['created_at']; ?></td>
					<td class="price"><?php echo $row['total_price']; ?></td>
                    <td><?php echo $row['username']; ?></td>
					<td>
                        <a href="">Detail</a>
					</td>
					<td><?php echo $row['Status']; ?></td>
                    <td><button class="btn btn-success" id="update">Update</button>
				</tr>
			<?php
			}
			?>

		</tbody>
	</table>

	<nav class="my-3">
		<ul class="pagination justify-content-center">
			<?php
			// print the navigation link
			echo $first . $prev .	$current . $next . $last;
			?>
		</ul>
	</nav>

<?php
}

//close the connection
mysqli_close($conn);
?>