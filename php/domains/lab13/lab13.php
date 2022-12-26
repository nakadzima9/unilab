<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form  method="POST">
Login: <input type="text" name="login" value="<?php echo $_POST['login']; ?>
 "> <br><br>
E-mail: <input type="text" name="email" value="<?php echo $_POST['email'];?>"> <br>
	<input type="submit" value="Жѳнѳтүү">
</form>
<?php 
// Суперглобалдык $_ POST массиви менен кабыл алынган 
// маанилерди чыгарабыз: 
echo "Login = ".$_POST['login']; 
echo "<br/> E-mail = ".$_POST['email'];
?>
</body>
</html>