<?php
//----------Task 14
echo "<h3> Task 14:</h3>";
$arr=array (4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $e){
	if($e==2 || $e==3 || $e==4){
		echo "Yes!";
		break;
	}
	else { 
		echo "No!";
		break;
	}
}
?>