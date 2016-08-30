<?php
//----------Task 26	
echo "<h3> Task 26:</h3>";

$arr = array();
$b = rand(5, 15); // рендомное определение количества ячеек массива
for ($k = 0; $k <= $b; $k++){ //заполняем рендомно массив
  $arr[$k] = rand(0, 100);
}
print_r($arr);
$maxCount = count($arr); // считаем количество ячеек в массиве

$j = 1;
for($i=0; $i < $maxCount; $i=$i+2) {
    if($arr[$i] > 0) {
	    $j = $j * $arr[$i];
    }
}
echo "Произведение парных чисел:". $j ."<br>";
echo "Не парные элементы: ";
for($i=1; $i < $maxCount; $i=$i+2) {
	if($arr[$i] > 0){
		echo $arr[$i]." ";
	}
}
?>