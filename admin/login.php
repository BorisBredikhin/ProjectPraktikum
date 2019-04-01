<?php
session_start();

include_once "../config.php";

//var_dump($_POST);


$userFileName=substr($_POST["login"], 0, strpos($_POST["login"], '@')).".json";
$path = "data/users/";

if (file_exists($path . $userFileName)){
    $userJSON = json_decode(file_get_contents($path .$userFileName));
    //var_dump($userJSON);
    login_user($_POST, $userJSON);
}
else{
	echo "<div id='response' hidden>wrong</div>";
}

function login_user($posted, $stored){
    if (md5($posted["password"])==$stored->{"password"}){
        $_SESSION["logged"] = true;
        $_SESSION['userdata'] = $stored;
        
        echo "<div id='response' hidden>redir</div>";
    }
    else{
		echo "<div id='response' hidden>wrong</div>";
    }
}