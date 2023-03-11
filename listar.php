<?php
    function listarDados() {
        $conexao = new mysqli("localhost", "root", "", "devwev2_projeto_02");
        $stmt = $conexao -> prepare("SELECT * FROM operacoes ORDER BY id");
        $stmt -> execute();

        $result = $stmt -> get_result();

        while ($row = $result -> fetch_array()) {
            echo "<h3>", $row["numero1"], $row["operador"], $row["numero2"], " = ", $row["resultado"], "</h3>";
        }

        $result -> close();
        $stmt -> close();
        $conexao -> close();
    }

    listarDados();

    echo "<a> <a href=index.html>Voltar</a>";
?>