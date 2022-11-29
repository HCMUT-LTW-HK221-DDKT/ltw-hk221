// console.log("run");

$(document).ready(function () {
    // $('#loginNotification').toast('show');
    $('.login-form').submit(function (event) {
        event.preventDefault();
        let username = document.querySelector("#login_username").value;
        let password = document.querySelector("#login_password").value;

        let valid = true;
        if (username == "") {
            document.querySelector('.usernameError').innerHTML = "<div class='text-danger' role='alert'>Vui lòng không bỏ trống.</div>";
            valid = false;
        }
        else {
            document.querySelector('.usernameError').innerHTML = "";
        }

        if (password == "") {
            document.querySelector('.passwordError').innerHTML = "<div class='text-danger' role='alert'>Vui lòng không bỏ trống.</div>";
            valid = false;
        }
        else {
            document.querySelector('.passwordError').innerHTML = "";
        }

        if (valid == true) {
            $.ajax({
                type: "POST",
                url: "../controller/adminAuth.php",
                data: {
                    username: username,
                    password: password,
                    requestLogin: true
                },
                success: function (data) {
                    data = JSON.parse(data);
                    console.log(data)
                    if (data.statusCode == 200) {
                        $(".loginResult").html(data.info);
                        $('#loginNotification').toast('show');
                        setTimeout(function () { window.location.replace('index.php'); }, 1000);
                    }
                    else {
                        $(".loginResult").html(data.info);
                        $('#loginNotification').toast('show');
                    }
                },
            });
        }

    })
});
