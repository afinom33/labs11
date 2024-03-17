<?php 
defined('ISHOP') or die('Access denied');

// домен
define('PATH', 'http://ishop/');

// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEW', 'views/');

// активный шаблон
define('TEMPLATE', VIEW.'ishop/');

// папка с картинками контента
define('PRODUCTIMG', PATH.'userfiles/');


// сервер БД
define('HOST', 'localhost');

// пользователь
define('USER', 'ishop_user');

// пароль
define('PASS', '123');

// БД
define('DB', 'ishop');

// название магазина - title
define('TITLE', 'Интернет магазин сотовых телефонов');

$link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
mysqli_set_charset($link, 'UTF8') or die('Cant set charset');