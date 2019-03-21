<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14.03.2019
 * Time: 10:51
 */

include_once "config.php";
//include_once "admin/header.php";
include ROOT_DIR."/admin/saveUserData.module";

session_start();
//var_dump($_SESSION);
save_user_data();

//$userId = substr($_SESSION["userdata"]->{"email"}, 0, strpos($_SESSION["userdata"]->{"email"}, '@'));
//
//$userFileName=$userId.".json";
//$path = ROOT_DIR."/admin/data/users/";
//
//$file = fopen($path.$userFileName, 'w');
//
//$userJSON = json_encode($_SESSION["userdata"]);
//
//fwrite($file, $userJSON);
//fclose($file);


session_destroy();
session_abort();
header("Location: http://{$_SERVER['HTTP_HOST']}/");
exit;
