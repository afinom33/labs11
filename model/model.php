<?php

defined('ISHOP') or die('Access denied');

// модель

/*===Каталог - получение массива===*/
 function catalog(){
 $link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
 $query = "SELECT * FROM `brands` ORDER BY `parent_id`, `brand_name`";
 $res = mysqli_query($link, $query) or die(mysqli_error());
  
  // массив категорий
   $cat = array();
    while($row = mysqli_fetch_assoc($res)){
	  if(!$row['parent_id']){
		$cat[$row['brand_id']][] = $row['brand_name'];  
	  } else {
			$cat[$row['parent_id']]['sub'][$row['brand_id']] = $row['brand_name']; 
			 }
	} //конец оператора цикла while
  return $cat;
  } //конец функции catalog
  /*===Каталог - получение массива===*/
 
  /* ===Информеры - получение массива=== */
function informer(){
	$link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
    $query = "SELECT * FROM links
                INNER JOIN informers ON
                    links.parent_informer = informers.informer_id
                        ORDER BY informer_position, links_position";
    $res = mysqli_query($link,$query) or die(mysqli_query());
	
	$informers = array();
    $name = ''; // флаг имени информера
	while($row = mysqli_fetch_assoc($res)){
        if($row['informer_name'] != $name){ 
		    // если такого информера в массиве еще нет
            $informers[$row['informer_id']][] = $row['informer_name']; 
			// добавляем информер в массив
            $name = $row['informer_name'];
        }
        $informers[$row['parent_informer']]['sub'][$row['link_id']] = $row['link_name']; 
		// заносим страницы в информер
    }
    return $informers;
    }
/* ===Информеры - получение массива=== */