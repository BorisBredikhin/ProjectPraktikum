<?php
require_once "config.php";
$tId = $_GET["tId"];
$pageName = "";
include ROOT_DIR . "/admin/header.php";
?>
<?php
$t = $GLOBALS["theory"]->{"data"}[$tId]->{"title"};?>
<script>
    document.title+=" <?=$t?>";
</script>
<iframe   src="<?=$GLOBALS["theory"]->{"data"}[$tId]->{"address"}?>" class="theory-frame" id="theory">

</iframe>
<?php
include ROOT_DIR . "/admin/footer.php";
?>