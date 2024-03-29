<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
	<div class="kroshka">
		<a href="#">Мобильные телефоны</a> / <a href="#">LG</a> / <span>Слайдеры</span>
	</div> <!-- .kroshka -->
    <div class="vid-sort">
		Вид: 
			<a href="#" id="grid" class="grid_list"><img src="<?=TEMPLATE?>images/vid-tabl.gif" alt="табличный вид" /></a> 
			<a href="#" id="list" class="grid_list"><img src="<?=TEMPLATE?>images/vid-line.gif" alt="табличный вид" /></a>  
			&nbsp;&nbsp;           
		Сортировать по:&nbsp;    
			<a href="#" class="sort-top-act">цене</a>  &nbsp;|&nbsp;     
			<a href="#" class="sort-top">названию</a>  &nbsp;|&nbsp;     
			<a href="#" class="sort-bot">дате добавления</a>
	</div> <!-- .vid-sort -->
	<?php if($products): // если получены товары категории ?>
	<?php foreach($products as $product): ?>
	
	<?php if(!isset($_COOKIE['display']) OR $_COOKIE['display'] == 'grid'): // если вид - сетка ?>	
	
<!-- Табличный вид продуктов -->	
 <div class="product-table">
	<h2><a href="?view=product&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
	<div class="product-table-img">
		<a href="?view=product&goods_id=<?=$product['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" width="64" /></a>
		<div> <!-- Иконки -->
            <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-cat-lider.png" alt="лидеры продаж" title="лидеры продаж"/>'; ?>
            <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-cat-new.png" alt="новинка" title="новинка"/>'; ?>
            <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-cat-sale.png" alt="распродажа" title="распродажа"/>'; ?>							
		</div> <!-- Иконки -->
	</div>
	<p class="cat-table-more"><a href="?view=product&goods_id=<?=$product['goods_id']?>">подробнее...</a></p>
	<p>Цена :  <span><?=$product['price']?></span></p>
	<a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><img class="addtocard-index" 
	src="<?=TEMPLATE?>images/addcard-table.jpg" alt="Добавить в корзину" /></a>
</div>  <!-- .product-table -->
<!-- Табличный вид продуктов -->	

	<?php else: // если линейный вид ?>
	
	<!-- Линейный вид продуктов -->
 <div class="product-line">					
	<div class="product-line-img">
		<a href="?view=product&goods_id=<?=$product['goods_id']?>">	<img src="<?=PRODUCTIMG?><?=$product['img']?>" alt="" /></a>
	</div>
	<div class="product-line-price">
		<p>Цена:  <span><?=$product['price']?></span>.</p>
		<a href="?view=addtocart&goods_id=<?=$product['goods_id']?>">
		<img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-table.jpg" alt="Добавить в корзину" /></a>
		<div> 
            <?php if($product['hits']) echo '<img src="' .TEMPLATE. 'images/ico-line-lider.jpg" alt="лидеры продаж" title="лидеры продаж"/>'; ?>
            <?php if($product['new']) echo '<img src="' .TEMPLATE. 'images/ico-line-new.jpg" alt="новинка" title="новинка"/>'; ?>
            <?php if($product['sale']) echo '<img src="' .TEMPLATE. 'images/ico-line-sale.jpg" alt="распродажа" title="распродажа"/>'; ?>							
		</div> 
		<p class="cat-line-more">
		<a href="?view=addtocart&goods_id=<?=$product['goods_id']?>">подробнее...</a></p>
	</div>	
	<div class="product-line-opis">
		<h2><a href="?view=addtocart&goods_id=<?=$product['goods_id']?>"><?=$product['name']?></a></h2>
		<p><?=$product['description']?></p>
	</div>	
</div> 
	<!-- Линейный вид продуктов -->	
	<?php endif; // конец условия переключателя видов  ?>
	<?php endforeach; // конец цикла вывода товаров ?>
	<div class="clr"></div>
	<?php if($pages_count > 1) pagination($page, $pages_count); ?>
	<?php else: // если товаров нет ?>
    <p>Здесь товаров пока нет!</p>
	<?php endif; // конец условия наличия товаров?>			
</div> <!-- .catalog-index -->

