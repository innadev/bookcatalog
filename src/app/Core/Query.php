<?php

namespace App\Core;

class Query
{
    protected $conn;

    public function __construct()
    {
        $this->conn = DB::getConnection();
    }

    public function all($query, array $attributes = [])
    {
        $result = $this->execute($query, $attributes);

        $items = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $items[] = $row;
        }

        return $items;
    }

    public function first($query, $id)
    {
        $result = $this->execute($query, [(int)$id]);
        return mysqli_fetch_assoc($result);
    }

    public function execute($query, array $attributes = [])
    {
        if ($attributes) {
            $replacements = [];
            foreach ($attributes as $attribute) {
                $replacements[] = mysqli_real_escape_string($this->conn, $attribute);
            }
            $query = sprintf($query, ...$replacements);
        }

        $result = mysqli_query($this->conn, $query);

        if (!$result) {
            die(mysqli_error($this->conn));
        }

        return $result;
    }
}
