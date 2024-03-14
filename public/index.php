<?php

// Importação das extensões de bibliotecas
 

// Capturar a URI (Uniform Resource Identifier)
$uri = strtolower(parse_url($_SERVER['REQUEST_URI'])['path']);
// Capturar o tipo de requisição enviada
$request = $_SERVER['REQUEST_METHOD'];

// 
try {
    // Verificar requisão existe
    if(!$router[$request])
        throw new Exception("Requisão do tipo {$request} não existe como parte das routas.");

    // Verificar se uri existe como parte da requisição enviada
    if(!array_key_exists($uri,$router[$request]))
        throw new Exception("Rota {$uri} não existe como parte da requisão {$request}");


    // Se existir todos as verificações
    $controller = $router[$request];
    $controller();

} catch (Exception $e) {
    throw $e;
}
