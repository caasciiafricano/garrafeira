<?php

namespace app\controllers;
use app\models\AdminModel;

class AdminController extends Controller
{
    public function index($params)
    {
        parent::render("admin/form-cadastro-produto");
    }

    public function registrar($params)
    {
        $model = new AdminModel();
        $model->registrar();
    }
}