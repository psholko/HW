<?php


//----------Task 3
echo "<h3> Task 3:</h3>";
$nambers=array(26, 17, 136, 12, 79, 15);
$result=0;
foreach ($nambers as $key=>$value){
	$result=$result+pow($value, 2);
}
echo $result;
?>