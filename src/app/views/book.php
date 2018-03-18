<? include_once 'block/front_top.php' ?>
	
	<div>	
		<div class = "book-item">
			<h3><?=htmlspecialchars($book['title'])?></h3><br>
			<em>Автор:
                <?foreach ($book_authors[$book['id']] as $author):?>
                    <?=safe_out($author, 'name')?>,
                <?endforeach;?>
            </em><br>
			<em>Жанр:
                <?foreach ($book_genres[$book['id']] as $genre):?>
                    <?=safe_out($genre, 'name')?>,
                <?endforeach;?>
            </em><br><br>
			<p>Описание:<br> <?=htmlspecialchars($book['description'])?></p><br>
			<em>Цена: <?=$book['price']?></em>
		</div>
		
	</div>
	<div>
		<a href="index.php" class="btn btn-primary" role="button">Назад</a>
		<a href="buy.php?<?=isset($_GET['id']) ? 'id=' . (int)$_GET['id'] : ''?>" class="btn btn-primary" role="button">Купить</a>
	</div>

<? include_once 'block/front_bottom.php' ?>