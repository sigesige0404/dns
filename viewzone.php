<?php
/* $Id: viewzone.php 15 2012-08-28 16:04:31Z taira $ */
include("includes/globals.php");
$session->isAuth();

$zone = $dns->writeZone($_SESSION['valid_user'], true);
print "<pre>";
print $zone;
print "</pre>";

?>
