<?php
/* $Id: modrecord.php 27 2012-08-28 21:37:51Z taira $ */
include("includes/globals.php");
$session->isAuth();
$domain = $_SESSION['valid_user'];

if(!empty($_REQUEST['recordid']) && !empty($_REQUEST['type'])) {
    switch($_REQUEST['act']) {
        case 'del':
            if($dns->delRecord($domain, $_GET['recordid'], $_GET['type'])) {
                header("Location: index.php?msg=レコード削除しました。設定反映まで時間がかかります。しばらくお待ち下さい。");
            }
            else {
                header("Location: index.php?failed=1&msg=" . urlencode($dns->error));
            }
        break;
        case 'edit':
            $r = $dns->recordInfo($domain, $_GET['recordid'], $_GET['type']);
            $tpl->assign('ip', $r['address']);
            $tpl->assign('name', $r['name']);
            $tpl->display('editzone.htm');
            //header("Location: index.php?msg=Modified+Record");
        break;
        case 'update':
            if($dns->modRecord($domain, $_POST['recordid'], $_POST['address'], $_POST['type'])) {
                header("Location: index.php?msg=レコード変更しました。設定反映まで時間がかかります。しばらくお待ち下さい。");
            }
            else {
                header("Location: index.php?failed=1&msg=" . urlencode($dns->error));
            }
        break;
        default:
            header("Location: index.php?failed=1&msg=Invalid+Action");
        break;
    }
}
else {
    header("Location: index.php");
}
//$tpl->display("index.htm");

?>
