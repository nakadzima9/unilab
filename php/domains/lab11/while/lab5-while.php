<!DOCTYPE html>
<!-- lab4-switch.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-5. Цикл while</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h2>Лабораторная работа №5. Цикл while<h2/>
<h3>Выполнил: Батырбеков Эрлис, студент группы АС(б) 1-19.<h3/>

<form>
	Начальная сумма: A=<input type="number" name="A" disabled value="<?php echo $_POST['A']; ?>"><br>
	Ожидаемая сумма: S=<input type="number" name="S" disabled value="<?php echo $_POST['S']; ?>"><br>
	Проценттик ставка: p=<input type="number" name="p" disabled value="<?php echo $_POST['p']; ?>"><br>
	<p><a href="index.php">Очистка</a></p>
</form>	

<?php // Файлдын аты: ects.php
	echo "<br>Кредитный калькулятор <br><br>";
	$A=$_POST['A']; // Начальная сумма
	$S=$_POST['S']; // Ожидаемая сумма
	$p=$_POST['p']; // Процентная ставка
	$n=0;
	while($A<$S) 
	{
		$n=$n+1;
		$N=$A*$p/100; 	// Добавляемая сумма
		$A=$A+$N;  		// Накопленная сумма
		$A1=number_format($A,2,"."," ");
		$N1=number_format($N,2);
		echo " $n год:  Накопленная сумма: ".$A1." сом; "; 
		echo " Сумма, добавленная в конце года: ".$N1." сом;<br>";
	}
	echo "<br>Вы будете ждать $n лет!";
	echo '<p><a href="index.php">Переход на главную страницу</a></p>';
?>

</body>
</html>