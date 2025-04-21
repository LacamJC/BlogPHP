<?php

namespace App\Database\Rdg;

use PDO;
use Exception;

class PostGateway
{
    private static $conn;
    private $data;

    public static function setConnection(PDO $conn)
    {
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

    public static function all(){
        $sql = "SELECT * FROM posts";
        $result = self::$conn->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS,__CLASS__);
    }

    public function save()
    {
        try {
            if (empty($this->data['id'])) {
                echo "INSERT";
                $sql = "INSERT INTO posts(titulo, autor, conteudo, data_publicacao)" .
                    "VALUES(" .
                    "'{$this->data['titulo']}'," .
                    "'{$this->data['autor']}'," .
                    "'{$this->data['conteudo']}'," .
                    "'{$this->data['data']}')";
            } else {
                echo "UPDATE";
            }

            echo "<br>";
            echo $sql;

            return self::$conn->exec($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
