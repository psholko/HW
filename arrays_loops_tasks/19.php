<?php
//----------Task 19	
echo "<h3> Task 19:</h3>";
$arr=array ("Sun", "Mon", "Tues", "Wed", "Thuers", "Fri", "Sat");
$day=$arr[3];
foreach ($arr as $value){
		if($value==$day){
			echo "&nbsp;<i>".$value."</i>";
	}
	else {echo "&nbsp;".$value;}
	}
?>