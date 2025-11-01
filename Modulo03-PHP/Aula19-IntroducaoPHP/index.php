<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
</head>
<style>
    #teste {
        color: blue;
    }

</style>
<body>
    
    <h1>
        <?php
            // echo seria o print.
            echo "Hello World";
        ?>
    </h1>

    <h2>Variáveis Em PHP</h2>

    <p>
        <?php
            // $ cria uma variável.
            $nome = "Diego";
            $sobrenome = "Nakashima";

            // $ também puxa uma vairável.
            echo "Nome $nome <br>";
            echo "Sobrenome $sobrenome <br>";
            echo "<p id='teste'>Foi</p>";

        ?>
    </p>

    <h2>Constantes em PHP</h2>

    <p>
        <?php
            // variável do java, funciona da mesma forma no PHP.
            const faculdade = "UMC";
            const cidade = "Mogi das Cruzes";
            
            // . Seria para concatenar uma variável com o texto. Unir o conteúdo, no caso a string com a variável.
            echo "Faculdade " . faculdade . "<br>";
            echo "Cidade " . cidade . "<br>";

        ?>
    </p>
</body>
</html>