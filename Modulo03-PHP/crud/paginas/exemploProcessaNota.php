<?php

    // $nomes = ["Caio", "Marcos", "Diego"];

    // foreach ($nomes as $nome) {
    //     echo $nome . "<br>";
    // }

    // percorre array associativo
    $notasAtividades = [
        "Caio" => 10,
        "Marcos" => 8, 
        "Diego" => 9
    ];
    foreach ($notasAtividades as $nome => $nota) {
        echo $nome . "nota" . $nota . "<br>";
    }

    // percorre dois arrays associativos
    $notaAtividades = [ 
        "Caio" => 10, 
        "Marcos" => 8,
        "Diego" => 9
    ];

    $notasProvas = [
        "Caio" => 9,
        "Marcos" => 8,
        "Diego" => 10
    ];
    foreach ($notasAtividades as $nome => $nota) {
        $prova = $notasProvas[$nome];
        // na variável $prova, vai armazenar as $notasProvas.

        echo $nome . " nota " . $nota . "<br>"; // nome usuário
        echo $nome . " nota " . $prova . "<br>"; // nota prova

    }

?>