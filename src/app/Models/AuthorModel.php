<?php

namespace App\Models;

use App\Core\Query;

class AuthorModel
{
    public function getAll()
	{
		$authors = (new Query)->all('SELECT author FROM books GROUP BY author');

		$unique = [];
		foreach ($authors as $author) {
            $unique = array_merge($unique, explode(',', $author['author']));
        }

        return array_unique($unique);
	}
}
