<?php

use App\Models\BookModel;
use App\Models\GenreModel;
use App\Models\AuthorModel;

require_once '../app/bootstrap.php';

if (is_array($_GET['filter'])) {
    $books = (new BookModel)->filterAll($_GET['filter']);
} else {
    $books = (new BookModel)->getAll();
}

$authors = (new AuthorModel)->getAll();
$genres = (new GenreModel)->getAll();

include_once APP_ROOT_PATH . '/views/books.php';
