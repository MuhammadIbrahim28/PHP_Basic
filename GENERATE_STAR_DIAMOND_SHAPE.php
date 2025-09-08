<?php
for($i=1; $i<=3; $i++){
    for($j=3; $j>=$i; $j--){
       echo "&nbsp&nbsp";
    }
    for($k=1; $k<=$i*2-1; $k++){
        echo "*";
    
    }
    echo "<br/>";
}
for($i=1; $i<=2; $i++){
    for($j=1; $j<=$i; $j++){
       echo "&nbsp&nbsp&nbsp";
    }
    for($k=3; $k>=$i*2-1; $k--){
        echo "*";
    }
    echo "<br/>";
}
?>