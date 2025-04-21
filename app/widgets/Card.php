<?php

namespace App\Widgets;

class Card
{
    private $titulo;
    private $texto;
    private $link;

    public function __construct($titulo, $texto, $link = '')
    {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->link = $link;
    }

    public function render()
    {
        echo "<div class='card' style='width: 18rem;'>";
        echo "<div class='card-body'>";
        echo "    <h5 class='card-title'>{$this->titulo}</h5>";
        echo "    <h6 class='card-subtitle mb-2 text-body-secondary'></h6>";
        echo "    <p class='card-text text-truncate'>{$this->texto}</p>";
        echo "    <a href='{$this->link}' class='card-link'>Ver artigo</a>";
        echo "    <!-- <a href='#' class='card-link'>Another link</a> -->";
        echo "</div>";
        echo " </div>";
    }
}
