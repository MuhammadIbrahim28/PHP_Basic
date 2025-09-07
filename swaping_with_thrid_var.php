<?php
$a=10;
$b=20;
$c;
echo "Before Value of a :".$a." Value of b :".$b;
echo "<br/>";
$c=$a;
$a=$b;
$b=$c;
echo "After Value of a :".$a." Value of b :".$b;

?>