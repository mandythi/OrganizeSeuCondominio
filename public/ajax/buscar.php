<?php

    require "../../config.php";

    use app\models\User;

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    $user = new User;

    $resultadoBusca = $user->buscar($name);

    if(!$resultadoBusca || empty($name))
    {
        echo 'nouser';
    }
    else
    {
        echo json_encode($resultadoBusca);
    }