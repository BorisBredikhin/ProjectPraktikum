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
		array_push($_SESSION["userdata"]->{'answeredQuestions'}, $_POST["id"]);
	}
	
	function wrongAnswer()
	{
		?>
        <span class='wrong-answer'>Неверно</span>
        <div id='delta' hidden>0</div>
		<?php
	}
	
	/**
	 * @param $question
	 */
	function check_radio($question): void
	{
		if ($_POST["answer"] == $question->{"rightAnswer"}) {
			rightAnswer();
		} else {
			wrongAnswer();
		}
	}
// radio task
//var_dump($_SESSION);
//var_dump($_POST);
	$question = $GLOBALS["sitedata"]->{"questions"}[(int)$_POST["id"]];
//var_dump($question);
	
	if ($question->{"type"} == "radio task") {
		check_radio($question);
	}
	save_user_data();
?>