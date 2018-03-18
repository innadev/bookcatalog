<?php

use App\Models\AuthorModel;
use App\Models\GenreModel;

require_once '../../app/bootstrap.php';

$action = isset($_GET['method']) ? $_GET['method'] : '';
$genreModel = new GenreModel();
$authorModel = new AuthorModel();

switch($action) {
    case "genre":
        $genres = [];
        if (isset($_GET['search'])) {
            $genres = array_map(function ($item) {
                $item['text'] = $item['name'];
                unset($item['name']);
                return $item;
            }, $genreModel->getAllByName($_GET['search']));
        }
        header('Content-Type: application/json');
        echo json_encode(['results' => $genres]);
        break;
    case "author":
        $authors = [];
        if (isset($_GET['search'])) {
            $authors = array_map(function ($item) {
                $item['text'] = $item['name'];
                unset($item['name']);
                return $item;
            }, $authorModel->getAllByName($_GET['search']));
        }
        header('Content-Type: application/json');
        echo json_encode(['results' => $authors]);
        break;
}
