<? tmpl_block( 'admin_top') ?>
    <div>
        <div class="container">
            <a href="<?= route_admin('author', 'add') ?>" class=" btn btn-primary">Добавить автора</a>
        </div>
        <br>
        <h5><b>Авторы</b></h5>
        <table class="admin-table table">
            <?php foreach ($authors as $a): ?>
                <tr>
                    <th><?= safe_out($a, 'name') ?></th>
                    <th>
                        <a href="<?= route_admin('author', 'edit', $a['id']) ?>">Редактировать</a>
                    </th>
                    <th>
                        <a href="<?= route_admin('author', 'delete', $a['id']) ?>">Удалить</a>
                    </th>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
<? tmpl_block( 'admin_bottom') ?>