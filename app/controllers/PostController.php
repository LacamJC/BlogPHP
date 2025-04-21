<?php

namespace App\Controllers;

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
}
