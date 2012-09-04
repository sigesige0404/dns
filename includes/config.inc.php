<?php
/* $Id: config.inc.php.dist 27 2012-08-28 15:32:52Z taira $ */

$db_host = "localhost";
$db_user = "root";
$db_pass = "tair@0404";
$db_name = "dns";


$base_url = "http://192.168.100.105/dns";
$base_path = "/var/www/html/dns";
$zone_path = "/var/named";
$conf_file = "/etc/named.conf";
$site_name = "DNS";

$dns1 = 'ns1.idxdc.ne.jp.';
$dns2 = 'ns2.idxdc.ne.jp.';
$dnshostmaster = 'root.idxdc.ne.jp.';

$offline_mode = false;

?>
