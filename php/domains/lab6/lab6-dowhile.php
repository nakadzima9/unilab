<!DOCTYPE html>
<!-- lab6-dowhile.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-6. Цикл do-while</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Лабораторная работа №6. Цикл do-while<h2/>
<h3>Выполнил: Жыргалбек уулу Кутманали, студент группы ПОВ(б)-2-19(р).<h3/>
<hr size="10" color="green"><br>
Задача 1. Используя цикл do-while, найдите факториал числа<br>:
<form>
	N=<input type="number" name="n" disabled
	value="<?php echo $_POST['n']; ?>" size="10" ><br>
</form>	
	<!-- PHP код -->
<?php
	$N=$_POST['n'];
	
	if($N==NULL){
		echo "<br>Вы забыли ввести данные!<br>";
		echo "Введите данные заново"; end;
	}
	elseif($N<0){
		echo "<br>Для отрицательных чисел факториал не определен!<br>";
		echo "Для n введите натуральные значения!"; end;
	}
	else{
	$i=1; $n=1; $S=1;
	echo "<br>";
	do{
		echo $i.'-итерация: n='.$n.', факториал чисел: '.$S.'<br>';
		$S1=$S;
		$i=$i+1;
		$n=$n+1;
		$S=$S*$n;
	}
	while($n<=$N);

	echo "<br>Ответ: Факториал чисел от 1 до $N равна: S=".$S1.'<br>';
	
	}
	echo "<h3><a href='index.php'>Переход на главную страницу</a></h3>";
?>
</div>
</body>
</html>