window.setTimeout(function () {
    // redirect:
    if ($("#success_alert").hasClass("hidden") === false) {
        window.setTimeout(function() {
            window.location.href = '/blogApp/';
        }, 500);
    }

    /* $(".alert").slideUp(500, function () {
        $(this).remove();
    }); */
    
}, 3000);