<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Уроки по PHP</title>
</head>
<body>
<?php
	$name = 'Alex';
    $age = 25;
    echo $age;
    echo "<br /> 1) Моего друга зовут $name, ему $age лет.";
    echo "<br /> 2) Моего друга зовут", $name, "ему ", $age, " лет.";

    $n = 10;
    $c = $age + $n;
    echo "<br /> Александру через $n лет будет $c лет. <br/>";
    echo "<br /> Александру через $n лет будет ($age + $n) лет. <br/>";
    echo "<br /> Александру через", $n, "лет будет ", $age+$n, " лет. <br/>";

    echo "$name работает в ООО \"Эверест\".";
    echo "<p align='center'> Автомобиль</p>";

    echo "Арифметические операции:<br />";
    $d = $age - $n;
    $e = $age * $n;
    $f = $age / $n;

    echo "Из $age вычесть $n равно $d <br/>";
    echo "$age умножить на $n  равно $e <br/>";
    echo "$age разделить на $n равно $f <br/>";

    echo "<br/> Операции конкатенации (присоединения, пристыковки): <br/>";
    $g = $age.$n;
    echo "К $age пристыкована $n: $g <br/>";
    $h = $name.$age;
    echo "К $name пристыкована $age: $h <br/>"; 
?>
</body>
</html>

