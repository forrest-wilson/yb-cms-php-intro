$(document).ready(function() {
    $("#circleForm").show();
    
    $(".form-selector").on("click", function(e) {
        e.preventDefault();

        $(".form").hide();
        $(".form-selector").removeClass("is-active");

        $("#" + $(this).data("form")).show();
        $(this).addClass("is-active");
    });
});