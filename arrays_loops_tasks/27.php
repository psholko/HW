<?php
//----------Task 27	
echo "<h3> Task 27:</h3>";
$rows=rand(2,10);
$cols=rand(2,10);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$c=count($colors)-1;
echo '<table border="1">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $numb=rand();
        $i=$colors[rand(0,$c)];
        echo "<td style='background-color:{$i}'>".$numb.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>