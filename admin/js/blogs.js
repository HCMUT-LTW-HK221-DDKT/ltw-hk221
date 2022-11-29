$(document).ready(function () {
    $('#add').click(function () {
        // $('button').prop('disabled', true);
        var date = $('#date').val();
        var desc = $('#desc').val();
        var img = $('#img').val();
        var url = $('#url').val();
        if (date == '' || desc == '' || img == '' || url == '') {
            $('#response').html('<span class = "text-danger">All fields are required</span>');
        } else {
            $.post(
                '../controller/addBlog.php',
                $('#bl').serialize(),
                function (data) {
                    $('form').trigger("reset");
                    $('#response').fadeIn().html(data);
                }
            );
        }
    });

    $('#del').click(function () {
        // $('button').prop('disabled', true);
        var url = $('#url').val();
        if (url == '') {
            $('#response').html('<span class = "text-danger">Url is required</span>');
        } else {
            $.post(
                '../controller/delBlog.php',
                $('#bl').serialize(),
                function (data) {
                    $('form').trigger("reset");
                    $('#response').fadeIn().html(data);
                }
            );
        }
    });

    function startInterval() {
        var refreshId = setInterval(function () {
            $.ajax({
                url: '../controller/showBlogs.php',
                type: 'html',
                success: function (resp) {
                    $("#show").html(resp);
                }
            });
        }, 1);
    }
    startInterval();
});