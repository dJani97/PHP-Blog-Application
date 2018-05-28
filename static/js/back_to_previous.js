window.setTimeout(function () {
    if ($("#success_alert").hasClass("hidden") === false) {
        window.location = document.referrer;
    }
}, 3000);