<?php 


require '../vendor/autoload.php';
use App\Core\Router;


$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('post', 'PostController@index');
$router->get('/post/{id}', 'PostController@show');

return $router;

?>