<?php
$unit =300;
$amount;
    if($unit<=100){
      $amount = $unit*5;
    }elseif($unit<=200){
        $amount = 100*5+($unit-100)*10;

    }elseif($unit<=300){
        $amount = 100*5+100*10+($unit-200)*15;
    }
    echo "You are used electricity unit is".$unit." and paid bill RS.".$amount
?>