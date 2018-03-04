<? include_once 'block/admin_top.php' ?>

    <form method="post"
          action="index.php?action=<?= $_GET['action'] ?><?= isset($_GET['id']) ? '&id=' . (int)$_GET['id'] : '' ?>"
          class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-6">
                Название книги
                <input type="text" name="title" value="<?= isset($book['title']) ? $book['title'] : '' ?>"
                       class="form-item" autofocus required>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Автор
                <input type="text" name="author" value="<?= isset($book['author']) ? $book['author'] : '' ?>"
                       class="form-item form-control" required>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Жанр
                <input type="text" name="genre" value="<?= isset($book['genre']) ? $book['genre'] : '' ?>"
                       class="form-item" required>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Описание
                <textarea name="description" class="form-item" rows="3"
                          required><?= isset($book['description']) ? $book['description'] : '' ?>
    </textarea>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Цена
                <input type="text" name="price" value="<?= isset($book['price']) ? $book['price'] : '' ?>"
                       class="form-item" required>
            </label>
        </div>
        <div class="col-md-6">


            <a href="index.php" class="btn btn-primary" role="button">Назад</a>

            <input type="submit" value="Сохранить" class="btn btn-primary">

        </div>

    </form>

<? include_once 'block/admin_bottom.php' ?>