<!doctype html>

<html>

<head>
    <meta charset="UTF-8">

    <title>Aula 02 - POO</title>
    
</head>

<body>

    <?php
    
        require_once './Caneta.php';

        $c1 = new Caneta;
        $c1 -> cor = 'Azul';
        $c1 -> ponta = 0.5;
        $c1 -> tampada = false;

        $c1 -> rabiscar();

        print_r($c1);
    
    ?>

</body>

</html>
