<?php
/* $Id: logout.php 15 2012-08-28 16:04:31Z taira $ */
include("../includes/globals.php");
$session->isAdmin();
$session->destroy();
?>
