<?php
$costs = array(2.5, 12.5, 10.5, 8.50, 3);

$iter = 0;
$summary = 0;
foreach ($_POST as $key => $value) {
    if($value != 0){
        $summary = $summary + $costs[$iter]*$value;
    }
    $iter = $iter + 1;
}

echo "Łączna cena zakupów wynosi: $summary";