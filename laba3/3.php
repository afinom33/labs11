<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Цикл while</title>
</head>
<body>
<?php
	$a = 0;
    while ($a <= 10)
    {echo "$a<br/>"; $a = $a + 1;}

    $sum = 0;
    $i = 1;
    while ($i <= 100)
    {$sum += $i; $i++;}
    echo "Сумма чисел от 1 до 10 равна $sum<br/>";

    $summa = 0;
    $j =0;
    do
    {$j++; $summa += $j;}
    while ( $j < 1000);
    echo "Сумма чисел от 1 до 1000 равна  $summa<br/>";
?>
</body>
</html>

