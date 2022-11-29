<?php
require_once "./database.php";

if(isset($_GET['getContactInfo'])) {


    $query = "SELECT * FROM contacts";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
        echo json_encode(array("statusCode" => 400));
    }
    else {
        ?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>STT</th>
				<th>Email</th>
				<th>Phone</th>
                <th>Cập nhật Email</th>
				<th>Cập nhật Số điện thoại</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['id'] ?>">
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
					<td>
                    <div class="d-flex">
                    <input type="text" id="update_email" class="form-input" placeholder="Nhập email mới" name="update_email">
						<button class="updateEmail btn btn-success">Update</button>
                    </div>
					</td>
					<td>
                    <div class="d-flex">
                        <input type="text" id="update_phone" class="form-input" placeholder="Nhập sđt mới" name="update_phone">
                        <button class="updatePhone btn btn-success">Update</button>
                        </div>
                    </td>
				</tr>

			<?php
			}
			?>

		</tbody>
	</table>
<?php
    }
}

if(isset($_GET['getShowrooms'])) {
    $query = "SELECT * FROM showrooms";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    $query2   = "SELECT COUNT(address) AS numrows FROM showrooms";
    $result2  = mysqli_query($conn, $query2) or die('Error, query failed');
    $row      = mysqli_fetch_assoc($result2);
    $numrows  = $row['numrows'];

    $stt = 1;
    if (!$result || !$result2) {
        echo json_encode(array("statusCode" => 400));
    }
    elseif($numrows == 1) {
        ?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>STT</th>
				<th>Địa chỉ</th>
                <th>Cập nhật</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['address'] ?>">
					<td><?php echo $stt++; ?></td>
					<td><?php echo $row['address'] ?></td>
					<td>
                    <button class="updateShowroom btn btn-success" data-bs-toggle="modal" data-bs-target="#updateShowroomModal">
                            Update
						</button>
                        
					</td>
				</tr>

			<?php
			}
			?>

		</tbody>
	</table>
<?php
    }
    else {
        ?>
	<table class="table table-striped table-hover text-center align-middle">
		<thead>
			<tr>
				<th>STT</th>
				<th>Địa chỉ</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//fetch the data from the database
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr id="<?php echo $row['address'] ?>">
					<td><?php echo $stt++; ?></td>
					<td><?php echo $row['address'] ?></td>
					<td>
                    <button class="updateShowroom btn btn-success" data-bs-toggle="modal" data-bs-target="#updateShowroomModal">
					Update</button>
                    <button class="deleteShowroom btn btn-danger">Delete</button>
                    </td>
				</tr>
			<?php
			}
			?>

		</tbody>
	</table>
<?php
    }
}

if(isset($_POST['updateEmail'])) {
    $newEmail = $_POST['newEmail'];
    $id = $_POST['id'];
    $query = "UPDATE contacts SET email='$newEmail' WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Update contact email failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Update successfully!"));
	}
}

if(isset($_POST['updatePhone'])) {
    $newPhone = $_POST['newPhone'];
    $id = $_POST['id'];
    $query = "UPDATE contacts SET phone='$newPhone' WHERE id='$id'";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Update contact phone failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Update successfully!"));
	}
}

if(isset($_POST['addShowroom'])) {
    $newShowroom = $_POST['newShowroom'];
    $query = "INSERT INTO showrooms VALUES('$newShowroom')";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Add new showroom failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Add new showroom successfully!"));
	}
}

if(isset($_POST['updateShowroom'])) {
    $address = $_POST['address'];
    $newAddress = $_POST['newAddress'];
    $query = "UPDATE showrooms SET address='$newAddress' WHERE address='$address'";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Update new showroom failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Update new showroom successfully!"));
	}
}

if(isset($_POST['deleteShowroom'])) {
    $address = $_POST['address'];
    $query = "DELETE FROM showrooms WHERE address='$address'";
    $result = mysqli_query($conn, $query) or die('Error, query failed');

    if (!$result) {
		echo json_encode(array("statusCode" => 400, "info" => "Delete showroom failed!"));
	} else {
		echo json_encode(array("statusCode" => 200, "info" => "Delete showroom successfully!"));
	}
}

?>