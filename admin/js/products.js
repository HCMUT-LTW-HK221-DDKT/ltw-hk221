// function for checking price
function isNumeric(value) {
	return /^\d+$/.test(value);
}
function onClickSearchBtn() {
    var keyword = document.querySelector('#search_keyword').value;
    if (keyword == "") {
        document.querySelector('.keywordError').innerHTML = "<div class='alert alert-warning' role='alert'>Vui lòng không bỏ trống.</div>";
    }
    else {
		document.querySelector('.keywordError').innerHTML = "";
        $.ajax({
            url: "../controller/findAllProducts.php",
            type: "GET",
            data: {
                keyword: keyword,
            },
            beforeSend: function () {
                $("#r2").html("Fetching data from database...");
            },
            success: function (data) {
                try {
                    data = JSON.parse(data);
                    if (data.statusCode == 400) {
                        $("#r2").html("Can't fetch data from database!");
                    }
                } catch {
                    $("#r2").html(data);
                }
            },
            error: function () {
                $("#r2").html("Something is wrong!");
            },
			complete: function() {
				$(".description").each(function(i){
					var len = $(this).text().length;
					if(len > 150)
					{
						$(this).text($(this).text().substr(0, 150) + '...');
					}
				});
				$(".price").each(function () {
					$(this).text(parseInt($(this).text()).toLocaleString("vi", {
						style: "currency",
						currency: "VND"
					}));
				});
			}
        });
    }
}
$(document).ready(function() {
	// show products on first page
	var dataSearch = {};

	let search = window.location.search;
	search = decodeURI(search);
	if (search == "") {
		dataSearch = {};
	}
	else {
		let splitSearch = search.split('=');
		let keyword = splitSearch[1];
		dataSearch = {
			keyword: keyword,
		};
	}

	$.ajax({
		url: "../controller/findAllProducts.php",
		type: "GET",
		data: dataSearch,
		beforeSend: function() {
			$("#r2").html("Fetching data from database...");
		},
		success: function(data) {
			try {
				data = JSON.parse(data);
				if (data.statusCode == 400) {
					$("#r2").html("Can't fetch data from database!");
				}
			} catch {
				$("#r2").html(data);
			}	
		},
		error: function() {
			$("#r2").html("Something is wrong!");
		},
		complete: function() {
			$(".description").each(function(i){
				var len = $(this).text().length;
				if(len > 150)
				{
					$(this).text($(this).text().substr(0, 150) + '...');
				}
			});
			$(".price").each(function () {
				$(this).text(parseInt($(this).text()).toLocaleString("vi", {
					style: "currency",
					currency: "VND"
				}));
			});
		}
	});

	// show image preview
	$(document).on("change", "input[name='image']", function(event) {
		if (event.target.files && event.target.files[0]) {
			$(".imgPreview").attr("src", URL.createObjectURL(event.target.files[0]));
			$(".imgPreview").one("load", function() {
				// do stuff
				// https://stackoverflow.com/questions/3877027/jquery-callback-on-image-load-even-when-the-image-is-cached
				URL.revokeObjectURL($(this).attr("src"));
			}).each(function() {
				if (this.complete) {
					// $(this).load(); // For jQuery < 3.0 
					$(this).trigger('load'); // For jQuery >= 3.0 
				}
			});
		}
	});

	// add product
	$("#formAdd").submit(function(event) {
		event.preventDefault();
		var name = $("#formAdd input[name='name']").val();
		var description = $("#formAdd textarea[name='description']").val();
		var price = $("#formAdd input[name='price']").val();

		// validation - client side
		if (name.length < 5 || name.length > 80) {
			$("#notifyAdd").css("background-color", "#ffd9cc");
			$("#notifyAdd").html("Name must be between 5 and 80 characters!");
		} else if (description.length < 5 || description.length > 3000) {
			$("#notifyAdd").css("background-color", "#ffd9cc");
			$("#notifyAdd").html("Description must be between 5 and 3000 characters!");
		} else if (!isNumeric(price) || (price < 1000 || price > 10000000000)) {
			$("#notifyAdd").css("background-color", "#ffd9cc");
			$("#notifyAdd").html("Price must be integer and between 1000 and 1,000,000,000 dong!");
		} else {
			// if name, description, price are ok, send data to server side to valid image
			$.ajax({
				url: "../controller/addProduct.php",
				type: "POST",
				data: new FormData(this),
				processData: false,
				contentType: false,
				beforeSend: function() {
					$("#formAdd input:submit").attr("disabled", true);
				},
				success: function(data) {
					data = JSON.parse(data);
					switch (data.statusCode) {
						case 200:
							$("#notifyAdd").css("background-color", "#ccffda");
							$("#notifyAdd").html("Add product successfully!");
							break;
						default:
							$("#notifyAdd").css("background-color", "#ffd9cc");
							$("#notifyAdd").html(data.info);
					}
				},
				error: function() {
					$("#notifyAdd").css("background-color", "#ffd9cc");
					$("#notifyAdd").html("Something wrong!");
				},
				complete: function() {
					$("#formAdd input:submit").attr("disabled", false);

					// show products on first page again

					let search = window.location.search;
					search = decodeURI(search);
					if (search == "") {
						dataSearch = {};
					}
					else {
						let splitSearch = search.split('=');
						let keyword = splitSearch[1];
						dataSearch = {
							keyword: keyword,
						};
					}

					$.ajax({
						url: "../controller/findAllProducts.php",
						type: "GET",
						data: dataSearch,
						beforeSend: function() {
							$("#r2").html("Fetching data from database...");
						},
						success: function(data) {
							try {
								data = JSON.parse(data);
								if (data.statusCode == 400) {
									$("#r2").html("Can't fetch data from database!");
								}
							} catch {
								$("#r2").html(data);
							}	
						},
						error: function() {
							$("#r2").html("Something is wrong!");
						},
						complete: function() {
							$(".description").each(function(i){
								var len = $(this).text().length;
								if(len > 150)
								{
									$(this).text($(this).text().substr(0, 150) + '...');
								}
							});
							$(".price").each(function () {
								$(this).text(parseInt($(this).text()).toLocaleString("vi", {
									style: "currency",
									currency: "VND"
								}));
							});
						}
					});
				}
			});
		}
	});

	// show current information
	$(document).on("show.bs.modal", "#updateProduct", function(event) {
		var button = $(event.relatedTarget); /*Button that triggered the modal*/
		var id = button.data("id");
		var name = button.data("name");
		var description = button.data("description");
		var price = button.data("price");
		var image = button.data("image");
		var modal = $(this);
		modal.find("input[name='id']").val(id);
		modal.find("input[name='name']").val(name);
		modal.find("textarea[name='description']").val(description);
		modal.find("input[name='price']").val(price);
		modal.find(".imgPreview").attr("src", image);
	});

	// update product
	$("#formUpdate").submit(function(event) {
		event.preventDefault();
		var id = $("#formUpdate input[name='id']").val();
		var name = $("#formUpdate input[name='name']").val();
		var description = $("#formUpdate textarea[name='description']").val();
		var price = $("#formUpdate input[name='price']").val();

		// validation - client side
		if (name.length < 5 || name.length > 80) {
			$("#notifyUpdate").css("background-color", "#ffd9cc");
			$("#notifyUpdate").html("Name must be between 5 and 80 characters!");
		} else if (description.length < 5 || description.length > 3000) {
			$("#notifyUpdate").css("background-color", "#ffd9cc");
			$("#notifyUpdate").html("Description must be between 5 and 3000 characters!");
		} else if (!isNumeric(price) || (price < 1000 || price > 10000000000)) {
			$("#notifyUpdate").css("background-color", "#ffd9cc");
			$("#notifyUpdate").html("Price must be integer and between 1000 and 1,000,000,000 dong!");
		} else {
			// if name, description, price are ok, send data to server side to valid image
			$.ajax({
				url: "../controller/updateProduct.php",
				type: "POST",
				data: new FormData(this),
				processData: false,
				contentType: false,
				beforeSend: function() {
					$("#formUpdate input:submit").attr("disabled", true);
				},
				success: function(data) {
					data = JSON.parse(data);
					switch (data.statusCode) {
						case 200:
							$("#notifyUpdate").css("background-color", "#ccffda");
							$("#notifyUpdate").html("Update product successfully!");
							break;
						default:
							$("#notifyUpdate").css("background-color", "#ffd9cc");
							$("#notifyUpdate").html(data.info);
					}
				},
				error: function() {
					$("#notifyUpdate").css("background-color", "#ffd9cc");
					$("#notifyUpdate").html("Something wrong!");
				},
				complete: function() {
					$("#formUpdate input:submit").attr("disabled", false);

					// show products on first page again

					let search = window.location.search;
					search = decodeURI(search);
					if (search == "") {
						dataSearch = {};
					}
					else {
						let splitSearch = search.split('=');
						let keyword = splitSearch[1];
						dataSearch = {
							keyword: keyword,
						};
					}
					
					$.ajax({
						url: "../controller/findAllProducts.php",
						type: "GET",
						data: dataSearch,
						beforeSend: function() {
							$("#r2").html("Fetching data from database...");
						},
						success: function(data) {
							try {
								data = JSON.parse(data);
								if (data.statusCode == 400) {
									$("#r2").html("Can't fetch data from database!");
								}
							} catch {
								$("#r2").html(data);
							}	
						},
						error: function() {
							$("#r2").html("Something is wrong!");
						},
						complete: function() {
							$(".description").each(function(i){
								var len = $(this).text().length;
								if(len > 150)
								{
									$(this).text($(this).text().substr(0, 150) + '...');
								}
							});
							$(".price").each(function () {
								$(this).text(parseInt($(this).text()).toLocaleString("vi", {
									style: "currency",
									currency: "VND"
								}));
							});
						}
					});
				}
			});
		}
	});

	$(document).on("click", ".delete", function() {
		var id = $(this).parents("tr").attr("id");

		if (confirm('Are you sure to delete this product?')) {
			$.ajax({
				url: '../controller/deleteProduct.php',
				type: 'POST',
				data: {
					id: id
				},
				success: function(data) {
					data = JSON.parse(data);
					switch (data.statusCode) {
						case 200:
							$("#" + id).fadeOut(5000, function() {
								$(this).remove();
							});
							alert("Delete product successfully!");
							break;
						default:
							alert(data.info);
					}
				},
				error: function() {
					alert('Something is wrong');
				},
			});
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
		else {
			let splitSearch = search.split('=');
			let keyword = splitSearch[1];
			dataSearch = {
				page: page,
				keyword: keyword,
			};
		}

		$.ajax({
			url: "../controller/findAllProducts.php",
			type: "GET",
			data: dataSearch,
			beforeSend: function() {
				$("#r2").html("Fetching data from database...");
			},
			success: function(data) {
				try {
					data = JSON.parse(data);
					if (data.statusCode == 400) {
						$("#r2").html("Can't fetch data from database!");
					}
				} catch {
					$("#r2").html(data);
				}	
			},
			error: function() {
				$("#r2").html("Something is wrong!");
			},
			complete: function() {
				$(".description").each(function(i){
					var len = $(this).text().length;
					if(len > 150)
					{
						$(this).text($(this).text().substr(0, 150) + '...');
					}
				});
				$(".price").each(function () {
					$(this).text(parseInt($(this).text()).toLocaleString("vi", {
						style: "currency",
						currency: "VND"
					}));
				});
			}
		});
	});
});