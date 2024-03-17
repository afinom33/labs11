<?php
defined('ISHOP') or die('Access denied');

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