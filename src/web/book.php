<?php

require_once '../app/bootstrap.php';

$bookModel = new App\Models\BookModel;
$book = $bookModel->getById((int) $_GET['id']);
$book_authors = $bookModel->getAllAuthors($_GET['id']);
$book_genres = $bookModel->getAllGenres($_GET['id']);

include_once APP_ROOT_PATH . '/views/book.php';
