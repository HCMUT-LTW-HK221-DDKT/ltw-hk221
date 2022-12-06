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

// how many rows we have in database
$queryCountNumRows = "";
if (isset($_GET['keyword'])) {
	$tukhoa = $_GET['keyword'];
	if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
		$priceStart = intVal($_GET['priceStart']);
		$priceEnd = intVal($_GET['priceEnd']);
		$queryCountNumRows   = "SELECT COUNT(id) AS numrows FROM products WHERE name LIKE '%$tukhoa%' AND price >= $priceStart AND price <= $priceEnd";
	} else {
		$queryCountNumRows   = "SELECT COUNT(id) AS numrows FROM products WHERE name LIKE '%$tukhoa%'";
	}
} else {
	if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
		$priceStart = intVal($_GET['priceStart']);
		$priceEnd = intVal($_GET['priceEnd']);
		$queryCountNumRows   = "SELECT COUNT(id) AS numrows FROM products WHERE price >= $priceStart AND price <= $priceEnd";
	} else {
		$queryCountNumRows   = "SELECT COUNT(id) AS numrows FROM products";
	}
}
$resultCountNumRows  = mysqli_query($conn, $queryCountNumRows) or die('Error, query failed');
$rowCountNumRows      = mysqli_fetch_assoc($resultCountNumRows);
$numrows  = $rowCountNumRows['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows / $rowsPerPage);

// get products on page
$subQuery = "SELECT * FROM products";

if (isset($_GET['keyword']) && isset($_GET['sortType'])) {
	$tukhoa = $_GET['keyword'];
	if ($_GET['sortType'] == "ID") {
		if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
			$priceStart = intVal($_GET['priceStart']);
			$priceEnd = intVal($_GET['priceEnd']);
			$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%' AND price >= $priceStart AND price <= $priceEnd";
		} else {
			$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%'";
		}
	} else {
		$sortType = $_GET['sortType'];
		$maxInt = PHP_INT_MAX;
		if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
			$priceStart = intVal($_GET['priceStart']);
			$priceEnd = intVal($_GET['priceEnd']);
			$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%' AND price >= $priceStart AND price <= $priceEnd ORDER BY price $sortType LIMIT $maxInt";
		} else {
			$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%' ORDER BY price $sortType LIMIT $maxInt";
		}
	}
} else if (isset($_GET['keyword']) && !isset($_GET['sortType'])) {
	$tukhoa = $_GET['keyword'];
	if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
		$priceStart = intVal($_GET['priceStart']);
		$priceEnd = intVal($_GET['priceEnd']);
		$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%' AND price >= $priceStart AND price <= $priceEnd";
	} else {
		$subQuery = "SELECT * FROM products WHERE name LIKE '%$tukhoa%'";
	}
} else if (!isset($_GET['keyword']) && isset($_GET['sortType'])) {
	if ($_GET['sortType'] == "ID") {
		if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
			$priceStart = intVal($_GET['priceStart']);
			$priceEnd = intVal($_GET['priceEnd']);
			$subQuery = "SELECT * FROM products WHERE price >= $priceStart AND price <= $priceEnd";
		} else {
			$subQuery = "SELECT * FROM products";
		}
	} else {
		$sortType = $_GET['sortType'];
		$maxInt = PHP_INT_MAX;
		if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
			$priceStart = intVal($_GET['priceStart']);
			$priceEnd = intVal($_GET['priceEnd']);
			$subQuery = "SELECT * FROM products WHERE price >= $priceStart AND price <= $priceEnd ORDER BY price $sortType LIMIT $maxInt";
		} else {
			$subQuery = "SELECT * FROM products ORDER BY price $sortType LIMIT $maxInt";
		}
	}
} else {
	if (isset($_GET['priceStart']) && isset($_GET['priceEnd'])) {
		$priceStart = intVal($_GET['priceStart']);
		$priceEnd = intVal($_GET['priceEnd']);
		$subQuery = "SELECT * FROM products WHERE price >= $priceStart AND price <= $priceEnd";
	} else {
		$subQuery = "SELECT * FROM products";
	}
}

$query = "SELECT * FROM ($subQuery) AS r LIMIT $offset, $rowsPerPage";

$result = mysqli_query($conn, $query) or die('Error, query failed ' + mysqli_error($conn));

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

if (!$result) {
	echo json_encode(array("statusCode" => 400));
} else {
?>
	<div id="r2c2r1" class="row pb-5" style="padding-left: 8.75px; padding-right: 8.75px;">
		<div class="col-md-6">
			<p style="margin: 0; padding-top: 5px;">Hiển thị <?php echo $rowsPerPage * ($pageNum - 1) + 1; ?>–<?php echo ($rowsPerPage * $pageNum) > $numrows ? $numrows : ($rowsPerPage * $pageNum); ?> trong <?php echo $numrows; ?> kết quả</p>
		</div>
		<div class="col-md-6 d-flex justify-content-end">
			<select id="sort" class="form-select" aria-label="Default select example" style="width: 70%;">
				<option value="ID" selected>Sắp xếp theo mã sản phẩm</option>
				<option value="ASC">Sắp xếp theo giá: Thấp đến cao</option>
				<option value="DESC">Sắp xếp theo giá: Cao đến thấp</option>
			</select>
		</div>
	</div>

	<div id="r2c2r2" class="row">
		<?php
		//fetch the data from the database
		while ($row = mysqli_fetch_assoc($result)) {
		?>
			<div id="<?php echo $row['id']; ?>" class="col-lg-4 col-md-6 col-sm-6 col-6 px-3 pt-2 pb-4">
				<div class="card">
					<a href="product1.php?id=<?php echo $row['id']; ?>">
						<div style="max-width: 25rem; max-height: 25rem; margin: 0 auto;">
							<img src="../uploads/<?php echo $row['imgUrl']; ?>" alt="<?php echo $row['name']; ?>" style="width: 100%; height: 100%;" />
						</div>
					</a>
					<div class="tag">New</div>
					<div class="detail_icon">
						<a href="#">
							<img src="https://tinhlamjw.com/wp-content/themes/tinhlamjwt/img/icon/search.png" alt="TinhLamSearch" />
						</a>
					</div>
					<div class="detail__text">
						<a href="product1.php?id=<?php echo $row['id']; ?>">Xem chi tiết</a>
					</div>
					<div class="card-body text-center">
						<h5 class="card-title"><?php echo $row['name']; ?></h5>
						<p class="card-text">
							<script>
								$(document).ready(function() {
									var price = <?php echo $row['price']; ?>;
									$("#<?php echo $row['id']; ?> .card-text").html(parseInt(price).toLocaleString("vi", {
										style: "currency",
										currency: "VND"
									}));
								});
							</script>
						</p>
					</div>
				</div>
			</div>

		<?php
		}
		?>

	</div> <!-- end #r2c2r2 -->

	<div id="r2c2r3" class="row pt-5">
		<nav>
			<ul class="pagination justify-content-center">
				<?php
				// print the navigation link
				echo $first . $prev .	$current . $next . $last;
				?>
			</ul>
		</nav>
	</div>

<?php
}

//close the connection
mysqli_close($conn);
?>