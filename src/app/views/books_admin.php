<? include_once 'block/admin_top.php' ?>

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
                        <a href="index.php?action=edit&id=<?= (int) $b['id'] ?>">Редактировать</a>
                    </th>
                    <th>
                        <a href="index.php?action=delete&id=<?= (int) $b['id'] ?>">Удалить</a>
                    </th>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

<? include_once 'block/admin_bottom.php' ?>