<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 14.03.2019
 * Time: 10:51
 */
session_start();
session_destroy();
//session_abort();
header("Location: http://{$_SERVER['HTTP_HOST']}/");
exit;