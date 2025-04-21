<?php

namespace App\Database\Rdg;

use PDO;

class PostGateway
{
    private static $conn;
    private $data;

    public static function setConnection(PDO $conn){
        self::$conn = $conn;
       
    }

    public function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    public function __get($prop)
    {
        return $this->data[$prop];
    }
}
