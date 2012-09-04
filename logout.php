<?php
/* $Id: logout.php 32 2012-08-28 19:17:23Z taira $ */
include("includes/globals.php");
$session->isAuth();
$session->destroy();
?>
