<?php

namespace App\Models;

use App\Core\Query;

class BookModel
{
    public function getAll()
	{
		return (new Query)->all('SELECT * FROM books ORDER BY id DESC');
	}

    public function filterAll(array $filters)
    {
        $query = 'SELECT * FROM books WHERE 1';
        $allowed = ['genre', 'author'];

        $attributes = [];
        foreach ($filters as $key => $value) {
            if (in_array($key, $allowed)) {
                $query .= " AND %s like '%s'";
                $attributes = array_merge($attributes, [$key, '%'.$value.'%']);
            }
        }
        $query .= " ORDER BY id DESC";

        return (new Query)->all($query, $attributes);
    }

	public function getById($id)
	{
		return (new Query)->first("SELECT * FROM books WHERE id=%d", $id);
	}

	public function create(array $attributes)
	{
        $query = "INSERT INTO books (title, author, genre, description, price) VALUES ('%s', '%s', '%s', '%s', '%s')";

        return (bool) (new Query)->execute($query, $attributes);
	}

    public function update($id, $attributes)
    {
        $query = "UPDATE books SET title='%s', author='%s', genre='%s', description='%s', price ='%s' WHERE id='%d'";

        return (new Query)->execute($query, $attributes + [$id]);
    }

    public function delete($id)
	{
        return (new Query)->execute("DELETE FROM books WHERE id='%d'", [$id]);
	}
}
