<?php
//----------Task 18
echo "<h3> Task 18:</h3>";
$arr=array ("Sun","Mon", "Tues", "Wed", "Thuers", "Fri", "Sat");
	foreach ($arr as $key=>$value){
		if($key==0 or $key==6 ){
		echo "&nbsp;<strong>" .$value."</strong>";}
		else {echo "&nbsp;".$value;}
	}
?>