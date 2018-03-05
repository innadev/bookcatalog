<?php

namespace App\Core;

class Redirect
{
    public static function toAdminIndex()
    {
        header("Location: index.php");
        die;
    }
}
