<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>

    <main class="container">
        <h1>Dados Enviados</h1>

        <?php
            //os dados são armazenado nas variáveis $POST e $GET. o var_dump 
            //permite "puxar" essa variável, o var_dump é necessário.

            // 1- Com REQUEST
            //echo var_dump($_REQUEST["nome"]);
            // $_REQUEST = Acessar dados de entrada de requisições, 
            //independentemente de terem sido enviados via GET, POST ou COOKIE. 
            
            // 2- Com POST
            //echo var_dump($_POST["nome"]);
            // ($_POST) = sem as chaves puxa tudo. 
            //($_POST['nome']) = puxa o dado especificado.

            // 3- Com POST por variável, dessa forma seria uma forma mais organizada de aparecer os dados.
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobreNome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            //puxando com a variável com tag. Para estilizar a string 
            // com a tag funciona do mesmo jeito com id ou class, pelo css.
            echo "<p id='campoNome'><strong>O seu nome é</strong> $nome </p>";
            echo "<p><strong>O seu sobrenome é</strong> $sobrenome </p>";
            echo "<p><strong>O seu email é</strong> $email </p>";
            echo "<p><strong>O seu senha é</strong> $senha </p>";
        ?>

    </main>

    
</body>
</html>