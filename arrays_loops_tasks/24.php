<?php
//----------Task 24	
echo "<h3> Task 24:</h3>";
$numbers = 3553441319863; // наше число в котором будем искать вхождения
$num = 3; // ищем число 3
$arr = str_split($numbers);
$count = 0; // количество вхождений
foreach ($arr as $key=>$value){
	if ($value==$num){
	$count++;
}}
echo $count;
?>