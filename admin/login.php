<?php
session_start();

include_once "../config.php";

var_dump($_POST);


$userFileName=substr($_POST["login"], 0, strpos($_POST["login"], '@')).".json";
$path = "data/users/";

if (file_exists($path . $userFileName)){
    $userJSON = json_decode(file_get_contents($path .$userFileName));
    var_dump($userJSON);
    login_user($_POST, $userJSON);
}
else{
    $host  = $_SERVER['HTTP_HOST'];
    $extra = 'messages/wrongLoginOrPassword.php';
    header("Location: http://$host/$extra");
    exit;
}

function login_user($posted, $stored){
    if (md5($posted["password"])==$stored->{"password"}){
        $_SESSION["logged"] = true;
        $_SESSION['userdata'] = $stored;
        header("Location: http://{$_SERVER['HTTP_HOST']}/");
        exit;
    }
    else{
        $host  = $_SERVER['HTTP_HOST'];
        $extra = 'messages/wrongLoginOrPassword.php';
        header("Location: http://$host/$extra");
        exit;
    }
}