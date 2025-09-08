<?php
$a=0;
$b=1;
echo $a." ".$b;
        $i=1;
        while($i<=10){
          $temp =$a+$b;
          $a=$b;
          $b=$temp;
          echo $b." ";
          $i++;
        }
?>