<?php
function get_href($item){
    $id = $item->{"id"};
    $type = $item->{"type"};
    switch ($type){
        case "theory":
            return ROOT_SERVER."/theory.php?tId=$id";
        case "question":
            return ROOT_SERVER."/question.php?qId=$id";
        default:
            break;
    }
    return "id: $id, type: $type";
}
//var_dump($GLOBALS["menu"]);
?>
<ul class="menu">
    <?php foreach ($GLOBALS["menu"]->{"data"} as $key => $list) { ?>
        <li>
        <?php
        if (gettype($list) == "object") {
            ?>
            <?= $key ?>
            <ul>
                <?php
                foreach ($list as $subkey => $item) {
                    ?>
                    <li><a href="<?= get_href($item); ?>"><?= $subkey; ?></a></li>
                    <?php
                }
                ?>
            </ul>
            </li>
        <?php } else {
            ?><a href='<?=ROOT_SERVER.'/'.$list;?>'><?=$key?></a><?
        }
    }?>
</ul>
