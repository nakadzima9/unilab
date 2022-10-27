<!DOCTYPE html>
<!--lab3-form.php-->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-3. Работа с формой</title>
</head>
<body style="background-color:blue;">
<h2>Лабораторная работа №3.<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19<h3/>
<h2>PHP: Условная конструкция if-else.</h2>
<h3>Задача 1. Найдите максимальное из двух заданных чисел:<br>
	Заданные числа:</h3>
	
<form method="POST">
a=<input type="number" name="a" 
value="" size="5"><br><br>
b=<input type="number" name="b" size="5"
value=""><br><br>
c=<input type="number" name="c" size="5"
value=""><br><br>
<input type="submit" name="submit" value="Отправить">
<input type="reset" name="reset" value="Очистка">
</form>	

<?php 
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	
	echo 'a='.$a.'<br>';
	echo 'b='.$b.'<br>';
	echo 'c='.$c.'<br><br>';
	
    echo '<b>Вывод результатов: </b>';
	if($a==NULL or $b==NULL or $c==NULL){
		echo '<b>одно из значений пусто </b><br>';
	}	
	else if($b < $a and $a > $c)
	{
		$max=$a;
		echo 'max='.$max.'<br>';
	}
	else if($a < $b and $b > $c)
	{
		$max=$b;
		echo 'max='.$max.'<br>';
	}
	else if($b < $c and $c > $a)
	{
		$max=$c;
		echo 'max='.$max.'<br>';
	}
	else
	{
		$max=$a;
		echo 'Заданные числа равны:  a=b=c='.$max.'<br>';
	}
	
?>
<!--<?php echo $_POST['b'];?>-->	
</body>
</html>
