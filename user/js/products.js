function toggleLoaiSanPham() {
	var loaiSanPham = document.getElementById("loaiSanPham");
	var buttonLoaiSanPham = document.getElementById("buttonLoaiSanPham");
	if (loaiSanPham.style.display === "none") {
		loaiSanPham.style.display = "block";
		buttonLoaiSanPham.innerText = "\u2014";
	} else {
		loaiSanPham.style.display = "none";
		buttonLoaiSanPham.innerText = "\u254B";
	}
}

function toggleDongSanPham() {
	var dongSanPham = document.getElementById("dongSanPham");
	var buttonDongSanPham = document.getElementById("buttonDongSanPham");
	if (dongSanPham.style.display === "none") {
		dongSanPham.style.display = "block";
		buttonDongSanPham.innerText = "\u2014";
	} else {
		dongSanPham.style.display = "none";
		buttonDongSanPham.innerText = "\u254B";
	}
}

function toggleBoSuuTap() {
	var boSuuTap = document.getElementById("boSuuTap");
	var buttonBoSuuTap = document.getElementById("buttonBoSuuTap");
	if (boSuuTap.style.display === "none") {
		boSuuTap.style.display = "block";
		buttonBoSuuTap.innerText = "\u2014";
	} else {
		boSuuTap.style.display = "none";
		buttonBoSuuTap.innerText = "\u254B";
	}
}

function toggleGiaSanPham() {
	var giaSanPham = document.getElementById("giaSanPham");
	var buttonGiaSanPham = document.getElementById("buttonGiaSanPham");
	if (giaSanPham.style.display === "none") {
		giaSanPham.style.display = "block";
		buttonGiaSanPham.innerText = "\u2014";
	} else {
		giaSanPham.style.display = "none";
		buttonGiaSanPham.innerText = "\u254B";
	}
}

$(document).ready(function () {
	var dataSearch = {};
	let search = window.location.search;
	search = decodeURI(search);
	if (!search.includes("search=") && !search.includes("sortType=")) {
		if (search.includes("priceStart=") && search.includes("priceEnd=")) {
			// http://localhost:8081/user/products.php?priceStart=1000&priceEnd=2000
			let splitSearch = search.split('=');
			let priceStart = parseInt(splitSearch[1].split("&")[0]);
			let priceEnd = parseInt(splitSearch[2]);
			dataSearch = {
				priceStart: priceStart,
				priceEnd: priceEnd
			}
		} else {
			// http://localhost:8081/user/products.php
			dataSearch = {};
		}
	}
	else if (search.includes("search=") && !search.includes("sortType=")) {
		if (search.includes("priceStart=") && search.includes("priceEnd=")) {
			// http://localhost:8081/user/products.php?search=uu&priceStart=1000&priceEnd=2000
			let splitSearch = search.split('=');
			let keyword = splitSearch[1].split("&")[0];
			let priceStart = parseInt(splitSearch[2].split("&")[0]);
			let priceEnd = parseInt(splitSearch[3]);
			dataSearch = {
				keyword: keyword,
				priceStart: priceStart,
				priceEnd: priceEnd
			}
		} else {
			// http://localhost:8081/user/products.php?search=uu
			let splitSearch = search.split('=');
			let keyword = splitSearch[1];
			dataSearch = {
				keyword: keyword
			};
		}
	} else if (!search.includes("search=") && search.includes("sortType=")) {
		if (search.includes("priceStart=") && search.includes("priceEnd=")) {
			// http://localhost:8081/user/products.php?sortType=ASC&priceStart=1000&priceEnd=2000
			let splitSearch = search.split('=');
			let sortType = splitSearch[1].split("&")[0];
			let priceStart = parseInt(splitSearch[2].split("&")[0]);
			let priceEnd = parseInt(splitSearch[3]);
			dataSearch = {
				sortType: sortType,
				priceStart: priceStart,
				priceEnd: priceEnd
			}
		} else {
			// http://localhost:8081/user/products.php?sortType=ASC
			let splitSearch = search.split('=');
			let sortType = splitSearch[1];
			dataSearch = {
				sortType: sortType
			};
		}
	} else {
		if (search.includes("priceStart=") && search.includes("priceEnd=")) {
			// http://localhost:8081/user/products.php?search=uu&sortType=ASC&priceStart=1000&priceEnd=2000
			let splitSearch = search.split('=');
			let keyword = splitSearch[1].split("&")[0];
			let sortType = splitSearch[2].split("&")[0];
			let priceStart = parseInt(splitSearch[3].split("&")[0]);
			let priceEnd = parseInt(splitSearch[4]);
			dataSearch = {
				keyword: keyword,
				sortType: sortType,
				priceStart: priceStart,
				priceEnd: priceEnd
			}
		} else {
			// http://localhost:8081/user/products.php?search=uu&sortType=ASC
			let splitSearch = search.split('=');
			let keyword = splitSearch[1].split("&")[0];
			let sortType = splitSearch[2];
			dataSearch = {
				keyword: keyword,
				sortType: sortType
			};
		}
	}

	// show products on first page
	$.ajax({
		url: "/controller/findAllProducts2.php",
		type: "GET",
		data: dataSearch,
		beforeSend: function () {
			$("#r2c2").html("Fetching data from database...");
		},
		success: function (data) {
			try {
				data = JSON.parse(data);
				if (data.statusCode == 400) {
					$("#r2c2").html("Can't fetch data from database!");
				}
			} catch {
				$("#r2c2").html(data);
			}
		},
		error: function () {
			$("#r2c2").html("Something is wrong!");
		},
		complete: function () {
			var query = window.location.search;

			if (query.includes("sortType=")) {
				var sortType = "";
				if (query.includes("search=")) {
					// http://localhost:8081/user/products.php?search=uu&sortType=ASC&priceStart=1000&priceEnd=2000
					sortType = query.split("=")[2].split("&")[0];
				} else {
					// http://localhost:8081/user/products.php?sortType=ASC&priceStart=1000&priceEnd=2000
					sortType = query.split("=")[1].split("&")[0];
				}
				$("#sort option").each(function () {
					if ($(this).attr("value") == sortType) {
						$(this).prop("selected", true);
					} else {
						$(this).prop("selected", false);
					}
				});
			}

			if (query.includes("priceStart=") && query.includes("priceEnd=")) {
				var priceStart = "";
				var priceEnd = "";
				if (query.includes("search=") && query.includes("sortType=")) {
					// http://localhost:8081/user/products.php?search=uu&sortType=ASC&priceStart=1000&priceEnd=2000
					priceStart = query.split("=")[3].split("&")[0];
					priceEnd = query.split("=")[4];
				} else if ((query.includes("search=") && !query.includes("sortType=")) ||
					(!query.includes("search=") && query.includes("sortType="))) {
					// http://localhost:8081/user/products.php?search=uu&priceStart=1000&priceEnd=2000
					// http://localhost:8081/user/products.php?sortType=ASC&priceStart=1000&priceEnd=2000
					priceStart = query.split("=")[2].split("&")[0];
					priceEnd = query.split("=")[3];
				} else {
					// http://localhost:8081/user/products.php?priceStart=1000&priceEnd=2000
					priceStart = query.split("=")[1].split("&")[0];
					priceEnd = query.split("=")[2];
				}
				$("#leftSliderVal").text(parseInt(priceStart).toLocaleString("vi", {
					style: "currency",
					currency: "VND"
				}));
				$("#leftSlider").val(parseInt(priceStart));
				$("#rightSliderVal").text(parseInt(priceEnd).toLocaleString("vi", {
					style: "currency",
					currency: "VND"
				}));
				$("#rightSlider").val(parseInt(priceEnd));
			}
		}
	});

	// show products on page clicked by user
	$(document).on("click", ".page-link", function () {
		var page = $(this).data("page");
		if (page === 0) {
			return;
		}

		let search = window.location.search;
		search = decodeURI(search);
		if (search == "") {
			dataSearch = {
				page: page
			};
		}
		else if (search.includes("search=") && !search.includes("sortType=")) {
			let splitSearch = search.split('=');
			let keyword = splitSearch[1];
			dataSearch = {
				page: page,
				keyword: keyword
			};
		} else if (!search.includes("search=") && search.includes("sortType=")) {
			let splitSearch = search.split('=');
			let sortType = splitSearch[1];
			dataSearch = {
				page: page,
				sortType: sortType
			};
		} else {
			let splitSearch = search.split('=');
			let keyword = splitSearch[1].split("&")[0];
			let sortType = splitSearch[2];
			dataSearch = {
				page: page,
				keyword: keyword,
				sortType: sortType
			};
		}

		$.ajax({
			url: "/controller/findAllProducts2.php",
			type: "GET",
			data: dataSearch,
			beforeSend: function () {
				$("#r2c2").html("Fetching data from database...");
			},
			success: function (data) {
				try {
					data = JSON.parse(data);
					if (data.statusCode == 400) {
						$("#r2c2").html("Can't fetch data from database!");
					}
				} catch {
					$("#r2c2").html(data);
				}
			},
			error: function () {
				$("#r2c2").html("Something is wrong!");
			},
			complete: function () {
				var query = window.location.search;
				if (query.includes("sortType=")) {
					var sortType = "";
					if (query.includes("search=")) {
						sortType = query.split("=")[2];
					} else {
						sortType = query.split("=")[1];
					}
					$("#sort option").each(function () {
						if ($(this).attr("value") == sortType) {
							$(this).prop("selected", true);
						} else {
							$(this).prop("selected", false);
						}
					});
				}
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

	$(document).on("change", "#sort", function () {
		var sortType = $(this).children("option:selected").attr("value");
		var href = window.location.href;
		var hrefSplit = href.split("/");
		var query = window.location.search;

		if (href.includes("search=") && href.includes("sortType=")) {
			var keyword = query.split("=")[1].split("&")[0];
			if (href.includes("priceStart=") && href.includes("priceEnd=")) {
				// http://localhost:8081/user/products.php?search=uu&sortType=ASC&priceStart=1000&priceEnd=2000
				var priceStart = query.split("=")[3].split("&")[0];
				var priceEnd = query.split("=")[4];
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
			} else {
				// http://localhost:8081/user/products.php?search=uu&sortType=ASC
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType;
			}
		} else if (href.includes("search=") && !href.includes("sortType=")) {
			var keyword = query.split("=")[1].split("&")[0];
			if (href.includes("priceStart=") && href.includes("priceEnd=")) {
				// http://localhost:8081/user/products.php?search=uu&priceStart=1000&priceEnd=2000
				var priceStart = query.split("=")[2].split("&")[0];
				var priceEnd = query.split("=")[3];
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
			} else {
				// http://localhost:8081/user/products.php?search=uu
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType;
			}
		} else if (!href.includes("search=") && href.includes("sortType=")) {
			if (href.includes("priceStart=") && href.includes("priceEnd=")) {
				// http://localhost:8081/user/products.php?sortType=ASC&priceStart=1000&priceEnd=2000
				var priceStart = query.split("=")[2].split("&")[0];
				var priceEnd = query.split("=")[3];
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
			} else {
				// http://localhost:8081/user/products.php?sortType=ASC
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType;
			}
		} else {
			if (href.includes("priceStart=") && href.includes("priceEnd=")) {
				// http://localhost:8081/user/products.php?priceStart=1000&priceEnd=2000
				var priceStart = query.split("=")[2].split("&")[0];
				var priceEnd = query.split("=")[3];
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
			} else {
				// http://localhost:8081/user/products.php
				href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType;
			}
		}

		window.open(href, "_self");
	});

	$(document).on("input", "#leftSlider", function (event) {
		event.preventDefault();
		$("#leftSliderVal").text(parseInt($(this).val()).toLocaleString("vi", {
			style: "currency",
			currency: "VND"
		}));
	});

	$(document).on("change", "#leftSlider", function (event) {
		event.preventDefault();
		$("#leftSliderVal").text(parseInt($(this).val()).toLocaleString("vi", {
			style: "currency",
			currency: "VND"
		}));

		var priceStart = $(this).val();
		var priceEnd = $("#rightSlider").val();

		if (priceStart <= priceEnd) {
			var href = window.location.href;
			var hrefSplit = href.split("/");

			if (href.includes("search=")) {
				var keyword = window.location.search.split("=")[1].split("&")[0];
				if (href.includes("sortType=")) {
					// http://localhost:8081/user/products.php?search=uu&sortType=ASC&priceStart=1000&priceEnd=2000
					var sortType = window.location.search.split("=")[2].split("&")[0];
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				} else {
					// http://localhost:8081/user/products.php?search=uu&priceStart=1000&priceEnd=2000
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				}
			} else {
				if (href.includes("sortType=")) {
					// http://localhost:8081/user/products.php?sortType=ASC&priceStart=1000&priceEnd=2000
					var sortType = window.location.search.split("=")[1].split("&")[0];
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				} else {
					// http://localhost:8081/user/products.php?priceStart=1000&priceEnd=2000
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				}
			}

			window.open(href, "_self");
		} else {
			alert("Vui lòng chọn giá tối thiểu nhỏ hơn hoặc bằng giá tối đa!");
			window.location.reload();
		}
	});

	$(document).on("input", "#rightSlider", function (event) {
		event.preventDefault();
		$("#rightSliderVal").text(parseInt($(this).val()).toLocaleString("vi", {
			style: "currency",
			currency: "VND"
		}));
	});

	$(document).on("change", "#rightSlider", function (event) {
		event.preventDefault();
		$("#rightSliderVal").text(parseInt($(this).val()).toLocaleString("vi", {
			style: "currency",
			currency: "VND"
		}));

		var priceEnd = $(this).val();
		var priceStart = $("#leftSlider").val();

		if (priceStart <= priceEnd) {
			var href = window.location.href;
			var hrefSplit = href.split("/");

			if (href.includes("search=")) {
				var keyword = window.location.search.split("=")[1].split("&")[0];
				if (href.includes("sortType=")) {
					var sortType = window.location.search.split("=")[2].split("&")[0];
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				} else {
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?search=" + keyword + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				}
			} else {
				if (href.includes("sortType=")) {
					var sortType = window.location.search.split("=")[1].split("&")[0];
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?sortType=" + sortType + "&priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				} else {
					href = hrefSplit[0] + "//" + hrefSplit[2] + "/" + hrefSplit[3] + "/products.php?priceStart=" + priceStart + "&priceEnd=" + priceEnd;
				}
			}

			window.open(href, "_self");
		} else {
			alert("Vui lòng chọn giá tối thiểu nhỏ hơn hoặc bằng giá tối đa!");
			window.location.reload();
		}
	});
});