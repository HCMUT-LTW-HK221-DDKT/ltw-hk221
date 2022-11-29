<!-- Add Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addProductTitle">Add product</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formAdd" action="#" method="POST" enctype="multipart/form-data">
					<div class="input-group mb-3">
						<span class="input-group-text" id="nameAdd">Name</span>
						<input type="text" class="form-control" name="name" aria-label="name" aria-describedby="name" required />
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text" id="descriptionAdd">Description</span>
						<textarea class="form-control" name="description" aria-label="description" aria-describedby="description" required></textarea>
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text" id="priceAdd">Price</span>
						<input type="number" class="form-control" name="price" aria-label="price" aria-describedby="price" step="1000" required />
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text" id="imageAdd">Image</span>
						<input type="file" class="form-control" name="image" aria-label="image" aria-describedby="image" accept="image/*" required />
					</div>

					<div class="card mb-3">
						<img src="" class="card-img-top imgPreview" alt="your image">
					</div>

					<div class="row text-center">
						<div class="col">
							<input type="submit" class="btn btn-dark" value="Submit" action="../controller/addProduct.php" />
							<div id="notifyAdd" class="my-3"></div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>