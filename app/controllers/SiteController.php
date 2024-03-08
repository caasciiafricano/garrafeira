<?php

namespace app\controllers;

use app\controllers\Controller;

class SiteController extends Controller
{

  public function index($params)
  {
    return Controller::view("site/home");
  }

}
