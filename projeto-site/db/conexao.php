<?php
    $host = 'localhost'; //Variável que guarda o nome do Host do BD
    $database = 'cadastrocliente'; //Variável que guarda o nome do BD criado
    $usuario = 'root'; //Variável que guarda o nome do usuário administrador (nome padrão)
    $senha = ''; //Variável que guarda a senha do BD (caso haja)

    $mysqli = new mysqli($host, $usuario, $senha, $database); //Variável que guarda a conexão com o BD

    if($mysqli -> error){
        die("Falha na conexão!" . mysqli -> error);
    } //Caso a Conexão não seja completada, um erro será jogado.
?>