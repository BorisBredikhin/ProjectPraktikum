function getdetails() {
    var data = $('form').serializeArray();
    $.ajax({
        type: "POST",
        url: "admin/data/questions/processAnswer.php",
        data: data
    }).done(function (result) {
        $("#result").html(result);

        $("#points").html(parseInt($("#points").html())+parseInt($("#delta").html()));

        if ($("#delta").html()==="1"){
            $("#submit").remove();
        }
    });
}