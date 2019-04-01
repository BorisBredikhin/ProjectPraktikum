<?php
require_once "config.php";
$pageName = "Регистрация";                   $addition = <<<HTML
<script src="js/register.js"></script>
HTML;
include ROOT_DIR."/admin/header.php";
?>
<!-- Блок для вывода сообщений -->
<div class="container block-for-messages auth-form">
    <div id="formRegister" >
        <h2>регистрация</h2>
         <br>
        <form action="admin/register.php" method="post" name="formRegister">
            <table>
                <tbody>
                <tr>
                    <td><label for="firstName">Имя:</label></td>
                    <td>
                        <input type="text" name="firstName" id = "firstName" required>
                    </td>
                </tr>

                <tr>
                    <td> Фамилия:</td>
                    <td>
                        <input type="text" name="lastName" required>
                    </td>
                </tr>

                <tr>
                    <td> Email:</td>
                    <td>
                        <input type="email" name="email" required><br>
                        <span id="validEmailMessage" class="message-error" hidden></span>
                    </td>
                </tr>

                <tr>
                    <td> Пароль:</td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 8 символов" required><br>
                        <span id="validPasswordMessage" class="mesage-error"></span>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <input type="button" name="btnLogin" value="Зарегистрироваться" onclick="getdetails();">
            <div id="result"></div>
        </form>
    </div>
</div>
<?php
include ROOT_DIR."/admin/footer.php";
?>