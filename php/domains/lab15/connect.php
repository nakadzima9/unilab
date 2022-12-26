<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php // C:\OSPanel\domains\labphp\lab15\connect.php 
	$host="localhost";
	$user="admin";
	$password="admin";
	$database="test";
$connect=mysqli_connect($host,$user,$password,$database);
if($connect==true)
{echo "Сервер менен байланыш орнотулду!<br>"; 
echo "База тандалды!<br>";
}
else {
	     echo "Сервер менен байланыш жок!<br>"; 
	     echo "База тандалбады!<br>";
}
?>

</body>
</html>