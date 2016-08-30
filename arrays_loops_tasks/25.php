<?php
//----------Task 25	
echo "<h3> Task 25:</h3>";
$arr = array();
for ($k = 0; $k < 5; $k++){
  $arr[$k] = rand(0, 1000);
}

print_r ($arr); // Изначальный массив

$min = min($arr);
$max = max($arr);

foreach ($arr as $key=>$value){ // ищем и записываем ключ максимального значения
	if ($value==$max){
		$kmax=$key;
	}
}
foreach ($arr as $key=>$value){ // ищем и записываем ключ минимального значения
	if ($value==$min){
		$kmin=$key;
	}
}
$arr[$kmin]=$max; // меняем сестами значения
$arr[$kmax]=$min;
echo "<br>";
print_r($arr); // Измененный массив

echo "<br>Min: ".$min."<br>";
echo "Max: ".$max;
?>