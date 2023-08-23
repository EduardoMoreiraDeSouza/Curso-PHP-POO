<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
</head>
<body>

    <pre>
    
        <?php

            require_once "./ContaBanco.php";
            $p1 = new ContaBanco(); // Jubileu
            $p2 = new ContaBanco(); // Creuza

            $p1 -> abrirConta('cc');
            $p1 -> setDono('Jubileu');
            $p1 -> setNumConta(1111);
            $p1 -> depositar(300);

            $p2 -> abrirConta('cp');
            $p2 -> setDono('Creuza');
            $p2 -> setNumConta(2222);
            $p2 -> depositar(500);
            $p2 -> sacar(100);


            print_r($p1);
            print_r($p2);

        ?>

    </pre>
    
</body>
</html>