<?php
declare(strict_types=1);

// 
function load(string $controller, string $action)
{
    try{
        // se controller existir
        $controllerNamespace = "app\\controllers\\" . $controller;

        if(!class_exists($controllerNamespace)){
            throw new Exception("O controller {$controllerNamespace} não existe!");
        }

        // Criar uma instancia da classe corrente
        $controllerInstance = new $controllerNamespace();

        // se metodo não existir
        if(!method_exists($controllerInstance, $action)){
            throw new Exception("O metódo {$action} não existe na controller: {$controller}");
        }


        $controllerInstance->$action((object) $_REQUEST);

    }catch(Exception $e){
        throw $e;
    }
}


// Sistema de roteamento
$router = [
    "GET" => [
        "/" => fn () => load("SiteController","index")
    ],

    "POST" => [
        "/login" => fn () => load("LoginController","index")
    ]
];