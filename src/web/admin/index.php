<?php

use App\Models\BookModel;
use App\Core\Redirect;
use App\Core\Sanitizer;

require_once '../../app/bootstrap.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$bookModel = new BookModel();

function validate($data)
{
    $data = Sanitizer::sanitize($data);
    $errors = [];

    if(empty($data)) {
        return [
            'data' => $data,
            'errors' => [],
            'status' => false
        ];
    }

    // title
    if (empty($data['title']) || strlen($data['title']) < 3) {
        $errors[] = 'Введите корректное название книги. Мин. 3 символа';
    }

    // author
    if (empty($data['author']) || !is_array($data['author']) || count($data['author']) < 1) {
        $errors[] = 'Выберите хотя бы одного автора';
    }

    // genre
    if (empty($data['genre']) || !is_array($data['genre']) || count($data['genre']) < 1) {
        $errors[] = 'Выберите хотя бы один жанр';
    }

    if (empty($data['description']) || strlen($data['description']) < 3) {
        $errors[] = 'Введите корректное описание книги. Мин. 3 символа';
    }

    if (empty($data['price']) || !is_numeric($data['price']) || $data['price'] < 1) {
        $errors[] = 'Введите корректную цену. Число должно быть больше 1';
    }

    return [
        'data' => $data,
        'errors' => $errors,
        'status' => !$errors
    ];
}

switch($action) {
    case "add":
        $validator = validate($_POST);
        $book = $validator['data'];
        $errors = $validator['errors'];

        if($validator['status']) {
            $bookModel->create($book);

            Redirect::toAdmin('index');
        }

        include APP_ROOT_PATH . "/views/admin/book_edit.php";
        break;

    case "edit":
        if(empty($_GET['id'])) {
            Redirect::toAdmin('index');
        }

        $id = (int) $_GET['id'];

        $validator = validate($_POST);
        $book = $validator['data'];
        $errors = $validator['errors'];

        if($validator['status'] && $id > 0){
            $bookModel->update($id, $book);
            Redirect::toAdmin('index');
        }

        $book = $bookModel->getById($id);
        $book_authors = $bookModel->getAllAuthors($id);
        $book_genres = $bookModel->getAllGenres($id);
        include APP_ROOT_PATH . "/views/admin/book_edit.php";
        break;

    case "delete":
        $book = $bookModel->delete((int) $_GET['id']);
        Redirect::toAdmin('index');
        break;

    default:
        $books = $bookModel->getAll();
        include APP_ROOT_PATH . "/views/admin/book_list.php";
}
