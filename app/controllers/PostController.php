<?php

namespace App\Controllers;

use App\Models\Post;
use Exception;

class PostController
{


    public function index($params = [])
    {
        require  __DIR__ . '/../views/post.php';
    }

    public function show(){
        Post::all();
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
