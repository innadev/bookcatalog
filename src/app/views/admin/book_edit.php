<? tmpl_block( 'admin_top') ?>

<script>
    $(document).ready(function() {
        $('.js-genre-select').select2({
            ajax: {
                url: 'http://localhost:8081/admin/ajax.php',
                data: function (params) {
                    var query = {
                        search: params.term,
                        method: "genre"
                    };

                    return query;
                }
            }
        });
        $('.js-author-select').select2({
            ajax: {
                url: 'http://localhost:8081/admin/ajax.php',
                data: function (params) {
                    var query = {
                        search: params.term,
                        method: "author"
                    };

                    return query;
                }
            }
        });
    });
</script>

    <?if ($errors): ?>
        <?foreach ($errors as $error): ?>
            <b style="color: red"><?= htmlspecialchars($error) ?></b> <br>
        <?endforeach;?>
    <?endif;?>

    <form method="post"
          action=""<? route_admin('index', $_GET['action']) ?>"
          class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-6">
                Название книги
                <input type="text" name="title" value="<?= safe_out($book, 'title') ?>"
                       class="form-item" autofocus required>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Автор
                <select class="js-author-select form-item" name="author[]" multiple="multiple">
                    <? if (isset($book['id'])): ?>
                        <? foreach ($book_authors[$book['id']] as $author): ?>
                            <option value="<?=htmlspecialchars($author['id'])?>" selected="selected"><?=htmlspecialchars($author['name'])?></option>
                        <? endforeach; ?>
                    <? endif; ?>
                </select>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Жанр
                <select class="js-genre-select form-item" name="genre[]" multiple="multiple">
                    <? if (isset($book['id'])): ?>
                        <? foreach ($book_genres[$book['id']] as $genre): ?>
                            <option value="<?=htmlspecialchars($genre['id'])?>" selected="selected"><?=htmlspecialchars($genre['name'])?></option>
                        <? endforeach; ?>
                    <? endif; ?>
                </select>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Описание
                <textarea name="description" class="form-item" rows="3"
                          required><?= safe_out($book, 'description') ?>
    </textarea>
            </label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-6">
                Цена
                <input type="number" name="price" value="<?= safe_out($book, 'price') ?>"
                       class="form-item" required>
            </label>
        </div>
        <div class="col-md-6">


            <a href="<? route_admin('index') ?>" class="btn btn-primary" role="button">Назад</a>

            <input type="submit" value="Сохранить" class="btn btn-primary">

        </div>

    </form>

<? tmpl_block( 'admin_bottom') ?>