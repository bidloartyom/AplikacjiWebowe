$(document).ready(function () {
    $(".fav").on("click", function () {
        const akapit = $(this);
        $.post("changeFav.php", { idDzbana: "'" + akapit.data("dzban") + "'" }, function (data) {
            if (data == "sukces") {
                akapit.attr('src') == "icons/unfilled.png" ? akapit.attr('src', 'icons/filled.png') : akapit.attr('src', 'icons/unfilled.png');
            };
        });
    });
});
