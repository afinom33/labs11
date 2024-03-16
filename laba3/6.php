<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Метод GET</title>
</head>
<body>
<?php
    $a = $_GET['a'];
	echo"Переменная а равна $a <br/>";
    $b = $_GET['b'];
	echo"Переменная b равна $b <br/>";
    $c = $a + $b;
	echo"Сумма переменных a и b равна ".$c." <br/>";

    echo"<a href='6.php?a=25&b=22'>Новые значения a=25 и b=22</a><br/>";
    echo"<a href='6.php?a=42&b=55'>Новые значения a=42 и b=55</a><br/>";
?>
</body>
</html>

