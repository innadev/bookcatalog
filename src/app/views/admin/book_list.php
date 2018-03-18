<? tmpl_block( 'admin_top') ?>
    <div class="container">
        <a href="<?= route_admin('index', 'add') ?>" class=" btn btn-primary">Добавить книгу</a>
        <a href="/index.php" class=" btn btn-primary">На главную</a>
    </div>

    <br>

    <div>
        <table class="admin-table table">
            <tr>
                <th>Название книги</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($books as $b): ?>
                <tr>
                    <th><?= htmlspecialchars($b['title']) ?></th>
                    <th>
                        <a href="<?= route_admin('index', 'edit', $b['id']) ?>">Редактировать</a>
                    </th>
                    <th>
                        <a href="<?= route_admin('index', 'delete', $b['id']) ?>">Удалить</a>
                    </th>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

<? tmpl_block( 'admin_bottom') ?>