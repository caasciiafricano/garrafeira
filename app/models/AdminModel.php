<?php

namespace app\models;
use KaasConnectionDB;

class AdminModel
{
    public function registrar()
    {
        $database = new KaasConnectionDB();
        
        $garrafa = [
            ":nome" => htmlspecialchars($_POST['nome-garrafa']), 
            ":img" =>  "assets/uploads/" .  htmlspecialchars($_FILES['img-garrafa']['name']), 
            ":origem" => htmlspecialchars($_POST['origem-garrafa']), 
            ":ano" => htmlspecialchars($_POST['ano-garrafa']), 
            ":preco" => htmlspecialchars($_POST['preco']), 
            ":quantidade" => htmlspecialchars($_POST['quantidade']),
        ];

        #print_r($_FILES);
        #die();
        $database->insert("INSERT INTO tb_garrafas(id,nome,origem,ano,preco,quantidade)
                           VALUES(0,:nome,:img,:origem,:ano,:preco,:quantidade)",$garrafa);

        echo "OK";
    }
}



