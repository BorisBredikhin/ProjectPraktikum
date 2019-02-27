<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 27.02.2019
 * Time: 12:53
 */

class Question
{
    public $data;
    function __construct($questionData)
    {
        $this->data = $questionData;
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
            default:
                echo $this->data->{"type"};
                throw new \http\Exception\InvalidArgumentException();
                break;
        }
        echo "</div>";
    }

    private function printCheckbox(){
        echo <<<HTML
<form action="processAnswer.php" method="post">
HTML;
        //var_dump($this->data->{"answers"});
        foreach ($this->data->{"answers"} as $answer){
            //var_dump($answer);
            echo "<label><input name='answers[]' type='checkbox' value='{$answer->{"id"}}'>";
            echo $answer->{"text"};
            echo "</label><br>";
        }
        echo <<<HTML
        <input type="submit">
</form>
HTML;

    }

    private function printRadio(){
        echo <<<HTML
<form action="processAnswer.php" method="post">
HTML;
        //var_dump($this->data->{"answers"});
        foreach ($this->data->{"answers"} as $answer){
            //var_dump($answer);
            echo "<label><input name='answer' type='radio' value='{$answer->{"id"}}'>";
            echo $answer->{"text"};
            echo "</label><br>";
        }
        echo <<<HTML
        <input type="submit">
</form>
HTML;

    }
}