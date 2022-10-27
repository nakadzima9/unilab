<!DOCTYPE html>
<!-- 8.1. Простой массив 1 -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-8.1. Простой массив</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>Лабораторная работа №8.1. Присвоение значение каждому элементу массива<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
</center>
<hr size="10" color="green"><br>
<div class="container1">
<?php
	echo "Пример простого массива<br><br>";
	$fam[]="Алиева А.";
	$fam[]="Иванов С.";
	$fam[]="Алиев М.";
	$fam[]="Баратов Т.";
	$fam[]="Туратов Б.";
	$fam[]="Исанов А.";
	/* Вывод элементов массива */
	$j=1;
	for($i=0;$i<count($fam);$i++){
		echo "$j. ".$fam[$i]."<br>";
		$j++;
	}
?>
</div>
</div>
</body>
</html>
