<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm sản phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex">
          <input type="text" id="search_keyword" class="form-input" placeholder="Nhập từ khóa" name="search_keyword">
          <button class="btn btn-success" id="searchBtn" onclick="onClickSearchBtn()">Tìm</button>
          <!-- <a class="btn btn-success" href="products.php?search=ưu">Tìm</a> -->
        </div>
        <div class="keywordError">
        </div>
      </div>
    </div>
  </div>

  <script>
    function onClickSearchBtn(event) {
      var keyword = document.querySelector('#search_keyword').value;
      if (keyword == "") {
        document.querySelector('.keywordError').innerHTML = "<div class='alert alert-warning' role='alert'>Vui lòng không bỏ trống.</div>";
      }
      else {
        let url = encodeURI('products.php?search='+keyword);
        console.log(url)
        window.location.href =url;
      }
    }
  </script>