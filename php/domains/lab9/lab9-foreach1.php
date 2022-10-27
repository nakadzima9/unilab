<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ЛР 9. 1 вариант. Конструкция foreach</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>ЛИ №9. 1 вариант. Конструкция foreach() и array()<h2/>
<h2>Создание массива с помощью функции array()<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19 <h3/>
<hr size="10" color="green">
</center>
<div class="container1">
<?php
	// Создание ассоциативного массива $a :
	$a = array(
				"1"=>"Асанов А.", 
				"2"=>"Алиева Т.", 
				"3"=>"Умаров М.", 
				"4"=>"Эргешов Ш.",
				"5"=>"Эргешова Т."				
			   );
	foreach ($a as $key=>$value)
	{
		// $key - индекс массива 
		// $value - элемент массива
		echo $key.'. '.$value.'<br>';
	}
?>
</div>
</div>
</body>
</html>
