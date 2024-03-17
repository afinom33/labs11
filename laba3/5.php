<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<?php
	$name = array("Саша", "Маша", "Ваня", "Аня", "Костя");
    $name[] = "Вова";
    $name[] = "Лена";
    echo $name[0];
    echo "<br/>";
    echo $name[3];
    echo "<br/>";
    echo $name[5];
    echo "<br/>";
    echo $name[6];
    echo "<br/>";
    print_r($name);

    echo "<br/>";
    echo "<br/>";
    $web = array(1=>'HTML', 2=>'CSS', 3=>'JavaScript', 4=>'PHP', 5=>'MySQL');
    echo $web[1]."<br/>";
    echo $web[2]."<br/>";
    echo $web[4]."<br/>";
    print_r($web);

    $capital = array(
        "Russia" => "Москва",
        "USA" => "Вашингтон",
        "France" => "Париж",
        "Ukraine" => "Киев",
        "Italy" => "Рим"
    );
    echo "<br/>";
    echo "<br/>";
    echo " Столица России - $capital[Russia]";
    echo "<br/>";
    print_r($capital);
    echo "<br/>";

    $fruits = array("яблоко", "груша", "слива", "персик");
    echo "Размер массива $fruits равен " . count($fruits) . ".<br>";
    echo "Последний элемент массива $fruits '" . $fruits[count($fruits) - 1] . "'.<br>";

    echo "<br/>";
    $fruits = array("Яблоко", "груша", "слива", "персик");
    echo "Размер массива \$фрукты равен " . count($fruits) . ".<br>";
    echo "Последний элемент массива \$фрукты " . $fruits[count($fruits) - 1] . ".<br>";
    echo "<br/>";
    echo "Исходный массив:<br/>";
    print_r($fruits);

    unset($fruits["2"]); //удаляем элемент 2
    echo "<br/>";
    echo "<br/>";
    echo "Массив с удаленным элементом: <br/>";
    print_r($fruits);

    //результат удаления
    echo "Слива<br/>";

    $fruits[] = "апельсин"; //добавляем элемент апельсин (в конец списка)
    echo "<br/>";
    echo "<br/>";
    echo "Массив с добаленным элементом: <br/>";
    print_r($fruits); //результат добавления
    echo "<br/>";

    echo "TASK";
    echo "<br/>";
    $fruits[2] = "мандарин";
    print_r($fruits);
    echo "<br/>";
    unset($fruits[4]);
    print_r($fruits);
    echo "<br/>";
    $fruits[] = "лимон";
    print_r($fruits);
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    $arr[0][0] = "Овощи";
    $arr[0][1] = "Фрукты";
    $arr[1][0] = "Абрикос";
    $arr[1][1] = "Апельсин";
    $arr[1][2] = "Банан";
    $arr[2][0] = "Огурец";
    $arr[2][1] = "Помидор";
    $arr[2][2] = "Тыква";

    echo "<br/>";
    echo "Двумерный индексированный массив :<br/>";
    print_r($arr);
    echo "<br/>";
    // Выводим элементы массива (овощи и фрукты):
    echo "<h3>" . $arr[0][0] . "</h3>";
    for ($q = 0; $q <= 2; $q++) {
        echo $arr[2][$q] . "<br>";
    }
    echo "<h3>" . $arr[0][1] . "</h3>";
    for ($w = 0; $w <= 2; $w++) {
        echo $arr[1][$w] . "<br>";
    }
    echo "<br>";
    $arr = array(
        array('Вася', 'слесарь', 2500),
        array('Миша', 'строитель', 3000),
        array('Андрей', 'mooеp', 2700)
    );
    
    echo "<br/>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo ' | ' . $arr[$i][$j];
        }
        echo '<br />';
    }
    echo "<br/>";

    $products = array( "drinks"=> array( "milk", "water", "cola" ), "fruits"=> array( "apple", "orange", "cherry" ) ); 
    echo "Многомерный массив :<br/>"; print_r($products); 
    echo "<br/>";
?>
    <table border="1"> 
        <tr> 
            <th>Имя</th> 
            <th>Профессия</th> 
            <th>Зарплата</th> 
        </tr> 
        <?php $arr = array( array('Вася', 'слесарь', 2500), array('Миша', 'строитель', 3000), array('Андрей', 'mooeп', 2700) ); 
        foreach($arr as $item) { echo "<tr>"; echo "<td>" . $item[0] . "</td>"; echo "<td>" . $item[1] . "</td>"; echo "<td>" . $item[2] . "</td>"; echo "</tr>"; } ?> 
    </table>
</body>
</html>

