<?php 


require '../vendor/autoload.php';
use App\Core\Router;


$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('escreva', 'HomeController@cadPost');

$router->post('post', 'PostController@store');


return $router;

?>