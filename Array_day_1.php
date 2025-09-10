<?php
//$arr = array(1,2,3,10=>10,"A");
//$arr = array(1,2,3,10=>10,"A","HIST","2"=>"Hidaya","50");
//$arr = array(1,2,3,10=>10,"A","Hidaya"=>"HIST","50");
//$arr = array(1,2,3,false=>"60","true");//012
//$arr = array(1,2,3,"60",true=>"null","10");//
//$arr = array(1,2,3,"60",null=>"Null","10");
//$arr = array(1,2,3,"60",null=>"Null","10",''=>"20");
// $arr = [1,20,30,40,-1=>"50",60];
//$arr = [-5=>"50",60,20,30,40];
//$arr = [-5=>"50",60,5=>20,30,40];
//$arr = ["hidaya"=>"50",60,5=>20,30,40];
//$arr = ["hidaya"=>"50",60,5=>20,true,40,"Hidaya","Trust"];
 $arr = [-10,true=>"null",40,"Hidaya","Trust"=>"null","empty",''=>'50'];
// echo $arr[true];
//echo $arr[''];
echo $arr[] = "Truest";
   $arr["Trust"] = "HIDAya";

echo "<pre>";
	 print_r($arr);
echo "</pre>";
?>