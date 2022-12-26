<!DOCTYPE html>
<!-- lab4-switch.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-4. Конструкция switch-case</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
	<h2>Лабораторная работа №4. Switch-case<h2/>
	<h3>Выполнил: Батырбеков Эрлис, студент группы АС(б) 1-19.<h3/>

	<form>
		Ваша фамилия:<input type="text" name="fio" disabled
		value="<?php echo $_POST['fio'];?>"><br><br>
		Ваш балл=<input type="number" name="ball" disabled
		value="<?php echo $_POST['ball'];?>"><br><br>
	</form>	

<?php // Файлдын аты: ects.php
	
	$fio=$_POST['fio']; // Фамилия студента 
	$ball=$_POST['ball']; // Балл студента
	if($fio=='' and $ball==NULL)
	{
		echo "Введите ФИО и балл!<br>"; 
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;
	}
	
	elseif($fio=='')
	{
		echo "Введите ФИО!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	elseif($ball==NULL)
	{
		echo "Введите балл!<br>";
		echo '<br><b><a href="index.php">Перейти на главную страницу!</a></b>';
		end;		
	}
	
	elseif($ball>100 or $ball<0)
	{
		echo "Набранный вами балл не верно!<br>
		     Введите данные от 0 до 100!";end;
		echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b><br>';
	}
	
	else{
		echo "<br>ОЦЕНКА ЗНАНИЙ ПО СИСТЕМЕ ECTS <br><br>";
		echo "Фамилия студента : ".$fio."<br>";
	    echo "Набранный вами балл: ".$ball."<br>";
	switch($ball)
	{
		case ($ball>=87 and $ball<=100):
			{echo "Оценка знаний по системе ECTS: A <br>
		    Оценка по 5 балльной системе: Отлично<br>";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
		case ($ball>=80 and $ball<=86):
			{echo "Оценка знаний по системе ECTS: В <br>
		    Оценка по 5 балльной системе: Хорошо<br>";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
		case ($ball>=74 and $ball<=79):
			{echo "Оценка знаний по системе ECTSа: С <br>
		    Оценка по 5 балльной системе: Хорошо<br>";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
		case ($ball>=68 and $ball<=73):
			{echo "Оценка знаний по системе ECTS: D <br>
		    Оценка по 5 балльной системе: Отлично<br>";}
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>'; 
			break;
		case ($ball>=61 and $ball<=67):
			{echo "Оценка знаний по системе ECTS: E <br>
		    Оценка по 5 балльной системе: Удовлетворительно<br>";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
		case ($ball>=31 and $ball<=60):
			{echo "ECTS системасы боюнча баа: FX <br>
		    Оценка по 5 балльной системе: Не удовлетворительно";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
		case ($ball>0 and $ball<=30):
			{echo "Оценка знаний по системе ECTS: F <br>
		    Оценка по 5 балльной системе: Не удовлетворительно";} 
			echo '<br><br><b><a href="index.php">Перейти на главную страницу!</a></b>';
			break;
	}	
	}
?>
</div>
</body>
</html>