<?php
$arr =array(3,6,5,4,7,1);
$mix=$arr[0];
    foreach($arr as $value){
           if($value>$mix){
             $mix = $value;
           }
    }
    echo " Mix value of array : ".$mix."<br/>";
    $min = $arr[0];
    foreach($arr as $values){
        if($values < $min){
           $min = $values;
        }
    }
    echo " Min value of array : ".$min;
?>