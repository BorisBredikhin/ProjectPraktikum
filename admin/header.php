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
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(53218108, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/53218108" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
   
    <title><?=$GLOBALS["sitedata"]->{"name"}." : ".$pageName;?></title>
    <link rel="stylesheet" href=<?="\"".ROOT_SERVER."/css/main.css\""?>>
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
            echo "<a href=\"".ROOT_SERVER."/authorization.php" . "\" class=\"float-right\">Войти</a><div class='float-right'> | </div><a href=\"".ROOT_SERVER."/registration.php" . "\" class=\"float-right\" > Зарегистрироваться</a >" ;

        }
        else{
            //var_dump($_SESSION);
            echo "<a href=\"".ROOT_SERVER."/logout.php" . "\" class=\"float-right\">Выйти</a><div class='float-right'> | </div><div class=\"float-right\">" . $_SESSION["userdata"]->{"firstName"} . " " . $_SESSION["userdata"]->{"lastName"}." <span id='points'>". $_SESSION["userdata"]->{"points"}."</span> баллов</div>";

            //var_dump($_SESSION);
        }
        ?>
    </div>
</div>
</header>
<?php
if (!($pageName == "Вход" || $pageName == "Регистрация"))
    {
        echo "<div class=\"float-container\">";
        echo '<div class="page">';
    }
?>
