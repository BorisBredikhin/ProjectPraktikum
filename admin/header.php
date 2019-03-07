<?php
if (!defined($GLOBALS["sitedata"]))//Сервер тольько что запущен и данные сайта не считаны
    //require_once "../config.php";
    include "data/sitedataParser.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <title><?=$GLOBALS["sitedata"]->{"name"}." : ".$pageName;?></title>
    <link rel="stylesheet" href=<?="\""."/css/main.css\""?>>
</head>
<body>
<header>
    <div class="container">
        <h1>Amazing Html</h1>
        <h2> Обучающий сайт, знакомящий с основами языка программирования HTML</h2>
    </div>
</header>