<?php

use App\Models\BookModel;
use App\Core\Redirect;

require_once '../../app/bootstrap.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$bookModel = new BookModel();

switch($action) {
    case "add":
        if(!empty($_POST)) {
            $bookModel->create($_POST);
            Redirect::toAdminIndex();
        }

        include APP_ROOT_PATH . "/views/book_admin.php";
        break;

    case "edit":
        if(empty($_GET['id'])) {
            Redirect::toAdminIndex();
        }

        $id = (int) $_GET['id'];

        if(!empty($_POST) && $id > 0){
            $bookModel->update($id, $_POST);
            Redirect::toAdminIndex();
        }

        $book = $bookModel->getById($id);
        include APP_ROOT_PATH . "/views/book_admin.php";
        break;

    case "delete":
        $book = $bookModel->delete($_GET['id']);
        Redirect::toAdminIndex();
        break;

    default:
        $books = $bookModel->getAll();
        include APP_ROOT_PATH . "/views/books_admin.php";
}
