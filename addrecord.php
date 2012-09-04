<?php
/* $Id: addrecord.php 32 2012-08-28 19:17:23Z taira $ */
include("includes/globals.php");
$session->isAuth();
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $tpl->assign('domain', $_SESSION['valid_user']);
    if(!$dns->addRecord($_POST['type'], $_SESSION['valid_user'], $_POST['name'], $_POST['address'])) {
        $message = $dns->error;
        header("Location: index.php?failed=1&msg=". urlencode($message));
    }
    else {
        $message = "レコード追加しました。反映まで時間がかかりますので、お待ち下さい。";
        header("Location: index.php?msg=". urlencode($message));
    }
}
else {
	$domain = $_SESSION['valid_user'];
	$tpl->assign('ip', $dns->zoneIp($domain));
	$tpl->assign('domain', $domain);
    $tpl->display("addrecord.htm");
}	

?>
