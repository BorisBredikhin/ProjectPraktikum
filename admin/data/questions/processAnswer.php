<?php
	require_once "../../../config.php";
	session_start();
	include "../../saveUserData.module";
	if (!defined($GLOBALS["sitedata"]))
		include "../sitedataParser.php";
	function rightAnswer()
	{
		?>
        <span class='right-answer'>Верно</span>
        <div id='delta' hidden>1</div>
		<?php
		$_SESSION["userdata"]->{"points"}++;
	}
	
	function wrongAnswer()
	{
		?>
        <span class='wrong-answer'>Неверно</span>
        <div id='delta' hidden>0</div>
		<?php
	}

// radio task
//var_dump($_SESSION);
//var_dump($_POST);
	$question = $GLOBALS["sitedata"]->{"questions"}[(int)$_POST["id"]];
//var_dump($question);
	if ($question->{"type"} == "radio task") {
		if ($_POST["answer"] == $question->{"rightAnswer"}) {
			rightAnswer();
		} else {
			wrongAnswer();
		}
	}
	array_push($_SESSION["userdata"]->{'answeredQuestions'}, $_POST["id"]);
	save_user_data();
?>