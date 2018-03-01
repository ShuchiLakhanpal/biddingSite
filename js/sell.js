$(document).ready(function() {
    // $(".hideDialog").dialog({
    //     autoOpen: false
    // });

    // $("#dialog").change(function() {
    //     var checkout = $(this).val();
    //      console.log("Opening #dialog-" + type);
    //     $("#dialog-" + checkout).dialog('open');
    // });

    $(function() {
        $(".button").click(function() {
            $("#myform #valueFromMyButton").text($(this).val().trim());
            $("#myform input[type=text]").val('');
            $("#valueFromMyModal").val('');
            $("#myform").show(500);
        });
        $("#btnOK").click(function() {
            $("#valueFromMyModal").val($("#myform input[type=hidden]").val().trim());
            $("#myform").hide(400);
        });
    });

    $(function() {
        $('btnOK').click(function() {

            $("ol li").empty();
        });

    });
});