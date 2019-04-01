function getdetails() {
    var data = $('form').serializeArray();
    $.ajax({
        type: "POST",
        url: "admin/register.php",
        data: data
    }).done(function (result) {
        $("#result").html(result);
        var response = $("#response").html();

        switch (response) {
            case "wrong":
                $("#result").html("<span class='wrong'>Пользователь с такой эл. почтой уже зарегистрирован</span>");
                break;
            case "redir":
                $("#result").html("<span class='right'>Регистрация прошла успешно, теперь Вы можете зайти под своими данными</span>");
                setTimeout(function () {
                    window.location.href="authorization.php";
                }, 2000);
                break;
        }
    });
}