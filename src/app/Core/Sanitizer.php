<?php

namespace App\Core;

class Sanitizer
{
    public static function sanitize(array $items)
    {
        $sanitized = [];
        foreach ($items as $key =>$item) {
            if (is_string($item)) {
                $sanitized[$key] = strip_tags(trim($item));
            }
            $sanitized[$key] = $item;
        }
        return $sanitized;
    }
}
