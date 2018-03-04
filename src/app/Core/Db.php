<?php

namespace App\Core;

class Db
{
    public static $conn = null;

    public static function getConnection()
    {
        if (!self::$conn) {
            $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

            if (!$link) {
                die("Error: ".mysqli_error($link));
            }

            if(!mysqli_set_charset($link, "utf8")) {
                printf("Error: ".mysqli_error($link));
            }

            self::$conn = $link;
        }

        return self::$conn;
    }
}
