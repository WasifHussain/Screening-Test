<?php
$str = "hello how are you";
$strArray = count_chars($str,1);

foreach ($strArray as $key=>$value)
   {
   echo chr($key). ":".$value.", ";
   }
?>
