<? tmpl_block( 'admin_top') ?>
    <div>
        <div class="container">
            <a href="<?= route_admin('genre', 'add') ?>" class=" btn btn-primary">Добавить жанр</a>
        </div>
        <br>
        <h5><b>Авторы</b></h5>
        <table class="admin-table table">
            <?php foreach ($genres as $a): ?>
                <tr>
                    <th><?= safe_out($a, 'name') ?></th>
                    <th>
                        <a href="<?= route_admin('genre', 'edit', $a['id']) ?>">Редактировать</a>
                    </th>
                    <th>
                        <a href="<?= route_admin('genre', 'delete', $a['id']) ?>">Удалить</a>
                    </th>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
<? tmpl_block( 'admin_bottom') ?>