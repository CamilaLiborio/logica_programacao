<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar notat</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarUsuario.php">Procurar Usuário</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <!-- opções de cursos -->
        <section id="containerSection">
            <form action="atualizarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="es">Engenharia de software</option>
                    <option value="si">Sistema da Informação</option>
                    <option value="cc">Ciências da Computação</option>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </section>
        
        <section>

            <?php

                //isset = verificar se $_POST["curso"] está preenchido 
                if (isset($_POST["curso"])){

                    //conexão com o banco de dados
                    include("../conexao/conexao.php");
                    $curso = $_POST["curso"];
                    
                    // preparando consulta. trocando a "?" pelo $curso acima.
                    // não é recomendado retornar tudo com *, e sim colunas desejadas. 
                    $sql = "SELECT * FROM usuarios WHERE curso = ?";
                    $stmt = $conn -> prepare($sql);
                    
                    // validando a consulta
                    if ($stmt) {

                        $stmt -> bind_param("s", $curso);
                        $stmt -> execute();
                        $resultado = $stmt -> get_result(); 
                        // print_r($resultado -> fetch_assoc());// forma especifica de printar um array associativo         
                        // echo $resultado -> fetch_asso() ;  // array associativo

                        // tratamento de erros
                        if ($resultado -> num_rows > 0) {

                            // print basico para aparecer só ads / echo "<h1> $curso </h1>";

                            // em vez de aparecer ads  cru, usamos array associativa para mudar o nome que aparece.
                            $cursos =[
                                "ads" => "ANÁLISE E DESENVOLVIMENTO DE SISTEMAS",
                                "es" => "ENGENHARIA DE SOFTWARE",
                                "si" => "SISTEMAS DA INFORMAÇÃO",
                                "cc" => "CIÊNCIAS DA COMPUTAÇÃO"
                            ];

                            // variável que guarda as siglas / [$curso] /, serve para puxar as siglas
                            $nomeCurso = $cursos[$curso];
                            // sempre que for usar um style, usar aspas simples para não confundir com as aspas duplas de fora
                            echo "<h2 style='text-align:center'>$nomeCurso</h2>";
                                                       
                            echo "<form action='processaNota.php' method='post' id='form-nota'>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Sobrenome</th>
                                                <th>Nota Atividade</th>
                                                <th>Nota Prova</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                                        // colocando o while, vai retorna cada linha da array associativa

                                        while ($row = $resultado -> fetch_assoc()) {
                                            
                                            // retornando as linhas o banco
                                            // 'name' para capturar as colunas do banco para registrar as notas
                                            echo " 
                                                <tr>
                                                    <td>{$row['id']}</td>
                                                    <td>{$row['nome']}</td>
                                                    <td>{$row['sobrenome']}</td>
                                                    <td><input type='number' name='nota_atividade[{$row['id']}]' required></td> 
                                                    <td><input type='number' name = 'nota_prova[{$row['id']}]' required></td>

                                                </tr>";
                                        }
                                        
                                        echo "</tbody>
                                            </table>
                                            <input type='submit' value='Enviar'>
                                        </form>";
                                                    
                            

                        } else {
                            echo "<div class= 'mensagem de erro'> O curso não possui alunos cadastrados</div>";
                        }

                       

                        
                    }
                }


            ?>
        </section>
    </main>
</body>
</html>


<!-- array associativa trabalha como dicionario -->
<!-- tradicional trabalha com chave valor -->