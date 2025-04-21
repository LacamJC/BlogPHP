<?php

namespace App\Controllers;

use App\Core\Layout;

class HomeController
{
    public function index($params = []){
        // require __DIR__ . '/../views/home.php';

        $layout = new Layout('default');
        $layout->setData(['title' => 'Bem vindo']);
        $layout->render('home');
    }


    public function cadPost(){
        $layout = new Layout('default');
        $layout->setData(['title' => 'Escreva seu artigo']);
        $layout->render('escreva');
    }

}
