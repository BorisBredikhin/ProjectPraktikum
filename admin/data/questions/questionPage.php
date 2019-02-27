<?php
include "../../header.php";
include "Question.php";
$id = 0;//$_GET["qId"];
$pageName = "Вопрос " . $id;
$question = new Question($GLOBALS["sitedata"]->{"questions"}[0]);
?>
<?php
//TODO: menus
$question->print();
?>
<?php
include "../../footer.php";
?>
