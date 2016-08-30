<?php
//----------Task 8
echo "<h3> Task 8:</h3>";
echo "<p> Через foreach:</p>";		
$arr=array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $e){
	echo $e;
}
echo "<p> Через while:</p>";
$arr=array (1, 2, 3, 4, 5, 6, 7, 8, 9);
$index=0;
while ($index<count($arr)){
	echo $arr[$index];
	$index++;
}	
echo "<p> Через for:</p>";	
$arr=array (1, 2, 3, 4, 5, 6, 7, 8, 9);
for($index=0; $index<9; $index++){
	echo $arr[$index];
}

?>