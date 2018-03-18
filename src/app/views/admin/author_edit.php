<? tmpl_block( 'admin_top') ?>
    <form method="post" action="<? route_admin('author', $_GET['action']) ?>" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-6">
                Имя автора
                <input type="text"
                       name="title"
                       value="<?= safe_out($author, 'name') ?>"
                       class="form-item" autofocus required>
            </label>
        </div>
        <div class="col-md-6">
            <a href="<?= route_admin('admin') ?>" class="btn btn-primary" role="button">Назад</a>
            <input type="submit" value="Сохранить" class="btn btn-primary">
        </div>
    </form>
<? tmpl_block( 'admin_bottom') ?>