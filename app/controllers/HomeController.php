<?php

namespace App\Controllers;

class HomeController
{
    public function index($params = []){
        require __DIR__ . '/../views/home.php';
    }
}
