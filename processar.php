<?php
    require("calculadora.php");

    $numero1 = intval($_POST["numero1"]);
    $numero2 = intval($_POST["numero2"]);
    $operador = $_POST["operador"];

    $objCalculadora = new Calculadora($numero1, $numero2,$operador);
    $objCalculadora -> gravar();

    echo "Dados gravados com sucesso!";

    echo "<a> <a href=index.html>Voltar</a>";
?>