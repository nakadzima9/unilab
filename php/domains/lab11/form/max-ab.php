<!DOCTYPE html>
<!--lab3-form max-ab.php-->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-3. Работа с формой</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<h2>Лабораторная работа №3.</h2>
	<h3>Выполнил: Батырбеков Эрлис, студент группы АС(б) 1-19.</h3>
	<h3>PHP: Условная конструкция if-else.</h3>
	<h3>Задача 1. Найдите максимальное из двух заданных чисел:<br></h3>
	<hr size="10" color="green">
	<h3>Решение задачи</h3>

	<form action="max-ab.php" method="POST">
		a=<input type="text" name="a" disabled value="<?php echo $_POST['a']; ?>"><br><br>
		b=<input type="text" name="b" disabled value="<?php echo $_POST['b']; ?>"><br>
	</form>	
<?php
	$a=$_POST['a'];
	$b=$_POST['b'];
	if($a=='' and $b==''){
		echo '<br>Введите значения a и b!<br>'; end;
		echo '<br><button><a href="index.php">Перейти на главную страницу!</a></button>';		
	}
	elseif($a==''){
		echo '<br>Введите значение a=<br>'; end;
		echo '<br><button><a href="index.php">Перейти на главную страницу!</a></button>';
	}
	elseif($b==''){
		echo '<br>Введите значение b=<br>'; end;
		echo '<br><button><a href="index.php">Перейти на главную страницу!</a></button>';
	}
	else{
	echo '<br>Выбраны следующие значения а и b:<br>';
	echo 'a='.$a.'<br>';
	echo 'b='.$b.'<br><br>';
	
	if($a>$b)
	{
		$max=$a;
		echo 'Максимальное из двух заданных чисел: max='.$max;
	}
	else if($a<$b)
		{
			$max=$b;
			echo 'Максимальное из двух заданных чисел: max='.$max;
		}
	else
		{
			$max=$a;
			echo 'Вывод результатов: <br>
			      Заданные числа равны:  a=b='.$max;
		}
	echo '<p>Задача решена верно!<br><br>
		 <button><a href="index.php">Перейти на главную страницу!</a></button></p>';
	}
?>
</div>
</body>
</html>
