<?php

namespace App\Models;

use App\Core\Query;

class BookModel
{
    public function getAll()
	{
		return (new Query)->all('SELECT * FROM books ORDER BY id DESC');
	}

	public function getAllAuthors($id = null)
    {
        $group = [];
        $where = $id ? " WHERE books.id = %s" : "";
        $result = (new Query)->all("
              SELECT
                  books.id as book_id,
                  authors.id as book_author_id,
                  authors.name as book_author_name
              FROM books
              JOIN books_authors ON books.id = books_authors.book_id
              JOIN authors ON authors.id = books_authors.author_id
              {$where}
              ORDER BY books.id DESC
        ", [$id]);

        foreach ($result as $author) {
            $group[$author['book_id']][] = [
                'id' => $author['book_author_id'],
                'name' => $author['book_author_name'],
            ];
        }

        return $group;
    }

    public function getAllGenres($id = null)
    {
        $group = [];
        $where = $id ? " WHERE books.id = %s" : "";
        $result = (new Query)->all("
              SELECT
                  books.id as book_id,
                  categories.id as book_category_id,
                  categories.name as book_category_name
              FROM books
              JOIN books_categories ON books.id = books_categories.book_id
              JOIN categories ON categories.id = books_categories.category_id
              {$where}
              ORDER BY books.id DESC
        ", [$id]);

        foreach ($result as $author) {
            $group[$author['book_id']][] = [
                'id' => $author['book_category_id'],
                'name' => $author['book_category_name'],
            ];
        }

        return $group;
    }

    public function associateAuthors($id, array $authors)
    {
        if (!$authors) {
            return false;
        }

        $res = (bool) (new Query)->execute("DELETE FROM books_authors WHERE book_id=%s", [$id]);

        if (!$res) {
            return false;
        }

        $authorsQuery = '';
        $attributes = [];
        foreach ($authors as $author) {
            $authorsQuery .= "(%s, %s),";
            $attributes[] = $id;
            $attributes[] = $author;
        }
        $authorsQuery = rtrim($authorsQuery, ',');

        $query = "INSERT INTO books_authors (book_id, author_id) VALUES {$authorsQuery}";

        return (bool) (new Query)->execute($query, $attributes);
    }

    public function associateGenres($id, array $genres)
    {
        if (!$genres) {
            return false;
        }

        $res = (bool) (new Query)->execute("DELETE FROM books_categories WHERE book_id=%s", [$id]);

        if (!$res) {
            return false;
        }

        $genresQuery = '';
        $attributes = [];
        foreach ($genres as $genre) {
            $genresQuery .= "(%s, %s),";
            $attributes[] = $id;
            $attributes[] = $genre;
        }
        $genresQuery = rtrim($genresQuery, ',');

        $query = "INSERT INTO books_categories (book_id, category_id) VALUES {$genresQuery}";

        return (bool) (new Query)->execute($query, $attributes);
    }

    public function filterAll(array $filters)
    {
        $filter = array_keys($filters)[0];
        if ($filter == 'genre') {
            $join = ' JOIN books_categories ON books.id = books_categories.book_id AND books_categories.category_id = %s';
        } else {
            $join = ' JOIN books_authors ON books.id = books_authors.book_id AND books_authors.author_id = %s';
        }

        $query = "SELECT books.* FROM books {$join} ORDER BY books.id DESC";

        return (new Query)->all($query, [$filters[$filter]]);
    }

	public function getById($id)
	{
		return (new Query)->first("SELECT * FROM books WHERE id=%d", $id);
	}

	public function create(array $attributes)
	{
        $query = "INSERT INTO books (title, description, price) VALUES ('%s', '%s', '%s')";

        return (bool) (new Query)->execute($query, $attributes);
	}

    public function update($id, $attributes)
    {
        $query = "UPDATE books SET title='%s', description='%s', price ='%s' WHERE id='%d'";

        $this->associateAuthors($id, $attributes['author']);
        $this->associateGenres($id, $attributes['genre']);

        unset($attributes['genre']);
        unset($attributes['author']);

        return (new Query)->execute($query, $attributes + [$id]);
    }

    public function delete($id)
	{
        return (new Query)->execute("DELETE FROM books WHERE id='%d'", [$id]);
	}
}
