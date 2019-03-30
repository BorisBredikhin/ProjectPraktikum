<?php
	require_once "../../../config.php";
	session_start();
	include "../../saveUserData.module";
	if (!defined($GLOBALS["sitedata"]))
		include "../sitedataParser.php";
	function right_answer()
	{
		?>
        <span class='right-answer'>Верно</span>
        <div id='delta' hidden>1</div>
		<?php
		$_SESSION["userdata"]->{"points"}++;
		array_push($_SESSION["userdata"]->{'answeredQuestions'}, $_POST["id"]);
	}
	
	function wrong_answer()
	{
		?>
        <span class='wrong-answer'>Неверно</span>
        <div id='delta' hidden>0</div>
		<?php
	}
	function check_single_answer_question($question): void
	{
		if ($_POST["answer"] == $question->{"rightAnswer"}) {
			right_answer();
		} else {
			wrong_answer();
		}
	}
	
	function check_checkbox($question): void
	{
		if (($_POST["answers"] == $question->{"rightAnswer"}) == 1) {
			right_answer();
		} else {
			wrong_answer();
		}
	}
// radio task
//var_dump($_SESSION);
//var_dump($_POST);
	$question = $GLOBALS["sitedata"]->{"questions"}[(int)$_POST["id"]];
//var_dump($question);
	
	if ($question->{"type"} == "radio task" ||$question->{"type"} == "text task") {
		check_single_answer_question($question);
	} else if($question->{"type"} == "checkbox task"){
	    check_checkbox($question);
    } else{
	    ?>
        <pre>
            <?php
                var_dump($question);
                var_dump($_POST)
            ?>
        </pre>
        <?php
    }
	save_user_data();
?>