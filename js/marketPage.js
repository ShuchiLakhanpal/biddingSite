$(document).ready(function() {
    $(".openToggleSell").hide();
    //$(".caretAlignUp").hide();
    $(".toggleHideSell").click(function() {
        $(".openToggleSell").toggle();
        $(".caretAlignUp").show();
        $(".caretAlign").hide();
    });
});



function displayBid(id) {
    $('#bid_form_' + id).show();
}

function hideBid(id) {
    $('#bid_form_' + id).hide();
    $('#bid_form_' + id).submit();
}