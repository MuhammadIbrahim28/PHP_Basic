<?php
   $string = "civic";
    $length = strlen($string);
    $reverse = "";
    for($i=-1; isset($string[$i]); $i--){
        $reverse .= $string[$i];
       // echo $reverse;
    }
    if($string == $reverse){
      echo " It is palindrome String";
    }else{
        echo " It is not  palindrome String";
    }
    
?>