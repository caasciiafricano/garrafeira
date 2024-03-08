<?php

namespace app\controllers;

use app\controllers\Controller;

class UtilizadorController extends Controller
{

  public function index($params)
  {
    return Controller::view("auth/login");
  }

}
