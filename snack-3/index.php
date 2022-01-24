<?php 
    $numbers = [];
    while( count($number) < 15 ) {
        $randomNumber = rand(0, 100);
        if (!in_array($randomNumber, $number)) {
            $number[] = $randomNumber;
        }
    }
    var_dump($number);
?>