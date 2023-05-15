<?php
$str = "A man, a plan, a canal: Panama";
$str = strtolower($str);
$str = preg_replace("/[^a-z]/", '', $str);

$str_rev = strrev($str);

if($str == $str_rev){
    echo "true";
}else{
    echo "false";
}