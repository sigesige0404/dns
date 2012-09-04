<?php
/* $Id: modrecord.php 27 2012-08-28 21:37:51Z taira $ */
include("includes/globals.php");
$session->isAuth();
$domain = $_SESSION['valid_user'];
if($_REQUEST['act'] == 'edit') {
    $info = $dns->zoneInfo($_SESSION['domainid']);
    $tpl->assign('ip', $info['address']);
    $tpl->display('editip.htm');
}
elseif($_REQUEST['act'] == 'update') {
    if(!$dns->updateIP($_SESSION['domainid'], $_REQUEST['address'])) {
        $message = $dns->error;
        header("Location: index.php?failed=1msg=" . urlencode($message));
    }
    else {
        $message = "IP変更しました。設定反映まで時間がかかりますので、お待ち下さい\n";
        header("Location: index.php?msg=" . urlencode($message));
    }
}
else {
    header("Location: index.php");
}

?>
