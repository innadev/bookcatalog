<?php

namespace App\Core;

class Sanitizer
{
    public static function sanitize(array $items)
    {
        $sanitized = [];
        foreach ($items as $key =>$item) {
            $sanitized[$key] = strip_tags(trim($item));
        }
        return $sanitized;
    }
}
