<?php

use App\Core\Mail;
use App\Models\BookModel;

require_once '../app/bootstrap.php';

$id = $_GET['id'];
$book = (new BookModel)->getById($id);

//var_dump($_POST); die;
if (!empty($_POST)) {
    (new Mail)->sendNewOrderNotification($_POST['fio'], $_POST['address'], $_POST['count'], $book);
}

include APP_ROOT_PATH . "/views/book_order.php";
