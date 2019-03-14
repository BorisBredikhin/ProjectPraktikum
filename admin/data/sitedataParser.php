<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 17.02.2019
 * Time: 9:36
 */

//require_once "../../config.php";

//echo ROOT_DIR."/admin/data/sitedata.json";

$file = file_get_contents(ROOT_DIR."/admin/data/sitedata.json");
$data = json_decode($file);
//var_dump($data);
$GLOBALS["sitedata"] = $data;

$file = file_get_contents(ROOT_DIR."/admin/data/theory.json");
$data = json_decode($file);
//var_dump($data);
$GLOBALS["theory"] = $data;