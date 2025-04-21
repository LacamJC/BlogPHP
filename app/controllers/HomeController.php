<?php

namespace App\Controllers;

class HomeController
{
    public function show($params)
    {
        $postId = $params['id'];
        echo "Está e a home page";
    }
}
