<?php
$pageName = "Главная";
include "../admin/header.php";
?>
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <div id="form_register">
        <h2>регистрация</h2>

        <form action="register.php" method="post" name="form_register">
            <table>
                <tbody>
                <tr>
                    <td> Имя:</td>
                    <td>
                        <input type="text" name="first_name" required="required">
                    </td>
                </tr>

                <tr>
                    <td> Фамилия:</td>
                    <td>
                        <input type="text" name="last_name" required="required">
                    </td>
                </tr>

                <tr>
                    <td> Email:</td>
                    <td>
                        <input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>

                <tr>
                    <td> Пароль:</td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                <tr>
                    <td> Введите капчу:</td>
                    <td>
                        <p>
                            <img src="captcha.php" alt="Капча"/> <br><br>
                            <input type="text" name="captcha" placeholder="Проверочный код" required="required">
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_register" value="Зарегистрироватся!">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
</body>
</html>