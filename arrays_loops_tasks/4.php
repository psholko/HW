<?php

//----------Task 4
echo "<h3> Task 4:</h3>";
$color = array("green"=>"зеленый", "red"=>"красный", "blue"=>"голубой");
foreach ($color as  $key =>$value ){
	echo "$key<br>";
}
foreach ($color as $value ){
	echo "$value<br>";
}