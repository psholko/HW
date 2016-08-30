<?php
//----------Task 17
echo "<h3> Task 17:</h3>";
	$arr=array ("Jun", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$month=$arr[7];
	foreach ($arr as $value){
		if($value==$month){
			echo "&nbsp;<strong>".$value."</strong>";
	}
	else {echo "&nbsp;".$value;}
	}
?>