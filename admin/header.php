<?php
if (!defined($GLOBALS["sitedata"]))//Сервер тольько что запущен и данные сайта не считаны
    include "data/sitedataParser.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <title><?=$GLOBALS["sitedata"]->{"name"};?></title>
</head>
<body>
<h1><?=$GLOBALS["sitedata"]->{"name"};?></h1>
</body>
</html>