<?php

    $servername = "localhost"; // ip ou dominio do servidor (no caso é o o localhost)
    $username = "root"; //usuário no banco de dados
    $password = ""; //senha do usuário no banco de dados
    $dbname = "faculdade1"; // o banco de dados

    //Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname );

    //Verificar conexão. conn é a variável conecta o banco.
    if ($conn->connect_error) {
        die("conexão falhou");
         //o DIE seria como um BREAK, para o programa todo se a conexão do banco falhar.

    }


 
?>