<?php
require_once "config.php";
$pageName = "Вход";
	$addition = <<<HTML
<script src="js/login.js"></script>
HTML;
include ROOT_DIR . "/admin/header.php";
?>
    <div class="container block-for-messages auth-form">
        <div id="formLogin">
            <h2>Вход</h2>
            <br>

            <form method="post" action="admin/login.php">
                <table>
                    <tr>
                        <td><label for="login">Логин:</label></td>
                        <td><input id="login" type="text" name="login"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Пароль:</label></td>
                        <td><input id="password" type="password" name="password"></td>
                    </tr>
                </table>
                <br>
                <input type="button" name="btnLogin" value="Войти" onclick="getdetails();">
                <div id="result"></div>
            </form>
        </div>
    </div>

<?php
include ROOT_DIR . "/admin/footer.php";
?>