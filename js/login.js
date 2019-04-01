function getdetails() {
    var data = $('form').serializeArray();
    $.ajax({
        type: "POST",
        url: "admin/login.php",
        data: data
    }).done(function (result) {
        $("#result").html(result);
        var response = $("#response").html();

        switch (response) {
            case "wrong":
                $("#result").html("<span class='wrong'>Неверный логин или пароль</span>");
                break;
            case "redir":
                window.location.href="index.php";
        }
    });
}