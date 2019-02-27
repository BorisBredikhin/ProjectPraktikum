<?php
$id = 1;//$_GET["qId"];
$pageName = "Вопрос " . $id;
include "../../header.php";
include "Question.php";
$question = new Question($GLOBALS["sitedata"]->{"questions"}[$id]);
?>
<?php
//TODO: menus
$question->print();
?>
<?php
include "../../footer.php";
?>
