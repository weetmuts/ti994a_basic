<?php
// Copyright Fredrik Ohrstrom 2012 oehrstroem@gmail.com
// Licensed to you under the GNU Affero GPLv3 
// http://www.gnu.org/licenses/agpl-3.0.html

$source = $_REQUEST["source"];
$source = preg_replace('/<\s*\/\s*textarea\s*>/i','',$source);
$source = preg_replace('/<\s*textarea\s*>/i','',$source);
$source = preg_replace('/\\\\"/i','"',$source);

header('Content-type: text/html; charset=utf8');

$indexhtml = file_get_contents("index.html");
$indexhtml = preg_replace('/\d\d\d REM.*\n/','',$indexhtml);
$indexhtml = preg_replace('/\d\d\d PRIN.*\n/','',$indexhtml);
$indexhtml = preg_replace('/<\/textarea>/',$source."\n</textarea>",$indexhtml);

echo $indexhtml;

?>
