<?php

$folder = $_GET['folder'];

$mask = "*Android*";
$files = glob("" . $folder.'/' . $mask);

foreach ($files as $file) {
   $file_name = basename($file,substr($mask,1));
   $name = explode ("-", $file_name);
   echo  $name[0].",";
   

}

?>