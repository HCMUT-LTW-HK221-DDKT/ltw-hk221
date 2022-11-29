function openThongTinGiaoHang() {
	var thongTinGiaoHang = document.getElementById("thongTinGiaoHang");
	var chiTietSanPham = document.getElementById("chiTietSanPham");
	thongTinGiaoHang.style.display = "block";
	chiTietSanPham.style.display = "none";

	var a = document.getElementsByClassName("nav-link")[0];
	a.style.color = "#495057";
	var b = document.getElementsByClassName("nav-link")[1];
	b.style.color = "#7c6455";
}

function openChiTietSanPham() {
	var thongTinGiaoHang = document.getElementById("thongTinGiaoHang");
	var chiTietSanPham = document.getElementById("chiTietSanPham");
	thongTinGiaoHang.style.display = "none";
	chiTietSanPham.style.display = "block";

	var a = document.getElementsByClassName("nav-link")[0];
	a.style.color = "#7c6455";
	var b = document.getElementsByClassName("nav-link")[1];
	b.style.color = "#495057";
}

function sizeCoTayMinus() {
	var sizeCoTayInput = document.getElementById("sizeCoTayInput");
	if (parseFloat(sizeCoTayInput.value) >= 12.5) {
		sizeCoTayInput.value = String(parseFloat(sizeCoTayInput.value) - 0.5);
	}
}

function sizeCoTayPlus() {
	var sizeCoTayInput = document.getElementById("sizeCoTayInput");
	if (parseFloat(sizeCoTayInput.value) <= 20.5) {
		sizeCoTayInput.value = String(parseFloat(sizeCoTayInput.value) + 0.5);
	}
}

function soLuongMinus() {
	var soLuongInput = document.getElementById("soLuongInput");
	if (parseInt(soLuongInput.value) >= 2) {
		soLuongInput.value = String(parseInt(soLuongInput.value) - 1);
	}
}

function soLuongPlus() {
	var soLuongInput = document.getElementById("soLuongInput");
	soLuongInput.value = String(parseInt(soLuongInput.value) + 1);
}

// product's id passed from product1.php -> html -> head -> script

$(document).ready(function () {
	$.ajax({
		url: "/controller/findProductById.php",
		type: "GET",
		data: {
			id: id
		},
		success: function (data) {
			data = JSON.parse(data);
			$("#image").attr("src", "../uploads/" + data.imgUrl);
			$("#name").text(data.name);
			$("#id").text(data.id);
			$("#price").text(parseInt(data.price).toLocaleString("vi", {
				style: "currency",
				currency: "VND"
			}));
			var description = "<h5><b>" + data.name + "</b></h5><br />" + "<p>" + data.description + "</p>";
			$("#chiTietSanPham").html(description);
		},
		error: function () {
			alert("Something is wrong!");
		}
	});

	$(document).on("click", "#themVaoGioHang", function (event) {
		event.preventDefault();
		var soLuongInput = document.getElementById("soLuongInput").value;
		console.log(id);
		console.log(soLuongInput);
		$.ajax({
			url: "/controller/cart.php",
			type: "POST",
			data: {
				id: id,
				soLuong: soLuongInput,
				addCart: true
			},
			success: function (data) {
				// console.log(data)
				window.location.reload();
			},
			error: function () {
				alert("Something is wrong!");
			}
		});
	});

	$(".header__menu li").each(function (index) {
		if (index == 2) {
			if (!$(this).hasClass("active")) {
				$(this).addClass("active");
			}
		} else {
			$(this).removeClass("active");
		}
	});
});