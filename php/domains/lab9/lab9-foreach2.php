<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ЛР 9. 2 вариант. Конструкция foreach</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<center>
<h2>ЛИ №9. 2 вариант. Конструкция foreach() и array()<h2/>
<h2>Создание массива с помощью функции array()<h2/>
<h3>Выполнил: Козубаев Маматазим ,студент группы АС(Б)1-19<h3/>
<hr size="10" color="green"><br>
<div class="container1">

<?php // Сотрудники организации
	
	$a["Шаматова Айжана"] = "16";
	$a["Мусаев Темир"] = "35";
	$a["Болотов Мурат"] = "46";
	$a["Алиева Миргул"] = "34";
	$a["Алиев Максат"] = "38";
	$a["Иванов Сергей"] = "40";
	$i=1;			
	foreach($a as $key => $value)
	{
		echo "<table cellspacing='0' width='300px'>				 
				 <tr>
				 <td width='18px'>$i</td>
				 <td width='210px'>$key</td>
				 <td width='30px'>$value</td>			 
				 </tr>
			  </table>";
		$i++;
	}
?>
</div>
</center>
</div>
</body>
</html>
