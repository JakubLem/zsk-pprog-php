<?php

// funkcja date

echo 'rok - miesiąc - dzień', date('Y-m-d');
echo '<br>';
echo date('d-M-Y');
echo '<br>';
echo date('G:i:s');
echo '<br>';
echo date('H:i:s');
echo '<br>';
echo date('H:i:sa'); // AM / PM
echo '<br>';
echo date('d-m-Y H:i:sa'); 
echo '<br>';
echo date('w');
echo '<hr>';

// funkcja getdate

$date = getdate();
print_r($date);

/*
Array ( [seconds] => 53 [minutes] => 56 [hours] => 11 [mday] 
=> 16 [wday] => 1 [mon] => 11 [year] => 2020 [yday] => 320 
[weekday] => Monday [month] => November [0] => 1605524213 ) Dzień roku: 320

*/ 


echo "Dzień roku: $date[yday]";
echo '<br>';
echo '<hr>';
echo date('d'),' ',$date['month'],' ',$date['year'],',  ',date('G:i:s'),'  | ',$date['weekday'];
echo '<hr>';
// 


?>
