<?php

namespace app\controllers;

use League\Plates\Engine;

abstract class Controller
{
  public static function view(string $view, array $data = [])
  {
    $viewsPath = dirname(__FILE__, 2) . "/views";
    //var_dump($viewsPath); die("testou na rota");

    if (!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . ".php")) {
      throw new \Exception("A view {$view} não existe");
    }

    $templates = new Engine($viewsPath);
    echo $templates->render($view, $data);
  }
}
