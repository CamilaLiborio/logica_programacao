<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Usuário</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="#">Procurar Usuário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="container">
            <form action="verificarUsuario.php" method="post">
                <input type="email" name="email" id="email" placeholder="Informe seu E-mail">
                <input type="submit" value="Verificar Cadastro">
            </form>
        </section>

        <section>
            <?php

            if (isset($_POST["email"])) {
                // isset = verificar se o espaço está vazio
                include("../conexao/conexao.php");
                // include = conexão com os dados cadastrados no cadastro.php
                $email = $_POST["email"];

                $sql = "SELECT * FROM usuarios WHERE email = ?";
                $stmt = $conn->prepare($sql);
                // Conexão com o banco de dados

                if ($stmt) {
                    $stmt->bind_param("s", $email);
                    // trocar a variável vazia do email no dado de email cadastrado
                    $stmt->execute();
                    // executar a requisição
                    $resultado = $stmt->get_result();
                    // adquirir o resultado da requisição

                    if ($resultado->num_rows > 0) {
                        // verificar se a quantidade de linhas é maior que zero
                        $row = $resultado->fetch_assoc();
                        // transformar o resultado em array para o php conseguir interpretar
                        echo "
                        <table>
                                <thead>
                                    <tr>
                                        <!-- tr = linha -->
                                        <th>ID</th>
                                        <!-- th = valor -->
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>E-mail</th>
                                        <th>Excluir</th>
                                   </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['nome']}</td>
                                        <td>{$row['sobrenome']}</td>
                                        <td>{$row['email']}</td>
                                        <td>
                                            <form action='excluirCadastro.php' method='post'>
                                                <input type='hidden' name='id' value='{$row['id']}'>
                                                <!-- input do tipo vazio -->
                                                <input type='submit' id='btn-excluir' value='&#x1f5d1'>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                        </table>    
                        ";
                    } else {
                        echo "<div class='mensagem erro'> </div>";
                    }
                }
            }

            ?>
        </section>
    </main>

</body>

</html>