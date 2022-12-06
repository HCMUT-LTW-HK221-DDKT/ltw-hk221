let isSearch = false;

function onClickSearchBtn() {
    var keyword = document.querySelector('#search_keyword').value;
    if (keyword == "") {
        document.querySelector('.result').innerHTML = "Vui lòng không bỏ trống từ khóa.";
        $('#notification').toast('show');
    }
    else {
        var type = document.querySelector('#searchBy').value;
        $.ajax({
            url: "../controller/userManage.php",
            type: "GET",
            data: {
                keyword: keyword,
                type: type,
                getData: true
            },
            beforeSend: function () {
                $("#listUser").html("Fetching data from database...");
            },
            success: function (data) {
                try {
                    data = JSON.parse(data);
                    if (data.statusCode == 400) {
                        $("#listUser").html("Can't fetch data from database!");
                    }
                } catch {
                    $("#listUser").html(data);
                }
            },
            error: function () {
                $("#listUser").html("Something is wrong!");
            },
        });
    }
}

$(document).on("click", ".ban", function () {

    var status = $(this).parents("tr").children()[6].innerHTML;
    if(status == "banned") {
        document.querySelector('.result').innerHTML = "Tài khoản này đã bị khóa.";
        $('#notification').toast('show');
        return;
    }
    var username = $(this).parents("tr").attr("id");
    
    if (confirm(' Bạn muốn khóa tài khoản này?')) {
        $.ajax({
            url: '../controller/userManage.php',
            type: 'POST',
            data: {
                username: username,
                banned: true
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = "Khóa tài khoản thành công.";
                    $('#notification').toast('show');
                    setTimeout(function () { window.location.reload(); }, 1000);
                }
                else {
                    document.querySelector('.result').innerHTML = "Thất bại.";
                    $('#notification').toast('show');
                }

            },
            error: function () {
                alert('Something is wrong');
            },
        });
    }
});

$(document).on("click", ".resetPassword", function () {

    var status = $(this).parents("tr").children()[6].innerHTML;
    if(status == "banned") {
        document.querySelector('.result').innerHTML = "Tài khoản này đã bị khóa.";
        $('#notification').toast('show');
        return;
    }
    var username = $(this).parents("tr").attr("id");
    var email = $(this).parents("tr").children()[3].innerHTML;
    var name = $(this).parents("tr").children()[2].innerHTML;
    if (confirm(' Bạn muốn đặt lại mật khẩu tài khoản này cho người dùng?')) {
        $.ajax({
            url: '../controller/sendEmail.php',
            type: 'POST',
            data: {
                username: username,
                email: email,
                name:name,
                adminRequestResetPassword: true
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = data.info;
                    $('#notification').toast('show');
                }
                else {
                    document.querySelector('.result').innerHTML = data.info;
                    $('#notification').toast('show');
                }
            },
            error: function () {
                alert('Something is wrong');
            },
        });
    }
});
$(document).ready(function () {
    $.ajax({
        url: "../controller/userManage.php",
        type: "GET",
        data: {
            getData: true
        },
        beforeSend: function () {
            $("#listUser").html("Fetching data from database...");
        },
        success: function (data) {
            try {
                data = JSON.parse(data);
                if (data.statusCode == 400) {
                    $("#listUser").html("Can't fetch data from database!");
                }
            } catch {
                $("#listUser").html(data);
            }
        },
        error: function () {
            $("#listUser").html("Something is wrong!");
        },
    });


    $(document).on("click", ".page-link", function () {
        var page = $(this).data("page");
        if (page === 0) {
            return;
        }
        if (isSearch) {
            var keyword = document.querySelector('#search_keyword').value;
            var type = document.querySelector('#searchBy').value;
            data = {
                page: page,
                keyword: keyword,
                type: type,
                getData: true
            }
        }
        $.ajax({
            url: "../controller/userManage.php",
            type: "GET",
            data: data,
            beforeSend: function () {
                $("#listUser").html("Fetching data from database...");
            },
            success: function (data) {
                try {
                    data = JSON.parse(data);
                    if (data.statusCode == 400) {
                        $("#listUser").html("Can't fetch data from database!");
                    }
                } catch {
                    $("#listUser").html(data);
                }
            },
            error: function () {
                $("#listUser").html("Something is wrong!");
            },
        });
    });
});
