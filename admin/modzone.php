<?php
/* $Id: modrecord.php 27 2012-08-28 21:37:51Z taira $ */
include("../includes/globals.php");
$session->isAdmin();
if(!empty($_REQUEST['domainid'])) {
    switch($_REQUEST['act']) {
        case 'del':
            $domainid = $db->quote($_REQUEST['domainid']);
            $domain = $db->getOne("SELECT domain FROM domains WHERE domainid = $domainid");
            $dns->removeZone($domain);
            $message = "$domain のドメインは、削除されました。\n";
            header("Location: index.php?msg=" . urlencode($message));
        break;
        case 'edit':
            $info = $dns->zoneInfo($_GET['domainid']);
            $tpl->assign('password', $info['password']);
            $tpl->assign('domain', $info['domain']);
            $tpl->display('admin/editzone.htm');
        break;
        case 'update':
            $dns->updateZonePass($_POST['domainid'], $_POST['password']);
            $message = "パスワード変更しました\n";
            header("Location: index.php?msg=" . urlencode($message));
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
