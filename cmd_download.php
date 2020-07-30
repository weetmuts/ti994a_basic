<?php
// Copyright Fredrik Ohrstrom 2012 oehrstroem@gmail.com
// Licensed to you under the GNU Affero GPLv3 
// http://www.gnu.org/licenses/agpl-3.0.html

include 'basic.php';

// Get the program text.
$programtext = "\n".$_REQUEST["programtext"];

// Should we verify (syntax check) or compile.
$vod = $_REQUEST["vod"];

// Should we debug?
$debug = $_REQUEST["debug"];

header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="basic.bin"');

if ($debug == "true") {
    $debug = true;
}
compile($programtext,$vod,$debug,$hexify);

?>
