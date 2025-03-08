$(document).ready(function(){
    var sqlInjectionPattern = /[<>'"%;()&+]/;
    // Đăng nhập/ đăng ký
    $(".signup").hide();

    $("#sign-up").click(function(event) {
        event.preventDefault(); 
        console.log("Switch to Sign Up");
        $(".sign-in").hide();
        $(".signup").show();
    });

    $("#sign-in").click(function(event) {
        event.preventDefault();
        console.log("Switch to Sign In");
        $(".signup").hide();
        $(".sign-in").show();
    });
    $('#message').hide();
    $('#error').hide();
    // Kích hoạt datetimepicker 
    $("#start_date, #end_date").datetimepicker({
        format: "d/m/Y",
        timepicker: false, 
    });
    //icon Đăng nhập
    $("#userDropdown").click(function(){
        $("#dropdownMenu").toggle();
    });
    //Trienkhaidangky
    $("#register-form").on("submit", function (e) {
        e.preventDefault();
        $(".loader").show();
        $("#register-form").addClass("hidden-content");

        // Lấy giá trị của các trường nhập liệu
        var username = $("#username_register").val().trim();
        var email = $("#email_register").val().trim();
        var password = $("#password_register").val().trim();
        var rePass = $("#re_pass").val().trim();

        // Đặt lại nội dung thông báo lỗi và ẩn chúng
        $("#validate_username_regis").hide().text("");
        $("#validate_email_regis").hide().text("");
        $("#validate_password_regis").hide().text("");
        $("#validate_repass").hide().text("");

        // Kiểm tra lỗi
        var isValid = true;

        // Kiểm tra tên đăng nhập không chứa ký tự SQL injection
        if (sqlInjectionPattern.test(username)) {
            isValid = false;
            $("#validate_username_regis")
                .show()
                .text("Tên tài khoản không được chứa ký tự đặc biệt.");
        }

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            isValid = false;
            $("#validate_email_regis").show().text("Email không hợp lệ.");
        }

        if (password.length < 6) {
            isValid = false;
            $("#validate_password_regis")
                .show()
                .text("Mật khẩu phải có ít nhất 6 ký tự.");
        }

        if (sqlInjectionPattern.test(password)) {
            isValid = false;
            $("#validate_password_regis")
                .show()
                .text("Mật khẩu không được chứa ký tự đặc biệt.");
        }

        // Kiểm tra nhập lại mật khẩu
        if (password !== rePass) {
            isValid = false;
            $("#validate_repass").show().text("Mật khẩu nhập lại không khớp.");
        }

        if (isValid) {
            var formData = {
                username_regis: username,
                email: email,
                password_regis: password,
                _token: $('input[name="_token"]').val(),
            };
            console.log(formData, $(this).attr("action"));

            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                success: function (response) {
                    if (response.success) {
                        //toastr.success(response.message, { timeOut: 5000 });
                        $('#message').text(response.message).show();
                        $('#error').hide();
                    
                    } else {
                        //toastr.error(response.message);
                        $('#message').hide();
                        $('#error').text('Tên tài khoản hoặc mail đã tồn tại!').show();
                    }
                    //$("#register-form")
                        //.removeClass("hidden-content")
                        //.trigger("reset");
                    //$(".loader").hide();
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
                },
            });
        }
    });

    //Phandangnhap
    $("#login-form").on("submit", function (e) {
        e.preventDefault();
        var username = $("#username_login").val().trim();
        var password = $("#password_login").val().trim();

        // Đặt lại nội dung thông báo lỗi và ẩn chúng
        $("#validate_username").hide().text("");
        $("#validate_password").hide().text("");

        var isValid = true;

        // Kiểm tra độ dài mật khẩu
        if (password.length < 6) {
            isValid = false;
            $("#validate_password")
                .show()
                .text("Mật khẩu phải có ít nhất 6 ký tự.");
        }

        // Kiểm tra tên đăng nhập và mật khẩu không chứa ký tự đặc biệt (SQL injection)
        
        if (sqlInjectionPattern.test(username)) {
            isValid = false;
            $("#validate_username")
                .show()
                .text("Tên đăng nhập không được chứa ký tự đặc biệt.");
        }

        if (sqlInjectionPattern.test(password)) {
            isValid = false;
            $("#validate_password")
                .show()
                .text("Mật khẩu không được chứa ký tự đặc biệt.");
        }
    });
    
});
    

