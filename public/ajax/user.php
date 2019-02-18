<?php

    require "../../config.php";

    use app\models\User;

    //sleep(3); //Só para testar o icone de loading

    $user = new User;

    //Todos os registros da tabela
    echo json_encode($user->all());

    //Registro especifico da tabela
    /*$id = $_GET['id'];
    echo json_encode($user->find('id', $id));*/
