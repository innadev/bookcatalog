<?php

use App\Core\Redirect;
use App\Core\Sanitizer;
use App\Models\AuthorModel;

require_once '../../app/bootstrap.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$authorModel = new AuthorModel();

switch($action) {
    case "add":
        if(!empty($_POST)) {
            $authorModel->create(Sanitizer::sanitize($_POST));
            Redirect::toAdmin('author');
        }

        include APP_ROOT_PATH . "/views/admin/author_edit.php";
        break;
    case "edit":
        if(empty($_GET['id'])) {
            Redirect::toAdmin('author');
        }

        $id = (int) $_GET['id'];

        if(!empty($_POST)){
            $authorModel->update($id, Sanitizer::sanitize($_POST));
            Redirect::toAdmin('author');
        }

        $author = $authorModel->getById($id);
        include APP_ROOT_PATH . "/views/admin/author_edit.php";
        break;
    case "delete":
        $authorModel->delete((int) $_GET['id']);
        Redirect::toAdmin('author');
        break;

    default:
        $authors = $authorModel->getAll();
        include APP_ROOT_PATH . "/views/admin/author_list.php";
}
