<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="../estilos/styleCadastrar.css">
</head>
<body>
    <header>
        <nav>

            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Cadastrar Usuário</a></li>
                <li><a href="verificarUsuario.php">Procurar Usuário</a></li>

            </ul>
        </nav>
    </header>

    <main> <!--formulario-->
        <form action="cadastro.php" method="POST">
            <h2>Cadastro de Aluno</h2>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="curso">Selecione o Curso</label>
            <select name="curso" id="curso">
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                <option value="es">Engenharia de Software</option>
                <option value="si">Sistema da informação</option>
                <option value="cc">Ciência da Computação</option>
            </select>

            <input type="submit" value="Cadastrar">
            
        </form>

    </main>
    

    <?php
        try {
            // POST é a variável.
            // Conexão do cadastro com o mysql(não vai funcionar se o banco não existir). Importando a conexão.
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                include("../conexao/conexao.php");

                $nome = $_POST["nome"];
                $sobrenome = $_POST["sobrenome"];
                $email = $_POST["email"];
                $curso = $_POST["curso"];

                //Criar
                $hoje = new DateTime();
                $id = $hoje ->format("Ym") . rand(100,999); // Y= year(ano) M = month(mes)
                
                echo $id;

                //identificando em qual tabela será armazenado.
                $sql = "INSERT INTO usuarios (id,nome,sobrenome,email,curso) values (?,?,?,?,?)";
                // ? = evita o sql injection. seria por segurança, para evitar ataques.
                $stmt = $conn -> prepare($sql);
                // criar conexão com o banco de dados
                $stmt -> bind_param("issss", $id,$nome,$sobrenome,$email,$curso); 
                // na primeira "", preenchendo a ?. informando o tipo de dado de cada ?.
                // stmt statement(afirmacao)= seria uma variavel. aleatória, não necessariamente stmt.
                $stmt -> execute();

                echo "<div class='mensagem sucesso'>Usuário cadastrado com sucesso</div>";

                $stmt -> close();
                $conn -> close();
                // fecha o código após a execução
                }
                }  
                catch(mysqli_sql_exception $e){
                // Duplicate entry
                if (str_contains($e->getMessage(), "Duplicate entry")) {
                // str_contains = if 'in'
                echo "<div class='mensagem erro'>E-mail já está cadastrado</div>";

                } else {
                echo "<div class='mensagem erro'>Erro ao cadastrar, Tente novamente mais tarde</div>";
                }
                echo $e->getMessage();
                };
                //correção de erros

    ?>
</body>
</html>