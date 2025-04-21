<?php 


require '../vendor/autoload.php';
use App\Core\Router;


$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('escreva', 'HomeController@cadPost');
$router->get('lista', 'PostController@show');

$router->post('post', 'PostController@store');


return $router;

?>