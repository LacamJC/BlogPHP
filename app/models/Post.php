<?php

namespace App\Models;

use App\Database\Rdg\PostGateway;
use App\Api\Connection;
use Exception;
use App\Services\Helper;

class Post
{
    public static function all()
    {
        try {
            $conn = Connection::open('blog');
            PostGateway::setConnection($conn);
            $result = PostGateway::all();
            echo "<pre>";
            print_r($result);
            echo "<pre>";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function store($dados)
    {
        try {
            $conn = Connection::open('blog');
            PostGateway::setConnection($conn);
            foreach ($dados as $chave => $valor) {
                if (strlen($valor) == 0) {
                    throw new Exception("<p class='alert alert-danger'>a chave '$chave' não pode estar vazio</p>");
                } else {
                    $artigo[$chave] = $valor;
                }
            }
            $artigo = new PostGateway;
            $artigo->titulo = $dados['titulo'];
            $artigo->data = $dados['data'];
            $artigo->autor = $dados['autor'];
            $artigo->conteudo = $dados['conteudo'];
            $artigo->save();

            header('Location:' . Helper::url('/') . '');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
