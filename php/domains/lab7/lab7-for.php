<!DOCTYPE html>
<!-- lab7-for.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-7. Цикл For</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<center>
<h2>Лабораторная работа №7. Цикл For<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
</center>
<hr size="10" color="green">

<?php 
	
	$a=$_POST['a']; // Первое число
	$b=$_POST['b']; // Второе числа
	$n=$_POST['n']; // Степень числа	
	if($a==NULL and $b==NULL and $n==NULL){
		echo 'Введите значения a, b и n:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($a==NULL and $b==NULL ){
		echo 'Введите значения a и b:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($b==NULL and $n==NULL){
		echo 'Введите значения  b и n:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($a==NULL and $n==NULL){
		echo 'Введите значения  a и n:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($a==NULL){
		echo 'Введите значения  a:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($b==NULL){
		echo 'Введите значения  b:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($n==NULL){
		echo 'Введите значения  n:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	elseif($a>=$b){
		echo 'а не должен быть больше б:';end;
		echo '<p><a href="index.php">Переход на главную страницу</a></p>';
	}
	else{
		echo '<br>Решение задачи. ';
		echo ' Возведение числа в степень '.$n.', лежащих в cегменте ['.$a.', '.$b.']:';
		$j=1;
		for($i=$a;$i<=$b;$i++)
			{
				$c=POW($i,$n); // 
				echo "<br>$j-итерация: (".$i.")<sup>".$n."</sup>=".$c;
				$j=$j+1;
			}
		echo '<p><center><a href="index.php">Переход на главную страницу</a></center></p>';
	}	
?>

</div>
</body>
</html>
