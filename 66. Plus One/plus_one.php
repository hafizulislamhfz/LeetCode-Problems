<?php
// $digits = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];
// print_r(str_split(intval(implode('', $digits))+1));
// die();
// this solution didn't  work for some case
// final solution
$digits = [9];
print_r(str_split(bcadd(1,implode($digits))));
?>