<?php
$arr = [2,3,6,4,5];
$search = 6;
     foreach($arr as $keys=>$values){
          if($search == $values){
        echo "The Search value is ".$values." and Index position is ".$keys;
          }
     }

?>