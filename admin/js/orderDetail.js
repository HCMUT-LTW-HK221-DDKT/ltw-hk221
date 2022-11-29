var keyword = document.querySelector('#search_keyword').value;
$.ajax({
    url: "../controller/findOrderDetail.php",
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