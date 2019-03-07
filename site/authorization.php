<?php
$pageName = "Вход";
include "../admin/header.php";
?>
<form method="post" action="/login/">
    <table>
        <tr>
            <td><label for="loginField">Логин</label></td>
            <td><input id="loginField" type="text" name="login"></td>
        </tr>
        <tr>
            <td><label for="passwordField">Пароль</label></td>
            <td><input id="passwordField" type="text" name="password"></td>
        </tr>
    </table>
</form>

</table>
</body>
</html>