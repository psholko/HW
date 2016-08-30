<?php
//----------Task 13
echo "<h3> Task 13:</h3>";
$arr=array (1,2,3,4,5,6,7,8,9,10);
foreach($arr as $a){
	foreach ($arr as $b){
		echo $a.'x'.$b.'='.$a*$b.'<br>';
	}}
?>