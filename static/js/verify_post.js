function checkEverything() {
    if($('[name="teaser"]').val().match("[A-z]") && $('[name="body"]').val().match("[A-z]")) {
        return true;
    }    
}

$('#fromNewPost').submit(e => {
    if (!checkEverything()) {
        e.preventDefault();
        /*console.log($("#failure_alert"));
        $("#failure_alert").removeClass("hidden");
        $("#failure_alert").show();*/
        alert("Kérlek írj betűket is a formba :)");
    }
})