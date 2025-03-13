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
<<<<<<< Updated upstream
=======
    

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
>>>>>>> Stashed changes
});
    

