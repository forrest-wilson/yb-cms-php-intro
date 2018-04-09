$(document).ready(function() {
    $("#showCircleForm").on("click", function(e) {
        e.preventDefault();

        $(".form").hide();
        $("#circleForm").show();
    });

    $("#showSquareForm").on("click", function(e) {
        e.preventDefault();

        $(".form").hide();
        $("#squareForm").show();
    });

    $("#showRectangleForm").on("click", function(e) {
        e.preventDefault();

        $(".form").hide();
        $("#rectangleForm").show();
    });
});