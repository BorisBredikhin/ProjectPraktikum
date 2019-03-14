<?php
require_once "config.php";
$tId = 0;//$_GET["tId"];
$pageName = $GLOBALS["theory"]->{"data"}[$tId]->{"title"};
include ROOT_DIR . "/admin/header.php";
?>
<?php
/*var_dump($GLOBALS["sitedata"]);

foreach ($GLOBALS["sitedata"]->{"data"} as $value){
    var_dump($value);
}
*/?>
<iframe src="<?=$GLOBALS["theory"]->{"data"}[$tId]->{"address"}?>">

</iframe>
<?php
include ROOT_DIR . "/admin/footer.php";
?>