<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Цикл foreach</title>
</head>
<body>
<?php
	$my_arr = array(1, 2, 3, 4, 5);
    foreach ($my_arr as $value) {
        echo $value, " ";
    }
<<<<<<< HEAD

?>
    <br/ ><br/ >
=======
?>
<br/> <br/>
>>>>>>> 55450a303224c5b153d0d12f1fd819fd91093d9f
<?php
    $capitals["Россия"] = "Москва";
    $capitals["Украина"] = "Киев";
    $capitals["Беларусь"] = "Минск";
<<<<<<< HEAD
    $capitals["Казахстан"] = "Москва";

=======
    $capitals["Казахстан"] = "Астана";
    
>>>>>>> 55450a303224c5b153d0d12f1fd819fd91093d9f
    foreach ($capitals as $value) {
        echo "$value <br/ >";
    }
?>
<<<<<<< HEAD

=======
<br/> <br/>
>>>>>>> 55450a303224c5b153d0d12f1fd819fd91093d9f
<?php
    $capitals["Россия"] = "Москва";
    $capitals["Украина"] = "Киев";
    $capitals["Беларусь"] = "Минск";
<<<<<<< HEAD
    $capitals["Казахстан"] = "Москва";

    foreach ($capitals as $key => $value) {
        echo "<p>$value - $key</p>";
    }
?>
<?php
$aa = array (
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17,
);
foreach ($aa as $k => $v){
    print "\$aa[$k] = $v <br/ >";
}
?>
<br/ >
<?php
$d = array();
$d[0][0] = "Иван";
$d[0][1] = "Федор";
$d[1][0] = "Степан";
$d[1][1] = "Ульяна";

foreach ($d as $v1 => $item){
    foreach ($item as $v2 => $name) {
        echo "\$d[$v1][$v2] = $name </p>";
=======
    $capitals["Казахстан"] = "Астана";
    
    foreach ($capitals as $key => $value) {
        echo "<p>$value - $key </p>";
    }
?>
<br/> <br/>
<?php
$aa = array(
    "one"   => 1,
    "two"   => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($aa as $k => $v) {
    print "\$aa[$k] = $v <br/>";
}
?>

<br/>
<?php
$d = array();
$d[0][0] = "Иван";
$d[0][1] = "Фёдор";
$d[1][0] = "Степан";
$d[1][1] = "Ульяна";

foreach ($d as $v1 => $item) {
    foreach ($item as $v2 => $name) {
        echo "\$d [$v1] [$v2] = $name </p>";
>>>>>>> 55450a303224c5b153d0d12f1fd819fd91093d9f
    }
}
?>
</body>
</html>

