<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Exercicio 01 - Aula 14</title>
</head>

<body>
  <?php

  require_once 'Video.php';
  require_once 'Gafanhoto.php';
  require_once 'Visualizacao.php';
  $v[0] = new Video("Aula 1 de POO");
  $v[1] = new Video("Aula 12 de PHP");
  $v[2] = new Video("Aula 15 de HTML5");
  $g[0] = new Gafanhoto("Tiago", 21, "M", "Kakou");
  $g[1] = new Gafanhoto("Creuza", 12, "F", "Creuzita");
  $vis[0] = new Visualizacao($g[0], $v[2]);
  $vis[1] = new Visualizacao($g[0], $v[1]);
  $vis[0]->avaliar();
  $vis[1]->avaliarPorc(85);


  var_dump($vis[0], $vis[1]);
  
  ?>


</body>

</html>