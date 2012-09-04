<?php
/* $Id: login.php 15 2012-08-28 16:04:31Z taira $ */
include("includes/globals.php");
if($session->isAuth()) {
    header("Location: index.php");
    exit;
}
if(!empty($_POST['domain']) && !empty($_POST['password'])) {
    $session->auth($_POST['domain'], $_POST['password']);
}
else{
    if($_GET['failed']) {
        print "<center><font color=\"red\"><b>ドメイン名が存在しない　または　パスワードが正しくありません</b></font>";
    }
    if($_GET['msg']) {
        print "<center><b><font color=\"red\">$msg</b></font>";
    }
    $tpl->display("login.htm");
}

?>
