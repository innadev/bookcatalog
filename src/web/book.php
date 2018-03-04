<?php

require_once '../app/bootstrap.php';

$book = (new App\Models\BookModel)->getById($_GET['id']);
include_once APP_ROOT_PATH . '/views/book.php';
