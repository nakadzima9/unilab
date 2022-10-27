<!DOCTYPE html>
<!-- lab4-switch.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-5. Цикл while</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Лабораторная работа №5. Цикл while<h2/>
<h3>Выполнил: Жыргалбек уулу Кутманали, студент группы ПОВ(б)-2-19(р).<h3/>

<form>
	Начальная сумма: A=<input type="number" name="A" disabled value="<?php echo $_POST['A']; ?>"><br>
	Ожидаемая сумма: S=<input type="number" name="S" disabled value="<?php echo $_POST['S']; ?>"><br>
	Проценттик ставка: p=<input type="number" name="p" disabled value="<?php echo $_POST['p']; ?>"><br>
	<p><a href="index.php">Очистка</a></p>
</form>	

<?php // Файлдын аты: ects.php
	
	$A=$_POST['A']; // Начальная сумма
	$S=$_POST['S']; // Ожидаемая сумма
	$p=$_POST['p']; // Процентная ставка
	$n=0;
	
	if($A==NULL and $S==NULL and $p==NULL)
	{
		echo "Введите данные A, S и p!<br>"; 
		
		end; 
	}
	
	elseif($A==NULL and $S==NULL)
	{
		echo "Введите значение А и S!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	elseif($A==NULL and $p==NULL)
	{
		echo "Введите значение А и p!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	elseif($S==NULL and $p==NULL)
	{
		echo "Введите значение S и p!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	elseif($S==NULL)
	{
		echo "Введите значение S!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	
	elseif($p==NULL)
	{
		echo "Набранный вами балл не верно!<br>
		     Введите данные p!";
		echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
		end;
	}
	
	
	else{
	echo "<br>Кредитный калькулятор <br><br>";
		if($A>=$S)
			{
				echo "Начальная сумма не должна быть больше<br>
		     	Введите заново!";
				echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
				end;
			}
		elseif($A<=0)
			{
				echo "Начальная сумма не должна быть меньше нуля<br>
		     	Введите заново!";
				echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
				end;
			}
		elseif($S<=0)
			{
				echo "Конечная сумма не должна быть меньше нуля<br>
		     	Введите заново!";
				echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
				end;
			}
		elseif($p<0 and 0>$p)
			{
				echo "Начальная сумма не должна быть меньше нуля<br>
		     	Введите заново!";
				echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
				end;
			}
		else{
		
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
		}
	}
?>
</div>
</body>
</html>