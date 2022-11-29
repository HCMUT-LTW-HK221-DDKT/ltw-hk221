<?php
require_once "./database.php";


if(isset($_GET['getData'])) {
    // how many rows to show per page
$rowsPerPage = 10;

// by default we show first page
$pageNum = 1;

// if $_GET['page'] defined, use it as page number
if (isset($_GET['page'])) {
	$pageNum = $_GET['page'];
}

// counting the offset
$offset = ($pageNum - 1) * $rowsPerPage;

// get products on page
$query="";
$query2="";
if(isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $type = $_GET['type'];
    if($type == "username") {
        $query = "SELECT * FROM users WHERE username LIKE '%$keyword%' " .
	    "LIMIT $offset, $rowsPerPage";
        $query2= "SELECT COUNT(username) AS numrows FROM users WHERE username LIKE '%$keyword%'";
    }
    else if($type == "email") {
        $query = "SELECT * FROM users WHERE email LIKE '%$keyword%' " .
	    "LIMIT $offset, $rowsPerPage";
        $query2= "SELECT COUNT(username) AS numrows FROM users WHERE email LIKE '%$keyword%'";
    }
    else {
        $query = "SELECT * FROM users WHERE phone LIKE '%$keyword%' " .
	    "LIMIT $offset, $rowsPerPage";
        $query2= "SELECT COUNT(username) AS numrows FROM users WHERE phone LIKE '%$keyword%'";
    }
}
else {
    $query = "SELECT * FROM users " .
	"LIMIT $offset, $rowsPerPage";
    $query2= "SELECT COUNT(username) AS numrows FROM users";
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
$stt = $rowsPerPage*($pageNum -1) + 1;
if (!$result || !$result2) {
	echo json_encode(array("statusCode" => 400));
} else {
?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tài khoản</th>
                <th>Tên</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Địa chỉ</th>
                <!-- <th>Thời gian tạo</th> -->
                <th>Trạng thái</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['username'] ?>">
					<td><?php echo $stt++ ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['fullname'] ?></td>
					<td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['status'] ?></td>
					<td>
						<button class="resetPassword btn btn-info">Reset</button>
						<button class="delete btn btn-danger">Banned</button>
					</td>
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
}


if(isset($_POST['banned'])) {
    $username = $_POST['username'];
    $query3 = "UPDATE users SET status='banned' WHERE username='$username'";
    $result3 = mysqli_query($conn, $query3) or die('Error, query failed');

    if (!$result3) {
		echo json_encode(array("statusCode" => 400, "info" => "Delete product failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Delete product successfully!"));
	}
}


//close the connection
mysqli_close($conn);
?>