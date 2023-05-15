<?php
$num = -12321;
$num = strval($num);
$num_rev = strrev($num);
if($num == $num_rev){
    echo "true";
}else{
    echo "false";
}
