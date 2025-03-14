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
    $('#error_login').hide();

    
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
        var userName = $("#username_login").val().trim();
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
        
        if (sqlInjectionPattern.test(userName)) {
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

        if (isValid) {
            var formData = {
                username: userName,
                password: password,
                _token: $('input[name="_token"]').val(),
            };
            console.log(formData, $(this).attr("action"));
            console.log(formData);

            
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                success: function (response) {
                    if (response.success) {
                       window.location.href = '/';
                       //console.log(formData);

                    } else {
                        $('#error_login').text(response.message).show();
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    alert("Có lỗi xảy ra. Vui lòng thử lại sau.");
                },
            });
        }
    });
    // Kích hoạt datetimepicker 
    $("#start_date, #end_date").datetimepicker({
        format: "d/m/Y",
        timepicker: false, 
    });
    //icon Đăng nhập
    $("#userDropdown").click(function(){
        $("#dropdownMenu").toggle();
    });
// <<<<<<< diem
// <<<<<<< Updated upstream
// =======
    

    //Trang Tours
    if ($(".price-slider-range").length) {
        $(".price-slider-range").on("slide", function (event, ui) {
            filterTours(ui.values[0], ui.values[1]);
        });
    }
    $('input[name="domain"]').on("change", filterTours);
    $('input[name="filter_star"]').on("change", filterTours);
    $('input[name="duration"]').on("change", filterTours);


    $("#sorting_tours").on("change", function () {
        filterTours(null, null);
    });


    function filterTours(minPrice = null, maxPrice = null) {
        $(".loader").show();
        $("#tours-container").addClass("hidden-content");

        if (minPrice === null || maxPrice === null) {
            minPrice = $(".price-slider-range").slider("values", 0);
            maxPrice = $(".price-slider-range").slider("values", 1);
        }

        var domain = $('input[name="domain"]:checked').val();
        var star = $('input[name="filter_star"]:checked').val();
        var duration = $('input[name="duration"]:checked').val();
        var sorting = $('#sorting_tours').val();

        formDataFilter = {
            minPrice: minPrice,
            maxPrice: maxPrice,
            domain: domain,
            star: star,
            time: duration,
            sorting : sorting
        };
        console.log(formDataFilter);

        $.ajax({
            url :filterToursUrl,
            method: "GET",
            data: formDataFilter,
            success: function (res) {
                $("#tours-container").html(res).removeClass("hidden-content");
                $("#tours-container .destination-item").addClass("aos-animate");
                $(".loader").hide();
            },
        });
    }


    $(".clear_filter a").on("click", function (e) {
        e.preventDefault();
        $(".loader").show();
        $("tours-container").addClass("hidden-content");
        $(".price-slider-range").slider("values", [0, 7000000]);

        $('input[name="domain"]').prop("checked", false);
        $('input[name="filter_star"]').prop("checked", false);
        $('input[name="duration"]').prop("checked", false);

        filterTours(0, 7000000);
    });
// >>>>>>> Stashed changes
// =======
    
// >>>>>>> master
});
    

