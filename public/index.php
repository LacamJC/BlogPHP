<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require '../config/routes.php';

// Debug: mostra a URL sendo capturada
// echo "URL Capturada: " . ($_GET['url'] ?? '/');
// echo "<br>";

$router->dispatch();