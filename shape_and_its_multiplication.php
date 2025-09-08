<?php
 $temp =1;
for($i=1; $i<=5; $i++){
    for($k=1; $k<=$i; $k++){
        $temp *= $k;
        echo $k;
    }
    echo "="."$temp"."<br/>";
  $temp =1;
}
?>