<!DOCTYPE html>
<!-- 8.3. Простой массив -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-8.3. Простой массив</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>Лабораторная работа №8.3. Определение массива квадратными скобками<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
</center>
<hr size="10" color="green"><br>
<div class="container1">
<?php // Одно мерный простой массив (3 способ)
$j=1;
$fam=['Асанов','Эрмекова','Алиев','Иванов','Ивановa'];
// Вывод массива
for($i=0;$i<count($fam);$i++){
	echo "$j. ".$fam[$i]."<br>";
	$j++;
}	
/*echo '1. '.$fam[0]."<br>";
echo '2. '.$fam[1]."<br>";
echo '3. '.$fam[2]."<br>";
echo '4. '.$fam[3]."<br>";
echo '5. '.$fam[4]."<br>";*/
?>
</div>
</body>
</html>
