<?php
$operator  = "x";
$num_1 = 10;
$num_2 =20;
$result =0;
switch($operator){
           case "+":
            $result = $num_1+$num_2;
            echo "Addition  of ".$num_1." and ".$num_2." result is  = ".$result;
            break;
            case "-":
            $result = $num_1-$num_2;
            echo "Subtrect  of :".$num_1." and ".$num_2." result is  = ".$result;
            break;
            case "x":
            $result = $num_1*$num_2;
            echo "Multiplication  of ".$num_1." and ".$num_2." result is  = ".$result;
            break;
            case "/":
            $result = $num_1/$num_2;
            echo "Divide  of ".$num_1."and ".$num_2." result is  = ".$result;
            break;
           default:
           echo "Operation is not match";

}
?>