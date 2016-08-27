
function guestMode() {
    $("header").fadeToggle(2000);
    $("#services").fadeToggle(2000);
    $("#services1").fadeToggle(2000);
    $("#portfolio").fadeToggle(2000);

    $("#aboutUs").click(function() {
        $("#aboutHTML").fadeToggle(2000);
        $("header").hide();
        $("#services").hide();
        $("#services1").hide();
        $("#portfolio").hide();

    });
}
guestMode();
