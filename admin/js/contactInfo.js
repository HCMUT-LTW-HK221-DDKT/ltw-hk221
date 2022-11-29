$(document).ready(function () {
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "GET",
        data: {
            getContactInfo: true
        },
        beforeSend: function () {
            $(".contactDetail").html("Fetching data from database...");
        },
        success: function (data) {
            try {
                data = JSON.parse(data);
                console.log(data)
                if (data.statusCode == 400) {
                    $(".contactDetail").html("Can't fetch data from database!");
                }
            } catch {
                $(".contactDetail").html(data);
            }
        },
        error: function () {
            $(".contactDetail").html("Something is wrong!");
        },
    });
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "GET",
        data: {
            getShowrooms: true
        },
        beforeSend: function () {
            $(".listShowroom").html("Fetching data from database...");
        },
        success: function (data) {
            try {
                data = JSON.parse(data);
                console.log(data)
                if (data.statusCode == 400) {
                    $(".listShowroom").html("Can't fetch data from database!");
                }
            } catch {
                $(".listShowroom").html(data);
            }
        },
        error: function () {
            $(".listShowroom").html("Something is wrong!");
        },
    });


});

$(document).on("click", ".updateEmail", function () {

    let newEmail = document.querySelector("#update_email").value;
    if(newEmail == "") {
        document.querySelector('.result').innerHTML = "Vui lòng không bỏ trống.";
        $('#notification').toast('show');
        return;
    }
    var id = $(this).parents("tr").attr("id");
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "POST",
        data: {
            newEmail: newEmail,
            id: id,
            updateEmail: true
        },
        success: function (data) {
            data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = "Cập nhật email liên hệ thành công.";
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


});

$(document).on("click", ".updatePhone", function () {

    let newPhone = document.querySelector("#update_phone").value;
    if(newPhone == "") {
        document.querySelector('.result').innerHTML = "Vui lòng không bỏ trống.";
        $('#notification').toast('show');
        return;
    }
    var id = $(this).parents("tr").attr("id");
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "POST",
        data: {
            newPhone: newPhone,
            id: id,
            updatePhone: true
        },
        success: function (data) {
            data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = "Cập nhật số điện thoại liên hệ thành công.";
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
});

$(document).on("click", "#addShowroomBtn", function () {

    let newShowroom = document.querySelector("#addShowroomInput").value;
    if(newShowroom == "") {
        document.querySelector('.inputError').innerHTML = "Vui lòng không bỏ trống.";
        // $("#addShowroomModal").modal('hide');
        return;
    }
    $("#addShowroomModal").modal('hide');
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "POST",
        data: {
            newShowroom: newShowroom,
            addShowroom: true
        },
        success: function (data) {
            data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = "Thêm địa chỉ showroom thành công.";
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
});
currentShowroom = "";
$(document).on("click", ".updateShowroom", function () {
    currentShowroom = $(this).parents("tr").attr("id");
});
$(document).on("click", "#updateShowroomBtn", function () {
    let newAddress = document.querySelector("#updateShowroomInput").value;
    if(newAddress == "") {
        document.querySelector('.updateInputError').innerHTML = "Vui lòng không bỏ trống.";
        // $("#addShowroomModal").modal('hide');
        return;
    }
    $("#updateShowroomModal").modal('hide');
    var address = currentShowroom;
    $.ajax({
        url: "../controller/contactInfo.php",
        type: "POST",
        data: {
            address: address,
            newAddress: newAddress,
            updateShowroom: true
        },
        success: function (data) {
            data = JSON.parse(data);
                if (data.statusCode == 200) {
                    document.querySelector('.result').innerHTML = "Cập nhật địa chỉ showroom thành công.";
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
});

$(document).on("click", ".deleteShowroom", function () {
    var address = $(this).parents("tr").attr("id");
    if (confirm(' Bạn muốn xóa địa chỉ showroom này?')) {
        $.ajax({
            url: "../controller/contactInfo.php",
            type: "POST",
            data: {
                address: address,
                deleteShowroom: true
            },
            success: function (data) {
                data = JSON.parse(data);
                    if (data.statusCode == 200) {
                        document.querySelector('.result').innerHTML = "Xóa địa chỉ showroom thành công.";
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