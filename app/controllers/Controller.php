<?php

namespace app\controllers;
use League\Plates\Engine;

abstract class Controller
{
    static function render($view, $data = [])
    {
        // View path
        $path = "../app/views/";
        // Create new Plates instance
        $templates = new Engine($path);

        // Render a template
        echo $templates->render($view, $data);
    }
}
