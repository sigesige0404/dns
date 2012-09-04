<?php
/* $Id: addrecord.php 29 2012-08-28 21:47:53Z taira $ */
include("../includes/globals.php");
$session->isAdmin();
if($_POST['act'] == 'add') {
    if(!$dns->addZone($_POST['domain'], $_POST['ip'], $_POST['password'])) {
        $message = $dns->error;
         header("Location: index.php?failed=1&msg=". urlencode($message));
    }
    else {
        $message = "ゾーンを追加しました。設定反映まで時間がかかりますので、お待ち下さい。";
        header("Location: index.php?msg=". urlencode($message));
    }
}
else {
    $tpl->display("admin/addzone.htm");
}	

?>
