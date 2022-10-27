<!DOCTYPE html>
<!-- lab4-switch.php -->
<html>
<head>
	<meta charset="utf-8">
	<title>ЛР-4. Конструкция switch-case</title>
</head>
<body>
<h2>Лабораторная работа №4. Switch-case<h2/>
<h3>Выполнил: Жыргалбек уулу Кутманали, студент группы ПОВ(б)-2-19(р).<h3/>

<form>
Ваша фамилия:<input type="text" name="fio" disabled
value="<?php echo $_POST['fio'];?>" size="25"><br><br>
Ваш оценка=<input type="text" name="ball" disabled
value="<?php echo $_POST['ball'];?>" size="5"><br><br>
<button><a href="index.php">Очистка</a></button>
</form>	

<?php // Файлдын аты: ects.php
echo "<br>ОЦЕНКА ЗНАНИЙ ПО СИСТЕМЕ ECTS <br><br>";
$fio=$_POST['fio']; // Студенттин фамилиясы
$ball=$_POST['ball']; // Студенттин топтогон баллы
echo "Фамилия студента : ".$fio."<br>";
echo "Набранный вами балл: ".$ball."<br>";
if($ball!='A' and $ball!='a' and $ball!='B' and $ball!='b' and $ball!='C' and $ball!='c' and $ball!='D' and $ball!='d' and $ball!='E' and $ball!='e' and $ball!='FX' and $ball!='fx' and $ball!='F' and $ball!='f')
{
	echo "Набранная вами оценка неверная!<br>";
	echo "Введите данные заново!<br>";
}
else{
switch($ball)
{
case $ball=='A' or $ball=='a':
	{echo "Оценка знаний по системе ECTS: A <br>
		  Трациционная оценка: Отлично<br>";} break;
case $ball=='B' or $ball=='b':
	{echo "Оценка знаний по системе ECTS: В <br>
		  Трациционная оценка: Хорошо<br>";} break;
case $ball=='C' or $ball=='c':
	{echo "Оценка знаний по системе ECTSа: С <br>
		  Трациционная оценка: Хорошо<br>";} break;
case $ball=='D' or $ball=='d':
	{echo "Оценка знаний по системе ECTS: D <br>
		  Трациционная Удовлетворительно: Отлично<br>";} break;
case $ball=='E' or $ball=='e':
	{echo "Оценка знаний по системе ECTS: E <br>
		  Трациционная оценка: Удовлетворительно<br>";} break;
case $ball=='FX' or $ball=='fx':
	{echo "Оценка знаний по системе ECTS: FX <br>
		  Трациционная оценка: Не удовлетворительно";} break;
case $ball=='F' or $ball=='f':
	{echo "Оценка знаний по системе ECTS: F <br>
		  Трациционная оценка: Не удовлетворительно";} break;
}
}
?>
</body>
</html>