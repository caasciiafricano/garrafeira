<?php

require_once '../vendor/autoload.php';
require_once '../routers/router.php';

try {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    // verificar se o tipo de requisição existe no sistema de roteamento
    if(!isset($router[$request])){
        throw new Exception("A rota não existe!");
    }

    // verificar se uri existe nas requisições existentes GET ou POST
    if(!array_key_exists($uri,$router[$request])){
        throw new Exception("A rota não existe neste requisição {$request}");
    }

    $controller = $router[$request][$uri];
    $controller();

} catch (Exception $e) {
    throw $e;
}