<?php

namespace App\Models;

use App\Core\Query;

class GenreModel
{
    public function getAll()
	{
        $genres = (new Query)->all('SELECT genre FROM books GROUP BY genre');

        $unique = [];
        foreach ($genres as $genre) {
            $unique = array_merge($unique, explode(',', $genre['genre']));
        }

        return array_unique($unique);
	}
}
