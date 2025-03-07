$(document).ready(function(){
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

    // Kích hoạt datetimepicker cho input ngày đi và ngày về
    $("#start_date, #end_date").datetimepicker({
        format: "d/m/Y",
        timepicker: false, 
    });
    //icon Đăng nhập
    $("#userDropdown").click(function(){
        $("#dropdownMenu").toggle();
    });
});
    

