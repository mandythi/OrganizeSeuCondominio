<?php

    require "../../config.php";

    use app\models\User;

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    $user = new User;

    $cadastrado = $user->create($name, $email);

    if($cadastrado)
    {
        echo 'Cadastrado';
    }
    else
    {
        echo 'Erro';
    }