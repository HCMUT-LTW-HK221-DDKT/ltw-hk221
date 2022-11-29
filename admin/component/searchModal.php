<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="searchModalTitle">Tìm kiếm sản phẩm</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="d-flex">
					<input type="text" id="search_keyword" class="form-input" placeholder="Nhập từ khóa" name="search_keyword">
					<button type="button" class="btn btn-dark" data-bs-toggle="modal" onclick="onClickSearchBtn()">Tìm</button>
				</div>
				<div class="keywordError">
				</div>
			</div>
		</div>
	</div>