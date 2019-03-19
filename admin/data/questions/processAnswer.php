<?php
require_once "../../../config.php";
session_start();
if (!defined($GLOBALS["sitedata"]))//Сервер тольько что запущен и данные сайта не считаны
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
<?php
// radio task
if ($question->{"type"} == "radio task"){
    if ($_POST["answer"] == $question->{"rightAnswer"}){
        echo "<span class='right-answer'>Верно</span><div id = 'delta' hidden>1</div>";
        $_SESSION["userdata"]->{"points"}++;


    }
    else{
        echo "<span class='wrong-answer'>Неверно</span><div id = 'delta' hidden>0</div>";
    }
}
?>