<?php

namespace app\controllers;

class SiteController extends Controller
{
    public function index($params)
    {
        parent::render("site/home");
    }
}