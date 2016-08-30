<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task 23</title>
</head>
<body>
<?php
//----------Task 23	
echo "<h3> Task 23:</h3>";
if(isset($_POST['Submit']) and isset($_POST['textfield'])){
$var = $_POST['textfield'];
if(preg_match("/^[0-9]+$/",$var ))
{$arr = str_split($var);
echo 'Сума введеных вами цифр = '.array_sum($arr);
}
else{echo "Неверный формат числа! <br/> Можно использовать только цифры";}
}
echo '
<form id="form1" name="form1" method="post">
<input type="text" name="textfield" />
<input type="submit" name="Submit" value="Submit" />
</form>';
?></body>
</html>

