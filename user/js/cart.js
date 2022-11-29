var totalPrice = 0;

function formatPrice(price) {
	var formattedPrice = parseInt(price).toLocaleString("vi", {
		style: "currency",
		currency: "VND"
	});

	return formattedPrice;
}

function firstFetch() {
	$.ajax({
		url: "/controller/cart.php",
		type: "GET",
		data: {
			getCart: true
		},
		success: function (data) {
			try {
				data = JSON.parse(data);
				if (data.statusCode == 400) {
					$(".cartDetail").html("Can't fetch data from SERVER!");
				}
			} catch {
				$(".cartDetail").html(data);
			}
		},
		error: function () {
			alert("Something is wrong!");
		},
		complete: function () {
			$(".price").each(function () {
				if ($(this).attr("id") == "totalPrice") {
					totalPrice = parseInt($(this).text());
				}
				$(this).text(formatPrice($(this).text()));
			});
		}
	});
}

function cart(data) {
	$.ajax({
		url: "/controller/cart.php",
		type: "POST",
		data: data,
		success: function (data) {
			// window.location.reload();
		},
		error: function () {
			alert("Something is wrong!");
		},
		complete: function () {
			firstFetch();
			if (data.adjustCart) {
				$(".cart__count").each(function () {
					$(this).text(parseInt($(this).text()) + data.soLuong);
				});
			} else if (data.deleteOrderItem) {
				$(".cart__count").each(function () {
					$(this).text(parseInt($(this).text()) - data.soLuong);
				});
			}
		}
	});
}

$(document).ready(function () {
	firstFetch();

	$(document).on("click", ".soLuongMinusButton", function (event) {
		event.preventDefault();
		var soLuongInput = $(this).parent("div").children("input").eq(0);
		if (parseInt(soLuongInput.val()) >= 2) {
			soLuongInput.val(parseInt(soLuongInput.val()) - 1);
			var productId = $(this).parents("tr").attr("id");
			cart({
				id: productId,
				soLuong: -1,
				adjustCart: true
			});
		}
	});

	$(document).on("click", ".soLuongPlusButton", function (event) {
		event.preventDefault();
		var soLuongInput = $(this).parent("div").children("input").eq(0);
		soLuongInput.val(parseInt(soLuongInput.val()) + 1);
		var productId = $(this).parents("tr").attr("id");
		cart({
			id: productId,
			soLuong: 1,
			adjustCart: true
		});
	});

	$(document).on("click", ".delete", function (event) {
		event.preventDefault();
		if (confirm("Bạn có chắc chắn muốn xoá sản phẩm này?")) {
			var soLuongInput = parseInt($(this).parents("tr").find("input").eq(0).val());
			var productId = $(this).parents("tr").attr("id");
			cart({
				id: productId,
				soLuong: soLuongInput,
				deleteOrderItem: true
			});
		}
	});

	$(document).on("click", "#datHang", function (event) {
		event.preventDefault();
		window.open("order.php", "_self");
	});

});