<?php

 defined('ISHOP') or die('Access denied');

 function print_arr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
 }
function pagination($page, $pages_count){
   if($_SERVER['QUERY_STRING']){
      foreach($_GET as $key => $value){
         if($key != 'page') $uri .= "{$key}={$value}&amp;";
      }
   }
   $back = '';
   $forward = '';
   $startpage = '';
   $page2left = '';
   $page1left = '';
   $page2right = '';
   $page1right = '';

   if($page > 1){
      $back = "<a class ='nav_link' href='?{$uri}page=" .($page-1). "'>&lt;</a>";
   }
   if($page < $pages_count){
      $forward = "<a class ='nav_link' href='?{$uri}page=" .($page+1). "'>&gt;</a>";
   }
   if($page > 3){
      $startpage = "<a class ='nav_link' href='?{$uri}page=1'>В начало</a>";
   }
   if($page < ($pages_count - 2)){
      $endpage = "<a class ='nav_link' href='?{$uri}page={$pages_count}'>В конец</a>";   
   }
   if($page - 2 > 0){
      $page2left = "<a class ='nav_link' href='?{$uri}page=" .($page-2). "'>" .($page-2). "</a>";
   }
   if($page - 1 > 0){
      $page1left = "<a class ='nav_link' href='?{$uri}page=" .($page-1). "'>" .($page-1). "</a>";
   }
   if($page + 2 <= $pages_count){
      $page2right = "<a class ='nav_link' href='?{$uri}page=" .($page+2). "'>" .($page+2). "</a>";
   }
   if($page + 1 <= $pages_count){
      $page1right = "<a class ='nav_link' href='?{$uri}page=" .($page+1). "'>" .($page+1). "</a>";
   }

   echo '<div class="pagination">' .$startpage.$back.$page2left.$page1left.'<a class="nav_active">'.$page.'</a>'.$page1right.$page2right.$forward.$endpage. '</div>';
 }