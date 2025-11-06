<?php
    // valida se o $_POST["id"] está vazio 
    if(isset($_POST["id"])){

        //conexão com o banco de dados
        include("../conexao/conexao.php");


        // cria a variavel do ID
        $id = $_POST["id"];

        //prepara a consulta SQL para excluir cadastro
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn->prepare ($sql);

        if ($stmt) {
            $stmt -> bind_param("i", $id); // i = int
            
            $stmt-> execute(); // executa a query 

            header("Location: verificarUsuario.php"); // direciona você para a págona especificada
            
            $stmt-> close(); // encerra a conexão

        } else {
            // mensagem erro 
            echo "<div class= 'mensagem erro>Erro na consulta</div>";
        }
        // encerra a conexão com o banco de dados
        $conn -> close();
        
    }

?>