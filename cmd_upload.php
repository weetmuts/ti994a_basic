<?php
// Copyright Fredrik Ohrstrom 2012 oehrstroem@gmail.com
// Licensed to you under the GNU Affero GPLv3 
// http://www.gnu.org/licenses/agpl-3.0.html

include 'basic.php';

$tifile=$_FILES["userfile"]["name"];
$was_upload=is_uploaded_file($_FILES["userfile"]["tmp_name"]);

// Should we debug the upload by adding token boundaries and debug info?
$debug = $_REQUEST["debug"];

header('Content-type: text/plain; charset=us-ascii');

if ($tifile && $was_upload)
{
  // Get the original name of the file from the clients machine
  $filename = stripslashes($_FILES["userfile"]["name"]);
  $size=filesize($_FILES["userfile"]["tmp_name"]);

  if ($size > (64*1024))
  {
     echo 'ERROR Maximum file size is 64KiB!';
     exit();
  }

  $rawdatastring = file_get_contents($_FILES["userfile"]["tmp_name"]);
  $source = listBasicProgram($rawdatastring,$debug);
  echo $source;
}

?>
