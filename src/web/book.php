<?php

require_once '../app/bootstrap.php';

$book = (new App\Models\BookModel)->getById((int) $_GET['id']);
include_once APP_ROOT_PATH . '/views/book.php';
