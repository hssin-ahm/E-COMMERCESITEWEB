<?php

namespace App;

use PDO;

class Connection
{

    public static function getPDO(): PDO
    {
        return new PDO('mysql:dbname=sitewebe-commerce;host=localhost', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}
