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
            url: "../controller/findOrder.php",
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
		url: "../controller/findOrder.php",
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
			$(".price").each(function () {
				$(this).text(parseInt($(this).text()).toLocaleString("vi", {
					style: "currency",
					currency: "VND"
				}));
			});
		}
	});
});
$(document).on("click", "#update", function() {
    var id = $(this).parents("tr").attr("id");
    $.ajax({
		url: "../controller/updateStatus.php",
		type: "POST",
		data: {
            id: id
        },
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
                setTimeout(function () { window.location.reload(); }, 100);
			}	
		},
		error: function() {
			$("#r2").html("Something is wrong!");
		},
		complete: function() {
			$(".price").each(function () {
				$(this).text(parseInt($(this).text()).toLocaleString("vi", {
					style: "currency",
					currency: "VND"
				}));
			});
		}
	});
});
