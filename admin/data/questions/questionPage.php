<?php
require_once "../../../config.php";
$id = 1;//$_GET["qId"];
$pageName = "Вопрос " . $id;
include ROOT_DIR."/admin/header.php";
include "Question.php";
$question = new Question($GLOBALS["sitedata"]->{"questions"}[$id]);
?>
<?php
//TODO: menus
$question->print();
?>
<?php
include ROOT_DIR."/admin/footer.php";
?>
