<?php

// Metódo de carregamento das rotas
function load(string $controller, string $action)
{
    try {
        $controllerNamespace = "app\\controllers\\" . $controller;

        // Verificar se controller
        if (!class_exists($controllerNamespace))
            throw new Exception("Classe Controller {$controllerNamespace} não existe.");

        // Se controller existir, instanciar a classe    
        $controllerInstance = new $controllerNamespace();

        // Verificar se metódo existe
        if (!method_exists($controllerInstance, $action))
            throw new Exception("O metódo {$action} não existe na classe controller {$controller}");

        // Se método existir na controller, invocar.
        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        throw $e;
    }
}

// Sistema de rotas
$router = [
    "GET" => [
        "/" => fn () => load("SiteController", "index"),
    ],

    "POST" => [
        
    ],
];
