<?php

namespace App\Core;

class Redirect
{
    public static function toAdmin($section)
    {
        $url = route_admin($section);
        header("Location: " . $url);
        exit;
    }
}
