<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Book Catalog</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class = "col-md-6"><h1>Book catalog</h1></div>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="<?= route_admin('index') ?>">Книги</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= route_admin('author') ?>">Авторы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= route_admin('genre') ?>">Категории</a>
        </li>
    </ul>
    <br>