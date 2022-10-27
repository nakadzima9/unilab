<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ЛР 9. 3 вариант. Конструкция foreach </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>ЛР №9. 3 вариант. Конструкция foreach() и array()<h2/>
<h2>Создание массива с помощью функции array()<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19<h3/>
<hr size="10" color="green">
<h3>Тригонометрические функции</h3>
<div class="container1">
<?php
	$m = array('1'=>sinx, '2'=>cosx, '3'=>tgx, '4'=>ctgx);
	foreach ($m as $x=>$y)
	{	// $key өзгөрмөсүндө массивдин индекстери жазылат. 
		// $value өзгөрмөсүндө массивдин элементтери жазылат.
		echo 'f['.$x.'] = '.$y.'<br>';
	}
?>
</div>
</center>
</div>
</body>
</html>
