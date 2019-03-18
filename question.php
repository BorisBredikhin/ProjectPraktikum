<?php
require_once "config.php";
$id = $_GET["qId"];
$pageName = "Вопрос " . $id;
$addition = <<<HTML
<script src="js/processAnswer.js"></script>
HTML;

include ROOT_DIR . "/admin/header.php";
include ROOT_DIR . "/admin/data/questions/Question.php";
$question = new Question($GLOBALS["sitedata"]->{"questions"}[$id]);
?>
<?php
//TODO: menus
$question->print();
?>
<div id="result"></div>
<?php
include ROOT_DIR . "/admin/footer.php";
?>
