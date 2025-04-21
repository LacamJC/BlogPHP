<?php

namespace App\Controllers;

use App\Models\Post;
use App\Widgets\Card;
use App\Core\Layout;
use Exception;

class PostController
{


    public function index($params = [])
    {
        $result = Post::all();

        foreach ($result as $item) {
            echo "<h2>{$item->titulo}</h2>";
        }
    }

    public static function list()
    {
        $result = Post::all();
        $cards = [];
        foreach ($result as $item) {
            $cards[] = new Card($item->titulo, $item->conteudo, '');
        }
        echo "<div class='d-flex bdg-success justify-content-evenly'>";
        foreach ($cards as $card) {
            $card->render();
        }
        echo "</div>";
    }

    public function findById($params = [])
    {
        $postId = $params['id'] ?? null;
  
        if(!empty($postId)){
            $post = Post::find($postId);

            $layout = new Layout('default');
            $layout->setData(['title' => $post->titulo]);
            $layout->render('post', ['post' => $post]);
            
        }else{
            throw new Exception("Erro ao encontra o post");
        }
    }

    public function show()
    {
        try {
            $posts = Post::all();
            $layout = new Layout('default');
            $layout->setData(['title' => 'Ultimos artigos']);
            $layout->render('lista', ['posts' => $posts]);
        } catch (Exception $e) {
            echo "Erro: {$e->getMessage()}";
        }
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
