<?php
$str = 'VII';
$roman = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000,
    'v' => 4,
    'x' => 9,
    'l' => 40,
    'c' => 90,
    'd' => 400,
    'm' => 900
];

$special = [
    'IV' => 'v',
    'IX' => 'x',
    'XL' => 'l',
    'XC' => 'c',
    'CD' => 'd',
    'CM' => 'm',
];

foreach ($special as $k => $v) {
    $str = str_replace($k, $v, $str);
}

$str = str_split($str);
$num = 0;
foreach($str as $s){
    $num += $roman[$s];
}
print_r($num);

?>