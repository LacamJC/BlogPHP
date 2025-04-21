<?php
namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';


use App\Api\Connection;
use App\Database\Rdg\PostGateway;
use Exception; 


class PostController
{


    public function index($params = [])
    {
        require  __DIR__ . '/../views/post.php';
    }

    public function show($params)
    {
        $postId = $params['id'];
        echo "Mostrando o post do id: $postId";
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

            print_r($dados);

            try{
                $conn = Connection::open('blog');
                PostGateway::setConnection($conn);
            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
}
