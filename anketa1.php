<!DOCTYPE html>
<html>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<body>
<div class="container">
<div class="top">Данные анкеты получены</div>
<header class="clearfix">
<h2>Welcome!!!!<br>
<?php echo $_POST["fname"]." ".$_POST["surname"]; ?><br>
Будем рады видеть Вас <br>на выставке робототехники <br>

Дата вашего заезда -<?php echo $_POST["date"]?>

</header>
</body>
</html>
