<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 17.02.2019
 * Time: 9:36
 */

$file = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/admin/data/sitedata.json");

$data = json_decode($file);
$GLOBALS["sitedata"] = $data;