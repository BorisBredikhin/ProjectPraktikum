

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link rel="stylesheet" href="~/Content/Admin.css" />
</head>
<body>
    <form id="form1" runat="server">
        <h1>Amazing HTML: админ-панель</h1>
        <div class="adminContent">
            <asp:ContentPlaceHolder ID="ContentPlaceHolder1" runat="server">

            </asp:ContentPlaceHolder>
        </div>
    </form>
    <div id="nav">
        <a href="<%= OrdersUrl %>">регистрация</a>
        <a href="<%= GamesUrl %>">авторизация</a>
    </div>
</body>
</html>