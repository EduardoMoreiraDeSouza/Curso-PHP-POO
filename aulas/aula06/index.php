<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - POO</title>
</head>
<body>
    <pre><?php

        require_once "./ControleRemoto.php";

        $c = new ControleRemoto;
        $c -> ligar();
        $c -> abrirMenu();
    
    ?></pre>
</body>
</html>