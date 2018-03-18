<?php

namespace App\Models;

use App\Core\Query;

class AuthorModel
{
    public function getAll()
	{
		return (new Query)->all('SELECT * FROM authors ORDER BY id DESC');
	}

    public function getAllByName($name)
    {
        return (new Query)->all('SELECT * FROM authors WHERE name like \'%s\' ORDER BY id DESC', ['%'.$name.'%']);
    }

    public function getById($id)
    {
        return (new Query)->first("SELECT * FROM authors WHERE id=%d", $id);
    }

    public function create(array $attributes)
    {
        $query = "INSERT INTO authors (name) VALUES ('%s')";

        return (bool) (new Query)->execute($query, $attributes);
    }

    public function update($id, $attributes)
    {
        $query = "UPDATE authors SET name='%s' WHERE id='%d'";

        return (new Query)->execute($query, $attributes + [$id]);
    }

    public function delete($id)
    {
        return (new Query)->execute("DELETE FROM authors WHERE id='%d'", [$id]);
    }
}
