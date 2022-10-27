<!DOCTYPE html>
<!-- 8.4. Ассоциативный массив -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-8.4. Ассоциативный массив</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>Лабораторная работа №8.4. Присвоение значений каждому элементу массива<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
</center>
<hr size="10" color="green"><br>
<div class="container1">
	<form action="" method="POST">
		<input type="text" name="language" value="<?php echo $_POST['language'];?>">
	<input type="submit" name="search" value="Найти">
	<input type="reset" value="Очистить">
	<button value="<?php echo $_POST['show_all'];?>">Показать все</button>
</form>
	
<?php
$text=$_POST['language'];
$show=$_POST['show_all'];

$a['Англис']='26 букв';
$a['Орус']='33 букв';
$a['Кыргыз']='36 букв';
$a['Казах']='42 букв';
if($text=='Англис'){
	echo 'Англиский алфавит состоит из '.$a["Англис"].";<br>";
}
elseif($text=='Орус'){
	echo 'Русский алфавит состоит из '.$a["Орус"].";<br>";
}
elseif($text=='Кыргыз'){
	echo 'Кыргызский алфавит состоит из '.$a["Кыргыз"].";<br>";
}
elseif($text=='Казах'){
	echo 'Казахский алфавит состоит из '.$a["Казах"].";.<br>";
}
if($show=='Казах'){
	echo 'Казахский алфавит состоит из '.$a["Казах"].";.<br>";
}





?>
</div>
</body>
</html>
