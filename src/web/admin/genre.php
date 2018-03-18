<?php

use App\Core\Redirect;
use App\Core\Sanitizer;
use App\Models\GenreModel;

require_once '../../app/bootstrap.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$genreModel = new GenreModel();

switch($action) {
    case "add":
        if(!empty($_POST)) {
            $genreModel->create(Sanitizer::sanitize($_POST));
            Redirect::toAdmin('genre');
        }

        include APP_ROOT_PATH . "/views/admin/genre_edit.php";
        break;
    case "edit":
        if(empty($_GET['id'])) {
            Redirect::toAdmin('genre');
        }

        $id = (int) $_GET['id'];

        if(!empty($_POST)){
            $genreModel->update($id, Sanitizer::sanitize($_POST));
            Redirect::toAdmin('genre');
        }

        $genre = $genreModel->getById($id);
        include APP_ROOT_PATH . "/views/admin/genre_edit.php";
        break;
    case "delete":
        $genreModel->delete((int) $_GET['id']);
        Redirect::toAdmin('genre');
        break;

    default:
        $genres = $genreModel->getAll();
        include APP_ROOT_PATH . "/views/admin/genre_list.php";
}
