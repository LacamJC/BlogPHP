<?php

namespace App\Controllers;

use App\Models\Post;
use Exception;

class PostController
{


    public function index($params = [])
    {
        $result = Post::all();

        foreach($result as $item){
            echo "<h2>{$item->titulo}</h2>";
            
        }
    }

    public function show()
    {

        $result = Post::all();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dados = [
                'autor' => $_POST['autor'] ?? '',
                'data' => $_POST['data'] ?? date('Y-m-d'),
                'titulo' => $_POST['titulo'] ?? '',
                'conteudo' => $_POST['artigo'] ?? ''
            ];

            try {
                Post::store($dados);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
