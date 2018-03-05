<? include_once 'block/front_top.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
        <?php foreach ($books as $b): ?>
            <div class="book-item">
                <h3>
                    <a href="book.php?id=<?= (int) $b['id'] ?>"><?= htmlspecialchars($b['title']) ?></a>
                </h3><br>
                <em>Жанр: <?= htmlspecialchars($b['genre']) ?></em><br>
                <em>Автор: <?= htmlspecialchars($b['author']) ?></em><br>
                <p>Описание книги: <?= htmlspecialchars(books_intro($b['description'])) ?></p><br>
            </div>
        <?php endforeach ?>
    </div>
        <div class="col-md-3">
            Ganre:
            <div>
                <?php foreach ($genres as $genre): ?>
                    <ul>
                        <li>
                            <a href="/?filter[genre]=<?=htmlspecialchars($genre)?>">
                                <?=ucfirst(htmlspecialchars($genre))?>
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
                            <a href="/?filter[author]=<?=htmlspecialchars($author)?>">
                                <?=ucfirst(htmlspecialchars($author))?>
                            </a>
                        </li>
                    </ul>
                <?php endforeach ?>
            </div>
            <a href="/" class="btn btn-primary">Show all</a>
        </div>
    </div>
</div>

<? include_once 'block/front_bottom.php' ?>