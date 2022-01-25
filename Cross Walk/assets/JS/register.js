// On click signup, hide and show registration form

$(document).ready(function() {
    $("#signup").click(function() {
    $("#first").slideUp("slow", function () {
        $("#second").slideDown("slow");
    });
});

// On click signup, hide login and show registration form
            $("#signin").click(function () {
                $("#second").slideUp("slow", function () {
                    $("#first").slideDown("slow");
                });


            });
        });