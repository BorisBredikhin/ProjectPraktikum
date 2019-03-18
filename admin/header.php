<?php
//require_once "../config.php";
session_start();
if (!defined($GLOBALS["sitedata"]))//Сервер тольько что запущен и данные сайта не считаны
    //require_once "../config.php";
    include "data/sitedataParser.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <title><?=$GLOBALS["sitedata"]->{"name"}." : ".$pageName;?></title>
    <link rel="stylesheet" href=<?="\""."/css/main.css\""?>>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <?php
    if (isset($addition))
        echo $addition;
    ?>
</head>
<body>
<header>
    <div class="container">
        <h1>Amazing Html</h1>
        <h2> Обучающий сайт, знакомящий с основами языка программирования HTML</h2>
    </div>
<div class="container">
    <div class="float-container">
        <?php
        if (!isset($_SESSION["logged"])){
            echo "<a href=\"".ROOT_SERVER."/authorization.php" . "\" class=\"float-right\">Войти</a><div class='float-right'> | </div>\"<a href=\"".ROOT_SERVER."/registration.php" . "\" class=\"float-right\" > Зарегистрироваться</a >" ;

        }
        else{
            //var_dump($_SESSION);
            echo "<a href=\"".ROOT_SERVER."/logout.php" . "\" class=\"float-right\">Выйти</a><div class='float-right'> | </div><div class=\"float-right\">" . $_SESSION["userdata"]->{"firstName"} . " " . $_SESSION["userdata"]->{"lastName"}."</div>";

            //var_dump($_SESSION);
        }
        ?>
    </div>
</div>
</header>