<!DOCTYPE html>
<!--lab2-if-else.php-->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-2. Конструкция if-else</title>
</head>
<body>
<h2>Лабораторная работа №2.<h2/>
<h3>Выполнил: Батырбеков Эрлис, студент группы АС(б) 1-19.<h3/>
<hr size="3" color="blue">
<?php 
	echo '<h2>PHP: Условная конструкция if-else.</h2>';
	echo '<h3>Задача 1. Найдите максимальное из двух заданных чисел:</h3>';
	
	echo 'Заданные числа:<br>';
	$a=51;
	$b=51;
	echo 'a='.$a.'<br>';
	echo 'b='.$b.'<br><br>';
	
    echo '<b>Вывод результатов: </b>';	
	if($a>$b)
	{
		$max=$a;
		echo 'max='.$max.'<br>';
	}
	else if($a<$b)
		{
			$max=$b;
			echo 'max= '.$max.'<br>';
		}
	else
		{
			$max=$a;
			echo 'Заданные числа равны между собой:  a=b='.$max.'<br>';
		}
?>	
	
</body>
</html>
