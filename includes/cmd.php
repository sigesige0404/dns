<?php
/* $Id: cmd.php 16 2012-08-28 16:06:05Z taira $ */
require("config.inc.php");


$tpl_path = $base_path . "/includes/templates";

require("functions.inc.php");
require("adodb/adodb.inc.php");
require("adodb/adodb-errorhandler.inc.php");
require("smarty/Smarty.class.php");

$tpl = new Smarty;
$tpl->template_dir = $base_path . '/templates/';
$tpl->compile_dir = $base_path . '/compiled_templates/';
$tpl->cache_dir = $base_path . '/include/cache/';
$tpl->left_delimiter = "<{";
$tpl->right_delimiter = "}>";
$tpl->assign('base_url', $base_url);

$db = NewADOConnection('mysql');
$db->Connect($db_host, $db_user, $db_pass, $db_name);

require("classes/dns.inc.php");

$dns = new DNS($db, $zone_path, $conf_file, $tpl_path);
$dns->dns1 = $dns1;
$dns->dns2 = $dns2;
$dns->dnshostmaster = $dnshostmaster;

?>
