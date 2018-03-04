<? include_once 'block/front_top.php' ?>
	
	<div>	
		<div class = "book-item">
			<h3><?=$book['title']?></h3><br>
			<em>Автор: <?=$book['author']?> </em><br>
			<em>Жанр: <?=$book['genre']?> </em><br><br>
			<p>Описание:<br> <?=$book['description']?></p><br>
			<em>Цена: <?=$book['price']?></em>
		</div>
		
	</div>
	<div>
		<a href="index.php" class="btn btn-primary" role="button">Назад</a>
		<a href="buy.php?<?=isset($_GET['id']) ? 'id=' . (int)$_GET['id'] : ''?>" class="btn btn-primary" role="button">Купить</a>
	</div>

<? include_once 'block/front_bottom.php' ?>