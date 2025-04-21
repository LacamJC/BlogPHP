<?php 

namespace App\Core;
use Exception;

class Layout{
    private $template;
    private $data = [];

    public function __construct($template){
        $this->template = dirname(__DIR__) . "\\views\layouts\\" . $template . '.php';
        // echo dirname(__DIR__) . "\\views\layouts\\" . $template . '.php';
    }

    public function setData($data){
        $this->data = array_merge($this->data, $data);
    }

    public function render($contentView, $contentData = []) {
        if(!file_exists($this->template)){
            throw new Exception('Template do layout "' . $this->template . '" não encontrado');
        }

        extract($this->data);
        extract($contentData);

        ob_start();
        include __DIR__ . '/../views/' . $contentView . '.php';
        $content = ob_get_clean();

        include $this->template;
    }
}