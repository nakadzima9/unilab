<!DOCTYPE html>
<!-- 8.5. Ассоциативный массив 3 -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-8.5. Ассоциативный массив</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>Лабораторная работа №8.5. Создание ассоциативного массива функцией array()<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
</center>
<hr size="10" color="green"><br>
<div class="container1">
<?php
$a = array("Староста"=>"Асанов А.", "Зам. староста"=>"Иванов С.", "Профорг"=>"Айтиев М.", "Спорт сектор"=>"Исаева А.");
echo "1. Староста: " .$a["Староста"]." <br>";
echo "2. Зам. староста: ".$a["Зам. староста"]."<br>";
echo "3. Профорг: ".$a["Профорг"]."<br>";
echo "4. Спорт сектор: ".$a["Спорт сектор"]. "<br>";
?>
</div>
</div>
</body>
</html>
