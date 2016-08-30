<?php


//----------Task 6
echo "<h3> Task 6:</h3>";
$arr = array("green"=>"зеленый", "red"=>"красный", "blue"=>"голубой");
foreach ($arr as $key=>$value ){
	$en[]=$key;
	$ru[]=$value;
}
print_r($en);
echo "<br>";
print_r($ru);
?>