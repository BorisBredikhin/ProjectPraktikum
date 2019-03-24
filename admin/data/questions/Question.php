<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 27.02.2019
 * Time: 12:53
 */
//require_once "../../../config.php";

class Question
{
    public $data;
    private $input;

    function __construct($questionData)
    {
        $this->data = $questionData;
        if (isset($_SESSION["logged"])) {
			if (!in_array((int)$this->data->{"id"}, $_SESSION["userdata"]->{"answeredQuestions"})){  $this->input = '<input type="button" name="submit" id="submit" value="Проверить" onClick = "getdetails()" />';
        } else{
        	 $this->input = "<div class='already-answered'>Вы уже ответили верно на этот вопрос</div>";
		}}
        else {
            $this->input = "<p><a href=\"" . ROOT_SERVER . "/authorization.php" . "\">Войти</a> | <a href=\"" . ROOT_SERVER . "/registration.php" . "\" > Зарегистрироваться</a></p>";
        }
        //var_dump($this->data);
    }

    public function print(){
        echo "<div class = 'question'>";
        echo "<h2>".$this->data->{"title"}."</h2>";
        echo "<div>".$this->data->{"text"}."</div>";
        switch ($this->data->{"type"}){
            case "radio task":
                $this->printRadio();
                break;
            case "checkbox task":
                $this->printCheckbox();
                break;
            case "text task":
                $this->printText();
                break;
            default:
                echo $this->data->{"type"};
                throw new \http\Exception\InvalidArgumentException();
                break;
        }
        echo "</div>";
    }

    private function printCheckbox(){
        echo <<<HTML
<form action="/admin/data/questions/processAnswer.php" method="post">
<input type="hidden" name="id"  value={$this->data->{"id"}}>
HTML;
        //var_dump($this->data->{"answers"});
        foreach ($this->data->{"answers"} as $answer){
            //var_dump($answer);
            echo "<label><input name='answers[]' type='checkbox' value={$answer->{"id"}}>";
            echo $answer->{"text"};
            echo "</label><br>";
        }
        echo $this->input;
        echo <<<HTML
</form>
HTML;

    }

    private function printRadio(){
        echo <<<HTML
<form action="/admin/data/questions/processAnswer.php" method="post">
<input type="hidden" name="id" value={$this->data->{"id"}}>
HTML;
        //var_dump($this->data->{"answers"});
        foreach ($this->data->{"answers"} as $answer){
            //var_dump($answer);
            echo "<label><input name='answer' type='radio' value={$answer->{"id"}}>";
            echo $answer->{"text"};
            echo "</label><br>";
        }
        //TODO:
        echo <<<HTML
        {$this->input}
</form>
HTML;

    }

    private function printText(){
        //var_dump($this->data);
        echo <<<HTML
<form action="/admin/data/questions/processAnswer.php" method="post">
<input type="hidden" name="id" value={$this->data->{"id"}}>
HTML;
        echo <<<HTML
        <label>Ответ: <input type="text" name="answer" placeholder="Введите Ответ"></label>
        <br>
        {$this->input}
</form>
HTML;

    }
}