$(document).ready(function () {

    $("form").submit(function (event) {
        event.preventDefault();

        let name = document.querySelector(".send_name").value;
        let email = document.querySelector(".send_email").value;
        let subject = document.querySelector(".send_subject").value;
        let message = document.querySelector("#contact__message").value;

        let valid = true;
        if (name == "") {
            document.querySelector('.nameError').innerHTML = "Vui lòng không bỏ trống.";
            valid = false;
        }
        else {
            document.querySelector('.nameError').innerHTML = "";
        }

        if (email == "") {
            document.querySelector('.emailError').innerHTML = "Vui lòng không bỏ trống.";
            valid = false;
        }
        else if (!email.match(/\S+@\S+\.\S+/)) {
            document.querySelector('.emailError').innerHTML = "Email phải đúng định dạng sth@sth.sth.";
            valid = false;
        }
        else {
            document.querySelector('.emailError').innerHTML = "";
        }

        if (subject == "") {
            document.querySelector('.subjectError').innerHTML = "Vui lòng không bỏ trống.";
            valid = false;
        }
        else {
            document.querySelector('.subjectError').innerHTML = "";
        }

        if (message == "") {
            document.querySelector('.messageError').innerHTML = "Vui lòng không bỏ trống.";
            valid = false;
        }
        else {
            document.querySelector('.messageError').innerHTML = "";
        }

        if(valid) {
            $.ajax({
                url: '../controller/sendEmail.php',
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    subject:subject,
                    message: message,
                    userSendContactForm: true
                },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.statusCode == 200) {
                        alert(data.info);
                    }
                    else {
                        alert(data.info);
                    }
                },
                error: function () {
                    alert('Something is wrong');
                },
            });
        }
    });

});