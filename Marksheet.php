<?php
$markes =49;
if($markes>=90 && $markes <=100){
    echo "<h2>Superab</h2>";
}else if($markes>=80 && $markes <90){
   echo "<h2>Excellent</h2>";
}elseif($markes>=70 && $markes <80){
       echo "<h2>Good</h2>";
}elseif($markes>=50 && $markes <70){
       echo "<h2>Average</h2>";
}else{
    echo "<h2>Fail</h2>";
}


   
?>