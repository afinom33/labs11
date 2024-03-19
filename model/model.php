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

 /* ===Айстопперы - новинки, лидеры продаж, распродажа=== */
function eyestopper($eyestopper){
    $link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
	$query = "SELECT goods_id, name, img, price FROM goods
                WHERE visible='1' AND $eyestopper='1'";
    $res = mysqli_query($link,$query) or die(mysqli_error());
    
    $eyestoppers = array();
    while($row = mysqli_fetch_assoc($res)){
        $eyestoppers[] = $row;
    }
    return $eyestoppers;
}
/* ===Айстопперы - новинки, лидеры продаж, распродажа=== */ 

function count_rows($category) {
    $link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
    $query = "(SELECT COUNT(goods_id) as count_rows
               FROM goods
               WHERE goods_brandid = $category AND visible='1')
              UNION
              (SELECT COUNT(goods_id) as count_rows
               FROM goods
               WHERE goods_brandid IN 
                 (SELECT brand_id FROM brands WHERE parent_id = $category AND visible='1'))";
    $res = mysqli_query($link, $query) or die(mysqli_error());
    
    while($row = mysqli_fetch_assoc($res)) {
        if($row['count_rows']) $count_rows = $row['count_rows'];
    }
    
    return $count_rows;
}
 /* ===Получение массива товаров по категории=== */
	function products($category, $start_pos, $perpage){
	$link = mysqli_connect(HOST, USER, PASS, DB) or die('No connect to Server');
    $query = "(SELECT goods_id, name, img, description, price, hits, new, sale
                 FROM goods WHERE goods_brandid = $category AND visible='1')
        UNION  (SELECT goods_id, name, img, description, price, hits, new, sale FROM goods
           WHERE goods_brandid IN ( SELECT brand_id FROM brands WHERE parent_id = $category) 
		   AND visible='1') LIMIT $start_pos, $perpage";
    $res = mysqli_query($link,$query) or die(mysqli_error());
    
    $products = array();
    while($row = mysqli_fetch_assoc($res)){
        $products[] = $row;
    }
	return $products;
	}
/* ===Получение массива товаров по категории=== */ 