<?php
for($i=1; $i<=6; $i++){
    for($j=6; $j>=$i; $j--){
       echo "&nbsp&nbsp";
    }
    for($k=1; $k<=$i*2-1; $k++){
        echo "*";
    
    }
    echo "<br/>";
}
?>