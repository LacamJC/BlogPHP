<?php 

namespace App\Controllers;

class PostController{
    public function show($params){
        $postId = $params['id'];
        echo "Mostrando o post do id: $postId";
    }
}

?>