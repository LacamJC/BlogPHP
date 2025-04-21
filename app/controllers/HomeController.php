<?php

namespace App\Controllers;

class HomeController
{
    public function index($params = []){
        require '../views/home.php';
    }
}
