function getdetails() {
    var data = $('form').serializeArray();
    $.ajax({
        type: "POST",
        url: "admin/data/questions/processAnswer.php",
        data: data
    }).done(function (result) {
        $("#result").html(result);

        let points = $("#points");

        points.html(parseInt(points.html())+parseInt($("#delta").html()));
    });
}