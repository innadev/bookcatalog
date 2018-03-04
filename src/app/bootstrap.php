<?php

require_once 'config.php';
require_once APP_ROOT_PATH . '/../vendor/autoload.php';

function books_intro($text, $len = 200) {
    return mb_substr($text, 0, $len);
}