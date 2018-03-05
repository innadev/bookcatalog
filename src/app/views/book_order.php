<? include_once 'block/front_top.php' ?>
<? include_once 'message.php' ?>


    <div>
        <form class="form-horizontal" method="post" action="">
            <div class="form-group">
                <label class="control-label col-sm-4" for="boo">Книга: </label>
                <div class="col-sm-10">

                    <h3><?= isset($book['title']) ? htmlentities($book['title']) : '' ?></h3>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="boo">Цена: </label>
                <div class="col-sm-10">

                    <h3><?= isset($book['price']) ? $book['price'] : '' ?></h3>

                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-4" for="cur">Количество экземпляров:</label>
                <div class="col-sm-10">
                    <input type="number" name="count" class="form-control" id="cur" placeholder="Введите количество экземпляров"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">ФИО:</label>
                <div class="col-sm-10">
                    <input type="text" name="fio" class="form-control" id="email" placeholder="Введите ФИО" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Адрес:</label>
                <div class="col-sm-10">
                    <input type="text" name="address" class="form-control" id="pwd" placeholder="Введите адрес доставки" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Отправить заказ</button>
                    <a href="/index.php" class=" btn btn-primary">Назад</a>
                </div>
            </div>
        </form>
    </div>

<? include_once 'block/front_bottom.php' ?>

