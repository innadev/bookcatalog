<? include_once 'block/front_top.php' ?>

    <a href="/">Show all</a>
    <br>
    Ganre:
    <div>
        <?php foreach ($genres as $genre): ?>
            <ul>
                <li>
                    <a href="/?filter[genre]=<?=strip_tags($genre)?>">
                        <?=ucfirst(strip_tags($genre))?>
                    </a>
                </li>
            </ul>
        <?php endforeach ?>
    </div>

    Author:
    <div>
        <?php foreach ($authors as $author): ?>
            <ul>
                <li>
                    <a href="/?filter[author]=<?=strip_tags($author)?>">
                        <?=ucfirst(strip_tags($author))?>
                    </a>
                </li>
            </ul>
        <?php endforeach ?>
    </div>

    <div>
        <?php foreach ($books as $b): ?>
            <div class="book-item">
                <h3>
                    <a href="book.php?id=<?= $b['id'] ?>"><?= $b['title'] ?></a>
                </h3><br>
                <em>Жанр: <?= $b['genre'] ?></em><br>
                <em>Автор: <?= $b['author'] ?></em><br>
                <p>Описание книги: <?= books_intro($b['description']) ?></p><br>
            </div>
        <?php endforeach ?>
    </div>

<? include_once 'block/front_bottom.php' ?>