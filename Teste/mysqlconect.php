<?php

    $server="localhost";
    $username = 'root';
    $password = '';
    $database = "usuarios";

    $link = mysqli_connect($server, $username, $password, $database);

    if(!isset($link)){
        echo "Falha ao conectar com o servidor";
    }else{
        echo "Sucesso ao conectar com o servidor!";
    }
    

?>