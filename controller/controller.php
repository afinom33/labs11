<?php

defined('ISHOP') or die('Access denied');

// подключение модели
require_once MODEL;

// подключение библиотеки функций
require_once 'functions/functions.php';

// получение массива каталога
$cat = catalog();

// получение массива информеров
$informers = informer();

// получение динамичной части шаблона #content
$view = empty($_GET['view']) ? 'hits' : $_GET['view'];

switch($view){
    case('hits'):
        // лидеры продаж
        $eyestoppers = eyestopper('hits');

        $perpage = 12;
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }

        $count_rows = count_rows('hits');
        $pages_count = ceil($count_rows / $perpage);
        if(!$pages_count) $pages_count = 1;
        if($page > $pages_count) $page = $pages_count;
        $start_pos = ($page - 1) * $perpage;

        $eyestoppers = eyestopper('hits', $start_pos, $perpage);

     break;
    
    case('new'):
        // новинки
        $eyestoppers = eyestopper('new');

        $perpage = 12;
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }

        $count_rows = count_rows('new');
        $pages_count = ceil($count_rows / $perpage);
        if(!$pages_count) $pages_count = 1;
        if($page > $pages_count) $page = $pages_count;
        $start_pos = ($page - 1) * $perpage;

        $eyestoppers = eyestopper('new', $start_pos, $perpage);

    break;
    
    case('sale'):
        // распродажа
        $eyestoppers = eyestopper('sale');

        $perpage = 12;
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }

        $count_rows = count_rows('sale');
        $pages_count = ceil($count_rows / $perpage);
        if(!$pages_count) $pages_count = 1;
        if($page > $pages_count) $page = $pages_count;
        $start_pos = ($page - 1) * $perpage;

        $eyestoppers = eyestopper('sale', $start_pos, $perpage);

    break;
	
	case('cat'):
        // товары категории
        $category = abs((int)$_GET['category']);
        

        $perpage = 12;
        if(isset($_GET['page'])){
            $page = (int)$_GET['page'];
            if($page < 1) $page = 1;
        }else{
            $page = 1;
        }

        $count_rows = count_rows($category);
        $pages_count = ceil($count_rows / $perpage);
        if(!$pages_count) $pages_count = 1;
        if($page > $pages_count) $page = $pages_count;
        $start_pos = ($page - 1) * $perpage;

        $products = products($category, $start_pos, $perpage); // получаем массив из модели
    break;
	
    default:
        // если из адресной строки получено имя несуществующего вида
        $view = 'hits';
        $eyestoppers = eyestopper('hits');
 }

// подключени вида
require_once TEMPLATE.'index.php';