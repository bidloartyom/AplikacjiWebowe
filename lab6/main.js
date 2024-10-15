$(document).ready(function () {
    alert("Strona załadowana!");

    $("header").delay(3000);
    $("header").slideUp(2000);

    $("#show-hide").click(function () {
        $("#list").toggle(1000);
    });

    $("#color-list-show").click(function () {
        $("#color-list").show(1000);
        $("#change-font").show(1000);
        $("#change-bc").show(1000);
        $("#reset").show(1000);
        $("#color-list-show").hide(1000);
    });

    let choosed_color
    $(".color-square").click(function () {
        $(".color-square").css("border", "none")
        choosed_color = $(this).css("background-color");
        $(this).css("border", "solid black 2px");
    });

    $("#reset").click(function () {
        $(".paragraf").css("color", "black");
        $(".paragraf").css("background-color", "white");
        $(".color-square").css("border", "none")
    });

    $("#change-font").click(function () {
        $(".paragraf").css("color", choosed_color);
    });

    $("#change-bc").click(function () {
        $(".paragraf").css("background-color", choosed_color);
    });

    $("#change-class").click(function () {
        $(".first-for-change").toggleClass("second-to-change")
    });

    $("#input-text").on("keypress", function () {
        if (event.which == 13) {
            $("#text-for-change").text($("#input-text").val())
        }
    });

    $(".img-list").on("click", "img", function(){
        document.getElementById("img-to-change").src = $(this).attr("src");
    });

    $("#input-list").on("keypress", function () {
        if (event.which == 13) {
            $("#to-do-list").append(`<li>${$("#input-list").val()}</li>`)
        }
    });
    
}); 