<?php defined('ISHOP') or die('Access denied'); ?>
<div class="catalog-index">
				<h1> Новинки </h1>
				<?php if($eyestoppers): ?>
    <?php foreach($eyestoppers as $eyestopper): ?>
    <div class="product-index">
		<h2><a href="?view=product&goods_id=<?=$eyestopper['goods_id']?>">
			<?=$eyestopper['name']?></a></h2>
		<a href="?view=product&goods_id=<?=$eyestopper['goods_id']?>">
			<img src="<?=PRODUCTIMG?><?=$eyestopper['img']?>" alt="" /></a>
		<p>Цена :  <span><?=$eyestopper['price']?>.</span></p>
		<a href="?view=addtocart&goods_id=<?=$eyestopper['goods_id']?>">
			<img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-index.jpg" 
			alt="Добавить в корзину" /></a>
	</div>
    <?php endforeach; ?>
    <?php else: ?>
    <p style="padding: 20px; font-size: 18px;text-align: center;">Новых моделей пока нет!</p>
	<?php endif; ?>	
				
</div> 
