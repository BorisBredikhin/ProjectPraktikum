<?php
require_once "../../../config.php";
session_start();
if (!defined($GLOBALS["sitedata"]))//Сервер тольько что запущен и данные сайта не считаны
    //require_once "../config.php";
    include "../sitedataParser.php";
?>
<pre>
    <?php
    session_start();
    var_dump($_POST);
    var_dump($GLOBALS["sitedata"]) ;
    var_dump($_SESSION);
    ?>
</pre>
