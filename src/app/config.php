<?php

define('MYSQL_SERVER', 'db');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'geekforless');
define('MYSQL_DB', 'geekforless');


define('APP_ROOT_PATH', __DIR__);

define('APP_NOTIFY_EMAIL', '');
define('APP_NOTIFY_PASS', '');

function route_admin($page, $action = null, $id = null)
{
    $url = "/admin/{$page}.php";
    if ($action) {
        $params = ['action' => htmlspecialchars($action)];

        if ($id || isset($_GET['id'])) {
            $params['id'] = (int) ($id ? $id : $_GET['id']);
        }

        $url.= '?' . http_build_query($params);
    }

    return $url;
}

function tmpl_block($block)
{
    return include_once APP_ROOT_PATH . "/views/block/{$block}.php";
}

function safe_out($entity, $key)
{
    return isset($entity[$key]) ? htmlspecialchars($entity[$key]) : '';
}
