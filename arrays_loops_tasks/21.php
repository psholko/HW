<?php
//----------Task 21	
echo "<h3> Task 21:</h3>";
$k = '';
$j = 0;
	for ($i = 1; $i <= 9; $i++){
		while($j < $i)
			{ $j++;
			$k .= $i;
			}
		echo $k.'<br>';
		$j = 0;
		$k = '';
	}
echo "<h4>ИЛИ</h4>";
	for ($i = 1; $i <= 9; $i++){
		for ($j = 0; $j < $i; $j++){
			$k .= $i;
		}
		echo $k.'<br>';
		$k = '';
		$j = 0;
	}
?>