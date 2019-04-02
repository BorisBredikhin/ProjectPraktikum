<?php
require_once "config.php";
$pageName = "Рейтинг пользователей";
//echo ROOT_DIR;
include ROOT_DIR."/admin/header.php";
?>
<h3><?=$pageName;?></h3>
<?php
    include "admin/data/calculateRating.php"
?>
<?php
include ROOT_DIR."/admin/footer.php";
?>